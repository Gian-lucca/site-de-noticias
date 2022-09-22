<?php

namespace Drupal\fontawesome_iconpicker\Plugin\Field\FieldFormatter;

use Drupal\Component\Utility\Html;
use Drupal\Core\Field\FieldItemInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'fontawesome_iconpicker' formatter.
 *
 * @FieldFormatter(
 *   id = "fontawesome_iconpicker_formatter_type",
 *   label = @Translation("Font Awesome Icon Picker"),
 *   field_types = {
 *     "text",
 *     "string",
 *   }
 * )
 */
class FontawesomeIconpicker extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public static function defaultSettings() {
    return [
      // Implement default settings.
      'size' => 'fa-1x',
    ] + parent::defaultSettings();
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
   $elements = [];
   $elements['size'] = [
      '#type'           => 'select',
      '#title'          => t('Icon Size'),
      '#description'    => t('Select an icon size.'),
      '#default_value'  => $this->getSetting('size'),
      '#options'        => $this->getFaIconSizes(),
    ];
    return $elements;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsSummary() {
    $summary = array();
    // Implement settings summary.
    $summary[] = t('Size: @size', [
      '@size'     => $this->getFaIconSizeLabel($this->getSetting('size')),
    ]);

    return $summary;
  }

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];

    foreach ($items as $delta => $item) {
      $size = $this->getSetting('size');
      $safe_value = $this->viewValue($item);

      $elements[$delta] = [
        '#theme' => 'fontawesome_iconpicker_formatter',
        '#icon' => $safe_value,
        '#size' => $size,
        '#attached' => ['library' => ['fontawesome_iconpicker/fontawesome']],
      ];
    }

    return $elements;
  }

  /**
   * Generate the output appropriate for one field item.
   *
   * @param \Drupal\Core\Field\FieldItemInterface $item
   *   One field item.
   *
   * @return string
   *   The textual output generated.
   */
  protected function viewValue(FieldItemInterface $item) {
    // The text value has no text format assigned to it, so the user input
    // should equal the output, including newlines.
    return nl2br(Html::escape($item->value));
  }

  /**
   * Helper function to get list of supported sizes in fontawesome.
   */
  private function getFaIconSizes() {
    return [
      'fa-1x'  => '1x',
      'fa-2x'  => '2x',
      'fa-3x'  => '3x',
      'fa-4x'  => '4x',
      'fa-5x'  => '5x',
    ];
  }

  /**
   * Helper function to get default icon size.
   */
  private function getFaIconSizeLabel($key) {
    $available_sizes = $this->getFaIconSizes();
    return isset($available_sizes[$key]) ? $available_sizes[$key] : NULL;
  }

}
