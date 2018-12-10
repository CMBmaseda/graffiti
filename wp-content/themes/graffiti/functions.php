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

  function get_breadcrumb() {
      echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
      if (is_category() || is_single()) {
          echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
          the_category(' &bull; ');
              if (is_single()) {
                  echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                  the_title();
              }
      } elseif (is_page()) {
          echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
          echo the_title();
      } elseif (is_search()) {
          echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
          echo '"<em>';
          echo the_search_query();
          echo '</em>"';
      }
  }
