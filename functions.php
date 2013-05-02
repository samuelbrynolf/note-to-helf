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
}

function textCol($atts, $content = null) {
	return '<div class="col colPad"><p>'.$content.'</p></div>';
}
add_shortcode('kolumn', 'textCol');

function textColLast($atts, $content = null) {
	return '<div class="col"><p>'.$content.'</p></div><div class="clear"></div>';
}
add_shortcode('sista_kolumn', 'textColLast');

function sc_liste($atts, $content = null) {
        extract(shortcode_atts(array(
                "cat" => ''
        ), $atts));
        $myposts = get_posts('numberposts=-1&order=DESC&orderby=post_date&category_name='.$cat);
        
        //BUILD HTML
        $return='<ul class="l-container">';
        foreach($myposts as $post) :
	        setup_postdata($post);
	        $content = get_the_content();
	       	$content = apply_filters('the_content', $content);
					$return.='<li class="l-span-small-12"><h2><a href="'.get_permalink().'">'.the_title("","",false).'</a></h2>';
					$return.= $content.'</li>';
        endforeach;
        $return.='</ul> ';
        return $return;
} add_shortcode("list", "sc_liste");


?>