<?php

namespace Drupal\beetroot_example;

/**
 * Comment.
 */
class Foo {

  /**
   * Short description.
   *
   * @var FooServiceInterface[]
   */
  protected array $services;

  /**
   * Comment.
   */
  public function addService(FooServiceInterface $service) {
    $this->services[] = $service;
  }

  /**
   * Comment.
   */
  public function execute() {
    foreach ($this->services as $service) {
      $service->execute();
    }
  }

}
