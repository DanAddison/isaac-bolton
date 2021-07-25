<?php
// Displays project slider
?>

<?php if( have_rows('slides_item') ): ?>
<div class="block-project-slides">

    <?php while( have_rows('slides_item') ): the_row(); 
        $type = get_sub_field('acf_slide_media_type');

        if($type == 'image') {
            $image = get_sub_field('acf_slide_image');
            $size = 'full';
        ?>

            <div class="block-project-slides__item block-project-slides__item--<?php echo $type ?>">
                <?php echo wp_get_attachment_image( $image, $size ); ?>
            </div>

        <?php
        } else {
            $video_url = get_sub_field('acf_slide_video');
        ?>
            <div class="block-project-slides__item block-project-slides__item--<?php echo $type ?>">
                <iframe src="<?php echo $video_url ?>"></iframe>
            </div> 

        <?php
        }

    endwhile;
    ?>

</div>
<?php endif; ?>