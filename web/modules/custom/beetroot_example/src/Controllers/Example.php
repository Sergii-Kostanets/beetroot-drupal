<?php

namespace Drupal\beetroot_example\Controllers;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Controller for example.
 */
class Example extends ControllerBase {

  /**
   * Function returns text.
   */
  public function view() {
    $users = $this->entityTypeManager()->getStorage('user')->loadMultiple();
    $names = [];
    foreach ($users as $user) {
      $names[] = $user->label();
    }
    return new JsonResponse(['hello' => 'world', 'users' => $names]);
  }

}
