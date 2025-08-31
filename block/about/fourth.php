<?php
// Fourth About us Block (ACF fields)
$fields = get_fields();
?>
<div class="wp-block-cover alignfull is-light mt-0">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim" style="background-color:#717171"></span>
    <?php if (!empty($fields['bg_image'])): ?>
        <img decoding="async" loading="lazy" width="2000" height="430" class="wp-block-cover__image-background" alt=""
            src="<?php echo esc_url($fields['bg_image']['url']); ?>" style="object-position:9% 24%" data-object-fit="cover" data-object-position="9% 24%">
    <?php endif; ?>
    <div class="wp-block-cover__inner-container">
        <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
        <?php if (!empty($fields['title'])): ?>
            <h3 class="has-text-align-center underline"><span style="text-decoration: underline;"><?php echo esc_html($fields['title']); ?></span></h3>
        <?php endif; ?>
        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
        <div class="is-layout-flex wp-block-columns">
            <?php for ($i = 1; $i <= 4; $i++): ?>
                <div class="is-layout-flow wp-block-column">
                    <?php if (!empty($fields['image_' . $i])): ?>
                        <figure class="wp-block-image size-full">
                            <img decoding="async" loading="lazy" width="600" height="600" src="<?php echo esc_url($fields['image_' . $i]['url']); ?>" alt="" />
                        </figure>
                    <?php endif; ?>
                    <?php if (!empty($fields['name_' . $i]) || !empty($fields['generation_' . $i])): ?>
                        <p class="has-medium-font-size">
                            <?php if (!empty($fields['name_' . $i])): ?><strong><?php echo esc_html($fields['name_' . $i]); ?></strong><?php endif; ?>
                            <?php if (!empty($fields['generation_' . $i])): ?><br><?php echo esc_html($fields['generation_' . $i]); ?><?php endif; ?>
                        </p>
                    <?php endif; ?>
                </div>
            <?php endfor; ?>
        </div>
        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
    </div>
</div>