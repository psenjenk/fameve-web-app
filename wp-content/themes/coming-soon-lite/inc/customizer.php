<?php
/**
 * coming-soon-lite: Customizer
 *
 * @subpackage coming-soon-lite
 * @since 1.0
 */

function coming_soon_lite_customize_register( $wp_customize ) {

	$wp_customize->add_setting('coming_soon_lite_logo_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('coming_soon_lite_logo_padding',array(
		'label' => __('Logo Padding','coming-soon-lite'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('coming_soon_lite_logo_top_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'coming_soon_lite_sanitize_float'
	));
	$wp_customize->add_control('coming_soon_lite_logo_top_padding',array(
		'type' => 'number',
		'description' => __('Top','coming-soon-lite'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('coming_soon_lite_logo_bottom_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'coming_soon_lite_sanitize_float'
	));
	$wp_customize->add_control('coming_soon_lite_logo_bottom_padding',array(
		'type' => 'number',
		'description' => __('Bottom','coming-soon-lite'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('coming_soon_lite_logo_left_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'coming_soon_lite_sanitize_float'
	));
	$wp_customize->add_control('coming_soon_lite_logo_left_padding',array(
		'type' => 'number',
		'description' => __('Left','coming-soon-lite'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('coming_soon_lite_logo_right_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'coming_soon_lite_sanitize_float'
	));
	$wp_customize->add_control('coming_soon_lite_logo_right_padding',array(
		'type' => 'number',
		'description' => __('Right','coming-soon-lite'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('coming_soon_lite_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'coming_soon_lite_sanitize_checkbox'
	));
	$wp_customize->add_control('coming_soon_lite_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','coming-soon-lite'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('coming_soon_lite_site_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'coming_soon_lite_sanitize_float'
	));
	$wp_customize->add_control('coming_soon_lite_site_title_font_size',array(
		'type' => 'number',
		'label' => __('Site Title Font Size','coming-soon-lite'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting( 'coming_soon_lite_site_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'coming_soon_lite_site_title_color', array(
		'label' => __('Site Title Color', 'coming-soon-lite'),
		'section' => 'title_tagline',
	)));

	$wp_customize->add_setting('coming_soon_lite_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'coming_soon_lite_sanitize_checkbox'
	));
	$wp_customize->add_control('coming_soon_lite_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','coming-soon-lite'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('coming_soon_lite_site_tagline_font_size',array(
		'default' => '',
		'sanitize_callback' => 'coming_soon_lite_sanitize_float'
	));
	$wp_customize->add_control('coming_soon_lite_site_tagline_font_size',array(
		'type' => 'number',
		'label' => __('Site Tagline Font Size','coming-soon-lite'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting( 'coming_soon_lite_site_tagline_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'coming_soon_lite_site_tagline_color', array(
		'label' => __('Site Tagline Color', 'coming-soon-lite'),
		'section' => 'title_tagline',
	)));

	$wp_customize->add_panel( 'coming_soon_lite_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'coming-soon-lite' ),
		'description' => __( 'Description of what this panel does.', 'coming-soon-lite' ),
	) );

	$wp_customize->add_section( 'coming_soon_lite_theme_options_section', array(
    	'title'      => __( 'General Settings', 'coming-soon-lite' ),
		'priority'   => 30,
		'panel' => 'coming_soon_lite_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('coming_soon_lite_theme_options',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'coming_soon_lite_sanitize_choices'	        
	));
	$wp_customize->add_control('coming_soon_lite_theme_options',array(
        'type' => 'radio',
        'label' => __('Do you want this section','coming-soon-lite'),
        'section' => 'coming_soon_lite_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','coming-soon-lite'),
            'Right Sidebar' => __('Right Sidebar','coming-soon-lite'),
            'One Column' => __('One Column','coming-soon-lite'),
            'Three Columns' => __('Three Columns','coming-soon-lite'),
            'Four Columns' => __('Four Columns','coming-soon-lite'),
            'Grid Layout' => __('Grid Layout','coming-soon-lite')
        ),
	));

	// Top Bar
	$wp_customize->add_section( 'coming_soon_lite_top_bar', array(
    	'title'      => __( 'Top Bar', 'coming-soon-lite' ),
		'priority'   => null,
		'panel' => 'coming_soon_lite_panel_id'
	) );

	$wp_customize->add_setting('coming_soon_lite_phone_number',array(
		'default'=> '',
		'sanitize_callback'	=> 'coming_soon_lite_sanitize_phone_number'
	));	
	$wp_customize->add_control('coming_soon_lite_phone_number',array(
		'label'	=> __('Add Phone Number','coming-soon-lite'),
		'section'=> 'coming_soon_lite_top_bar',
		'setting'=> 'coming_soon_lite_phone_number',
		'type'=> 'text'
	));

	$wp_customize->add_setting('coming_soon_lite_email_address',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));	
	$wp_customize->add_control('coming_soon_lite_email_address',array(
		'label'	=> __('Add Email Address','coming-soon-lite'),
		'section'=> 'coming_soon_lite_top_bar',
		'setting'=> 'coming_soon_lite_email_address',
		'type'=> 'text'
	));

	//social icons
	$wp_customize->add_section( 'coming_soon_lite_social', array(
    	'title'      => __( 'Social Icons', 'coming-soon-lite' ),
		'priority'   => null,
		'panel' => 'coming_soon_lite_panel_id'
	) );

	$wp_customize->add_setting('coming_soon_lite_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('coming_soon_lite_facebook_url',array(
		'label'	=> __('Add Facebook link','coming-soon-lite'),
		'section'	=> 'coming_soon_lite_social',
		'setting'	=> 'coming_soon_lite_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('coming_soon_lite_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('coming_soon_lite_twitter_url',array(
		'label'	=> __('Add Twitter link','coming-soon-lite'),
		'section'	=> 'coming_soon_lite_social',
		'setting'	=> 'coming_soon_lite_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('coming_soon_lite_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('coming_soon_lite_insta_url',array(
		'label'	=> __('Add Instagram link','coming-soon-lite'),
		'section'	=> 'coming_soon_lite_social',
		'setting'	=> 'coming_soon_lite_insta_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('coming_soon_lite_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('coming_soon_lite_linkedin_url',array(
		'label'	=> __('Add Linkedin link','coming-soon-lite'),
		'section'	=> 'coming_soon_lite_social',
		'setting'	=> 'coming_soon_lite_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('coming_soon_lite_pinterest_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('coming_soon_lite_pinterest_url',array(
		'label'	=> __('Add Pintrest link','coming-soon-lite'),
		'section'	=> 'coming_soon_lite_social',
		'setting'	=> 'coming_soon_lite_pinterest_url',
		'type'	=> 'url'
	));

	//Banner
	$wp_customize->add_section( 'coming_soon_lite_banner_section' , array(
    	'title'      => __( 'Banner Settings', 'coming-soon-lite' ),
		'priority'   => null,
		'panel' => 'coming_soon_lite_panel_id'
	) );

	for ( $count = 1; $count <= 1; $count++ ) {
		$wp_customize->add_setting( 'coming_soon_lite_banner' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'coming_soon_lite_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'coming_soon_lite_banner' . $count, array(
			'label'  => __( 'Select Banner Image Page', 'coming-soon-lite' ),
			'description' => __('Image Size 1500 x 800','coming-soon-lite'),
			'section'  => 'coming_soon_lite_banner_section',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('coming_soon_lite_opening_date_heading',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('coming_soon_lite_opening_date_heading',array(
		'label'	=> __('Heading','coming-soon-lite'),
		'section'	=> 'coming_soon_lite_banner_section',
		'setting'	=> 'coming_soon_lite_opening_date_heading',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('coming_soon_lite_opening_date',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('coming_soon_lite_opening_date',array(
		'label'	=> __('Opening Date','coming-soon-lite'),
		'section'	=> 'coming_soon_lite_banner_section',
		'setting'	=> 'coming_soon_lite_opening_date',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('coming_soon_lite_opening_month',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('coming_soon_lite_opening_month',array(
		'label'	=> __('Opening Month ','coming-soon-lite'),
		'section'	=> 'coming_soon_lite_banner_section',
		'setting'	=> 'coming_soon_lite_opening_month',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('coming_soon_lite_opening_year',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('coming_soon_lite_opening_year',array(
		'label'	=> __('Opening Year','coming-soon-lite'),
		'section'	=> 'coming_soon_lite_banner_section',
		'setting'	=> 'coming_soon_lite_opening_year',
		'type'		=> 'text'
	));

	//Footer
    $wp_customize->add_section( 'coming_soon_lite_footer', array(
    	'title'      => __( 'Footer Text', 'coming-soon-lite' ),
		'priority'   => null,
		'panel' => 'coming_soon_lite_panel_id'
	) );

	$wp_customize->add_setting('coming_soon_lite_show_back_totop',array(
 		'default' => true,
   		'sanitize_callback'	=> 'coming_soon_lite_sanitize_checkbox'
	));
	$wp_customize->add_control('coming_soon_lite_show_back_totop',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide Back to Top','coming-soon-lite'),
	   	'section' => 'coming_soon_lite_footer'
	));

    $wp_customize->add_setting('coming_soon_lite_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('coming_soon_lite_footer_copy',array(
		'label'	=> __('Footer Text','coming-soon-lite'),
		'section'	=> 'coming_soon_lite_footer',
		'setting'	=> 'coming_soon_lite_footer_copy',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('coming_soon_lite_copyright_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'coming_soon_lite_sanitize_float'
 	));
 	$wp_customize->add_control('coming_soon_lite_copyright_padding',array(
		'type' => 'number',
		'label' => __('Copyright Top Bottom Padding','coming-soon-lite'),
		'section' => 'coming_soon_lite_footer',
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'coming_soon_lite_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'coming_soon_lite_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'coming_soon_lite_customize_register' );

function coming_soon_lite_customize_partial_blogname() {
	bloginfo( 'name' );
}

function coming_soon_lite_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function coming_soon_lite_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function coming_soon_lite_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Coming_Soon_Lite_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Coming_Soon_Lite_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Coming_Soon_Lite_Customize_Section_Pro(
				$manager,
				'coming_soon_lite_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Coming Soon Pro ', 'coming-soon-lite' ),
					'pro_text' => esc_html__( 'Go Pro','coming-soon-lite' ),
					'pro_url'  => esc_url( 'https://www.luzuk.com/product/coming-soon-wordpress-theme/' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'coming-soon-lite-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'coming-soon-lite-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Coming_Soon_Lite_Customize::get_instance();