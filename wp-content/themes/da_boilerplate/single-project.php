<?php
/**
 * The template for displaying single projects
 */

get_header(); ?>

<main id="main" class="main-content">

    <?php the_post(); ?>

    <div class="single-project__wrapper">

        <div class="single-project__content">
            
            <h1 class="single-project__title">
                <?php the_title(); ?>
            </h1>
            
            <?php the_content(); ?>

        </div>


        <?php if( have_rows('slides_item') ): ?>
        <div class="single-project__slides-wrapper">
            <div class="single-project__slides">

                <?php while( have_rows('slides_item') ): the_row(); 
                    $type = get_sub_field('acf_slide_media_type');

                    if($type == 'image') {
                        $image_id = get_sub_field('acf_slide_image');
                        $size = 'full';
                    ?>

                        <div class="single-project__slides-item single-project__slides-item--<?php echo $type ?>">
                            <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                        </div>

                    <?php
                    } else {
                        $video = get_sub_field('acf_slide_video');
                    ?>
                        <div class="single-project__slides-item single-project__slides-item--<?php echo $type ?>">
                            <?php echo $video ?>
                        </div> 

                    <?php
                    }

                endwhile;
                ?>
            </div>
        </div>
        <?php endif; ?>

    </div>

</main>
<?php
get_footer();