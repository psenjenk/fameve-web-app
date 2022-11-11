<?php
/**
 * the launcher Theme Customizer
 *
 * @package the launcher
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function the_launcher_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    /*------------------------------------------------------------------------------------*/
    /**
     * Upgrade to Uncode Pro
    */
    // Register custom section types.
    $wp_customize->register_section_type( 'Launcher_Customize_Section_Pro' );

    $wp_customize->add_setting( 'the_launcher_skin_color', array( 'default'=>'#FF7E00', 'transport'   => 'postMessage', 'sanitize_callback'=>'sanitize_text_field' ) );
    $wp_customize->add_control( 
            new WP_Customize_Color_Control(
            $wp_customize, 
            'the_launcher_skin_color', 
            array(
                'label'      => esc_html__( 'Template Color', 'the-launcher' ),
                'description' => esc_html__( 'Set the Template Skin color for the site.', 'the-launcher' ),
                'section'    => 'the_launcher_skinn_color_section',
                'settings'   => 'the_launcher_skin_color',
            ) ) 
        );

    /** Week Text **/
    $wp_customize->add_setting( 'the_launcher_week_text', array( 'default' => esc_html( 'Weeks', 'the-launcher' ), 'transport'   => 'postMessage', 'sanitize_callback'=>'sanitize_text_field' ) );
    $wp_customize->add_control( 'the_launcher_week_text', array(
        'label' => esc_html__( 'Week Text', 'the-launcher' ),
        'type' => 'text',
        'description' => esc_html__( 'Set the Week Text', 'the-launcher' ),
        'section' => 'the_launcher_form_section',
    ) );

    /** Days Text **/
    $wp_customize->add_setting( 'the_launcher_days_text', array( 'default' => esc_html( 'Days', 'the-launcher' ), 'transport'   => 'postMessage', 'sanitize_callback'=>'sanitize_text_field' ) );
    $wp_customize->add_control( 'the_launcher_days_text', array(
        'label' => esc_html__( 'Days Text', 'the-launcher' ),
        'type' => 'text',
        'description' => esc_html__( 'Set the Days Text', 'the-launcher' ),
        'section' => 'the_launcher_form_section',
    ) );

    /** Hours Text **/
    $wp_customize->add_setting( 'the_launcher_hour_text', array( 'default' => esc_html( 'Hours', 'the-launcher' ), 'transport'   => 'postMessage', 'sanitize_callback'=>'sanitize_text_field' ) );
    $wp_customize->add_control( 'the_launcher_hour_text', array(
        'label' => esc_html__( 'Hour Text', 'the-launcher' ),
        'type' => 'text',
        'description' => esc_html__( 'Set the Hour Text', 'the-launcher' ),
        'section' => 'the_launcher_form_section',
    ) );

    /** Minutes Text **/
    $wp_customize->add_setting( 'the_launcher_minute_text', array( 'default' => esc_html( 'Minutes', 'the-launcher' ), 'transport'   => 'postMessage', 'sanitize_callback'=>'sanitize_text_field' ) );
    $wp_customize->add_control( 'the_launcher_minute_text', array(
        'label' => esc_html__( 'Minute Text', 'the-launcher' ),
        'type' => 'text',
        'description' => esc_html__( 'Set the Minute Text', 'the-launcher' ),
        'section' => 'the_launcher_form_section',
    ) );

    /** Seconds Text **/
    $wp_customize->add_setting( 'the_launcher_seconds_text', array( 'default' => esc_html( 'Seconds', 'the-launcher' ), 'transport'   => 'postMessage', 'sanitize_callback'=>'sanitize_text_field' ) );
    $wp_customize->add_control( 'the_launcher_seconds_text', array(
        'label' => esc_html__( 'Seconds Text', 'the-launcher' ),
        'type' => 'text',
        'description' => esc_html__( 'Set the Seconds Text', 'the-launcher' ),
        'section' => 'the_launcher_form_section',
    ) );
}
add_action( 'customize_register', 'the_launcher_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function the_launcher_customize_preview_js() {
	wp_enqueue_script( 'the_launcher_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'the_launcher_customize_preview_js' );
// Our Product detail's
if(class_exists( 'WP_Customize_control')){

    /**
     * Pro customizer section.
     *
     * @since  1.0.0
     * @access public
     */
    class Launcher_Customize_Section_Pro extends WP_Customize_Section {

        /**
         * The type of customize section being rendered.
         *
         * @since  1.0.0
         * @access public
         * @var    string
         */
        public $type = 'launcher-pro';

        /**
         * Custom button text to output.
         *
         * @since  1.0.0
         * @access public
         * @var    string
         */
        public $pro_text1 = '';
        public $title1 = '';

        /**
         * Custom pro button URL.
         *
         * @since  1.0.0
         * @access public
         * @var    string
         */
        public $pro_url1 = '';

        /**
         * Add custom parameters to pass to the JS via JSON.
         *
         * @since  1.0.0
         * @access public
         * @return void
         */
        public function json() {
            $json = parent::json();
            $json['title1'] = $this->title1;
            $json['pro_text1'] = $this->pro_text1;
            $json['pro_url1']  = $this->pro_url1;
            return $json;
        }

        /**
         * Outputs the Underscore.js template.
         *
         * @since  1.0.0
         * @access public
         * @return void
         */
        protected function render_template() { ?>

            <li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">
                <h3 class="accordion-section-title">
                    {{ data.title1 }}
                    <# if ( data.pro_text1 && data.pro_url1 ) { #>
                        <a href="{{ data.pro_url1 }}" class="button button-secondary alignright" target="_blank">{{ data.pro_text1 }}</a>
                    <# } #>
                </h3>
            </li>
        <?php }
    }
}