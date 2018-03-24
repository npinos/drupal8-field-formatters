<?php

/**
 * @file
 * Contains Drupal\drupal8_field_formatters\Plugin\Field\FieldFormatter\MainHeadingFormatter.
 */

namespace Drupal\drupal8_field_formatters\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'main_heading_formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "main_heading_formatter",
 *   label = @Translation("Heading 1"),
 *   weight = "10",
 *   field_types = {
 *     "string",
 *     "text",
 *   },
 *   quickedit = {
 *     "editor" = "plain_text"
 *   }
 * )
 */

class MainHeadingFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];

    foreach ($items as $delta => $item) {
      // Render each element as markup.
      $element[$delta] = [
        '#type' => 'markup',
        '#markup' => '<h1>' . $item->value . '</h1>',
      ];
    }

    return $element;
  }

}