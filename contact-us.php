<?php
/**
 * Template Name: Contact Us Page
 */
get_header();
$get_all_fields = get_fields();
?>
<div class="container custom-container-padding">
    <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    <h1 class="has-text-align-center underline"><span style="text-decoration: underline;"><?php the_title(); ?></span></h1>
    <div class="wp-block-cover alignfull is-light intro d-none" style="min-height: 900px;"><span aria-hidden="true"
            class="wp-block-cover__background has-secondary-background-color has-background-dim-10 has-background-dim"></span><img
            decoding="async" width="1024" height="476" class="wp-block-cover__image-background wp-image-1576" alt=""
            src="https://fiddes.co.uk/app/uploads/2022/09/interior-deisgn-intro-1300-1024x476-1.jpg"
            style="object-position: 50% 100%; top: 0%;" data-object-fit="cover" data-object-position="50% 100%"
            srcset="https://fiddes.co.uk/app/uploads/2022/09/interior-deisgn-intro-1300-1024x476-1.jpg 1024w, https://fiddes.co.uk/app/uploads/2022/09/interior-deisgn-intro-1300-1024x476-1-600x279.jpg 600w, https://fiddes.co.uk/app/uploads/2022/09/interior-deisgn-intro-1300-1024x476-1-300x139.jpg 300w, https://fiddes.co.uk/app/uploads/2022/09/interior-deisgn-intro-1300-1024x476-1-768x357.jpg 768w"
            sizes="(max-width: 1024px) 100vw, 1024px">
        <div class="wp-block-cover__inner-container" style="margin-top: 0%;">
            <h1 class="has-text-align-center d-inline-block has-white-color has-text-color has-background has-large-font-size"
                style="background-color:#00000052">CONTACT US</h1>
        </div>
        <div class="mouse-icon-wrap">
            <div class="mouse-icon">
                <div class="mouse-wheel"></div>
            </div>
        </div>
    </div>
    <?php if($get_all_fields['google_maps_url']) : ?>
        <div class="ratio ratio-16x9">
            <iframe
                src="<?php echo $get_all_fields['google_maps_url']; ?>"
                width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    <?php endif; ?>
    <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
    <div class="is-layout-flex wp-container-3 wp-block-columns">
        <div class="is-layout-flow wp-block-column has-gray-100-background-color has-background"
            style="padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em">
            <h3 class="has-text-align-center underline"><span style="text-decoration: underline;">
                <?php echo $get_all_fields['left_box']['title']; ?>
            </span></h3>
            <?php echo $get_all_fields['left_box']['description']; ?>
        </div>
        <div class="is-layout-flow wp-block-column has-gray-100-background-color has-background"
            style="padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em">
            <h3 class="has-text-align-center underline"><span style="text-decoration: underline;">
                <?php echo $get_all_fields['right_box']['title']; ?></span></h3>
            <p class="has-danger-color has-text-color"></p>
            <?php echo $get_all_fields['right_box']['description']; ?>
        </div>
    </div>
    <div class="is-layout-flow wp-block-group p-4 mb-4 has-gray-100-background-color has-background">
        <form class="af-form acf-form" method="POST" action="/" id="form_contact"
            data-key="form_contact">
            <div class="af-fields acf-fields acf-form-fields-top d-md-flex d-block">
                <div class="af-field af-field-type-group af-field-personal-details acf-field acf-field-group acf-field-632c4ccb6830f -r0 dynamic-width"
                    data-width="50" style="min-height: 549px;" data-name="personal_details"
                    data-key="field_632c4ccb6830f" data-type="group">
                    <div class="af-label acf-label">
						<label for="acf-field_632c4ccb6830f" class="d-block mb-3">PERSONAL DETAILS</label>
					</div>
                    <div class="af-input acf-input">
                        <div class="acf-fields -top -border">
                            <div class="acf-field acf-field-text acf-field-632c4cf268310 is-required col-lg-6 col-12"
                                data-name="name" data-type="text" data-key="field_632c4cf268310" data-required="1">
                                <div class="acf-label">
                                    <label for="acf-field_632c4ccb6830f-field_632c4cf268310">Name <span
                                            class="acf-required">*</span></label>
                                </div>
                                <div class="acf-input">
                                    <div class="acf-input-wrap"><input type="text"
                                            id="acf-field_632c4ccb6830f-field_632c4cf268310"
                                            name="acf[field_632c4ccb6830f][field_632c4cf268310]" placeholder="Name"
                                            required="required"></div>
                                </div>
                            </div>
                            <div class="acf-field acf-field-email acf-field-632c4d0868311 is-required col-lg-6 col-12"
                                data-name="email" data-type="email" data-key="field_632c4d0868311" data-required="1">
                                <div class="acf-label">
                                    <label for="acf-field_632c4ccb6830f-field_632c4d0868311">Email <span
                                            class="acf-required">*</span></label>
                                </div>
                                <div class="acf-input">
                                    <div class="acf-input-wrap"><input type="email"
                                            id="acf-field_632c4ccb6830f-field_632c4d0868311"
                                            name="acf[field_632c4ccb6830f][field_632c4d0868311]" placeholder="Email"
                                            required="required"></div>
                                </div>
                            </div>
                            <div class="acf-field acf-field-text acf-field-632c4d1568312" data-name="address"
                                data-type="text" data-key="field_632c4d1568312">
                                <div class="acf-label">
                                    <label for="acf-field_632c4ccb6830f-field_632c4d1568312">Address</label>
                                </div>
                                <div class="acf-input">
                                    <div class="acf-input-wrap"><input type="text"
                                            id="acf-field_632c4ccb6830f-field_632c4d1568312"
                                            name="acf[field_632c4ccb6830f][field_632c4d1568312]"
                                            placeholder="Address Line 1"></div>
                                </div>
                            </div>
                            <div class="acf-field acf-field-text acf-field-632c4d3368313" data-name="address_2"
                                data-type="text" data-key="field_632c4d3368313">
                                <div class="acf-label">
                                    <label for="acf-field_632c4ccb6830f-field_632c4d3368313">Address 2</label>
                                </div>
                                <div class="acf-input">
                                    <div class="acf-input-wrap"><input type="text"
                                            id="acf-field_632c4ccb6830f-field_632c4d3368313"
                                            name="acf[field_632c4ccb6830f][field_632c4d3368313]"
                                            placeholder="Address Line 2"></div>
                                </div>
                            </div>
                            <div class="acf-field acf-field-text acf-field-632c4d4068314 col-12" data-name="town_city"
                                data-type="text" data-key="field_632c4d4068314">
                                <div class="acf-label">
                                    <label for="acf-field_632c4ccb6830f-field_632c4d4068314">Town / City</label>
                                </div>
                                <div class="acf-input">
                                    <div class="acf-input-wrap"><input type="text"
                                            id="acf-field_632c4ccb6830f-field_632c4d4068314"
                                            name="acf[field_632c4ccb6830f][field_632c4d4068314]"
                                            placeholder="Town / City"></div>
                                </div>
                            </div>
                            <div class="acf-field acf-field-text acf-field-632c4d6268315" data-name="postcode"
                                data-type="text" data-key="field_632c4d6268315">
                                <div class="acf-label">
                                    <label for="acf-field_632c4ccb6830f-field_632c4d6268315">Postcode</label>
                                </div>
                                <div class="acf-input">
                                    <div class="acf-input-wrap"><input type="text"
                                            id="acf-field_632c4ccb6830f-field_632c4d6268315"
                                            name="acf[field_632c4ccb6830f][field_632c4d6268315]" placeholder="Postcode">
                                    </div>
                                </div>
                            </div>
                            <div class="acf-field acf-field-text acf-field-632c4d6b68316 is-required"
                                data-name="contact_number" data-type="text" data-key="field_632c4d6b68316"
                                data-required="1">
                                <div class="acf-label">
                                    <label for="acf-field_632c4ccb6830f-field_632c4d6b68316">Contact Number <span
                                            class="acf-required">*</span></label>
                                </div>
                                <div class="acf-input">
                                    <div class="acf-input-wrap"><input type="text"
                                            id="acf-field_632c4ccb6830f-field_632c4d6b68316"
                                            name="acf[field_632c4ccb6830f][field_632c4d6b68316]"
                                            placeholder="Contact Number" required="required"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="af-field af-field-type-group af-field-col2 acf-field acf-field-group acf-field-632c4db7e5f94 -r0 dynamic-width"
                    data-width="50" style="min-height: 549px;" data-name="col2"
                    data-key="field_632c4db7e5f94" data-type="group">
                    <div class="af-label acf-label"><label for="acf-field_632c4db7e5f94"></label></div>
                    <div class="af-input acf-input">
                        <div class="acf-fields -top -border">
                            <div class="acf-field acf-field-group acf-field-632c5c702d866 col-12 -r0"
                                style="width: 100%; min-height: 107px;" data-name="company_details" data-type="group"
                                data-key="field_632c5c702d866" data-width="100">
                                <div class="acf-label">
                                    <label for="acf-field_632c4db7e5f94-field_632c5c702d866" class="d-block mb-3">COMPANY DETAILS</label>
                                </div>
                                <div class="acf-input">
                                    <div class="acf-fields -top -border">
                                        <div class="acf-field acf-field-text acf-field-632c5c852d867 col-lg-6 col-12"
                                            data-name="job_title" data-type="text" data-key="field_632c5c852d867">
                                            <div class="acf-label">
                                                <label
                                                    for="acf-field_632c4db7e5f94-field_632c5c702d866-field_632c5c852d867">Job
                                                    Title</label>
                                            </div>
                                            <div class="acf-input">
                                                <div class="acf-input-wrap"><input type="text"
                                                        id="acf-field_632c4db7e5f94-field_632c5c702d866-field_632c5c852d867"
                                                        name="acf[field_632c4db7e5f94][field_632c5c702d866][field_632c5c852d867]"
                                                        placeholder="Job Title"></div>
                                            </div>
                                        </div>
                                        <div class="acf-field acf-field-text acf-field-632c5c8c2d868 col-lg-6 col-12"
                                            data-name="company_name" data-type="text" data-key="field_632c5c8c2d868">
                                            <div class="acf-label">
                                                <label
                                                    for="acf-field_632c4db7e5f94-field_632c5c702d866-field_632c5c8c2d868">Company
                                                    Name</label>
                                            </div>
                                            <div class="acf-input">
                                                <div class="acf-input-wrap"><input type="text"
                                                        id="acf-field_632c4db7e5f94-field_632c5c702d866-field_632c5c8c2d868"
                                                        name="acf[field_632c4db7e5f94][field_632c5c702d866][field_632c5c8c2d868]"
                                                        placeholder="Company Name"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="acf-field acf-field-group acf-field-632c4df1626c7 col-12 -c0"
                                style="width: 100%; min-height: 410px;" data-name="message" data-type="group"
                                data-key="field_632c4df1626c7" data-width="100">
                                <div class="acf-label">
                                    <label for="acf-field_632c4db7e5f94-field_632c4df1626c7" class="d-block mb-3">MESSAGE</label>
                                </div>
                                <div class="acf-input">
                                    <div class="acf-fields -top -border">
                                        <div class="acf-field acf-field-select acf-field-632c4e01626c8 col-12"
                                            data-name="i_am_interested_in:" data-type="select"
                                            data-key="field_632c4e01626c8">
                                            <div class="acf-label">
                                                <label
                                                    for="acf-field_632c4db7e5f94-field_632c4df1626c7-field_632c4e01626c8">I
                                                    am Interested in</label>
                                            </div>
                                            <div class="acf-input">
                                                <select
                                                    id="acf-field_632c4db7e5f94-field_632c4df1626c7-field_632c4e01626c8"
                                                    class=""
                                                    name="acf[field_632c4db7e5f94][field_632c4df1626c7][field_632c4e01626c8]"
                                                    data-ui="0" data-ajax="0" data-multiple="0"
                                                    data-placeholder="Select" data-allow_null="0">
                                                    <option value="Please select" selected="selected" data-i="0">Please
                                                        select</option>
                                                    <option value="Current User of Fiddes Products">Current User of
                                                        Fiddes Products</option>
                                                    <option value="Prospective User">Prospective User</option>
                                                    <option value="Request Fiddes Product Catalogue">Request Fiddes
                                                        Product Catalogue</option>
                                                    <option value="Request Contact">Request Contact</option>
                                                    <option value="Becoming an Affiliate">Becoming an Affiliate</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="acf-field acf-field-textarea acf-field-632c4e18626c9 col-12"
                                            data-name="request_details" data-type="textarea"
                                            data-key="field_632c4e18626c9">
                                            <div class="acf-label">
                                                <label
                                                    for="acf-field_632c4db7e5f94-field_632c4df1626c7-field_632c4e18626c9">Request
                                                    Details</label>
                                            </div>
                                            <div class="acf-input">
                                                <textarea
                                                    id="acf-field_632c4db7e5f94-field_632c4df1626c7-field_632c4e18626c9"
                                                    name="acf[field_632c4db7e5f94][field_632c4df1626c7][field_632c4e18626c9]"
                                                    placeholder="Request Details" rows="13"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="af-submit acf-form-submit"><button type="submit"
                        class="acf-button af-submit-button">Submit</button><span class="acf-spinner af-spinner"></span>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
