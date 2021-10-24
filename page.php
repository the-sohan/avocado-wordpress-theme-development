<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Avocado
 */

get_header();
?>
	
	<?php if( is_front_page() || is_account_page() ) : ?>

		<?php if( !is_user_logged_in() ) : ?>
		<div class="page-content-area section-padding">
			<div class="container">
				<div class="row">
					<div class="col col-auto">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>

		<?php else: ?>

		<div class="page-content-area">
			<?php the_content(); ?>
		</div>

		<?php endif; ?>

	<?php else: ?>

		<div class="page-title-area">
			<div class="container">
				<div class="row">
					<div class="col">
						<a href="<?php echo site_url(); ?>">Home</a> <span> / </span>
						<a href=""><?php the_title(); ?></a>
					</div>
				</div>
			</div>
		</div>

		<div class="page-content-area section-padding">
			<div class="container">
				<div class="row">
					<?php the_content(); ?>
				</div>
			</div>
		</div>

	<?php endif; ?>
	

	

<?php
get_footer();
