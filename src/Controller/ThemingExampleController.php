<?php

namespace Drupal\theming_example\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for Theme example routes.
 */
class ThemingExampleController extends ControllerBase
{

  /**
   * Constructs a simple page.
   *
   */
  public function getContent()
  {
//    $content[]['#markup']  = t('Some examples of pages and forms that are run through theme functions.');
//    $content[]['#markup']  = t('Simple page with a list');
//    $content[]['#markup']  = l(t('Simple form 1'), 'examples/theming_example/theming_example_select_form');
//    $content[]['#markup']  = l(t('Simple form 2'), 'examples/theming_example/theming_example_text_form');
    $build = [
      '#theme_wrappers' => ['container'],
      '#attributes' => ['id' => 'edit-display-settings-details'],
    ];
//    $content['rows']['#theme_wrappers'] = array('theming_example_content_array');
    return $build;
  }

}