<?php

/**
 * @file
 * Contains \Drupal\my_block\Services\PlacesServices.
 */

namespace Drupal\my_block\Services;

class PlacesServices {

  /**
   * Method for retrieving points of interests.
   */
  public function doRequest($url) {
    // Create a new Guzzle client.
    $client = \Drupal::httpClient();

    try {
       $response = \Drupal::httpClient()->get($url, array('headers' => array('Accept' => 'application/json')));
       $data = (string) $response->getBody();
     }
     catch (RequestException $e) {
      throw new Exception("Error retriving data", 1);
     }

     return json_decode($data, TRUE);
  }


  /**
   * Method for retrieving restaurant names keyed by the restaurants id.
   */
  public function getRestaurantNames() {
    $pois = $this->doRequest('http://build.dia.mah.se:3000/pois?latitude=55.6067161&longitude=13.0161498&categories=eatdrink&limit=10');

    $resturant_names = array('- Välj plats -');
    foreach ($pois['results'] as $poi) {
      $resturant_names[$poi['id']] = $poi['name'];
    }

    asort($resturant_names);

    return $resturant_names;
  }

  /**
   *
   */
  public function getRestaurantInfo($form, $form_state) {
    $places = new PlacesServices();

    $poi = $places->doRequest('http://build.dia.mah.se:3000/pois/' . $form_state->getValue('places'));

    return array(
      '#theme' => 'my_block',
      '#website' => $poi['results'][0]['resources']['websites'][0],
      '#street_addres' => $poi['results'][0]['extras']['address']['streetAddress'],
      '#city' => $poi['results'][0]['extras']['address']['city'],
      '#postal_code' => $poi['results'][0]['extras']['address']['postalCode'],
    );
  }
}
