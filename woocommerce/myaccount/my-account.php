<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */
 ?>

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
			<div class="col-lg-3">
				<?php do_action( 'woocommerce_account_navigation' ); ?>
			</div>
			<div class="col-lg-9">
				<div class="woocommerce-MyAccount-content">
					<?php
						/**
						 * My Account content.
						 *
						 * @since 2.6.0
						 */
						do_action( 'woocommerce_account_content' );
					?>
				</div>
			</div>
		</div>
	</div>
</div>




