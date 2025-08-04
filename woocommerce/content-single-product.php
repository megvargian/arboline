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

                    <p class="price"><?php echo $product->get_price_html(); ?></p>

                    <!-- Custom Add to Cart Form -->
                    <div class="custom-add-to-cart-section">
                        <?php if ( $product->is_type( 'variable' ) ) : ?>
                            <!-- Size Dropdown for Variable Products -->
                            <div class="size-selector mb-3">
                                <select id="product-size" class="form-select size-dropdown" name="attribute_pa_size">
                                    <option value="">Size</option>
                                    <?php
                                    $attributes = $product->get_variation_attributes();
                                    if ( isset( $attributes['pa_size'] ) ) {
                                        foreach ( $attributes['pa_size'] as $size ) {
                                            echo '<option value="' . esc_attr( $size ) . '">' . esc_html( $size ) . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                            <!-- Variable Price Display -->
                            <div class="variable-price mb-3">
                                <span id="selected-price" class="price-display"><?php echo $product->get_price_html(); ?></span>
                            </div>
                        <?php else : ?>
                            <!-- Simple Product Price -->
                            <div class="simple-price mb-3">
                                <span class="price-display"><?php echo $product->get_price_html(); ?></span>
                            </div>
                        <?php endif; ?>

                        <!-- Quantity and Add to Cart -->
                        <div class="quantity-and-cart d-flex align-items-stretch">
                            <!-- Quantity Controls -->
                            <div class="quantity-controls d-flex align-items-center">
                                <button type="button" class="quantity-btn minus-btn" data-action="minus">−</button>
                                <input type="number" id="product-quantity" class="quantity-input" value="1" min="1" max="999">
                                <button type="button" class="quantity-btn plus-btn" data-action="plus">+</button>
                            </div>

                            <!-- Add to Cart Button -->
                            <button type="button" id="custom-add-to-cart" class="add-to-cart-btn" data-product-id="<?php echo esc_attr( $product->get_id() ); ?>">
                                ADD TO BASKET
                            </button>
                        </div>

                        <!-- Loading and Messages -->
                        <div id="cart-messages" class="cart-messages mt-2"></div>
                    </div>

                    <style>
                    .custom-add-to-cart-section {
                        margin: 20px 0;
                    }

                    .size-dropdown {
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

                    .size-dropdown:focus {
                        outline: none;
                        border-color: #000;
                    }

                    .price-display {
                        font-size: 18px;
                        font-weight: 600;
                        color: #000;
                    }

                    .quantity-and-cart {
                        gap: 0;
                        height: 50px;
                    }

                    .quantity-controls {
                        border: 1px solid #000;
                        border-radius: 0;
                        display: flex;
                        align-items: stretch;
                        height: 50px;
                    }

                    .quantity-btn {
                        background: white;
                        border: none;
                        border-right: 1px solid #000;
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

                    .quantity-btn:last-child {
                        border-right: none;
                    }

                    .quantity-btn:hover {
                        background: #f5f5f5;
                    }

                    .quantity-input {
                        border: none;
                        border-right: 1px solid #000;
                        text-align: center;
                        padding: 0;
                        width: 80px;
                        font-size: 16px;
                        background: white;
                        height: 50px;
                        margin: 0;
                    }

                    .quantity-input:focus {
                        outline: none;
                    }

                    .add-to-cart-btn {
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

                    .add-to-cart-btn:hover {
                        background: #333;
                    }

                    .add-to-cart-btn:disabled {
                        background: #6c757d;
                        cursor: not-allowed;
                    }

                    .cart-messages {
                        font-size: 14px;
                    }

                    .cart-messages.success {
                        color: #28a745;
                    }

                    .cart-messages.error {
                        color: #dc3545;
                    }

                    /* Remove default price styling from above */
                    .summary .price {
                        display: none;
                    }
                    </style>

                    <script>
                    jQuery(document).ready(function($) {
                        // Variable product price update
                        <?php if ( $product->is_type( 'variable' ) ) : ?>
                        var variations = <?php echo json_encode( $product->get_available_variations() ); ?>;

                        $('#product-size').on('change', function() {
                            var selectedSize = $(this).val();
                            var $priceDisplay = $('#selected-price');

                            if (selectedSize) {
                                // Find matching variation
                                var matchingVariation = variations.find(function(variation) {
                                    return variation.attributes.attribute_pa_size === selectedSize;
                                });

                                if (matchingVariation) {
                                    $priceDisplay.html(matchingVariation.price_html);
                                } else {
                                    $priceDisplay.html('<?php echo $product->get_price_html(); ?>');
                                }
                            } else {
                                $priceDisplay.html('<?php echo $product->get_price_html(); ?>');
                            }
                        });
                        <?php endif; ?>

                        // Quantity controls
                        $('.quantity-btn').on('click', function() {
                            var $input = $('#product-quantity');
                            var currentVal = parseInt($input.val()) || 1;
                            var action = $(this).data('action');

                            if (action === 'plus') {
                                $input.val(currentVal + 1);
                            } else if (action === 'minus' && currentVal > 1) {
                                $input.val(currentVal - 1);
                            }
                        });

                        // Add to cart functionality
                        $('#custom-add-to-cart').on('click', function() {
                            var $button = $(this);
                            var $messages = $('#cart-messages');
                            var productId = $button.data('product-id');
                            var quantity = $('#product-quantity').val();
                            var size = $('#product-size').val();

                            // Validate size selection for variable products
                            if ($('#product-size').length && !size) {
                                $messages.html('<span class="error">Please select a size</span>');
                                return;
                            }

                            // Disable button and show loading
                            $button.prop('disabled', true).text('ADDING...');
                            $messages.html('');

                            // Prepare data
                            var data = {
                                action: 'custom_add_to_cart',
                                product_id: productId,
                                quantity: quantity,
                                security: '<?php echo wp_create_nonce("add_to_cart_nonce"); ?>'
                            };

                            if (size) {
                                data.attribute_pa_size = size;
                            }

                            // AJAX call
                            $.ajax({
                                url: '<?php echo admin_url("admin-ajax.php"); ?>',
                                type: 'POST',
                                data: data,
                                success: function(response) {
                                    if (response.success) {
                                        $messages.html('<span class="success">Product added to cart!</span>');
                                        // Update cart count if you have one
                                        $('.cart-count').text(response.data.cart_count);
                                    } else {
                                        $messages.html('<span class="error">' + response.data.message + '</span>');
                                    }
                                },
                                error: function() {
                                    $messages.html('<span class="error">Error adding product to cart</span>');
                                },
                                complete: function() {
                                    $button.prop('disabled', false).text('ADD TO BASKET');
                                }
                            });
                        });
                    });
                    </script>

                    <?php
                    /**
                     * Hook: woocommerce_template_single_meta.
                     *
                     * @hooked woocommerce_template_single_meta - 40
                     */
                    do_action( 'woocommerce_template_single_meta' );
                    ?>
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
                            <button class="accordion-button collapsed" style="box-shadow: none !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-description" aria-expanded="false" aria-controls="collapse-description">
                                <?php echo esc_html( $product->get_name() ); ?>
                            </button>
                        </h2>
                        <div id="collapse-description" class="accordion-collapse collapse" aria-labelledby="heading-description" data-bs-parent="#accordionExample-description">
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