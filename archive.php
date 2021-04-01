<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Terrascale
 */

get_header();
?>
<?php
//$page_id = get_queried_object_id();
$page_id = get_the_archive_title();
?>
<div class="full-bg <?php if ( $page_id == 'Blog' ) {
	echo 'blog-bg';
} elseif ( $page_id == 'Press' ) {
	echo 'press-bg';
} ?>">
	<div class="post-head">
		<h1><?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?></h1>
	</div>

	<div class="container">
		<?php if ( have_posts() ) :
		$post = $posts[0];
		$i    = 0;
		while ( have_posts() ) :
		the_post(); ?>
		<?php $i ++; ?>
		<?php if ( $i == 1 ) : ?>
		<div id="post-<?php the_ID(); ?>" class="full-width"
			 style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
			<div class="container">
				<div class="col-md-9 col-sm-12 col-12">
					<h1 class="fw-bold"><?php echo get_the_title(); ?></h1>
					<p><?php $content = substr( get_the_content(), 0, 100 );
						echo wp_filter_nohtml_kses( $content ); //or strip_tags?> ... </p>
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
								<a href="<?php echo get_the_permalink(); ?>">Read More!</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="row">
			<?php else: ?>
				<div id="post-<?php the_ID(); ?>" class=" blog-posts col-lg-4 col-md-4 col-sm-6 col-12">
					<?php $image = get_the_post_thumbnail_url( $post->ID, 'custom-thumb' ); ?>
					<?php if ( $image ): ?>
						<img src="<?php echo $image; ?>" alt="<?php echo get_the_title(); ?>">
					<?php else: ?>
						<img src="https://via.placeholder.com/700x500" alt="<?php echo get_the_title(); ?>">
					<?php endif; ?>
					<h3
						class="fw-bold"><?php echo wp_trim_words( get_the_title(), 10 ); ?>
					</h3>
					<p><?php $content = substr( get_the_content(), 0, 100 );
						echo wp_filter_nohtml_kses( $content ); //or strip_tags?> ... </p>
					<a href="<?php echo get_the_permalink(); ?>">Read More!</a>
					<div class="author-info">
						<p class="fw-bold"><?php echo get_the_author_meta( 'display_name', get_the_author_meta( 'ID' ) );
							?></p>
						<p><?php echo get_the_author_meta( 'description' ) ?></p>
						<time datetime="<?php echo get_the_date( 'c' ); ?>"
							  itemprop="datePublished"><?php echo get_the_date(); ?></time>
					</div>
				</div>
			<?php endif; ?>


			<?php /*
		 * Include the Post-Type-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
		 */
			//		get_template_part( 'template-parts/content', get_post_type() );

			endwhile;
			echo '</div>';
			terraScale_numeric_posts_nav();

			else :

				echo '<h3 class="text-center p-3">No Post Found!</h3>';

			endif;
			?>

		</div>
	</div>

<?php
get_footer();
