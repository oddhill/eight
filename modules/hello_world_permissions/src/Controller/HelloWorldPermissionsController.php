<?php

namespace Drupal\hello_world_permissions\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * The hello world controller.
 */
class HelloWorldPermissionsController extends ControllerBase {

  /**
   * Renders our hello world page.
   *
   * @return array
   */
  public function content() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello world'),
    ];
  }
}
