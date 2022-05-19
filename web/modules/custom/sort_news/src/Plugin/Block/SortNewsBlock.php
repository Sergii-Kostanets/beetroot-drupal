<?php

namespace Drupal\sort_news\Plugin\Block;

use Drupal\Core\Block\BlockBase;

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
   * Description for function.
   *
   * @inheritDoc
   */
  public function build() {
    $form = \Drupal::formBuilder()
      ->getForm('\Drupal\sort_news\Form\SortNewsForm');
    return $form;
  }

}
