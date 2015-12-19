<?php
/**
 *
 * Silverclean WordPress Theme by Iceable Themes | http://www.iceablethemes.com
 *
 * Copyright 2013 Mathieu Sarrasin - Iceable Media
 *
 * Main Index
 *
 */
?>

<?php get_header(); ?>

	<div id="main-content" class="container">

		<?php $blog_sidebar_side = strtolower( icefit_get_option('blog_sidebar_side') );
		if ($blog_sidebar_side == 'right' || $blog_sidebar_side == '') {
			$blog_sidebar_side = 'right';
			$page_container_side = 'left';
		} else {
			$page_container_side = 'right';
		}
		?>

		<div id="page-container" class="<?php echo $page_container_side; ?> with-sidebar">

		<?php /* SEARCH CONDITIONAL TITLE */ ?>
		<?php if ( is_search() ) :	?>
		<h1 class="page-title"><?php _e('Search Results for ', 'icefit'); ?>"<?php the_search_query() ?>"</h1>
		<?php endif; ?>
		
		<?php /* TAG CONDITIONAL TITLE */ ?>
		<?php if ( is_tag() ) :	?>			
		<h1 class="page-title"><?php _e('Tag: ', 'icefit'); single_tag_title(); ?></h1>
		<?php endif; ?>
					
		<?php /* CATEGORY CONDITIONAL TITLE */ ?>
		<?php if ( is_category() ) : ?>			
		<h1 class="page-title"><?php _e('Category: ', 'icefit'); single_cat_title(); ?></h1>
		<?php endif; ?>	

		<?php /* DEFAULT CONDITIONAL TITLE */ ?>
		<?php if (!is_front_page() && !is_search() && !is_tag() && !is_category()) { ?>
		<h1 class="page-title"><?php echo get_the_title(get_option('page_for_posts')); ?></h1>
		<?php }	/* is_front_page endif */ ?>

		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="post-contents">

					<h3 class="entry-title">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
					</h3>

					<div class="post-excerpt">
					<?php the_excerpt() ?>
					</div>
		
				</div>

				<div class="postmetadata">
					<?php if (has_post_thumbnail()) : ?>
						<div class="thumbnail">
						<?php
						echo '<a href="' . get_permalink() . '" title="' . get_the_title() . '">'; ?>
						<?php the_post_thumbnail('post-thumbnail', array('class' => 'scale-with-grid')); ?></a>
						</div>
					<?php endif; ?>
					<span class="meta-date"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_time(get_option('date_format')); ?></a></span>
					<span class="meta-author"><?php _e('By ', 'icefit'); the_author(); ?></span>
					<span class="meta-category"><?php _e('In ', 'icefit'); the_category(', ') ?></span>
					<span class="meta-comments"><?php comments_popup_link( __( 'No Comment', 'icefit' ), __( '1 Comment', 'icefit' ), __( '% Comments', 'icefit' ) ); ?></span>
					<?php if (has_tag()) { echo '<span class="tags">'; the_tags('<span class="tag">', '</span><span>', '</span></span>'); } ?>
					<span class="editlink"><?php edit_post_link(__('Edit', 'icefit'), '', ''); ?></span>
				</div>

			</div><!-- end div post -->

			<hr />

		<?php endwhile; ?>
		<?php else : ?>

			<h2><?php _e('Not Found', 'icefit'); ?></h2>
			<p><?php _e('What you are looking for isn\'t here...', 'icefit'); ?></p>

		<?php endif; ?>

			<div class="page_nav">
				<div class="previous"><?php next_posts_link('Previous Posts'); ?></div>
				<div class="next"><?php previous_posts_link('Next Posts'); ?></div>
			</div>

		</div>
		<!-- End page container -->

		<div id="sidebar-container" class="<?php echo $blog_sidebar_side; ?>">
			<?php get_sidebar(); ?>
		</div>		
		<!-- End sidebar -->

	</div>
	<!-- End main content -->

<?php get_footer(); ?>