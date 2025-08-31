<?php
// First About us Block (ACF fields)
$fields = get_fields();
?>
<div class="wp-block-cover alignfull is-light pt-3 pt-lg-5">
    <span aria-hidden="true" class="wp-block-cover__background has-white-background-color has-background-dim-90 has-background-dim"></span>
    <?php if (!empty($fields['background_image'])): ?>
        <img decoding="async" width="2560" height="551" class="wp-block-cover__image-background" alt=""
            src="<?php echo esc_url($fields['background_image']); ?>"
            style="object-position:12% 100%" data-object-fit="cover" data-object-position="12% 100%"
            sizes="(max-width: 2560px) 100vw, 2560px">
    <?php endif; ?>
    <div class="wp-block-cover__inner-container">
        <div class="is-layout-flow wp-block-group alignfull pt-0 pt-lg-2 pb-0 pb-lg-4">
            <div class="is-layout-flex wp-block-columns are-vertically-aligned-center pt-0 pb-0 flex-column-reverse flex-lg-row" style="padding-top:4em">
                <div class="is-layout-flow wp-block-column is-vertically-aligned-center">
                    <?php if (!empty($fields['image'])): ?>
                        <figure class="wp-block-image size-full mb-0">
                            <img decoding="async" loading="lazy" width="544" height="538" src="<?php echo esc_url($fields['image']['url']); ?>" alt="" />
                        </figure>
                    <?php endif; ?>
                </div>
                <div class="is-layout-flow wp-block-column is-vertically-aligned-center">
                    <?php if (!empty($fields['title'])): ?>
                        <h1 class="has-text-align-center underline"><span style="text-decoration: underline;"><?php echo esc_html($fields['title']); ?></span></h1>
                    <?php endif; ?>
                    <?php if (!empty($fields['description'])): ?>
                        <p class="has-medium-font-size"><?php echo esc_html($fields['description']); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>