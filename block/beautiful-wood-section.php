<?php
// Beautiful Wood Section Block
 $fields = get_fields();
 $background_image = $fields['beautiful_wood_bg'];
 $text = $fields['beautiful_wood_text'];
?>
<div class="wp-block-cover alignfull is-light has-parallax" style="min-height:60vh">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim"></span>
    <div role="img" class="wp-block-cover__image-background wp-image-3409 has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url($background_image); ?>)"></div>
    <div class="wp-block-cover__inner-container">
        <p class="has-text-align-center for-beautiful-wood has-white-color has-text-color"><?php echo esc_html($text); ?></p>
    </div>
</div>
