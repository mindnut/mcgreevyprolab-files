<?php
/**
 * Implements hook_html_head_alter().
 * This will overwrite the default meta character type tag with HTML5 version.
 */

function mcgreevy_preprocess_node($vars) {
  if ($vars['elements']['#node']->id == '66') {
    drupal_add_css(drupal_get_path('theme', 'mcgreevy') . "/css/form/form.css");
  }
}

function mcgreevy_html_head_alter(&$head_elements) {
  $head_elements['system_meta_content_type']['#attributes'] = array(
    'charset' => 'utf-8'
  );
}

/**
 * Override or insert variables into the page template for HTML output.
 */
function mcgreevy_process_html(&$variables) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_html_alter($variables);
  }
}



function mcgreevy_preprocess_page(&$vars, $hook) {
if (isset($vars['node'])) {
// If the node type is "blog" the template suggestion will be "page--blog.tpl.php".
$vars['theme_hook_suggestions'][] = 'page__'. str_replace('_', '--', $vars['node']->type);
}

 if (isset($vars['node']) && $vars['node']->type == 'dropbox') {
     drupal_add_css(drupal_get_path('theme', 'mcgreevy') . "/css/form/form.css");
     drupal_add_css(drupal_get_path('theme', 'mcgreevy') . "/css/form/nova.css");



      drupal_add_js(drupal_get_path('theme', 'mcgreevy') . "/scripts/form/prototype.js");
      drupal_add_js(drupal_get_path('theme', 'mcgreevy') . "/scripts/form/vendor/json2.js");
      drupal_add_js(drupal_get_path('theme', 'mcgreevy') . "/scripts/form/protoplus.js");
      drupal_add_js(drupal_get_path('theme', 'mcgreevy') . "/scripts/form/protoplus-ui-form.js");
      drupal_add_js(drupal_get_path('theme', 'mcgreevy') . "/scripts/form/jotform.js");
      drupal_add_js(drupal_get_path('theme', 'mcgreevy') . "/scripts/form/calendarview.js");


  }


}




/**
 * Override or insert variables into the page template.
 */
function mcgreevy_process_page(&$variables) {
  // Always print the site name and slogan, but if they are toggled off, we'll
  // just hide them visually.
  $variables['hide_site_name']   = theme_get_setting('toggle_name') ? FALSE : TRUE;
  $variables['hide_site_slogan'] = theme_get_setting('toggle_slogan') ? FALSE : TRUE;
  if ($variables['hide_site_name']) {
    // If toggle_name is FALSE, the site_name will be empty, so we rebuild it.
    $variables['site_name'] = filter_xss_admin(variable_get('site_name', 'Drupal'));
  }
  if ($variables['hide_site_slogan']) {
    // If toggle_site_slogan is FALSE, the site_slogan will be empty, so we rebuild it.
    $variables['site_slogan'] = filter_xss_admin(variable_get('site_slogan', ''));
  }
  // Since the title and the shortcut link are both block level elements,
  // positioning them next to each other is much simpler with a wrapper div.
  if (!empty($variables['title_suffix']['add_or_remove_shortcut']) && $variables['title']) {
    // Add a wrapper div using the title_prefix and title_suffix render elements.
    $variables['title_prefix']['shortcut_wrapper'] = array(
      '#markup' => '<div class="shortcut-wrapper clearfix">',
      '#weight' => 100,
    );
    $variables['title_suffix']['shortcut_wrapper'] = array(
      '#markup' => '</div>',
      '#weight' => -99,
    );
    // Make sure the shortcut link is the first item in title_suffix.
    $variables['title_suffix']['add_or_remove_shortcut']['#weight'] = -100;
  }
}

function mcgreevy_page_alter($page) {
	// <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	$viewport = array(
		'#type' => 'html_tag',
		'#tag' => 'meta',
		'#attributes' => array(
		'name' =>  'viewport',
		'content' =>  'width=device-width, initial-scale=1, maximum-scale=1'
		)
	);
	drupal_add_html_head($viewport, 'viewport');
}

function mcgreevy_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    // Use CSS to hide titile .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    // comment below line to hide current page to breadcrumb
	$breadcrumb[] = drupal_get_title();
    $output .= '<div class="breadcrumb">' . implode('<span class="sep"> :: </span>', $breadcrumb) . '</div>';
    return $output;
  }
}




// remove height and width from drupal images

function mcgreevy_preprocess_image(&$variables){
	foreach(array('width','height') as $key){
		unset($variables[$key]);		
	}
}



?>