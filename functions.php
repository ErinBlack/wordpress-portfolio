<?php

  add_theme_support('menus');

  
  //adding nav menus
  function register_theme_menus(){

    register_nav_menus(
      array(
        'primary-menu' => __('Primary Menu')
      )
    );
  } // end register_theme_menus

  add_action('init', 'register_theme_menus');
  //Souce Wordpress Treehouse theme styles
  function wpt_theme_styles(){
    //take you from root directory to foundations.css file
    wp_enqueue_style( 'foundation_css', get_template_directory_uri() . '/css/foundation.css' );
    //take you from root directory to normalize.css file
    // wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
    //google fonts url
    wp_enqueue_style( 'googlefont_css', 'http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' );
    //take you from root directory to style.css
    wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css' );
  }// end wpt_theme_styles
  add_action('wp_enqueue_scripts', 'wpt_theme_styles' );

  //Source JS files to theme
  function wpt_theme_js(){
    wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js', '', '', false );
    wp_enqueue_script( 'foundation_js', get_template_directory_uri() . '/js/foundation.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'app_js', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation_js'), '', true );
    add_action('wp_enqueue_scripts', 'wpt_theme_js' );
  } // end wpt_theme_js
 ?>
