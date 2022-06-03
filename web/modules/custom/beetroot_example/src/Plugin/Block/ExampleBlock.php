<?php

namespace Drupal\beetroot_example\Plugin\Block;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Cache\Cache;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\node\Entity\Node;

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
//    \Drupal::request()->query->get('flag');
//    /** @var \Drupal\Core\Path\PathMatcherInterface $path_matcher */
//    $path_matcher = \Drupal::service('path.matcher');
//    $type = $path_matcher->isFrontPage() ? 'page' : 'article';
    $type = \Drupal::currentUser()->isAnonymous() ? 'page' : 'article';
    $storage = \Drupal::entityTypeManager()->getStorage('node');
    $ids = $storage->getQuery()
      ->condition('status', 1)
      ->condition('type', $type)
      ->sort('changed', 'DESC')
      ->range(0, 1)
      ->execute();
    $node = $storage->load(reset($ids));
    return ['#markup' => $node->label()];
  }

  public function getCacheContexts() {
    return [
//      'url.path.is_front',
      'user.roles:anonymous',
    ];
  }

  public function getCacheTags() {
    return ['node_list'];
  }

  public function getCacheMaxAge() {
    return 60 * 60 * 24;
  }

  /**
   * Some description.
   */
  protected function blockAccess(AccountInterface $account) {
    return AccessResult::allowedIfHasPermission($account, 'access beetroot example package');
  }

}
