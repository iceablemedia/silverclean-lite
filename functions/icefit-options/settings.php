<?php
/**
 *
 * Silverclean WordPress Theme by Iceable Themes | http://www.iceablethemes.com
 *
 * Copyright 2013-2015 Mathieu Sarrasin - Iceable Media
 *
 * Admin settings template
 *
 */

// Load the icefit options framework
include_once('icefit-options.php');

// Set setting panel name and slug
$silverclean_settings_name = "Silverclean Settings";
$silverclean_settings_slug = "silverclean_settings";

// Set settings template
function silverclean_settings_template() {

	$settings_options = array();

// START PAGE 0

	$settings_options[] = array(
		'name'          => __('Go Pro', 'silverclean'),
		'type'          => 'start_menu',
		'id'            => 'gopro_page',
		'icon'          => 'down',
	);

		$settings_options[] = array(
			'name'          => __('Upgrade to Silverclean Pro!', 'silverclean'),
			'desc'          => '',
			'id'            => 'gopro',
			'type'          => 'gopro',
			'default'       => '',
		);

	$settings_options[] = array('type' => 'end_menu');
// END PAGE 0
// START PAGE 1
	$settings_options[] = array(
		'name'          => __('Main settings', 'silverclean'),
		'type'          => 'start_menu',
		'id'            => 'main',
		'icon'          => 'control',
	);

		$settings_options[] = array(
			'name'          => __('Logo', 'silverclean'),
			'desc'          => __('Upload your own logo', 'silverclean'),
			'id'            => 'logo',
			'type'          => 'image',
			'default'       => get_template_directory_uri() .'/img/logo.png',
		);

		$settings_options[] = array(
			'name'          => __('Site Title', 'silverclean'),
			'desc'          => __('Choose "display title" if you want to use a text-based title instead of an uploaded logo.', 'silverclean'),
			'id'            => 'header_title',
			'type'          => 'radio',
			'default'       => 'Use Logo',
			'values'		=> array (
								array( 'value' => 'Use Logo', 'display' => __('Use Logo', 'silverclean') ),
								array( 'value' => 'Display Title', 'display' => __('Display Title', 'silverclean') ),
								),
		);

		$settings_options[] = array(
			'name'          => __('Favicon', 'silverclean'),
			'desc'          => __('Set your favicon. 16x16 or 32x32 pixels, either 8-bit or 24-bit colors. PNG (W3C standard), GIF, or ICO.', 'silverclean'),
			'id'            => 'favicon',
			'type'          => 'image',
			'default'       => '',
		);

		$settings_options[] = array(
			'name'          => __('Display Tagline', 'silverclean'),
			'desc'          => __('Display your site description (tagline) on the right side of the header.', 'silverclean'),
			'id'            => 'header_tagline',
			'type'          => 'radio',
			'default'       => 'Off',
			'values'		=> array (
								array( 'value' => 'Off', 'display' => __('Off', 'silverclean') ),
								array( 'value' => 'On', 'display' => __('On', 'silverclean') ),
								),
		);

		$settings_options[] = array(
			'name'          => __('Blog Index Shows', 'silverclean'),
			'desc'          => __('Choose what content to display on Main Blog page and archives', 'silverclean'),
			'id'            => 'blog_index_shows',
			'type'          => 'radio',
			'default'       => 'Excerpt',
			'values'		=> array (
								array( 'value' => 'Excerpt', 'display' => __('Excerpt', 'silverclean') ),
								array( 'value' => 'Full content', 'display' => __('Full content', 'silverclean') ),
								),

		);

		$settings_options[] = array(
			'name'          => __('Responsive mode', 'silverclean'),
			'desc'          => __('Turn this setting off if you want your site to be unresponsive.', 'silverclean'),
			'id'            => 'responsive_mode',
			'type'          => 'radio',
			'default'       => 'on',
			'values'		=> array (
								array( 'value' => 'on', 'display' => __('On', 'silverclean') ),
								array( 'value' => 'off', 'display' => __('Off', 'silverclean') ),
								),
		);

	$settings_options[] = array('type' => 'end_menu');
// END PAGE 1
// START PAGE 2
	$settings_options[] = array(
		'name'          => __('Custom Header', 'silverclean'),
		'type'          => 'start_menu',
		'id'            => 'custom_header',
		'icon'          => 'picture',
	);

		$settings_options[] = array(
			'name'          => __('Display custom header on Homepage', 'silverclean'),
			'desc'          => __('Enable or disable display of custom header image on the front page.', 'silverclean'),
			'id'            => 'home_header_image',
			'type'          => 'radio',
			'default'       => 'On',
			'values'		=> array (
								array( 'value' => 'On', 'display' => __('On', 'silverclean') ),
								array( 'value' => 'Off', 'display' => __('Off', 'silverclean') ),
								),
		);

		$settings_options[] = array(
			'name'          => __('Display custom header on Blog Index', 'silverclean'),
			'desc'          => __('Enable or disable display of custom header image on blog index pages.', 'silverclean'),
			'id'            => 'blog_header_image',
			'type'          => 'radio',
			'default'       => 'On',
			'values'		=> array (
								array( 'value' => 'On', 'display' => __('On', 'silverclean') ),
								array( 'value' => 'Off', 'display' => __('Off', 'silverclean') ),
								),
		);

		$settings_options[] = array(
			'name'          => __('Display custom header on Blog Posts', 'silverclean'),
			'desc'          => __('Enable or disable display of custom header image on single blog posts', 'silverclean'),
			'id'            => 'single_header_image',
			'type'          => 'radio',
			'default'       => 'On',
			'values'		=> array (
								array( 'value' => 'On', 'display' => __('On', 'silverclean') ),
								array( 'value' => 'Off', 'display' => __('Off', 'silverclean') ),
								),
		);

		$settings_options[] = array(
			'name'          => __('Display custom header on Pages', 'silverclean'),
			'desc'          => __('Enable or disable display of custom header image on individual pages.', 'silverclean'),
			'id'            => 'pages_header_image',
			'type'          => 'radio',
			'default'       => 'On',
			'values'		=> array (
								array( 'value' => 'On', 'display' => __('On', 'silverclean') ),
								array( 'value' => 'Off', 'display' => __('Off', 'silverclean') ),
								),
		);


	$settings_options[] = array('type' => 'end_menu');
// END PAGE 2
// START PAGE 3
	$settings_options[] = array(
		'name'          => __('Support and Feedback', 'silverclean'),
		'type'          => 'start_menu',
		'id'            => 'support_feedback',
		'icon'          => 'network',
	);

		$settings_options[] = array(
			'name'          => __('Support and Feedback', 'silverclean'),
			'desc'          => '',
			'id'            => 'support_feedback',
			'type'          => 'support_feedback',
			'default'       => '',
		);

	$settings_options[] = array('type' => 'end_menu');
// END PAGE 3

	return $settings_options;
}
?>