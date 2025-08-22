<?php
// Full Stop Section Block
$fields = get_fields();
$background_image = $fields['full_stop_bg'];
$red_image = $fields['full_stop_red_image'];
$h2o_image = $fields['full_stop_h2o_image'];
$link_url = $fields['full_stop_link_url'];
$link_text = $fields['full_stop_link_text'];
$new_h2o_image = $fields['full_stop_new_h2o_image'];
?>
<div class="wp-block-cover alignfull is-light my-0" style="min-height:60vh"><span aria-hidden="true"
        class="wp-block-cover__background has-white-background-color has-background-dim-80 has-background-dim"></span><img
        decoding="async" loading="lazy" width="1800" height="1200"
        class="wp-block-cover__image-background wp-image-3471" alt=""
        src="<?php echo $background_image; ?>" data-object-fit="cover"
        sizes="(max-width: 1800px) 100vw, 1800px">
    <div class="wp-block-cover__inner-container">
        <div class="is-layout-flow wp-block-group alignfull mb-0 full-stop-group has-background"
            style="background-color:#ffffff00">
            <div class="is-layout-flex wp-container-8 wp-block-columns mb-0 pt-0 pt-lg-5 pb-0 gap-2">
                <div class="is-layout-flow wp-block-column text-center mb-0 mt-0 py-0" style="flex-basis:50%">
                    <div
                        class="is-content-justification-center is-nowrap is-layout-flex wp-container-5 wp-block-group">
                        <figure class="wp-block-image aligncenter size-full is-resized my-0"><a href=""><img
                                    decoding="async" loading="lazy"
                                    src="<?php echo $red_image; ?>"
                                    alt="" class="wp-image-32061" width="549" height="626"></a></figure>



                        <figure class="wp-block-image aligncenter size-full is-resized my-0"><a href=""><img
                                    decoding="async" loading="lazy"
                                    src="<?php echo $h2o_image; ?>" alt=""
                                    class="wp-image-32059" width="732" height="835"></a></figure>
                    </div>



                    <p class="has-text-align-center underline pe-5 mt-n3 mt-md-4"><a href="<?php echo esc_url($link_url); ?>"><span
                                style="text-decoration: underline;"><?php echo esc_html($link_text); ?></span></a></p>
                </div>



                <div class="is-layout-flow wp-block-column is-vertically-aligned-center py-0 my-0"
                    style="flex-basis:50%">
                    <figure class="wp-block-image aligncenter size-full is-resized mt-4 pb-0 mt-md-n5 pb-md-5"><img
                            decoding="async" loading="lazy"
                            src="<?php echo esc_url($new_h2o_image); ?>" alt=""
                            class="wp-image-32063" width="395" height="395"></figure>
                </div>
            </div>
        </div>
        <style>
        .full-stop-group {
            width: 1100px !important;
        }

        @media screen and (max-width: 991px) {
            .full-stop-group .wp-block-columns {
                flex-direction: column-reverse;
            }
        }
        </style>
    </div>
</div>