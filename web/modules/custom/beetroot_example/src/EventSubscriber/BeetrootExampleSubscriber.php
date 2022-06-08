<?php

namespace Drupal\beetroot_example\EventSubscriber;

use Drupal\Core\Render\HtmlResponse;
use Drupal\core_event_dispatcher\EntityHookEvents;
use Drupal\core_event_dispatcher\Event\Entity\EntityViewEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Beetroot Example event subscriber.
 */
class BeetrootExampleSubscriber implements EventSubscriberInterface {

  /**
   * Kernel request event handler.
   *
   * @param \Symfony\Component\HttpKernel\Event\RequestEvent $event
   *   Response event.
   */
  public function onKernelRequest(RequestEvent $event) {
    // @todo Place code here.
  }

  /**
   * Kernel response event handler.
   *
   * @param \Symfony\Component\HttpKernel\Event\ResponseEvent $event
   *   Response event.
   */
  public function onKernelResponse(ResponseEvent $event) {
    $response = $event->getResponse();
    if ($response instanceof HtmlResponse) {
      $response->setContent($response->getContent() . '<!-- TEST COMMENT -->');
    }
    // @todo Place code here.
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    return [
      KernelEvents::REQUEST => ['onKernelRequest'],
      KernelEvents::RESPONSE => ['onKernelResponse'],
      EntityHookEvents::ENTITY_VIEW => ['onEntityView'],
    ];
  }

  public function onEntityView(EntityViewEvent $event) {
    $entity = $event->getEntity();
  }

}
