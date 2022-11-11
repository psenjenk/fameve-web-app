<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package the launcher
 */?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div id="launcher-dynamic-styles"></div>
        <div id="launcher-dynamic-styles-dark-bg"></div>
    	<div class="ak-container">
                <?php
                if(is_active_sidebar('the-launcher-footer-1') || is_active_sidebar('the-launcher-footer-2') || is_active_sidebar('the-launcher-footer-3')):
                ?>
                <div class="footer_area_launcher clearfix">
                    <?php
                        if(is_active_sidebar('the-launcher-footer-1')):
                            ?>
                            <div class="sidebar_one">
                                <?php
                                dynamic_sidebar('the-launcher-footer-1');
                                ?>
                            </div>
                            <?php
                        endif;
                        if(is_active_sidebar('the-launcher-footer-2')):
                            ?>
                            <div class="sidebar_two">
                                <?php
                                dynamic_sidebar('the-launcher-footer-2');
                                ?>
                            </div>
                            <?php
                        endif;
                        if(is_active_sidebar('the-launcher-footer-3')):
                            ?>
                            <div class="sidebar_three">
                                <?php
                                dynamic_sidebar('the-launcher-footer-3');
                                ?>
                            </div>
                            <?php
                        endif;
                    ?>
                </div>
                <?php endif; ?>
                <div class="site-info">
                    <?php 
                    $the_launcher_footer_text = get_theme_mod('the_launcher_footer_copy_right');
                    $disable_footer = get_theme_mod('the_launcher_enable_footer');
                    ?>
                    <span class="footer_text">
                    <?php if( $the_launcher_footer_text && $disable_footer != '1' ){ ?>
                    <span class="text_input"><?php echo esc_html($the_launcher_footer_text); ?><span class="sep"> | </span></span><?php 
                    }else{
                        printf(wp_kses_post('&copy; %1$s %2$s'), esc_html(date("Y")), esc_html(get_bloginfo('name')));
                    } 
                    $theme = wp_get_theme();
                    ?> 

                    <?php esc_html_e(' | WordPress Theme','the-launcher');?> : <a target="_blank" href="<?php echo esc_url('https://www.wpentire.com/wordpress-themes/'); ?>"><?php echo esc_html($theme->Name); ?></a>
                    </span>
            	</div><!-- .site-info -->
    	</div><!-- ak-container-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
