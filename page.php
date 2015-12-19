<?php
/**
 *
 * Silverclean WordPress Theme by Iceable Themes | http://www.iceablethemes.com
 *
 * Copyright 2013-2015 Mathieu Sarrasin - Iceable Media
 *
 * Page Template
 *
 */

get_header();

if(have_posts()) :
while(have_posts()) : the_post();

?><div class="container" id="main-content"><?php

		?><div id="page-container" <?php post_class("left with-sidebar"); ?>><?php

				?><h1 class="page-title"><?php the_title(); ?></h1><?php

				the_content();
				$silverclean_link_pages_args = array(
					'before'           => '<br class="clear" /><div class="paged_nav">' . __('Pages:', 'silverclean'),
					'after'            => '</div>',
					'link_before'      => '<span>',
					'link_after'       => '</span>',
					'next_or_number'   => 'number',
					'nextpagelink'     => __('Next page', 'silverclean'),
					'previouspagelink' => __('Previous page', 'silverclean'),
					'pagelink'         => '%',
					'echo'             => 1
				);
				wp_link_pages( $silverclean_link_pages_args );
				?><br class="clear" /><?php

				?><p class="editlink"><?php
					edit_post_link(__('Edit', 'silverclean'), '', '');
				?></p><?php

				// Display comments section only if comments are open or if there are comments already.
				if ( comments_open() || get_comments_number()!=0 ):
				?><div class="comments"><?php
					comments_template( '', true );
					next_comments_link(); previous_comments_link();
				?></div><?php
				endif;

endwhile;

else:
	?><h2><?php _e('Not Found', 'silverclean'); ?></h2><?php
	?><p><?php _e('What you are looking for isn\'t here...', 'silverclean'); ?></p><?php

endif;

?></div><?php // End page container

?><div id="sidebar-container" class="right"><?php
	get_sidebar();
?></div><?php // End sidebar

?></div><?php // End main content

get_footer(); ?>