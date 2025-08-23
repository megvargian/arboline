<?php
// wood background Section Block
$fields = get_fields();
$background_image = $fields['wood_bg'];
$bee_image = $fields['wood_bee_image'];
$title = $fields['wood_title'];
$text = $fields['wood_text'];
?>

<div class="wp-block-cover alignfull is-light my-0" style="min-height:60vh">
    <span aria-hidden="true"
            class="wp-block-cover__background has-gray-100-background-color has-background-dim-0 has-background-dim"></span>
    <img
            decoding="async" loading="lazy" width="2560" height="1128"
            class="wp-block-cover__image-background wp-image-30801" alt=""
            src="<?php echo $dir_iamges; ?>raw-ultra-bg-scaled-1.jpg" style="object-position:52% 100%"
            data-object-fit="cover" data-object-position="52% 100%"
            sizes="(max-width: 2560px) 100vw, 2560px">
    <div class="wp-block-cover__inner-container">
        <div class="is-layout-flex wp-container-12 wp-block-columns mb-0 pt-0 pt-lg-5 pb-0 w-100">
            <div class="is-layout-flow wp-block-column is-vertically-aligned-center pb-5" style="flex-basis:50%">
                <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>



                <figure class="wp-block-image aligncenter size-full is-resized mb-5"><a href="#"><img
                            decoding="async" loading="lazy" src="<?php echo $dir_iamges; ?>new-fiddes-ultra-raw.svg"
                            alt="" class="wp-image-30800" width="395" height="395"></a></figure>



                <p class="has-text-align-center underline"><span style="text-decoration: underline;"><a
                            href="#">DISCOVER
                            MORE</a></span></p>
            </div>



            <div class="is-layout-flow wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
                <figure class="wp-block-image aligncenter size-full is-resized mb-0 mt-n4"><a href="#"><img
                            decoding="async" loading="lazy"
                            src="<?php echo $dir_iamges; ?>Fiddes-HWO-2.5lt-3D_Ultra-Raw-min.png" alt=""
                            class="wp-image-30802" width="502" height="469"
                            sizes="(max-width: 502px) 100vw, 502px"></a></figure>
            </div>
        </div>
    </div>
</div>