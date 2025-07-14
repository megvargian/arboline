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
?>
    </div><!-- #content -->
    <footer>
        <section class="py-5 pb-md-5 pb-0" style="background-color: #f0f0f0;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <div class="row justify-content-between">
                            <div class="col-md-6 col-12">
                                <div>
                                    <h3>Maison Lesley News</h3>
                                    <p>Sign up to our newsletter and receive updates on <br> events, collections and exclusive promotions.</p>
                                </div>
                            </div>
                            <div class="col-md-5 col-12 pb-md-0 pb-3">
                                <form class="w-100" action="/" method="post">
                                    <div class="position-relative">
                                        <input class="input-newsletter w-100" placeholder="Email" type="email" requierd>
                                        <button class="subscription-button">
                                            <span class="submit-txt">Submit</span>
                                        </button>
                                    </div>
                                    <div class="check-policy d-flex justify-content-start mt-3">
                                        <input class="input-checkbox" name="policy-check" type="checkbox" required>
                                        <label for="policy-check" style="margin-left: 5px;">
                                            I have read the <a href="#">Privacy Policy</a>
                                        </label>
                                    </div>
                                </form>
                                <?php  ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="border-1 d-md-none d-block">
                <!-- <a href="#" class="w-100">
                    <div class="py-3 px-3" style="border-top: 1px solid #d8d8d8;">
                        <div class="d-flex justify-content-start align-items-center location-mobile">
                            <span class="default-button text-black">Find your nearest store</span>
                        </div>
                    </div>
                </a> -->
                <a href="/contact-us" class="w-100">
                    <div class="py-3 px-3" style="border-top: 1px solid #d8d8d8;">
                        <div class="d-flex justify-content-start align-items-center call-mobile">
                            <span class="default-button text-black">Customer service</span>
                        </div>
                    </div>
                </a>
            </section>
        </section>
        <section class="bg-white py-5 w-100 pt-md-5 pt-0">
            <div class="container d-md-block d-none">
                <div class="row">
                        <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2">
                            <div class="first-col">
                                <div>
                                    <h5 class="mb-3">test</h5>
                                    <ul class="sub-menus-footer">
                                            <li>
                                                <a href="<?php echo 'test'; ?>">
                                                    <?php echo 'test'; ?>
                                                </a>
                                            </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 third-col social-links">
                        <div class="row">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="icon-social-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-social-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-social-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-0 col"></div>
                </div>
            </div>
            <section class="mobile-footer d-block d-md-none">
                <div class="accordion w-100" id="accordionExample-footer">
                    <div class="accordion-item">
                        <h2 class="accordion-header mt-0" id="headingOne-footer-<?php echo '0';?>">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-footer-<?php echo '0'; ?>" aria-expanded="true" aria-controls="collapseOne-footer-<?php echo '0'; ?>">
                                <?php echo 'test'; ?>
                            </button>
                        </h2>
                        <div id="collapseOne-footer-<?php echo '0'; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne-footer-<?php echo '0';?>" data-bs-parent="#accordionExample-footer">
                            <div class="accordion-body">
                                <ul class="sub-menus-footer">
                                    <li>
                                        <a href="<?php echo 'test'; ?>">
                                            <?php echo 'test'; ?>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom third-col social-links py-3">
                    <ul class="d-flex justify-content-center align-items-center">
                        <li>
                            <a href="#">
                                <i class="icon-social-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-social-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-social-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
        </section>
        <section class="bg-black footer-after">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-8 col-12 text-center">
                        <p>

                        </p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</div><!-- #page -->
<script>
    jQuery(document).ready(function($) {
        $('#custom-filter').change(function() {
            $('#custom-filter-form').submit();
        });
        $('#custom-add-to-cart-button').on('click', function() {
            var product_id = $(this).data('product-id');
            $.ajax({
                type: 'POST',
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                data: {
                    action: 'custom_add_to_cart',
                    product_id: product_id,
                },
                success: function(response) {
                    if (response.success) {
                        window.location.href = '/cart/';
                    } else {
                        $('.response').text('There was an error adding the product to the cart.');
                    }
                }
            });
        });
        // select attribute and make it active
        $('.product-attributes-size li').on('click', function(){
            $('.product-attributes-size li button').removeClass('active');
            $(this).find('button').addClass('active');
            if($('.product-attributes-color').length > 0){
                if($('.product-attributes-color li').find('button.active').length > 0){
                    $('#form-add-to-cart-button').removeAttr('disabled');
                }
            }else{
                $('#form-add-to-cart-button').removeAttr('disabled');
            }
        });
        $('.product-attributes-color li').on('click', function(){
            $('.product-attributes-color li button').removeClass('active');
            $(this).find('button').addClass('active');
            if($('.product-attributes-size').length > 0){
                if($('.product-attributes-size li').find('button.active').length > 0){
                    $('#form-add-to-cart-button').removeAttr('disabled');
                }
            }else{
                $('#form-add-to-cart-button').removeAttr('disabled');
            }
        });
        // add to cart with selected attribute
        $('#form-add-to-cart-button').on('click', function() {
            var product_id = $(this).data('product-id');
            var selected_attr_size = $('.product-attributes-size').find('button.active').text();
            var selected_attr_color = $('.product-attributes-color').find('button.active').find('span').text();
            $.ajax({
                type: 'POST',
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                data: {
                    action: 'form_custom_add_to_cart',
                    product_id: product_id,
                    selected_attr_size: selected_attr_size,
                    selected_attr_color: selected_attr_color,
                },
                success: function(response) {
                    if (response.success) {
                        $('#form-add-to-cart-button').prop('disabled', true);
                        window.location.href = '/cart/';
                    } else {
                        $('#form-add-to-cart-button').prop('disabled', true);
                        $('.response').text('There was an error adding the product to the cart.');
                    }
                }
            });
        });
        // Apply FancyBox to product images
        $('a.fancybox').fancybox({
            // FancyBox options can be added here
            buttons: [
                'zoom',
                'close'
            ]
        });
        // form subscribe
        $('.subscription-button').on('click', function() {
            $('.subscription-button-demo').click();
        });
        var cf7form = $('#wpcf7-f1449-o2');
        if (cf7form) {
            $(cf7form).each(function(index, el) {
                if (el) {
                $(el).find('form').submit(function(event) {
                    $(el).find('form').find('.wpcf7-submit').addClass('disabled');
                    $(el).parents('.form_validation_parent').find('.contact_success_message').hide();
                    $(el).parents('.form_validation_parent').find('.contact_fail_message').hide();
                });
                el.addEventListener( 'wpcf7mailsent', function( event ) {
                    $(el).parents('.form_validation_parent').find('.contact_success_message').slideDown(300);
                }, false );
                el.addEventListener( 'wpcf7mailfailed', function( event ) {
                    $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                    $(el).parents('.form_validation_parent').find('.contact_fail_message').slideDown(300);
                }, false );
                el.addEventListener( 'wpcf7spam', function( event ) {
                    $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                    $(el).parents('.form_validation_parent').find('.contact_fail_message').slideDown(300);
                }, false );
                el.addEventListener( 'wpcf7invalid', function( event ) {
                    $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                    $(el).parents('.form_validation_parent').find('.contact_fail_message').slideDown(300);
                }, false );
                }
            });
        }
        $('.return-to-shop a').attr('href', 'https://maisonlesley.com/');
    });
</script>
<?php wp_footer(); ?>
</body>
</html>