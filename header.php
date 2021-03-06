<?php
/**
 * Displays all of the <head> section and everything up till <div id="content">
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="/favicon.ico">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">

<?php wp_head(); ?>
<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body <?php body_class(); ?>>
<header id="masthead" class="site-header clearfix" role="banner">
	<div class="wrap">
		<div class="site-logo">
			<?php if ( is_front_page() ) { ?>
			<h1 class="site-title">David R Green</h1>
			<?php } else { ?>
			<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">David R Green<span class="subtitle">Front-End Developer w/ PHP Savvy</span></h2></a>
			<?php } ?>
		</div>
	</div>
	<?php if ( ! is_front_page() ) { ?>
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<div class="wrap">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'fallback_cb' => '__return_false' ) ); ?>
		</div>
	</nav>
	<?php } ?>
</header>
<div id="page" class="site-container">

	<div id="content" class="content-sidebar-wrap clearfix">
