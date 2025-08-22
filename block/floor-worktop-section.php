<?php
// Floor & Worktop Wood Finishes Section Block
$fields = get_fields();
$background_image = $fields['floor_worktop_bg'];
$hwo_image = $fields['floor_worktop_hwo_image'];
$title = $fields['floor_worktop_title'];
$text = $fields['floor_worktop_text'];
$products = $fields['floor_worktop_products']; // Repeater field
?>
<div class="wp-block-cover alignfull is-light my-0" style="min-height:60vh">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim" style="background-color:#717171"></span>
    <img src="<?php echo esc_url($background_image); ?>" alt="Background" width="2000" height="430">
    <div class="wp-block-cover__inner-container">
        <div class="is-layout-flow wp-block-group alignfull mb-0">
            <div class="is-layout-flex wp-container-15 wp-block-columns are-vertically-aligned-top mb-0 pt-0 pt-lg-5 pb-0 gap-2">
                <div class="is-layout-flow wp-block-column is-vertically-aligned-top">
                    <figure><img src="<?php echo esc_url($hwo_image); ?>" alt="HWO" width="896" height="794"></figure>
                </div>
                <div class="is-layout-flow wp-block-column is-vertically-aligned-top">
                    <h3 class="has-text-align-center underline h1"><span style="text-decoration: underline;"><?php echo esc_html($title); ?></span></h3>
                    <p class="has-text-align-center mb-lg-4 mb-4 pt-2 has-black-color has-text-color has-medium-font-size"><?php echo esc_html($text); ?></p>
                    <?php if ($products): ?>
                        <?php foreach ($products as $product): ?>
                            <p class="has-text-align-center mb-1 mt-2 has-medium-font-size" style="line-height:1.5">
                                <a href="<?php echo esc_url($product['url']); ?>" data-type="product" data-id="<?php echo esc_attr($product['id']); ?>"><?php echo esc_html($product['name']); ?></a>
                            </p>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
