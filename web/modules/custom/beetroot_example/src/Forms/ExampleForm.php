<?php

namespace Drupal\beetroot_example\Forms;

use Drupal\Component\Utility\Random;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;

/**
 * Form example from lesson 35.
 */
class ExampleForm extends FormBase {

  /**
   * Unique return name.
   *
   * @inheritDoc
   */
  public function getFormId() {
    return 'beetroot_example_form';
  }

  /**
   * Form building.
   *
   * @inheritDoc
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['#attached']['library'][] = 'beetroot_example/custom';
    $form['#attributes']['id'] = 'example-form';
    $form['group1'] = [
      '#title' => $this->t('Example of form. Step 1.'),
      '#type' => 'details',
      '#open' => TRUE,
      '#access' => !($form_state->has('next_page') && $form_state->get('next_page')),
    ];
    $form['group1']['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
      '#default_value' => (new Random())->word(10),
      '#attributes' => [
        'class' => ['first_class', 'second_class'],
        'id' => 'some_id',
        'data-foo' => 'bar',
      ],
      '#autocomplete_route_name' => 'example_route_with_form_autocomplete',
    ];
    $form['group1']['text'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Long text'),
      '#default_value' => (new Random())->paragraphs($paragraph_count = 1),
    ];
    $form['group2'] = [
      '#title' => $this->t('Example of form. Step 2.'),
      '#type' => 'details',
      '#open' => TRUE,
      '#access' => $form_state->has('next_page') && $form_state->get('next_page'),
    ];
    $form['group2']['pass'] = [
      '#type' => 'password',
      '#title' => $this->t('Pass'),
      '#description' => $this->t('Some password'),
      '#prefix' => $this->t('Enter some'),
    ];
    $form['group2']['number'] = [
      '#title' => $this->t('Number'),
      '#type' => 'number',
      '#min' => 1,
      '#max' => 999,
    ];
    $form['group3']['actions'] = [
      '#prefix' => $this->t('Hope your password is secure. Click:'),
      '#type' => 'actions',
    ];
    $form['group3']['actions']['preview'] = [
      '#type' => 'submit',
      '#tag' => 'div',
      '#value' => $this->t('Preview'),
      '#submit' => [
        '::submitPreview',
      ],
    ];
    $form['group3']['actions']['prev'] = [
      '#type' => 'submit',
      '#tag' => 'div',
      '#value' => $this->t('Prev step'),
      '#submit' => [
        '::submitPrev',
      ],
      '#access' => $form_state->has('next_page') && $form_state->get('next_page'),
      '#ajax' => [
        'callback' => '::refresh',
        'wrapper' => 'example-form',
      ],
    ];
    $form['group3']['actions']['next'] = [
      '#type' => 'submit',
      '#tag' => 'div',
      '#value' => $this->t('Next step'),
      '#submit' => [
        '::submitNext',
      ],
      '#access' => !($form_state->has('next_page') && $form_state->get('next_page')),
      '#ajax' => [
        'callback' => '::refresh',
        'wrapper' => 'example-form',
      ],
    ];
    $form['group3']['actions']['submit'] = [
      '#type' => 'submit',
      '#tag' => 'div',
      '#value' => $this->t('Save'),
      '#access' => $form_state->has('next_page') && $form_state->get('next_page'),
    ];

    $form['temperature'] = [
      '#title' => $this->t('Temperature'),
      '#type' => 'select',
      '#options' => range(0, 4),
      '#empty_option' => $this->t('- Select a color temperature -'),
      '#ajax' => [
        'callback' => '::updateColor',
        'wrapper' => 'color-wrapper',
      ],
    ];

    $form['color_wrapper'] = [
      '#type' => 'container',
      '#attributes' => ['id' => 'color-wrapper'],
    ];

    $temperature = $form_state->getValue('temperature');
    if (!empty($temperature)) {
      $form['color_wrapper']['color'] = [
        '#type' => 'select',
        '#title' => $this->t('Color'),
        '#options' => range($temperature * 5, $temperature * 10),
      ];
    }

    return $form;
  }

  /**
   * Ajax callback for the color dropdown.
   */
  public function updateColor(array $form, FormStateInterface $form_state) {
    return $form['color_wrapper'];
  }

  /**
   * Ajax callback for the form.
   */
  public function refresh(array $form, FormStateInterface $form_state) {
    return $form;
  }

  /**
   * Validates user-submitted form data in the $form_state.
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $text = $form_state->getValue('text');
    if (strlen($text) < 20) {
      $form_state->setErrorByName('text', $this->t('Text must be more then 20 symbols'));
    }
  }

  /**
   * Submit button.
   *
   * @inheritDoc
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $number = $form_state->getValue('number');
    $params = [
      'type' => 'article',
      'title' => $form_state->getValue('name'),
      'body' => $form_state->getValue('text'),
    ];
    $operations = [];
    foreach (range(1, $number) as $i) {
      $arg1 = $params;
      $arg1['title'] .= ' - ' . $i;
      $operations[] = [
        '\Drupal\beetroot_example\Forms\ExampleForm::createNode',
        [$arg1],
      ];
    }
    batch_set([
      'title' => $this->t('Node creation'),
      'operations' => $operations,
    ]);
  }

  /**
   * Comment.
   */
  public static function createNode(array $params) {
    $node = Node::create($params);
    $node->save();
    \Drupal::messenger()->addStatus('Node added.');
  }

  /**
   * Comment for form.
   */
  public function submitPreview(array &$form, FormStateInterface $form_state) {
    \Drupal::messenger()->addStatus('Look at the preview.');
    $node = Node::create([
      'type' => 'article',
      'title' => $form_state->getValue('name'),
      'body' => $form_state->getValue('text'),
    ]);
  }

  /**
   * Comment for form.
   */
  public function submitPrev(array &$form, FormStateInterface $form_state) {
    $form_state->set('next_page', FALSE);
    $form_state->setRebuild();
  }

  /**
   * Comment for form.
   */
  public function submitNext(array &$form, FormStateInterface $form_state) {
    $form_state->set('next_page', TRUE);
    $form_state->setRebuild();
  }

}
