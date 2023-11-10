<?php

namespace Drupal\client_url\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Plugin implementation of the 'client_url_widget' widget.
 *
 * @FieldWidget(
 *   id = "client_url_widget",
 *   label = @Translation("Client URL Widget"),
 *   field_types = {
 *     "client_url"
 *   },
 *   multiple_values = TRUE
 * )
 */
class ClientUrlWidget extends WidgetBase {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
   //print_r($items[$delta]->list_client_url );
    $element['list_client_url'] = [
      '#title' => $this->t('Client Url'),
      '#type' => 'checkboxes',
      '#options' => [
        'googe.com' => $this->t('googe.com'),
        'www.google.com' => $this->t('www.google.com'),
        'google.co.in' => $this->t('google.co.in'),
      ],
      '#default_value' => isset($items[$delta]->list_client_url) ? $items[$delta]->list_client_url : NULL,
    ];
    return $element;
  }

  

}
