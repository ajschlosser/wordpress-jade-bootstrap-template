<!DOCTYPE html><html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( " | ", true, "right" ); ?>
	</title>
	<link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/stylesheets/styles.css"><?php wp_head(); ?>
</head><body <?php body_class(); ?>>
<header role="banner">
	<h1><?php wp_title(); ?>
	</h1>
	<nav role="navigation"><?php wp_nav_menu(); ?>
	</nav>
</header>
<hr>