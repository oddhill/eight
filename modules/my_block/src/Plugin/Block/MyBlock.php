<?php

/**
 * Provides a 'Hello' Block
 *
 * @Block(
 *   id = "my_block",
 *   admin_label = @Translation("My block"),
 * )
 */
namespace Drupal\my_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

class MyBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $form = \Drupal::formBuilder()->getForm('Drupal\my_block\Form\MyBlockForm');

    return $form;
  }
}
