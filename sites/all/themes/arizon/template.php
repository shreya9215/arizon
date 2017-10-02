<?php
/**
 * @file
 * The primary PHP file for this theme.
 */
function arizon_preprocess_page(&$vars) {
    if (isset($vars['node']->type)) {
        $nodetype = $vars['node']->type;
        $vars['theme_hook_suggestions'][] = 'page__' . $nodetype;
        $vars['landing_page_summary'] = '';
        // Get the object and do some other checks based on what you need.
        // Generate a render array for the node.
        $load_full_node = node_load($vars['node']->nid);
        $oh = node_view($load_full_node);
        $vars['landing_page_summary'] = render($oh['field_landing_page_teaser']);
        $vars['body'] = render($oh['body']);
        $vars['field_banner_for_landing_page'] = render($oh['field_banner_for_landing_page']);
        $vars['field_service_teaser'] = render($oh['field_teaser']);
        $vars['field_image_service'] = render($oh['field_image_service']);
        $vars['field_thumnail_service'] = render($oh['field_thumnail_service']);
        $vars['field_testimony_highlight'] = render($oh['field_testimony_highlight']);
        $vars['field_image_for_banner_blog'] = render($oh['field_image_for_banner_blog']);
        $vars['field_section_title'] = render($oh['field_section_title']);
         $vars['field_banner_images'] = render($oh['field_banner_images']);
          $vars['field_link'] = render($oh['field_link']);
           $vars['field_profile'] = render($oh['field_profile']);
            $vars['field_what_we_did'] = render($oh['field_what_we_did']);
             $vars['field_result'] = render($oh['field_result']);
              $vars['field_section_title'] = render($oh['field_section_title']);
              $vars['field_icon_case_studies'] =render($oh['field_icon_case_studies']);

    }

        // "Create" a new variable for the page.tpl.php.
        // This will expose $VAR_NAME in the page template.
        // You will most likely have to clear your cache.
   // $show_my_field = render($oh['field_restaurant_opening_hours']);

}
function arizon_preprocess_views_view(&$variables){
    //dsm($variables);
    if($variables['name'] == 'studios' && $variables['display_id'] == 'block'){
        $view = $variables['view'];
        $variables['display_title'] = $view->human_name;
    }
    //dpm($variables);
}
//function arizon_preprocess_node(&$variables) {
//    $nodetype = $variables['node']->type;
////    if($nodetype == 'blog') {
//        $nid = $variables['node']->nid->value;
//        $nid = $variables['node']->nid;
//        $variables['num_comments'] = db_query("SELECT COUNT(cid) AS count FROM {comment} WHERE nid =:nid",array(":nid"=>$variables['nid']))->fetchField();
//    //}
//    }