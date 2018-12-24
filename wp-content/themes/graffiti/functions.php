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
  // menus
  register_nav_menus( array(
    'primary_nav' => 'Primary Nav',
    'mobile_nav' => 'Mobile Nav',
  ) );
}


// Breadcrumbs
function get_breadcrumb() {
  // echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
  if (is_category() || is_single()) {
    // echo "&nbsp; &#8594; &nbsp;";
    // the_category(' &bull; ');
    if (is_single()) {
      // echo "<br>";
      the_title();
    }
  } elseif (is_page()) {
    echo "<br>";
    echo the_title();
  } elseif (is_search()) {
    echo "&nbsp; &#8594; &nbsp;Search Results for... ";
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
  register_sidebar( array (
    'name' => 'Iframe-Sidebar',
    'id' => 'sidebar-iframe',
    'description' => 'This sidebar is located in the center of the homepage. It can be any kind of iframe (src="--CONTENT--")',
    'before_widget' => '',
    'after_widget' => '',
  ));
  register_sidebar( array (
    'name' => 'Gallery-Sidebar',
    'id' => 'sidebar-gallery',
    'description' => 'This sidebar is located in the center of the homepage under the iframe. Images should be square-shaped and a minimum of 400x400 pixels.',
  ));
}
add_action('widgets_init', 'graffitiWidgetInit');

// Load widgets.
include ( TEMPLATEPATH . '/lib/widgets/facebook-widget.php' );
include ( TEMPLATEPATH . '/lib/widgets/instagram-widget.php' );
include ( TEMPLATEPATH . '/lib/widgets/twitter-widget.php' );
include ( TEMPLATEPATH . '/lib/widgets/youtube-widget.php' );
include ( TEMPLATEPATH . '/lib/widgets/github-widget.php' );
include ( TEMPLATEPATH . '/lib/widgets/linkedin-widget.php' );
include ( TEMPLATEPATH . '/lib/widgets/phone-widget.php' );
include ( TEMPLATEPATH . '/lib/widgets/email-widget.php' );

include ( TEMPLATEPATH . '/lib/widgets/iframe-widget.php' );
include ( TEMPLATEPATH . '/lib/widgets/gallery-widget.php' );

include ( TEMPLATEPATH . '/lib/widgets/analytics-widget.php' );


// Load the custom post types.
include ( TEMPLATEPATH . '/lib/home-profile.php' );
include ( TEMPLATEPATH . '/lib/home-thumbs.php' );
