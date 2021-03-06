<?php 

/*
  ===================================================
    Theme support
  ===================================================
*/

add_theme_support('post-thumbanils');

function main_assets(){
  
  wp_register_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css' );  
  wp_register_style('pure', get_template_directory_uri() . '/assets/css/pure.css' );
  wp_register_style('pure-responsive', get_template_directory_uri() . '/assets/css/pure-responsive.css', array('pure'));
  wp_register_style('pure-offsets', get_template_directory_uri() . '/assets/css/pure-offsets.css', array('pure'));
  wp_register_style('circliful-css', get_template_directory_uri() . '/assets/css/circliful-css.css', array())  ;
  wp_register_style('social-icons', get_template_directory_uri() . '/assets/lib/fontello/css/face.css');
  wp_register_style('main-styles', get_stylesheet_uri(), array() );

  wp_register_script('countTo',  get_template_directory_uri() . '/assets/js/countTo.js', array( 'jquery' ), NULL, true );
  wp_register_script( 'circliful-js', get_template_directory_uri() . '/assets/js/circliful.min.js', array( 'jquery' ), NULL, true );
  wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main-js.js', array(), false, true);

  wp_enqueue_style('normalize');
  wp_enqueue_style('pure');
  wp_enqueue_style('pure-responsive');
  wp_enqueue_style('pure-offsets');
  wp_enqueue_style('social-icons');
  wp_enqueue_style('circliful-css');
  wp_enqueue_style('main-styles');
  wp_enqueue_script('jquery');
  wp_enqueue_script('countTo');
  wp_enqueue_script('circliful-js');
  wp_enqueue_script('main-js');
}

add_action( 'wp_enqueue_scripts', 'main_assets' );


/*
  ===================================================
    MENU
  ===================================================
*/

function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );

function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'pure-menu-item';
  return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);

add_filter( 'nav_menu_link_attributes', function($atts) {
        $atts['class'] = "pure-menu-link";
        return $atts;
}, 100, 1 );

