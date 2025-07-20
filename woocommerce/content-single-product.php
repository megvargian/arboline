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
    <div class="container py-5 pt-3 mt-5">
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
                    // do_action( 'woocommerce_single_product_summary' );
                    ?>
                    <h1 class="product_title entry-title">FIDDES Teak Oil</h1>
                    <div class="woocommerce-product-details__short-description">
                        <p>Based on special vegetable oils and solvents to give a clear penetrating seal &amp;
                            finish to Teak, Cedar and other bare woods to nourish&nbsp;interior and exterior wood.
                        </p>
                    </div>
                    <p class="price"><span class="woocommerce-Price-amount amount"><bdi><span
                                    class="woocommerce-Price-currencySymbol">£</span>16.21</bdi></span> – <span
                            class="woocommerce-Price-amount amount"><bdi><span
                                    class="woocommerce-Price-currencySymbol">£</span>43.42</bdi></span> <small
                            class="woocommerce-price-suffix">INC. VAT</small></p>

                    <form class="variations_form cart" action="https://fiddes.co.uk/product/teak-oil/" method="post"
                        enctype="multipart/form-data" data-product_id="1040"
                        data-product_variations="[{&quot;attributes&quot;:{&quot;attribute_pa_size&quot;:&quot;5lt&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:43.42,&quot;display_regular_price&quot;:43.42,&quot;image&quot;:{&quot;title&quot;:&quot;teak-oil&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil.jpg&quot;,&quot;alt&quot;:&quot;teak-oil&quot;,&quot;src&quot;:&quot;https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil-600x600.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil-600x600.jpg 600w, https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil-300x300.jpg 300w, https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil-200x200.jpg 200w, https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil-150x150.jpg 150w, https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil-32x32.jpg 32w, https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil.jpg 763w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil.jpg&quot;,&quot;full_src_w&quot;:763,&quot;full_src_h&quot;:763,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil-200x200.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:200,&quot;gallery_thumbnail_src_h&quot;:200,&quot;thumb_src&quot;:&quot;https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil-300x300.jpg&quot;,&quot;thumb_src_w&quot;:300,&quot;thumb_src_h&quot;:300,&quot;src_w&quot;:600,&quot;src_h&quot;:600},&quot;image_id&quot;:3302,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&lt;span class=\&quot;price\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-amount amount\&quot;&gt;&lt;bdi&gt;&lt;span class=\&quot;woocommerce-Price-currencySymbol\&quot;&gt;&amp;pound;&lt;\/span&gt;43.42&lt;\/bdi&gt;&lt;\/span&gt; &lt;small class=\&quot;woocommerce-price-suffix\&quot;&gt;INC. VAT&lt;\/small&gt;&lt;\/span&gt;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:1211,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;5&quot;,&quot;weight_html&quot;:&quot;5 kg&quot;,&quot;google_analytics_integration&quot;:{&quot;id&quot;:&quot;#1040&quot;,&quot;variant&quot;:&quot;Size: 5lt&quot;}},{&quot;attributes&quot;:{&quot;attribute_pa_size&quot;:&quot;1lt&quot;},&quot;availability_html&quot;:&quot;&quot;,&quot;backorders_allowed&quot;:false,&quot;dimensions&quot;:{&quot;length&quot;:&quot;&quot;,&quot;width&quot;:&quot;&quot;,&quot;height&quot;:&quot;&quot;},&quot;dimensions_html&quot;:&quot;N\/A&quot;,&quot;display_price&quot;:16.21,&quot;display_regular_price&quot;:16.21,&quot;image&quot;:{&quot;title&quot;:&quot;teak-oil&quot;,&quot;caption&quot;:&quot;&quot;,&quot;url&quot;:&quot;https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil.jpg&quot;,&quot;alt&quot;:&quot;teak-oil&quot;,&quot;src&quot;:&quot;https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil-600x600.jpg&quot;,&quot;srcset&quot;:&quot;https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil-600x600.jpg 600w, https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil-300x300.jpg 300w, https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil-200x200.jpg 200w, https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil-150x150.jpg 150w, https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil-32x32.jpg 32w, https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil.jpg 763w&quot;,&quot;sizes&quot;:&quot;(max-width: 600px) 100vw, 600px&quot;,&quot;full_src&quot;:&quot;https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil.jpg&quot;,&quot;full_src_w&quot;:763,&quot;full_src_h&quot;:763,&quot;gallery_thumbnail_src&quot;:&quot;https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil-200x200.jpg&quot;,&quot;gallery_thumbnail_src_w&quot;:200,&quot;gallery_thumbnail_src_h&quot;:200,&quot;thumb_src&quot;:&quot;https:\/\/fiddes.co.uk\/app\/uploads\/2022\/09\/teak-oil-300x300.jpg&quot;,&quot;thumb_src_w&quot;:300,&quot;thumb_src_h&quot;:300,&quot;src_w&quot;:600,&quot;src_h&quot;:600},&quot;image_id&quot;:3302,&quot;is_downloadable&quot;:false,&quot;is_in_stock&quot;:true,&quot;is_purchasable&quot;:true,&quot;is_sold_individually&quot;:&quot;no&quot;,&quot;is_virtual&quot;:false,&quot;max_qty&quot;:&quot;&quot;,&quot;min_qty&quot;:1,&quot;price_html&quot;:&quot;&lt;span class=\&quot;price\&quot;&gt;&lt;span class=\&quot;woocommerce-Price-amount amount\&quot;&gt;&lt;bdi&gt;&lt;span class=\&quot;woocommerce-Price-currencySymbol\&quot;&gt;&amp;pound;&lt;\/span&gt;16.21&lt;\/bdi&gt;&lt;\/span&gt; &lt;small class=\&quot;woocommerce-price-suffix\&quot;&gt;INC. VAT&lt;\/small&gt;&lt;\/span&gt;&quot;,&quot;sku&quot;:&quot;&quot;,&quot;variation_description&quot;:&quot;&quot;,&quot;variation_id&quot;:1212,&quot;variation_is_active&quot;:true,&quot;variation_is_visible&quot;:true,&quot;weight&quot;:&quot;1&quot;,&quot;weight_html&quot;:&quot;1 kg&quot;,&quot;google_analytics_integration&quot;:{&quot;id&quot;:&quot;#1040&quot;,&quot;variant&quot;:&quot;Size: 1lt&quot;}}]"
                        current-image="">

                        <table class="variations" cellspacing="0" role="presentation">
                            <tbody>
                                <tr>
                                    <th class="label"><label for="pa_size">Size</label></th>
                                    <td class="value">
                                        <select id="pa_size" class="" name="attribute_pa_size"
                                            data-attribute_name="attribute_pa_size" data-show_option_none="yes">
                                            <option value=""> size</option>
                                            <option value="1lt" class="attached enabled">1lt</option>
                                            <option value="5lt" class="attached enabled">5lt</option>
                                        </select><a class="reset_variations" href="#"
                                            style="visibility: hidden;">Clear</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="single_variation_wrap">
                            <div class="woocommerce-variation single_variation"></div>
                            <div
                                class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">

                                <button type="button" class="minus btn"><i class="bi bi-dash-lg"></i></button>
                                <div class="quantity">
                                    <label class="screen-reader-text" for="quantity_687cdde0291ae">FIDDES Teak Oil
                                        quantity</label>
                                    <input type="number" id="quantity_687cdde0291ae" class="input-text qty text"
                                        name="quantity" value="1" title="Qty" size="4" min="1" max="" step="1"
                                        placeholder="" inputmode="numeric" autocomplete="off">
                                </div>
                                <button type="button" class="plus btn"><i class="bi bi-plus-lg"></i></button>
                                <button type="submit"
                                    class="single_add_to_cart_button button alt wp-element-button disabled wc-variation-selection-needed">Add
                                    to basket</button>


                                <input type="hidden" name="add-to-cart" value="1040">
                                <input type="hidden" name="product_id" value="1040">
                                <input type="hidden" name="variation_id" class="variation_id" value="0">
                            </div>
                        </div>

                    </form>

                    <div class="product_meta">
                        <span class="sku_wrapper">SKU: <span class="sku">N/A</span></span>
                        <span class="posted_in">Categories: <a
                                href="https://fiddes.co.uk/product-category/wood-finishes/oils/" rel="tag">Oils</a>,
                            <a href="https://fiddes.co.uk/product-category/wood-finishes/" rel="tag">Interior Wood
                                Finishes</a></span>


                    </div>
                </div>
                <div class="after-summary">
                    <?php
                    /**
                     * Hook: woocommerce_after_single_product_summary.
                     *
                     * @hooked woocommerce_output_product_data_tabs - 10
                     * @hooked woocommerce_upsell_display - 15
                     */
                    // do_action( 'woocommerce_after_single_product_summary' );
                    // $long_description = $product->get_description();
                    // if($long_description){
                    ?>
                    <!-- <div class="single-description-section">
                        <div class="accordion w-100" id="accordionExample-description">
                            <div class="accordion-item" style="border-top: none !important; border-left: none !important; border-right: none !important;">
                                <h2 class="accordion-header mt-0" id="heading-description">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-description" aria-expanded="true" aria-controls="collapse-description">
                                        Description
                                    </button>
                                </h2>
                                <div id="collapse-description" class="accordion-collapse collapse" aria-labelledby="heading-description" data-bs-parent="#accordionExample-description">
                                    <div class="accordion-body">
                                        <p><?php // echo  $long_description; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <?php // } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="accordion mb-5" id="accordionProduct">
                <div class="accordion-item">
                    <p class="accordion-header" id="headingadditional_information">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#additional_informationCollapse" aria-expanded="false"
                            aria-controls="additional_informationCollapse">
                            Additional information </button>
                    </p>
                    <div id="additional_informationCollapse" class="accordion-collapse collapse"
                        aria-labelledby="headingadditional_information" data-bs-parent="#accordionProduct" style="">
                        <div class="accordion-body px-0">
                            <table class="woocommerce-product-attributes shop_attributes">
                                <tbody>
                                    <tr
                                        class="woocommerce-product-attributes-item woocommerce-product-attributes-item--weight">
                                        <th class="woocommerce-product-attributes-item__label">Weight</th>
                                        <td class="woocommerce-product-attributes-item__value">N/A</td>
                                    </tr>
                                    <tr
                                        class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_application">
                                        <th class="woocommerce-product-attributes-item__label">Application</th>
                                        <td class="woocommerce-product-attributes-item__value">
                                            <p>Ensure all areas to be coated are extremely well ventilated
                                                during and after application. Always test on a small area prior
                                                to initial application. No primer required. Maximum 2 coats
                                                recommended. Apply at room temperature. Fiddes Teak Oil is
                                                formulated for application directly, and does not require
                                                thinning.</p>
                                        </td>
                                    </tr>
                                    <tr
                                        class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_first-coat">
                                        <th class="woocommerce-product-attributes-item__label">First Coat</th>
                                        <td class="woocommerce-product-attributes-item__value">
                                            <p>Stir contents thoroughly before and during use, and apply in a
                                                warm, well ventilated room. Apply THINLY using a good quality
                                                bristle or synthetic brush and lay EVENLY, following the
                                                direction of the grain. Remove any surplus material immediately
                                                with a cloth, carefully checking all areas for any excess
                                                application. Leave to dry 10-12 hours in warm, dry well
                                                ventilated conditions, or preferably overnight.</p>
                                        </td>
                                    </tr>
                                    <tr
                                        class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_second-coat">
                                        <th class="woocommerce-product-attributes-item__label">Second Coat</th>
                                        <td class="woocommerce-product-attributes-item__value">
                                            <p>Apply as first coat, THINLY, allowing good ventilation. Leave to
                                                dry 10-12 hours in warm, dry well ventilated conditions, or
                                                preferably overnight. Clean applicator with White Spirit. Apply
                                                3 coats to new interior timber, and 4 coats to exterior timber.
                                                Clean applicators with White Spirit.</p>
                                        </td>
                                    </tr>
                                    <tr
                                        class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_renovation">
                                        <th class="woocommerce-product-attributes-item__label">Renovation</th>
                                        <td class="woocommerce-product-attributes-item__value">
                                            <p>To renovate previous application of Teak Oil, lightly sand area
                                                with 150 grit sandpaper, and re-apply.</p>
                                        </td>
                                    </tr>
                                    <tr
                                        class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_maintenance">
                                        <th class="woocommerce-product-attributes-item__label">MAINTENANCE</th>
                                        <td class="woocommerce-product-attributes-item__value">
                                            <p>For regular light maintenance, clean with a damp cloth and wipe
                                                dry. Re-application may be necessary where soiling or staining
                                                is apparent, following the application details above.</p>
                                        </td>
                                    </tr>
                                    <tr
                                        class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_coverage">
                                        <th class="woocommerce-product-attributes-item__label">Coverage</th>
                                        <td class="woocommerce-product-attributes-item__value">
                                            <p>A single application will cover approximately 20-24 square meters
                                                per litre,depending on the density of the substrate.</p>
                                        </td>
                                    </tr>
                                    <tr
                                        class="woocommerce-product-attributes-item woocommerce-product-attributes-item--attribute_pa_size">
                                        <th class="woocommerce-product-attributes-item__label">Size</th>
                                        <td class="woocommerce-product-attributes-item__value">
                                            <p>1lt, 5lt</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
                            <a href="https://fiddes.co.uk/app/uploads/2022/08/Fiddes-Teak-Oil-MSDS-1.pdf"
                                class="d-flex justify-content-between align-items-center p-3 mb-3 text-uppercase">Fiddes
                                Teak Oil
                                <i class="bi bi-file-earmark-arrow-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row related-products-container pt-4">
            <?php
                $related_products = wc_get_related_products( $product->get_id(), $limit = 4 ); // Change limit as needed
                if ( ! empty( $related_products ) ) {
                    // Start custom structure
                    ?>
            <div class="container">
                <div class="row text-left">
                    <h2>You may also like…</h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php foreach ( $related_products as $related_product_id ) { ?>
                    <div class="col-md-3 col-12">
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