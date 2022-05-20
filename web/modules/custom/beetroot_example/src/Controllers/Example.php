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
    $config = \Drupal::config('beetroot_example.settings');
    $nodes = Node::loadMultiple();
    $output = [];
    foreach ($nodes as $node) {
// dont work
//      $links = [];
//      foreach ($node->get('field_related_content') as $item) {
//        $links[] = [
//            '#theme' => 'beetroot_example_news_link',
//            '#url' => 'https://example.org/2',
//            '#title' => 'Link 2',
//          ];
//      }
// dont work
      $output[] = [
        '#theme' => 'beetroot_example_news',
        '#title' => $node->label(),
        '#content' => 'Test content 1',
// dont work
//        '#content' => $node->get('body')->value,
// dont work
        '#links' => [
          [
            '#theme' => 'beetroot_example_news_link',
            '#url' => 'https://example.org/1',
            '#title' => 'Link 1',
          ],
          [
            '#theme' => 'beetroot_example_news_link',
            '#url' => 'https://example.org/2',
            '#title' => 'Link 2',
          ],
        ],
      ];
    }
    return [
      [
        '#theme' => 'beetroot_example_news',
        '#title' => 'Test title 1',
        '#content' => 'Test content 1',
        '#links' => [
          [
            '#theme' => 'beetroot_example_news_link',
            '#url' => 'https://example.org/1',
            '#title' => 'Link 1',
          ],
          [
            '#theme' => 'beetroot_example_news_link',
            '#url' => 'https://example.org/2',
            '#title' => 'Link 2',
          ],
        ],
      ],
      [
        '#theme' => 'beetroot_example_news',
        '#title' => 'Test title 2',
        '#content' => 'Test content 2',
        '#links' => [
          [
            '#theme' => 'beetroot_example_news_link',
            '#url' => 'https://example.org/1',
            '#title' => 'Link 1',
          ],
          [
            '#theme' => 'beetroot_example_news_link',
            '#url' => 'https://example.org/2',
            '#title' => 'Link 2',
          ],
        ],
      ],
    ];
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
