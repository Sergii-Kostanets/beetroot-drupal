<?php

use Drupal\Core\Block\BlockBase;

namespace Drupal\sort_news\Plugin\Block;

/**
 * Displays block.
 *
 * @Block (
 *  id = "sort_news_block",
 *  admin_label = @Translation("Sort news block"),
 * )
 */
class SortNewsBlock extends BlockBase {

  /**
   * @inheritDoc
   */
  public function build() {
    $form = \Drupal::formBuilder()
      ->getForm('\Drupal\sort_news\Form\SortNewsForm');
    return $form;
  }

}
