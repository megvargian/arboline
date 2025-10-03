<?php
/**
 * Template Name: Paint Colors Page
 */
get_header();

// Define color families organized like Sherwin-Williams
$color_families = array(
    'Red' => array(
        array('name' => 'SW 6321 - Red Bay', 'hex' => '#A4243B'),
        array('name' => 'SW 6322 - Lusty Red', 'hex' => '#A0343A'),
        array('name' => 'SW 6323 - Rave Red', 'hex' => '#9C2B2A'),
        array('name' => 'SW 6324 - Show Stopper', 'hex' => '#8E2A2B'),
        array('name' => 'SW 6325 - Antique Red', 'hex' => '#88272F'),
        array('name' => 'SW 6326 - Tanager', 'hex' => '#8B1A1A'),
        array('name' => 'SW 6327 - Red Theatre', 'hex' => '#761C1C'),
        array('name' => 'SW 2803 - Fireweed', 'hex' => '#D64550'),
        array('name' => 'SW 6328 - Enticing Red', 'hex' => '#D1495B'),
        array('name' => 'SW 6329 - Coral Rose', 'hex' => '#D4586A'),
        array('name' => 'SW 6330 - Eros Pink', 'hex' => '#D36B7A'),
        array('name' => 'SW 6331 - Memorable Rose', 'hex' => '#CE7684'),
        array('name' => 'SW 6332 - Rose Brocade', 'hex' => '#C5818E'),
    ),
    'Orange' => array(
        array('name' => 'SW 6333 - Quite Coral', 'hex' => '#DE6B4A'),
        array('name' => 'SW 6334 - Robust Orange', 'hex' => '#D45D2F'),
        array('name' => 'SW 6335 - Marquis Orange', 'hex' => '#C75527'),
        array('name' => 'SW 6336 - Rhumba Orange', 'hex' => '#BB4D24'),
        array('name' => 'SW 6337 - Husky Orange', 'hex' => '#A54521'),
        array('name' => 'SW 6338 - Copper Mountain', 'hex' => '#984020'),
        array('name' => 'SW 6339 - Rookwood Terra Cotta', 'hex' => '#8B3A1E'),
        array('name' => 'SW 6340 - Peppery', 'hex' => '#EB9474'),
        array('name' => 'SW 6341 - Persimmon', 'hex' => '#EC8B66'),
        array('name' => 'SW 6342 - Outgoing Orange', 'hex' => '#E97D55'),
        array('name' => 'SW 6343 - Emberglow', 'hex' => '#E16F43'),
        array('name' => 'SW 6344 - Reynard', 'hex' => '#D46134'),
    ),
    'Yellow' => array(
        array('name' => 'SW 6345 - Butterscotch', 'hex' => '#E6A846'),
        array('name' => 'SW 6346 - Tassel', 'hex' => '#DFA03E'),
        array('name' => 'SW 6347 - Gold Coast', 'hex' => '#D89535'),
        array('name' => 'SW 6348 - Saucy Gold', 'hex' => '#D08B2E'),
        array('name' => 'SW 6349 - Rookwood Amber', 'hex' => '#C88328'),
        array('name' => 'SW 6350 - Auric', 'hex' => '#B97A25'),
        array('name' => 'SW 6351 - Navel', 'hex' => '#A86F23'),
        array('name' => 'SW 6352 - Bee', 'hex' => '#F4C430'),
        array('name' => 'SW 6353 - Decisive Yellow', 'hex' => '#F4BE2C'),
        array('name' => 'SW 6354 - Funky Yellow', 'hex' => '#EFB720'),
        array('name' => 'SW 6355 - Forceful Orange', 'hex' => '#E9AD13'),
    ),
    'Green' => array(
        array('name' => 'SW 6418 - Gecko', 'hex' => '#8AB847'),
        array('name' => 'SW 6419 - Outlandish Green', 'hex' => '#7DAA3F'),
        array('name' => 'SW 6420 - Direct Green', 'hex' => '#6F9C38'),
        array('name' => 'SW 6421 - Grasshopper', 'hex' => '#628E32'),
        array('name' => 'SW 6422 - Talipot Palm', 'hex' => '#56802C'),
        array('name' => 'SW 6423 - Garden Spot', 'hex' => '#4A7227'),
        array('name' => 'SW 6424 - Arugula', 'hex' => '#3E6422'),
        array('name' => 'SW 6425 - Organic Green', 'hex' => '#8FBF87'),
        array('name' => 'SW 6426 - Witty Green', 'hex' => '#7FB87A'),
        array('name' => 'SW 6427 - Pickle', 'hex' => '#6FAF6D'),
    ),
    'Blue' => array(
        array('name' => 'SW 6494 - Regale Blue', 'hex' => '#007AB8'),
        array('name' => 'SW 6495 - Lovely Blue', 'hex' => '#0074B1'),
        array('name' => 'SW 6496 - Bluebird', 'hex' => '#006DAA'),
        array('name' => 'SW 6497 - Hyper Blue', 'hex' => '#0066A3'),
        array('name' => 'SW 6498 - Major Blue', 'hex' => '#005E9C'),
        array('name' => 'SW 6499 - Commodore', 'hex' => '#005795'),
        array('name' => 'SW 6500 - Loyal Blue', 'hex' => '#00508E'),
        array('name' => 'SW 6501 - Take Five', 'hex' => '#5FA8D3'),
        array('name' => 'SW 6502 - Resonant Blue', 'hex' => '#4DA0CF'),
        array('name' => 'SW 6503 - Jacaranda', 'hex' => '#3B98CB'),
    ),
    'Purple' => array(
        array('name' => 'SW 6545 - Passionate Purple', 'hex' => '#6F3B8C'),
        array('name' => 'SW 6546 - Impulsive Purple', 'hex' => '#683584'),
        array('name' => 'SW 6547 - Fully Purple', 'hex' => '#612F7C'),
        array('name' => 'SW 6548 - Izmir Purple', 'hex' => '#5A2A74'),
        array('name' => 'SW 6549 - Kimono Violet', 'hex' => '#53256C'),
        array('name' => 'SW 6550 - Eggplant', 'hex' => '#4C2164'),
        array('name' => 'SW 6551 - Concord Grape', 'hex' => '#451D5C'),
        array('name' => 'SW 6552 - Radiant Lilac', 'hex' => '#A77BB5'),
        array('name' => 'SW 6553 - Kismet', 'hex' => '#9E6FAD'),
        array('name' => 'SW 6554 - Plum Blossom', 'hex' => '#9563A5'),
    ),
    'Neutral' => array(
        array('name' => 'SW 7001 - Alabaster', 'hex' => '#EDEAE0'),
        array('name' => 'SW 7005 - Pure White', 'hex' => '#F3F2ED'),
        array('name' => 'SW 7006 - Extra White', 'hex' => '#F0EEE9'),
        array('name' => 'SW 7008 - Alabaster', 'hex' => '#EEEBE4'),
        array('name' => 'SW 7015 - Repose Gray', 'hex' => '#C7C6BD'),
        array('name' => 'SW 7029 - Agreeable Gray', 'hex' => '#D6D2C4'),
        array('name' => 'SW 7043 - Worldly Gray', 'hex' => '#B0ADA3'),
        array('name' => 'SW 7566 - Mindful Gray', 'hex' => '#C9C5BA'),
        array('name' => 'SW 7641 - Collonade Gray', 'hex' => '#BEBAA8'),
        array('name' => 'SW 9547 - Gray Screen', 'hex' => '#A8A299'),
    ),
    'Gray' => array(
        array('name' => 'SW 7012 - Creamy', 'hex' => '#E9E2D0'),
        array('name' => 'SW 7014 - Eider White', 'hex' => '#DDD8C7'),
        array('name' => 'SW 7016 - Mindful Gray', 'hex' => '#C7C5B8'),
        array('name' => 'SW 7017 - Dorian Gray', 'hex' => '#B2B0A4'),
        array('name' => 'SW 7018 - Dovetail', 'hex' => '#9D9B8F'),
        array('name' => 'SW 7019 - Gauntlet Gray', 'hex' => '#88867A'),
        array('name' => 'SW 7020 - Black Fox', 'hex' => '#737165'),
        array('name' => 'SW 7674 - Peppercorn', 'hex' => '#5E5C51'),
        array('name' => 'SW 7675 - Iron Ore', 'hex' => '#4A4944'),
        array('name' => 'SW 7676 - Urbane Bronze', 'hex' => '#363534'),
    ),
);
?>

