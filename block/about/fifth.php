<?php
// Fifth About us Block (ACF fields)
$fields = get_fields();
?>
<?php if (!empty($fields['video'])): ?>
    <figure class="wp-block-video alignfull mb-0">
        <video autoplay loop muted src="<?php echo esc_url($fields['video']['url']); ?>" playsinline></video>
    </figure>
<?php endif; ?>