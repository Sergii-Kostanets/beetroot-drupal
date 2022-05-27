<?php

namespace Drupal\beetroot_example\Plugin\TextCleanup;

use Drupal\beetroot_example\Annotation\TextCleanup;
use Drupal\beetroot_example\TextCleanupPluginBase;

/**
 * Plugin implementation of the text_cleanup.
 *
 * @TextCleanup(
 *   id = "remove_bad_words",
 *   label = @Translation("Remove bad words"),
 *   description = @Translation("Removes bad words from the text.")
 * )
 */
class RemoveBadWords extends TextCleanupPluginBase {

  /**
   * {@inheritdoc}
   */
  public function cleanUp(string $text): string {
    $words = ['bad'];
    $replace = ['good'];
    return str_replace($words, $replace, $text);
  }
}
