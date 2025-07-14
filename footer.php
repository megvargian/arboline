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