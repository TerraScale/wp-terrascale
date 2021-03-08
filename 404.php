<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Terrascale
 */

get_header();
?>

	<div class="container">

		<div class="error-404 pt-5 not-found text-center">
			<h1 class="display-1">404</h1>
			<h3 class="page-title text-secondary"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'terrascale' ); ?></h3>
		</div><!-- .error-404 -->

	</div><!-- #main -->

<?php
get_footer();
