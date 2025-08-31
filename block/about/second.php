<?php
// Second About us Block (ACF fields)
$fields = get_fields();
?>
<div class="wp-block-cover alignfull is-light mt-0">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim" style="background-color:#717171"></span>
    <?php if (!empty($fields['bg_image'])): ?>
        <img decoding="async" loading="lazy" width="2000" height="430" class="wp-block-cover__image-background" alt=""
            src="<?php echo esc_url($fields['bg_image']['url']); ?>" style="object-position:9% 24%" data-object-fit="cover" data-object-position="9% 24%">
    <?php endif; ?>
    <div class="wp-block-cover__inner-container">
        <div class="is-layout-flex wp-block-columns pt-0 pt-lg-4 mb-0">
            <div class="is-layout-flow wp-block-column is-vertically-aligned-center">
                <?php if (!empty($fields['description_1'])): ?>
                    <p class="has-medium-font-size"><?php echo esc_html($fields['description_1']); ?></p>
                <?php endif; ?>
                <?php if (!empty($fields['description_2'])): ?>
                    <p class="has-medium-font-size"><?php echo esc_html($fields['description_2']); ?></p>
                <?php endif; ?>
            </div>
            <div class="is-layout-flow wp-block-column">
                <?php if (!empty($fields['image'])): ?>
                    <figure class="wp-block-image size-full">
                        <img decoding="async" loading="lazy" width="700" height="622" src="<?php echo esc_url($fields['image']['url']); ?>" alt="" />
                    </figure>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>