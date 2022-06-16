<?php

namespace Drupal\Tests\glossify\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\glossify\GlossifyBase;
use Drupal\Component\Utility\Unicode;

/**
 * @coversDefaultClass \Drupal\glossify\GlossifyBase
 *
 * @group glossify
 */
class GlossifyBaseTest extends UnitTestCase {

  /**
   * @covers ::parseTooltipMatch
   * @dataProvider parseTooltipMatchData
   */
  public function testParseTooltipMatch($text, $terms, $case_sensitivity, $first_only, $displaytype, $tooltip_truncate, $urlpattern, $output) {
    // Instantiate dummy object.
    $dummyTooltip = new DummyTooltip(
      $terms,
      $case_sensitivity,
      $first_only,
      $displaytype,
      $tooltip_truncate,
      $urlpattern
    );
    $replacement = $dummyTooltip->process($text, 'nl');
    $this->assertEquals($replacement, $output);
  }

  /**
   */
  public function parseTooltipMatchData() {
    $term = new \stdClass();
    $term->id = '1';
    $term->name = 'RT';
    $term->name_norm = 'RT';
    $term->tip = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
    $data = [
      'set1' => [
        'text' => 'Simple plain text with RT as replacement term',
        'terms' => [$term->name_norm => $term],
        'case_sensitivity' => TRUE,
        'first_only' => FALSE,
        'displaytype' => 'tooltips',
        'tooltip_truncate' => FALSE,
        'urlpattern' => '',
        'output' => 'Simple plain text with <span title="' . $term->tip . '">RT</span> as replacement term',
      ],
      'set2' => [
        'text' => '<p>Simple HTML with <b>RT</b> and rt as replacement term</p>',
        'terms' => [$term->name_norm => $term],
        'case_sensitivity' => TRUE,
        'first_only' => FALSE,
        'displaytype' => 'tooltips_links',
        'tooltip_truncate' => FALSE,
        'urlpattern' => '/random/testpattern',
        'output' => '<p>Simple HTML with <b><a href="/random/testpattern" title="' . $term->tip . '">RT</a></b> and rt as replacement term</p>',
      ],
      'set3' => [
        'text' => 'Simple plain text with RT as replacement term',
        'terms' => [$term->name_norm => $term],
        'case_sensitivity' => TRUE,
        'first_only' => FALSE,
        'displaytype' => 'tooltips',
        'tooltip_truncate' => FALSE,
        'urlpattern' => '',
        'output' => 'Simple plain text with <span title="' . $term->tip . '">RT</span> as replacement term',
      ],
      'set4' => [
        'text' => 'Simple plain text with RT as replacement term',
        'terms' => [$term->name_norm => $term],
        'case_sensitivity' => TRUE,
        'first_only' => FALSE,
        'displaytype' => 'tooltips',
        'tooltip_truncate' => TRUE,
        'urlpattern' => '',
        'output' => 'Simple plain text with <span title="' . Unicode::truncate($term->tip, 300, TRUE, TRUE) . '">RT</span> as replacement term',
      ],
    ];
    return $data;
  }

}

/**
 * Dummy tooltip object.
 *
 * Makes testing GlossifyBase possible as its base class.
 */
class DummyTooltip extends GlossifyBase {

  /**
   * Taxonomy terms.
   *
   * @var array
   */
  private $terms;

  /**
   * Cas sensitivity.
   *
   * @var bool
   */
  private $caseSensitivity;

  /**
   * First only.
   *
   * @var bool
   */
  private $firstOnly;

  /**
   * Displaytype.
   *
   * @var string
   */
  private $displaytype;

  /**
   * Truncate tooltip.
   *
   * @var bool
   */
  private $tooltipTruncate;

  /**
   * Urlpattern.
   *
   * @var string
   */
  private $urlpattern;

  /**
   * Constructor.
   *
   * @param array $terms
   *   List of words with metadata.
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
   */
  public function __construct(array $terms, $case_sensitivity, $first_only, $displaytype, $tooltip_truncate, $urlpattern) {
    $this->terms = $terms;
    $this->caseSensitivity = $case_sensitivity;
    $this->firstOnly = $first_only;
    $this->displaytype = $displaytype;
    $this->tooltipTruncate = $tooltip_truncate;
    $this->urlpattern = $urlpattern;
  }

  /**
   * {@inheritdoc}
   */
  protected function renderTip($word_tip) {
    return '<span title="' . $word_tip['#tip'] . '">' . $word_tip['#word'] . '</span>';
  }

  /**
   * {@inheritdoc}
   */
  protected function renderLink($word_link) {
    return '<a href="' . $word_link['#tipurl'] . '"  title="' . $word_link['#tip'] . '">' . $word_link['#word'] . '</a>';
  }

  /**
   * {@inheritdoc}
   */
  protected function currentPath() {
    return '/some/internal/path';
  }

  /**
   * {@inheritdoc}
   */
  public function process($text, $langcode) {
    return $this->parseTooltipMatch(
      $text,
      $this->terms,
      $this->caseSensitivity,
      $this->firstOnly,
      $this->displaytype,
      $this->tooltipTruncate,
      $this->urlpattern,
      $langcode
    );
  }

}
