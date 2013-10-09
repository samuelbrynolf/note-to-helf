<?php // REGISTERS AND ADD SUPPORTS
//====================================================================

function register_my_menu(){
	register_nav_menu('navigation', __('Huvudnavigation'));
}
add_action('init', 'register_my_menu');

if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name'=>'Footer',
			'description' => 'Footerinfo',
			'before_title' => '<h2 class="t-medium">',
			'after_title' => '</h2>',
			'before_widget' => '<li class="l-span-S12 m-footerwidget">',
			'after_widget' => '</li>',
		));
		
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_theme_support( 'post-formats', array('aside'));
}

require_once 'Mobile_Detect.php';


//FILTERS
//====================================================================

function complete_version_removal() {
	return '';
}
add_filter('the_generator', 'complete_version_removal');

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

add_filter('body_class', 'add_custom_body_class');
function add_custom_body_class($classes) {
	if (is_single() && has_post_thumbnail()) $classes[] = 'has-thumb';
	return $classes;
}

remove_filter('term_description','wpautop');

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

add_filter('relevanssi_get_words_query', 'fix_query');
function fix_query($query) {
    $query = $query . " HAVING c > 1";
    return $query;
}



// FUNCTIONS
//====================================================================

if ( ! function_exists( 'post_is_in_descendant_category' ) ) {
	function post_is_in_descendant_category( $cats, $_post = null ) {
		foreach ( (array) $cats as $cat ) {
			// get_term_children() accepts integer ID only
			$descendants = get_term_children( (int) $cat, 'category' );
			if ( $descendants && in_category( $descendants, $_post ) )
				return true;
		}
		return false;
	}
}

add_shortcode('wp_caption', 'fixed_img_caption_shortcode');
add_shortcode('caption', 'fixed_img_caption_shortcode');

function fixed_img_caption_shortcode($attr, $content = null) {
	// New-style shortcode with the caption inside the shortcode with the link and image tags.
	if ( ! isset( $attr['caption'] ) ) {
		if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
			$content = $matches[1];
			$attr['caption'] = trim( $matches[2] );
		}
	}

	// Allow plugins/themes to override the default caption template.
	$output = apply_filters('img_caption_shortcode', '', $attr, $content);
	if ( $output != '' )
		return $output;

	extract(shortcode_atts(array(
		'id'	=> '',
		'align'	=> 'alignnone',
		'width'	=> '',
		'caption' => ''
	), $attr));

	if ( 1 > (int) $width || empty($caption) )
		return $content;

	if ( $id ) $id = 'id="' . esc_attr($id) . '" ';

	return '<div ' . $id . 'class="wp-caption">'
	. do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}

function sc_list($atts, $content = null) {
  extract(shortcode_atts(array(
          "cat" => ''
  ), $atts));
	
	// BUILD HTML
	
  echo '<ul class="l-container">';
		$custom_query = new WP_Query('nopaging=true&category_name='.$cat); 
		while($custom_query->have_posts()) : $custom_query->the_post();
  		echo '<li class="l-span-S12"><a href="'.get_permalink().'"><h2>'.get_the_title().'</h2><p>'.get_the_time('j F, Y').'</p>'.get_secondary_content( 'Ingress' ).'</a></li>';
		endwhile;
		wp_reset_postdata(); // reset the query 
  echo '</ul>';
 
} add_shortcode('postlist', 'sc_list');


add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
}

function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('template_directory').'/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');

function UA_include($condition, $partial){
	$detect = new Mobile_Detect;
	
	if (!$detect->$condition()) {
		include('parts/'.$partial);
	}
}

//if (!$detect->isMobile()) {

//}
?>