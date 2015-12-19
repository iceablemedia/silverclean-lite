<?php
/**
 *
 * Silverclean WordPress Theme by Iceable Themes | http://www.iceablethemes.com
 *
 * Copyright 2013 Mathieu Sarrasin - Iceable Media
 *
 * Footer Template
 *
 */ 
?>

	<?php  if (is_active_sidebar( 'footer-sidebar' ) ): ?>
		<div id="footer"><div class="container">
			<ul>
			<?php dynamic_sidebar( 'footer-sidebar' ); ?>
			</ul>
		</div></div>
	<?php endif; ?>

	<div id="sub-footer"><div class="container">
		<?php			
			$creation_year = icefit_get_option('copyright_start_year');
			$current_year = date('Y');
			if ($current_year == $creation_year) $copyright_years = $creation_year;
			else $copyright_years = $creation_year.'-'.$current_year;
			$footer_note = icefit_get_option('footer_note');
			$footer_note = str_replace("%date%", $copyright_years, $footer_note);
			$footer_note = str_replace("%sitename%", get_bloginfo('name'), $footer_note );
			$footer_note = htmlspecialchars_decode( $footer_note );
			$allowed_html = wp_kses_allowed_html( 'post' );
		?>
		<p><?php echo wp_kses( $footer_note, $allowed_html ); ?></p>
	</div></div>
	<!-- End Footer -->

</div>
<!-- End main wrap -->

<?php wp_footer(); ?> 
<!-- End Document
================================================== -->
</body>
</html>