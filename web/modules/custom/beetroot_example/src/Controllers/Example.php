<?php

namespace Drupal\beetroot_example\Controllers;

use Drupal\beetroot_example\Forms\ExampleForm;
use Drupal\Core\Controller\ControllerBase;
// use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Controller for example.
 */
class Example extends ControllerBase {

  /**
   * Function returns text.
   */
  public function view(NodeInterface $node) {
    return $this->entityTypeManager()
      ->getViewBuilder($node->getEntityTypeId())
      ->viewField($node->get('body'), 'teaser');
  }

  public function form() {
    $form_state = new FormState();
    $form = \Drupal::formBuilder()->buildForm(ExampleForm::class, $form_state);
    return $form;
  }

}