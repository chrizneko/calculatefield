<?php

namespace Drupal\calculatefield\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'calculatefield_widget' widget.
 *
 * @FieldWidget(
 *   id = "calculatefield_widget",
 *   module = "calculatefield",
 *   label = @Translation("calculatefield Widget"),
 *   field_types = {
 *     "field_calculatefield"
 *   }
 * )
 */

class calculatefieldWidget extends WidgetBase {

  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $value = isset($items[$delta]->value) ? $items[$delta]->value : '';

    $element += [
      '#type' => 'hidden',
      '#default_value' => $value,
    ];

    return ['value' => $element];
  }

  public static function validate($element, FormStateInterface $form_state) {
    //
  }
}
