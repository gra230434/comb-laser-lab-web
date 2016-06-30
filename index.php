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
			<div style="margin-bottom:50px;">
				<img src="<?php bloginfo('template_directory'); ?>/image/about.jpg">
			</div>
			<div class="CAU-post CAU-half-left">
				<div class="CAU-half-title">
				  <h3>大家好，我是實驗室負責人鄭王曜</h3>
					<p>主要負責籌錢，讓大家工作開心，還有負責解決同學們實驗上的問題，包含實驗的阻礙與心靈的創傷，求診完的同學通常含笑離開，因為我十個建議常有一個會是對的。</p>
					<p>其實我也會懷疑，那一個對的是因為同學問診時描述錯誤所致．但基本上，我在實驗室，對學生而言還是有用的，此點必然無誤。</p>
					<span><strong>TEL:</strong>886-3-4227151 ext 65337</span><br>
					<span><strong>Email:</strong>wycheng@ncu.edu.tw</span>
				</div><!-- CAU-half-title -->
			</div>
			<div class="CAU-post CAU-half-right">
				<div class="CAU-half-post">
			  	<p>我們實驗室屬於物理領域中的AMO領域中的”High-precision measurement”，美國物理協會稱為︰Atomic, Molecular Optical Science. 其中原子分子是形容詞，即，應用於原子分子等基礎物理的光學探討</p>
          <p>當然，這個領域發展出來的技術對其他領域也會有應用。例如，量測重力波的關鍵技術，Pound-Drever Hall鎖頻，即是我們領域發展出來的．近代物理的發展。</p>
          <p>在我們領域之中每隔幾年就拿諾貝爾獎．以近二十年為例．1997年laser cooling; 2001年 Bose-Einstein Condensation; 2005年 high-precision measurement and comb laser; 2012年 Quantum manipulation (quantum computing)。</p>
					<p>歡迎同學們加入實驗室，學點技術，想想物理，感受team work，其樂無窮。</p>
				</div><!-- CAU-half-post -->
      </div>
			<div class="clear"></div>
	  </div>
	</section><!-- comblaseraboutus -->

	<section id="comblaser_our_team" class="comblaserourteam">
		<div class="COT-text site-inner">
		  <h2>OUR TEAM</h2>
		  <h4>我們團隊</h4>
			<div>
				<ul class="COT-ul">
		  		<?php dynamic_sidebar( 'sidebar-teacher' ); ?>
				</ul>
				<div class="clear"></div>
			</div>
			<div>
				<h3>實驗室學生</h3>
				<ul class="COT-ul">
		  		<?php dynamic_sidebar( 'sidebar-mem' ); ?>
				</ul>
				<div class="clear"></div>
			</div>
			<div>
				<h3>實驗室學生</h3>
				<ul class="COT-ul">
					<?php dynamic_sidebar( 'sidebar-missed' ); ?>
				</ul>
				<div class="clear"></div>
			</div>
			<div>
				<h3>外國訪客</h3>
					<ul class="COT-ul">
		  			<?php dynamic_sidebar( 'sidebar-access' ); ?>
					</ul>
				<div class="clear"></div>
			</div>
		</div>
	</section><!-- comblaserourteam -->
<?php endif ?>


<div class="site-inner">
  <div id="content" class=<?php echo "'site-content";
	                              if( is_home() ){echo " no-sidebar";
																echo "'";}?>>
	  <div id="primary" class="home-content-area">

		<?php if ( have_posts() ) : ?>
			<?php if ( is_home() ) : // have post and on home page?>

			  <?php // Start the loop. ?>
				<ul class='home-post'>
					<?php while ( have_posts() ) : the_post();
					echo "<li class='home-post-li'>";
					get_template_part( 'template-parts/content', "home" );
					echo "</li>";
		  		endwhile;// End the loop.?>
				</ul><!-- .home-post -->
				<?php // home post end ?>

			<?php else: ?>
			  <main id="main" class="site-main" role="main">
			  <?php // Start the loop.
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
		      	) ); ?>
				  </main><!-- .site-main -->
			<?php endif;// <end have post and on home page>

		// if ( have_posts() ) :  <If no content, include the "No posts found" template.>
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	  </div><!-- .home-content-area -->

<?php if( ! is_home() ):
	get_sidebar();
endif; ?>

<?php get_footer(); ?>
