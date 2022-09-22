<?php

namespace Drupal\field_orbit\Plugin\Field\FieldFormatter;

use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Field\FieldDefinitionInterface;
use Drupal\Core\Field\Plugin\Field\FieldType\EntityReferenceItem;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\TypedData\ListDataDefinition;
use Drupal\Core\TypedData\TypedDataManagerInterface;
use Drupal\Core\Url;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Plugin implementation of the 'Orbit' formatter.
 *
 * @FieldFormatter(
 *   id = "orbit_media",
 *   label = @Translation("Zurb Orbit Slider"),
 *   field_types = {
 *     "entity_reference"
 *   }
 * )
 */
class OrbitMediaFormatter extends OrbitFormatter {

  /**
   * The typed data manager.
   *
   * @var \Drupal\Core\TypedData\TypedDataManagerInterface
   */
  protected $typedDataManager;

  /**
   * OrbitMediaFormatter constructor.
   *
   * @param string $plugin_id
   *   The plugin_id for the formatter.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Field\FieldDefinitionInterface $field_definition
   *   The definition of the field to which the formatter is associated.
   * @param array $settings
   *   The formatter settings.
   * @param string $label
   *   The formatter label display setting.
   * @param string $view_mode
   *   The view mode.
   * @param array $third_party_settings
   *   Any third party settings settings.
   * @param \Drupal\Core\Session\AccountInterface $current_user
   *   The current user.
   * @param \Drupal\Core\Entity\EntityStorageInterface $image_style_storage
   *   The image style storage.
   */
  public function __construct($plugin_id, $plugin_definition, FieldDefinitionInterface $field_definition, $settings, $label, $view_mode, $third_party_settings, AccountInterface $current_user, EntityStorageInterface $image_style_storage, TypedDataManagerInterface $typed_data_manager) {
    parent::__construct($plugin_id, $plugin_definition, $field_definition, $settings, $label, $view_mode, $third_party_settings, $current_user, $image_style_storage);
    $this->typedDataManager = $typed_data_manager;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $plugin_id,
      $plugin_definition,
      $configuration['field_definition'],
      $configuration['settings'],
      $configuration['label'],
      $configuration['view_mode'],
      $configuration['third_party_settings'],
      $container->get('current_user'),
      $container->get('entity.manager')->getStorage('image_style'),
      $container->get('typed_data_manager')
    );
  }

  /**
   * {@inheritdoc}
   *
   * This has to be overridden because FileFormatterBase expects $item to be
   * of type \Drupal\file\Plugin\Field\FieldType\FileItem and calls
   * isDisplayed() which is not in FieldItemInterface.
   */
  protected function needsEntityLoad(EntityReferenceItem $item) {
    return !$item->hasNewEntity();
  }

  /**
   * {@inheritdoc}
   */
  public static function isApplicable(FieldDefinitionInterface $field_definition) {
    // This formatter is only available for entity types that reference
    // media items.
    return ($field_definition->getFieldStorageDefinition()
      ->getSetting('target_type') == 'media');
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];
    $images = [];
    $media_items = $this->getEntitiesToView($items, $langcode);

    // Early opt-out if the field is empty.
    if (empty($media_items)) {
      return $elements;
    }

    // Initialize the list definition type to mock image field values.
    $list_definition = ListDataDefinition::create('field_item:image');
    /** @var \Drupal\Core\Field\FieldItemListInterface $items_list */
    $items_list = $this->typedDataManager->create($list_definition);
    foreach ($media_items as $key => $item) {

      // Currently only image media bundles are supported.
      if ($item->get('field_media_image')->isEmpty()) {
        continue;
      }

      $image_item = $item->get('field_media_image')->first();

      // Add the file entity to the items list.
      $items_list->appendItem($image_item->getValue());

      // Store other values used by the template.
      $files[$key] = $image_item->entity;
      $images[$key] = [
        '#theme' => 'image_formatter',
        '#item' => $image_item,
        '#item_attributes' => [],
        '#image_style' => $this->getSetting('image_style'),
        '#url' => Url::fromUri(file_create_url($image_item->entity->get('uri')->value)),
      ];
    }

    static $orbit_count;
    $orbit_count = (is_int($orbit_count)) ? $orbit_count + 1 : 1;

    $entity = [];
    $item_settings = [];
    $links = [
      'image_link' => 'path',
      'caption_link' => 'caption_path',
    ];

    // Loop through required links (because image and
    // caption can have different links).
    foreach ($items_list as $delta => $item) {
      // Set Image caption.
      if ($this->getSetting('caption') != '') {
        $caption_settings = $this->getSetting('caption');
        if ($caption_settings == 'title') {
          $item_settings[$delta]['caption'] = $item->getValue()['title'];
        }
        elseif ($caption_settings == 'alt') {
          $item_settings[$delta]['caption'] = $item->getValue()['alt'];
        }
        $item->set('caption', $item_settings[$delta]['caption']);
      }
      // Set Image and Caption Link.
      foreach ($links as $setting => $path) {
        if ($this->getSetting($setting) != '') {
          switch ($this->getSetting($setting)) {
            case 'content':
              $entity = $items[$delta]->getEntity();
              if (!$entity->isNew()) {
                $uri = $entity->urlInfo();
                $uri = !empty($uri) ? $uri : '';
                $item->set($path, $uri);
                $images[$delta]['#url'] = $uri;
              }
              break;

            case 'file':
              foreach ($files as $file_delta => $file) {
                $image_uri = $file->getFileUri();
                $uri = Url::fromUri(file_create_url($image_uri));
                $uri = !empty($uri) ? $uri : '';
                $items_list[$file_delta]->set($path, $uri);
              }
              break;
          }
        }
      }
    }

    $defaults = $this->defaultSettings();

    if (count($items_list)) {
      // Only include non-default values to minimize html output.
      $options = [];
      foreach ($defaults as $key => $setting) {
        // Don't pass these to orbit.
        if ($key == 'caption_link' || $key == 'caption' || $key == 'image_style') {
          continue;
        }
        if ($this->getSetting($key) != $setting) {
          $options[$key] = $this->getSetting($key);
        }
      }

      $elements[] = [
        '#theme' => 'field_orbit',
        '#items' => $items_list,
        '#options' => $options,
        '#entity' => $entity,
        '#image' => $images,
        '#orbit_id' => $orbit_count,
      ];
    }

    return $elements;
  }

}
