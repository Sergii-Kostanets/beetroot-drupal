<?php

namespace Drupal\beetroot_example\Services;

use Drupal\beetroot_example\TextCleanupPluginManager;
use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Entity\FieldableEntityInterface;

/**
 * Class doc comment.
 */
class TextCleanupService {

  /**
   * Description.
   *
   * @var \Drupal\beetroot_example\TextCleanupPluginManager
   */
  private TextCleanupPluginManager $manager;

  /**
   * Description.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  private ConfigFactoryInterface $config;

  /**
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  private EntityTypeManagerInterface $entityTypeManager;

  /**
   * Comment.
   */
  public function __construct(
    TextCleanupPluginManager $manager,
    ConfigFactoryInterface $config,
    EntityTypeManagerInterface $entityTypeManager
  ) {
    $this->manager = $manager;
    $this->config = $config;
    $this->entityTypeManager = $entityTypeManager;
  }

  /**
   * Clean up the text.
   *
   * @param string $text
   *   My comment.
   *
   * @return string
   *   My comment.
   *
   * @throws \Drupal\Component\Plugin\Exception\PluginException
   */
  public function cleanUp(string $text): string {
    $pluginDefinitions = $this->manager->getDefinitions();
    $enabledPlugins = $this->config->get('beetroot_example.text_cleanup.settings')->get('plugins');
    foreach (array_filter($enabledPlugins) as $pluginId) {
      /** @var \Drupal\beetroot_example\TextCleanupInterface $plugin */
      $plugin = $this->manager->createInstance($pluginId, $pluginDefinitions[$pluginId]);
      $text = $plugin->cleanUp($text);
    }
    return $text;

  }

  /**
   * Function doc comment.
   */
  public function cleanUpEntity(FieldableEntityInterface $entity) {
    $storage = $this->entityTypeManager->getStorage('beetroot_example');
    $configs = $storage->loadMultiple(['type' => $entity->bundle()]);
    if (empty($configs)) {
      return;
    }
    /** @var \Drupal\beetroot_example\BeetrootExampleInterface $config */
    $config = reset($configs);
    $plugins = $config->getPlugins();

    $pluginDefinitions = $this->manager->getDefinitions();
    foreach ($entity->getFields() as $field) {
      if ($field->getDataDefinition()->getType() === 'text_long') {
        $value = $entity->get($field->getName())->value;
        foreach (array_filter($plugins) as $pluginId) {
          /** @var \Drupal\beetroot_example\TextCleanupInterface $plugin */
          $plugin = $this->manager->createInstance($pluginId, $pluginDefinitions[$pluginId]);
          $value = $plugin->cleanUp($value);
        }
        $entity->set($field->getName(), $value);
      }
    }

  }

}
