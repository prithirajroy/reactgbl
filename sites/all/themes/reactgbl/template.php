<?php

/**
 * Add body classes if certain regions have content.
 */
function reactgbl_preprocess_html(&$variables) {
  if (!empty($variables['page']['featured'])) {
    $variables['classes_array'][] = 'featured';
  }

  if (!empty($variables['page']['triptych_first'])
    || !empty($variables['page']['triptych_middle'])
    || !empty($variables['page']['triptych_last'])) {
    $variables['classes_array'][] = 'triptych';
  }

  if (!empty($variables['page']['footer_firstcolumn'])
    || !empty($variables['page']['footer_secondcolumn'])
    || !empty($variables['page']['footer_thirdcolumn'])
    || !empty($variables['page']['footer_fourthcolumn'])) {
    $variables['classes_array'][] = 'footer-columns';
  }

  // Add conditional stylesheets for IE
  drupal_add_css(path_to_theme() . '/css/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
  drupal_add_css(path_to_theme() . '/css/ie6.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 6', '!IE' => FALSE), 'preprocess' => FALSE));
}

/**
 * Override or insert variables into the page template for HTML output.
 */
function reactgbl_process_html(&$variables) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_html_alter($variables);
  }
}

/**
 * Override or insert variables into the page template.
 */
function reactgbl_process_page(&$variables) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_page_alter($variables);
  }
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

/**
 * Implements hook_preprocess_maintenance_page().
 */
function reactgbl_preprocess_maintenance_page(&$variables) {
  // By default, site_name is set to Drupal if no db connection is available
  // or during site installation. Setting site_name to an empty string makes
  // the site and update pages look cleaner.
  // @see template_preprocess_maintenance_page
  if (!$variables['db_is_active']) {
    $variables['site_name'] = '';
  }
  drupal_add_css(drupal_get_path('theme', 'reactgbl') . '/css/maintenance-page.css');
}

/**
 * Override or insert variables into the maintenance page template.
 */
function reactgbl_process_maintenance_page(&$variables) {
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
}

/**
 * Override or insert variables into the node template.
 */
function reactgbl_preprocess_node(&$variables) {
  if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
    $variables['classes_array'][] = 'node-full';
  }
}

/**
 * Override or insert variables into the block template.
 */
function reactgbl_preprocess_block(&$variables) {
  // In the header region visually hide block titles.
  if ($variables['block']->region == 'header') {
    $variables['title_attributes_array']['class'][] = 'element-invisible';
	$variables['logo'] = 'test';
  }
}

/**
 * Implements theme_menu_tree().
 */
function reactgbl_menu_tree($variables) {
 	
  if($variables['theme_hook_original'] == 'menu_tree__user_menu'){	
		return $variables['tree']; 	
  }else if($variables['theme_hook_original'] == 'menu_tree__main_menu'){
		return '<ul class="nav navbar-nav">' . $variables['tree'] . '</ul>';
  }else{
		return '<ul class="menu clearfix">' . $variables['tree'] . '</ul>';
  }
}

/**
 * Implements theme_field__field_type().
 */
function reactgbl_field__taxonomy_term_reference($variables) {
  $output = '';

  // Render the label, if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<h3 class="field-label">' . $variables['label'] . ': </h3>';
  }

  // Render the items.
  $output .= ($variables['element']['#label_display'] == 'inline') ? '<ul class="links inline">' : '<ul class="links">';
  foreach ($variables['items'] as $delta => $item) {
    $output .= '<li class="taxonomy-term-reference-' . $delta . '"' . $variables['item_attributes'][$delta] . '>' . drupal_render($item) . '</li>';
  }
  $output .= '</ul>';

  // Render the top-level DIV.
  $output = '<div class="' . $variables['classes'] . (!in_array('clearfix', $variables['classes_array']) ? ' clearfix' : '') . '"' . $variables['attributes'] .'>' . $output . '</div>';

  return $output;
}
/**
 * Implements template_preprocess_region().
 */
