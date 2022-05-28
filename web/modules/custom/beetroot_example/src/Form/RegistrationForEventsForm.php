<?php

namespace Drupal\beetroot_example\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form of registration for webinars on web technologies.
 */
class RegistrationForEventsForm extends FormBase {

  /**
   * Comment.
   *
   * @inheritDoc
   */
  public function getFormId(): string {
    return 'beetroot_example_registration_for_events';
  }

  /**
   * Comment.
   *
   * @inheritDoc
   */
  public function buildForm(array $form, FormStateInterface $form_state): array {
    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
    ];

    $form['surname'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Surname'),
    ];

    $form['email'] = [
      '#type' => 'email',
      '#title' => $this
        ->t('Email'),
    ];

    $form['direction'] = [
      '#type' => 'select',
      '#title' => $this
        ->t('Direction'),
      '#options' => [
        'backend' => $this
          ->t('Backend'),
        'frontend' => $this
          ->t('Frontend'),
        'design' => $this
          ->t('Design'),
      ],
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }

  /**
   * Comment.
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);

    if (strlen($form_state->getValue('name')) < 1) {
      $form_state->setErrorByName('title', $this->t('This field cannot be empty.'));
    }

    if (strlen($form_state->getValue('surname')) < 1) {
      $form_state->setErrorByName('title', $this->t('This field cannot be empty.'));
    }
  }

  /**
   * Comment.
   *
   * @inheritDoc
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $message = \Drupal::messenger();
    $message->addMessage('Thank you you are registered!');
  }

}
