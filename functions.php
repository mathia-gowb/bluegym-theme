<?php

/* Registers */
function bluegymn_theme_support(){
    /* adds custom components to the theme */
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background'); 
}

add_action('after_setup_theme','bluegymn_theme_support');
/* navigation menus */


/* Register Stylesheets */
function bluegymn_register_styles(){
    $version=wp_get_theme()->get('Version');
    wp_enqueue_style('bluegymn-style',get_template_directory_uri()."/style.css",array("bluegymn-bootstrap"),$version,"all");
    /* bootstrap */
    wp_enqueue_style('bluegymn-bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css",array(),"5.0.0-beta3");
    /* google fonts stylesheets */
    wp_enqueue_style('bluegymn-fontI',"https://fonts.googleapis.com/css2?family=Cambo&display=swap",array(),"1.0");
    wp_enqueue_style('bluegymn-fontII',"https://fonts.googleapis.com/css2?family=DM+Sans&display=swap",array(),"1.0");
}
/* add action for stylesheets */
add_action('wp_enqueue_scripts','bluegymn_register_styles');
/* Register Scripts */
function bluegymn_register_scripts(){
    /* main javascript */
    wp_enqueue_script('bluegymn-javascript',get_template_directory_uri()."/assets/js/main.js",array(),"1.0",true);
    /* bootstrap */
    wp_enqueue_script('bluegymn-bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js",array(),"5.0.0-beta3");
    /* font awesome */
    wp_enqueue_script('bluegymn-font-awesome',"https://use.fontawesome.com/81a6339b46.js",array(),"4.7.0",true);

}

/* add action for scripts */
add_action('wp_enqueue_scripts','bluegymn_register_scripts');

/* menus */
function bluegymn_menus(){
    $locations=array(
        'primary'=>"main nav menu",
        'footer'=>"footer menu Items"
    );
    register_nav_menus($locations);
}
add_action('init','bluegymn_menus');

/* get most read posts */
function bluegymn_popular_posts($post_id) {
	$count_key = 'popular_posts';
	$count = get_post_meta($post_id, $count_key, true);
	if ($count == '') {
		$count = 0;
		delete_post_meta($post_id, $count_key);
		add_post_meta($post_id, $count_key, '0');
	} else {
		$count++;
		update_post_meta($post_id, $count_key, $count);
	}
}
function bluegymn_track_posts($post_id) {
	if (!is_single()) return;
	if (empty($post_id)) {
		global $post;
		$post_id = $post->ID;
	}
	bluegymn_popular_posts($post_id);
}
add_action('wp_head', 'bluegymn_track_posts');




?>