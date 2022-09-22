<?php

namespace Drupal\fontawesome_iconpicker\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'fontawesome_iconpicker' widget.
 *
 * @FieldWidget(
 *   id = "fontawesome_iconpicker",
 *   label = @Translation("Font Awesome Icon Picker"),
 *   field_types = {
 *     "text",
 *     "string",
 *   }
 * )
 */
class FontawesomeIconpicker extends WidgetBase {

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return [
      'size' => 60,
      'placeholder' => '',
      'type' => '',
    ] + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $elements = [];

    $elements['type'] = [
      '#type' => 'select',
      '#title' => t('Type of Icon Picker'),
      '#default_value' => $this->getSetting('type'),
      '#required' => TRUE,
      '#options' => $this->getIconPickerTypes(),
    ];

    $elements['size'] = array(
      '#type' => 'number',
      '#min' => 0,
      '#step' => 1,
      '#title' => t('Field Size'),
      '#description' => t('Select a field size.'),
      '#default_value' => $this->getSetting('size'),
    );

    $elements['placeholder'] = [
      '#type' => 'textfield',
      '#title' => t('Placeholder'),
      '#default_value' => $this->getSetting('placeholder'),
      '#description' => t('Text that will be shown inside the field until a value is entered. This hint is usually a sample value or a brief description of the expected format.'),
    ];

    return $elements;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = [];

    if (!empty($this->getSetting('type'))) {
      $label = $this->getIconPickerTypes()[$this->getSetting('type')];
      $summary[] = t('Type: @type', ['@type' => $label]);
    }

    if (!empty($this->getSetting('placeholder'))) {
      $summary[] = t('Placeholder: @placeholder', ['@placeholder' => $this->getSetting('placeholder')]);
    }
    
    if (!empty($this->getSetting('size'))) {
      $summary[] = t('Field size: @size', ['@size' => $this->getSetting('size')]);
    }

    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $type = $this->getSetting('type');
    switch ($type) {
      case 'component':
        // @todo Figure out a way to use template for widget rendering, instead
        // of DOM manipulation in fontawesome_iconpicker.js.
        $element['value'] = $element + [
          '#type' => 'textfield',
          '#default_value' => isset($items[$delta]->value) ? $items[$delta]->value : NULL,
          '#size' => $this->getSetting('size'),
          '#icon' => $this->getSetting('icon'),
          '#placeholder' => $this->getSetting('placeholder'),
          '#maxlength' => $this->getFieldSetting('max_length'),
          '#attributes' => [
            'data-iconpicker' => '',
            'data-placement' => 'bottomRight',
            'class' => [
              'fontawesome-iconpicker-element',
              'form-control',
              'js-fontawesome-iconpicker-is-component',
            ],
          ],
          '#attached' => ['library' => ['fontawesome_iconpicker/fontawesome-iconpicker']],
        ];
        break;

      case 'default':
      case 'input_search':
      default:
        $element['value'] = $element + [
          '#type' => 'textfield',
          '#default_value' => isset($items[$delta]->value) ? $items[$delta]->value : NULL,
          '#size' => $this->getSetting('size'),
          '#icon' => $this->getSetting('icon'),
          '#placeholder' => $this->getSetting('placeholder'),
          '#maxlength' => $this->getFieldSetting('max_length'),
          '#attributes' => [
            'data-input-search' => ($type == 'input_search') ? 'true' : 'false',
            'data-iconpicker' => '',
            'class' => [
              'fontawesome-iconpicker-element',
            ],
          ],
          '#attached' => ['library' => ['fontawesome_iconpicker/fontawesome-iconpicker']],
        ];
        break;
    }

    return $element;
  }

  /**
   * Get Supported Icon Picker Types.
   */
  private function getIconPickerTypes() {
    return [
      'default' => $this->t('Default'),
      'component' => $this->t('As a bootstrap component'),
      'input_search' => $this->t('Input as a search box'),
      // 'dropdown' => $this->t('Inside dropdown (with Label and Icon)'),
      // 'dropdown_icon' => $this->t('Inside dropdown (with icon only)'),
    ];
  }

}
