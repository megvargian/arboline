<?php
// Interior Wood Finishes Section Block
$fields = get_fields();
$background_image = $fields['interior_wood_bg'];
$finishes_image = $fields['interior_wood_finishes_image'];
$title = $fields['interior_wood_title'];
$text = $fields['interior_wood_text'];
$products = $fields['interior_wood_products']; // Repeater field
?>
<div class="wp-block-cover alignfull is-light my-0" style="min-height:60vh"><span aria-hidden="true"
            class="wp-block-cover__background has-white-background-color has-background-dim-90 has-background-dim"></span><img
            decoding="async" loading="lazy" width="2560" height="551"
            class="wp-block-cover__image-background wp-image-2244" alt=""
            src="<?php echo esc_url($background_image); ?>" style="object-position:12% 50%"
            data-object-fit="cover" data-object-position="12% 50%"
            sizes="(max-width: 2560px) 100vw, 2560px">
    <div class="wp-block-cover__inner-container">
        <div class="is-layout-flow wp-block-group alignfull mb-0 has-background" style="background-color:#ffffff00">
            <div
                class="is-layout-flex wp-container-19 wp-block-columns mb-0 pt-0 pt-lg-5 pb-0 gap-2 flex-column-reverse flex-lg-row">
                <div class="is-layout-flow wp-block-column is-vertically-aligned-top">
                    <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                    <h3 class="has-text-align-center underline h1"><span
                            style="text-decoration: underline;"><?php echo esc_html($title); ?></span></h3>
                    <p class="has-text-align-center mb-lg-5 mb-4 has-medium-font-size"><?php echo esc_html($text); ?></p>

                    <?php if ($products): ?>
                        <?php foreach ($products as $product): ?>
                            <p class="has-text-align-center mb-1 mt-2 has-medium-font-size">
                                <a href="<?php echo esc_url($product['url']); ?>"><?php echo esc_html($product['name']); ?></a>
                            </p>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </div>
                <div class="is-layout-flow wp-block-column is-vertically-aligned-center">
                    <figure class="wp-block-image size-full mb-0"><img decoding="async" loading="lazy" width="896"
                            height="794" src="<?php echo $finishes_image; ?>" alt=""
                            class="wp-image-3481"
                            sizes="(max-width: 896px) 100vw, 896px"></figure>
                </div>
            </div>
        </div>
    </div>
</div>