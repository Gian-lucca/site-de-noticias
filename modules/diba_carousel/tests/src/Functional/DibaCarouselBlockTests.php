<?php

namespace Drupal\Tests\diba_carousel\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Test basic diba_carousel block functionality.
 *
 * @group diba_carousel
 */
class DibaCarouselBlockTests extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  public static $modules = ['filter', 'help', 'diba_carousel'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stable';

  /**
   * An administrative user to configure the test environment.
   *
   * @var \Drupal\user\Entity\User
   */
  protected $adminUser;

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    // Create and login an administrative user.
    $this->adminUser = $this->drupalCreateUser([
      'administer site configuration',
      'access administration pages',
      'administer blocks',
    ]);
  }

  /**
   * Tests diba carousel block.
   */
  public function testDibaCarouselBlock() {
    $this->drupalLogin($this->adminUser);

    $this->drupalGet('admin/structure/block/library/stable');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->responseContains('Diba carousel');

    $theme = \Drupal::service('theme_handler')->getDefault();
    $this->drupalGet("admin/structure/block/add/diba_carousel/$theme");
    $this->assertSession()->statusCodeEquals(200);

    $this->drupalGet('admin/help/diba_carousel');
    $this->assertSession()->statusCodeEquals(200);
  }

}
