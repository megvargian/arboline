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
        <div class="row justify-content-center">
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
            <div class="col-md-5 col-12">
                <div class="summary entry-summary w-100">
                    <h1 class="product_title entry-title"><?php echo esc_html( $product->get_name() ); ?></h1>

                    <!-- Product Short Description below title -->
                    <?php
                    $short_description = $product->get_short_description();
                    if ( $short_description ) : ?>
                    <div class="woocommerce-product-details__short-description">
                        <?php echo wp_kses_post( $short_description ); ?>
                    </div>
                    <?php endif; ?>

                    <!-- Dynamic Price Display -->
                    <div class="price mb-3">
                        <?php echo $product->get_price_html(); ?>
                        <small class="woocommerce-price-suffix">INC. VAT</small>
                    </div>

                    <?php
                    $product_id = $product->get_id();

                    if ( $product->is_type( 'variable' ) ) {
                        $available_variations = $product->get_available_variations();
                        $attributes = $product->get_variation_attributes();

                        // Render all variation attributes as select dropdowns
                    ?>

                    <form class="custom-variations-form cart" method="post" enctype="multipart/form-data"
                        data-product_id="<?php echo esc_attr( $product_id ); ?>"
                        data-product_variations='<?php echo wp_json_encode( $available_variations ); ?>'>

                        <?php foreach ( $attributes as $attribute_name => $options ) :
                            $attr_label = wc_attribute_label( $attribute_name );
                            $sanitized_name = sanitize_title( $attribute_name );
                        ?>
                        <div class="custom-variation-selector mb-3">
                            <select id="attribute_<?php echo esc_attr( $sanitized_name ); ?>"
                                name="attribute_<?php echo esc_attr( $sanitized_name ); ?>" class="variation-dropdown">
                                <option value=""><?php echo esc_html( strtolower( $attr_label ) ); ?></option>
                                <?php foreach ( $options as $option ) : ?>
                                <option value="<?php echo esc_attr( $option ); ?>">
                                    <?php echo esc_html( $option ); ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <?php endforeach; ?>

                        <!-- Current Price Display -->
                        <div class="current-price mb-3">
                            <span class="price-amount"><?php echo $product->get_price_html(); ?></span>
                            <small class="woocommerce-price-suffix">INC. VAT</small>
                        </div>

                        <!-- Quantity and Add to Cart -->
                        <div class="woocommerce-variation-add-to-cart variations_button d-flex align-items-center"
                            style="display: flex !important;">
                            <button type="button" class="minus btn btn-outline-secondary">-</button>
                            <div class="quantity" style="margin: 0 !important; width: fit-content !important;">
                                <input type="number" class="qty form-control text-center" name="quantity" value="1"
                                    min="1" style="width: 80px;">
                            </div>
                            <button type="button" class="plus btn btn-outline-secondary">+</button>

                            <button type="submit"
                                class="single_add_to_cart_button btn btn-dark ms-3 mt-0 flex-grow-1 disabled" disabled
                                style="background-color: #6c757d; cursor: not-allowed; width: fit-content !important;">
                                ADD TO BASKET
                            </button>

                            <input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product_id ); ?>">
                            <input type="hidden" name="product_id" value="<?php echo esc_attr( $product_id ); ?>">
                            <input type="hidden" name="variation_id" class="variation_id" value="0">
                        </div>
                    </form>

                    <?php } else {
                        // Simple product
                    ?>

                    <form class="cart" method="post" enctype="multipart/form-data">
                        <!-- Current Price Display -->
                        <div class="current-price mb-3">
                            <span class="price-amount"><?php echo $product->get_price_html(); ?></span>
                            <small class="woocommerce-price-suffix">INC. VAT</small>
                        </div>

                        <!-- Quantity and Add to Cart -->
                        <div class="single-product-add-to-cart d-flex align-items-center">
                            <button type="button" class="minus btn btn-outline-secondary">-</button>
                            <div class="quantity mx-2">
                                <input type="number" class="qty form-control text-center" name="quantity" value="1"
                                    min="1" style="width: 80px;">
                            </div>
                            <button type="button" class="plus btn btn-outline-secondary">+</button>

                            <button type="submit" class="single_add_to_cart_button btn btn-dark ms-3 flex-grow-1">
                                ADD TO BASKET
                            </button>

                            <input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product_id ); ?>">
                        </div>
                    </form>

                    <?php } ?>

                    <!-- jQuery Logic -->
                    <script>
                    jQuery(document).ready(function($) {
                        const $form = $('.custom-variations-form.cart');
                        const $sizeSelector = $('#size_selector');
                        const $addToCartButton = $form.find('.single_add_to_cart_button');
                        const $variationIdInput = $form.find('input.variation_id');
                        const $quantityInput = $form.find('input.qty');
                        const $priceDisplay = $('.current-price .price-amount');

                        console.log('Variation form initialized');
                        console.log('Available variations:', $form.data('product_variations'));

                        // // Test AJAX connectivity
                        // $.ajax({
                        //     type: 'POST',
                        //     url: '<?php echo admin_url('admin-ajax.php'); ?>',
                        //     dataType: 'json',
                        //     data: {
                        //         action: 'test_ajax'
                        //     },
                        //     success: function(response) {
                        //         console.log('AJAX test successful:', response);
                        //     },
                        //     error: function(xhr, status, error) {
                        //         console.error('AJAX test failed:', {
                        //             status: status,
                        //             error: error,
                        //             responseText: xhr.responseText
                        //         });
                        //     }
                        // });


                        console.log('Variation form initialized');
                        console.log('Available variations:', $form.data('product_variations'));
                        // Handle attribute selection for all dropdowns
                        let selectedAttributes = {};
                        $('.variation-dropdown').on('change', function() {
                            let allSelected = true;

                            // Check all selects
                            $('.variation-dropdown').each(function() {
                                const val = $(this).val();
                                const name = $(this).attr('name');
                                if (!val) {
                                    allSelected = false;
                                } else {
                                    selectedAttributes[name] = val;
                                    console.log('Selected attribute:', name, val);
                                }
                            });

                            // Enable/disable button
                            if (allSelected) {
                                $addToCartButton.removeClass('disabled')
                                    .prop('disabled', false)
                                    .css('background-color', '#000')
                                    .css('cursor', 'pointer');
                            } else {
                                $addToCartButton.addClass('disabled')
                                    .prop('disabled', true)
                                    .css('background-color', '#6c757d')
                                    .css('cursor', 'not-allowed');
                            }
                        });

                        // ...removed duplicate form submit handler...

                        // Debug log selectedAttributes and variation.attributes
                        var productVariations = $form.data('product_variations');
                        console.log('selectedAttributes:', selectedAttributes);
                        if (productVariations) {
                            productVariations.forEach(function(variation) {
                                console.log('variation.attributes:', variation.attributes);
                            });
                        }
                        // Handle button click
                        $addToCartButton.on('click', function(e) {
                            e.preventDefault();
                            if (!$(this).hasClass('disabled') && !$(this).prop('disabled')) {
                                $form.submit();
                            }
                        });
                    });
                    </script>
                    <?php
                    $has_tint_attribute = false;
                    if ($product->is_type('variable')) {
                        $variation_attributes = $product->get_variation_attributes();
                        foreach ($variation_attributes as $attribute_name => $options) {
                            if (stripos($attribute_name, 'tint') !== false) {
                                $has_tint_attribute = true;
                                break;
                            }
                        }
                    }
                    ?>
                    <?php if ($has_tint_attribute) : ?>
                    <p class="finish-description mb-1">Click to preview tints</p>
                    <div class="row mx-0 tint-swatch-row">
                    <?php
                        $product_id = $product->get_id();
                        $variation_attributes = $product->get_variation_attributes();
                        foreach ($variation_attributes as $attribute_name => $options) {
                            if (stripos($attribute_name, 'tint') !== false) {
                                foreach ($options as $tint) {
                                    $field_id = 'tint_image_' . sanitize_title($tint);
                                    $image_id = get_post_meta($product_id, $field_id, true);
                                    $image_url = $image_id ? wp_get_attachment_url($image_id) : '';
                                    if ($image_url) {
                    ?>
                        <div class="col-1 ps-0 pe-1 pb-1 single-swatch">
                            <div class="tint-swatch-square">
                                <a href="<?php echo esc_url($image_url); ?>" class="glightbox" data-title="<?php echo esc_attr($tint); ?>">
                                    <img width="150" height="150" src="<?php echo esc_url($image_url); ?>" class="tint-swatch-img" alt="<?php echo esc_attr($tint); ?>" />
                                </a>
                            </div>
                        </div>
                    <?php
                                    }
                                }
                            }
                        }
                    ?>
                    </div>
                    <style>
                    .tint-swatch-row .single-swatch {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        height: 100px;
                    }
                    .tint-swatch-square {
                        width: 100px;
                        height: 100px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        background: #fff;
                        border: 1px solid #ddd;
                        border-radius: 8px;
                        overflow: hidden;
                        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
                        transition: box-shadow 0.2s;
                    }
                    .tint-swatch-square:hover {
                        box-shadow: 0 4px 16px rgba(0,0,0,0.12);
                    }
                    .tint-swatch-img {
                        width: 100px;
                        height: 100px;
                        object-fit: cover;
                        border-radius: 8px;
                        cursor: pointer;
                        transition: transform 0.2s;
                    }
                    .tint-swatch-img:hover {
                        transform: scale(1.05);
                    }
                    </style>
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
                .single-product .summary>.variations_form:not(.cart),
                .single-product .summary>form.cart:not(.custom-variations-form) {
                    display: none !important;
                }

                /* Ensure our custom form is visible */
                .summary .custom-variations-form.cart,
                .summary form.cart {
                    display: block !important;
                }

                /* Hide default table styling and replace with custom dropdown */
                .variations {
                    display: none !important;
                }

                /* Custom single variation dropdown styling */
                .custom-variation-selector {
                    margin-bottom: 20px;
                }

                .variation-dropdown {
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

                .variation-dropdown:focus {
                    outline: none;
                    border-color: #000;
                }

                .reset_variations {
                    display: none !important;
                }

                /* Price styling in variation area */
                .single_variation .price {
                    font-size: 2.25rem;
                    font-weight: 500;
                    color: #000;
                    margin-bottom: 15px;
                    display: block;
                }

                /* Quantity controls styling */
                .woocommerce-variation-add-to-cart {
                    gap: 0;
                    margin-top: 15px;
                }

                .minus,
                .plus {
                    background: white;
                    border: 1px solid #000;
                    border-radius: 0;
                    padding: 0;
                    font-size: 18px;
                    font-weight: bold;
                    cursor: pointer;
                    width: 50px;
                    height: 50px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .minus {
                    border-right: none;
                }

                .plus {
                    border-left: none;
                }

                .minus:focus,
                .plus:focus {
                    outline: none;
                    border-color: #000 !important;
                    box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.2);
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

                .single_add_to_cart_button:hover:not(:disabled):not(.disabled) {
                    background: #333;
                }

                .single_add_to_cart_button:disabled,
                .single_add_to_cart_button.disabled {
                    background: #6c757d !important;
                    cursor: not-allowed !important;
                    opacity: 0.7;
                }

                /* Hide WooCommerce default variation styling */
                .woocommerce-variation-add-to-cart-disabled .single_add_to_cart_button {
                    background: #6c757d;
                }

                .woocommerce-variation-add-to-cart-enabled .single_add_to_cart_button {
                    background: #000;
                }

                /* Simple product price styling */
                .product-price-display .price {
                    font-size: 18px;
                    font-weight: 600;
                    color: #000;
                    margin-bottom: 15px;
                }

                .product-price-display .price .woocommerce-Price-amount {
                    font-size: 18px;
                    font-weight: 600;
                }

                /* Hide any WooCommerce generated duplicate forms or elements */
                .single-product-summary .cart:not(.custom-variations-form),
                .woocommerce div.product form.cart:not(.custom-variations-form) {
                    display: none !important;
                }
                </style>

                <script>
                jQuery(document).ready(function($) {
                    // Helper function for price formatting
                    function wc_price_format(price) {
                        return '<?php echo get_woocommerce_currency_symbol(); ?>' + parseFloat(price).toFixed(
                        2);
                    }

                    // Remove any duplicate forms that might be generated by WooCommerce
                    $('.summary form.cart:not(.custom-variations-form)').remove();
                    $('.summary .variations_form:not(.cart)').remove();

                    // Quantity controls for both variable and simple products
                    $(document).on('click', '.minus', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        var $input = $(this).siblings('.quantity').find('.qty');
                        var currentVal = parseInt($input.val()) || 1;
                        if (currentVal > 1) {
                            $input.val(currentVal - 1).trigger('change');
                        }
                    });

                    $(document).on('click', '.plus', function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        var $input = $(this).siblings('.quantity').find('.qty');
                        var currentVal = parseInt($input.val()) || 1;
                        var maxVal = parseInt($input.attr('max')) || 999;
                        if (currentVal < maxVal) {
                            $input.val(currentVal + 1).trigger('change');
                        }
                    });

                    // Ensure quantity is never less than 1
                    $(document).on('change input', '.qty', function() {
                        var currentVal = parseInt($(this).val()) || 1;
                        if (currentVal < 1) {
                            $(this).val(1);
                        }
                    });

                    // Variable product functionality
                    if ($('.custom-variations-form').length) {
                        // Ensure only one variations form exists
                        if ($('.custom-variations-form').length > 1) {
                            $('.custom-variations-form').not(':first').remove();
                        }

                        // Handle custom variation dropdown selection for all attributes
                        $(document).on('change', '.variation-dropdown', function() {
                            var $form = $('.custom-variations-form');
                            var $button = $('.single_add_to_cart_button');
                            var allSelected = true;
                            var selectedAttributes = {};
                            $form.find('.variation-dropdown').each(function() {
                                var name = $(this).attr('name');
                                var value = $(this).val();
                                if (!value) {
                                    allSelected = false;
                                } else {
                                    // WooCommerce expects attribute keys like 'attribute_pa_color', not just 'attribute_color'
                                    // So we normalize the name to match variation.attributes keys
                                    selectedAttributes[name] = value;
                                }
                            });

                            // Find matching variation
                            var productVariations = $form.data('product_variations');
                            var foundVariationId = null;
                            var foundPriceHtml = null;
                            $.each(productVariations, function(i, variation) {
                                var match = true;
                                $.each(variation.attributes, function(attrName, attrValue) {
                                    // Normalize keys for comparison
                                    var selectedVal = selectedAttributes[attrName];
                                    if (typeof selectedVal === 'undefined' ||
                                        selectedVal != attrValue) {
                                        match = false;
                                        return false;
                                    }
                                });
                                if (match) {
                                    foundVariationId = variation.variation_id;
                                    foundPriceHtml = variation.price_html;
                                    return false;
                                }
                            });

                            if (allSelected && foundVariationId) {
                                $form.find('input[name="variation_id"]').val(foundVariationId);
                                if (foundPriceHtml) {
                                    $('.current-price .price-amount').html(foundPriceHtml);
                                }
                                $button.removeClass('disabled wc-variation-selection-needed')
                                    .prop('disabled', false)
                                    .css('background-color', '#000')
                                    .css('cursor', 'pointer');
                                $('.woocommerce-variation-add-to-cart')
                                    .removeClass('woocommerce-variation-add-to-cart-disabled')
                                    .addClass('woocommerce-variation-add-to-cart-enabled');
                                console.log('Button enabled, variation_id set to:', foundVariationId);
                            } else {
                                $form.find('input[name="variation_id"]').val('0');
                                $button.addClass('disabled wc-variation-selection-needed')
                                    .prop('disabled', true)
                                    .css('background-color', '#6c757d')
                                    .css('cursor', 'not-allowed');
                                $('.woocommerce-variation-add-to-cart')
                                    .removeClass('woocommerce-variation-add-to-cart-enabled')
                                    .addClass('woocommerce-variation-add-to-cart-disabled');
                                console.log('Button disabled, no valid variation selected');
                            }
                        });

                        // Legacy WooCommerce variation events (kept for compatibility)
                        $('.custom-variations-form').on('show_variation', function(event, variation) {
                            var $button = $('.single_add_to_cart_button');
                            $button.removeClass('disabled wc-variation-selection-needed')
                                .prop('disabled', false);

                            $('.woocommerce-variation-add-to-cart')
                                .removeClass('woocommerce-variation-add-to-cart-disabled')
                                .addClass('woocommerce-variation-add-to-cart-enabled');
                        });

                        $('.custom-variations-form').on('hide_variation', function() {
                            var $button = $('.single_add_to_cart_button');
                            $button.addClass('disabled wc-variation-selection-needed')
                                .prop('disabled', true);

                            $('.woocommerce-variation-add-to-cart')
                                .removeClass('woocommerce-variation-add-to-cart-enabled')
                                .addClass('woocommerce-variation-add-to-cart-disabled');
                        });

                        // Handle custom AJAX form submission
                        $('.custom-variations-form').on('submit', function(e) {
                            e.preventDefault();
                            var $form = $(this);
                            var $button = $('.single_add_to_cart_button');
                            var product_id = $form.find('input[name="product_id"]').val();
                            var variation_id = $form.find('input[name="variation_id"]').val();
                            var quantity = parseInt($form.find('input[name="quantity"]').val()) || 1;

                            // Show loading state
                            $button.prop('disabled', true).text('Adding...');

                            // AJAX request
                            $.ajax({
                                type: 'POST',
                                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                                dataType: 'json',
                                data: {
                                    action: 'custom_variable_add_to_cart',
                                    product_id: product_id,
                                    variation_id: variation_id,
                                    quantity: quantity,
                                    security: '<?php echo wp_create_nonce("add_to_cart_nonce"); ?>'
                                },
                                success: function(response) {
                                    const isSuccess = response.success ||
                                        (response.cart_hash && response.cart_hash.length >
                                            0) ||
                                        (response.data && response.data.success) ||
                                        (response.data && response.data.cart_hash);
                                    if (isSuccess) {
                                        window.location.href =
                                            '<?php echo wc_get_cart_url(); ?>';
                                    } else {
                                        var errorMessage = response.data && response.data
                                            .message ?
                                            response.data.message :
                                            'Failed to add product to cart';
                                        alert(errorMessage);
                                        $button.prop('disabled', false).text(
                                            'ADD TO BASKET');
                                    }
                                },
                                error: function(xhr, status, error) {
                                    alert('An error occurred. Please try again.');
                                    $button.prop('disabled', false).text('ADD TO BASKET');
                                }
                            });
                        });
                    }

                    // Simple product form submission
                    $('.cart:not(.custom-variations-form)').on('submit', function(e) {
                        e.preventDefault();

                        var $form = $(this);
                        var $button = $('.single_add_to_cart_button');
                        var product_id = $form.find(
                            'input[name="add-to-cart"], input[name="product_id"]').val();
                        var quantity = parseInt($form.find('input[name="quantity"]').val()) || 1;

                        // Ensure quantity is at least 1
                        if (quantity < 1) {
                            quantity = 1;
                            $form.find('input[name="quantity"]').val(1);
                        }

                        $button.prop('disabled', true).text('Adding...');

                        // AJAX request for simple products
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo admin_url('admin-ajax.php'); ?>',
                            dataType: 'json',
                            data: {
                                action: 'custom_simple_add_to_cart',
                                product_id: product_id,
                                quantity: quantity,
                                security: '<?php echo wp_create_nonce("add_to_cart_nonce"); ?>'
                            },
                            success: function(response) {
                                console.log('Simple product AJAX response:', response);

                                // Check multiple success indicators
                                const isSuccess = response.success ||
                                    (response.cart_hash && response.cart_hash.length > 0) ||
                                    (response.data && response.data.success) ||
                                    (response.data && response.data.cart_hash);

                                if (isSuccess) {
                                    console.log(
                                        'Product added to cart successfully! Redirecting...'
                                        );
                                    window.location.href =
                                        '<?php echo wc_get_cart_url(); ?>';
                                } else {
                                    const errorMessage = (response.data && response.data
                                            .message) ||
                                        response.message ||
                                        'Failed to add product to cart';
                                    alert(errorMessage);
                                    $button.prop('disabled', false).text('ADD TO BASKET');
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error('AJAX error:', {
                                    xhr: xhr,
                                    status: status,
                                    error: error,
                                    responseText: xhr.responseText
                                });
                                alert('An error occurred. Please try again.');
                                $button.prop('disabled', false).text('ADD TO BASKET');
                            }
                        });
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
                <p class="accordion-header mt-0" id="heading-description">
                    <button class="accordion-button" style="box-shadow: none !important;" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapse-description" aria-expanded="true"
                        aria-controls="collapse-description">
                        <?php echo esc_html( $product->get_name() ); ?>
                    </button>
                </p>
                <div id="collapse-description" class="accordion-collapse collapse show"
                    aria-labelledby="heading-description" data-bs-parent="#accordionExample-description">
                    <div class="accordion-body px-0">
                        <?php echo wp_kses_post( $long_description ); ?>
                    </div>
                </div>
            </div>
            <?php } ?>
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
                            $custom_fields = get_post_meta( $product->get_id(), '_custom_product_info', true );
                            $has_custom_fields = !empty($custom_fields) && is_array($custom_fields);
                        ?>
                        <?php if ($has_custom_fields) : ?>
                            <table class="woocommerce-product-attributes shop_attributes">
                                <tbody>
                                    <?php foreach ( $custom_fields as $field ) :
                                        if ( !empty( $field['label'] ) && !empty( $field['value'] ) ) : ?>
                                            <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--custom" style="display: table-row !important;">
                                                <th class="woocommerce-product-attributes-item__label">
                                                    <?php echo esc_html( $field['label'] ); ?>
                                                </th>
                                                <td class="woocommerce-product-attributes-item__value">
                                                    <?php echo esc_html( $field['value'] ); ?>
                                                </td>
                                            </tr>
                                    <?php endif;
                                    endforeach; ?>
                                </tbody>
                            </table>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Product Data Sheet Section -->
            <div class="accordion-item">
                <p class="accordion-header" id="headingDataSheets">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#DataSheetsCollapse" aria-expanded="false" aria-controls="DataSheetsCollapse">
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

                // Get current product categories
                $product_cats = wp_get_post_terms( $product->get_id(), 'product_cat', array('fields' => 'ids') );
                $related_query = new WP_Query( array(
                    'post_type' => 'product',
                    'posts_per_page' => $related_products_args['posts_per_page'],
                    'post__not_in' => array( $product->get_id() ),
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field'    => 'term_id',
                            'terms'    => $product_cats,
                        ),
                    ),
                ) );

                if ( $related_query->have_posts() ) {
                    ?>
        <div class="container">
            <div class="row text-left">
                <h2><?php esc_html_e( 'You may also like…', 'woocommerce' ); ?></h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php
                    while ( $related_query->have_posts() ) {
                        $related_query->the_post(); ?>
                <div class="col-md-3 col-12 mb-4">
                    <?php wc_get_template_part( 'content', 'product' ); ?>
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

<div class="container">
    <div class="row">
        <?php do_action( 'woocommerce_after_single_product' ); ?>
    </div>
</div>
<?php