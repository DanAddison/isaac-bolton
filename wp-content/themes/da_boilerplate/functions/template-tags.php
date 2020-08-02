<?php
/**
 * Custom template tags for this theme
 *
 * @package da_boilerplate
 */

// post__meta div to be included in eg. post previews or perhaps single post footer sections
if ( ! function_exists( 'da_boilerplate_post_meta' ) ) :
	function da_boilerplate_post_meta() { ?>

		<div class="post__meta">
			<p class="post-published">Posted: <?php the_time('F jS, Y'); ?></p>
			<p class="post-author">By <?php the_author_posts_link(); ?></p>
			<p class="post-categories">Categories: <?php the_category(', '); ?></p>
		</div>

<?php } 
endif;
?>
