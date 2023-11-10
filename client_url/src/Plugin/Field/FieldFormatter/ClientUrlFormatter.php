<?php

namespace Drupal\client_url\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Plugin implementation of the 'client_url_formatter' formatter.
 *
 * @FieldFormatter(
 *   id = "client_url_formatter",
 *   label = @Translation("Client URL Formatter"),
 *   field_types = {
 *     "client_url"
 *   }
 * )
 */
class ClientUrlFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];
    foreach ($items as $delta => $item) {
      $url = $item->url;
      $elements[$delta] = [
        '#markup' => $url,
      ];
    }
    return $elements;
  }

}
