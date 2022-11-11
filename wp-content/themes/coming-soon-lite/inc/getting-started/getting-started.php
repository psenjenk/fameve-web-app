<?php
//about theme info
add_action( 'admin_menu', 'coming_soon_lite_gettingstarted' );
function coming_soon_lite_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'coming-soon-lite'), esc_html__('About Theme', 'coming-soon-lite'), 'edit_theme_options', 'coming_soon_lite_guide', 'coming_soon_lite_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function coming_soon_lite_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'coming_soon_lite_admin_theme_style');

//guidline for about theme
function coming_soon_lite_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'coming-soon-lite' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Coming Soon Lite WordPress Theme', 'coming-soon-lite' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'coming-soon-lite' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'coming-soon-lite' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'coming-soon-lite' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'coming-soon-lite' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'coming-soon-lite' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'coming-soon-lite' ); ?> <a href="<?php echo esc_url( COMING_SOON_LITE_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'coming-soon-lite' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'The Coming Soon Lite under construction theme will play a big role in boosting up the business and taking it to an altogether different level. Work is under progress for this and the results will be fabulous upon completion. This theme will play a lead role in case of the landing, one page, promom, single page or Coming Soon Lite or under construction pages. Armed with some features of significance like responsive and multipurpose nature apart from being retina ready, Bootstrap framework oriented and with CTA, this theme is accompanied with the progress bar or a countdown timer with a simple goal to keep a track record as far as the progress is concerned. It is not only professional but is also accompanied with the personalization and customization options and not only has the clean code but also the faster page load option. Coming Soon Lite WP theme is mobile ad SEO ready making the web page look distinct even before it is launched in the public. It is accompanied with the subscription form, social media icons as well as the contact form permitting it to keep associated with the visitors and updating theme with the latest information as far as the new projects are concerned.', 'coming-soon-lite')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Coming Soon Lite Theme', 'coming-soon-lite' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'coming-soon-lite'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( COMING_SOON_LITE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'coming-soon-lite'); ?></a>
			<a href="<?php echo esc_url( COMING_SOON_LITE_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'coming-soon-lite'); ?></a>
			<a href="<?php echo esc_url( COMING_SOON_LITE_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'coming-soon-lite'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/coming-soon-lite.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'coming-soon-lite'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'coming-soon-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'coming-soon-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'coming-soon-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'coming-soon-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'coming-soon-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'coming-soon-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'coming-soon-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'coming-soon-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'coming-soon-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'coming-soon-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'coming-soon-lite'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'coming-soon-lite'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>