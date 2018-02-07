<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>


	<header class="site-header row" role="banner">
		<div class="row small-12 columns">
			<div class="header-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="logo" rel="home">
					<img class="float-center" src="<?php echo get_template_directory_uri(); ?>/logo.png" alt="Logo" width="50px" height="50px" />
				</a>
			</div>
		</div>
		<nav class="header-nav" role="navigation">
				<ul class="menu" role="menubar">
					<li><a	href="#">Adventure</a></li>
					<li><a	href="#">Paddlers</a></li>
					<li><a	href="#">Events</a></li>
					<li><a class="button"	href="#">Register to race</a></li>
				</ul>
		</nav>

	</header>
