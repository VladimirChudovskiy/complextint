<?php

namespace Drupal\complextint\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\Annotation\FieldFormatter;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * @FieldFormatter(
 *     id = "complextint_default",
 *     label = @Translation("Complextint Default Formatter"),
 *     field_types = {
 *          "complextint"
 *     }
 * )
 */
class CompextintDefaultFormatter extends FormatterBase {

    /**
     * {@inheritdoc}
     */
    public function viewElements(FieldItemListInterface $items, $langcode)
    {
        $elements = [];
        foreach ($items as $delta => $item){
            $elements[$delta] = [
                '#type' => 'markup',
                '#markup' => '<span class="tid">'.$items[$delta]->target_id.'</span> <span class="count">'.$items[$delta]->count.'</span>',
            ];
        }

        return $elements;
    }
}

