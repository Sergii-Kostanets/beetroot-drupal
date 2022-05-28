<?php

namespace Drupal\beetroot_example\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'registration_for_events' block.
 *
 * @Block(
 *   id = "registration_for_events_form_block",
 *   admin_label = @Translation("Registration block for webinars")
 * )
 */
class RegistrationForEventsBlock extends BlockBase {

  /**
   * Comment.
   *
   * @inheritDoc
   */
  public function build() {
    $form = \Drupal::formBuilder()
      ->getForm('\Drupal\beetroot_example\Form\RegistrationForEventsForm');
    return $form;
  }

}
