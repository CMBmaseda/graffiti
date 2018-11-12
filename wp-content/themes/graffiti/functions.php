<?php
/**
 * graffiti functions and definitions
 *
 * @package graffiti
 */

  add_action( 'after_setup_theme', 'graffiti_after_setup_theme' );
  function graffiti_after_setup_theme() {
    // image sizes
    add_theme_support('post-thumbnails');
    add_image_size('accordion', 940, 450, true);
    // menus
    register_nav_menus( array(
      'primary_nav' => 'Primary Nav',
      'mobile_nav' => 'Mobile Nav',
    ) );
  }
