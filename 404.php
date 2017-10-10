<?php
/**
 *
 * Silverclean WordPress Theme by Iceable Themes | https://www.iceablethemes.com
 *
 * Copyright 2013-2017 Mathieu Sarrasin - Iceable Media
 *
 * 404 Page Template
 *
 */

get_header();

?>
<div class="container" id="main-content">
	<div id="page-container" class="left with-sidebar">
		<div <?php post_class(); ?>>
			<h1 class="page-title"><?php esc_html_e( '404', 'silverclean-lite' ); ?></h1>
			<h2><?php esc_html_e( 'Page Not Found', 'silverclean-lite' ); ?></h2>
			<p><?php esc_html_e( 'What you are looking for isn\'t here...', 'silverclean-lite' ); ?></p>
			<p><?php esc_html_e( 'Maybe a search will help ?', 'silverclean-lite' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>

	<div id="sidebar-container" class="right">
		<ul id="sidebar">
			<?php dynamic_sidebar( 'sidebar' ); ?>
		</ul>
	</div>

</div>
<?php

get_footer();
