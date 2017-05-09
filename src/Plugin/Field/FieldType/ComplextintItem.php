<?php
namespace Drupal\complextint\Plugin\Field\FieldType;


use Drupal\Core\Annotation\Translation;
use Drupal\Core\Field\Annotation\FieldType;
use Drupal\Core\Field\FieldItemBase;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\Core\Form\FormStateInterface;


/**
 * @FieldType(
 *     id = "complextint",
 *     label = @Translation("Complex Tint"),
 *     default_formatter = "complextint_default",
 *     default_widget = "complextint_default"
 * )
 */
class ComplextintItem extends FieldItemBase {


    public static function propertyDefinitions(FieldStorageDefinitionInterface $field_definition)
    {
        $properties['target_id'] = DataDefinition::create('string')
            ->setLabel(t('The ID of the target entity.'));

        $properties['count'] = DataDefinition::create('string')
            ->setLabel(t('Count minus from storage.'));

        return $properties;
    }



    public static function schema(FieldStorageDefinitionInterface $field_definition)
    {
        return [
            'columns' => [
                'target_id' => [
                    'type' => 'int',
                    'description' => 'The ID of the target entity.',
                ],
                'count' => [
                    'type' => 'float',
                    'size' => 'big',
                    'description' => 'Count minus from storage.',
                ],
            ],
            'indexes' => [
                'value' => ['target_id'],
            ]
        ];
    }
//
//    public function storageSettingsForm(array &$form, FormStateInterface $form_state, $has_data) {
//        $element['target_type'] = [
//            '#type' => 'select',
//            '#title' => t('Type of item to reference'),
//            '#options' => \Drupal::entityManager()->getEntityTypeLabels(TRUE),
//            '#default_value' => $this->getSetting('target_type'),
//            '#required' => TRUE,
//            '#disabled' => $has_data,
//            '#size' => 1,
//        ];
//
//        return $element;
//    }
}