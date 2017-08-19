<?php

  //Souce Wordpress Treehouse theme styles
  function wpt_theme_styles(){
    //take you from root directory to foundations.css file
    wp_enqueue_style('foundation_css', get_template_directory_uri() .
    'css/foundations.css' );
    //take you from root directory to normalize.css file
    wp_enqueue_style('foundation_css', get_template_directory_uri() .
    'css/normalize.css' );
    //google fonts url
    wp_enqueue_style('foundation_css',
    'url(http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic);');
    //take you from root directory to style.css
    wp_enqueue_style('foundation_css', get_template_directory_uri() .
    '/style.css' );
  }
  add_action('wp_enqueue_scripts', 'wpt_theme_styles' );

 ?>
