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

                        // Find size attribute
                        $size_attribute_name = '';
                        $size_options = array();

                        foreach ( $attributes as $attribute_name => $options ) {
                            $attr_label = wc_attribute_label( $attribute_name );
                            error_log( "Checking attribute: " . $attribute_name . " with label: " . $attr_label );

                            if ( stripos( $attr_label, 'size' ) !== false ||
                                 stripos( $attribute_name, 'size' ) !== false ||
                                 stripos( $attribute_name, 'pa_size' ) !== false ) {
                                $size_attribute_name = $attribute_name;
                                $size_options = $options;
                                error_log( "Found size attribute: " . $size_attribute_name . " with options: " . print_r( $size_options, true ) );
                                break;
                            }
                        }

                        // If no size attribute found, try first attribute
                        if ( empty( $size_attribute_name ) && ! empty( $attributes ) ) {
                            $size_attribute_name = array_keys( $attributes )[0];
                            $size_options = array_values( $attributes )[0];
                            error_log( "Using first attribute as size: " . $size_attribute_name );
                        }

                        error_log( "Available variations: " . print_r( $available_variations, true ) );
                    ?>

                    <form class="variations_form cart" method="post" enctype="multipart/form-data"
                          data-product_id="<?php echo esc_attr( $product_id ); ?>"
                          data-product_variations='<?php echo wp_json_encode( $available_variations ); ?>'>

                        <?php if ( ! empty( $size_options ) ) : ?>
                        <!-- Size Selection Dropdown -->
                        <div class="custom-variation-selector mb-3">
                            <select id="size_selector" name="attribute_<?php echo esc_attr( sanitize_title( $size_attribute_name ) ); ?>"
                                    class="variation-dropdown">
                                <option value="">Choose a size</option>
                                <?php
                                foreach ( $available_variations as $variation ) {
                                    $variation_obj = new WC_Product_Variation( $variation['variation_id'] );
                                    $variation_attributes = $variation['attributes'];
                                    $variation_price = $variation_obj->get_price();
                                    $formatted_price = wc_price( $variation_price );

                                    // Get the size value for this variation
                                    $size_value = '';
                                    foreach ( $variation_attributes as $attr_key => $attr_value ) {
                                        if ( strpos( $attr_key, 'size' ) !== false || $attr_key === $size_attribute_name ) {
                                            $size_value = $attr_value;
                                            break;
                                        }
                                    }

                                    if ( $size_value ) {
                                        echo '<option value="' . esc_attr( $size_value ) . '"
                                                     data-variation-id="' . esc_attr( $variation['variation_id'] ) . '"
                                                     data-price="' . esc_attr( $variation_price ) . '"
                                                     data-price-html="' . esc_attr( $formatted_price ) . '">';
                                        echo esc_html( $size_value ) . ' - ' . $formatted_price;
                                        echo '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <?php endif; ?>

                        <!-- Current Price Display -->
                        <div class="current-price mb-3">
                            <span class="price-amount"><?php echo $product->get_price_html(); ?></span>
                            <small class="woocommerce-price-suffix">INC. VAT</small>
                        </div>

                        <!-- Quantity and Add to Cart -->
                        <div class="woocommerce-variation-add-to-cart variations_button d-flex align-items-center" style="display: flex !important;">
                            <button type="button" class="minus btn btn-outline-secondary">-</button>
                            <div class="quantity" style="margin: 0 !important; width: fit-content !important;">
                                <input type="number" class="qty form-control text-center" name="quantity" value="1" min="1" style="width: 80px;">
                            </div>
                            <button type="button" class="plus btn btn-outline-secondary">+</button>

                            <button type="submit" class="single_add_to_cart_button btn btn-dark ms-3 mt-0 flex-grow-1 disabled"
                                    disabled style="background-color: #6c757d; cursor: not-allowed; width: fit-content !important;">
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
                                <input type="number" class="qty form-control text-center" name="quantity" value="1" min="1" style="width: 80px;">
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
                        const $form = $('.variations_form.cart');
                        const $sizeSelector = $('#size_selector');
                        const $addToCartButton = $form.find('.single_add_to_cart_button');
                        const $variationIdInput = $form.find('input.variation_id');
                        const $quantityInput = $form.find('input.qty');
                        const $priceDisplay = $('.current-price .price-amount');

                        console.log('Variation form initialized');
                        console.log('Available variations:', $form.data('product_variations'));

                        // Test AJAX connectivity
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo admin_url('admin-ajax.php'); ?>',
                            dataType: 'json',
                            data: {
                                action: 'test_ajax'
                            },
                            success: function(response) {
                                console.log('AJAX test successful:', response);
                            },
                            error: function(xhr, status, error) {
                                console.error('AJAX test failed:', {
                                    status: status,
                                    error: error,
                                    responseText: xhr.responseText
                                });
                            }
                        });

                        // Handle size selection
                        $sizeSelector.on('change', function() {
                            const selectedOption = $(this).find('option:selected');
                            const selectedValue = selectedOption.val();
                            const variationId = selectedOption.data('variation-id');
                            const priceHtml = selectedOption.data('price-html');

                            console.log('Size selected:', {
                                value: selectedValue,
                                variationId: variationId,
                                priceHtml: priceHtml
                            });

                            if (selectedValue && variationId) {
                                // Set variation ID
                                $variationIdInput.val(variationId);

                                // Update price display
                                if (priceHtml) {
                                    $priceDisplay.html(priceHtml);
                                }

                                // Enable add to cart button
                                $addToCartButton.removeClass('disabled')
                                                .prop('disabled', false)
                                                .css('background-color', '#000')
                                                .css('cursor', 'pointer');

                                console.log('Button enabled, variation ID set to:', variationId);
                            } else {
                                // Reset form
                                $variationIdInput.val('0');

                                // Disable add to cart button
                                $addToCartButton.addClass('disabled')
                                                .prop('disabled', true)
                                                .css('background-color', '#6c757d')
                                                .css('cursor', 'not-allowed');

                                console.log('Button disabled, no valid variation selected');
                            }
                        });

                        // + and - buttons
                        $form.find('.plus').click(function(e) {
                            e.preventDefault();
                            const val = parseInt($quantityInput.val()) || 1;
                            $quantityInput.val(val + 1);
                        });

                        $form.find('.minus').click(function(e) {
                            e.preventDefault();
                            const val = parseInt($quantityInput.val()) || 1;
                            if (val > 1) $quantityInput.val(val - 1);
                        });

                        // Form submission
                        $form.on('submit', function(e) {
                            e.preventDefault();

                            const variationId = $variationIdInput.val();
                            const quantity = parseInt($quantityInput.val()) || 1;

                            console.log('Form submission:', {
                                variationId: variationId,
                                quantity: quantity
                            });

                            if (!variationId || variationId === '0') {
                                alert('Please select a size before adding to cart.');
                                return false;
                            }

                            if (quantity < 1) {
                                alert('Please enter a valid quantity.');
                                return false;
                            }

                            // Show loading state
                            $addToCartButton.text('Adding...').prop('disabled', true);

                            // AJAX submission
                            $.ajax({
                                type: 'POST',
                                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                                data: {
                                    action: 'custom_variable_add_to_cart',
                                    product_id: '<?php echo $product_id; ?>',
                                    variation_id: variationId,
                                    quantity: quantity,
                                    security: '<?php echo wp_create_nonce("add_to_cart_nonce"); ?>'
                                },
                                success: function(response) {
                                    console.log('AJAX response:', response);
                                    if (response.success) {
                                        window.location.href = '<?php echo wc_get_cart_url(); ?>';
                                    } else {
                                        alert('Error adding product to cart: ' + (response.data.message || 'Unknown error'));
                                        $addToCartButton.text('ADD TO BASKET').prop('disabled', false);
                                    }
                                },
                                error: function(xhr, status, error) {
                                    console.error('AJAX error:', error);
                                    alert('Error adding product to cart. Please try again.');
                                    $addToCartButton.text('ADD TO BASKET').prop('disabled', false);
                                }
                            });
                        });

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
                .single-product .summary>form.cart:not(.variations_form) {
                    display: none !important;
                }

                /* Ensure our custom form is visible */
                .summary .variations_form.cart,
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
                    transition: background 0.3s;
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

                .minus:hover,
                .plus:hover {
                    background: #f5f5f5;
                    border-color: #000 !important;
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
                .single-product-summary .cart:not(.variations_form),
                .woocommerce div.product form.cart:not(.variations_form) {
                    display: none !important;
                }
                </style>

                <script>
                jQuery(document).ready(function($) {
                    // Helper function for price formatting
                    function wc_price_format(price) {
                        return '<?php echo get_woocommerce_currency_symbol(); ?>' + parseFloat(price).toFixed(2);
                    }

                    // Remove any duplicate forms that might be generated by WooCommerce
                    $('.summary form.cart:not(.variations_form)').remove();
                    $('.summary .variations_form:not(.cart)').remove();

                    // Quantity controls for both variable and simple products
                    $(document).on('click', '.minus', function(e) {
                        e.preventDefault();
                        var $input = $(this).siblings('.quantity').find('.qty');
                        var currentVal = parseInt($input.val()) || 1;
                        if (currentVal > 1) {
                            $input.val(currentVal - 1).trigger('change');
                        }
                    });

                    $(document).on('click', '.plus', function(e) {
                        e.preventDefault();
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
                    if ($('.variations_form').length) {
                        // Ensure only one variations form exists
                        if ($('.variations_form').length > 1) {
                            $('.variations_form').not(':first').remove();
                        }

                        // Handle custom variation dropdown selection
                        $(document).on('change', '#size_selector', function() {
                            var $form = $('.variations_form');
                            var $button = $('.single_add_to_cart_button');
                            var selectedOption = $(this).find('option:selected');
                            var variation_id = selectedOption.data('variation-id');
                            var attributes = selectedOption.data('attributes');
                            var price = selectedOption.data('price');
                            var priceHtml = selectedOption.data('price-html');
                            var size = selectedOption.val();

                            console.log('Variation selected:', {
                                variation_id: variation_id,
                                attributes: attributes,
                                price: price,
                                priceHtml: priceHtml,
                                size: size
                            });

                            if (size && variation_id) {
                                // Set the variation ID
                                $form.find('input[name="variation_id"]').val(variation_id);

                                // Update price display if exists
                                if (priceHtml) {
                                    $('.current-price .price-amount').html(priceHtml);
                                }

                                // Enable the add to cart button
                                $button.removeClass('disabled wc-variation-selection-needed')
                                    .prop('disabled', false)
                                    .css('background-color', '#000')
                                    .css('cursor', 'pointer');

                                $('.woocommerce-variation-add-to-cart')
                                    .removeClass('woocommerce-variation-add-to-cart-disabled')
                                    .addClass('woocommerce-variation-add-to-cart-enabled');

                                console.log('Button enabled, variation_id set to:', variation_id);
                            } else {
                                // Reset form when no variation selected
                                $form.find('input[name="variation_id"]').val('0');

                                // Disable the add to cart button
                                $button.addClass('disabled wc-variation-selection-needed')
                                    .prop('disabled', true)
                                    .css('background-color', '#6c757d')
                                    .css('cursor', 'not-allowed');

                                $('.woocommerce-variation-add-to-cart')
                                    .removeClass('woocommerce-variation-add-to-cart-enabled')
                                    .addClass('woocommerce-variation-add-to-cart-disabled');

                                console.log('Button disabled, no variation selected');
                            }
                        });

                        // Legacy WooCommerce variation events (kept for compatibility)
                        $('.variations_form').on('show_variation', function(event, variation) {
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

                        // Handle custom AJAX form submission
                        $('.variations_form').on('submit', function(e) {
                            e.preventDefault();

                            var $form = $(this);
                            var $button = $('.single_add_to_cart_button');
                            var product_id = $form.find('input[name="product_id"]').val();
                            var variation_id = $form.find('input[name="variation_id"]').val();
                            var quantity = parseInt($form.find('input[name="quantity"]').val()) || 1;

                            console.log('Form submission started:', {
                                product_id: product_id,
                                variation_id: variation_id,
                                quantity: quantity,
                                ajax_url: '<?php echo admin_url('admin-ajax.php'); ?>',
                                nonce: '<?php echo wp_create_nonce("add_to_cart_nonce"); ?>'
                            });

                            // Ensure quantity is at least 1
                            if (quantity < 1) {
                                quantity = 1;
                                $form.find('input[name="quantity"]').val(1);
                            }

                            // Check if variation is selected
                            if (!variation_id || variation_id === '0') {
                                alert('Please select a size before adding to cart.');
                                return false;
                            }

                            // Get selected variation attributes
                            var selectedVariation = {};
                            $form.find('.variation_attribute').each(function() {
                                var attrName = $(this).attr('name');
                                var attrValue = $(this).val();
                                if (attrValue) {
                                    selectedVariation[attrName] = attrValue;
                                }
                            });

                            console.log('Selected variation attributes:', selectedVariation);

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
                                    console.log('AJAX response:', response);
                                    if (response.success) {
                                        // Redirect to cart page
                                        window.location.href = '<?php echo wc_get_cart_url(); ?>';
                                    } else {
                                        var errorMessage = response.data && response.data.message ?
                                            response.data.message : 'Failed to add product to cart';
                                        console.error('Add to cart failed:', errorMessage);
                                        alert(errorMessage);
                                        $button.prop('disabled', false).text('ADD TO BASKET');
                                    }
                                },
                                error: function(xhr, status, error) {
                                    console.error('AJAX error details:', {
                                        xhr: xhr,
                                        status: status,
                                        error: error,
                                        responseText: xhr.responseText
                                    });

                                    // Try to parse the response to see if it's an error page
                                    var errorMessage = 'An error occurred. Please try again.';
                                    if (xhr.responseText) {
                                        if (xhr.responseText.indexOf('Fatal error') !== -1) {
                                            errorMessage = 'Server error detected. Please check the error logs.';
                                        } else if (xhr.responseText.indexOf('404') !== -1) {
                                            errorMessage = 'AJAX endpoint not found. Please check the configuration.';
                                        }
                                    }

                                    // Fallback: try traditional form submission
                                    console.log('AJAX failed, trying fallback method...');
                                    var fallbackUrl = '<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>';
                                    var fallbackForm = $('<form>', {
                                        'method': 'POST',
                                        'action': fallbackUrl
                                    }).append($('<input>', {
                                        'type': 'hidden',
                                        'name': 'add-to-cart',
                                        'value': product_id
                                    })).append($('<input>', {
                                        'type': 'hidden',
                                        'name': 'variation_id',
                                        'value': variation_id
                                    })).append($('<input>', {
                                        'type': 'hidden',
                                        'name': 'quantity',
                                        'value': quantity
                                    }));

                                    $('body').append(fallbackForm);
                                    fallbackForm.submit();
                                }
                            });
                        });
                    }

                    // Simple product form submission
                    $('.cart:not(.variations_form)').on('submit', function(e) {
                        e.preventDefault();

                        var $form = $(this);
                        var $button = $('.single_add_to_cart_button');
                        var product_id = $form.find('input[name="add-to-cart"], input[name="product_id"]').val();
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
                                if (response.success) {
                                    // Redirect to cart page
                                    window.location.href = '<?php echo wc_get_cart_url(); ?>';
                                } else {
                                    alert(response.data.message || 'Failed to add product to cart');
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