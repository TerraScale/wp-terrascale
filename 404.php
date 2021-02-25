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

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'terrascale' ); ?></h1>
			</header><!-- .page-header -->
		</section><!-- .error-404 -->

	</div><!-- #main -->

<?php
get_footer();
