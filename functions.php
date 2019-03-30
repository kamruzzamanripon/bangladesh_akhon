<?php
/**
 * Industry RRF Online functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Industry_RRF_Online
 */

if ( ! function_exists( 'advance_wordpress_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function advance_wordpress_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Industry RRF Online, use a find and replace
		 * to change 'advance-wordpress' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'advance-wordpress', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		add_theme_support('custom-logo', array(
			'height' => '100',
			'width' => '350'
		));

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size('industry-blog-thumbnail', 750, 450, true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'advance-wordpress' ),
			'menu-2' => esc_html__( 'Primary-sub', 'advance-wordpress' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'woocommerce' );

	}
endif;
add_action( 'after_setup_theme', 'advance_wordpress_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function advance_wordpress_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'advance_wordpress_content_width', 640 );
}
add_action( 'after_setup_theme', 'advance_wordpress_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function advance_wordpress_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'advance-wordpress' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'advance-wordpress' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widgets', 'advance-wordpress' ),
		'id'            => 'footer',
		'description'   => esc_html__( 'Add footer widgets here.', 'advance-wordpress' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'advance_wordpress_widgets_init' );


if ( ! function_exists( 'industry_rrfonline_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Sixteen.
 *
 * Create your own industry_rrfonline_fonts_url() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function industry_rrfonline_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	$body_font = cs_get_option('body_font');
	$body_font_variants_array = cs_get_option('body_font_variants');
	$body_font_variants = implode(',', $body_font_variants_array);

	$different_heading_font = cs_get_option('different_heading_font');

	$heading_font = cs_get_option('heading_font');
	$heading_font_variants_array = cs_get_option('heading_font_variants');
	$heading_font_variants = implode(',', $heading_font_variants_array);
	
	
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
	
	if($different_heading_font == true){
		$fonts[] = ''.esc_attr( $heading_font_family ).':'.esc_attr($heading_font_variants).'';
	}

	$fonts[] = ''.esc_attr( $body_font_family ).':'.esc_attr($body_font_variants).'';

	
	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;









/**
 * Enqueue scripts and styles.
 */
function advance_wordpress_scripts() {

	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'industry_rrfonline-fonts', industry_rrfonline_fonts_url(), array(), null );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/assets/css/slicknav.min.css', array(), '3.3.7', 'all');
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.7.0', 'all');
	wp_enqueue_style( 'advance-wordpress-default', get_template_directory_uri() . '/assets/css/default.css', array(), '1.0.0', 'all');

	
	wp_enqueue_style( 'advance-wordpress-style', get_stylesheet_uri() );

	
	wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), true );
	wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array('jquery'), true );
	wp_enqueue_script('industry_rrfonline-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), true );

	//inline java script
		$heading_js = cs_get_option('heading_js_text');
	wp_add_inline_script( 'industry_rrfonline-main', $heading_js, $position = 'after' );

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'advance_wordpress_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/theme_style.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/theme-metabox-and-option.php';
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/required-plugings.php';



/*WooCommerce function*/

if(class_exists( 'WooCommerce' )){

	add_filter('add_to_cart_fragments', 'header_add_to_cart_fragment');
	function advance_wordpress_header_add_to_cart_fragment( $fragments ) {
	    global $woocommerce;
	 
	    ob_start();
	 
	    advance_wordpress_woocommerce_cart_link();
	 
	    $fragments['a.stock-cart'] = ob_get_clean();
	 
	    return $fragments;
	 
	}
	 
	function advance_wordpress_woocommerce_cart_link() {
	    global $woocommerce;
	    ?>

		<a href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?> <?php _e('in your shopping cart', 'woothemes'); ?>" class="stock-cart"><i class="fa fa-shopping-cart"></i><span class="stock-cart-count"> <?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count); ?> </span></a>

   <?php
}




function advance_wordpress_import_files() {
	return array(
		array(
			'import_file_name'           => esc_html__( 'advance_wordpress_demo_file', 'advance_wordpress' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo-data/advance-wordpress.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo-data/advance-wordpress-widgets.wie',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo-data/advance-wordpress-export.dat',	
			
			
	 )	
	);
}
add_filter( 'pt-ocdi/import_files', 'advance_wordpress_import_files' );













}
