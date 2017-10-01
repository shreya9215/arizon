<?php

/**
 * @file
 * Display Suite Landing Pages configuration.
 */

function ds_landing_pages() {
  return array(
    'label' => t('Landing Pages'),
    'regions' => array(
      'top' => t('Top'),
      'banner' => t('Banner'),
      'content_page' => t('Content'),
      'bottom' => t('Bottom'),
    ),
    // Uncomment if you want to include a CSS file for this layout (landing_pages.css)
    'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (landing_pages.png)
    // 'image' => TRUE,
  );
}
