<?php

namespace Drupal\beetroot_example\EventSubscriber;

use Drupal\Core\Mail\MailManagerInterface;
use Drupal\Core\Render\HtmlResponse;
use Drupal\core_event_dispatcher\EntityHookEvents;
use Drupal\core_event_dispatcher\Event\Entity\EntityInsertEvent;
use Drupal\core_event_dispatcher\Event\Entity\EntityViewEvent;
use Drupal\node\NodeInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Beetroot Example event subscriber.
 */
class BeetrootExampleSubscriber implements EventSubscriberInterface {

  /**
   * Comment.
   */
  public function __construct(MailManagerInterface $mailManager) {
    $this->mailManager = $mailManager;
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    return [
      EntityHookEvents::ENTITY_INSERT => ['onEntityInsert'],
    ];
  }

  public function onEntityInsert(EntityInsertEvent $event) {
    $entity = $event->getEntity();
    if (!$entity instanceof NodeInterface) {
      return;
    }
    $this->mailManager->mail('beetroot_example', 'node_insert', '', '', []);
  }

}
