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
    <img src="<?php echo esc_url($flag_image); ?>" alt="British Flag" width="76" height="45">
    <div class="wp-block-cover__inner-container">
        <h2 class="has-text-align-center underline h1"><span style="text-decoration: underline;"><?php echo esc_html($title); ?></span></h2>
        <p class="has-text-align-center has-medium-font-size"><?php echo esc_html($text); ?></p>
        <p class="has-text-align-center underline"><a href="<?php echo esc_url($link_url); ?>"><span style="text-decoration: underline;"><?php echo esc_html($link_text); ?></span></a></p>
        <img src="<?php echo esc_url($lid_image); ?>" alt="Lid Image" width="850" height="844">
    </div>
</div>
