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
					<?php
					// Get current category object
					$term = get_queried_object();
					$thumbnail_id = get_term_meta($term->term_id, 'thumbnail_id', true);
					$image_url = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : 'https://fiddes.co.uk/app/uploads/2022/12/Fiddes-Group-Tins_OILS.jpg';
					?>
					<img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($term->name); ?>" class="img-fluid w-100">
			</div>
			<div class="col-12  col-md-6 ">
				<header class="d-flex justify-content-center mb-4 flex-column">
					<?php
					// Get current category object
					$term = get_queried_object();
					?>
					<h1 class="woocommerce-products-header__title page-title">
						<?php echo esc_html($term->name); ?>
					</h1>
				</header>
				<div class="woocommerce-notices-wrapper"></div>
				<?php
				// Get current orderby parameter
				$orderby = isset($_GET['orderby']) ? sanitize_text_field($_GET['orderby']) : 'menu_order';

				// Query products in this category
				$cat_id = get_queried_object_id();
				$args = array(
					'post_type' => 'product',
					'posts_per_page' => -1,
					'tax_query' => array(
						array(
							'taxonomy' => 'product_cat',
							'field' => 'term_id',
							'terms' => $cat_id,
						),
					),
				);

				// Add sorting parameters
				switch ($orderby) {
					case 'popularity':
						$args['meta_key'] = 'total_sales';
						$args['orderby'] = 'meta_value_num';
						$args['order'] = 'DESC';
						break;
					case 'date':
						$args['orderby'] = 'date';
						$args['order'] = 'DESC';
						break;
					case 'price':
						$args['meta_key'] = '_price';
						$args['orderby'] = 'meta_value_num';
						$args['order'] = 'ASC';
						break;
					case 'price-desc':
						$args['meta_key'] = '_price';
						$args['orderby'] = 'meta_value_num';
						$args['order'] = 'DESC';
						break;
					default:
						$args['orderby'] = 'menu_order';
						$args['order'] = 'ASC';
						break;
				}

				$products = get_posts($args);
				$product_count = count($products);
				?>
				<p class="woocommerce-result-count">
					Showing all <?php echo $product_count; ?> result<?php echo $product_count !== 1 ? 's' : ''; ?>
				</p>
				<form class="woocommerce-ordering" method="get">
					<select name="orderby" class="orderby" aria-label="Shop order">
						<option value="menu_order" <?php selected($orderby, 'menu_order'); ?>>Default sorting</option>
						<option value="popularity" <?php selected($orderby, 'popularity'); ?>>Sort by popularity</option>
						<option value="date" <?php selected($orderby, 'date'); ?>>Sort by latest</option>
						<option value="price" <?php selected($orderby, 'price'); ?>>Sort by price: low to high</option>
						<option value="price-desc" <?php selected($orderby, 'price-desc'); ?>>Sort by price: high to low</option>
					</select>
					<input type="hidden" name="paged" value="1">
				</form>
				<ul class="products columns-6">
					<div class="mb-4" id="product-listing">
						<?php
						if (is_product_category() && !empty($products)) {
							foreach ($products as $prod) {
								$link = get_permalink($prod->ID);
								$title = get_the_title($prod->ID);
								echo '<p class="text-uppercase w-100 mb-2" id="fiddesRelatedProduct">';
								echo '<a class="d-flex align-items-center justify-content-between w-100 border-bottom pb-1" href="' . esc_url($link) . '">';
								echo esc_html($title) . ' <i class="bi bi-chevron-right"></i>';
								echo '</a>';
								echo '</p>';
							}
						}
						?>
					</div>
				</ul>
			</div>
		</div>
	</div>
</div>

<script>
jQuery(document).ready(function($) {
    // Handle orderby dropdown change
    $('.woocommerce-ordering select.orderby').on('change', function() {
        var orderby = $(this).val();
        var currentUrl = window.location.href.split('?')[0];
        var newUrl = currentUrl + '?orderby=' + orderby;

        // Update URL without page reload
        window.history.pushState({path: newUrl}, '', newUrl);

        // Perform AJAX request
        $.ajax({
            url: window.location.href,
            type: 'GET',
            data: {
                orderby: orderby,
                ajax_load: 1
            },
            beforeSend: function() {
                $('#product-listing').css('opacity', '0.5');
            },
            success: function(response) {
                // Extract the product listing from response
                var $response = $(response);
                var newProductListing = $response.find('#product-listing').html();
                var newResultCount = $response.find('.woocommerce-result-count').html();

                // Update the product listing
                $('#product-listing').html(newProductListing);
                $('.woocommerce-result-count').html(newResultCount);
                $('#product-listing').css('opacity', '1');
            },
            error: function() {
                // Fallback to page reload if AJAX fails
                window.location.href = newUrl;
            }
        });
    });
});
</script>

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
