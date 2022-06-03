<?php

namespace Drupal\beetroot_example\Controllers;

use Drupal\beetroot_example\Forms\ExampleForm;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Form\FormState;
use Drupal\Core\Security\TrustedCallbackInterface;
use Drupal\node\Entity\Node;

/**
 * Controller for example.
 */
class Example extends ControllerBase implements TrustedCallbackInterface {

  /**
   * Function returns text. Work.
   */
  public function view() {
    $config = \Drupal::config('beetroot_example.settings');
    $nodes = Node::loadMultiple();
    $output = [];
    $i = 0;
    foreach ($nodes as $node) {
      $i++;
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
      $body = '';
      if ($node->hasField('body')) {
        $body = $node->get('body')->view(['label' => 'hidden']);
      }
      $output[] = [
        '#theme' => 'beetroot_example_news',
        '#title' => $node->label(),
        '#content' => $body,
        '#links' => $links,
        '#type' => $node->bundle(),
        '#attached' => [
          'library' => [
            'beetroot_example/custom',
          ],
        ],
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

  public function cacheExample() {
    $response = \Drupal::httpClient()
      ->request('GET', 'https://api.coindesk.com/v1/bpi/currentprice.json');
    //    $response = \Drupal::httpClient()->request('GET', 'http://www.boredapi.com/api/activity');
    //    $response = \Drupal::httpClient()->request('GET', 'https://api.agify.io?name=meelad');
    //    $response = \Drupal::httpClient()->request('GET', 'https://catfact.ninja/fact');
    if ($response->getStatusCode() !== 200) {
      return [];
    }
    $fact = json_decode($response->getBody());
    return [
      '#lazy_builder' => [static::class . '::getCurrentTime', []],
      '#create_placeholder' => TRUE,

//      '#theme' => 'cats_fact',
//      '#rate' => $fact->bpi->USD->rate_float,
    ];
  }

  public static function getCurrentTime() {
    return [
      '#markup' => \Drupal::time()->getCurrentTime(),
      '#cache' => [
        'max-age' => 0,
      ],
    ];
  }

  public static function trustedCallbacks() {
    return ['getCurrentTime'];
  }

}
