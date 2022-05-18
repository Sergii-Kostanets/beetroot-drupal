<?php

namespace Drupal\beetroot_example\Forms;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class BeetrootExampleSettingsForm extends ConfigFormBase {

  /**
   * @inheritDoc
   */
  protected function getEditableConfigNames() {
    return ['beetroot_example.settings'];
  }

  /**
   * @inheritDoc
   */
  public function getFormId() {
    return 'beetroot_example_settings';
  }

  /**
   * @inheritDoc
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('beetroot_example.settings');

    $form['settings'] = [
      '#title' => $this->t('Beetroot Academy Settings'),
      '#type' => 'details',
      '#open' => TRUE,
      ];
    $form['settings']['enabled'] = [
      '#title' => $this->t('Enable Beetroot Academy Functions'),
      '#type' => 'checkbox',
      '#default_value' => $config->get('enabled'),
    ];
    $form['settings']['number'] = [
      '#title' => $this->t('Some important number (title)'),
      '#type' => 'number',
      '#default_value' => $config->get('number'),
      '#min' => 1,
      '#max' => 15,
      '#step' => 1,
      '#states' => [
        'visible' => [
          ':input[name="enabled"]' => ['checked' => TRUE],
        ],
      'description' => 'If number is 10, need to enter text!'
      ],
    ];
    $form['settings']['text'] = [
      '#title' => $this->t('Some text (title)'),
      '#type' => 'textfield',
      '#default_value' => $config->get('text'),
      '#states' => [
        'enabled' => [
          ':input[name="number"]' => ['value' => 10],
        ],
      ],
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->messenger()->addStatus($this->t('The configuration options have been saved!'));

    $this->config('beetroot_example.settings')
      ->set('enabled', $form_state->getValue('enabled'))
      ->set('number', $form_state->getValue('number'))
      ->set('text', $form_state->getValue('text'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
