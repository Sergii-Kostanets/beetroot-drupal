<?php

namespace Drupal\beetroot_example\Plugin\QueueWorker;

use Drupal\Core\Annotation\QueueWorker;
use Drupal\Core\Queue\QueueWorkerBase;
use Drupal\node\Entity\Node;

/**
 * Defines 'admin_notify_worker' queue worker.
 *
 * @QueueWorker(
 *   id = "admin_notify_worker",
 *   title = @Translation("Admin Notify"),
 *   cron = {"time" = 60}
 * )
 */
class AdminNotifyWorker extends QueueWorkerBase {

  /**
   * {@inheritdoc}
   */
  public function processItem($id) {
    $user = Node::load($id);
    // @todo Send email.
  }

}
