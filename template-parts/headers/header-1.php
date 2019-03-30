<?php
	$menu_width 	= cs_get_option('menu_width');
	$enable_search 	= cs_get_option('enable_search');
	$search_width 	= cs_get_option('search_width');

?>
<header>
		<div class="header-top-area">
			<div class="header-top col-md-12"><!-- Header Top Start -->
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="site-branding">
								<?php get_template_part('template-parts/headers/logo'); ?>
							</div><!-- .site-branding -->
						</div>

						<div class="col-md-8">

							
							<?php
								/*Home-2 start by ripon*/
								if (is_page( '389')) { ?>
									<div class="home2-header-right-btn">
										<ul>
											<li><a href=""><i class="fa fa-phone"></i>Call us <span>+654-867-8753</span></a></li>
											<li><a href=""><i class="fa fa-envelope"></i>Send an email <span>info@sitename.com</span></a></li>
										</ul>
									</div>
								
							<?php /*Home-2 end*/ } else { ?>   		

							

							
							<!-- Main header page-1 by course -->
							<?php
								$header_1_links = cs_get_option('header_1_links');
								if(!empty($header_1_links)) :
							?>
							<div class="header-right-btn">

								<?php foreach($header_1_links as $link) : ?>
								
								<?php if(!empty($link['link'])) : ?> <a <?php else: ?> <span <?php endif; ?> style="background-color: <?php echo esc_attr($link['color']);?>; color: <?php echo esc_attr($link['text_color']); ?>" target="<?php echo esc_attr($link['tab']); ?>" href="<?php echo esc_url($link['link']);?>"> <?php echo esc_html($link['text']);?> <?php if(!empty($link['link'])) : ?> </a> <?php else: ?> </span> <?php endif; ?>
								
								<?php endforeach; ?>
								
							</div>
								<?php endif; ?>

						<?php } ?>	
						</div>
					</div>
				</div>
			</div><!-- Header Top ending -->
					
			

			

			<?php
				/*Home-2 start by ripon*/
				if (is_page( '389')) { ?>

					<div class="home2-header-bottom-area col-md-12"><!-- Header Bottom start -->
						<div class="container">
							<div class="row">
								<div class="col-md-8">
									<?php
										wp_nav_menu( array(
											'theme_location' => 'menu-2',
											'menu_id'        => 'primary-menu',
										) );
									?>
								</div>
								<div class="col-md-4">
									<div class="header-search-form search-icon">
										<?php get_search_form(); ?>
										<i class="fa fa-search"></i>
									</div>
								</div>
							</div>
						</div>
					</div><!-- Header Bottom End -->


			<?php /*Home-2 end*/ } else { ?>



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
			<?php } ?>
			
		</div>
	</header>