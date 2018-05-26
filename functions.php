<?php

function b18_theme_styles() {

  wp_enqueue_style( 'bootstrap_css' , get_template_directory_uri() . '/css/bootstrap.min.css');

  wp_enqueue_style( 'googlefonts_css' ,  'https://fonts.googleapis.com/css?family=Playfair+Display:700,900' );

  wp_enqueue_style( 'style_css' , get_template_directory_uri() . '/style.css');

  wp_enqueue_style( 'blog_css' , get_template_directory_uri() . '/css/blog.css');

}
  add_action( 'wp_enqueue_scripts', 'b18_theme_styles' );

function b18_theme_js() {

  wp_enqueue_script( 'popper_js', get_template_directory_uri() . '/js/popper.min.js', array('jquery'), '', true );

  wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );

  wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/holder.min.js', array(), '', true );

}
add_action( 'wp_enqueue_scripts', 'b18_theme_js' );

 ?>
