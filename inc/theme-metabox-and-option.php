<?php

require get_template_directory() . '/inc/cs-framework/cs-framework.php';

//Remove Customizing Option
function industtry_rrfonline_customize( $options ) {
	$options      = array(); // remove old options
}
add_filter( 'cs_customize_options', 'industtry_rrfonline_customize' );



//Remove Short Code Option
function industtry_rrfonline_shortcode( $options ) {
	$options      = array(); // remove old options
}
add_filter( 'cs_shortcode_options', 'industtry_rrfonline_shortcode' );





function industry_rrfonline_theme_metabox( $options ) {

	 $options      = array(); // remove old options

	  $options[]    = array(

	  	  'id'        => 'industry_rrfonline_slide_meta',
		  'title'     => esc_html__( 'Slide Options','advance-wordpress' ),
		  'post_type' => 'industry-slide',
		  'context'   => 'normal',
		  'priority'  => 'default',
		  'sections'  => array(
		  		array(

		  			  'name'  => 'industry_rrfonline_slide_metabox',
				      'title' => esc_html__( 'Slide Options','advance-wordpress' ),
				      	
				      // begin: fields
				      'fields' => array(
				      	array(
						  'id'       => 'width',
						  'type'     => 'select',
						  'title'    => esc_html__( 'Slide Text Width','advance-wordpress' ),
						  'options'  => array(
						    'col-md-4'	=> '4 Colums',
						    'col-md-5'	=> '5 Colums',
						    'col-md-6'	=> '6 Colums',
						    'col-md-7'	=> '7 Colums',
						    'col-md-8'	=> '8 Colums',
						    'col-md-9'	=> '9 Colums',
						    'col-md-10'	=> '10 Colums',
						    'col-md-11'	=> '11 Colums',
						    'col-md-12'	=> '12 Colums',
						  ),
						  'default'  => 'col-md-6',
						),

				      	array(
						  'id'       => 'offset',
						  'type'     => 'select',
						  'title'    => esc_html__( 'Slide Text Offset','advance-wordpress' ),
						  'options'  => array(
						    'no-offset'     	=> 'No Offset',
						    'col-md-offset-1'	=> '1 Colum',
						    'col-md-offset-2'	=> '2 Colums',
						    'col-md-offset-3'	=> '3 Colums',
						    'col-md-offset-4'	=> '4 Colums',
						    'col-md-offset-5'	=> '5 Colums',
						    'col-md-offset-6'	=> '6 Colums',
						    'col-md-offset-7'	=> '7 Colums',
						    'col-md-offset-8'	=> '8 Colums',
						  ),
						  'default'  => 'no-offset',
						),

						array(
						  'id'       => 'align',
						  'type'     => 'select',
						  'title'    => esc_html__( 'Slide Text Align','advance-wordpress' ),
						  'options'  => array(
						    'left'  => 'Left',
						    'right'  => 'Right',
						    'center'  => 'Center',
						  ),
						  'default'  => 'left',
						),
				      	array(
					          'id'    	=> 'text_color',
					          'type'  	=> 'color_picker',
					          'title' 	=> 'Slide text Color',
					          'default' => esc_attr( '#333' ),
					        ),
				      	array(
					          'id'    	=> 'enable_overlay',
					          'type'  	=> 'switcher',
					          'title' 	=> esc_html__( 'Enable Overlay?','advance-wordpress' ),
					          'default' => false,
					        ),
				      	array(
					          'id'    	=> 'overlay_color',
					          'type'  	=> 'color_picker',
					          'title' 	=> esc_html__( 'Overlay Color','advance-wordpress' ),
					          'default' => esc_attr( '#333' ),
					          'dependency' => array('enable_overlay','==','true'),
					        ),
				      		array(
					          'id'    	=> 'overlay_opacity',
					          'type'  	=> 'number',
					          'title' 	=> esc_html__( 'Overlay Opacity','advance-wordpress' ),
					          'desc' 	=> 'Type a number for overlay opacity, 1 to 100 only',
					          'default' => esc_attr( '70' ),
					          'dependency' => array('enable_overlay','==','true'),
					        ),

				      	),		
		  		),


		),
	  );


  	  $options[]    = array(

  	  'id'        => 'industry_rrfonline_Page_meta',
	  'title'     => esc_html__( 'Slide Options','advance-wordpress' ),
	  'post_type' => 'page',
	  'context'   => 'normal',
	  'priority'  => 'default',
	  'sections'  => array(
	  		array(

	  			  'name'  => 'industry_rrfonline_page_metabox',
			      'title' => esc_html__( 'Page Slide Options','advance-wordpress' ),
			      	
			      // begin: fields
			      'fields' => array(
			      	array(
						  'id'       => 'header_style',
						  'type'     => 'select',
						  'title'    => esc_html__( 'Header Style','advance-wordpress' ),
						  'options'  => array(
						    '1'     => 'Header 1',
						    '2'     => 'Header 2',
						  ),
						  'default'  => '1',
						),
			      	array(
				          'id'    	=> 'enable_title',
				          'type'  	=> 'switcher',
				          'title' 	=> esc_html__( 'Enable Page Title','advance-wordpress' ),
				          'default' => true,
				        ),
			      	array(
				          'id'    	=> 'custom_title',
				          'type'  	=> 'textarea',
				          'title' 	=> esc_html__( 'Add Page Custom Title','advance-wordpress' ),
				          'dependency' => array('enable_title','==','true'),
				        ),
			      	array(
						  'id'       => 'title_text_direction',
						  'type'     => 'select',
						  'title'    => esc_html__( 'Title Text Align','advance-wordpress' ),
						  'options'  => array(
						    'left'     => 'Left',
						    'center'   => 'Center',
						    'right'    => 'Right',
						  ),
						  'default'  => 'left',
						  'dependency' => array('enable_title','==','true'),
						),
			      	),		
	  		),


	),
  );


  

  	/*Slide2 meta*/
  	$options[]    = array(

	  	  'id'        => 'industry_rrfonline_slide2_meta',
		  'title'     => esc_html__( 'Slide Options','advance-wordpress' ),
		  'post_type' => 'industry-slide2',
		  'context'   => 'normal',
		  'priority'  => 'default',
		  'sections'  => array(
		  		array(

		  			  'name'  => 'industry_rrfonline_slide2_metabox',
				      'title' => esc_html__( 'Slide Options','advance-wordpress' ),
				      	
				      // begin: fields
				      'fields' => array(
				      	array(
					          'id'    	=> 'text_color',
					          'type'  	=> 'color_picker',
					          'title' 	=> 'Slide text Color',
					          'default' => esc_attr( '#333' ),
					        ),
				      	array(
					          'id'    	=> 'enable_overlay',
					          'type'  	=> 'switcher',
					          'title' 	=> esc_html__( 'Enable Overlay?','advance-wordpress' ),
					          'default' => false,
					        ),
				      	array(
					          'id'    	=> 'overlay_color',
					          'type'  	=> 'color_picker',
					          'title' 	=> esc_html__( 'Overlay Color','advance-wordpress' ),
					          'default' => esc_attr( '#333' ),
					          'dependency' => array('enable_overlay','==','true'),
					        ),
				      		array(
					          'id'    	=> 'overlay_opacity',
					          'type'  	=> 'number',
					          'title' 	=>  esc_html__( 'Overlay Opacity','advance-wordpress' ),
					          'desc' 	=> esc_html__( 'Type a number for overlay opacity, 1 to 100 only', 'advance-wordpress' ),
					          'default' => esc_attr( '70' ),
					          'dependency' => array('enable_overlay','==','true'),
					        ),

				      	),		
		  		),


		),
	  );	  









	  return $options;

}
add_filter( 'cs_metabox_options', 'industry_rrfonline_theme_metabox' );







