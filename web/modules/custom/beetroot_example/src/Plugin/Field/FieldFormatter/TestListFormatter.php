<?php

namespace Drupal\beetroot_example\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Description.
 *
 * @FieldFormatter(
 *   id = "test_list",
 *   label = @Translation("Test List"),
 *   field_types = {
 *     "list_integer",
 *     "list_float",
 *     "list_string",
 *   }
 * )
 */
class TestListFormatter extends FormatterBase {

  /**
   * Description.
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $output = [];
    foreach ($items as $item) {
      $output[] = ['#markup' => $item->value];
    }
    return $output;
  }

}
