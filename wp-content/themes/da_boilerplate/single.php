<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

<main id="main" class="main-content">
	<div id="primary" class="content-area">

		<?php the_post(); ?>

		<?php 
		// $image = get_field( 'custom_featured_image' );
		// $size = 'thumbnail';
		?>
		
		<div class="row row--pad">

			<article class="post post--studio">
                <div class="post__image">
                    <?php the_post_thumbnail( 'thumbnail' ); ?>
                </div>
	
                <header class="post__header">
					
                    <h1 class="post__title">
                        <?php the_title(); ?>
                    </h1>
                        
                </header>
				
				<div class="post__entry">	
					
					<?php the_content(); ?>	
					
				</div><!-- .post__entry -->

				
				<?php //if( !empty( $image ) ): ?>
				<!-- <div class="post__image">
					<?php// echo wp_get_attachment_image( $image, $size ); ?>
				</div> -->
				<?php //endif; ?>
		
			</article><!-- .post--studio -->

			<?php // get_template_part('comments'); ?>

			<?php // get_sidebar(); ?>

		</div>

	</div><!-- #primary .content-area -->
</main>
<?php
get_footer();