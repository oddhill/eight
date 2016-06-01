<?php

namespace Drupal\my_block\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\my_block\Services\PlacesServices;

class MyBlockForm extends FormBase {

  /**
   * Define a unique form id.
   */
  public function getFormId() {
    return 'my_block_form';
  }

  /**
   * Add elements to form array.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $places = new PlacesServices();

    $form['places'] = array(
      '#type' => 'select',
      '#options' => $places->getRestaurantNames(),
      '#ajax' => array(
        'callback' => 'Drupal\my_block\Services\PlacesServices::getRestaurantInfo',
        'wrapper' => 'restaurant-info-wrapper',
        'event' => 'keyup',
        'progress' => array(
          'type' => 'throbber',
          'message' => 'Hämtar information',
        ),
      ),
    );

    // Address information.
    $form['restaurant'] = array(
      '#type' => 'markup',
      '#prefix' => '<div id="restaurant-info-wrapper">',
      '#suffix' => '</div>',

    );

    return $form;
  }

  /**
   * Submit form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Do nothing.
  }

}
