<?php
/**
 * @package launching-soon-lite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if (is_singular() && pings_open(get_queried_object())) : ?>
            <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
        <?php endif; ?>
        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>
        <?php
        if (function_exists('wp_body_open')) {

            wp_body_open();
        } else {

            do_action('wp_body_open');
        }
        ?>
        <a class="skip-link screen-reader-text" href="#content">
            <?php esc_attr_e('Skip to content', 'launching-soon-lite'); ?></a>

        <!-- header section end --> 
        <section id="header">
            <header class="container">
                <div class="header_top row">      
                    <!--header section start -->
                    <div class="header_left headercommon col-md-4 col-lg-4 col-sm-12 text-left">  
                        <div class="logo">
                            <?php if (has_custom_logo()) { ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>"><?php launching_soon_lite_the_custom_logo(); ?></a>
                            <?php }if (display_header_text() == true) { ?>
                                <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                                <p><?php bloginfo('description'); ?></p>
                            <?php } ?>
                        </div><!-- logo -->
                    </div>

                    <div class="header_right  headersocial col-md-4 col-lg-4 col-sm-12 text-center">
                        <ul>
                            <?php if (get_theme_mod('launching_soon_lite_fb')) { ?>
                                <li><a title="<?php esc_attr_e('Facebook', 'launching-soon-lite'); ?>" class="fa fa-facebook" target="_blank" href="<?php echo esc_url(get_theme_mod('launching_soon_lite_fb', '')); ?>"></a> </li>
                            <?php } ?>
                            <?php if (get_theme_mod('launching_soon_lite_twitter')) { ?>
                                <li><a title="<?php esc_attr_e('twitter', 'launching-soon-lite'); ?>" class="fa fa-twitter" target="_blank" href="<?php echo esc_url(get_theme_mod('launching_soon_lite_twitter', '')); ?>"></a></li>
                            <?php } ?>
                            <?php if (get_theme_mod('launching_soon_lite_youtube')) { ?>
                                <li><a title="<?php esc_attr_e('youtube', 'launching-soon-lite'); ?>" class="fa fa-youtube" target="_blank" href="<?php echo esc_url(get_theme_mod('launching_soon_lite_youtube', '')); ?>"></a></li>
                            <?php } ?>
                            <?php if (get_theme_mod('launching_soon_lite_in')) { ?>
                                <li><a title="<?php esc_attr_e('linkedin', 'launching-soon-lite'); ?>" class="fa fa-linkedin" target="_blank" href="<?php echo esc_url(get_theme_mod('launching_soon_lite_in', '')); ?>"></a></li>
                            <?php } ?>

                            <?php if (get_theme_mod('launching_soon_lite_pin')) { ?>
                                <li><a title="<?php esc_attr_e('linkedin', 'launching-soon-lite'); ?>" class="fa fa-pinterest" target="_blank" href="<?php echo esc_url(get_theme_mod('launching_soon_lite_pin', '')); ?>"></a></li>
                            <?php } ?>
                        </ul>                
                        <div class="clear"></div> 
                    </div>

                    <div class="contactinfo headercommon col-md-4 col-lg-4 col-sm-12 text-right">
                        <div class="contact-info">

                            <?php 
                            $launching_soon_lite_phone = get_theme_mod('launching_soon_lite_phone'); 
                            $launching_soon_lite_email = get_theme_mod('launching_soon_lite_email'); 
                            ?>
                            <?php if (!empty($launching_soon_lite_phone)) { ?>
                                <span class="info headerphone"><span class="fa fa-phone"></span>&nbsp;&nbsp;<a href="tel:<?php echo esc_attr($launching_soon_lite_phone); ?>"><?php echo esc_html(launching_soon_lite_sanitize_phone_number($launching_soon_lite_phone)); ?></a></span>
                            <?php } ?>           

                        
                            <?php if (!empty($launching_soon_lite_email)) { ?>
                                <span class="info headeremail"><span class="fa fa-envelope"></span>&nbsp;&nbsp;<a href="mailto:<?php echo esc_attr($launching_soon_lite_email); ?>"><?php echo esc_html(sanitize_email($launching_soon_lite_email)); ?></a></span>
                            <?php } ?>

                        </div><!--contact-info-->
                    </div><!--header_middle--> 



                    <div class="clear"></div>
                </div><!--header_top-->
                <div class="clear"></div>
                </div>
            </header>
        </section><!--header-->