<div class="paint-colors-page">
    <div class="container-fluid">
        <div class="color-wall-wrapper">

            <!-- Color Wall Header -->
            <div class="color-wall-header text-center py-4">
                <h1 class="page-title mb-2">Digital Color Wall</h1>
                <p class="page-subtitle">Please visit our paint color family pages »</p>
            </div>

            <!-- Color Wall Grid -->
            <div class="color-wall-overrides">
                <div class="color-families-grid">
                    <?php foreach ($color_families as $family_name => $colors) : ?>
                        <div class="color-family-column">
                            <?php foreach ($colors as $color) : ?>
                                <div class="color-swatch-item"
                                     data-color-name="<?php echo esc_attr($color['name']); ?>"
                                     data-color-hex="<?php echo esc_attr($color['hex']); ?>"
                                     onclick="openColorModal('<?php echo esc_js($color['name']); ?>', '<?php echo esc_js($color['hex']); ?>')">
                                    <div class="color-swatch" style="background-color: <?php echo esc_attr($color['hex']); ?>;">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Color Modal -->
<div id="colorModal" class="color-modal" onclick="closeColorModal()">
    <div class="color-modal-content" onclick="event.stopPropagation()">
        <span class="color-modal-close" onclick="closeColorModal()">&times;</span>
        <div class="color-modal-swatch" id="modalColorSwatch"></div>
        <div class="color-modal-info">
            <p class="color-modal-code" id="modalColorCode"></p>
            <h2 class="color-modal-name" id="modalColorName"></h2>
            <button class="color-modal-btn" id="modalViewDetails">View Details</button>
        </div>
    </div>
