<?php

/**
 * @package launching soon lite
 */
require_once get_template_directory() . "/dscustomizer/launching-soon-lite-customization.php";
require_once get_template_directory() . "/dscustomizer/launching-soon-lite-page-functions.php";
if (!function_exists('wp_body_open')) {

    function wp_body_open() {
        do_action('wp_body_open');
    }

}

function launching_soon_lite_embed_html($html) {
    return '<div class="video-container">' . $html . '</div>';
}

add_filter('embed_oembed_html', 'launching_soon_lite_embed_html', 10, 3);
add_filter('video_embed_html', 'launching_soon_lite_embed_html');

function launching_soon_lite_sanitize_phone_number($phone) {
    return preg_replace('/[^\d+]/', '', $phone);
}

function launching_soon_lite_widgets_init() {

    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'launching-soon-lite'),
        'description'   => esc_html__('Appears on sidebar', 'launching-soon-lite'),
        'id'            => 'sidebar-1',
        'before_widget' => '',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3><aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
    ));
}

add_action('widgets_init', 'launching_soon_lite_widgets_init');

add_action('customize_register', 'launching_soon_lite_customize_register_custom_controls', 9);

function launching_soon_lite_customize_register_custom_controls() {
    get_template_part('dscustomizer/launching_soon_lite', 'sectionpro');
}

function launching_soon_lite_customize_controls_js() {
    $theme = wp_get_theme();
    wp_enqueue_script('launching-soon-lite-customizer-section-pro-jquery', get_template_directory_uri() . '/dscustomizer/customize-controls.js', array('customize-controls'), $theme->get('Version'), true);
    wp_enqueue_style('launching-soon-lite-customizer-section-pro', get_template_directory_uri() . '/dscustomizer/customize-controls.css', $theme->get('Version'));
}

add_action('customize_controls_enqueue_scripts', 'launching_soon_lite_customize_controls_js');


if (!function_exists('launching_soon_lite_setup')) :

    function launching_soon_lite_setup() {
        add_theme_support('automatic-feed-links');
        add_theme_support('woocommerce');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-header');
        add_theme_support('title-tag');
        add_theme_support("wp-block-styles");
        add_theme_support("responsive-embeds");
        add_theme_support("align-wide");
        add_theme_support('custom-background', array(
            'default-color' => '000000'
        ));

        $defaults = array(
            'default-image'      => '',
            'default-text-color' => '0065b3',
            'width'              => 1400,
            'height'             => 500,
            'uploads'            => true,
            'wp-head-callback'   => 'launching_soon_lite_header_style',
        );
        add_theme_support('custom-header', $defaults);

        //custom logo
        $launching_soon_lite_custom_logo = array(
            'height'      => 56,
            'width'       => 224,
            'flex-height' => true,
            'flex-width'  => true,
            'header-text' => array('site-title', 'site-description'),
        );
        add_theme_support('custom-logo', $launching_soon_lite_custom_logo);
        add_image_size('launching-soon-lite-home-box-size', 400, 250, true);

        /**
         * Add post-formats support.
         */
        add_theme_support(
                'post-formats',
                array(
                    'link',
                    'aside',
                    'gallery',
                    'image',
                    'quote',
                    'status',
                    'video',
                    'audio',
                    'chat',
                )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
                'html5',
                array(
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption',
                    'style',
                    'script',
                    'navigation-widgets',
                )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        // Add support for Block Styles.
        add_theme_support('wp-block-styles');

        // Add support for full and wide align images.
        add_theme_support('align-wide');

        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');

        // Add support for custom line height controls.
        add_theme_support('custom-line-height');

        // Add support for experimental link color control.
        add_theme_support('experimental-link-color');

        // Add support for experimental cover block spacing.
        add_theme_support('custom-spacing');

        // Add support for custom units.
        // This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
        add_theme_support('custom-units');

        add_theme_support('jetpack-content-options', array(
            'blog-display'       => 'content', // the default setting of the theme: 'content', 'excerpt' or array( 'content', 'excerpt' ) for themes mixing both display.
            'author-bio'         => true, // display or not the author bio: true or false.
            'author-bio-default' => false, // the default setting of the author bio, if it's being displayed or not: true or false (only required if false).
            'masonry'            => '.site-main', // a CSS selector matching the elements that triggers a masonry refresh if the theme is using a masonry layout.
            'post-details'       => array(
                'stylesheet' => 'themeslug-style', // name of the theme's stylesheet.
                'date'       => '.posted-on', // a CSS selector matching the elements that display the post date.
                'categories' => '.cat-links', // a CSS selector matching the elements that display the post categories.
                'tags'       => '.tags-links', // a CSS selector matching the elements that display the post tags.
                'author'     => '.byline', // a CSS selector matching the elements that display the post author.
                'comment'    => '.comments-link', // a CSS selector matching the elements that display the comment link.
            ),
            'featured-images'    => array(
                'archive'         => true, // enable or not the featured image check for archive pages: true or false.
                'archive-default' => false, // the default setting of the featured image on archive pages, if it's being displayed or not: true or false (only required if false).
                'post'            => true, // enable or not the featured image check for single posts: true or false.
                'post-default'    => false, // the default setting of the featured image on single posts, if it's being displayed or not: true or false (only required if false).
                'page'            => true, // enable or not the featured image check for single pages: true or false.
                'page-default'    => false, // the default setting of the featured image on single pages, if it's being displayed or not: true or false (only required if false).
            ),
        ));

        add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
    }

endif; // launching_soon_lite_setup
add_action('after_setup_theme', 'launching_soon_lite_setup');

if (!function_exists('launching_soon_lite_the_custom_logo')) :

    function launching_soon_lite_the_custom_logo() {
        the_custom_logo();
    }

endif;

function launching_soon_lite_style() {
    wp_enqueue_style('launching-soon-lite-basic-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrapcss', get_template_directory_uri() . '/bootstrap/css/bootstrap.css');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array('jquery'));
    wp_enqueue_style('launching-soon-lite-style', get_template_directory_uri() . '/css/launching-soon-lite-main.css');
    wp_enqueue_style('launching-soon-lite-responsive', get_template_directory_uri() . '/css/launching-soon-lite-responsive.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
    wp_enqueue_script('launching-soon-lite-customjs', get_template_directory_uri() . '/js/launching-soon-lite-customjs.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'launching_soon_lite_style');

function launching_soon_lite_header_style() {
    $launching_soon_lite_header_text_color = get_header_textcolor();

    if (get_theme_support('custom-header', 'default-text-color') === $launching_soon_lite_header_text_color) {
        return;
    }
    echo '<style id="launching-soon-lite-custom-header-styles" type="text/css">';
    if ('blank' !== $launching_soon_lite_header_text_color) {
        echo '.header_top .logo a,
            .blog-post h3 a,
            .blog-post .pageheading h1
			 {
				color: #' . esc_attr($launching_soon_lite_header_text_color) . '
			}';
    }
    echo '</style>';
}


/**
 * Registers an editor stylesheet in a sub-directory.
 */
function launching_soon_lite_add_editor_styles_sub_dir() {
    add_editor_style(trailingslashit(get_template_directory_uri()) . '/css/editor-style.css');
}

add_action('after_setup_theme', 'launching_soon_lite_add_editor_styles_sub_dir');
