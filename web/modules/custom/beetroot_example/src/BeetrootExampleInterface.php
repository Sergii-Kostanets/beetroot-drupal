<?php

namespace Drupal\beetroot_example;

use Drupal\Core\Config\Entity\ConfigEntityInterface;

/**
 * Provides an interface defining a beetroot example entity type.
 */
interface BeetrootExampleInterface extends ConfigEntityInterface {

  /**
   * Function doc comment.
   */
  public function getType(): string;

  /**
   * Function doc comment.
   */
  public function getPlugins(): array;

}
