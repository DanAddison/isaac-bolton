<?php
/**
 * The template for displaying the footer
 */
?>

<?php do_action( 'da_boilerplate_before_site_footer' ); ?>

<footer class="footer" id="site-footer">
	
	<div class="footer__inner container">

        <p class="copyright column--left">&copy; <?php echo date('Y'); ?> <?php the_field('copyright', 'option'); ?></p>

        <?php if( have_rows('social_media', 'option') ): ?>
        <ul class="footer__social column--center">
        <?php while( have_rows('social_media', 'option') ): the_row(); 
            $platform = get_sub_field('platform');
            ?>
            <li><a href="<?php the_sub_field('url'); ?>" target="_blank">
            <span class="icon icon-<?php the_sub_field('platform'); ?>"></span>
            </a></li>
        <?php endwhile; ?>
        </ul>
        <?php endif; ?>

        <div class="column--right">
            <?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) {
                get_template_part( 'parts/footer-widgets' );
            } ?>
            <p class="credit">Site: <a href="https://danaddison.uk">Dan Addison</a></p>
        </div>

	</div><!-- .container -->

</footer><!-- #site-footer -->

<?php do_action( 'da_boilerplate_after_site_footer' ); ?>

<?php wp_footer(); ?>

</body>
</html>
