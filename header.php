<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">

	<a href="<?php echo get_home_url(); ?>">
		<?php get_template_part('partials/scroll-text'); ?>
	</a>



		<div class="site-branding">
	<!-- MAybe a logo  -->
		</div><!-- .site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation"> -->
			<?php //wp_nav_menu( array( 'theme_location' => 'menu-main', 'menu_id' => 'menu-main' ) ); ?>
		<!-- </nav>#site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
