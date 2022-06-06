<?php

namespace Drupal\beetroot_example\Controllers;

use Drupal\beetroot_example\Forms\ExampleForm;
use Drupal\Component\Serialization\Json;
use Drupal\Component\Utility\Html;
use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\HtmlCommand;
use Drupal\Core\Ajax\MessageCommand;
use Drupal\Core\Ajax\RedirectCommand;
use Drupal\Core\Ajax\SettingsCommand;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Form\FormState;
use Drupal\Core\Security\TrustedCallbackInterface;
use Drupal\Core\Url;
use Drupal\node\Entity\Node;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

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

  /**
   * Provides autocomplete for nodes.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The request object.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   The json response.
   */
  public function autocomplete(Request $request) {
    $q = $request->query->get('q');
    $storage = $this->entityTypeManager()->getStorage('node');
    $ids = $storage->getQuery()
      ->condition('title', "%{$q}%", 'LIKE')
      ->condition('status', 1)
      ->execute();
    if (empty($ids)) {
      return new JsonResponse([]);
    }
    $nodes = $storage->loadMultiple($ids);
    $results = [];
    foreach ($nodes as $node) {
      $results[] = $node->label() . ' (' . $node->id() . ')';
    }

    return new JsonResponse($results);
  }
  /**
   * Some comment.
   */
  public function cacheExample() {
    $response = \Drupal::httpClient()->request('GET', 'https://api.coindesk.com/v1/bpi/currentprice.json');
    if ($response->getStatusCode() !== 200) {
      return [];
    }
    $fact = json_decode($response->getBody());
    return [
      '#cache' => [
        'max-age' => -1,
      ],
      [
        '#theme' => 'bitcoin_price',
        '#rate' => $fact->bpi->USD->rate_float,
        '#time' => \Drupal::time()->getCurrentTime(),
        '#cache' => [
          'max-age' => -1,
        ],
      ],
      [
        '#lazy_builder' => [static::class . '::getCurrentTime', []],
        '#create_placeholder' => TRUE,
      ],
    ];
  }

  /**
   * Some comment.
   */
  public static function getCurrentTime() {
    return [
      '#markup' => \Drupal::time()->getCurrentTime(),
      '#cache' => [
        'max-age' => 0,
      ],
    ];
  }

  /**
   * Some comment.
   */
  public static function trustedCallbacks() {
    return ['getCurrentTime'];
  }

  /**
   * Some comment.
   */
  public function api(Request $request) {
    $response = new AjaxResponse();
    $element = [
      '#theme' => 'item_list',
      '#items' => ['first', 'second'],
      '#attributes' => ['id' => Html::getUniqueId('items-list')],
      '#attached' => [
        'library' => ['beetroot_example/custom'],
        'drupalSettings' => [
          'foo' => 'bar',
        ],
      ],
    ];
    $response->addCommand(new HtmlCommand('#ajax-wrapper', $element));
    $response->addCommand(new MessageCommand('Test massage.'));
    return $response;
  }

  /**
   * Some comment.
   */
  public function ajaxLink() {
    return [
      [
        '#theme' => 'container',
        '#attributes' => ['id' => 'ajax-wrapper'],
      ],
      [
        '#type' => 'link',
        '#title' => $this->t('Ajax link'),
        '#url' => Url::fromRoute('example_route_api'),
        '#attributes' => ['class' => ['use-ajax']],
      ],
    ];
  }

}
