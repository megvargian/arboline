<?php
/**
 * Template Name: Product Catalogue
 */
get_header();
?>
<div class="container pt-5">
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    <h1 class="has-text-align-center underline text-uppercase">
        <span style="text-decoration: underline;"><?php the_title(); ?></span>
    </h1>
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>

    <?php
    if ( class_exists( 'WooCommerce' ) ) {

        // Get all parent categories except "Uncategorized"
        $parent_args = array(
            'taxonomy'   => 'product_cat',
            'orderby'    => 'name',
            'hide_empty' => true,
            'parent'     => 0,
            'exclude'    => array(17)
        );
        $parent_categories = get_terms( $parent_args );

        if ( ! empty( $parent_categories ) && ! is_wp_error( $parent_categories ) ) {
            foreach ( $parent_categories as $parent_cat ) {
                // echo '<h2 class="border-bottom pb-3 mb-4 fs-2 text-uppercase">' . esc_html( $parent_cat->name ) . '</h2>';

                // Get child categories
                $child_args = array(
                    'taxonomy'   => 'product_cat',
                    'orderby'    => 'name',
                    'hide_empty' => true,
                    'parent'     => $parent_cat->term_id,
                );
                $child_categories = get_terms( $child_args );

                if ( ! empty( $child_categories ) && ! is_wp_error( $child_categories ) ) {
                    foreach ( $child_categories as $child_cat ) {
                        echo '<h3 class="border-bottom pb-2 mb-3 fs-4 text-secondary">' . esc_html( $parent_cat->name . ' / ' . $child_cat->name ) . '</h3>';
                        echo '<ul class="custom-product-grid">';

                        // Query products in this child category
                        $products_args = array(
                            'post_type'      => 'product',
                            'posts_per_page' => -1,
                            'tax_query'      => array(
                                array(
                                    'taxonomy' => 'product_cat',
                                    'field'    => 'slug',
                                    'terms'    => $child_cat->slug,
                                ),
                            ),
                        );
                        $products = new WP_Query( $products_args );

                        if ( $products->have_posts() ) {
                            while ( $products->have_posts() ) {
                                $products->the_post();
                                global $product;
                                $image_url = get_the_post_thumbnail_url( $product->get_id(), 'medium' );
                                if ( ! $image_url ) {
                                    $image_url = 'https://arboline.com/wp-content/uploads/woocommerce-placeholder.png';
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
                        echo '</ul>';
                        echo '<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>';
                    }
                } else {
                    echo '<h3 class="border-bottom pb-2 mb-3 fs-4 text-secondary">' . esc_html( $parent_cat->name ) . '</h3>';
                    echo '<ul class="custom-product-grid">';

                    // Query products in this child category
                    $products_args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => -1,
                        'tax_query'      => array(
                            array(
                                'taxonomy' => 'product_cat',
                                'field'    => 'slug',
                                'terms'    => $parent_cat->slug,
                            ),
                        ),
                    );
                    $products = new WP_Query( $products_args );

                    if ( $products->have_posts() ) {
                        while ( $products->have_posts() ) {
                            $products->the_post();
                            global $product;
                            $image_url = get_the_post_thumbnail_url( $product->get_id(), 'medium' );
                            if ( ! $image_url ) {
                                $image_url = 'https://arboline.com/wp-content/uploads/woocommerce-placeholder.png';
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
                    echo '</ul>';
                    echo '<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>';
                }
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
  text-align: center;
}

.custom-product-item img {
  max-width: 100%;
  height: auto;
}

.custom-product-item:hover img{
    transform: scale(1.2);
}

.custom-product-image{
    overflow: hidden;
}

.custom-product-item img{
    transition: all .2s ease-in-out;
}

.custom-product-link {
  text-decoration: none;
  color: inherit;
}
.custom-product-title {
    min-height: 60px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
    text-transform: uppercase;
}
.wc-block-grid__product-add-to-cart{
    margin-top: auto;
}
.wp-block-button__link{
    align-items: center;
    background: #000;
    border-radius: 0;
    cursor: pointer;
    display: inline-flex;
    font-size: 1.125rem;
    justify-content: center;
    min-height: auto;
    color: #fff !important;
}
.wp-element-button{
    padding: 5px 20px !important;
    color: #fff !important;
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