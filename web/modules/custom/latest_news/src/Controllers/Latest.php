<?php

namespace Drupal\latest_news\Controllers;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for homework module. Shows latest news.
 */
class Latest extends ControllerBase {

  /**
   * Function for homework module. Shows latest news.
   */
  public function content() {

    $nodeStorage = \Drupal::entityTypeManager()->getStorage('node');

    $ids = $nodeStorage->getQuery()
      ->condition('status', 1)
      ->condition('type', 'news')
      ->sort('created', 'DESC')
      ->range(0, 1)
      ->execute();
    $entity_type = 'node';
    $view_mode = 'default';
    $builder = \Drupal::entityTypeManager()->getViewBuilder($entity_type);
    $storage = \Drupal::entityTypeManager()->getStorage($entity_type);
    $node = $storage->load(reset($ids));
    $build = $builder->view($node, $view_mode);

    return $build;

  }

  /**
   * Function returns news from category by id.
   */
  public function category($category_id) {

    $nodeStorage = \Drupal::entityTypeManager()->getStorage('node');

    $ids = $nodeStorage->getQuery()
      ->condition('status', '1')
      ->condition('type', 'news')
      ->condition('field_category', $category_id)
      ->range(0, 10)
      ->sort('nid', 'DESC')
      ->execute();
    $entity_type = 'node';
    $view_mode = 'teaser';
    $builder = \Drupal::entityTypeManager()->getViewBuilder($entity_type);
    $storage = \Drupal::entityTypeManager()->getStorage($entity_type);
    $nodes = [];
    foreach ($storage->loadMultiple($ids) as $item) {
      $nodes[] = $item;
    }
    $build = $builder->viewMultiple($nodes, $view_mode);

    return $build;

  }

}
