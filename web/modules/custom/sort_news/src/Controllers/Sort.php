<?php

namespace Drupal\sort_news\Controllers;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for homework module. Shows sort news.
 */
class Sort extends ControllerBase {

  /**
   * Function for homework module. Shows sort news.
   */
  public function content() {

    $config = \Drupal::config('sort_news.settings');

    $nodeStorage = \Drupal::entityTypeManager()->getStorage('node');

    $ids = $nodeStorage->getQuery()
      ->condition('status', 1)
      ->condition('type', 'news')
      ->pager(6)
      ->sort($config->get('sorted'), 'DESC')
      ->execute();
    $entity_type = 'node';
    $view_mode = 'teaser';
    $builder = \Drupal::entityTypeManager()->getViewBuilder($entity_type);
    $storage = \Drupal::entityTypeManager()->getStorage($entity_type);
    $nodes = [];
    foreach ($storage->loadMultiple($ids) as $item) {
      $nodes[] = $item;
    }
    return $builder->viewMultiple($nodes, $view_mode);

  }

}
