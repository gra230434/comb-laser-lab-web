<?php
/**
 * The template part for displaying content on home page
 *
 * @package WordPress
 * @subpackage Kevin
 * @since Comblaser 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" class="home-content">
	<header class="home-entry-header">

		<?php the_title( sprintf( '<h2 id="home-post-title" class="home-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

	</header><!-- .entry-header -->

	<div class="home-entry-content">
		<?php if ( has_post_thumbnail() ){
			// has post thumbnail
			comblaser_post_thumbnail( "home-post-thumbnail" );
		} elseif ( has_excerpt() ){
			// has post excerpt but doesn't have post thumbnail
			// input "home-post-content" as class
			comblaser_excerpt( "home-post-excerpt" );
		} else {
			// doesn't have post thumbnail & excerpt
			comblaser_content( "home-post-content" );
		} ?>
	</div><!-- .home-entry-content -->

	<footer class="home-entry-footer">
		<?php
		// editor can edit the post
			edit_post_link(__( 'Edit', 'twentysixteen' ),'<span class="edit-link">','</span>');
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
