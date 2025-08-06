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
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?> class="px-0 single-product">
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

                <!-- Product Description will be moved to right column -->
            </div>

            <div class="col-md-7 col-12">
                <div class="summary entry-summary w-100">
                    <h1 class="product_title entry-title"><?php echo esc_html( $product->get_name() ); ?></h1>

                    <!-- Product Short Description below title -->
                    <?php
                    $short_description = $product->get_short_description();
                    if ( $short_description ) : ?>
                    <div class="woocommerce-product-details__short-description mt-3 mb-4">
                        <?php echo wp_kses_post( $short_description ); ?>
                    </div>
                    <?php endif; ?>

                    <?php if ( $product->is_type( 'variable' ) ) : ?>
                        <!-- Variable Product Form -->
                        <form class="variations_form cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post"
                        enctype="multipart/form-data" data-product_id="<?php echo absint( $product->get_id() ); ?>"
                        data-product_variations="<?php echo htmlspecialchars( wp_json_encode( $product->get_available_variations() ) ); ?>">

                            <?php if ( ! empty( $product->get_variation_attributes() ) ) : ?>
                                <table class="variations" cellspacing="0" role="presentation">
                                    <tbody>
                                        <?php foreach ( $product->get_variation_attributes() as $attribute_name => $options ) : ?>
                                            <tr>
                                                <th class="label">
                                                    <label for="<?php echo esc_attr( sanitize_title( $attribute_name ) ); ?>">
                                                        <?php echo wc_attribute_label( $attribute_name ); ?>
                                                    </label>
                                                </th>
                                                <td class="value">
                                                    <?php
                                                    wc_dropdown_variation_attribute_options(
                                                        array(
                                                            'options'   => $options,
                                                            'attribute' => $attribute_name,
                                                            'product'   => $product,
                                                            'class'     => 'form-select',
                                                        )
                                                    );
                                                    ?>
                                                    <a class="reset_variations" href="#" style="visibility: hidden;"><?php esc_html_e( 'Clear', 'woocommerce' ); ?></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            <?php endif; ?>

                            <div class="single_variation_wrap">
                                <div class="woocommerce-variation single_variation"></div>
                                <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">

                                    <!-- Quantity Controls -->
                                    <div class="quantity-controls-wrapper d-flex align-items-center">
                                        <button type="button" class="quantity-minus btn"><i class="bi bi-dash-lg"></i></button>
                                        <div class="quantity">
                                            <?php
                                            woocommerce_quantity_input(
                                                array(
                                                    'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
                                                    'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
                                                    'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
                                                    'classes'     => array( 'input-text', 'qty', 'text' ),
                                                )
                                            );
                                            ?>
                                        </div>
                                        <button type="button" class="quantity-plus btn"><i class="bi bi-plus-lg"></i></button>

                                        <button type="submit" class="single_add_to_cart_button button alt wp-element-button disabled wc-variation-selection-needed">
                                            <?php echo esc_html( $product->single_add_to_cart_text() ); ?>
                                        </button>
                                    </div>

                                    <input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>">
                                    <input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>">
                                    <input type="hidden" name="variation_id" class="variation_id" value="0">
                                </div>
                            </div>

                        </form>
                    <?php else : ?>
                        <!-- Simple Product Form -->
                        <form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>

                            <!-- Price Display -->
                            <div class="price-display mb-3">
                                <span class="price"><?php echo $product->get_price_html(); ?></span>
                            </div>

                            <!-- Quantity and Add to Cart -->
                            <div class="quantity-controls-wrapper d-flex align-items-center">
                                <button type="button" class="quantity-minus btn"><i class="bi bi-dash-lg"></i></button>
                                <div class="quantity">
                                    <?php
                                    woocommerce_quantity_input(
                                        array(
                                            'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
                                            'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
                                            'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(),
                                            'classes'     => array( 'input-text', 'qty', 'text' ),
                                        )
                                    );
                                    ?>
                                </div>
                                <button type="button" class="quantity-plus btn"><i class="bi bi-plus-lg"></i></button>

                                <button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt wp-element-button">
                                    <?php echo esc_html( $product->single_add_to_cart_text() ); ?>
                                </button>
                            </div>

                        </form>
                    <?php endif; ?>

                    <?php
                    /**
                     * Hook: woocommerce_template_single_meta.
                     *
                     * @hooked woocommerce_template_single_meta - 40
                     */
                    do_action( 'woocommerce_template_single_meta' );
                    ?>
                </div>

                <!-- Custom Styling and JavaScript -->
                <style>
                /* Hide any duplicate WooCommerce elements */
                .woocommerce-product-attributes-item,
                .product-addons-wrap,
                .single-product .summary > .variations_form:not(.cart),
                .single-product .summary > form.cart:not(.variations_form) {
                    display: none !important;
                }

                /* Ensure our custom form is visible */
                .summary .variations_form.cart,
                .summary form.cart {
                    display: block !important;
                }

                /* Hide default table styling and replace with custom dropdown */
                .variations {
                    border: none;
                    margin-bottom: 20px;
                }

                .variations th,
                .variations td {
                    border: none;
                    padding: 0;
                    margin: 0;
                }

                .variations th {
                    display: none; /* Hide the label */
                }

                .variations td {
                    width: 100%;
                }

                .variations select {
                    width: 100%;
                    padding: 15px 20px;
                    border: 1px solid #000;
                    border-radius: 0;
                    background: white;
                    font-size: 16px;
                    color: #333;
                    appearance: none;
                    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%23000' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
                    background-position: right 15px center;
                    background-repeat: no-repeat;
                    background-size: 16px;
                    height: 50px;
                }

                .variations select:focus {
                    outline: none;
                    border-color: #000;
                }

                .reset_variations {
                    display: none !important;
                }

                /* Price styling in variation area */
                .single_variation .price {
                    font-size: 18px;
                    font-weight: 600;
                    color: #000;
                    margin-bottom: 15px;
                    display: block;
                }

                /* Quantity controls styling */
                .quantity-controls-wrapper {
                    gap: 0;
                    margin-top: 15px;
                }

                .quantity-minus,
                .quantity-plus {
                    background: white;
                    border: 1px solid #000;
                    border-radius: 0;
                    padding: 0;
                    font-size: 18px;
                    font-weight: bold;
                    cursor: pointer;
                    transition: background 0.3s;
                    width: 50px;
                    height: 50px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .quantity-minus {
                    border-right: none;
                }

                .quantity-plus {
                    border-left: none;
                }

                .quantity-minus:hover,
                .quantity-plus:hover {
                    background: #f5f5f5;
                }

                .quantity {
                    margin: 0;
                }

                .quantity .qty {
                    border: 1px solid #000;
                    border-left: none;
                    border-right: none;
                    border-radius: 0;
                    text-align: center;
                    padding: 0;
                    width: 80px;
                    font-size: 16px;
                    background: white;
                    height: 50px;
                    margin: 0;
                }

                .quantity .qty:focus {
                    outline: none;
                }

                .single_add_to_cart_button {
                    background: #000;
                    color: white;
                    border: none;
                    padding: 0 30px;
                    font-size: 16px;
                    font-weight: 600;
                    text-transform: uppercase;
                    border-radius: 0;
                    cursor: pointer;
                    transition: background 0.3s;
                    flex-grow: 1;
                    height: 50px;
                    margin-left: 15px;
                }

                .single_add_to_cart_button:hover {
                    background: #333;
                }

                .single_add_to_cart_button:disabled,
                .single_add_to_cart_button.disabled {
                    background: #6c757d;
                    cursor: not-allowed;
                }

                /* Hide WooCommerce default variation styling */
                .woocommerce-variation-add-to-cart-disabled .single_add_to_cart_button {
                    background: #6c757d;
                }

                .woocommerce-variation-add-to-cart-enabled .single_add_to_cart_button {
                    background: #000;
                }

                /* Simple product price styling */
                .price-display .price {
                    font-size: 18px;
                    font-weight: 600;
                    color: #000;
                }

                /* Hide any WooCommerce generated duplicate forms or elements */
                .single-product-summary .cart:not(.variations_form),
                .woocommerce div.product form.cart:not(.variations_form),
                .summary .price {
                    display: none !important;
                }
                </style>

                <script>
                jQuery(document).ready(function($) {
                    // Remove any duplicate forms that might be generated by WooCommerce
                    $('.summary form.cart:not(.variations_form)').remove();
                    $('.summary .variations_form:not(.cart)').remove();

                    // Quantity controls for both variable and simple products
                    $(document).on('click', '.quantity-minus', function(e) {
                        e.preventDefault();
                        var $input = $(this).siblings('.quantity').find('.qty');
                        var currentVal = parseInt($input.val()) || 1;
                        if (currentVal > 1) {
                            $input.val(currentVal - 1).trigger('change');
                        }
                    });

                    $(document).on('click', '.quantity-plus', function(e) {
                        e.preventDefault();
                        var $input = $(this).siblings('.quantity').find('.qty');
                        var currentVal = parseInt($input.val()) || 1;
                        var maxVal = parseInt($input.attr('max')) || 999;
                        if (currentVal < maxVal) {
                            $input.val(currentVal + 1).trigger('change');
                        }
                    });

                    // Variable product functionality
                    if ($('.variations_form').length) {
                        // Ensure only one variations form exists
                        if ($('.variations_form').length > 1) {
                            $('.variations_form').not(':first').remove();
                        }

                        // Initialize WooCommerce variations
                        $('.variations_form').wc_variation_form();

                        // Handle variation changes
                        $('.variations_form').on('show_variation', function(event, variation) {
                            // Update the add to cart button
                            var $button = $('.single_add_to_cart_button');
                            $button.removeClass('disabled wc-variation-selection-needed')
                                   .prop('disabled', false);

                            $('.woocommerce-variation-add-to-cart')
                                .removeClass('woocommerce-variation-add-to-cart-disabled')
                                .addClass('woocommerce-variation-add-to-cart-enabled');
                        });

                        $('.variations_form').on('hide_variation', function() {
                            var $button = $('.single_add_to_cart_button');
                            $button.addClass('disabled wc-variation-selection-needed')
                                   .prop('disabled', true);

                            $('.woocommerce-variation-add-to-cart')
                                .removeClass('woocommerce-variation-add-to-cart-enabled')
                                .addClass('woocommerce-variation-add-to-cart-disabled');
                        });

                        // Handle form submission
                        $('.variations_form').on('submit', function(e) {
                            var $form = $(this);
                            var $button = $('.single_add_to_cart_button');

                            // Check if variation is selected
                            var variationSelected = true;
                            $form.find('select[name^="attribute"]').each(function() {
                                if ($(this).val() === '') {
                                    variationSelected = false;
                                    return false;
                                }
                            });

                            if (!variationSelected) {
                                e.preventDefault();
                                alert('Please select product options before adding to cart.');
                                return false;
                            }

                            // Show loading state
                            $button.prop('disabled', true).text('Adding...');
                        });
                    }

                    // Simple product form submission
                    $('.cart:not(.variations_form)').on('submit', function() {
                        var $button = $('.single_add_to_cart_button');
                        $button.prop('disabled', true).text('Adding...');
                    });
                });
                </script>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="accordion mb-5" id="accordionProduct">
                <?php
                    $long_description = $product->get_description();
                    if($long_description){
                ?>
                <div class="accordion-item">
                    <h2 class="accordion-header mt-0" id="heading-description">
                        <button class="accordion-button" style="box-shadow: none !important;" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapse-description" aria-expanded="false"
                            aria-controls="collapse-description">
                            <?php echo esc_html( $product->get_name() ); ?>
                        </button>
                    </h2>
                    <div id="collapse-description" class="accordion-collapse collapse show"
                        aria-labelledby="heading-description" data-bs-parent="#accordionExample-description">
                        <div class="accordion-body px-0">
                            <?php echo wp_kses_post( $long_description ); ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
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
                                    <tr
                                        class="woocommerce-product-attributes-item woocommerce-product-attributes-item--weight">
                                        <th class="woocommerce-product-attributes-item__label">
                                            <?php esc_html_e( 'Weight', 'woocommerce' ); ?></th>
                                        <td class="woocommerce-product-attributes-item__value">
                                            <?php echo esc_html( wc_format_weight( $product->get_weight() ) ); ?></td>
                                    </tr>
                                    <?php endif; ?>

                                    <?php
                                    // Add dimensions if they exist
                                    if ( $product->has_dimensions() ) : ?>
                                    <tr
                                        class="woocommerce-product-attributes-item woocommerce-product-attributes-item--dimensions">
                                        <th class="woocommerce-product-attributes-item__label">
                                            <?php esc_html_e( 'Dimensions', 'woocommerce' ); ?></th>
                                        <td class="woocommerce-product-attributes-item__value">
                                            <?php echo esc_html( wc_format_dimensions( $product->get_dimensions( false ) ) ); ?>
                                        </td>
                                    </tr>
                                    <?php endif; ?>

                                    <?php foreach ( $attributes as $attribute ) :
                                        $attribute_label = wc_attribute_label( $attribute->get_name() );
                                        $attribute_value = $product->get_attribute( $attribute->get_name() );

                                        if ( empty( $attribute_value ) ) {
                                            continue;
                                        }
                                        ?>
                                    <tr
                                        class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_<?php echo esc_attr( $attribute->get_name() ); ?>">
                                        <th class="woocommerce-product-attributes-item__label">
                                            <?php echo esc_html( $attribute_label ); ?></th>
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