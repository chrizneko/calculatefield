# calculatefield
A custom drupal 8 module for calculated field

This module aims for adding custom field that has custom values depends on other fields
For an example, adding duration field on daterange field.

You need to edit the .module file to represent the field used and what you need to do with their values.

This module use hook hook_ENTITY_TYPE_presave
