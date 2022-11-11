<?php
/**
 * @package launching-soon-lite
 */
get_header();
if (is_front_page() && !is_home()) {
    $launching_soon_lite_site_main = "sitefull col-md-12 col-lg-12 col-sm-12 text-left";
} else {
    $launching_soon_lite_site_main = "site-main col-md-8 col-lg-8 col-sm-12 text-left";
}
?>
<div id="content" class="container">
    <div class="page_content">
        <div class="<?php echo esc_attr($launching_soon_lite_site_main); ?> ">
            <div class="blog-post">
                <?php
                if (have_posts()) :

                    while (have_posts()) : the_post();
                        ?>   
                        <div class="pageheading"><h1><?php the_title(); ?></h1></div>
                        <div class="pagecontent"><?php the_content(); ?></div>

                        <?php if (is_front_page() || is_home()) { ?>
                            <?php
                            $launching_soon_lite_opening_date_heading = get_theme_mod('launching_soon_lite_opening_date_heading', 'Opening Date');
                            $launching_soon_lite_opening_date         = get_theme_mod('launching_soon_lite_opening_date', '01');
                            $launching_soon_lite_opening_month        = get_theme_mod('launching_soon_lite_opening_month', 'Jan');
                            $launching_soon_lite_opening_year         = get_theme_mod('launching_soon_lite_opening_year', '2021');
                            ?>

                            <div class="commingsoon row">
                                <?php if (!empty($launching_soon_lite_opening_date_heading)) { ?>
                                    <div class="commingsoon-heading col-md-12 col-lg-12 col-sm-12 col-xl-12 text-left"><?php echo esc_html($launching_soon_lite_opening_date_heading); ?></div><!--commingsoon-heading-->
                                <?php } ?>                                   
                                <?php if (!empty($launching_soon_lite_opening_date) && !empty($launching_soon_lite_opening_month) && !empty($launching_soon_lite_opening_year)) { ?>
                                    <div class="commingsoon-date-box col-md-12 col-lg-12 col-sm-12 col-xl-12 text-left">
                                        <ul>
                                            <li class="openingdate"><?php echo esc_html($launching_soon_lite_opening_date); ?></li>
                                            <li class="openingmonth"><?php echo esc_html($launching_soon_lite_opening_month); ?></li>
                                            <li class="openingyear"><?php echo esc_html($launching_soon_lite_opening_year); ?></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div><!--commingsoon-date-box-->
                                <?php } ?>
                                <div class="clearfix"></div>
                            </div><!--commingsoon-->

                        <?php } ?>

                        <div>
                            <?php
                            wp_link_pages(array(
                                'before' => '<div class="page-links">' . __('Pages:', 'launching-soon-lite'),
                                'after'  => '</div>',
                            ));
                            ?>
                        </div>
                        <?php if (is_singular()) wp_enqueue_script("comment-reply"); ?>
                        <?php
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;
                        ?>
                        <?php
                    endwhile;
                endif;
                ?>
            </div><!--blog-post -->
        </div><!--col-md-8-->
        <?php if (!is_front_page()) { ?>
            <?php get_sidebar(); ?>
        <?php } ?>
        <div class="clear"></div>
    </div><!-- row -->
</div><!-- container -->
<?php
get_footer();
