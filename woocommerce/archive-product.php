<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */


defined( 'ABSPATH' ) || exit;
get_header( 'shop' );
global $counter_products;
global $product;
global $wp_query;
?>
<div class="container">
	<div class="row">
		<?php
			/**
			 * Hook: woocommerce_before_main_content.
			 *
			 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
			 * @hooked woocommerce_breadcrumb - 20
			 * @hooked WC_Structured_Data::generate_website_data() - 30
			 */
			do_action( 'woocommerce_before_main_content' );

			/**
			 * Hook: woocommerce_shop_loop_header.
			 *
			 * @since 8.6.0
			 *
			 * @hooked woocommerce_product_taxonomy_archive_header - 10
			 */
			// do_action( 'woocommerce_shop_loop_header' );
			// custom_product_filter();
		?>
	</div>
</div>
<div id="product-list" class="pt-5">
	<div class="container">
		<div class="row">
			<div class="woocommerce-products-header col-12  col-md-6 ">
				<img src="https://fiddes.co.uk/app/uploads/2022/12/Fiddes-Group-Tins_OILS.jpg" alt="Oils"
					class="img-fluid w-100">
			</div>
			<div class="col-12  col-md-6 ">
				<header class="d-flex justify-content-center mb-4 flex-column">
					<h1 class="woocommerce-products-header__title page-title">Oils</h1>
					<p></p>
				</header>
				<div class="woocommerce-notices-wrapper"></div>
				<p class="woocommerce-result-count">
					Showing all 7 results</p>
				<form class="woocommerce-ordering" method="get">
					<select name="orderby" class="orderby" aria-label="Shop order">
						<option value="menu_order" selected="selected">Default sorting</option>
						<option value="popularity">Sort by popularity</option>
						<option value="date">Sort by latest</option>
						<option value="price">Sort by price: low to high</option>
						<option value="price-desc">Sort by price: high to low</option>
					</select>
					<input type="hidden" name="paged" value="1">
				</form>
				<ul class="products columns-6">

					<div class="mb-4">
						<p class="text-uppercase w-100 mb-2" id="fiddesRelatedProduct">
							<a class="d-flex align-items-center justify-content-between w-100 border-bottom pb-1"
								href="https://arboline.com/product/test/">
								FIDDES Danish Oil <i class="bi bi-chevron-right"></i>
							</a>
						</p>
						<p class="text-uppercase w-100 mb-2" id="fiddesRelatedProduct">
							<a class="d-flex align-items-center justify-content-between w-100 border-bottom pb-1"
								href="https://arboline.com/product/test/">
								FIDDES Raw Linseed Oil <i class="bi bi-chevron-right"></i>
							</a>
						</p>
						<p class="text-uppercase w-100 mb-2" id="fiddesRelatedProduct">
							<a class="d-flex align-items-center justify-content-between w-100 border-bottom pb-1"
								href="https://arboline.com/product/test/">
								FIDDES Boiled Linseed Oil <i class="bi bi-chevron-right"></i>
							</a>
						</p>
						<p class="text-uppercase w-100 mb-2" id="fiddesRelatedProduct">
							<a class="d-flex align-items-center justify-content-between w-100 border-bottom pb-1"
								href="https://arboline.com/product/test/">
								FIDDES Teak Oil <i class="bi bi-chevron-right"></i>
							</a>
						</p>
						<p class="text-uppercase w-100 mb-2" id="fiddesRelatedProduct">
							<a class="d-flex align-items-center justify-content-between w-100 border-bottom pb-1"
								href="https://arboline.com/product/test/">
								FIDDES White Polishing Oil <i class="bi bi-chevron-right"></i>
							</a>
						</p>
						<p class="text-uppercase w-100 mb-2" id="fiddesRelatedProduct">
							<a class="d-flex align-items-center justify-content-between w-100 border-bottom pb-1"
								href="https://arboline.com/product/test/">
								FIDDES Finishing Oil <i class="bi bi-chevron-right"></i>
							</a>
						</p>
						<p class="text-uppercase w-100 mb-2" id="fiddesRelatedProduct">
							<a class="d-flex align-items-center justify-content-between w-100 border-bottom pb-1"
								href="https://arboline.com/product/test/">
								FIDDES Pure Tung Oil <i class="bi bi-chevron-right"></i>
							</a>
						</p>
					</div>
				</ul>
			</div>
		</div>
		<!-- <div class="row pb-4 d-md-flex d-none">
			<?php
				// if ( woocommerce_product_loop() ) {
				// 	/**
				// 	 * Hook: woocommerce_before_shop_loop.
				// 	 */
				// 	$current_page = get_query_var('paged');
				// 	// echo'<pre>'; print_r('current_page: ' . $current_page); echo '</pre>';
				// 	$counter_products = $current_page > 1 ? $counter_products + (($current_page - 1) * 15) : 0;
				// 	$total_posts = $wp_query->found_posts;
				// 	$rest = $current_page > 1 ? ($total_posts - $counter_products) : 0;
				// 	if ( wc_get_loop_prop( 'total' ) ) {
				// 		$posts = []; // Initialize an array to hold the posts
				// 		// Populate the array with posts
				// 		$current_index = 0;
				// 		while ( have_posts() ) {
				// 			the_post();
				// 			array_push($posts, get_post());
				// 			$current_index++;
				// 			$counter_products++;
				// 			if($current_index % 5 == 0 && $current_index >= 5){
				// 				$four_porduct_right_side = array_slice($posts, ($current_index - 5) , $current_index);
				// 				$rest = $total_posts - $counter_products;
				// 				?>
				// 					<div class="col-6">
				// 						<div class="row">
				// 						<?php
				// 							for($i=0; $i < 4; $i++) { ?>
				// 							<div class="col-md-6 col-12">
				// 								<?php
				// 									setup_postdata($four_porduct_right_side[$i]); // Set up post data for the current post
				// 									/**
				// 									 * Hook: woocommerce_shop_loop.
				// 									*/
				// 									do_action( 'woocommerce_shop_loop' );
				// 									wc_get_template_part( 'content', 'product' );
				// 								?>
				// 							</div>
				// 							<?php
				// 							}
				// 						?>
				// 						</div>
				// 					</div>
				// 					<div class="col-md-6 col-12">
				// 						<?php
				// 							setup_postdata($four_porduct_right_side[5]); // Set up post data for the current post
				// 							/**
				// 							 * Hook: woocommerce_shop_loop.
				// 							*/
				// 							do_action( 'woocommerce_shop_loop' );
				// 							wc_get_template_part( 'content', 'product' );
				// 						?>
				// 					</div>
				// 				<?php
				// 			} else if (($rest < 5 && $rest != 0) || $total_posts < 5){?>
				// 				<div class="col-md-3 col-sm-4 col-12">
				// 					<?php
				// 						setup_postdata($posts[$current_index]); // Set up post data for the current post
				// 						/**
				// 						 * Hook: woocommerce_shop_loop.
				// 						*/
				// 						do_action( 'woocommerce_shop_loop' );
				// 						wc_get_template_part( 'content', 'product' );
				// 					?>
				// 				</div>
				// 			<?php
				// 			}
				// 			// echo'<pre>'; print_r('couter_products: ' . $counter_products); echo '</pre>';
				// 			// echo'<pre>'; print_r('total_post: ' . $total_posts); echo '</pre>';
				// 			// echo'<pre>'; print_r('rest: ' . $rest); echo '</pre>';
				// 		}
				// 		wp_reset_postdata(); // Reset post data after the loop
				// 	}
				// 	/**
				// 	 * Hook: woocommerce_after_shop_loop.
				// 	 *
				// 	 * @hooked woocommerce_pagination - 10
				// 	 */
				// 	do_action( 'woocommerce_after_shop_loop' );
				// } else {
				// 	/**
				// 	 * Hook: woocommerce_no_products_found.
				// 	 *
				// 	 * @hooked wc_no_products_found - 10
				// 	 */
				// 	do_action( 'woocommerce_no_products_found' );
				// }
			?>
		</div>
		<div class="row pb-4 d-md-none d-block">
			<?php
				// if ( woocommerce_product_loop() ) {
				// 	/**
				// 	 * Hook: woocommerce_before_shop_loop.
				// 	 */
				// 	$counter_products = 1;
				// 	$current_index = 1;
				// 	if ( wc_get_loop_prop( 'total' ) ) {
				// 		while ( have_posts() ) {
				// 			the_post();
				// 			/**
				// 			 * Hook: woocommerce_shop_loop.
				// 			 */
				// 			do_action( 'woocommerce_shop_loop' );
				// 			?>
				// 			<div class="col-12">
				// 				<?php
				// 					wc_get_template_part( 'content', 'product');
				// 					$current_index++;
				// 					$counter_products = $current_index;
				// 				?>
				// 			</div>
				// 		<?php
				// 		}
				// 		wp_reset_postdata(); // Reset post data after the loop
				// 	}
				// 	/**
				// 	 * Hook: woocommerce_after_shop_loop.
				// 	 *
				// 	 * @hooked woocommerce_pagination - 10
				// 	 */
				// 	do_action( 'woocommerce_after_shop_loop' );
				// } else {
				// 	/**
				// 	 * Hook: woocommerce_no_products_found.
				// 	 *
				// 	 * @hooked wc_no_products_found - 10
				// 	 */
				// 	do_action( 'woocommerce_no_products_found' );
				// }
			?>
		</div> -->
	</div>
</div>
<?php
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
// do_action( 'woocommerce_sidebar' );
get_footer( 'shop' );
