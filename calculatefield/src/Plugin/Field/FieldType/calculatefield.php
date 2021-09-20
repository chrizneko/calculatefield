<?php

namespace Drupal\calculatefield\Plugin\Field\FieldType;

use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;

/**
 * Provides a field type of calculatefield.
 *
 * @FieldType(
 *   id = "field_calculatefield",
 *   label = @Translation("Calculate Field"),
 *   default_formatter = "calculatefield_formatter",
 *   default_widget = "calculatefield_widget",
 * )
 */

 class calculatefield extends FieldItemBase {

  /**
   * {@inheritdoc}
   */
  public static function schema(FieldStorageDefinitionInterface $field_definition)
  {
    return [
      'columns' => [
        'value' => [
          'type' => 'varchar',
          'length' => 255,
          'not null' => FALSE,
        ],
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition)
  {
    $properties = [];
    $properties['value'] = DataDefinition::create('string')
    ->setLabel(t('Test Value'));

    return $properties;
  }

  /**
   * {@inheritdoc}
   */
  public function isEmpty()
  {
    $value = $this->get('value')->getValue();
    return empty($value);
  }

 }
