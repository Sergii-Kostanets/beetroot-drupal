<?php

namespace Drupal\beetroot_example\Controllers;

use Symfony\Component\HttpFoundation\JsonResponse;

class Example {
    public function view() {
        return new JsonResponse(['hello' => 'world']);
    }
}