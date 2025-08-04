<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure $product is available and is a WC_Product object
if ( ! is_a( $product, 'WC_Product' ) ) {
    return;
}
?>
<div class="container">
    <div class="row">
        <?php
        /**
         * Hook: woocommerce_before_single_product.
         *
         * @hooked woocommerce_output_all_notices - 10
         */
        do_action( 'woocommerce_before_single_product' );
        ?>
    </div>
</div>
<?php
if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?> class="px-0">
    <div class="container py-5 pt-3 mt-2">
        <div class="row">
            <div class="col-md-5 col-12">
                <div class="row px-0">
                    <?php
                    /**
                     * Hook: woocommerce_before_single_product_summary.
                     *
                     * @hooked woocommerce_show_product_sale_flash - 10
                     * @hooked woocommerce_show_product_images - 20
                     */
                    do_action( 'woocommerce_before_single_product_summary' );
                    ?>
                </div>
            </div>

            <div class="col-md-7 col-12">
                <div class="summary entry-summary w-100">
                    <?php
                    /**
                     * Hook: woocommerce_single_product_summary.
                     *
                     * @hooked woocommerce_template_single_title - 5
                     * @hooked woocommerce_template_single_rating - 10
                     * @hooked woocommerce_template_single_price - 10
                     * @hooked woocommerce_template_single_excerpt - 20
                     * @hooked woocommerce_template_single_add_to_cart - 30
                     * @hooked woocommerce_template_single_meta - 40
                     * @hooked woocommerce_template_single_sharing - 50
                     * @hooked WC_Structured_Data::generate_product_data() - 60
                     */
                    ?>
                    <h1 class="product_title entry-title"><?php echo esc_html( $product->get_name() ); ?></h1>

                    <?php if ( $product->get_short_description() ) : ?>
                    <div class="woocommerce-product-details__short-description">
                        <?php echo wp_kses_post( $product->get_short_description() ); ?>
                    </div>
                    <?php endif; ?>

                    <p class="price"><?php echo $product->get_price_html(); ?></p>

                    <?php
                    /**
                     * Hook: woocommerce_template_single_add_to_cart.
                     *
                     * @hooked woocommerce_template_single_add_to_cart - 30
                     */
                    do_action( 'woocommerce_template_single_add_to_cart' );
                    ?>

                    <?php
                    /**
                     * Hook: woocommerce_template_single_meta.
                     *
                     * @hooked woocommerce_template_single_meta - 40
                     */
                    do_action( 'woocommerce_template_single_meta' );
                    ?>
                </div>
                <div class="after-summary">
                    <?php
                    /**
                     * Hook: woocommerce_after_single_product_summary.
                     *
                     * @hooked woocommerce_output_product_data_tabs - 10
                     * @hooked woocommerce_upsell_display - 15
                     */
                    // Custom description section
                    $long_description = $product->get_description();
                    if($long_description){
                    ?>
                    <div class="single-description-section">
                        <div class="accordion w-100" id="accordionExample-description">
                            <div class="accordion-item" style="border-top: none !important; border-left: none !important; border-right: none !important;">
                                <h2 class="accordion-header mt-0" id="heading-description">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-description" aria-expanded="true" aria-controls="collapse-description">
                                        Description
                                    </button>
                                </h2>
                                <div id="collapse-description" class="accordion-collapse collapse" aria-labelledby="heading-description" data-bs-parent="#accordionExample-description">
                                    <div class="accordion-body">
                                        <?php echo wp_kses_post( $long_description ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="accordion mb-5" id="accordionProduct">
                <?php
                $attributes = $product->get_attributes();
                $has_weight = $product->has_weight();
                $has_dimensions = $product->has_dimensions();

                if ( ! empty( $attributes ) || $has_weight || $has_dimensions ) : ?>
                <div class="accordion-item">
                    <p class="accordion-header" id="headingadditional_information">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#additional_informationCollapse" aria-expanded="false"
                            aria-controls="additional_informationCollapse">
                            <?php esc_html_e( 'Additional information', 'woocommerce' ); ?>
                        </button>
                    </p>
                    <div id="additional_informationCollapse" class="accordion-collapse collapse"
                        aria-labelledby="headingadditional_information" data-bs-parent="#accordionProduct" style="">
                        <div class="accordion-body px-0">
                            <?php
                            $attributes = $product->get_attributes();
                            if ( ! empty( $attributes ) ) : ?>
                            <table class="woocommerce-product-attributes shop_attributes">
                                <tbody>
                                    <?php
                                    // Add weight row if it exists
                                    if ( $product->has_weight() ) : ?>
                                    <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--weight">
                                        <th class="woocommerce-product-attributes-item__label"><?php esc_html_e( 'Weight', 'woocommerce' ); ?></th>
                                        <td class="woocommerce-product-attributes-item__value"><?php echo esc_html( wc_format_weight( $product->get_weight() ) ); ?></td>
                                    </tr>
                                    <?php endif; ?>

                                    <?php
                                    // Add dimensions if they exist
                                    if ( $product->has_dimensions() ) : ?>
                                    <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--dimensions">
                                        <th class="woocommerce-product-attributes-item__label"><?php esc_html_e( 'Dimensions', 'woocommerce' ); ?></th>
                                        <td class="woocommerce-product-attributes-item__value"><?php echo esc_html( wc_format_dimensions( $product->get_dimensions( false ) ) ); ?></td>
                                    </tr>
                                    <?php endif; ?>

                                    <?php foreach ( $attributes as $attribute ) :
                                        $attribute_label = wc_attribute_label( $attribute->get_name() );
                                        $attribute_value = $product->get_attribute( $attribute->get_name() );

                                        if ( empty( $attribute_value ) ) {
                                            continue;
                                        }
                                        ?>
                                    <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_<?php echo esc_attr( $attribute->get_name() ); ?>">
                                        <th class="woocommerce-product-attributes-item__label"><?php echo esc_html( $attribute_label ); ?></th>
                                        <td class="woocommerce-product-attributes-item__value">
                                            <?php if ( $attribute->get_variation() ) : ?>
                                                <?php echo wp_kses_post( $attribute_value ); ?>
                                            <?php else : ?>
                                                <?php echo wp_kses_post( $attribute_value ); ?>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <?php else : ?>
                                <p><?php esc_html_e( 'No additional information available.', 'woocommerce' ); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Product Data Sheet Section -->
                <div class="accordion-item">
                    <p class="accordion-header" id="headingDataSheets">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#DataSheetsCollapse" aria-expanded="false"
                            aria-controls="DataSheetsCollapse">
                            Product Data Sheet
                        </button>
                    </p>
                    <div id="DataSheetsCollapse" class="accordion-collapse collapse" aria-labelledby="headingDataSheets"
                        data-bs-parent="#accordionProduct" style="">
                        <div class="accordion-body px-0">
                            <?php
                            // Check for downloadable files
                            if ( $product->is_downloadable() && $product->has_file() ) {
                                $downloads = $product->get_downloads();
                                foreach ( $downloads as $download ) {
                                    echo '<a href="' . esc_url( $download->get_file() ) . '" class="d-flex justify-content-between align-items-center p-3 mb-3 text-uppercase" target="_blank">';
                                    echo esc_html( $download->get_name() );
                                    echo '<i class="bi bi-file-earmark-arrow-down"></i></a>';
                                }
                            } else {
                                // Check for custom meta field for data sheet URL
                                $data_sheet_url = get_post_meta( $product->get_id(), '_product_data_sheet_url', true );
                                $data_sheet_name = get_post_meta( $product->get_id(), '_product_data_sheet_name', true );

                                if ( $data_sheet_url ) {
                                    $sheet_name = $data_sheet_name ? $data_sheet_name : $product->get_name() . ' Data Sheet';
                                    echo '<a href="' . esc_url( $data_sheet_url ) . '" class="d-flex justify-content-between align-items-center p-3 mb-3 text-uppercase" target="_blank">';
                                    echo esc_html( $sheet_name );
                                    echo '<i class="bi bi-file-earmark-arrow-down"></i></a>';
                                } else {
                                    echo '<p>' . esc_html__( 'No data sheet available for this product.', 'woocommerce' ) . '</p>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row related-products-container pt-4">
            <?php
                /**
                 * Hook: woocommerce_output_related_products_args
                 *
                 * Filter to modify related products arguments
                 */
                $related_products_args = apply_filters( 'woocommerce_output_related_products_args', array(
                    'posts_per_page' => 4,
                    'columns'        => 4,
                ) );

                $related_products = wc_get_related_products( $product->get_id(), $related_products_args['posts_per_page'] );

                if ( ! empty( $related_products ) ) {
                    // Start custom structure
                    ?>
            <div class="container">
                <div class="row text-left">
                    <h2><?php esc_html_e( 'You may also like…', 'woocommerce' ); ?></h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php
                    foreach ( $related_products as $related_product_id ) { ?>
                    <div class="col-md-3 col-12 mb-4">
                        <?php
                                            $post_object = get_post( $related_product_id );
                                            setup_postdata( $GLOBALS['post'] =& $post_object );
                                            wc_get_template_part( 'content', 'product' );
                                        ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <?php
                    wp_reset_postdata();
                }
            ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php do_action( 'woocommerce_after_single_product' ); ?>
    </div>
</div>
<?php