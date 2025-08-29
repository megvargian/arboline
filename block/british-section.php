<?php
// Fervently British Section Block
$fields = get_fields();
$bg_image = $fields['background_image'];
$fade_image = $fields['fade_image'];
$flag_image = $fields['british_flag_image'];
$title = $fields['british_title'];
$text = $fields['british_text'];
$link_url = $fields['british_link_url'];
$link_text = $fields['british_link_text'];
$lid_image = $fields['british_lid_image'];
$dir_images = get_template_directory_uri() . '/inc/assets/images/';
?>
<div class="wp-block-cover alignfull is-light mt-0" style="min-height:60vh">
    <span aria-hidden="true"
        class="wp-block-cover__background has-white-background-color has-background-dim-90 has-background-dim">
    </span>
    <img decoding="async" width="2560" height="551" class="wp-block-cover__image-background wp-image-2244" alt=""
        src="<?php echo $bg_image; ?>" style="object-position:10% 54%"
        data-object-fit="cover" data-object-position="10% 54%"
        sizes="(max-width: 2560px) 100vw, 2560px">
    <div class="wp-block-cover__inner-container">
        <div class="wp-block-cover alignfull is-light contained-bg mb-0 pb-0">
            <span aria-hidden="true"
                class="wp-block-cover__background has-secondary-background-color has-background-dim-0 has-background-dim"></span>
            <img
                decoding="async" loading="lazy" width="2560" height="1449"
                class="wp-block-cover__image-background wp-image-2303" alt="" src="<?php echo $fade_image; ?>"
                style="object-position:50% 48%" data-object-fit="cover" data-object-position="50% 48%"
                sizes="(max-width: 2560px) 100vw, 2560px">
            <div class="wp-block-cover__inner-container">
                <div class="is-layout-flex wp-container-4 wp-block-columns are-vertically-aligned-center mb-0">
                    <div class="is-layout-flow wp-block-column is-vertically-aligned-center">
                        <figure
                            class="mx-auto justify-content-center d-flex align-items-center size-large is-resized mb-1">
                            <img decoding="async" loading="lazy" src="<?php echo $flag_image; ?>"
                                alt="" class="wp-image-2534" width="76" height="45"
                                sizes="(max-width: 76px) 100vw, 76px">
                        </figure>
                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer d-lg-block d-none"></div>
                        <h2 class="has-text-align-center underline h1"><span
                                style="text-decoration: underline;"><?php echo $title; ?></span></h2>
                        <p class="has-text-align-center has-medium-font-size"><?php echo $text; ?>&nbsp;</p>
                        <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
                        <p class="has-text-align-center underline"><a href="<?php echo $link_url; ?>" data-type="page" data-id="1509"><span
                                    style="text-decoration: underline;"><?php echo $link_text; ?></span></a>
                        </p>
                    </div>
                    <div class="is-layout-flow wp-block-column is-vertically-aligned-center mb-0">
                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy" width="850"
                                height="844" src="<?php echo $lid_image; ?>" alt="" class="wp-image-3288"
                                sizes="(max-width: 850px) 100vw, 850px"></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>