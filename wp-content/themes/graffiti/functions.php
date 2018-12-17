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


  // Breadcrumbs
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


  // Add custom widgets to the dashboard
  function graffitiWidgetInit() {
    register_sidebar( array (
      'name' => 'Footer-Sidebar',
      'id' => 'sidebar-facebook',
      'id' => 'sidebar-instagram',
      'id' => 'sidebar-twitter',
      'id' => 'sidebar-youtube',
      'id' => 'sidebar-github',
      'id' => 'sidebar-linkedin',
      'id' => 'sidebar-phone',
      'id' => 'sidebar-email',
      'description' => 'This sidebar is located at the bottom of the page in the center.'
      // WP li tags inserted by default
    ));
    register_sidebar( array (
      'name' => 'Analytics-Sidebar',
      'id' => 'sidebar-analytics',
      'description' => 'This sidebar is located below the body tag.',
      'before_widget' => '',
      'after_widget' => '',
      'before_title' => '',
      'after_title' => ''
    ));
  }
  add_action('widgets_init', 'graffitiWidgetInit');

  // Load widgets.
  include ( TEMPLATEPATH . '/lib/facebook-widget.php' );
  include ( TEMPLATEPATH . '/lib/instagram-widget.php' );
  include ( TEMPLATEPATH . '/lib/twitter-widget.php' );
  include ( TEMPLATEPATH . '/lib/youtube-widget.php' );
  include ( TEMPLATEPATH . '/lib/github-widget.php' );
  include ( TEMPLATEPATH . '/lib/linkedin-widget.php' );
  include ( TEMPLATEPATH . '/lib/phone-widget.php' );
  include ( TEMPLATEPATH . '/lib/email-widget.php' );

  include ( TEMPLATEPATH . '/lib/analytics-widget.php' );


  // Load the custom post types.
  include ( TEMPLATEPATH . '/lib/home-thumbs.php' );
