<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<?php $header_nav_menu = array('theme_location' => 'primary',
                                	'menu_class'    => 'primary-menu', ); ?>

<?php if( is_home() or is_front_page() ): ?>
	<header id="masthead" class="home-header site-header-background" role="banner">
		<div class="home-header-main">

			<?php if ( has_nav_menu( 'primary' )) : ?>
				<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>
				<div id="site-header-menu" class="site-header-menu">
					<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
						<?php	wp_nav_menu( $header_nav_menu ); ?>
					</nav><!-- .main-navigation -->
				</div><!-- .site-header-menu -->
			<?php endif; //has_nav_menu( 'primary' ) ?>

			<div class="home-branding">
				<h1 class="home-title" style="float:left">Laboratory for comb laser</h1><h1 class="home-title" style="float:right">based spectroscopy</h1>
				<?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<h3 class="home-description"><?php echo $description; ?></h3>
					<?php endif; ?>
			</div><!-- .home-branding -->


		</div><!-- .home-header-main -->
	</header><!-- .home-header  .site-header-background -->
	<?php //is_home() or is_front_page() ?>

<?php else:?>
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
				<div class="site-branding">
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
					  $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
			</div><!-- .site-header-main -->

			<div class="site-header-nav">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>
				<div id="site-header-menu" class="site-header-menu">
					<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
						<?php	wp_nav_menu( $header_nav_menu ); ?>
					</nav><!-- .main-navigation -->
				</div><!-- .site-header-menu -->
			<?php endif; ?>
			</div><!-- .site-header-nav -->

			<div class="clear"></div>

		</header><!-- .site-header -->
<?php endif ?>