</div>

<style>
/* Paint Colors Page Main */
.paint-colors-page {
    background-color: #f5f5f5;
    min-height: 100vh;
    padding: 0;
}

.color-wall-wrapper {
    background: #fff;
    padding: 0;
}

/* Header */
.color-wall-header {
    background: #fff;
    border-bottom: 1px solid #e0e0e0;
}

.page-title {
    font-size: 2rem;
    font-weight: 400;
    color: #333;
    margin: 0;
    font-family: Arial, sans-serif;
}

.page-subtitle {
    font-size: 0.95rem;
    color: #0066cc;
    margin: 0;
    cursor: pointer;
}

.page-subtitle:hover {
    text-decoration: underline;
}

/* Color Wall Grid - Sherwin-Williams Style */
.color-wall-overrides {
    padding: 20px;
    background: #f8f8f8;
    overflow-x: auto;
}

.color-families-grid {
    display: flex;
    gap: 2px;
    min-width: fit-content;
    justify-content: center;
}

.color-family-column {
    display: flex;
    flex-direction: column;
    gap: 2px;
}

.color-swatch-item {
    width: 32px;
    height: 32px;
    cursor: pointer;
    position: relative;
    transition: all 0.2s ease;
}

.color-swatch {
    width: 100%;
    height: 100%;
    border: 1px solid rgba(0,0,0,0.1);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.color-swatch-item:hover {
    z-index: 10;
}

.color-swatch-item:hover .color-swatch {
    transform: scale(1.3);
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    border: 2px solid #fff;
}

/* Color Modal - Sherwin-Williams Style */
.color-modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.6);
    animation: fadeIn 0.3s ease;
}

