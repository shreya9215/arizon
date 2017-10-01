<?php

/**
 * @file
 * Display Suite Testimony Teaser configuration.
 */

function ds_testimony_teaser() {
  return array(
    'label' => t('Testimony Teaser'),
    'regions' => array(
      'left' => t('Left'),
      'right' => t('Right'),
    ),
    // Uncomment if you want to include a CSS file for this layout (testimony_teaser.css)
    'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (testimony_teaser.png)
    // 'image' => TRUE,
  );
}
