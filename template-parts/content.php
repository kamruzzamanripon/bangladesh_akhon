<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Industry_RRF_Online
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(has_post_thumbnail()) : ?>
		<div class="industry-featured-content">
			<?php the_post_thumbnail('industry-blog-thumbnail'); ?>
		</div>
	<?php endif; ?>	
	

	<?php if(!is_single()) : ?>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php advance_wordpress_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
			if(is_single()){
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'advance-wordpress' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
				get_the_title()
				) );
			}else {
				the_excerpt();
				echo '<p class="read-more-wrap"><a href="' . esc_url( get_permalink() ) . '" class="boxed-btn"> Read more</a></p>';
			}


			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'advance-wordpress' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
	<div class="clearfix"></div>

	<footer class="entry-footer">
		<?php advance_wordpress_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
