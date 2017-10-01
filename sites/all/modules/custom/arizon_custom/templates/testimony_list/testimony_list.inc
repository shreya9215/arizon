<?php

/**
 * @file
 * Display Suite Testimony List configuration.
 */

function ds_testimony_list() {
  return array(
    'label' => t('Testimony List'),
    'regions' => array(
      'top_' => t('Top '),
      'bottom' => t('Bottom'),
    ),
    // Uncomment if you want to include a CSS file for this layout (testimony_list.css)
    'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (testimony_list.png)
    // 'image' => TRUE,
  );
}
