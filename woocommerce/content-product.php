<?php
/**
 * The template for displaying product content within loops.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this
 * as little as possible, but it does happen. When this occurs the version of the template file
 * will be bumped and the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
global $counter_products;
$product_id = $product->get_id();
// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div id="product-<?php echo $product_id; ?>" class="cat-single-main-product" <?php wc_product_class( '', $product ); ?>>
    <?php
        /**
         * Hook: woocommerce_before_shop_loop_item.
         *
         * @hooked woocommerce_template_loop_product_link_open - 10
         */
        //do_action( 'woocommerce_before_shop_loop_item' );

        /**
         * Hook: woocommerce_before_shop_loop_item_title.
         *
         * @hooked woocommerce_show_product_loop_sale_flash - 10
         * @hooked woocommerce_template_loop_product_thumbnail - 10
         */
        //do_action( 'woocommerce_before_shop_loop_item_title' );

        /**
         * Hook: woocommerce_shop_loop_item_title.
         *
         * @hooked woocommerce_template_loop_product_title - 10
         */
        //do_action( 'woocommerce_shop_loop_item_title' );

        /**
         * Hook: woocommerce_after_shop_loop_item_title.
         *
         * @hooked woocommerce_template_loop_rating - 5
         * @hooked woocommerce_template_loop_price - 10
         */
        // do_action( 'woocommerce_after_shop_loop_item_title' );

        /**
         * Hook: woocommerce_after_shop_loop_item.
         *
         * @hooked woocommerce_template_loop_product_link_close - 5
         * @hooked woocommerce_template_loop_add_to_cart - 10
         */
        // do_action( 'woocommerce_after_shop_loop_item' );
        ?>
    <?php
        // Open the product link
        // $short_description = $product->get_short_description();
        // $attachment_ids = $product->get_gallery_image_ids();
        // if ($attachment_ids && !empty($attachment_ids)) {
        //         $first_image_id = $attachment_ids[0]; // Get the first image ID
        //         $first_image_url = wp_get_attachment_image_src($first_image_id, 'full'); // Get the URL of the first image
        // }
        ?>
    <!-- <a class="w-100 h-100 d-block pb-3 <?php //echo $first_image_url ? 'cat-single-product' : '' ?>" href="<?php //echo esc_url( $product->get_permalink() ) ?>"> -->
    <?php
                // $attachment_id = $product->get_image_id(); // Get the product image ID
                // $image_url_mobile = isMob() ? wp_get_attachment_image_src($attachment_id, 'custom-woocommerce-thumbnail') : wp_get_attachment_image_src($attachment_id, 'full');
                // $image_url = wp_get_attachment_image_src($attachment_id, 'full');
                // if ($image_url || $image_url_mobile) {
                //         echo '<img class="d-md-block d-none main-img-product-'.$product_id.' main-thumbnail-img" src="' . esc_url($image_url[0]) . '" alt="' . esc_attr($product->get_name()) . '" width="500" height="500" />';
                //         echo '<img class="d-md-none d-block main-thumbnail-img-mobile" src="' . esc_url($image_url_mobile[0]) . '" alt="' . esc_attr($product->get_name()) . '" width="500" height="500" />';
                // }
                //  // Check if there are gallery images
                // if ($first_image_url) {
                //         echo '<img class="first-gallery-image d-none" src="' . esc_url($first_image_url[0]) . '" alt="First Gallery Image">';
                // }
                ?>
    <!-- <h2 class="woocommerce-loop-product__title"><?php //echo $product -> get_name(); ?></h2> -->
    <?php
                // if ( ! empty( $short_description ) ) {
                //         echo '<p class="woocommerce-product-short-description my-0">' . $short_description . '</p>';
                // }
                // echo '<span class="price">' . $product->get_price_html() . '</span>';
        // Close the product link
        // echo '</a>';
        // Display the add to cart button
        // echo $counter_products > 1 ? '' : woocommerce_template_single_add_to_cart();
        ?>

        <a href="https://arboline.com/product/test/"
            class="woocommerce-LoopProduct-link woocommerce-loop-product__link"><img width="300" height="300"
                src="https://fiddes.co.uk/app/uploads/2022/09/Fiddes-Polishing-Cloth-scaled-300x300.jpg"
                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" decoding="async"
                loading="lazy"
                srcset="https://fiddes.co.uk/app/uploads/2022/09/Fiddes-Polishing-Cloth-scaled-300x300.jpg 300w, https://fiddes.co.uk/app/uploads/2022/09/Fiddes-Polishing-Cloth-scaled-200x200.jpg 200w, https://fiddes.co.uk/app/uploads/2022/09/Fiddes-Polishing-Cloth-scaled-600x600.jpg 600w, https://fiddes.co.uk/app/uploads/2022/09/Fiddes-Polishing-Cloth-scaled-150x150.jpg 150w, https://fiddes.co.uk/app/uploads/2022/09/Fiddes-Polishing-Cloth-scaled-768x768.jpg 768w, https://fiddes.co.uk/app/uploads/2022/09/Fiddes-Polishing-Cloth-scaled.jpg 850w"
                sizes="(max-width: 300px) 100vw, 300px">
            <h2 class="woocommerce-loop-product__title">Mutton Cloth</h2>
            <!-- <span class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                            class="woocommerce-Price-currencySymbol">£</span>10.60</bdi></span> <small
                    class="woocommerce-price-suffix">INC. VAT</small></span> -->
        </a><a href="https://arboline.com/product/test/" data-quantity="1"
            class="button wp-element-button product_type_simple" data-product_id="1027" data-product_sku=""
            aria-label="Read more about “Mutton Cloth”" rel="nofollow">Shop now</a>
</div>
<?php