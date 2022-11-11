<?php
/**
 * footer Template.
 *
 * @package launching soon lite
 */
?>
<footer>	
    <div class="footerinner-bottom">
        <div class="container">
            <div class="footer-bottom row">
                <div class="copyright mainwidth">
                    <div class="creditcopy col-md-12 col-lg-12 col-sm-12 text-center">
                        <?php $launching_soon_lite_copyright = get_theme_mod('launching_soon_lite_copyright'); ?>
                        <?php if (get_theme_mod('launching_soon_lite_copyright')) { ?>
                            <?php echo esc_html($launching_soon_lite_copyright); ?>
                        <?php } ?>

                    </div><!--creditcopy-->
                    <div class="creditlink col-md-12 col-lg-12 col-sm-12 text-center">
                        <?php $launching_soon_lite_design = get_theme_mod('launching_soon_lite_design'); ?>
                        <?php if (get_theme_mod('launching_soon_lite_design')) { ?>
                            <?php echo esc_html($launching_soon_lite_design); ?>
                        <?php } ?>
                    </div><!--creditlink-->

                    <div class="clear"></div>
                </div>
            </div><!--footer-bottom-->
        </div><!--container-->
    </div><!--footerinner-bottom-->		
</footer>
<?php wp_footer(); ?>

</body>
</html>