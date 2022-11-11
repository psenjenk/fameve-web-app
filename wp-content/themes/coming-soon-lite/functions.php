<?php
/**
 * coming-soon-lite functions and definitions
 *
 * @subpackage coming-soon-lite
 * @since 1.0
 */

function coming_soon_lite_setup() {
	
	load_theme_textdomain( 'coming-soon-lite', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background', $defaults = array(
    'default-color'          => '',
    'default-image'          => '',
    'default-repeat'         => '',
    'default-position-x'     => '',
    'default-attachment'     => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
	));

	add_image_size( 'coming-soon-lite-featured-image', 2000, 1200, true );

	add_image_size( 'coming-soon-lite-thumbnail-avatar', 100, 100, true );

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'coming-soon-lite' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', coming_soon_lite_fonts_url() ) );

	// Theme Activation Notice
	global $pagenow;

		if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		add_action( 'admin_notices', 'coming_soon_lite_activation_notice' );
	}

}
add_action( 'after_setup_theme', 'coming_soon_lite_setup' );

// Notice after Theme Activation
function coming_soon_lite_activation_notice() {
	echo '<div class="notice notice-success is-dismissible start-notice">';
		echo '<h3>'. esc_html__( 'Welcome to Luzuk!!', 'coming-soon-lite' ) .'</h3>';
		echo '<p>'. esc_html__( 'Thank you for choosing Coming Soon Lite theme. It will be our pleasure to have you on our Welcome page to serve you better.', 'coming-soon-lite' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=coming_soon_lite_guide' ) ) .'" class="button button-primary">'. esc_html__( 'GET STARTED', 'coming-soon-lite' ) .'</a></p>';
	echo '</div>';
}

function coming_soon_lite_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'coming-soon-lite' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'coming-soon-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 2', 'coming-soon-lite' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'coming-soon-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'coming-soon-lite' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'coming-soon-lite' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

}
add_action( 'widgets_init', 'coming_soon_lite_widgets_init' );

function coming_soon_lite_fonts_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

//Enqueue scripts and styles.
function coming_soon_lite_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'coming-soon-lite-fonts', coming_soon_lite_fonts_url(), array(), null );
	
	//Bootstarp 
	wp_enqueue_style( 'bootstrap-css', esc_url(get_template_directory_uri()).'/assets/css/bootstrap.css' );
	
	// Theme stylesheet.
	wp_enqueue_style( 'coming-soon-lite-basic-style', get_stylesheet_uri() );

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'coming-soon-lite-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'coming-soon-lite-style' ), '1.0' );
		wp_style_add_data( 'coming-soon-lite-ie9', 'conditional', 'IE 9' );
	}
	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'coming-soon-lite-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'coming-soon-lite-style' ), '1.0' );
	wp_style_add_data( 'coming-soon-lite-ie8', 'conditional', 'lt IE 9' );

	//font-awesome
	wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css' );

	require get_parent_theme_file_path( '/lz-custom-style.php' );
	wp_add_inline_style( 'coming-soon-lite-basic-style',$coming_soon_lite_custom_style );

	wp_enqueue_script( 'coming-soon-lite-custom-script', get_theme_file_uri( '/assets/js/custom.js' ), array( 'jquery' ), '2.1.2', true );

	// Load the html5 shiv.
	wp_enqueue_script( 'html5-js', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5-js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'bootstrap-js', esc_url(get_template_directory_uri()) . '/assets/js/bootstrap.js', array('jquery') );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'coming_soon_lite_scripts' );

function coming_soon_lite_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'coming_soon_lite_front_page_template' );

function coming_soon_lite_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function coming_soon_lite_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function coming_soon_lite_sanitize_checkbox( $input ) {
	
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function coming_soon_lite_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

define('COMING_SOON_LITE_LIVE_DEMO',__('https://www.luzukdemo.com/demo/coming-soon/','coming-soon-lite'));
define('COMING_SOON_LITE_PRO_DOCS',__('https://www.luzukdemo.com/docs/coming-soon/','coming-soon-lite'));
define('COMING_SOON_LITE_BUY_NOW',__('https://www.luzuk.com/product/coming-soon-wordpress-theme/','coming-soon-lite'));
define('COMING_SOON_LITE_SUPPORT',__('https://wordpress.org/support/theme/coming-soon-lite/','coming-soon-lite'));
define('COMING_SOON_LITE_CREDIT',__('https://www.luzuk.com/themes/free-coming-soon-wordpress-theme/','coming-soon-lite'));

if ( ! function_exists( 'coming_soon_lite_credit' ) ) {
	function coming_soon_lite_credit(){
		echo "<a href=".esc_url(COMING_SOON_LITE_CREDIT)." target='_blank'>".esc_html__('Coming Soon WordPress Theme','coming-soon-lite')."</a>";
	}
}

/* Excerpt Limit Begin */
function coming_soon_lite_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

function coming_soon_lite_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'coming_soon_lite_loop_columns');
	if (!function_exists('coming_soon_lite_loop_columns')) {
		function coming_soon_lite_loop_columns() {
	return 3; // 3 products per row
	}
}

require get_parent_theme_file_path( '/inc/custom-header.php' );

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/template-functions.php' );

require get_parent_theme_file_path( '/inc/customizer.php' );

require get_parent_theme_file_path( '/inc/getting-started/getting-started.php' );