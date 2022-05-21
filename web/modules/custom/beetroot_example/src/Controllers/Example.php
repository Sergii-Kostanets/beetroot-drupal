<?php

namespace Drupal\beetroot_example\Controllers;

use Drupal\beetroot_example\Forms\ExampleForm;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Form\FormState;
use Drupal\node\Entity\Node;

/**
 * Controller for example.
 */
class Example extends ControllerBase {

  /**
   * Function returns text. Work.
   */
  public function view() {
    xdebug_break();
    $config = \Drupal::config('beetroot_example.settings');
    $nodes = Node::loadMultiple();
    $output = [];
    foreach ($nodes as $node) {
      $links = [];
      if ($node->hasField('field_related_content')) {
        /** @var \Drupal\node\NodeInterface[] $related */
        $related = $node->get('field_related_content')->referencedEntities();
        foreach ($related as $item) {
          $links[] = [
            '#theme' => 'beetroot_example_news_link',
            '#url' => $item->toUrl('canonical')->toString(),
            '#title' => $item->label(),
          ];
        }
      }
      $output[] = [
        '#theme' => 'beetroot_example_news',
        '#title' => $node->label(),
//        '#content' => $node->get('body')->value,
        '#content' => $node->get('title')->value,
        '#links' => $links,
      ];
    }
    return $output;
  }

  /**
   * Form though controller. Work.
   */
  public function form() {
    $form_state = new FormState();
    $form = \Drupal::formBuilder()->buildForm(ExampleForm::class, $form_state);
    return $form;
  }

}
