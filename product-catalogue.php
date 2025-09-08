<?php
/**
 * Template Name: Product Catalogue
 */
get_header();
?>
<div class="container">
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    <h1 class="has-text-align-center underline text-uppercase">
        <span style="text-decoration: underline;"><?php the_title(); ?></span>
    </h1>
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>

    <?php
    if ( class_exists( 'WooCommerce' ) ) {

        // Get all categories except "Uncategorized"
        $args = array(
            'taxonomy'   => 'product_cat',
            'orderby'    => 'name',
            'hide_empty' => true,
            'exclude'    => array( get_cat_ID( 'Uncategorized' ) )
        );

        $product_categories = get_terms( $args );

        if ( ! empty( $product_categories ) && ! is_wp_error( $product_categories ) ) {
            foreach ( $product_categories as $category ) { ?>

                <p class="border-bottom pb-3 mb-4 fs-3"><?php echo esc_html( $category->name ); ?></p>

                <ul class="custom-product-grid">
                <?php
                // Query products in this category
                $products_args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => -1,
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
                    while ( $products->have_posts() ) {
                        $products->the_post();
                        global $product;

                        // Featured image URL or default
                        $image_url = get_the_post_thumbnail_url( $product->get_id(), 'medium' );
                        if ( ! $image_url ) {
                            $image_url = 'https://arboline.com/wp-content/uploads/woocommerce-placeholder.png';
                            // 👆 Change this path to your own default image inside your theme
                        }
                        ?>
                        <li class="custom-product-item">
                            <a href="<?php echo get_permalink(); ?>" class="custom-product-link">
                                <div class="custom-product-image">
                                    <img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" />
                                </div>
                                <div class="custom-product-title"><?php echo get_the_title(); ?></div>
                            </a>
                            <div class="wp-block-button wc-block-grid__product-add-to-cart">
                                <a href="<?php echo get_permalink(); ?>"
                                   class="wp-block-button__link wp-element-button">
                                    Shop now
                                </a>
                            </div>
                        </li>
                        <?php
                    }
                    wp_reset_postdata();
                }
                ?>
                </ul>

                <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
            <?php
            }
        }
    }
    ?>
</div>
<style>
.custom-product-grid {
  display: grid;
  grid-template-columns: repeat(6, 1fr); /* 6 per row on desktop */
  gap: 20px;
  list-style: none;
  padding: 0;
  margin: 0;
}

.custom-product-item {
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 15px;
  text-align: center;
  background: #fff;
}

.custom-product-item img {
  max-width: 100%;
  height: auto;
  border-radius: 5px;
}

.custom-product-title {
  font-size: 16px;
  font-weight: 600;
  margin-top: 10px;
  margin-bottom: 10px;
}

.custom-product-link {
  text-decoration: none;
  color: inherit;
}

.wp-block-button__link {
  display: inline-block;
  margin-top: 10px;
  padding: 8px 15px;
  background: #0073aa;
  color: #fff !important;
  border-radius: 5px;
  text-decoration: none;
}

.wp-block-button__link:hover {
  background: #005177;
}

/* Responsive grid */
@media (max-width: 1200px) {
  .custom-product-grid {
    grid-template-columns: repeat(4, 1fr); /* 4 per row */
  }
}

@media (max-width: 768px) {
  .custom-product-grid {
    grid-template-columns: repeat(2, 1fr); /* 2 per row */
  }
}

@media (max-width: 480px) {
  .custom-product-grid {
    grid-template-columns: 1fr; /* 1 per row */
  }
}
</style>
<?php
get_footer();