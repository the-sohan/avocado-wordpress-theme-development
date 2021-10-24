<?php
/**
 * Result Count
 *
 * Shows text: Showing x - x of x results.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/result-count.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php
	$grid_mode = $list_mode = $_GET;
	$grid_mode['mode'] = 'grid';
	$list_mode['mode'] = 'list';

	if ( $grid_mode['mode'] = 'grid' ) {
		$mode_class = 'active';
	} else if( $list_mode['mode'] = 'list' ) {
		$mode_class = 'active';
	} else {
		$mode_class = '';
	}
?>
<!-- <script>
	jQuery(document).ready(function() {
		$(".product-view-change a.list").on( "click", function() {
			$('.product-view-change a.list').addClass("active");
			$('.product-view-change a.grid').removeClass("active");
		});
	});
</script> -->


<div class="product-view-change">

	<a class="grid active" href="?<?php echo http_build_query($grid_mode); ?>"><i class="fa fa-th"></i></a>
	<a class="list" href="?<?php echo http_build_query($list_mode); ?>"><i class="fa fa-th-list"></i></a>
</div>

<p class="woocommerce-result-count">
	<?php
	if ( 1 === $total ) {
		_e( 'Showing the single result', 'woocommerce' );
	} elseif ( $total <= $per_page || -1 === $per_page ) {
		/* translators: %d: total results */
		printf( _n( 'Showing all %d result', 'Showing all %d results', $total, 'woocommerce' ), $total );
	} else {
		$first = ( $per_page * $current ) - $per_page + 1;
		$last  = min( $total, $per_page * $current );
		/* translators: 1: first result 2: last result 3: total results */
		printf( _nx( 'Showing %1$d&ndash;%2$d of %3$d result', 'Showing %1$d&ndash;%2$d of %3$d results', $total, 'with first and last result', 'woocommerce' ), $first, $last, $total );
	}
	?>
</p>
