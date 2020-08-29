<?php
/**
 *
 * Silverclean WordPress Theme by Iceable Themes | https://www.iceablethemes.com
 *
 * Copyright 2013-2020 Iceable Themes - https://www.iceablethemes.com
 *
 * Main Index
 *
 */

get_header();

?>
<div id="main-content" class="container">
	<div id="page-container" class="left with-sidebar">
		<?php

		/* SEARCH CONDITIONAL TITLE */
		if ( is_search() ) :
			?>
			<h1 class="page-title"><?php esc_html_e( 'Search Results for ', 'silverclean-lite' ); ?>"<?php the_search_query(); ?>"</h1>
			<?php
		endif;

		/* ARCHIVE CONDITIONAL TITLE */
		if ( is_archive() ) :
			?>
			<h1 class="page-title"><?php the_archive_title(); ?></h1>
			<?php
		endif;

		/* DEFAULT CONDITIONAL TITLE */
		if ( is_home() && ! is_front_page() ) :
			?>
			<h1 class="page-title"><?php echo get_the_title( get_option( 'page_for_posts' ) ); ?></h1>
			<?php
		endif;

		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();

				?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="post-contents">
						<h3 class="entry-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
						</h3>

						<div class="post-content">
							<?php
							if (
								get_post_format()
								|| post_password_required()
								|| 'content' === get_theme_mod( 'silverclean_blog_index_content' )
							) :
								the_content();
							else :
								the_excerpt();
							endif;
							?>
						</div>
					</div>
					<?php

					if ( 'post' === get_post_type() ) :

						?>
						<div class="postmetadata">
							<?php
							if ( '' !== get_the_post_thumbnail() ) : // As recommended from the WP codex, to avoid potential failure of has_post_thumbnail()
								?>
								<div class="thumbnail">
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
										<?php
										the_post_thumbnail(
											'post-thumbnail',
											array(
												'class' => 'scale-with-grid',
											)
										);
										?>
									</a>
								</div>
								<?php
							endif;
							?>
							<span class="meta-date published">
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
									<?php the_time( get_option( 'date_format' ) ); ?>
								</a>
							</span>
							<?php

							// Echo updated date for hatom-feed - not to be displayed on front end
							?>
							<span class="updated">
								<?php the_modified_date( get_option( 'date_format' ) ); ?>
							</span>

							<span class="meta-author vcard author">
								<?php
								printf(
									// Translators: %s is the author's name
									wp_kses_post( __( 'By %s', 'silverclean-lite' ) ),
									'<span class="fn">' . get_the_author() . '</span>'
								);
								?>
							</span>
							<span class="meta-category"><?php esc_html_e( 'In ', 'silverclean-lite' ); ?><?php the_category( ', ' ); ?></span>
							<span class="meta-comments"><?php comments_popup_link( __( 'No Comment', 'silverclean-lite' ), __( '1 Comment', 'silverclean-lite' ), __( '% Comments', 'silverclean-lite' ) ); ?></span>
							<?php
							if ( has_tag() ) :
								echo '<span class="tags">';
								the_tags( '<span class="tag">', '</span><span>', '</span></span>' );
							endif;
							?>
							<span class="editlink">
								<?php edit_post_link( __( 'Edit', 'silverclean-lite' ), '', '' ); ?>
							</span>
						</div>
						<?php

					endif;

					?>
				</div>
				<hr />
				<?php

			endwhile;
		else :

			if ( is_search() ) :

				?>
				<h2><?php esc_html_e( 'Nothing Found', 'silverclean-lite' ); ?></h2>
				<p><?php esc_html_e( 'Maybe a search will help ?', 'silverclean-lite' ); ?></p>
				<?php
				get_search_form();

			else :

				?>
				<h2><?php esc_html_e( 'Not Found', 'silverclean-lite' ); ?></h2>
				<p><?php esc_html_e( 'What you are looking for isn\'t here...', 'silverclean-lite' ); ?></p>
				<?php

			endif;

		endif;

		?>
		<div class="page_nav">
			<div class="previous"><?php next_posts_link( __( 'Previous Posts', 'silverclean-lite' ) ); ?></div>
			<div class="next"><?php previous_posts_link( __( 'Next Posts', 'silverclean-lite' ) ); ?></div>
		</div>

	</div>

	<div id="sidebar-container" class="right">
		<?php get_sidebar(); ?>
	</div>

</div>

<?php

get_footer();
