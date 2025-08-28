<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
$options = get_fields('options');
?>
        <?php if(!is_product_category() && !is_product()){ ?>
            <div class="wp-block-cover alignfull is-light" style="min-height:60vh"><span aria-hidden="true"
                    class="wp-block-cover__background has-background-dim-10 has-background-dim"
                    style="background-color:#717171"></span><img decoding="async" loading="lazy" width="2000" height="430"
                    class="wp-block-cover__image-background wp-image-2499" alt=""
                    src="https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1.jpg" data-object-fit="cover"
                    srcset="https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1.jpg 2000w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-600x129.jpg 600w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-300x65.jpg 300w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-1024x220.jpg 1024w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-768x165.jpg 768w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-1536x330.jpg 1536w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-1320x284.jpg 1320w"
                    sizes="(max-width: 2000px) 100vw, 2000px">
                <div class="wp-block-cover__inner-container">
                    <div class="is-layout-flow wp-block-group alignfull py-0 py-lg-5">
                        <div class="wp-block-suppliers text-center">


                            <figure class="wp-block-image size-full is-resized mx-auto"><img decoding="async" loading="lazy"
                                    src="https://fiddes.co.uk/app/uploads/2022/09/product-tins-1.png" alt="" class="wp-image-993"
                                    width="623" height="343"
                                    srcset="https://fiddes.co.uk/app/uploads/2022/09/product-tins-1.png 784w, https://fiddes.co.uk/app/uploads/2022/09/product-tins-1-600x331.png 600w, https://fiddes.co.uk/app/uploads/2022/09/product-tins-1-300x165.png 300w, https://fiddes.co.uk/app/uploads/2022/09/product-tins-1-768x423.png 768w"
                                    sizes="(max-width: 623px) 100vw, 623px"></figure>



                            <h3 class="has-text-align-center underline h1 has-black-color has-text-color"><span
                                    style="text-decoration: underline;">WHERE TO BUY</span></h3>



                            <p class="has-text-align-center has-black-color has-text-color has-medium-font-size">Our products
                                are <a href="https://fiddes.co.uk/product-catalogue/" data-type="page"
                                    data-id="1413"><strong>available online</strong></a> or at your local decorating centre.</p>



                            <p class="has-text-align-center has-black-color has-text-color has-medium-font-size">Search your
                                nearest stockist below.</p>


                            <form class="af-form acf-form" method="POST" action="/" id="form_where_to_buy"
                                data-key="form_where_to_buy">
                                <div class="af-fields acf-fields acf-form-fields -top">
                                    <div class="col-8 af-field pt-0 af-field-type-text af-field-postcode acf-field acf-field-text acf-field-63121ae1a7242"
                                        data-name="postcode" data-key="field_63121ae1a7242" data-type="text">
                                        <div class="af-label acf-label"><label for="acf-field_63121ae1a7242">Postcode</label>
                                        </div>
                                        <div class="af-input acf-input w-100">
                                            <div class="acf-input-wrap">
                                                <input type="text" class="w-100" id="acf-field_63121ae1a7242"
                                                    name="acf[field_63121ae1a7242]" placeholder="Enter postcode">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="af-submit acf-form-submit"><button type="submit"
                                            class="acf-button af-submit-button">Submit</button><span
                                            class="acf-spinner af-spinner"></span></div>
                                </div>
                            </form>
                            <div class="supplier-slider slick-initialized slick-slider"><a type="button"
                                    class="slick-prev slick-arrow" style=""><i class="bi bi-chevron-compact-left"></i></a>
                                <div class="swiper whereToBuySwiper">
                                    <div class="swiper-wrapper align-items-center"
                                        style="opacity: 1; width: 4872px; transform: translate3d(-696px, 0px, 0px);">
                                        <div class="swiper-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://nextdaypaint.co.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/next-day-paint-logo.png"
                                                        class="img-fluid" alt="Next Day Paint">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://restorate.co.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/restorate-logo.png"
                                                        class="img-fluid" alt="Restorate">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.wood-finishes-direct.com/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/wood-finishes-direct-logo.png"
                                                        class="img-fluid" alt="Wood Finishes Direct">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-current slick-active" data-slick-index="0"
                                            aria-hidden="false" style="width: 232px;">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.brewers.co.uk/" rel="noopener" tabindex="0"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/brewers-logo.jpg"
                                                        class="img-fluid" alt="Brewers Decorator Centres">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-active" data-slick-index="1" aria-hidden="false"
                                            style="width: 232px;">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.crowndecoratingcentres.co.uk/" rel="noopener" tabindex="0"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2023/01/CrownDecoratingCentres_logo.png"
                                                        class="img-fluid" alt="Crown Decorating Centres">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-active" data-slick-index="2" aria-hidden="false"
                                            style="width: 232px;">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.thepaintshed.com/" rel="noopener" tabindex="0"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2023/01/The-Paint-Shed.svg"
                                                        class="img-fluid" alt="The Paint Shed">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" data-slick-index="3" aria-hidden="true" style="width: 232px;"
                                            tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.robbins.co.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2023/01/Robbins-logo-hi-res-002.png"
                                                        class="img-fluid" alt="Robbins Timber">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" data-slick-index="4" aria-hidden="true" style="width: 232px;"
                                            tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank" href="https://rabart.co.uk/"
                                                    rel="noopener" tabindex="-1" style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2023/01/rabart-logonew2017.png"
                                                        class="img-fluid" alt="Rabart">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" data-slick-index="5" aria-hidden="true" style="width: 232px;"
                                            tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.paintstop.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2023/01/paint-stop-new.png"
                                                        class="img-fluid" alt="Paint Stop">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" data-slick-index="6" aria-hidden="true" style="width: 232px;"
                                            tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://nextdaypaint.co.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/next-day-paint-logo.png"
                                                        class="img-fluid" alt="Next Day Paint">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" data-slick-index="7" aria-hidden="true" style="width: 232px;"
                                            tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://restorate.co.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/restorate-logo.png"
                                                        class="img-fluid" alt="Restorate">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" data-slick-index="8" aria-hidden="true" style="width: 232px;"
                                            tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.wood-finishes-direct.com/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/wood-finishes-direct-logo.png"
                                                        class="img-fluid" alt="Wood Finishes Direct">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.brewers.co.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/brewers-logo.jpg"
                                                        class="img-fluid" alt="Brewers Decorator Centres">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.crowndecoratingcentres.co.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2023/01/CrownDecoratingCentres_logo.png"
                                                        class="img-fluid" alt="Crown Decorating Centres">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.thepaintshed.com/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2023/01/The-Paint-Shed.svg"
                                                        class="img-fluid" alt="The Paint Shed">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="12" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.robbins.co.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2023/01/Robbins-logo-hi-res-002.png"
                                                        class="img-fluid" alt="Robbins Timber">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="13" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank" href="https://rabart.co.uk/"
                                                    rel="noopener" tabindex="-1" style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2023/01/rabart-logonew2017.png"
                                                        class="img-fluid" alt="Rabart">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="14" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.paintstop.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2023/01/paint-stop-new.png"
                                                        class="img-fluid" alt="Paint Stop">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="15" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://nextdaypaint.co.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/next-day-paint-logo.png"
                                                        class="img-fluid" alt="Next Day Paint">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="16" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://restorate.co.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/restorate-logo.png"
                                                        class="img-fluid" alt="Restorate">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="17" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.wood-finishes-direct.com/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/wood-finishes-direct-logo.png"
                                                        class="img-fluid" alt="Wood Finishes Direct">
                                                </a></div>
                                        </div>
                                    </div>
                                </div><a type="button" class="slick-next slick-arrow" style=""><i
                                        class="bi bi-chevron-compact-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="is-layout-flow wp-block-group alignfull bg-primary has-primary-background-color has-background">
                <div class="container is-layout-flex wp-container-34 wp-block-columns are-vertically-aligned-center mb-0 py-3 py-lg-5"
                    style="padding-top:4em;padding-bottom:3em">
                    <div class="is-layout-flow wp-block-column is-vertically-aligned-center px-5 px-lg-2" style="flex-basis:40%">
                        <figure class="wp-block-image aligncenter size-full is-resized">
                            <img decoding="async" loading="lazy"
                                src="https://fiddes.co.uk/app/uploads/2022/12/White-circular-logo-for-green-background.svg" alt=""
                                class="wp-image-3285" width="425" height="425">
                        </figure>
                    </div>
                    <div class="is-layout-flow wp-block-column is-vertically-aligned-center px-4" style="flex-basis:60%">
                        <h2 class="has-text-align-center underline h1 underline--white has-white-color has-text-color"><span
                                style="text-decoration: underline;">ESTABLISHED 1896</span></h2>



                        <p class="has-text-align-center has-text-color has-medium-font-size" style="color:#fefefe">For over four
                            generations, FIDDES remains a family owned independent <br>British manufacturer of traditional wood
                            and floor finishes. </p>



                        <p class="has-text-align-center has-text-color has-medium-font-size" style="color:#fefefe">Originally
                            developing wood finishing products for the professional woodworking trade, FIDDES has also built a
                            reputation as being the natural choice for interior wood and outdoor DIY enthusiasts.</p>
                        <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                        <div class="is-layout-flex wp-block-buttons">
                            <div class="wp-block-button aligncenter">
                                <a class="wp-block-button__link has-secondary-background-color has-background wp-element-button"
                                    href="https://fiddes.co.uk/product-catalogue/"
                                    style="border-radius:0px; color: #fff; width: fit-content;">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div><!-- #content -->
    <footer class="site-footer">
    <div class="container">
        <div class="footer-logo text-center mb-4">
            <?php if (!empty($options['footer_logo'])): ?>
                <img src="<?php echo esc_url($options['footer_logo']); ?>" alt="Footer Logo" class="img-fluid" />
            <?php endif; ?>
        </div>
        <div class="footer-menus row">
            <?php if (!empty($options['footer_menus'])): ?>
                <?php foreach ($options['footer_menus'] as $menu): ?>
                    <div class="col">
                        <h4><?php echo esc_html($menu['title']); ?></h4>
                        <ul class="footer-menu">
                            <?php if (!empty($menu['links'])): ?>
                                <?php foreach ($menu['links'] as $link): ?>
                                    <li><a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['label']); ?></a></li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="footer-text text-center mt-4">
            <?php if (!empty($options['footer_text'])): ?>
                <p><?php echo esc_html($options['footer_text']); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>
