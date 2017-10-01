<?php

/**
 * @file
 * Display Suite Case Study Teaser configuration.
 */

function ds_case_study_teaser() {
  return array(
    'label' => t('Case Study Teaser'),
    'regions' => array(
      'topcase' => t('TopCase '),
      'bottomcase' => t('BottomCase'),
    ),
    // Uncomment if you want to include a CSS file for this layout (case_study_teaser.css)
    'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (case_study_teaser.png)
    // 'image' => TRUE,
  );
}
