<?php

namespace Drupal\beetroot_example\Services;

use Drupal\beetroot_example\TextCleanupPluginManager;
use Drupal\Core\Config\ConfigFactoryInterface;

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
   * Comment.
   */
  public function __construct(TextCleanupPluginManager $manager, ConfigFactoryInterface $config) {
    $this->manager = $manager;
    $this->config = $config;
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

}
