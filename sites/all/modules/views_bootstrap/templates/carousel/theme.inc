<?php

/**
 * Implementation of template preprocess for the view.
 */
function template_preprocess_views_bootstrap_carousel_plugin_style(&$vars) {
  drupal_add_js(array(
    'viewsBootstrap' => array(
      'carousel' => array(
        $vars['id'] => array(
          'id' => $vars['id'],
          'name' => $vars['view']->name,
          'attributes' => array(
            'interval' => $vars['options']['interval'] ? (int)$vars['options']['interval'] : FALSE,
            'pause' => $vars['options']['pause'] ? 'hover' : FALSE,
          ),
        ),
      ),
    ),
  ), 'setting');
    if ( $vars['options']['items_per_slide'] > 1 ) {
  	$rows = array();
  	foreach ( $vars['rows'] as $key => $row ) {
  		$mod = $key % (int) $vars['options']['items_per_slide'];
  		if (  $mod  == 0 ) {
  			$rows[] = $row ;
  		} else {
  			$rows[(count($rows)-1)] .= $row ;  
  		}
  	}
  	$vars['rows'] = $rows ;
  }

  drupal_add_js(drupal_get_path('module', 'views_bootstrap') . '/js/views-bootstrap-carousel.js');

  $vars['classes_array'][] = 'carousel slide';

  $vars['navigation'] = (bool)$vars['options']['navigation'];
  $vars['indicators'] = (bool)$vars['options']['indicators'];
  $keys = array_keys($vars['rows']);
  $vars['first_key'] = reset($keys);
}

/**
 * Implementation of template preprocess for the view fields.
 */
function template_preprocess_views_bootstrap_carousel_plugin_rows(&$vars) {
  $view = &$vars['view'];

  foreach ($vars['options'] as $id => $field) {
    if (isset($view->field[$field])) {
      $vars[$id] = $view->style_plugin->get_field($view->row_index, $field);
    }
  }
}
