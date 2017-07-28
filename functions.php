<?php 

function main_assets(){
  
  wp_register_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css' );  
  wp_register_style('pure', get_template_directory_uri() . '/assets/css/pure.css' );
  wp_register_style('pure-responsive', get_template_directory_uri() . '/assets/css/pure-responsive.css', array('pure'))  ;
  wp_register_style('social-icons', get_template_directory_uri() . '/assets/lib/fontello/css/face.css');
  wp_register_style('main-styles', get_stylesheet_uri(), array() );

  wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main-js.js', array(), false, true);

  wp_enqueue_style('normalize');
  wp_enqueue_style('pure');
  wp_enqueue_style('pure-responsive');
  wp_enqueue_style('social-icons');
  wp_enqueue_style('main-styles');
  wp_enqueue_script('jquery');
  wp_enqueue_script('main-js');
}

add_action( 'wp_enqueue_scripts', 'main_assets' );


