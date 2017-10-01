<?php

/**
 * @file
 * Display Suite Service Teaser configuration.
 */

function ds_service_teaser() {
  return array(
    'label' => t('Service Teaser'),
    'regions' => array(
      'left' => t('Left'),
      'right' => t('Right'),
    ),
    // Uncomment if you want to include a CSS file for this layout (service_teaser.css)
    'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (service_teaser.png)
    // 'image' => TRUE,
  );
}
