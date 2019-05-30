<?php

function d324theme_preprocess_paragraph__feature_box(&$variables) {
  $paragraph = $variables['paragraph'];
  if(!empty($paragraph->field_main_link->get(0))) {
    if(!empty($paragraph->field_main_link->get(0)->get('uri'))) {
      $uri = $paragraph->field_main_link->get(0)->get('uri')->getValue();
      $url = \Drupal\Core\Url::fromUri($uri);
      $variables['main_url'] = $url;
    }
  }
}
