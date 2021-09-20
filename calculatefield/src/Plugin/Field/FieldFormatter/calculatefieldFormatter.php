<?php

namespace Drupal\calculatefield\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'field_custom_formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "calculatefield_formatter",
 *   module = "calculatefield",
 *   label = @Translation("calculatefield Formatter"),
 *   field_types = {
 *     "field_calculatefield"
 *   }
 * )
 */
class calculatefieldFormatter extends FormatterBase
{

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode)
  {
    $elements = [];

    foreach ($items as $delta => $item) {
      $elements[$delta] = [
        '#type' => 'html_tag',
        '#tag' => 'p',
        '#value' => $item->value,
      ];
    }

    return $elements;
  }

}
