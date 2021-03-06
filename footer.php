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
<div class="site-footer">
	<div class="container">
		<div class="row">
			<?php dynamic_sidebar( 'footer' ) ?>
		</div>
	</div>
	<div class="container">
				<p class="text-md-start text-sm-center text-center m-0 fw-bold" style="color: #f0f0f0">
					© <?php echo date( 'Y' ); ?> TerraScale, Inc.
				</p>
	</div>
</div>


<div class="top-bar">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-4 col-sm-3 col-3">
				<?php dynamic_sidebar( 'top-bar-left' ); ?>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-8 col-sm-9 col-9">
				<div class="top-right-bar">
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
