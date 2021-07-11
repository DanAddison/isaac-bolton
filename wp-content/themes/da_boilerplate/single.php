<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

<main id="main" class="main-content">

    <?php the_post(); ?>
    
    <h1 class="post__title">
        <?php the_title(); ?>
    </h1>

    <?php the_content(); ?>	

</main>
<?php
get_footer();