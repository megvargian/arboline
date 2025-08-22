<?php
// Hero Section Block
$fields = get_fields();
$video = $fields['hero_video'];
$heading = $fields['hero_heading'];
$button_text = $fields['hero_button_text'];
$button_url = $fields['hero_button_url'];
?>
<div class="wp-block-cover alignfull is-light intro position-relative" style="min-height:93vh">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#57420e"></span>
    <?php if ($video): ?>
        <video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?php echo esc_url($video); ?>" data-object-fit="cover"></video>
    <?php endif; ?>
    <div class="wp-block-cover__inner-container" style="margin-top: 0%;">
        <h2 class="d-inline-block intro-text has-white-color has-text-color has-background" style="background-color:#00000000">
            <?php echo esc_html($heading); ?>
        </h2>
        <div class="is-content-justification-center is-layout-flex wp-container-1 wp-block-buttons">
            <div class="wp-block-button has-custom-font-size has-medium-font-size">
                <a class="wp-block-button__link has-secondary-background-color has-background wp-element-button" href="<?php echo esc_url($button_url); ?>" style="border-radius:0px; color: #fff;">
                    <?php echo esc_html($button_text); ?>
                </a>
            </div>
        </div>
    </div>
    <div class="mouse-icon-wrap">
        <div class="mouse-icon">
            <div class="mouse-wheel"></div>
        </div>
    </div>
</div>
