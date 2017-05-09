<?php

namespace Drupal\complextint\Plugin\Field\FieldWidget;


use Drupal\Core\Field\Annotation\FieldWidget;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * @FieldWidget(
 *     id = "complextint_default",
 *     label = @Translation("Complextint Default Widget"),
 *     field_types = {
 *          "complextint"
 *     }
 * )
 */
class ComplextintDefaultWidget extends WidgetBase {


    /**
     * {@inheritdoc}
     */
    public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state)
    {

        $element['target_id'] = [
            '#type' => 'textfield',
            '#title' => t('Count'),
            '#default_value' => (isset($items[$delta]->target_id)) ? $items[$delta]->target_id : '1',
        ];
        $element['count'] = [
            '#type' => 'textfield',
            '#title' => t('Count'),
            '#default_value' => (isset($items[$delta]->count)) ? $items[$delta]->count : '0',
        ];

        return $element;
    }

//    public function massageFormValues(array $values, array $form, FormStateInterface $form_state) {
//        foreach ($values as &$value){
//            if($value['type'] == 'AD' AND !empty($value['value'])){
//                $parts = explode('/', $value['value']);
//                $value['value'] = $parts[2].'.'.$parts[1].$parts[0];
//            }elseif($value['type'] == 'BC' AND !empty($value['value'])){
//                $value['value'] = intval($value['value']);
//            }
//        }
//
//        return $values;
//    }
}

