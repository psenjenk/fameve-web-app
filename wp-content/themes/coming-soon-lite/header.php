<?php
/**
 * The header for our theme
 *
 * @subpackage coming-soon-lite
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
} else {
	do_action( 'wp_body_open' );
}	?>

<div id="page" class="site">
	<a class="screen-reader-text skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'coming-soon-lite' ); ?></a>	

	<header class="header-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="logo">
				        <?php if ( has_custom_logo() ) : ?>
					        <div class="site-logo"><?php the_custom_logo(); ?></div>
					    <?php endif; ?>
			            <?php if (get_theme_mod('coming_soon_lite_show_site_title',true)) {?>
					        <?php $blog_info = get_bloginfo( 'name' ); ?>
					        <?php if ( ! empty( $blog_info ) ) : ?>
					            <?php if ( is_front_page() && is_home() ) : ?>
						            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a></h1>
					        	<?php else : ?>
				            		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html(bloginfo( 'name' )); ?></a></p>
					            <?php endif; ?>
					        <?php endif; ?>
					    <?php }?>
			        	<?php if (get_theme_mod('coming_soon_lite_show_tagline',true)) {?>
					        <?php
					        $description = get_bloginfo( 'description', 'display' );
					        if ( $description || is_customize_preview() ) :
					          ?>
						        <p class="site-description">
						            <?php echo esc_html($description); ?>
						        </p>
					        <?php endif; ?>
					    <?php }?>
				    </div>
				</div>
				<div class="col-lg-9 col-md-9">
					<div class="contact-info">
						<?php if( get_theme_mod( 'coming_soon_lite_phone_number') != '') { ?>
							<span class="info"><?php esc_html_e('call','coming-soon-lite'); ?></span><span><a href="tel:<?php echo esc_url( get_theme_mod( 'coming_soon_lite_phone_number','' ) ); ?>"><?php echo esc_html( get_theme_mod( 'coming_soon_lite_phone_number','' ) ); ?></a></span>
						<?php }?>
						<?php if( get_theme_mod( 'coming_soon_lite_email_address') != '') { ?>
							<span class="info"><?php esc_html_e('Email','coming-soon-lite'); ?></span><span><a href="mailto:<?php echo esc_url( get_theme_mod( 'coming_soon_lite_email_address','' ) ); ?>"><?php echo esc_html( get_theme_mod( 'coming_soon_lite_email_address','' ) ); ?></a></span>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="site-content-contain">
		<div id="content" class="site-content">