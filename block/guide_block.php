<?php
// Guide Block
$fields = get_fields();

?>
<div class="wp-block-articles-guides">
    <div class="how-to-guides row gx-2 gy-2 pt-3">
        <?php foreach ($fields['guides'] as $key => $guide) { ?>
            <div class="col-12 col-lg-3 video-guides--single">
                <div class="flex-column d-flex">
                    <a href="<?php echo $guide['youtubeurl']; ?>" data-gallery="videoguides"
                        class="glightbox-video overflow-hidden ratio ratio-16x9" target="_blank" rel="noopener">
                        <img decoding="async" src="<?php echo $guide['image']; ?>"
                            class="w-100">
                    </a>
                    <div class="w-100 bg-gray-100 p-4 d-flex flex-column justify-content-between">
                        <a href="<?php echo $guide['youtubeurl']; ?>" data-gallery="videoguides"
                            class="glightbox-video d-flex justify-content-between" target="_blank" rel="noopener">
                            <strong>WATCH GUIDE</strong>
                            <i class="bi bi-play-circle-fill fs-5"></i>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>