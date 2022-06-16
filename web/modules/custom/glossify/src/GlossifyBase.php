<?php

namespace Drupal\glossify;

use Drupal\filter\Plugin\FilterBase;
use Drupal\Component\Utility\Html;
use Drupal\Core\Url;
use Drupal\Component\Utility\Unicode;

/**
 * Base implementation of tooltip filter type plugin.
 */
abstract class GlossifyBase extends FilterBase {

  /**
   * Convert terms in text to links.
   *
   * @param string $text
   *   The HTML text upon which the filter is acting.
   * @param array $terms
   *   The terms (array) to be replaced with links.
   *   structure: [$termname_lower => [
   *     ['id' => $id],
   *     ['name' => $term],
   *     ['name_norm' => $termname_lower],
   *     ['tip' => $tooltip],
   *   ]].
   * @param bool $case_sensitivity
   *   Case sensitive replace.
   * @param bool $first_only
   *   Replace only first match.
   * @param string $displaytype
   *   Type of tooltip/link.
   * @param bool $tooltip_truncate
   *   Whether to truncate tooltip.
   * @param string $urlpattern
   *   URL pattern to create links.
   *
   * @return string
   *   The original HTML with the term string replaced by links.
   */
  protected function parseTooltipMatch($text, array $terms, $case_sensitivity, $first_only, $displaytype, $tooltip_truncate, $urlpattern, $langcode) {
    // Create dom document.
    $html_dom = Html::load($text);
    $xpath = new \DOMXPath($html_dom);
    $pattern_parts = $replaced = [];
    $normalized_terms = [];

    // Transform terms into normalized search pattern.
    foreach ($terms as $term) {
      $term_norm = preg_replace('/\s+/', ' ', preg_quote(trim($term->name_norm)));
      $term_norm = preg_replace('#/#', '\/', $term_norm);
      $pattern_parts[] = preg_replace('/ /', '\\s+', $term_norm);

      // We need to keep track of the original vs normalized term names for
      // later.
      $normalized_terms[stripslashes($term_norm)] = $term->name_norm;
    }

    asort($pattern_parts);

    // Process HTML.
    $text_nodes = $xpath->query('//text()[not(ancestor::a) and not(ancestor::span[@class="glossify-exclude"])]');
    foreach ($text_nodes as $original_node) {
      $text = $original_node->nodeValue;
      $matches = [];
      foreach ($pattern_parts as $pattern_part) {
        $pattern = '/\b(' . $pattern_part . ')\b/';
        if (!$case_sensitivity) {
          $pattern .= 'i';
        }
        preg_match_all($pattern, $text, $matches_part, PREG_OFFSET_CAPTURE);
        if (count($matches_part[0])) {
          foreach ($matches_part[0] as $match_part) {
            $matches[$match_part[1]] = $match_part[0];
          }
        }
      }
      // Sort by position in text.
      ksort($matches);

      // Remove terms inside other terms (Example: 'Ipsum' in 'Lorem Ipsum')
      foreach ($matches as $key => $match) {
        $matchesToUnset = array_filter($matches, function ($k) use($key, $match, $matches) {
          $end_of_match = $key + strlen($match);
          // Check if the match isn't itself and is located inside the current match
          if ($key !== $k && ( $k < $end_of_match && $k >= $key)) {
            return $k;
          }
        }, ARRAY_FILTER_USE_KEY);

        foreach ($matchesToUnset as $keyToUnset => $unset) {
          unset($matches[$keyToUnset]);
        }
      }

      if (count($matches) > 0) {

        $offset = $loop_count = 0;
        $parent = $original_node->parentNode;
        $refnode = $original_node->nextSibling;

        $current_path = $this->currentPath();
        $parent->removeChild($original_node);
        foreach ($matches as $term_pos => $term_txt) {
          $loop_count += 1;
          $term_txt = preg_replace('/\s+/', ' ', $term_txt);
          $terms_key = $case_sensitivity ? $term_txt : mb_strtolower($term_txt);

          // Works around an issue where terms can't be found when comparing a
          // match to the original term name.
          $term = $terms[$terms_key] ?? $terms[$normalized_terms[$terms_key]];

          // Insert any text before the term instance.
          $prefix = mb_substr($text, $offset, $term_pos - $offset);
          $parent->insertBefore($html_dom->createTextNode($prefix), $refnode);

          $dom_fragment = $html_dom->createDocumentFragment();

          if ($current_path == str_replace('[id]', $term->id, $urlpattern)) {
            // Reinsert the found match if whe are on the page
            // this match points to.
            $dom_fragment->appendXML($term_txt);
          }
          elseif ($first_only && in_array(strtolower($term_txt), array_map('strtolower',($replaced)))) {
            // Reinsert the found match if only first match must be parsed.
            $dom_fragment->appendXML($term_txt);
          }
          else {
            $tip = '';
            if ($displaytype == 'links' || $displaytype == 'tooltips_links') {

              // Insert the matched term instance as link.
              if ($displaytype == 'tooltips_links') {
                $tip = $this->sanitizeTip($term->tip, $tooltip_truncate);
              }
              if (\Drupal::hasContainer()) {
                $tipurl = Url::fromUri('internal:' . str_replace('[id]', $term->id, $urlpattern));
              }
              else {
                $tipurl = str_replace('[id]', $term->id, $urlpattern);
              }
              $word_link = [
                '#theme' => 'glossify_link',
                '#word' => $term_txt,
                '#tip' => $tip,
                '#tipurl' => $tipurl,
              ];
              $word = $this->renderLink($word_link);
            }
            else {
              // Has to be 'tooltips'.
              // Insert the matched term instance as tooltip.
              $tip = $this->sanitizeTip($term->tip, $tooltip_truncate);

              $word_tip = [
                '#theme' => 'glossify_tooltip',
                '#word' => $term_txt,
                '#tip' => $tip,
                '#langcode' => $langcode,
              ];
              $word = $this->renderTip($word_tip);
            }
            $dom_fragment->appendXML($word);
            $replaced[] = $term_txt;
          }
          $parent->insertBefore($dom_fragment, $refnode);

          $offset = $term_pos + mb_strlen($term_txt);

          // Last match, append remaining text.
          if ($loop_count == count($matches)) {
            $suffix = mb_substr($text, $offset);
            $parent->insertBefore($html_dom->createTextNode($suffix), $refnode);
          }
        }
      }
    }
    return Html::serialize($html_dom);
  }

  /**
   * Render tip for found match.
   */
  protected function renderTip($word_tip) {
    return trim(render($word_tip));
  }

  /**
   * Render link for found match.
   */
  protected function renderLink($word_link) {
    return trim(render($word_link));
  }

  /**
   * Get current path.
   */
  protected function currentPath() {
    return \Drupal::service('path.current')->getPath();
  }

  /**
   * Cleanup and truncate tip text.
   *
   * @param string $tip
   * @param bool $truncate_tooltip
   *
   * @return string
   */
  private function sanitizeTip($tip, $tooltip_truncate) {
    // Get rid of HTML.
    $tip = strip_tags($tip);

    // Maximise tooltip text length.
    if ($tooltip_truncate) {
      $tip = Unicode::truncate($tip, 300, TRUE, TRUE);
    }
    return $tip;
  }

}
