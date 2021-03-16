<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Terrascale
 */

?>
</div><!-- #page -->

<div id="colophon" hidden class="site-footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
				<div class="text-lg-start">
					<h5>Netorian LLC</h5>
					<p>D-U-N-S : 028781060<br>Cage Code: 5AQS2</p>
				</div>
			</div>
			<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'footer-nav',
						'menu_id'         => 'site-footer-nav',
						'container'       => 'div',
						'container_class' => 'site-footer-nav'
					)
				);
				?>
			</div>

			<div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
				<div class="social-links">
					<?php dynamic_sidebar( 'social-links' ); ?>
				</div>
				<br>
				<a href="<?php echo home_url() ?>/terms-of-use">Terms of Use</a>
			</div>
		</div>

	</div>
</div><!-- #colophon -->
<div class="site-footer-two">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-12 order-md-1 order-sm-2 order-2">
				<div class="text-md-start text-sm-center text-center">
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'footer-nav',
							'menu_id'         => 'site-footer-nav',
							'container'       => 'div',
							'container_class' => 'site-footer-nav'
						)
					);
					?>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-12 order-md-2 order-sm-1 order-1">
				<div class="text-md-end text-sm-center text-center">
					<div class="social-links">
						<?php dynamic_sidebar( 'social-links' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>

</body>
</html>
