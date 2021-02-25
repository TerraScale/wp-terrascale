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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
					<ul>
						<li><a href="tel:+1 (800) XXX-XXXX" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.png" alt="Phone">
								<span>+1 (800) XXX-XXXX</span> </a></li>
						<li><a href="mailto:help@terrascale.org" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/email.png" alt="Email">
								<span>help@terrascale.org</span> </a></li>
					</ul>
				</div>
				<div class="col-xl-8 col-lg-8 col-md-6 col-sm-6 col-6">
					<div class="top-right-bar">
						<ul>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Media</a></li>
							<li><a href="#">FAQs</a></li>
						</ul>
						<div class="social-links">
							<ul>
								<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a></li>
								<li><a href="#" target="_blank"><i class="fab fa-twitter"></i> </a></li>
								<li><a href="#" target="_blank"><i class="fab fa-instagram"></i> </a></li>
								<li><a href="#" target="_blank"><i class="fab fa-youtube"></i> </a></li>
								<li><a href="#" target="_blank"><i class="fab fa-vimeo-v"></i> </a></li>
								<li><a href="#" target="_blank"><i class="fab fa-medium-m"></i> </a></li>
								<li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i> </a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
					<div class="site-branding">
						<?php the_custom_logo(); ?>
					</div>
				</div>
				<div class="col-xl-10 col-lg-10 col-md-6 col-sm-2 col-6">
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'menu-1',
							'menu_id'         => 'site-navigation',
							'container'       => 'div',
							'container_class' => 'site-navigation'
						)
					);
					?>
				</div>
			</div>
		</div>
	</div><!-- #masthead -->
