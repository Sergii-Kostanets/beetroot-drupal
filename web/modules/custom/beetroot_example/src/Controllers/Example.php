<?php

namespace Drupal\beetroot_example\Controllers;

use Drupal\beetroot_example\Forms\ExampleForm;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Form\FormState;

/**
 * Controller for example.
 */
class Example extends ControllerBase {

  /**
   * Function returns text. Work.
   */
  public function view() {
    $config = \Drupal::config('beetroot_example.settings');
    return [
      '#theme' => 'beetroot_example_news',
      '#title' => 'Test title',
      '#content' => 'Test content',
      '#link' => 'http://example.org',
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
