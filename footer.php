<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
  <div class="clear"></div>
	</div><!-- .site-content -->
</div><!-- .site-inner -->
	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_class'     => 'primary-menu',
					 ) );
				?>
			</nav><!-- .main-navigation -->
		<?php endif; ?>

		<div class="site-info">

			<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
			<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentysixteen' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->

	</footer><!-- .site-footer -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
