<?php

namespace Drupal\beetroot_example\Forms;

use Drupal\Component\Utility\Random;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;

/**
 * Form example from lesson 35.
 */
class ExampleForm extends FormBase {

  /**
   * Unique return name.
   *
   * @inheritDoc
   */
  public function getFormId() {
    return 'beetroot_example_form';
  }

  /**
   * Form building.
   *
   * @inheritDoc
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['group'] = [
      '#title' => $this->t('Example of form'),
      '#type' => 'details',
      '#open' => TRUE,
    ];
    $form['group']['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
      '#maxlength' => 10,
      '#default_value' => (new Random())->word(10),
      '#attributes' => [
        'class' => ['first_class', 'second_class'],
        'id' => 'some_id',
        'data-foo' => 'bar',
      ],
    ];
    $form['group']['text'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Long text'),
      '#default_value' => (new Random())->paragraphs($paragraph_count = 2),
    ];
    $form['group']['pass'] = [
      '#type' => 'password',
      '#title' => $this->t('Pass'),
      '#description' => $this->t('Some password'),
      '#prefix' => $this->t('Enter some'),
      '#suffix' => $this->t('Hope your password is secure. Click:'),
    ];
    $form['group']['actions'] = [
      '#type' => 'actions',
    ];
    $form['group']['actions']['submit'] = [
      '#type' => 'submit',
      '#tag' => 'div',
      '#value' => $this->t('Save'),
    ];
    $form['group']['actions']['preview'] = [
      '#type' => 'submit',
      '#tag' => 'div',
      '#value' => $this->t('preview'),
      '#submit' => [
        '::submitPreview',
      ],
    ];
    return $form;
  }

  /**
   * Validates user-submitted form data in the $form_state.
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $text = $form_state->getValue('text');
    if (strlen($text) < 20) {
      $form_state->setErrorByName('text', $this->t('Text must be more then 20 symbols'));
    }
  }

  /**
   * Submit button.
   *
   * @inheritDoc
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $node = Node::create([
      'type' => 'article',
      'title' => $form_state->getValue('name'),
      'body' => $form_state->getValue('text'),
    ]);
    $node->save();
    $form_state->setRedirect('entity.node.canonical', ['node' => $node->id()]);
    \Drupal::messenger()->addStatus('Node added.');
  }

  /**
   *
   */
  public function submitPreview(array &$form, FormStateInterface $form_state) {
    \Drupal::messenger()->addStatus('Look at the preview.');
    $node = Node::create([
      'type' => 'article',
      'title' => $form_state->getValue('name'),
      'body' => $form_state->getValue('text'),
    ]);
  }

}
