<?php

namespace Drupal\latest_news\Controllers;

use Drupal\Core\Controller\ControllerBase;

class Latest extends ControllerBase {

    public function content() {

        // ____________________ it works:

            // return [
            //     '#type' => 'markup',
            //     '#markup' => $this->t('Hello, World!'),
            // ];

        // ____________________ it works:

        // $nid = 18;
        // $entity_type = 'node';
        // $view_mode = 'teaser';

        // $view_builder = \Drupal::entityTypeManager()->getViewBuilder($entity_type);
        // $storage = \Drupal::entityTypeManager()->getStorage($entity_type);
        // $node = $storage->load($nid);
        // $build = $view_builder->view($node, $view_mode);

        // return $build;

        // _______________________________________

        // $nid = 18;
        // $entity_type = 'node';
        // $view_mode = 'teaser';

        // $builder = \Drupal::entityTypeManager()->getViewBuilder($entity_type);
        // $storage = \Drupal::entityTypeManager()->getStorage($entity_type);
        // $node = $storage->load($nid);
        // $build = $builder->view($node, $view_mode);
        // $output = render($build);

        // return $output;

        // ___________________ Ann:

        $nodeStorage = \Drupal::entityTypeManager()->getStorage('node');

        $ids = $nodeStorage->getQuery()
        ->condition('status', 1)
        ->condition('type', 'news') // type = bundle id (machine name)
        ->sort('created', 'DESC') // sorted by time of creation
        ->range(0,1)
        ->execute();

        $entity_type = 'node';
        $view_mode = 'teaser';
        $builder = \Drupal::entityTypeManager()->getViewBuilder($entity_type);
        $storage = \Drupal::entityTypeManager()->getStorage($entity_type);
        $node = $storage->load(reset($ids));
        $build = $builder->view($node, $view_mode);

        return $build;

    }

        public function category($category_id) {

        // Ann again:

        // $nodeStorage = \Drupal::entityTypeManager()->getStorage('node');

        // $ids = $nodeStorage->getQuery()
        // ->condition('status', 1)
        // ->condition('type', 'news')
        // ->condition('field_news_category.entity:taxonomy_term.tid', $category_id)
        // ->execute();

        // $entity_type = 'node';
        // $view_mode = 'full';
        // $builder = \Drupal::entityTypeManager()->getViewBuilder($entity_type);
        // $storage = \Drupal::entityTypeManager()->getStorage($entity_type);
        // $node = $storage->loadMultiple($ids);
        // $build = $builder->viewMultiple($node, $view_mode);
        // return $build;

        // Evhen:

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