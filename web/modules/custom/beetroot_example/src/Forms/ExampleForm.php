<?php

namespace Drupal\beetroot_example\Forms;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form example from lesson 35.
 */
class ExampleForm extends FormBase {

  /**
   * @inheritDoc
   */
  public function getFormId() {
    return 'beetroot_example_form';
  }

  /**
   * @inheritDoc
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['title'] = [
      '#type' = 'textfield',
    ];
    $form['text'] = [
      '#type' = 'textarea',
    ];

    $form['pass'] = [
      '#type' = 'password',
    ];
    return $form;
  }

  /**
   * @inheritDoc
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // TODO: Implement submitForm() method.
  }

}