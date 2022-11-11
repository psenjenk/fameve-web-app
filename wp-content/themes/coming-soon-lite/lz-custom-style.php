<?php 

	$coming_soon_lite_custom_style = '';

	// Logo Padding
	$coming_soon_lite_logo_top_padding = get_theme_mod('coming_soon_lite_logo_top_padding');
	$coming_soon_lite_logo_bottom_padding = get_theme_mod('coming_soon_lite_logo_bottom_padding');
	$coming_soon_lite_logo_left_padding = get_theme_mod('coming_soon_lite_logo_left_padding');
	$coming_soon_lite_logo_right_padding = get_theme_mod('coming_soon_lite_logo_right_padding');

	if( $coming_soon_lite_logo_top_padding != '' || $coming_soon_lite_logo_bottom_padding != '' || $coming_soon_lite_logo_left_padding != '' || $coming_soon_lite_logo_right_padding != ''){
		$coming_soon_lite_custom_style .=' .logo {';
			$coming_soon_lite_custom_style .=' padding-top: '.esc_attr($coming_soon_lite_logo_top_padding).'px; padding-bottom: '.esc_attr($coming_soon_lite_logo_bottom_padding).'px; padding-left: '.esc_attr($coming_soon_lite_logo_left_padding).'px; padding-right: '.esc_attr($coming_soon_lite_logo_right_padding).'px;';
		$coming_soon_lite_custom_style .=' }';
	}

	// Site Title Font Size
	$coming_soon_lite_site_title_font_size = get_theme_mod('coming_soon_lite_site_title_font_size');
	if( $coming_soon_lite_site_title_font_size != ''){
		$coming_soon_lite_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$coming_soon_lite_custom_style .=' font-size: '.esc_attr($coming_soon_lite_site_title_font_size).'px;';
		$coming_soon_lite_custom_style .=' }';
	}

	// Site Title Font Size
	$coming_soon_lite_site_tagline_font_size = get_theme_mod('coming_soon_lite_site_tagline_font_size');
	if( $coming_soon_lite_site_tagline_font_size != ''){
		$coming_soon_lite_custom_style .=' .logo p.site-description {';
			$coming_soon_lite_custom_style .=' font-size: '.esc_attr($coming_soon_lite_site_tagline_font_size).'px;';
		$coming_soon_lite_custom_style .=' }';
	}

	// Copyright padding
	$coming_soon_lite_copyright_padding = get_theme_mod('coming_soon_lite_copyright_padding');
	if( $coming_soon_lite_copyright_padding != ''){
		$coming_soon_lite_custom_style .=' .site-info {';
			$coming_soon_lite_custom_style .=' padding-top: '.esc_attr($coming_soon_lite_copyright_padding).'px; padding-bottom: '.esc_attr($coming_soon_lite_copyright_padding).'px;';
		$coming_soon_lite_custom_style .=' }';
	}

	// Site Title Color
	$coming_soon_lite_site_title_color = get_theme_mod('coming_soon_lite_site_title_color');
	if( $coming_soon_lite_site_title_color != ''){
		$coming_soon_lite_custom_style .=' .logo h1.site-title a, .logo p.site-title a {';
			$coming_soon_lite_custom_style .=' color: '.esc_attr($coming_soon_lite_site_title_color).';';
		$coming_soon_lite_custom_style .=' }';
	}

	// Site Tagline Color
	$coming_soon_lite_site_tagline_color = get_theme_mod('coming_soon_lite_site_tagline_color');
	if( $coming_soon_lite_site_tagline_color != ''){
		$coming_soon_lite_custom_style .='.logo p.site-description {';
			$coming_soon_lite_custom_style .=' color: '.esc_attr($coming_soon_lite_site_tagline_color).';';
		$coming_soon_lite_custom_style .=' }';
	}