jQuery(document).ready(function($) {
    var cf7form = $('.wpcf7');
    if (cf7form) {
        $(cf7form).each(function(index, el) {
            if (el) {
                $(el).find('form').submit(function(event) {
                    $(el).find('form').find('.wpcf7-submit').addClass('disabled');
                    $(el).parents('.form_validation_parent').find('.contact_success_message')
                        .hide();
                    $(el).parents('.form_validation_parent').find('.contact_fail_message')
                    .hide();
                });
                el.addEventListener('wpcf7mailsent', function(event) {
                    $(el).parents('.form_validation_parent').find('.contact_success_message')
                        .slideDown(300);
                }, false);
                el.addEventListener('wpcf7mailfailed', function(event) {
                    $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                    $(el).parents('.form_validation_parent').find('.contact_fail_message')
                        .slideDown(300);
                }, false);
                el.addEventListener('wpcf7spam', function(event) {
                    $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                    $(el).parents('.form_validation_parent').find('.contact_fail_message')
                        .slideDown(300);
                }, false);
                el.addEventListener('wpcf7invalid', function(event) {
                    $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
                    $(el).parents('.form_validation_parent').find('.contact_fail_message')
                        .slideDown(300);
                }, false);
            }
        });
    }
});
</script>
<?php
get_footer();