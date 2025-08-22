<?php
// Slider Section Block
$fields = get_fields();
$background_image = $fields['slider_bg'];
$slides = $fields['slider_slides']; // Repeater field: each slide has image, title, text
?>
<div class="wp-block-cover alignfull is-light my-0 py-3 py-lg-5">
    <span aria-hidden="true" class="wp-block-cover__background has-white-background-color has-background-dim-90 has-background-dim"></span>
    <img src="<?php echo esc_url($background_image); ?>" alt="Background" width="2560" height="551">
    <div class="wp-block-cover__inner-container">
        <div class="is-layout-flow wp-block-group alignfull mb-0 has-background" style="background-color:#ffffff00">
            <div class="wp-block-slider">
                <div class="content-slider">
                    <?php if ($slides): ?>
                        <?php foreach ($slides as $slide): ?>
                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                <div class="wp-block-columns mb-0">
                                    <div class="wp-block-column is-vertically-aligned-center">
                                        <figure><img src="<?php echo esc_url($slide['image']); ?>" alt="Slide Image" width="1024" height="732"></figure>
                                    </div>
                                    <div class="wp-block-column is-vertically-aligned-center px-4">
                                        <h3 class="has-text-align-center underline has-black-color has-text-color"><span style="text-decoration: underline;"><?php echo esc_html($slide['title']); ?></span></h3>
                                        <p class="has-text-align-center mb-0 px-4 has-black-color has-text-color has-medium-font-size"><?php echo esc_html($slide['text']); ?></p>
                                        <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
