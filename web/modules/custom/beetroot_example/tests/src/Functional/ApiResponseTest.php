<?php

namespace Drupal\Tests\beetroot_example\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\Tests\content_moderation\Functional\ModerationStateTestBase;

class ApiResponseTest extends ModerationStateTestBase {

  protected static $modules = [
    'node',
    'text',
    'rest',
    'beetroot_example',
  ];

  protected $defaultTheme = 'stark';

  public function setUp() {
    parent::setUp();
    $this->createContentTypeFromUi('News', 'news', FALSE);
  }

  public function testNodesList() {
    $user = $this->createUser(['access beetroot example page']);
    $this->drupalLogin($user);
    $node = $this->createNode([
      'type' => 'news',
      'title' => 'Test news'
    ]);
    $response = $this->drupalGet('/api/example/latest');
    $this->assertTrue(FALSE);
  }

}
