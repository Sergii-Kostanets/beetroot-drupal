<?php

namespace Drupal\beetroot_example\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Short description.
 *
 * @Block(
 *   id = "example_block",
 *   admin_label = "Example block",
 *   category = "Beetroot Example",
 * )
 */
class ExampleBlock extends BlockBase {

  /**
   * {@inheritDoc}
   */
  public function defaultConfiguration() {
    return ['some_config' => ''];
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form['some_config'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Some config'),
      '#default_value' => $this->configuration['some_config'],
      '#description' => $this->t("Some text to show in block."),
      '#weight' => 50,
    ];
    return parent::buildConfigurationForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    $this->configuration['some_config'] = $form_state->getValue('some_config');
    parent::submitConfigurationForm($form, $form_state);
  }

  /**
   * Description.
   *
   * @inheritDoc
   */
  public function build() {
    return ['#markup' => $this->configuration['some_config']];
  }

  /**
   * Some description.
   */
  protected function blockAccess(AccountInterface $account) {
    return AccessResult::allowedIfHasPermission($account, 'access beetroot example package');
  }

}