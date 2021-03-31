<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Terrascale
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wptime-plugin-preloader"></div>
<?php wp_body_open(); ?>
<div class="stripe-right"></div>
<div class="stripe-left"></div>
<div class="top-bar">
	<div class="container">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
				<?php dynamic_sidebar( 'top-bar-left' ); ?>
			</div>

			<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
				<div class="top-right-bar">
					<div class="social-links">
						<?php dynamic_sidebar( 'social-links' ); ?>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<div id="masthead" class="site-header">
	<div class="container">
		<div class="row">
			<div class="col-xl-2 col-lg-12 col-md-6 col-sm-6 col-6">
				<div class="site-branding">
					<?php the_custom_logo(); ?>
				</div>
			</div>
			<div class="col-xl-8 col-lg-10 col-md-6 col-sm-2 col-6">
				<div class="d-lg-block d-md-none d-none">
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'header-nav',
							'menu_id'         => 'site-navigation',
							'container'       => 'div',
							'container_class' => 'site-navigation'
						)
					);
					?>
				</div>
				<div class="d-lg-none d-md-block d-block">
					<div class="mobile-menu-btn">
						<span>Menu</span> <i class="fas fa-ellipsis-v"></i>
					</div>
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 d-lg-block d-md-none d-none text-end">
				<ul class="sp-link-menu">
					<li><a href="<?php echo home_url(); ?>/contact-us">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div>
</div><!-- #masthead -->
<div class="mobile-navigation-container">
	<span class="menu-close"><i class="fas fa-times"></i></span>
	<?php
	wp_nav_menu(
		array(
			'theme_location'  => 'mobile-nav',
			'menu_id'         => 'primary-menu',
			'container'       => 'nav',
			'container_id'    => 'mobile-navigation',
			'container_class' => 'mobile-navigation'
		)
	);
	?>
	<span class="mobile-menu-toggle"><i class="fas fa-angle-down"></i></span>

	<span class="menu-footer">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="<?php echo bloginfo() ?>"
			 class="d-block w-50 mx-auto"><hr>
        &copy; <?php echo date( 'Y' ); ?> <?php echo bloginfo() ?>. All Rights Reserved.</span>
</div>
<div id="page" class="site">
