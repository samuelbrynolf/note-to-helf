<?php add_action('init', 'register_my_menu');
function register_my_menu(){
	register_nav_menu('navigation', __('Huvudnavigation'));
}

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );
function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

function complete_version_removal() {
	return '';
}	

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('template_directory').'/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');


if ( function_exists('register_sidebar') )
		register_sidebar(array(
			'name'=>'Sidopanel',
			'description' => 'Sidopanel',
			'before_title' => '<h2>',
			'after_title' => '</h2>',
			'before_widget' => '<li class="m-sidebar-widget">',
			'after_widget' => '</li>',
		));
		
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_theme_support( 'post-formats', array('aside', 'link'));
}

function sc_list($atts, $content = null) {
  extract(shortcode_atts(array(
          "cat" => ''
  ), $atts));
	
	// BUILD HTML
	
  echo '<ul class="l-container">';
		$custom_query = new WP_Query('nopaging=true&category_name='.$cat); 
		while($custom_query->have_posts()) : $custom_query->the_post();
  		echo '<li class="l-span-S12"><a href="'.get_permalink().'"><h2>'.get_the_title().'</h2><p>'.get_the_time('j F, Y').'</p><p>'.get_the_excerpt().'</p></a></li>';
		endwhile;
		wp_reset_postdata(); // reset the query 
  echo '</ul>';
 
} add_shortcode('postlist', 'sc_list');


add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
}

?>