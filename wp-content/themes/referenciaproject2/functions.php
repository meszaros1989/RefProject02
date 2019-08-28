<?php

function wpassist_remove_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css' );

// ACTIVATE MENUS

function mytheme_script_enqueue() {

    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/styles.css', array(), '1.0.0', 'all');
    wp_enqueue_script('carouseljs', get_template_directory_uri() . '/js/carousel.js', array(), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'mytheme_script_enqueue');

function mytheme_theme_setup(){

    add_theme_support('menus');

    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'mytheme_theme_setup');

// ADD THEME SUPPORT

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));

// SIDEBAR

function mytheme_widget_setup() {

  register_sidebar(
                array(
                        'name'          => 'Sidebar',
                      	'id'            => 'sidebar-1',    // ID should be LOWERCASE  ! ! !
                        'class'         => 'custom',
                        'description'   => 'Standard Sidebar',
                      	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                      	'after_widget'  => '</aside>',
                      	'before_title'  => '<h1 class="widget-title">',
                      	'after_title'   => '</h1>'
                      ));

}

add_action('widgets_init', 'mytheme_widget_setup');
