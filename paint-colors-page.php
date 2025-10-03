<?php
/**
 * Template Name: Paint Colors Page
 */
get_header();

// Get all products with tint attribute from category 21 (or your paint category)
$args = array(
    'post_type' => 'product',
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'term_id',
            'terms' => 21, // Change this to your paint category ID
        ),
    ),
);

$paint_products = new WP_Query($args);
$all_colors = array();

// Collect all unique tint colors from products
if ($paint_products->have_posts()) {
    while ($paint_products->have_posts()) {
        $paint_products->the_post();
        $product = wc_get_product(get_the_ID());

        if ($product && $product->is_type('variable')) {
            $variation_attributes = $product->get_variation_attributes();
            foreach ($variation_attributes as $attribute_name => $options) {
                if (stripos($attribute_name, 'tint') !== false) {
                    foreach ($options as $tint) {
                        $field_id = 'tint_image_' . sanitize_title($tint);
                        $image_id = get_post_meta(get_the_ID(), $field_id, true);
                        $image_url = $image_id ? wp_get_attachment_url($image_id) : '';

                        if ($image_url && !isset($all_colors[$tint])) {
                            $all_colors[$tint] = array(
                                'name' => $tint,
                                'image' => $image_url,
                                'product_id' => get_the_ID(),
                            );
                        }
                    }
                }
            }
        }
    }
    wp_reset_postdata();
}
?>

<div class="paint-colors-page">
    <div class="container-fluid px-4 py-5">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h1 class="page-title mb-3">Digital Color Wall</h1>
                <p class="page-description">Explore our complete collection of paint colors</p>
            </div>
        </div>

        <?php if (!empty($all_colors)) : ?>
        <div class="color-wall-overrides">
            <div class="color-grid-container">
                <div class="color-grid">
                    <?php foreach ($all_colors as $color) : ?>
                        <div class="color-swatch-item">
                            <a href="#" class="color-swatch-link" data-color="<?php echo esc_attr($color['name']); ?>" data-lightbox="color-preview" data-image="<?php echo esc_url($color['image']); ?>">
                                <div class="color-swatch" style="background-image: url('<?php echo esc_url($color['image']); ?>');">
                                    <div class="color-overlay">
                                        <span class="color-name"><?php echo esc_html($color['name']); ?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php else : ?>
        <div class="row">
            <div class="col-12 text-center py-5">
                <p>No colors available at the moment.</p>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

<style>
/* Color Wall Overrides - Sherwin-Williams inspired design */
.paint-colors-page {
    background-color: #f8f9fa;
    min-height: 100vh;
}

.page-title {
    font-size: 2.5rem;
    font-weight: 600;
    color: #000;
    letter-spacing: -0.5px;
}

.page-description {
    font-size: 1.125rem;
    color: #666;
    margin-bottom: 2rem;
}

.color-wall-overrides {
    width: 100%;
    max-width: 100%;
}

.color-grid-container {
    width: 100%;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.color-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
    gap: 8px;
    width: 100%;
}

@media (min-width: 768px) {
    .color-grid {
        grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
        gap: 10px;
    }
}

@media (min-width: 1200px) {
    .color-grid {
        grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
        gap: 12px;
    }
}

.color-swatch-item {
    position: relative;
    aspect-ratio: 1;
    width: 100%;
}

.color-swatch-link {
    display: block;
    width: 100%;
    height: 100%;
    text-decoration: none;
    border-radius: 4px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.color-swatch {
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.color-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 50%, transparent 100%);
    padding: 8px 6px 6px;
    opacity: 0;
    transition: opacity 0.3s ease;
    display: flex;
    align-items: flex-end;
    justify-content: center;
    min-height: 50%;
}

.color-name {
    color: #fff;
    font-size: 11px;
    font-weight: 500;
    text-align: center;
    line-height: 1.2;
    display: block;
    text-shadow: 0 1px 2px rgba(0,0,0,0.3);
    word-break: break-word;
}

@media (min-width: 768px) {
    .color-name {
        font-size: 12px;
    }
}

.color-swatch-link:hover .color-overlay {
    opacity: 1;
}

.color-swatch-link:hover .color-swatch {
    transform: scale(1.05);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    border-color: #333;
    z-index: 10;
}

/* Responsive adjustments */
@media (max-width: 767px) {
    .page-title {
        font-size: 1.75rem;
    }

    .color-grid-container {
        padding: 15px;
    }
}

/* Animation for color swatches on load */
.color-swatch-item {
    animation: fadeInUp 0.5s ease forwards;
    opacity: 0;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Stagger animation for each item */
<?php
$delay = 0;
foreach ($all_colors as $index => $color) :
    $delay = $index * 0.02;
    if ($delay > 1) $delay = 1;
?>
.color-swatch-item:nth-child(<?php echo $index + 1; ?>) {
    animation-delay: <?php echo $delay; ?>s;
}
<?php endforeach; ?>
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize lightbox for color preview
    const colorSwatchLinks = document.querySelectorAll('.color-swatch-link');

    colorSwatchLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const colorName = this.getAttribute('data-color');
            const colorImage = this.getAttribute('data-image');

            // You can integrate with your existing lightbox (GLightbox) or create a custom modal
            if (typeof GLightbox !== 'undefined') {
                const lightbox = GLightbox({
                    elements: [{
                        'href': colorImage,
                        'type': 'image',
                        'title': colorName
                    }]
                });
                lightbox.open();
            } else {
                // Fallback: open image in new tab
                window.open(colorImage, '_blank');
            }
        });
    });
});
</script>

<?php
get_footer();