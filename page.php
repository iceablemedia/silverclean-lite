<?php
/**
 *
 * Silverclean WordPress Theme by Iceable Themes | https://www.iceablethemes.com
 *
 * Copyright 2013-2017 Mathieu Sarrasin - Iceable Media
 *
 * Page Template
 *
 */

get_header();

?><div class="container" id="main-content">
	<div id="page-container" <?php post_class( 'left with-sidebar' ); ?>>
		<?php

		if ( have_posts() ) :
			while ( have_posts() ) :

				the_post();

				?>
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php

				the_content();

				wp_link_pages(
					array(
						'before'           => '<br class="clear" /><div class="paged_nav">' . __( 'Pages:', 'silverclean-lite' ),
						'after'            => '</div>',
						'link_before'      => '<span>',
						'link_after'       => '</span>',
						'next_or_number'   => 'number',
						'nextpagelink'     => __( 'Next page', 'silverclean-lite' ),
						'previouspagelink' => __( 'Previous page', 'silverclean-lite' ),
						'pagelink'         => '%',
						'echo'             => 1,
					)
				);

				?>
				<br class="clear" />

				<p class="editlink">
					<?php edit_post_link( __( 'Edit', 'silverclean-lite' ), '', '' ); ?>
				</p>
				<?php

				// Display comments section only if comments are open or if there are comments already.
				if ( comments_open() || '0' !== get_comments_number() ) :
				?>
				<div class="comments">
					<?php
					comments_template( '', true );
					next_comments_link();
					previous_comments_link();
					?>
				</div>
				<?php
				endif;

			endwhile;

		else :

			?>
			<h2><?php esc_html_e( 'Not Found', 'silverclean-lite' ); ?></h2>
			<p><?php esc_html_e( 'What you are looking for isn\'t here...', 'silverclean-lite' ); ?></p>
			<?php

		endif;

		?>
	</div>

	<div id="sidebar-container" class="right">
		<?php get_sidebar(); ?></div>
	</div>
<?php

get_footer();
