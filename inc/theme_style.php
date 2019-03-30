<?php

function industry_rrfonline_custom_css() {

	$header_1_menu_bg_color = cs_get_option('header_1_menu_bg_color');
	$header_2_menu_bg_color = cs_get_option('header_2_menu_bg_color');
	$primary_color 			= cs_get_option('primary_color');
	$secondary_color 		= cs_get_option('secondary_color');

	$body_font 		= cs_get_option('body_font');
	$body_font_size = cs_get_option('body_font_size');

	$different_heading_font = cs_get_option('different_heading_font');
	$heading_font 			= cs_get_option('heading_font');


	
	if(!empty($body_font)){
		$body_font_family = $body_font['family'];
	}else {
		$body_font_family = 'Montserrat';
	}

	if(!empty($heading_font)){
		$heading_font_family = $heading_font['family'];
	}else {
		$heading_font_family = 'Montserrat';
	}

	wp_enqueue_style( 'industry_rrfonline_custom', get_template_directory_uri() . '/assets/css/custom.css' );
	$custom_css = '';
	$custom_css .= '
		body {font-family: '.esc_html( $body_font_family ).';font-size: '.esc_attr($body_font_size).'; font-weight: '.$body_font['variant'].';}
	';

	if($different_heading_font == true){
		$custom_css .= '
		h1, h2, h3, h4, h5, h6 {font-family: '.esc_html( $heading_font_family ).'; font-weight: '.esc_attr( $heading_font['variant'] ).';}
	';
	}


	$custom_css .= '
		.header-bottom-area {
    	background-color: '.esc_attr($header_1_menu_bg_color).';
		}

		.service-icon,
		.cta-text h3 strong
		 {
			color: '.esc_attr($primary_color).';
		}
		a.boxed-btn {
			background-color: '.esc_attr($primary_color).';
		}
	';

	wp_add_inline_style( 'industry_rrfonline_custom', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'industry_rrfonline_custom_css' );