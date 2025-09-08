<?php
/**
 * Template Name: Product Catalogue
 */
get_header();
?>
<div class="container">
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    <h1 class="has-text-align-center underline text-uppercase"><span
            style="text-decoration: underline;"><?php the_title(); ?></span></h1>
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    <?php
        if ( class_exists( 'WooCommerce' ) ) {

            // Get all categories except "Uncategorized"
            $args = array(
                'taxonomy'   => 'product_cat',
                'orderby'    => 'name',
                'hide_empty' => true,
                'exclude'    => array( get_cat_ID( 'Uncategorized' ) ) // exclude Uncategorized
            );

            $product_categories = get_terms( $args );

            if ( ! empty( $product_categories ) && ! is_wp_error( $product_categories ) ) {
                foreach ( $product_categories as $category ) { ?>
                <p class="border-bottom pb-3 mb-4 fs-3"><?php echo esc_html( $category->name ); ?></p>
                <div data-block-name="woocommerce/product-category" data-columns="6" data-rows="6"
                    data-content-visibility="{&quot;image&quot;:true,&quot;title&quot;:true,&quot;price&quot;:false,&quot;rating&quot;:true,&quot;button&quot;:true}"
                    data-categories="[28]"
                    data-stock-status="[&quot;&quot;,&quot;instock&quot;,&quot;outofstock&quot;,&quot;onbackorder&quot;]"
                    data-orderby="menu_order"
                    class="wc-block-grid wp-block-product-category wc-block-product-category has-6-columns has-multiple-rows">
                    <ul class="wc-block-grid__products">
                    <?php   // Query products in this category
                        $products_args = array(
                            'post_type'      => 'product',
                            'posts_per_page' => -1, // all products
                            'tax_query'      => array(
                                array(
                                    'taxonomy' => 'product_cat',
                                    'field'    => 'slug',
                                    'terms'    => $category->slug,
                                ),
                            ),
                        );

                        $products = new WP_Query( $products_args );

                        if ( $products->have_posts() ) {
                            echo '<div class="category-products">';
                            while ( $products->have_posts() ) {
                                $products->the_post();
                                global $product;
                                ?>
                                    <li class="wc-block-grid__product">
                                        <a href="<?php echo get_permalink(); ?>"
                                            class="wc-block-grid__product-link">
                                            <div class="wc-block-grid__product-image"><img width="300" height="300"
                                                    src="<?php echo get_the_post_thumbnail_url( $product->get_id(), 'medium' );?>"
                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                    alt="<?php echo get_the_title(); ?>" decoding="async" loading="lazy"
                                                    sizes="(max-width: 300px) 100vw, 300px"></div>
                                            <div class="wc-block-grid__product-title"><?php echo get_the_title(); ?></div>
                                        </a>
                                        <div class="wp-block-button wc-block-grid__product-add-to-cart">
                                            <a
                                                href="<?php echo get_permalink(); ?>"
                                                aria-label="Select options for “<?php echo get_the_title(); ?>”" data-quantity="1"
                                                data-product_id="30787" data-product_sku="" rel="nofollow"
                                                class="wp-block-button__link wp-element-button add_to_cart_button">
                                                Shop now
                                            </a>
                                        </div>
                                    </li>
                                <?php
                            }
                            wp_reset_postdata();
                        } ?>
                        </ul>
                    </div>
                    <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
                    <?php
                    }
                }
            }
    ?>
</div>