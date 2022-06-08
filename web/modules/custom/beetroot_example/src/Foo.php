<?php

namespace Drupal\beetroot_example;

class Foo {

  /**
   * @var FooServiceInterface[]
   */
  protected array $services;

  public function addService(FooServiceInterface $service) {
    $this->services[] = $service;
  }

  public function execute() {
    foreach ($this->services as $service) {
      $service->execute();
    }
  }

}
