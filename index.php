<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php if ( is_home() ): ?>

	<section id="comblaser_about_us" class="comblaseraboutus">
		<div class="CAU-text site-inner">
			<div class="CAU-title">
	  	  <h2>ABOUT US</h2>
	  	  <h4>關於我們</h4>
			</div>
			<div class="CAU-post CAU-half">
				<div class="CAU-half-title">
				  <h3>test test test test twentysixteen the custom logo</h3>
				</div><!-- CAU-half-title -->
			</div>
			<div class="CAU-post CAU-half">
				<div class="CAU-half-post">
			  	<p>But when it comes to natural beauty in Japan, it's hard to top Tohoku.Located at the tip of Japan's main island of Honshu, the Tohoku region is made up of six prefectures: Aomori, Akita, Fukushima, Iwate, Miyagi and Yamagata.</p>
          <p>Though devastated by the tsunami and earthquake in 2011, Tohoku's recovery has been swift.Japanese and foreign visitors alike are returning to the area -- and visiting in greater numbers -- for its timeless art, culture, food and scenery that's truly breathtaking in every season.</p>
          <p>We've put together a gallery of natural Tohoku highlights that offers a glimpse of the beauty this region has to offer.</p>
				</div><!-- CAU-half-post -->
      </div>
			<div class="clear"></div>
	  </div>
	</section><!-- comblaseraboutus -->

	<section id="comblaser_our_team" class="comblaserourteam">
		<div class="COT-text site-inner">
		  <h2>OUR TEAM</h2>
		  <h4>我們團隊</h4>
			<ul class="COT-ul">
		  	<?php dynamic_sidebar( 'sidebar-mem' ); ?>
			</ul>
			<div class="clear"></div>
		</div>
	</section><!-- comblaserourteam -->
<?php endif ?>


<div class="site-inner">
  <div id="content" class=<?php echo "'site-content";
	                              if( is_home() ){echo " no-sidebar";
																echo "'";}?>>
	  <div id="primary" class="content-area">
		  <main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<?php if ( is_home() ) : // have post and on home page?>

			  <?php // Start the loop. ?>
				<ul class='home-post'>
					<?php while ( have_posts() ) : the_post();
					echo "<li class='home-post-li'>";
					get_template_part( 'template-parts/content', "home" );
					echo "</li>";
			    // End the loop.
		  		endwhile;
			    ?>
				</ul><!-- .home-post -->
				<?php // home post end ?>
			<?php else:

			// Start the loop.
			  while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
			  	get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			  endwhile;

			// Previous/next page navigation.
		  	the_posts_pagination( array(
		  		'prev_text'          => __( 'Previous page', 'twentysixteen' ),
		  		'next_text'          => __( 'Next page', 'twentysixteen' ),
		  		'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
		  	) );
      endif;// <end have post and on home page>

		// if ( have_posts() ) :  <If no content, include the "No posts found" template.>
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		  </main><!-- .site-main -->
	</div><!-- .content-area -->

<?php if( ! is_home() ):
	get_sidebar();
endif; ?>

<?php get_footer(); ?>