.color-modal-content {
    position: relative;
    background-color: #fff;
    margin: 10% auto;
    width: 90%;
    max-width: 400px;
    border-radius: 0;
    box-shadow: 0 8px 32px rgba(0,0,0,0.3);
    animation: slideDown 0.3s ease;
    overflow: hidden;
}

.color-modal-close {
    position: absolute;
    right: 15px;
    top: 15px;
    font-size: 28px;
    font-weight: 300;
    color: #333;
    cursor: pointer;
    z-index: 10;
    background: rgba(255,255,255,0.9);
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: all 0.2s ease;
}

.color-modal-close:hover {
    background: #fff;
    color: #000;
}

.color-modal-swatch {
    width: 100%;
    height: 250px;
    position: relative;
}

.color-modal-info {
    padding: 30px;
    text-align: center;
    background: #fff;
}

.color-modal-code {
    font-size: 0.9rem;
    color: #666;
    margin: 0 0 10px 0;
    font-family: Arial, sans-serif;
}

.color-modal-name {
    font-size: 1.8rem;
    font-weight: 400;
    color: #333;
    margin: 0 0 25px 0;
    font-family: Georgia, serif;
    line-height: 1.3;
}

.color-modal-btn {
    background-color: transparent;
    color: #333;
    border: 2px solid #333;
    padding: 12px 40px;
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-family: Arial, sans-serif;
}

.color-modal-btn:hover {
    background-color: #333;
    color: #fff;
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideDown {
    from {
        transform: translateY(-50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .color-swatch-item {
        width: 28px;
        height: 28px;
    }

    .page-title {
        font-size: 1.5rem;
    }

    .color-modal-content {
        width: 95%;
        margin: 5% auto;
    }

    .color-modal-swatch {
        height: 200px;
    }

    .color-modal-name {
        font-size: 1.4rem;
    }
}

@media (max-width: 480px) {
    .color-swatch-item {
        width: 24px;
        height: 24px;
    }

    .color-modal-info {
        padding: 20px;
    }
}

/* Scrollbar styling for color wall */
.color-wall-overrides::-webkit-scrollbar {
    height: 8px;
}

.color-wall-overrides::-webkit-scrollbar-track {
    background: #f1f1f1;
}

.color-wall-overrides::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 4px;
}

.color-wall-overrides::-webkit-scrollbar-thumb:hover {
    background: #555;
}
</style>

<script>
// Open Color Modal
function openColorModal(colorName, colorHex) {
    const modal = document.getElementById('colorModal');
    const modalSwatch = document.getElementById('modalColorSwatch');
    const modalName = document.getElementById('modalColorName');
    const modalCode = document.getElementById('modalColorCode');

    // Extract color code from name (e.g., "SW 6321")
    const codeMatch = colorName.match(/SW\s*\d+/);
    const colorCode = codeMatch ? codeMatch[0] : '';
    const colorNameOnly = colorName.replace(/SW\s*\d+\s*-\s*/, '');

    modalSwatch.style.backgroundColor = colorHex;
    modalCode.textContent = colorCode;
    modalName.textContent = colorNameOnly;

    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
}

// Close Color Modal
function closeColorModal() {
    const modal = document.getElementById('colorModal');
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}

// Close modal on Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeColorModal();
    }
});

// View Details button action
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('modalViewDetails').addEventListener('click', function() {
        const colorName = document.getElementById('modalColorName').textContent;
        const colorCode = document.getElementById('modalColorCode').textContent;

        // You can redirect to a product page or handle the action as needed
        console.log('View details for:', colorCode, colorName);
        alert('View details for: ' + colorCode + ' - ' + colorName);

        // Example: Redirect to a specific page
        // window.location.href = '/color-details/?color=' + encodeURIComponent(colorCode);
    });
});
</script>

<?php
get_footer();