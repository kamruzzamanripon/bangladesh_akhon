<?php
	$menu_width 	= cs_get_option('menu_width');
	$enable_search 	= cs_get_option('enable_search');
	$search_width 	= cs_get_option('search_width');

?>

<header>
		<div class="header-top-area header-style-2">
			<div class="header-top col-md-12"><!-- Header Top Start -->
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="site-branding">
								<?php get_template_part('template-parts/headers/logo'); ?>
							</div><!-- .site-branding -->
						</div>

						<div class="col-md-8 text-right">
							<div class="header-right-style-2">
								<a href="">
									<i class="fa fa-phone"></i>
									Call us <br>
									<span>+645-867-8753</span>
								</a>

								<a href="">
									<i class="fa fa-envelope"></i>
									Send an email <br>
									<span>info@sitename.com</span>
								</a>
							</div>
											
						</div>
					</div>
				</div>
			</div><!-- Header Top ending -->
					

			
			<div class="header-bottom-area col-md-12"><!-- Header Bottom start -->
				<div class="container">
					<div class="row">
						<div class="<?php if(!empty($menu_width)) : ?><?php echo esc_attr($menu_width); ?> <?php else: ?>col-md-8<?php endif; ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									) );
								?>
							</div>

							<?php if($enable_search != false) : ?>
							<div class="<?php if(!empty($search_width)) : ?><?php echo esc_attr($search_width); ?> <?php else: ?> col-md-4 <?php endif; ?>">
								<div class="header-search-form">
									<?php get_search_form(); ?>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div><!-- Header Bottom End -->
		
			
		</div>
	</header>