</div><!-- #page -->
<script>
jQuery(document).ready(function($) {
    // $('#custom-filter').change(function() {
    //     $('#custom-filter-form').submit();
    // });
    // $('#custom-add-to-cart-button').on('click', function() {
    //     var product_id = $(this).data('product-id');
    //     $.ajax({
    //         type: 'POST',
    //         url: '<?php echo admin_url('admin-ajax.php'); ?>',
    //         data: {
    //             action: 'custom_add_to_cart',
    //             product_id: product_id,
    //         },
    //         success: function(response) {
    //             if (response.success) {
    //                 window.location.href = '/cart/';
    //             } else {
    //                 $('.response').text(
    //                     'There was an error adding the product to the cart.');
    //             }
    //         }
    //     });
    // });
    // // select attribute and make it active
    // $('.product-attributes-size li').on('click', function() {
    //     $('.product-attributes-size li button').removeClass('active');
    //     $(this).find('button').addClass('active');
    //     if ($('.product-attributes-color').length > 0) {
    //         if ($('.product-attributes-color li').find('button.active').length > 0) {
    //             $('#form-add-to-cart-button').removeAttr('disabled');
    //         }
    //     } else {
    //         $('#form-add-to-cart-button').removeAttr('disabled');
    //     }
    // });
    // $('.product-attributes-color li').on('click', function() {
    //     $('.product-attributes-color li button').removeClass('active');
    //     $(this).find('button').addClass('active');
    //     if ($('.product-attributes-size').length > 0) {
    //         if ($('.product-attributes-size li').find('button.active').length > 0) {
    //             $('#form-add-to-cart-button').removeAttr('disabled');
    //         }
    //     } else {
    //         $('#form-add-to-cart-button').removeAttr('disabled');
    //     }
    // });
    // // add to cart with selected attribute
    // $('#form-add-to-cart-button').on('click', function() {
    //     var product_id = $(this).data('product-id');
    //     var selected_attr_size = $('.product-attributes-size').find('button.active').text();
    //     var selected_attr_color = $('.product-attributes-color').find('button.active').find('span')
    //         .text();
    //     $.ajax({
    //         type: 'POST',
    //         url: '<?php echo admin_url('admin-ajax.php'); ?>',
    //         data: {
    //             action: 'form_custom_add_to_cart',
    //             product_id: product_id,
    //             selected_attr_size: selected_attr_size,
    //             selected_attr_color: selected_attr_color,
    //         },
    //         success: function(response) {
    //             if (response.success) {
    //                 $('#form-add-to-cart-button').prop('disabled', true);
    //                 window.location.href = '/cart/';
    //             } else {
    //                 $('#form-add-to-cart-button').prop('disabled', true);
    //                 $('.response').text(
    //                     'There was an error adding the product to the cart.');
    //             }
    //         }
    //     });
    // });
    // // Apply FancyBox to product images
    // $('a.fancybox').fancybox({
    //     // FancyBox options can be added here
    //     buttons: [
    //         'zoom',
    //         'close'
    //     ]
    // });
    // // form subscribe
    // $('.subscription-button').on('click', function() {
    //     $('.subscription-button-demo').click();
    // });
    // var cf7form = $('#wpcf7-f1449-o2');
    // if (cf7form) {
    //     $(cf7form).each(function(index, el) {
    //         if (el) {
    //             $(el).find('form').submit(function(event) {
    //                 $(el).find('form').find('.wpcf7-submit').addClass('disabled');
    //                 $(el).parents('.form_validation_parent').find('.contact_success_message')
    //                     .hide();
    //                 $(el).parents('.form_validation_parent').find('.contact_fail_message')
    //                     .hide();
    //             });
    //             el.addEventListener('wpcf7mailsent', function(event) {
    //                 $(el).parents('.form_validation_parent').find('.contact_success_message')
    //                     .slideDown(300);
    //             }, false);
    //             el.addEventListener('wpcf7mailfailed', function(event) {
    //                 $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
    //                 $(el).parents('.form_validation_parent').find('.contact_fail_message')
    //                     .slideDown(300);
    //             }, false);
    //             el.addEventListener('wpcf7spam', function(event) {
    //                 $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
    //                 $(el).parents('.form_validation_parent').find('.contact_fail_message')
    //                     .slideDown(300);
    //             }, false);
    //             el.addEventListener('wpcf7invalid', function(event) {
    //                 $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
    //                 $(el).parents('.form_validation_parent').find('.contact_fail_message')
    //                     .slideDown(300);
    //             }, false);
    //         }
    //     });
    // }
    // $('.return-to-shop a').attr('href', 'https://maisonlesley.com/');
     var swiper = new Swiper(".whereToBuySwiper", {
        slidesPerView: 4,
        spaceBetween: 20,
        centeredSlides: true, // Center active slide
        loop: true,
        autoplay: {
            delay: 3000, // 3 seconds
            disableOnInteraction: true, // Keeps autoplay after user swipes
        },
        navigation: {
            nextEl: ".slick-next",
            prevEl: ".slick-prev",
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 1.5,
                spaceBetween: 30,
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            991: {
                slidesPerView: 4,
                spaceBetween: 50,
            }
        }
    });
});
</script>
<?php wp_footer(); ?>
</body>

</html>