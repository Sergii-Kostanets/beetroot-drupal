<?php

namespace Drupal\latest_news\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form for adding news.
 */
class AddNewsForm extends FormBase {

  /**
   * Some function from example code.
   */
  public function getFormId() {
    return 'add_news_form';
  }

  /**
   * Function for building form.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['news_title'] = [
      '#type' => 'textfield',
      '#title' => $this->t('News Title:'),
      '#required' => TRUE,
    ];
    $form['news_text'] = [
      '#type' => 'text_format',
      '#title' => $this->t('News Description:'),
      '#format' => 'basic_html',
      '#required' => TRUE,
    ];

    $termStorage = \Drupal::entityTypeManager()->getStorage('taxonomy_term');
    $ids = $termStorage->getQuery()
      ->condition('vid', 'category')
      ->execute();

    $categories = [];
    foreach ($termStorage->loadMultiple($ids) as $item) {
      $categories[$item->id()] = $item->label();
    }

    $form['news_category'] = [
      '#type' => 'select',
      '#options' => $categories,
      '#title' => $this->t('Category:'),
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Add'),
    ];
    return $form;
  }

  /**
   * Function for validation.
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);

    $title = $form_state->getValue('news_title');
    $text = $form_state->getValue('news_text');

    if (strlen($title) < 10) {
      $form_state->setErrorByName('news_title', $this->t('The title must be at least 10 characters long.'));
    }

    if (empty($text)) {
      $form_state->setErrorByName('news_text', $this->t('You must write description of your news.'));
    }

  }

  /**
   * Function for submit form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    $news = \Drupal::entityTypeManager()->getStorage('node')->create([
      'type' => 'news',
      'title' => $form_state->getValue('news_title'),
      'field_news_description' => $form_state->getValue('news_text'),
      'uid' => \Drupal::currentUser()->id(),
      'status' => 0,
      'field_news_category' => $form_state->getValue('news_category'),
    ]);
    $news->save();

    $message = \Drupal::messenger();
    $message->addMessage('News with id ' . $news->id() . ' was created and now waiting for publishing');

    $form_state->setRedirect('<front>');
  }

}