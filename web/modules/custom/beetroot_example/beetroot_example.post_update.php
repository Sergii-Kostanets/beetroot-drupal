<?php

/**
 * @file
 * Some comment.
 *
 * Comment for phpcs.
 */

use Drupal\block_content\Entity\BlockContent;
use Drupal\node\Entity\Node as NodeAlias;

/**
 * Add new custom page.
 */
function beetroot_example_post_update_create_some_page(&$sandbox) {
  NodeAlias::create([
    'type' => 'page',
    'title' => 'Some page',
    'status' => 1,
  ])->save();
  \Drupal::messenger()->addMessage('Added Some page.');
}

/**
 * Add adv block.
 */
function beetroot_example_post_update_add_new_block(&$sandbox) {
  BlockContent::create([
    "uuid" => "5971c447-798e-4847-b9e5-97b3bd828a98",
    "type" => "basic",
    "status" => "1",
    "info" => "New Block",
    "reusable" => "1",
    "body" => [
      [
        "value" => "<p>Some new block</p>\r\n",
        "summary" => "",
        "format" => "basic_html",
      ],
    ],
  ])->save();
}
