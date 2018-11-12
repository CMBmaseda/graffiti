<?php
/**
 * The header for our theme.
 *
 * @package graffiti
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<title><?php the_title(); ?> | Graffiti</title>

<meta name="keywords" content="" >
<meta name="description" content="" >

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script type="text/javascript" src="//fast.fonts.net/jsapi/1504234f-c647-4850-97c8-bb98b8733769.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="header">
    <header class="site-header">
    </header><!-- .site-header -->
  </div><!-- .header -->

  <div class="content">
