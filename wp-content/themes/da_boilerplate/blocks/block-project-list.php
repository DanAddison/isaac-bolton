<?php
// Displays list of project links
?>

<?php if( have_rows('acf_projects') ): ?>
<ul class="block-project-list">

    <?php while( have_rows('acf_projects') ): the_row(); 
        $text = get_sub_field('acf_project_link_text');
        $project_id = get_sub_field('acf_project_page');
        $link = get_permalink($project_id);
    ?>

        <li><a href="<?php echo $link; ?>"><?php echo $text; ?></a></li>

    <?php endwhile; ?>

</ul>
<?php endif; ?>