function reactgbl_preprocess_region(&$variables) {
	global $base_url;
	if($variables['elements']['#region']){
	    if($variables['elements']['#region'] == 'header'){
			$variables['logo'] = theme_get_setting('logo');
			$variables['front_page'] = $base_url;
			$variables['search_bar']  = $variables['elements']['search_form'];
			//$variables['main_menu'] = $variables['elements']['system_main-menu'];
			//$variables['user_menu'] = $variables['elements']['system_user-menu'];
		}
		
	}
}
/**
 * Implements main_menu().
 */

function reactgbl_menu_link__main_menu(array $variables) {
	  global $user;
	  global $base_url;
	  $element = $variables['element'];
	  $title = $element['#title'];
	  $attr = drupal_attributes($element['#attributes']);
	  $output ='';
	  $custom_class = '';
	  $output .= '<li ' . $attr . '>';
			$output .= '<a href="'.$element['#href'].'">'.$title.'</a>';
	  $output . '</li>';
	  
	  return $output;
}
/**
 * Implements user_menu().
 */
function reactgbl_menu_link__user_menu(array $variables) {
	  global $user;
	  global $base_url;
	  $element = $variables['element'];
	  $title = $element['#title'];
	  $output ='';
	  $custom_class = '';
	 
	  
	  if($user->uid){
	  $output .= '<div class="col-sm-4 col-xs-4">';
	  $output .= '<div class="sign_in">';
	  $output .= '<div class="btn-group dropdown">';
			//$output .= l($title, $element['#href'], array('attributes' => array('class' => array('btn', 'btn-default'))));
		    $output .= '<a href="'.$element['#href'].'" type="button" class="btn btn-default">';
					switch($title){
						case '':
							break;
						case 'Wishlist':
								$custom_class .= 'fa-gift';
							break;
						case 'Log out':
								$custom_class .= 'fa-lock';
							break;	
						default :
							$custom_class .= 'fa-user';	
					}
					$output .= '<i class="fa '.$custom_class.'"></i>';
					$output .= '<span>'.$title.'</span>';
			$output .= '</a>';
	 $output .= '</div>';
	 $output .= '</div>';
	 $output .= '</div>';	
	  }else{
			$output .= '<div class="col-sm-4 col-xs-4">';
		    $output .= '<div class="sign_in">';
		    $output .= '<div class="btn-group dropdown">';
			$output .= '<a href="'.$base_url.'/user/" type="button" class="btn btn-default">';
			$output .= 		'<i class="fa fa-user"></i>';
			$output .= 		'<span>Sign In</span>';
			$output .= '</a>';
			$output .= '</div>';
		    $output .= '</div>';
		    $output .= '</div>';
			
			$output .= '<div class="col-sm-4 col-xs-4">';
		    $output .= '<div class="sign_in">';
		    $output .= '<div class="btn-group dropdown">';
			$output .= '<a href="'.$base_url.'/user/register" type="button" class="btn btn-default">';
			$output .= 		'<i class="fa fa-lock"></i>';
			$output .= 		'<span>Register</span>';
			$output .= '</a>';
			$output .= '</div>';
		    $output .= '</div>';
		    $output .= '</div>';
			
			$output .= '<div class="col-sm-4 col-xs-4">';
		    $output .= '<div class="sign_in">';
		    $output .= '<div class="btn-group dropdown">';
			$output .= '<a href="javascript:void(0);" type="button" class="btn btn-default">';
			$output .= 		'<i class="fa fa-gift"></i>';
			$output .= 		'<span>Wishlist</span>';
			$output .= '</a>';
			$output .= '</div>';
		    $output .= '</div>';
		    $output .= '</div>';
	  }
	 
	  return $output;
	  
}
/**
 * Implements sidebar_menu().
 */
function reactgbl_menu_link__menu_product_category_menu(array $variables) {
    echo '<pre>';
	print_r($variables);
	exit;
}

