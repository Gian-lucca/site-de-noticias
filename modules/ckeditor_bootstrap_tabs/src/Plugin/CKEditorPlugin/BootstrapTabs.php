<?php

namespace Drupal\ckeditor_bootstrap_tabs\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\StringTranslation\StringTranslationTrait;
use Drupal\Core\StringTranslation\TranslationManager;
use Drupal\editor\Entity\Editor;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Defines the "Bootstrap Tabs" plugin.
 *
 * @CKEditorPlugin(
 *   id = "bootstrapTabs",
 *   label = @Translation("Bootstrap Tabs")
 * )
 */
class BootstrapTabs extends PluginBase implements CKEditorPluginInterface, CKEditorPluginButtonsInterface, ContainerFactoryPluginInterface {

  use StringTranslationTrait;

  /**
   * Module system path.
   *
   * @var string
   */
  protected $modulePath;

  /**
   * BootstrapTabs constructor.
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, TranslationManager $string_translation) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->stringTranslation = $string_translation;
    $this->modulePath = drupal_get_path('module', 'ckeditor_bootstrap_tabs');
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('string_translation')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    return [
      'bootstrapTabs' => [
        'label' => $this->t('Bootstrap Tabs'),
        'image' => $this->modulePath . '/js/plugins/bootstrapTabs/icons/bootstrapTabs.png',
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function isInternal() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function getDependencies(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getLibraries(Editor $editor) {
    return ['ckeditor_bootstrap_tabs/tabs'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return $this->modulePath . '/js/plugins/bootstrapTabs/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }

}
