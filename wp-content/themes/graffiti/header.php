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

<title><?php the_title(); ?> | <?php echo get_bloginfo( 'name' ); ?></title>
<link rel="canonical" href="<?php echo get_site_url(); ?>" />
<meta name="keywords" content="" >
<meta name="description" content="" >
<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="//fast.fonts.net/jsapi/1504234f-c647-4850-97c8-bb98b8733769.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Abril+Fatface|Quicksand' rel='stylesheet' type='text/css'>

<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Insert Google Analytics -->
