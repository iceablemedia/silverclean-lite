<?php
/**
 *
 * Silverclean WordPress Theme by Iceable Themes | http://www.iceablethemes.com
 *
 * Copyright 2013 Mathieu Sarrasin - Iceable Media
 *
 * Single Post Template
 *
 */
?>

<?php get_header(); ?>

	<div class="container" id="main-content">

		<?php $blog_sidebar_side = strtolower( icefit_get_option('blog_sidebar_side') );
		if ($blog_sidebar_side == 'right' || $blog_sidebar_side == '') {
			$blog_sidebar_side = 'right';
			$page_container_side = 'left';
		} else {
			$page_container_side = 'right';
		}
		?>

		<div id="page-container" class="<?php echo $page_container_side; ?> with-sidebar">

			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class("single-post"); ?>>
		
			<div class="post-content">
			<div class="postmetadata">
				<?php if (has_post_thumbnail()) : ?>
				<div class="thumbnail">
					<a data-rel="prettyPhoto" href="<?php	$image_id = get_post_thumbnail_id();
									$image_url = wp_get_attachment_image_src($image_id,'large', true);
									echo $image_url[0];  ?>">
					<?php the_post_thumbnail('post-thumbnail', array('class' => 'scale-with-grid')); ?>
					</a>
				</div>
				<?php endif; ?>
				<span class="meta-date"><?php the_time(get_option('date_format')); ?></span>
				<span class="meta-author"><?php _e('By ', 'icefit'); the_author(); ?></span>
				<span class="meta-category"><?php _e('In ', 'icefit'); the_category(', ') ?></span>
				<?php if (has_tag()) { echo '<span class="tags">'; the_tags('<span class="tag">', '</span><span>', '</span></span>'); } ?>
				<span class="editlink"><?php edit_post_link(__('Edit', 'icefit'), '', ''); ?></span>
			</div>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php the_content() ?>
			</div><!-- end post content -->
			<div class="clear" /></div>
			<?php $args = array(
				'before'           => '<br class="clear" /><div class="paged_nav">' . __('Pages:', 'icefit'),
				'after'            => '</div>',
				'link_before'      => '',
				'link_after'       => '',
				'next_or_number'   => 'number',
				'nextpagelink'     => __('Next page', 'icefit'),
				'previouspagelink' => __('Previous page', 'icefit'),
				'pagelink'         => '%',
				'echo'             => 1
			);
			wp_link_pages( $args ); ?>

			</div><!-- end div post -->
		
			<?php	// Display comments section only if comments are open or if there are comments already.
			if ( comments_open() || get_comments_number()!=0 ) : ?>
				<hr />
				<!-- comments section -->
				<div class="comments">
				<?php comments_template( '', true ); ?>
				</div>
				<!-- end comments section -->
			<?php endif; ?>

			<?php endwhile; ?>

			<?php else : ?>
		
			<h2><?php _e('Not Found', 'icefit'); ?></h2>
			<p><?php _e('What you are looking for isn\'t here...', 'icefit'); ?></p>

			<?php endif; ?>

			<div class="article_nav">
				<div class="next"><?php previous_post_link('%link'); ?></div>
				<div class="previous"><?php next_post_link('%link'); ?></div>
				<br class="clear" />
			</div>

		</div>
		<!-- End page container -->
		
		<div id="sidebar-container" class="<?php echo $blog_sidebar_side; ?>">
			<?php get_sidebar(); ?>
		</div>		
		<!-- End sidebar column -->
		

	</div>
	<!-- End main content -->

<?php get_footer(); ?>