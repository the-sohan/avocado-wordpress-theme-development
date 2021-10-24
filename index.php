<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Avocado
 */

get_header();
?>

	<div class="page-title-area">
		<div class="container">
			<div class="row">
				<div class="col">
					<a href="<?php echo site_url(); ?>">Home</a> <span> / </span>
					<a href="">Blog</a>
				</div>
			</div>
		</div>
	</div>

	<div id="primary" class="content-area blog-page section-padding">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
				<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();
							?>

							<div class="col-lg-4">
								<div class="single-blog">
									<?php
										/*
										* Include the Post-Type-specific template for the content.
										* If you want to override this in a child theme, then include a file
										* called content-___.php (where ___ is the Post Type name) and that will be used instead.
										*/
									get_template_part( 'template-parts/content', get_post_type() );
									?>
								</div>
							</div>

							

				<?php	endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</div>
			</div>			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
