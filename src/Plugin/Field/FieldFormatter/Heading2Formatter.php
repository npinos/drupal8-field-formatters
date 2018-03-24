<?php

/**
 * @file
 * Contains Drupal\drupal8_field_formatters\Plugin\Field\FieldFormatter\Heading2Formatter.
 */

namespace Drupal\drupal8_field_formatters\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'heading_2_formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "heading_2_formatter",
 *   label = @Translation("Heading 2"),
 *   weight = "11",
 *   field_types = {
 *     "string",
 *     "text",
 *   },
 *   quickedit = {
 *     "editor" = "plain_text"
 *   }
 * )
 */

class Heading2Formatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];

    foreach ($items as $delta => $item) {
      // Render each element as markup.
      $element[$delta] = [
        '#type' => 'markup',
        '#markup' => '<h2>' . $item->value . '</h2>',
      ];
    }

    return $element;
  }

}