<?php
// Fervently British Section Block
$fields = get_fields();
$flag_image = $fields['british_flag_image'];
$title = $fields['british_title'];
$text = $fields['british_text'];
$link_url = $fields['british_link_url'];
$link_text = $fields['british_link_text'];
$lid_image = $fields['british_lid_image'];
?>
<div class="wp-block-cover alignfull is-light mt-0" style="min-height:60vh">
    <span aria-hidden="true" class="wp-block-cover__background has-white-background-color has-background-dim-90 has-background-dim"></span>
    <div class="wp-block-cover__inner-container">
        <div class="wp-block-cover alignfull is-light contained-bg mb-0 pb-0">
            <div class="wp-block-cover__inner-container">
                <div class="is-layout-flex wp-container-4 wp-block-columns are-vertically-aligned-center mb-0">
                    <div class="is-layout-flow wp-block-column is-vertically-aligned-center">
                        <figure class="mx-auto justify-content-center d-flex align-items-center size-large is-resized mb-1">
                            <?php if ($flag_image): ?>
                                <img src="<?php echo esc_url($flag_image); ?>" alt="British Flag" width="76" height="45">
                            <?php endif; ?>
                        </figure>
                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer d-lg-block d-none"></div>
                        <h2 class="has-text-align-center underline h1"><span style="text-decoration: underline;">
                            <?php echo esc_html($title); ?>
                        </span></h2>
                        <p class="has-text-align-center has-medium-font-size"><?php echo esc_html($text); ?></p>
                        <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
                        <p class="has-text-align-center underline">
                            <?php if ($link_url && $link_text): ?>
                                <a href="<?php echo esc_url($link_url); ?>"><span style="text-decoration: underline;">
                                    <?php echo esc_html($link_text); ?>
                                </span></a>
                            <?php endif; ?>
                        </p>
                    </div>
                    <div class="is-layout-flow wp-block-column is-vertically-aligned-center mb-0">
                        <figure class="wp-block-image size-full">
                            <?php if ($lid_image): ?>
                                <img src="<?php echo esc_url($lid_image); ?>" alt="Lid Image" width="850" height="844">
                            <?php endif; ?>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>