// framework options filter example
function industry_rrfonline_theme_options( $options ) {

  $options      = array(); // remove old options

  $options[]    = array(
    'name'      => 'social',
    'title'     => esc_html__( 'Social LInk','advance-wordpress' ),
    'icon'      => 'fa fa-heart',
    'fields'    => array(
      array(
        'id'    => 'socials',
        'type'  => 'group',
        'title' => esc_html__( 'type social link','advance-wordpress' ),
        'button_title' 		=> esc_html__( 'Add New','advance-wordpress' ),
        'accordian_title' 	=> esc_html__( 'Add New Field','advance-wordpress' ),
        'fields' => array(
        	array(
        		'id'	=>	'icon',
        		'type'	=>	'icon',
        		'title'	=>	esc_html__( 'Select icon','advance-wordpress' ),
        	),
        	array(
        		'id'	=>	'link',
        		'type'	=>	'text',
        		'title'	=>	esc_html__( 'type Link','advance-wordpress' ),
        	),
        ),
      ),
		
    )
  );


  $options[]    = array(
    'name'      => 'header_option',
    'title'     => esc_html__( 'Header Setting','advance-wordpress' ),
    'icon'      => 'fa fa-heart',
    'fields'    => array(
      array(
        'id'    => 'logo_text',
        'type'  => 'text',
        'title' => esc_html__( 'Logo Text','advance-wordpress' ),
      ),
	array(
		'id'              => 'header_1_links',
		'type'            => 'group',
		'title'           => esc_html__( 'Header 1 Link','advance-wordpress' ),
		'button_title'    => esc_html__( 'Add New','advance-wordpress' ),
		'accordion_title' => esc_html__( 'Add New Link','advance-wordpress' ),
		'fields'          => array(
			array(
				'id'    => 'text',
				'type'  => 'text',
				'title' => esc_html__( 'Text','advance-wordpress' ),
			),
			array(
				'id'    => 'link',
				'type'  => 'text',
				'title' => esc_html__( 'Link','advance-wordpress' ),
			),
			array(
				'id'    => 'color',
				'type'  => 'color_picker',
				'default'  => esc_attr( '#45be24' ),
				'title' => esc_html__( 'Background Color','advance-wordpress' ),
			),
			array(
				'id'    => 'text_color',
				'type'  => 'color_picker',
				'default'  => esc_attr( '#ffffff' ),
				'title' => esc_html__( 'Text Color','advance-wordpress' ),
			),
			array(
				'id'    => 'tab',
				'type'  => 'select',
				'title' => esc_html__( 'Link Open in','advance-wordpress' ),
				'options' => array(
					'_self'		=>	'same tab',		
					'_blank'	=>	'New tab',		
				),
			),
		  ),
		),
		array(
				  'id'       => 'menu_width',
				  'type'     => 'select',
				  'title'    => esc_html__( 'Width Menu','advance-wordpress' ),
				  'options'  => array(
				    'col-md-4'	=> '4 Colum',
				    'col-md-5'	=> '5 Colums',
				    'col-md-6'	=> '6 Colums',
				    'col-md-7'	=> '7 Colums',
				    'col-md-8'	=> '8 Colums',
				    'col-md-9'	=> '9 Colums',
				    'col-md-10'	=> '10 Colums',
				    'col-md-11'	=> '11 Colums',
				    'col-md-12'	=> '12 Colums',
				  ),
				  'default'  => 'col-md-8',
				),
			array(
				'id'    => 'enable_search',
				'type'  => 'switcher',
				'default'  => true,
				'title' => esc_html__( 'Enable Search Bar on Menu','advance-wordpress' ),
			),
			array(
				  'id'       => 'search_width',
				  'type'     => 'select',
				  'title'    => esc_html__( 'Search Area Width','advance-wordpress' ),
				  'options'  => array(
				    'col-md-1'	=> '1 Colum',
				    'col-md-2'	=> '2 Colum',
				    'col-md-3'	=> '3 Colum',
				    'col-md-4'	=> '4 Colum',
				    'col-md-5'	=> '5 Colums',
				    'col-md-6'	=> '6 Colums',
				    'col-md-7'	=> '7 Colums',
				    'col-md-8'	=> '8 Colums',
				    'col-md-9'	=> '9 Colums',
				    'col-md-10'	=> '10 Colums',
				    'col-md-11'	=> '11 Colums',
				    'col-md-12'	=> '12 Colums',
				  ),
				  'default'  => 'col-md-4',
				  'dependency' => array('enable_search','==','true'),
				),
    )
  );




  $options[]    = array(
    'name'      => 'typography',
    'title'     => esc_html__( 'Typography','advance-wordpress' ),
    'icon'      => 'fa fa-heart',
    'fields'    => array(
      array(
        'id'    => 'body_font',
        'type'  => 'typography',
        'title' => esc_html__( 'Body Font','advance-wordpress' ),
        'default' => array (
        	'family' => 'Montserrat',
        	'variant' => '300',
        )
      ),
      array(
		  'id'         => 'body_font_variants',
		  'type'       => 'checkbox',
		  'title'      => esc_html__( 'Select Font Variants','advance-wordpress' ),
		  'default'      => array('300', '300i', 'regular', 'italic', '600', '600i', '700', '700i'),
		  'options'    => array(
		    '300'      		=> '300',
		    '300i' 			=> '300 Italic',
		    'regular'     	=> '400',
		    'italic'     	=> '400 Italic',
		    '500'     		=> '500',
		    '500i'     		=> '500 Italic',
		    '600'     		=> '600',
		    '600i'     		=> '600 Italic',
		    '700'     		=> '700',
		    '700i'     		=> '700 Italic',
		    '800'     		=> '800',
		    '800i'     		=> '800 Italic',
		    '900'     		=> '900',
		    '900i'     		=> '900 Italic',
		  ),
		),
      array(
        'id'    => 'body_font_size',
        'type'  => 'text',
        'title' => esc_html__( 'Body Font Size','advance-wordpress' ),
        'default' => esc_attr( '14px' ),
      ),
      array(
        'id'    => 'different_heading_font',
        'type'  => 'switcher',
        'title' => esc_html__( 'Different Heading Font?','advance-wordpress' ),
        'default' => false,
      ),
      array(
        'id'    => 'heading_font',
        'type'  => 'typography',
        'title' => esc_html__( 'Heading Font','advance-wordpress' ),
        'default' => array (
        	'family' => 'Montserrat',
        	'variant' => '300',
        ),
        'dependency' => array('different_heading_font','==','true'),
      ),
      array(
		  'id'         => 'heading_font_variants',
		  'type'       => 'checkbox',
		  'title'      => esc_html__( 'Select Font Variants','advance-wordpress' ),
		  'default'      => array('300', '300i', 'regular', 'italic', '600', '600i', '700', '700i'),
		  'options'    => array(
		    '300'      		=> '300',
		    '300i' 			=> '300 Italic',
		    'regular'     	=> '400',
		    'italic'     	=> '400 Italic',
		    '500'     		=> '500',
		    '500i'     		=> '500 Italic',
		    '600'     		=> '600',
		    '600i'     		=> '600 Italic',
		    '700'     		=> '700',
		    '700i'     		=> '700 Italic',
		    '800'     		=> '800',
		    '800i'     		=> '800 Italic',
		    '900'     		=> '900',
		    '900i'     		=> '900 Italic',
		  ),
		  'dependency' => array('different_heading_font','==','true'),
		),
    )
  );



   $options[]    = array(
    'name'      => 'styling',
    'title'     => esc_html__( 'Styling','advance-wordpress' ),
    'icon'      => 'fa fa-heart',
    'fields'    => array(
      array(
        'id'    => 'header_1_menu_bg_color',
        'type'  => 'color_picker',
        'title' => esc_html__( 'Header 1 Menu Bg Color','advance-wordpress' ),
        'default' => esc_attr( '#2b3339' ),
      ),
      array(
        'id'    => 'header_2_menu_bg_color',
        'type'  => 'color_picker',
        'title' => esc_html__( 'Header 2 Menu Bg Color','advance-wordpress' ),
        'default' => esc_attr( '#f4cb0f' ),
      ),
      array(
        'id'    => 'primary_color',
        'type'  => 'color_picker',
        'title' => esc_html__( 'Primary Color','advance-wordpress' ),
        'default' => esc_attr( '#f3c932' ),
      ),
      array(
        'id'    => 'secondary_color',
        'type'  => 'color_picker',
        'title' => esc_html__( 'Secondary Color','advance-wordpress' ),
        'default' => esc_attr( '#45be24' ),
      ),
      
    )
  );

  $options[]    = array(
    'name'      => 'heading_js',
    'title'     => esc_html__( 'Heading JavaScript','advance-wordpress' ),
    'icon'      => 'fa fa-heart',
    'fields'    => array(
      array(
        'id'    => 'heading_js_text',
        'type'  => 'textarea',
        'title' => esc_html__( 'Type java text','advance-wordpress' ),
        
      ),
    )
  ); 

  return $options;

}
add_filter( 'cs_framework_options', 'industry_rrfonline_theme_options' );











?>