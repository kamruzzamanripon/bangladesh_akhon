<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Industry_RRF_Online
 */

	

get_header(); ?>

		
		
		<div style="background-image: url(<?php the_post_thumbnail_url('large'); ?>);" class="industry-page-title-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					
						
							<h2><?php esc_html__( 'Shop', 'advance-wordpress' ) ?></h2>
						
									
							
						<?php if (function_exists('bcn_display')) { bcn_display(); } ?>
						
					</div>
				</div>
			</div>
		</div>





	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php

								woocommerce_content();

						?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php
get_footer();
