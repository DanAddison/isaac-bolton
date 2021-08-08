<?php
/**
 * The template for displaying the header
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&family=Source+Serif+Pro&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- for screen readers to not have to tab through all nav items etc -->
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'da_boilerplate' ); ?></a>

<?php do_action( 'da_boilerplate_before_site_header' ); ?>

<header class="site-header" id="masthead">

	<div class="header__inner container">

		<div class="site-branding">
								
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

		</div><!-- .site-branding -->

		<button id="js-menu-button" class="menu-button hamburger hamburger--squeeze" type="button" aria-label="Menu" aria-controls="navigation">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button><!-- .hamburger -->

		<?php if( has_nav_menu( 'main' ) ) : ?>	
		<?php get_template_part( 'parts/primary-navigation' ); ?>
		<?php endif; ?>

	</div><!-- .container -->

</header><!-- #site-header -->

<?php do_action( 'da_boilerplate_after_site_header' ); ?>