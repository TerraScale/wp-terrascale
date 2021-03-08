<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Terrascale
 */

get_header();
?>

	<div id="primary" class="container">
		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<div id="post-<?php the_ID(); ?>" class="full-width pb-4 mb-3"
				 style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
				<div class="container">
					<div class="col-md-9 col-sm-12 col-12">
						<h1 class="fw-bold"><?php echo get_the_title(); ?></h1>
						<div class="post-meta">
							<div class="row">
								<div class="col-md-9 col-sm-12 col-12">
									<div class="d-flex">
										<img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ) ); ?>" alt="">
										<div class="author-info">
											<h4><?php echo get_the_author_meta( 'display_name', get_the_author_meta( 'ID' ) );
												?></h4>
											<p><?php echo get_the_author_meta( 'description' ) ?></p>
											<time datetime="<?php echo get_the_date( 'c' ); ?>"
												  itemprop="datePublished"><?php echo get_the_date(); ?></time>
										</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-12 col-12">
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<?php the_content(); ?>
			<?php
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'terrascale' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'terrascale' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</div><!-- #main -->

<?php
get_footer();
