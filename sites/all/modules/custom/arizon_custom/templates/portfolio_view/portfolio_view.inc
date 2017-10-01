<?php

/**
 * @file
 * Display Suite Portfolio View configuration.
 */

function ds_portfolio_view() {
  return array(
    'label' => t('Portfolio View'),
    'regions' => array(
      '_top' => t(' Top'),
      'between' => t('Between'),
      'left' => t('Left'),
      'right' => t('Right'),
    ),
    // Uncomment if you want to include a CSS file for this layout (portfolio_view.css)
    'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (portfolio_view.png)
    // 'image' => TRUE,
  );
}
