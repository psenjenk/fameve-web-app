<?php
if (!isset($content_width))
    $content_width = 900;

add_action('admin_menu', 'launching_soon_lite_pros');

function launching_soon_lite_pros() {
    add_theme_page(esc_html__('Launching Soon Lite Details', 'launching-soon-lite'), esc_html__('Launching Soon Lite Details', 'launching-soon-lite'), 'edit_theme_options', 'launching_soon_lite_pro', 'launching_soon_lite_pro_details');
}

function launching_soon_lite_pro_details() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e('Launching Soon Lite', 'launching-soon-lite'); ?></h1>

        <div>
            <img style="width:50%;" src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="<?php bloginfo('name'); ?>" style=" width: 100%;"> 
        </div>

        <p><strong> <?php esc_html_e('Description: ', 'launching-soon-lite'); ?></strong><?php esc_html_e('Launching Soon Lite WordPress Template is used for all multipurpose coming soon, under construction business pages. It covers many business like corporate business, Marketing, Finance, Stock Market, Investment business, IT infrastructure, Consultant, Manufacture plant, Services, Retailer, Wholesaler, Online business, Insurance, SIP, Mutual Fund, Services, Marketing, Finance, Stock Market, Nifty, Store business, IT Firm, Retailers, Education, Shopping, E-commerce, Gift Service market, Beauty, Fashion, Blogger, News, Portfolio, and all types of business.', 'launching-soon-lite'); ?></p>
        <a class="button button-primary button-large" href="<?php echo esc_url(launching_soon_LITE_THEMEURL); ?>" target="_blank"><?php esc_html_e('Theme Url', 'launching-soon-lite'); ?></a>	
        <a class="button button-primary button-large" href="<?php echo esc_url(launching_soon_LITE_PROURL); ?>" target="_blank"><?php esc_html_e('Pro Theme Url', 'launching-soon-lite'); ?></a>
        <a class="button button-primary button-large" href="<?php echo esc_url(launching_soon_LITE_PURCHASEURL); ?>" target="_blank"><?php esc_html_e('Click To Purchase', 'launching-soon-lite'); ?></a>
        <a class="button button-primary button-large" href="<?php echo esc_url(launching_soon_LITE_PURCHASEURL); ?>" target="_blank"><?php esc_html_e('Price: $9.99 Only', 'launching-soon-lite'); ?></a>
        <a class="button button-primary button-large" href="<?php echo esc_url(launching_soon_LITE_DOCURL); ?>" target="_blank"><?php esc_html_e('Documentation', 'launching-soon-lite'); ?></a>
        <a class="button button-primary button-large" href="<?php echo esc_url(launching_soon_LITE_DEMOURL); ?>" target="_blank"><?php esc_html_e('View Demo', 'launching-soon-lite'); ?></a>
        <a class="button button-primary button-large" href="<?php echo esc_url(launching_soon_LITE_SUPPORTURL); ?>" target="_blank"><?php esc_html_e('Support', 'launching-soon-lite'); ?></a>
    </div> 
    <div style="clear:both;"></div>
    
<?php } ?>
<?php
add_action('customize_register', 'launching_soon_lite_customize_register');
define('launching_soon_LITE_PROURL', 'https://www.featherthemes.com/themes/wordpress-theme-launching-soon/');
define('launching_soon_LITE_THEMEURL', 'https://www.featherthemes.com/themes/wordpress-template-launching-soon-lite/');
define('launching_soon_LITE_DOCURL', 'https://www.featherthemes.com/documentation/launching-soon-pro');
define('launching_soon_LITE_DEMOURL', 'https://www.featherthemes.com/demo/launching-soon-pro/');
define('launching_soon_LITE_SUPPORTURL', 'https://www.featherthemes.com/forums/forum/launching-soon-pro/');
define('launching_soon_LITE_PURCHASEURL', 'https://www.featherthemes.com/themes/?add-to-cart=4538');
