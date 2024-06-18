<?php

add_editor_style('css/wp-editor.css');

add_action( 'after_setup_theme', 'theme_add_thumbnail_support' );
function theme_add_thumbnail_support() {
    add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
}

function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg';
    return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

if ( is_singular() && get_option( 'thread_comments' )) {
	wp_enqueue_script( 'comment-reply' );
}

function theme_enqueue_styles() {
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    //wp_enqueue_style('slick-style', get_template_directory_uri() . '/css/slick.css');    
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_footer_scripts() {
    if (!is_admin()) {                
        //wp_enqueue_script('slick-js', get_template_directory_uri() . '/js/slick.js', array('jquery'), null, true);
        wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true);
    }
}
add_action('wp_enqueue_scripts', 'theme_enqueue_footer_scripts');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Thema Opties',
        'menu_title'    => 'Thema Opties',
        'menu_slug'     => 'website-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

function register_my_menus() {
  register_nav_menus(
    array(
      'primary' => __('Hoofdmenu'),
      'legal' => __('Legal Menu'),
	  'navigatie' => __('Navigatie Menu'),
      'mobile' => __('Mobile Menu'),
    )
  );
}
add_action('init', 'register_my_menus');

?>