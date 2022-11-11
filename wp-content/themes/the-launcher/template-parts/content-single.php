<?php
/**
 * Template part for displaying single posts.
 *
 * @package the launcher
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content"><?php 
            $show_img = get_theme_mod('the_launcher_post_feat_img',1);
            if($show_img){
                $the_launcher_single_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'the_launcher_single_page_archive');
                if($the_launcher_single_img){
                    $the_launcher_single_img_src = $the_launcher_single_img[0];?>
                    <div class="single_post_image"><img src="<?php echo esc_url($the_launcher_single_img_src);?>" title="<?php the_title_attribute(); ?>" alt="<?php the_title_attribute(); ?>" /></div>
                <?php } 
            }
            $show_title = get_theme_mod('the_launcher_post_title_enable',1);
            if($show_title){
                if(get_the_title()){
                    ?>
                    <header class="entry-header">
                        <div class="entry-meta">
                            <?php 
                            the_title( '<h1 class="entry-title">', '</h1>' );
                            ?>
                        </div><!-- .entry-meta -->
                    </header><!-- .entry-header -->
                <?php } 
            }?>

        <?php 
        $show_meta_data = get_theme_mod( 'the_launcher_post_meta_data' ,1);
        if( $show_meta_data ){
        ?>
        <div class="comment_author_date">
            <span class="launcher_date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo esc_html(get_the_date('Y M d')); ?></span>
            <?php $the_launcher_author = get_the_author();
            if($the_launcher_author){ ?> 
                <span class="launcher_author"><i class="fa fa-user" aria-hidden="true"></i><?php esc_html_e('By ','the-launcher'); echo esc_attr($the_launcher_author); ?></span>
            <?php } ?>
            <span class="launcher_comment"><a href="<?php comments_link(); ?>"><i class="fa fa-comments" aria-hidden="true"></i><?php echo absint(get_comments_number()); esc_html_e(' comment','the-launcher'); ?></a></span>
        </div>
        <?php } ?>
        <?php if(get_the_content()){ ?>
        <div class="single_post_content"><?php the_content(); ?></div>
        <?php } ?>
        <?php wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the-launcher' ),
            'after'  => '</div>',
        ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php the_launcher_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

