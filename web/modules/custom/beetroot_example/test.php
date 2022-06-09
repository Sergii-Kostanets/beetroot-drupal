<?php

function testUserIsContentEditor() {
  \PHPUnit\Framework\assertTrue(user_is_content_editor(\Drupal\user\Entity\User::create([
    'user_is_content_editor' => TRUE,
    'roles' => ['user'],
  ])));
}

function testUserIsContentEditor() {
  \PHPUnit\Framework\assertFalse(user_is_content_editor(\Drupal\user\Entity\User::create([
    'user_is_content_editor' => FALSE,
    'roles' => ['user'],
  ])));
}

function testUserIsContentEditor_Role() {
  \PHPUnit\Framework\assertTrue(user_is_content_editor(\Drupal\user\Entity\User::create([
    'roles' => ['content_editor'],
  ])));
}

function testUserIsContentEditor_Role() {
  \PHPUnit\Framework\assertFalse(user_is_content_editor(\Drupal\user\Entity\User::create([
    'roles' => ['anonymous'],
  ])));
}

function testUserIsContentEditorAccess() {
  $node = \Drupal\node\Entity\Node::create([
    'type' => 'news',
  ]);
  $user = \Drupal\user\Entity\User::create([
    'field_is_content_editor' => TRUE,
    'roles' => ['user'],
  ]);
  $node->access('edit', $user);
}
