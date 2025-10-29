<?php
/**
 * Template Name: Paint Color Picker Page
 */
get_header();
?>
<section>
    <div>
        <header class="header">
            <h1><?php the_title(); ?></h1>
            <p class="subtitle">Explore and discover your perfect color</p>
        </header>

        <div class="controls">
            <div class="color-families">
                <button class="family-btn active" data-family="all">All Colors</button>
                <button class="family-btn" data-family="reds">Reds</button>
                <button class="family-btn" data-family="oranges">Oranges</button>
                <button class="family-btn" data-family="yellows">Yellows</button>
                <button class="family-btn" data-family="greens">Greens</button>
                <button class="family-btn" data-family="blues">Blues</button>
                <button class="family-btn" data-family="purples">Purples</button>
                <button class="family-btn" data-family="neutrals">Neutrals</button>
            </div>
        </div>

        <div class="color-wall" id="colorWall"></div>

        <div class="modal" id="colorModal">
            <div class="modal-content">
                <button class="close-btn" id="closeModal">&times;</button>
                <div class="modal-body">
                    <div class="color-preview-section">
                        <!-- Swiper Slider for Images -->
                        <div class="swiper colorImageSwiper">
                            <div class="swiper-wrapper" id="modalColorImagesWrapper">
                                <!-- Default color preview if no images -->
                                <div class="swiper-slide">
                                    <div class="color-preview-default" id="modalColorPreview"></div>
                                </div>
                            </div>
                            <!-- Navigation arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="color-details">
                        <h2 id="modalColorName"></h2>
                        <p class="color-code" id="modalColorCode"></p>
                        <div class="color-info">
                            <h3>COLOR FAMILY</h3>
                            <p id="modalColorFamily"></p>
                        </div>
                        <div class="color-info rgb-values-section">
                            <h3>RGB VALUES</h3>
                            <div class="rgb-swatches" id="modalRGBSwatches">
                                <!-- Related color swatches will be added here -->
                            </div>
                        </div>
                        <div class="coordinates">
                            <div class="coordinate-item">
                                <span class="label">LRV</span>
                                <span class="value" id="modalColorLRV"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Filter Section -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12">
                <h2 class="filter-section-title">Find Products by Color</h2>
                <div class="color-search-wrapper">
                    <input type="text" id="colorSearchInput" class="color-search-input" placeholder="Search by color name (e.g., Real Red, SW 6868)...">
                </div>
            </div>
        </div>
        <div class="row mt-4" id="filteredProductsContainer">
            <!-- Products will be loaded here via AJAX -->
        </div>
        <div id="noProductsMessage" style="display: none;" class="col-12 text-center py-5">
            <p class="no-products-text">No products found matching your search.</p>
        </div>
        <div id="loadingSpinner" style="display: none;" class="col-12 text-center py-5">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
</section>
<script>
    jQuery(document).ready(function($) {
        <?php
        // Get colors from ACF
        $acf_colors = get_field('paint_colors', 'option');
        $color_data_array = array();

        if ($acf_colors && is_array($acf_colors) && !empty($acf_colors)) {
            // Use ACF colors if available
            foreach ($acf_colors as $color) {
                $color_images = array();
                if (!empty($color['color_images']) && is_array($color['color_images'])) {
                    foreach ($color['color_images'] as $image) {
                        if (is_array($image) && isset($image['url'])) {
                            $color_images[] = array(
                                'url' => $image['url'],
                                'alt' => isset($image['alt']) ? $image['alt'] : $color['color_name'],
                                'title' => isset($image['title']) ? $image['title'] : '',
                            );
                        }
                    }
                }

                // Process related colors
                $related_colors = array();
                if (!empty($color['related_colors']) && is_array($color['related_colors'])) {
                    foreach ($color['related_colors'] as $related) {
                        $related_colors[] = array(
                            'hex' => !empty($related['hex_color']) ? $related['hex_color'] : '#000000',
                            'code' => !empty($related['color_code']) ? $related['color_code'] : '',
                        );
                    }
                }

                $color_data_array[] = array(
                    'name' => !empty($color['color_name']) ? $color['color_name'] : '',
                    'code' => !empty($color['color_code']) ? $color['color_code'] : '',
                    'hex' => !empty($color['hex_color']) ? $color['hex_color'] : '#ffffff',
                    'family' => !empty($color['color_family']) ? $color['color_family'] : 'neutrals',
                    'color_group' => !empty($color['color_group']) ? $color['color_group'] : '',
                    'lrv' => !empty($color['lrv_value']) ? intval($color['lrv_value']) : 0,
                    'images' => $color_images,
                    'related_colors' => $related_colors,
                );
            }
        } else {
            // Default colors if ACF is empty (200+ colors)
            $color_data_array = array(
                // REDS (25 colors)
                array('name' => 'Real Red', 'code' => 'SW 6868', 'hex' => '#C8102E', 'family' => 'reds', 'rgb' => array(200, 16, 46), 'lrv' => 12),
                array('name' => 'Heartthrob', 'code' => 'SW 6866', 'hex' => '#D4424F', 'family' => 'reds', 'rgb' => array(212, 66, 79), 'lrv' => 18),
                array('name' => 'Ablaze', 'code' => 'SW 6870', 'hex' => '#B5202E', 'family' => 'reds', 'rgb' => array(181, 32, 46), 'lrv' => 9),
                array('name' => 'Red Bay', 'code' => 'SW 6321', 'hex' => '#8B3A3D', 'family' => 'reds', 'rgb' => array(139, 58, 61), 'lrv' => 7),
                array('name' => 'Fireweed', 'code' => 'SW 6328', 'hex' => '#A4484B', 'family' => 'reds', 'rgb' => array(164, 72, 75), 'lrv' => 10),
                array('name' => 'Coral Rose', 'code' => 'SW 9004', 'hex' => '#E77B7F', 'family' => 'reds', 'rgb' => array(231, 123, 127), 'lrv' => 32),
                array('name' => 'Begonia', 'code' => 'SW 6599', 'hex' => '#D0555A', 'family' => 'reds', 'rgb' => array(208, 85, 90), 'lrv' => 16),
                array('name' => 'Show Stopper', 'code' => 'SW 7588', 'hex' => '#BD3E43', 'family' => 'reds', 'rgb' => array(189, 62, 67), 'lrv' => 11),
                array('name' => 'Positive Red', 'code' => 'SW 6871', 'hex' => '#D73C38', 'family' => 'reds', 'rgb' => array(215, 60, 56), 'lrv' => 15),
                array('name' => 'Lusty Red', 'code' => 'SW 6863', 'hex' => '#BB2D3B', 'family' => 'reds', 'rgb' => array(187, 45, 59), 'lrv' => 10),
                array('name' => 'Red Tomato', 'code' => 'SW 6607', 'hex' => '#D23D3E', 'family' => 'reds', 'rgb' => array(210, 61, 62), 'lrv' => 14),
                array('name' => 'Tanager', 'code' => 'SW 6601', 'hex' => '#C74343', 'family' => 'reds', 'rgb' => array(199, 67, 67), 'lrv' => 13),
                array('name' => 'Antique Red', 'code' => 'SW 7587', 'hex' => '#8B4049', 'family' => 'reds', 'rgb' => array(139, 64, 73), 'lrv' => 8),
                array('name' => 'Rookwood Red', 'code' => 'SW 2802', 'hex' => '#7A3C3F', 'family' => 'reds', 'rgb' => array(122, 60, 63), 'lrv' => 6),
                array('name' => 'Wild Currant', 'code' => 'SW 7583', 'hex' => '#6B3E47', 'family' => 'reds', 'rgb' => array(107, 62, 71), 'lrv' => 6),
                array('name' => 'Fine Wine', 'code' => 'SW 6307', 'hex' => '#683C42', 'family' => 'reds', 'rgb' => array(104, 60, 66), 'lrv' => 5),
                array('name' => 'Burgundy', 'code' => 'SW 6300', 'hex' => '#5C2E35', 'family' => 'reds', 'rgb' => array(92, 46, 53), 'lrv' => 4),
                array('name' => 'Red Theatre', 'code' => 'SW 7584', 'hex' => '#7D2E3D', 'family' => 'reds', 'rgb' => array(125, 46, 61), 'lrv' => 5),
                array('name' => 'Cherry Tomato', 'code' => 'SW 6864', 'hex' => '#CE4257', 'family' => 'reds', 'rgb' => array(206, 66, 87), 'lrv' => 14),
                array('name' => 'Coral Bells', 'code' => 'SW 6593', 'hex' => '#E6757C', 'family' => 'reds', 'rgb' => array(230, 117, 124), 'lrv' => 30),
                array('name' => 'Memorable Rose', 'code' => 'SW 6311', 'hex' => '#D67383', 'family' => 'reds', 'rgb' => array(214, 115, 131), 'lrv' => 28),
                array('name' => 'Rose', 'code' => 'SW 6290', 'hex' => '#CC6D7A', 'family' => 'reds', 'rgb' => array(204, 109, 122), 'lrv' => 24),
                array('name' => 'Foxy', 'code' => 'SW 6333', 'hex' => '#B55C68', 'family' => 'reds', 'rgb' => array(181, 92, 104), 'lrv' => 18),
                array('name' => 'Bravado Red', 'code' => 'SW 6320', 'hex' => '#9B424F', 'family' => 'reds', 'rgb' => array(155, 66, 79), 'lrv' => 10),
                array('name' => 'Luxurious Red', 'code' => 'SW 6314', 'hex' => '#8D3E4C', 'family' => 'reds', 'rgb' => array(141, 62, 76), 'lrv' => 8),

                // ORANGES (25 colors)
                array('name' => 'Energetic Orange', 'code' => 'SW 6880', 'hex' => '#E67635', 'family' => 'oranges', 'rgb' => array(230, 118, 53), 'lrv' => 24),
                array('name' => 'Copper Harbor', 'code' => 'SW 6634', 'hex' => '#C46D43', 'family' => 'oranges', 'rgb' => array(196, 109, 67), 'lrv' => 18),
                array('name' => 'Knockout Orange', 'code' => 'SW 6885', 'hex' => '#D95D2A', 'family' => 'oranges', 'rgb' => array(217, 93, 42), 'lrv' => 16),
                array('name' => 'Obstinate Orange', 'code' => 'SW 6884', 'hex' => '#ED7D3A', 'family' => 'oranges', 'rgb' => array(237, 125, 58), 'lrv' => 28),
                array('name' => 'Outgoing Orange', 'code' => 'SW 6641', 'hex' => '#F5935D', 'family' => 'oranges', 'rgb' => array(245, 147, 93), 'lrv' => 38),
                array('name' => 'Navel', 'code' => 'SW 6887', 'hex' => '#F69349', 'family' => 'oranges', 'rgb' => array(246, 147, 73), 'lrv' => 36),
                array('name' => 'Copper Wire', 'code' => 'SW 7707', 'hex' => '#B86841', 'family' => 'oranges', 'rgb' => array(184, 104, 65), 'lrv' => 15),
                array('name' => 'Rhumba Orange', 'code' => 'SW 6642', 'hex' => '#E9945A', 'family' => 'oranges', 'rgb' => array(233, 148, 90), 'lrv' => 35),
                array('name' => 'Armagnac', 'code' => 'SW 6354', 'hex' => '#9B5838', 'family' => 'oranges', 'rgb' => array(155, 88, 56), 'lrv' => 12),
                array('name' => 'Copper Pot', 'code' => 'SW 7709', 'hex' => '#AA6244', 'family' => 'oranges', 'rgb' => array(170, 98, 68), 'lrv' => 14),
                array('name' => 'Yam', 'code' => 'SW 6643', 'hex' => '#D98659', 'family' => 'oranges', 'rgb' => array(217, 134, 89), 'lrv' => 32),
                array('name' => 'Tango', 'code' => 'SW 6649', 'hex' => '#E89969', 'family' => 'oranges', 'rgb' => array(232, 153, 105), 'lrv' => 40),
                array('name' => 'Sunset', 'code' => 'SW 6626', 'hex' => '#F6A06A', 'family' => 'oranges', 'rgb' => array(246, 160, 106), 'lrv' => 45),
                array('name' => 'Inventive Orange', 'code' => 'SW 6633', 'hex' => '#F19754', 'family' => 'oranges', 'rgb' => array(241, 151, 84), 'lrv' => 42),
                array('name' => 'Amber Wave', 'code' => 'SW 6657', 'hex' => '#EEA26C', 'family' => 'oranges', 'rgb' => array(238, 162, 108), 'lrv' => 46),
                array('name' => 'Chivalry Copper', 'code' => 'SW 6353', 'hex' => '#955237', 'family' => 'oranges', 'rgb' => array(149, 82, 55), 'lrv' => 10),
                array('name' => 'Rookwood Terra Cotta', 'code' => 'SW 2803', 'hex' => '#A85C3F', 'family' => 'oranges', 'rgb' => array(168, 92, 63), 'lrv' => 13),
                array('name' => 'Truepenny', 'code' => 'SW 6355', 'hex' => '#A26548', 'family' => 'oranges', 'rgb' => array(162, 101, 72), 'lrv' => 16),
                array('name' => 'Persimmon', 'code' => 'SW 6339', 'hex' => '#D87E4F', 'family' => 'oranges', 'rgb' => array(216, 126, 79), 'lrv' => 28),
                array('name' => 'Copper Mountain', 'code' => 'SW 6356', 'hex' => '#B37656', 'family' => 'oranges', 'rgb' => array(179, 118, 86), 'lrv' => 22),
                array('name' => 'Autumnal', 'code' => 'SW 6361', 'hex' => '#C08961', 'family' => 'oranges', 'rgb' => array(192, 137, 97), 'lrv' => 30),
                array('name' => 'Chronicle Gold', 'code' => 'SW 6655', 'hex' => '#E1996A', 'family' => 'oranges', 'rgb' => array(225, 153, 106), 'lrv' => 44),
                array('name' => 'Folksy Gold', 'code' => 'SW 6360', 'hex' => '#D69865', 'family' => 'oranges', 'rgb' => array(214, 152, 101), 'lrv' => 38),
                array('name' => 'Bakelite Gold', 'code' => 'SW 6368', 'hex' => '#CCA374', 'family' => 'oranges', 'rgb' => array(204, 163, 116), 'lrv' => 42),
                array('name' => 'Viva Gold', 'code' => 'SW 6367', 'hex' => '#D8AC78', 'family' => 'oranges', 'rgb' => array(216, 172, 120), 'lrv' => 48),

                // YELLOWS (25 colors)
                array('name' => 'Lemon Twist', 'code' => 'SW 6909', 'hex' => '#F9C846', 'family' => 'yellows', 'rgb' => array(249, 200, 70), 'lrv' => 62),
                array('name' => 'Daisy', 'code' => 'SW 6910', 'hex' => '#F5B841', 'family' => 'yellows', 'rgb' => array(245, 184, 65), 'lrv' => 54),
                array('name' => 'Decisive Yellow', 'code' => 'SW 6902', 'hex' => '#F4B436', 'family' => 'yellows', 'rgb' => array(244, 180, 54), 'lrv' => 52),
                array('name' => 'Cheerful', 'code' => 'SW 6903', 'hex' => '#F1A82F', 'family' => 'yellows', 'rgb' => array(241, 168, 47), 'lrv' => 46),
                array('name' => 'Goldenrod', 'code' => 'SW 6677', 'hex' => '#E6A532', 'family' => 'yellows', 'rgb' => array(230, 165, 50), 'lrv' => 44),
                array('name' => 'Solaria', 'code' => 'SW 6688', 'hex' => '#F2C75C', 'family' => 'yellows', 'rgb' => array(242, 199, 92), 'lrv' => 60),
                array('name' => 'Bee', 'code' => 'SW 6683', 'hex' => '#EBB737', 'family' => 'yellows', 'rgb' => array(235, 183, 55), 'lrv' => 54),
                array('name' => 'Gambol Gold', 'code' => 'SW 6690', 'hex' => '#E8B954', 'family' => 'yellows', 'rgb' => array(232, 185, 84), 'lrv' => 52),
                array('name' => 'Citrus', 'code' => 'SW 6906', 'hex' => '#F5C75D', 'family' => 'yellows', 'rgb' => array(245, 199, 93), 'lrv' => 58),
                array('name' => 'Confident Yellow', 'code' => 'SW 6911', 'hex' => '#F5C94B', 'family' => 'yellows', 'rgb' => array(245, 201, 75), 'lrv' => 60),
                array('name' => 'Funky Yellow', 'code' => 'SW 6913', 'hex' => '#F4D049', 'family' => 'yellows', 'rgb' => array(244, 208, 73), 'lrv' => 64),
                array('name' => 'Forsythia', 'code' => 'SW 6907', 'hex' => '#F0C447', 'family' => 'yellows', 'rgb' => array(240, 196, 71), 'lrv' => 58),
                array('name' => 'Brittlebush', 'code' => 'SW 6684', 'hex' => '#E7B747', 'family' => 'yellows', 'rgb' => array(231, 183, 71), 'lrv' => 52),
                array('name' => 'Butterfield', 'code' => 'SW 6676', 'hex' => '#E2A93D', 'family' => 'yellows', 'rgb' => array(226, 169, 61), 'lrv' => 46),
                array('name' => 'Golden Rule', 'code' => 'SW 6383', 'hex' => '#D9A23D', 'family' => 'yellows', 'rgb' => array(217, 162, 61), 'lrv' => 42),
                array('name' => 'Nugget', 'code' => 'SW 6697', 'hex' => '#D09A33', 'family' => 'yellows', 'rgb' => array(208, 154, 51), 'lrv' => 38),
                array('name' => 'Glitzy Gold', 'code' => 'SW 6691', 'hex' => '#D9AC4F', 'family' => 'yellows', 'rgb' => array(217, 172, 79), 'lrv' => 48),
                array('name' => 'Alchemy', 'code' => 'SW 6395', 'hex' => '#CFAA5B', 'family' => 'yellows', 'rgb' => array(207, 170, 91), 'lrv' => 46),
                array('name' => 'Ceremonial Gold', 'code' => 'SW 6382', 'hex' => '#C69D48', 'family' => 'yellows', 'rgb' => array(198, 157, 72), 'lrv' => 40),
                array('name' => 'Brassy', 'code' => 'SW 6410', 'hex' => '#BCA15B', 'family' => 'yellows', 'rgb' => array(188, 161, 91), 'lrv' => 42),
                array('name' => 'Antiquity', 'code' => 'SW 6402', 'hex' => '#B79A5A', 'family' => 'yellows', 'rgb' => array(183, 154, 90), 'lrv' => 38),
                array('name' => 'Fervent Brass', 'code' => 'SW 6405', 'hex' => '#B29955', 'family' => 'yellows', 'rgb' => array(178, 153, 85), 'lrv' => 36),
                array('name' => 'Edgy Gold', 'code' => 'SW 6409', 'hex' => '#AA9451', 'family' => 'yellows', 'rgb' => array(170, 148, 81), 'lrv' => 34),
                array('name' => 'Sconce Gold', 'code' => 'SW 6398', 'hex' => '#A28D4D', 'family' => 'yellows', 'rgb' => array(162, 141, 77), 'lrv' => 32),
                array('name' => 'Renwick Olive', 'code' => 'SW 2815', 'hex' => '#9A8748', 'family' => 'yellows', 'rgb' => array(154, 135, 72), 'lrv' => 28),

                // GREENS (30 colors)
                array('name' => 'Verdant', 'code' => 'SW 6713', 'hex' => '#3A7F3E', 'family' => 'greens', 'rgb' => array(58, 127, 62), 'lrv' => 15),
                array('name' => 'Organic Green', 'code' => 'SW 6732', 'hex' => '#4A8C4B', 'family' => 'greens', 'rgb' => array(74, 140, 75), 'lrv' => 18),
                array('name' => 'Jolly Green', 'code' => 'SW 6931', 'hex' => '#28834E', 'family' => 'greens', 'rgb' => array(40, 131, 78), 'lrv' => 14),
                array('name' => 'Greens', 'code' => 'SW 6748', 'hex' => '#3E7D5C', 'family' => 'greens', 'rgb' => array(62, 125, 92), 'lrv' => 14),
                array('name' => 'Derbyshire', 'code' => 'SW 6741', 'hex' => '#2F6B4E', 'family' => 'greens', 'rgb' => array(47, 107, 78), 'lrv' => 10),
                array('name' => 'Kilkenny', 'code' => 'SW 6740', 'hex' => '#316D50', 'family' => 'greens', 'rgb' => array(49, 109, 80), 'lrv' => 11),
                array('name' => 'Jade Dragon', 'code' => 'SW 9129', 'hex' => '#4A9872', 'family' => 'greens', 'rgb' => array(74, 152, 114), 'lrv' => 20),
                array('name' => 'Eco Green', 'code' => 'SW 6739', 'hex' => '#3D8966', 'family' => 'greens', 'rgb' => array(61, 137, 102), 'lrv' => 16),
                array('name' => 'Espalier', 'code' => 'SW 6734', 'hex' => '#5D9C6C', 'family' => 'greens', 'rgb' => array(93, 156, 108), 'lrv' => 24),
                array('name' => 'Pickle', 'code' => 'SW 6725', 'hex' => '#6FA67A', 'family' => 'greens', 'rgb' => array(111, 166, 122), 'lrv' => 28),
                array('name' => 'Lounge Green', 'code' => 'SW 6444', 'hex' => '#7CAF7F', 'family' => 'greens', 'rgb' => array(124, 175, 127), 'lrv' => 32),
                array('name' => 'Witty Green', 'code' => 'SW 6929', 'hex' => '#88B888', 'family' => 'greens', 'rgb' => array(136, 184, 136), 'lrv' => 36),
                array('name' => 'Nurture Green', 'code' => 'SW 6451', 'hex' => '#92C096', 'family' => 'greens', 'rgb' => array(146, 192, 150), 'lrv' => 40),
                array('name' => 'Haven', 'code' => 'SW 6437', 'hex' => '#9CC9A0', 'family' => 'greens', 'rgb' => array(156, 201, 160), 'lrv' => 44),
                array('name' => 'Romaine', 'code' => 'SW 6730', 'hex' => '#A5D3A8', 'family' => 'greens', 'rgb' => array(165, 211, 168), 'lrv' => 48),
                array('name' => 'Kiwi', 'code' => 'SW 6737', 'hex' => '#AAD9AC', 'family' => 'greens', 'rgb' => array(170, 217, 172), 'lrv' => 52),
                array('name' => 'Jargon Jade', 'code' => 'SW 6753', 'hex' => '#89AE8F', 'family' => 'greens', 'rgb' => array(137, 174, 143), 'lrv' => 34),
                array('name' => 'Spearmint', 'code' => 'SW 6465', 'hex' => '#6FB899', 'family' => 'greens', 'rgb' => array(111, 184, 153), 'lrv' => 36),
                array('name' => 'Lark Green', 'code' => 'SW 6745', 'hex' => '#5CAF91', 'family' => 'greens', 'rgb' => array(92, 175, 145), 'lrv' => 32),
                array('name' => 'Julep', 'code' => 'SW 6746', 'hex' => '#76C1A3', 'family' => 'greens', 'rgb' => array(118, 193, 163), 'lrv' => 40),
                array('name' => 'Vegan', 'code' => 'SW 6738', 'hex' => '#84CBAD', 'family' => 'greens', 'rgb' => array(132, 203, 173), 'lrv' => 44),
                array('name' => 'Aqueduct', 'code' => 'SW 6758', 'hex' => '#90D4B6', 'family' => 'greens', 'rgb' => array(144, 212, 182), 'lrv' => 48),
                array('name' => 'Bottled Green', 'code' => 'SW 6730', 'hex' => '#365E4D', 'family' => 'greens', 'rgb' => array(54, 94, 77), 'lrv' => 8),
                array('name' => 'Billiard Green', 'code' => 'SW 0016', 'hex' => '#2B5641', 'family' => 'greens', 'rgb' => array(43, 86, 65), 'lrv' => 6),
                array('name' => 'Evergreens', 'code' => 'SW 2814', 'hex' => '#224D39', 'family' => 'greens', 'rgb' => array(34, 77, 57), 'lrv' => 5),
                array('name' => 'Isle of Pines', 'code' => 'SW 6461', 'hex' => '#1F4A36', 'family' => 'greens', 'rgb' => array(31, 74, 54), 'lrv' => 4),
                array('name' => 'Rookwood Dark Green', 'code' => 'SW 2816', 'hex' => '#1C4532', 'family' => 'greens', 'rgb' => array(28, 69, 50), 'lrv' => 3),
                array('name' => 'Hunt Club', 'code' => 'SW 6468', 'hex' => '#1A3F2E', 'family' => 'greens', 'rgb' => array(26, 63, 46), 'lrv' => 3),
                array('name' => 'Shamrock', 'code' => 'SW 6454', 'hex' => '#54A86D', 'family' => 'greens', 'rgb' => array(84, 168, 109), 'lrv' => 28),
                array('name' => 'Straightforward Green', 'code' => 'SW 6935', 'hex' => '#3C9E5C', 'family' => 'greens', 'rgb' => array(60, 158, 92), 'lrv' => 22),

                // BLUES (30 colors)
                array('name' => 'Loyal Blue', 'code' => 'SW 6510', 'hex' => '#004C97', 'family' => 'blues', 'rgb' => array(0, 76, 151), 'lrv' => 8),
                array('name' => 'Blue Chip', 'code' => 'SW 6959', 'hex' => '#2B73A6', 'family' => 'blues', 'rgb' => array(43, 115, 166), 'lrv' => 14),
                array('name' => 'Secure Blue', 'code' => 'SW 6508', 'hex' => '#3B6D9B', 'family' => 'blues', 'rgb' => array(59, 109, 155), 'lrv' => 12),
                array('name' => 'Dignity Blue', 'code' => 'SW 6804', 'hex' => '#2D5F8D', 'family' => 'blues', 'rgb' => array(45, 95, 141), 'lrv' => 10),
                array('name' => 'Adriatic Sea', 'code' => 'SW 6790', 'hex' => '#326B8C', 'family' => 'blues', 'rgb' => array(50, 107, 140), 'lrv' => 12),
                array('name' => 'Distance', 'code' => 'SW 6243', 'hex' => '#5B8CAD', 'family' => 'blues', 'rgb' => array(91, 140, 173), 'lrv' => 20),
                array('name' => 'Sporty Blue', 'code' => 'SW 6522', 'hex' => '#3C7BA4', 'family' => 'blues', 'rgb' => array(60, 123, 164), 'lrv' => 16),
                array('name' => 'Blue Mosque', 'code' => 'SW 6789', 'hex' => '#4C849E', 'family' => 'blues', 'rgb' => array(76, 132, 158), 'lrv' => 18),
                array('name' => 'Searching Blue', 'code' => 'SW 6536', 'hex' => '#5190B8', 'family' => 'blues', 'rgb' => array(81, 144, 184), 'lrv' => 22),
                array('name' => 'Dyer\'s Woad', 'code' => 'SW 9071', 'hex' => '#5C9BC2', 'family' => 'blues', 'rgb' => array(92, 155, 194), 'lrv' => 26),
                array('name' => 'Resolute Blue', 'code' => 'SW 6507', 'hex' => '#6AA5CB', 'family' => 'blues', 'rgb' => array(106, 165, 203), 'lrv' => 30),
                array('name' => 'Nautilus', 'code' => 'SW 6780', 'hex' => '#77AFD4', 'family' => 'blues', 'rgb' => array(119, 175, 212), 'lrv' => 34),
                array('name' => 'Flyway', 'code' => 'SW 6794', 'hex' => '#85B9DD', 'family' => 'blues', 'rgb' => array(133, 185, 221), 'lrv' => 38),
                array('name' => 'Regale Blue', 'code' => 'SW 6801', 'hex' => '#92C3E6', 'family' => 'blues', 'rgb' => array(146, 195, 230), 'lrv' => 42),
                array('name' => 'Vast Sky', 'code' => 'SW 6506', 'hex' => '#9ECDEF', 'family' => 'blues', 'rgb' => array(158, 205, 239), 'lrv' => 46),
                array('name' => 'Soar', 'code' => 'SW 6799', 'hex' => '#AAD6F3', 'family' => 'blues', 'rgb' => array(170, 214, 243), 'lrv' => 50),
                array('name' => 'Bluebell', 'code' => 'SW 6793', 'hex' => '#B5DFF7', 'family' => 'blues', 'rgb' => array(181, 223, 247), 'lrv' => 54),
                array('name' => 'Naval', 'code' => 'SW 6244', 'hex' => '#003B5C', 'family' => 'blues', 'rgb' => array(0, 59, 92), 'lrv' => 4),
                array('name' => 'Indigo', 'code' => 'SW 6531', 'hex' => '#00416A', 'family' => 'blues', 'rgb' => array(0, 65, 106), 'lrv' => 5),
                array('name' => 'Oceanside', 'code' => 'SW 6496', 'hex' => '#004E7A', 'family' => 'blues', 'rgb' => array(0, 78, 122), 'lrv' => 6),
                array('name' => 'Blue Peacock', 'code' => 'SW 0064', 'hex' => '#005A84', 'family' => 'blues', 'rgb' => array(0, 90, 132), 'lrv' => 7),
                array('name' => 'Rainstorm', 'code' => 'SW 6230', 'hex' => '#00668E', 'family' => 'blues', 'rgb' => array(0, 102, 142), 'lrv' => 9),
                array('name' => 'Georgian Bay', 'code' => 'SW 6509', 'hex' => '#006F9A', 'family' => 'blues', 'rgb' => array(0, 111, 154), 'lrv' => 10),
                array('name' => 'Cruising', 'code' => 'SW 6782', 'hex' => '#0079A5', 'family' => 'blues', 'rgb' => array(0, 121, 165), 'lrv' => 12),
                array('name' => 'Blue Plate', 'code' => 'SW 6796', 'hex' => '#0082B0', 'family' => 'blues', 'rgb' => array(0, 130, 176), 'lrv' => 14),
                array('name' => 'Impromptu', 'code' => 'SW 6955', 'hex' => '#008BBB', 'family' => 'blues', 'rgb' => array(0, 139, 187), 'lrv' => 16),
                array('name' => 'Major Blue', 'code' => 'SW 6795', 'hex' => '#0095C8', 'family' => 'blues', 'rgb' => array(0, 149, 200), 'lrv' => 18),
                array('name' => 'Resonant Blue', 'code' => 'SW 6954', 'hex' => '#009ED4', 'family' => 'blues', 'rgb' => array(0, 158, 212), 'lrv' => 20),
                array('name' => 'Jacaranda', 'code' => 'SW 6802', 'hex' => '#5DA8D0', 'family' => 'blues', 'rgb' => array(93, 168, 208), 'lrv' => 28),
                array('name' => 'Cloudless', 'code' => 'SW 6786', 'hex' => '#6BB2D9', 'family' => 'blues', 'rgb' => array(107, 178, 217), 'lrv' => 32),

                // PURPLES (20 colors)
                array('name' => 'Passionate Purple', 'code' => 'SW 6981', 'hex' => '#6B3E8F', 'family' => 'purples', 'rgb' => array(107, 62, 143), 'lrv' => 9),
                array('name' => 'Gutsy Grape', 'code' => 'SW 6980', 'hex' => '#7D509E', 'family' => 'purples', 'rgb' => array(125, 80, 158), 'lrv' => 12),
                array('name' => 'Vigorous Violet', 'code' => 'SW 6982', 'hex' => '#5D3A7F', 'family' => 'purples', 'rgb' => array(93, 58, 127), 'lrv' => 7),
                array('name' => 'Impulsive Purple', 'code' => 'SW 6832', 'hex' => '#8259A2', 'family' => 'purples', 'rgb' => array(130, 89, 162), 'lrv' => 14),
                array('name' => 'Clematis', 'code' => 'SW 6831', 'hex' => '#9069AF', 'family' => 'purples', 'rgb' => array(144, 105, 175), 'lrv' => 18),
                array('name' => 'Mystical Shade', 'code' => 'SW 6276', 'hex' => '#7B5B8F', 'family' => 'purples', 'rgb' => array(123, 91, 143), 'lrv' => 12),
                array('name' => 'Venture Violet', 'code' => 'SW 6970', 'hex' => '#5E428C', 'family' => 'purples', 'rgb' => array(94, 66, 140), 'lrv' => 8),
                array('name' => 'Plummy', 'code' => 'SW 6558', 'hex' => '#654773', 'family' => 'purples', 'rgb' => array(101, 71, 115), 'lrv' => 8),
                array('name' => 'Purple Passage', 'code' => 'SW 6551', 'hex' => '#5A4167', 'family' => 'purples', 'rgb' => array(90, 65, 103), 'lrv' => 6),
                array('name' => 'Concord Grape', 'code' => 'SW 6559', 'hex' => '#513C5D', 'family' => 'purples', 'rgb' => array(81, 60, 93), 'lrv' => 5),
                array('name' => 'Dewberry', 'code' => 'SW 6552', 'hex' => '#4B3855', 'family' => 'purples', 'rgb' => array(75, 56, 85), 'lrv' => 4),
                array('name' => 'Kimono Violet', 'code' => 'SW 6839', 'hex' => '#9E79B5', 'family' => 'purples', 'rgb' => array(158, 121, 181), 'lrv' => 22),
                array('name' => 'Kismet', 'code' => 'SW 6830', 'hex' => '#A889BE', 'family' => 'purples', 'rgb' => array(168, 137, 190), 'lrv' => 26),
                array('name' => 'Brave Purple', 'code' => 'SW 6823', 'hex' => '#B399C7', 'family' => 'purples', 'rgb' => array(179, 153, 199), 'lrv' => 30),
                array('name' => 'Plum Dandy', 'code' => 'SW 6284', 'hex' => '#BDA9D0', 'family' => 'purples', 'rgb' => array(189, 169, 208), 'lrv' => 34),
                array('name' => 'Potentially Purple', 'code' => 'SW 6821', 'hex' => '#C7B9D9', 'family' => 'purples', 'rgb' => array(199, 185, 217), 'lrv' => 38),
                array('name' => 'Wisteria', 'code' => 'SW 6822', 'hex' => '#D0C9E2', 'family' => 'purples', 'rgb' => array(208, 201, 226), 'lrv' => 42),
                array('name' => 'Rhapsody Lilac', 'code' => 'SW 6828', 'hex' => '#DAD9EB', 'family' => 'purples', 'rgb' => array(218, 217, 235), 'lrv' => 46),
                array('name' => 'Inspired Lilac', 'code' => 'SW 6820', 'hex' => '#E4E9F4', 'family' => 'purples', 'rgb' => array(228, 233, 244), 'lrv' => 50),
                array('name' => 'Wallflower', 'code' => 'SW 6281', 'hex' => '#A68BAA', 'family' => 'purples', 'rgb' => array(166, 139, 170), 'lrv' => 24),

                // NEUTRALS (30 colors)
                array('name' => 'Accessible Beige', 'code' => 'SW 7036', 'hex' => '#D6CABD', 'family' => 'neutrals', 'rgb' => array(214, 202, 189), 'lrv' => 58),
                array('name' => 'Agreeable Gray', 'code' => 'SW 7029', 'hex' => '#D1CBC1', 'family' => 'neutrals', 'rgb' => array(209, 203, 193), 'lrv' => 60),
                array('name' => 'Repose Gray', 'code' => 'SW 7015', 'hex' => '#C8C6BD', 'family' => 'neutrals', 'rgb' => array(200, 198, 189), 'lrv' => 58),
                array('name' => 'Mindful Gray', 'code' => 'SW 7016', 'hex' => '#B3AEA5', 'family' => 'neutrals', 'rgb' => array(179, 174, 165), 'lrv' => 47),
                array('name' => 'Requisite Gray', 'code' => 'SW 7023', 'hex' => '#A8A49C', 'family' => 'neutrals', 'rgb' => array(168, 164, 156), 'lrv' => 43),
                array('name' => 'Balanced Beige', 'code' => 'SW 7037', 'hex' => '#C1B5A7', 'family' => 'neutrals', 'rgb' => array(193, 181, 167), 'lrv' => 50),
                array('name' => 'Worldly Gray', 'code' => 'SW 7043', 'hex' => '#9C9388', 'family' => 'neutrals', 'rgb' => array(156, 147, 136), 'lrv' => 36),
                array('name' => 'Amazing Gray', 'code' => 'SW 7044', 'hex' => '#A8A39D', 'family' => 'neutrals', 'rgb' => array(168, 163, 157), 'lrv' => 42),
                array('name' => 'Colonnade Gray', 'code' => 'SW 7641', 'hex' => '#BAB8B1', 'family' => 'neutrals', 'rgb' => array(186, 184, 177), 'lrv' => 53),
                array('name' => 'Gossamer Veil', 'code' => 'SW 9165', 'hex' => '#C5C3BC', 'family' => 'neutrals', 'rgb' => array(197, 195, 188), 'lrv' => 57),
                array('name' => 'Aesthetic White', 'code' => 'SW 7035', 'hex' => '#D0CDC6', 'family' => 'neutrals', 'rgb' => array(208, 205, 198), 'lrv' => 61),
                array('name' => 'Eider White', 'code' => 'SW 7014', 'hex' => '#D6D2CB', 'family' => 'neutrals', 'rgb' => array(214, 210, 203), 'lrv' => 64),
                array('name' => 'Alabaster', 'code' => 'SW 7008', 'hex' => '#E8E4D9', 'family' => 'neutrals', 'rgb' => array(232, 228, 217), 'lrv' => 82),
                array('name' => 'Shoji White', 'code' => 'SW 7042', 'hex' => '#E3DED8', 'family' => 'neutrals', 'rgb' => array(227, 222, 216), 'lrv' => 78),
                array('name' => 'Greek Villa', 'code' => 'SW 7551', 'hex' => '#E1DDD7', 'family' => 'neutrals', 'rgb' => array(225, 221, 215), 'lrv' => 76),
                array('name' => 'Westhighland White', 'code' => 'SW 7566', 'hex' => '#DDD9D3', 'family' => 'neutrals', 'rgb' => array(221, 217, 211), 'lrv' => 72),
                array('name' => 'Divine White', 'code' => 'SW 6105', 'hex' => '#DED9D2', 'family' => 'neutrals', 'rgb' => array(222, 217, 210), 'lrv' => 73),
                array('name' => 'Natural Tan', 'code' => 'SW 7567', 'hex' => '#C4B8A5', 'family' => 'neutrals', 'rgb' => array(196, 184, 165), 'lrv' => 52),
                array('name' => 'Sandbar', 'code' => 'SW 7547', 'hex' => '#B9AB94', 'family' => 'neutrals', 'rgb' => array(185, 171, 148), 'lrv' => 45),
                array('name' => 'Pavillion Beige', 'code' => 'SW 7512', 'hex' => '#B0A085', 'family' => 'neutrals', 'rgb' => array(176, 160, 133), 'lrv' => 40),
                array('name' => 'Sawdust', 'code' => 'SW 6158', 'hex' => '#A79878', 'family' => 'neutrals', 'rgb' => array(167, 152, 120), 'lrv' => 35),
                array('name' => 'Khaki Shade', 'code' => 'SW 7533', 'hex' => '#9E8F6D', 'family' => 'neutrals', 'rgb' => array(158, 143, 109), 'lrv' => 30),
                array('name' => 'Burlap', 'code' => 'SW 6137', 'hex' => '#968565', 'family' => 'neutrals', 'rgb' => array(150, 133, 101), 'lrv' => 26),
                array('name' => 'Cardboard', 'code' => 'SW 6144', 'hex' => '#8D7C5D', 'family' => 'neutrals', 'rgb' => array(141, 124, 93), 'lrv' => 22),
                array('name' => 'Mossy Gold', 'code' => 'SW 6139', 'hex' => '#847355', 'family' => 'neutrals', 'rgb' => array(132, 115, 85), 'lrv' => 18),
                array('name' => 'Eminent Bronze', 'code' => 'SW 6412', 'hex' => '#7C6A4F', 'family' => 'neutrals', 'rgb' => array(124, 106, 79), 'lrv' => 15),
                array('name' => 'Thatch Brown', 'code' => 'SW 6145', 'hex' => '#746249', 'family' => 'neutrals', 'rgb' => array(116, 98, 73), 'lrv' => 12),
                array('name' => 'Java', 'code' => 'SW 6090', 'hex' => '#6C5943', 'family' => 'neutrals', 'rgb' => array(108, 89, 67), 'lrv' => 10),
                array('name' => 'Umber', 'code' => 'SW 6146', 'hex' => '#64513E', 'family' => 'neutrals', 'rgb' => array(100, 81, 62), 'lrv' => 8),
                array('name' => 'Terra Brun', 'code' => 'SW 6048', 'hex' => '#5B4A3A', 'family' => 'neutrals', 'rgb' => array(91, 74, 58), 'lrv' => 6),

                // WHITES (10 colors)
                array('name' => 'Pure White', 'code' => 'SW 7005', 'hex' => '#F4F1EA', 'family' => 'whites', 'rgb' => array(244, 241, 234), 'lrv' => 84),
                array('name' => 'High Reflective White', 'code' => 'SW 7757', 'hex' => '#F7F5F0', 'family' => 'whites', 'rgb' => array(247, 245, 240), 'lrv' => 86),
                array('name' => 'Extra White', 'code' => 'SW 7006', 'hex' => '#F6F4EC', 'family' => 'whites', 'rgb' => array(246, 244, 236), 'lrv' => 86),
                array('name' => 'Snowbound', 'code' => 'SW 7004', 'hex' => '#F0EFEA', 'family' => 'whites', 'rgb' => array(240, 239, 234), 'lrv' => 83),
                array('name' => 'Dover White', 'code' => 'SW 6385', 'hex' => '#EBE7DD', 'family' => 'whites', 'rgb' => array(235, 231, 221), 'lrv' => 83),
                array('name' => 'Ivory Lace', 'code' => 'SW 7013', 'hex' => '#EBE6D9', 'family' => 'whites', 'rgb' => array(235, 230, 217), 'lrv' => 80),
                array('name' => 'Creamy', 'code' => 'SW 7012', 'hex' => '#E9E3D3', 'family' => 'whites', 'rgb' => array(233, 227, 211), 'lrv' => 78),
                array('name' => 'Navajo White', 'code' => 'SW 6126', 'hex' => '#E6DCC8', 'family' => 'whites', 'rgb' => array(230, 220, 200), 'lrv' => 74),
                array('name' => 'Ivory Palace', 'code' => 'SW 7027', 'hex' => '#E8E2D2', 'family' => 'whites', 'rgb' => array(232, 226, 210), 'lrv' => 76),
                array('name' => 'Antique White', 'code' => 'SW 6119', 'hex' => '#E5DBC9', 'family' => 'whites', 'rgb' => array(229, 219, 201), 'lrv' => 72),

                // BLACKS (10 colors)
                array('name' => 'Tricorn Black', 'code' => 'SW 6258', 'hex' => '#2F2F30', 'family' => 'blacks', 'rgb' => array(47, 47, 48), 'lrv' => 3),
                array('name' => 'Black Magic', 'code' => 'SW 6991', 'hex' => '#3A3A3C', 'family' => 'blacks', 'rgb' => array(58, 58, 60), 'lrv' => 4),
                array('name' => 'Black Bean', 'code' => 'SW 6006', 'hex' => '#3D3935', 'family' => 'blacks', 'rgb' => array(61, 57, 53), 'lrv' => 4),
                array('name' => 'Iron Ore', 'code' => 'SW 7069', 'hex' => '#4A4A49', 'family' => 'blacks', 'rgb' => array(74, 74, 73), 'lrv' => 6),
                array('name' => 'Peppercorn', 'code' => 'SW 7674', 'hex' => '#51504A', 'family' => 'blacks', 'rgb' => array(81, 80, 74), 'lrv' => 7),
                array('name' => 'Black Fox', 'code' => 'SW 7020', 'hex' => '#5A5A52', 'family' => 'blacks', 'rgb' => array(90, 90, 82), 'lrv' => 9),
                array('name' => 'Urbane Bronze', 'code' => 'SW 7048', 'hex' => '#535046', 'family' => 'blacks', 'rgb' => array(83, 80, 70), 'lrv' => 7),
                array('name' => 'Andiron', 'code' => 'SW 6174', 'hex' => '#454238', 'family' => 'blacks', 'rgb' => array(69, 66, 56), 'lrv' => 5),
                array('name' => 'Black of Night', 'code' => 'SW 6993', 'hex' => '#31302F', 'family' => 'blacks', 'rgb' => array(49, 48, 47), 'lrv' => 3),
                array('name' => 'Caviar', 'code' => 'SW 6990', 'hex' => '#2D2C2F', 'family' => 'blacks', 'rgb' => array(45, 44, 47), 'lrv' => 3),
            );
        }
        ?>
        const colorData = <?php echo json_encode($color_data_array); ?>;

        let currentFilter = 'all'

        function renderColorWall(filter = 'all') {
            const $colorWall = $('#colorWall')
            $colorWall.empty()

            const filteredColors = filter === 'all' ?
                colorData :
                colorData.filter(color => color.family === filter)

            filteredColors.forEach(color => {
                const $swatch = $(`
            <div class="color-swatch" data-color='${JSON.stringify(color)}' style="background-color: ${color.hex}">
                <div class="color-swatch-inner">
                <div class="color-name">${color.name}</div>
                <div class="color-code">${color.code}</div>
                </div>
            </div>
            `)
                $colorWall.append($swatch)
            })
        }

        function showModal(colorData) {
            const $modal = $('#colorModal')

            // Clear existing swiper if it exists
            if (window.colorSwiper) {
                window.colorSwiper.destroy(true, true);
            }

            // Build slider content
            const $imagesWrapper = $('#modalColorImagesWrapper');
            $imagesWrapper.empty();

            if (colorData.images && colorData.images.length > 0) {
                // Has images - create image slides
                colorData.images.forEach(function(image) {
                    $imagesWrapper.append(`
                        <div class="swiper-slide">
                            <img src="${image.url}" alt="${image.alt}" class="color-modal-image" />
                        </div>
                    `);
                });
            } else {
                // No images - show color preview
                $imagesWrapper.append(`
                    <div class="swiper-slide">
                        <div class="color-preview-default" style="background-color: ${colorData.hex}"></div>
                    </div>
                `);
            }

            // Set color details
            $('#modalColorName').text(colorData.name)
            $('#modalColorCode').text(colorData.code)

            // Display color family/group
            let familyText = colorData.family.charAt(0).toUpperCase() + colorData.family.slice(1);
            if (colorData.color_group) {
                familyText = colorData.color_group;
            }
            $('#modalColorFamily').text(familyText)
            $('#modalColorLRV').text(colorData.lrv)

            // Display related colors (RGB Values)
            const $rgbSwatches = $('#modalRGBSwatches');
            $rgbSwatches.empty();
            if (colorData.related_colors && colorData.related_colors.length > 0) {
                colorData.related_colors.forEach(function(relatedColor) {
                    $rgbSwatches.append(`
                        <div class="rgb-swatch" style="background-color: ${relatedColor.hex}" title="${relatedColor.code}"></div>
                    `);
                });
                $('.rgb-values-section').show();
            } else {
                $('.rgb-values-section').hide();
            }

            $modal.addClass('active')

            // Initialize Swiper after modal is visible
            setTimeout(function() {
                window.colorSwiper = new Swiper('.colorImageSwiper', {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    loop: colorData.images && colorData.images.length > 1,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                        dynamicBullets: true,
                    },
                });
            }, 100);
        }

        function hideModal() {
            $('#colorModal').removeClass('active')
        }

        $(document).ready(function() {
            renderColorWall()

            $('.family-btn').on('click', function() {
                $('.family-btn').removeClass('active')
                $(this).addClass('active')

                const family = $(this).data('family')
                currentFilter = family
                renderColorWall(family)
            })

            $(document).on('click', '.color-swatch', function() {
                const colorData = $(this).data('color')
                showModal(colorData)
            })

            $('#closeModal').on('click', hideModal)

            $('#colorModal').on('click', function(e) {
                if ($(e.target).is('#colorModal')) {
                    hideModal()
                }
            })

            $(document).on('keydown', function(e) {
                if (e.key === 'Escape') {
                    hideModal()
                }
            })
        })

        // Product Filter AJAX
        let searchTimeout;
        const $searchInput = $('#colorSearchInput');
        const $productsContainer = $('#filteredProductsContainer');
        const $noProductsMsg = $('#noProductsMessage');
        const $loadingSpinner = $('#loadingSpinner');

        function searchProducts(searchTerm) {
            $loadingSpinner.show();
            $noProductsMsg.hide();

            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'POST',
                data: {
                    action: 'filter_products_by_tint',
                    search_term: searchTerm
                },
                success: function(response) {
                    $loadingSpinner.hide();

                    if (response.success && response.data.html) {
                        $productsContainer.html(response.data.html);
                    } else {
                        $productsContainer.empty();
                        $noProductsMsg.show();
                    }
                },
                error: function() {
                    $loadingSpinner.hide();
                    $productsContainer.empty();
                    $noProductsMsg.show();
                }
            });
        }

        // Load all products on page load
        searchProducts('');

        // Filter on keyup event
        $searchInput.on('keyup', function() {
            clearTimeout(searchTimeout);
            const searchTerm = $(this).val().trim();

            searchTimeout = setTimeout(function() {
                searchProducts(searchTerm);
            }, 300); // Debounce 300ms for faster response on keyup
        });

    });
</script>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    :root {
        --primary-color: #000;
        --text-dark: #333;
        --text-light: #666;
        --border-color: #e0e0e0;
        --hover-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        --transition: all 0.3s ease;
    }

    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        background-color: #f5f5f5;
        color: var(--text-dark);
        line-height: 1.6;
    }

    #app {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0;
        min-height: 100vh;
        background-color: #fff;
    }

    .header {
        text-align: center;
        padding: 64px 24px 24px;
        background-color: #fff;
    }

    .header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 8px;
    }

    .subtitle {
        font-size: 1.1rem;
        color: var(--text-light);
    }

    .controls {
        padding: 24px;
        background-color: #fff;
        border-bottom: 1px solid var(--border-color);
        top: 0;
        z-index: 100;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .color-families {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .family-btn {
        padding: 10px 24px;
        border: 2px solid var(--border-color);
        background-color: #fff;
        color: var(--text-dark);
        font-size: 0.95rem;
        font-weight: 600;
        border-radius: 24px;
        cursor: pointer;
        transition: var(--transition);
        text-transform: capitalize;
    }

    .family-btn:hover {
        border-color: var(--primary-color);
        background-color: #f8f9fa;
        transform: translateY(-2px);
    }

    .family-btn.active {
        background-color: var(--primary-color);
        color: #fff;
        border-color: var(--primary-color);
    }

    .color-wall {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
        gap: 0;
        padding: 0;
        background-color: #fff;
    }

    .color-swatch {
        aspect-ratio: 1;
        cursor: pointer;
        position: relative;
        transition: var(--transition);
        border: 1px solid rgba(0, 0, 0, 0.05);
        overflow: hidden;
    }

    .color-swatch:hover {
        transform: scale(1.05);
        box-shadow: var(--hover-shadow);
        z-index: 10;
    }

    .color-swatch-inner {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 12px;
        transition: var(--transition);
    }

    .color-swatch:hover .color-swatch-inner {
        background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, transparent 60%);
    }

    .color-name {
        font-size: 0.75rem;
        font-weight: 600;
        color: transparent;
        transition: var(--transition);
        text-align: center;
        line-height: 1.2;
    }

    .color-swatch:hover .color-name {
        color: #fff;
        text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
    }

    .color-code {
        font-size: 0.7rem;
        color: transparent;
        transition: var(--transition);
        text-align: center;
        margin-top: 2px;
    }

    .color-swatch:hover .color-code {
        color: rgba(255, 255, 255, 0.9);
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        animation: fadeIn 0.3s ease;
    }

    .modal.active {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .modal-content {
        background-color: #fff;
        border-radius: 16px;
        max-width: 900px;
        width: 90%;
        max-height: 90vh;
        overflow: auto;
        position: relative;
        animation: slideUp 0.3s ease;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    }

    @keyframes slideUp {
        from {
            transform: translateY(50px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .close-btn {
        position: absolute;
        right: 16px;
        top: 16px;
        font-size: 32px;
        font-weight: 300;
        color: #666;
        background: none;
        border: none;
        cursor: pointer;
        z-index: 10;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: var(--transition);
    }

    .close-btn:hover {
        background-color: rgba(0, 0, 0, 0.05);
        color: #333;
    }

    .modal-body {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0;
    }

    .color-preview-section {
        position: relative;
        min-height: 400px;
        border-radius: 16px 0 0 16px;
        overflow: hidden;
        background-color: #f5f5f5;
    }

    /* Swiper Styles */
    .colorImageSwiper {
        width: 100%;
        height: 100%;
        min-height: 400px;
    }

    .colorImageSwiper .swiper-slide {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f5f5f5;
    }

    .color-modal-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .color-preview-default {
        width: 100%;
        height: 100%;
        min-height: 400px;
    }

    .colorImageSwiper .swiper-button-next,
    .colorImageSwiper .swiper-button-prev {
        color: #fff;
        background-color: rgba(0, 0, 0, 0.5);
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }

    .colorImageSwiper .swiper-button-next:after,
    .colorImageSwiper .swiper-button-prev:after {
        font-size: 18px;
    }

    .colorImageSwiper .swiper-button-next:hover,
    .colorImageSwiper .swiper-button-prev:hover {
        background-color: rgba(0, 0, 0, 0.7);
    }

    .colorImageSwiper .swiper-pagination {
        bottom: 16px;
    }

    .colorImageSwiper .swiper-pagination-bullet {
        background-color: #fff;
        opacity: 0.7;
    }

    .colorImageSwiper .swiper-pagination-bullet-active {
        opacity: 1;
        background-color: #fff;
    }

    .color-details {
        padding: 48px 40px;
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .color-details h2 {
        font-size: 2rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 4px;
    }

    .color-details .color-code {
        font-size: 1.1rem;
        color: var(--text-light);
        font-weight: 600;
    }

    .color-info {
        border-top: 1px solid var(--border-color);
        padding-top: 16px;
    }

    .color-info h3 {
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--text-light);
        margin-bottom: 8px;
        font-weight: 600;
    }

    .color-info p {
        font-size: 1.1rem;
        color: var(--text-dark);
        font-weight: 500;
    }

    .rgb-values-section {
        margin-top: 24px;
    }

    .rgb-swatches {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
        margin-top: 12px;
    }

    .rgb-swatch {
        width: 50px;
        height: 50px;
        border-radius: 4px;
        border: 1px solid #ddd;
        cursor: pointer;
        transition: transform 0.2s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .rgb-swatch:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }

    .coordinates {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
        gap: 16px;
        margin-top: 8px;
    }

    .coordinate-item {
        background-color: #f8f9fa;
        padding: 16px;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 4px;
    }

    .coordinate-item .label {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--text-light);
        font-weight: 600;
    }

    .coordinate-item .value {
        font-size: 1.3rem;
        font-weight: 700;
        color: var(--text-dark);
    }

    @media (max-width: 768px) {
        .header h1 {
            font-size: 1.8rem;
        }

        .color-wall {
            grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
        }

        .modal-body {
            grid-template-columns: 1fr;
        }

        .color-preview {
            min-height: 250px;
            border-radius: 16px 16px 0 0;
        }

        .color-details {
            padding: 32px 24px;
        }

        .family-btn {
            padding: 8px 16px;
            font-size: 0.85rem;
        }
    }

    @media (max-width: 480px) {
        .color-wall {
            grid-template-columns: repeat(auto-fill, minmax(60px, 1fr));
        }

        .header {
            padding: 32px 16px 16px;
        }
    }

    /* Product Filter Section Styles */
    .filter-section-title {
        font-family: "gillsansnova_book", sans-serif;
        font-size: 2rem;
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .color-search-wrapper {
        display: flex;
        gap: 1rem;
        align-items: center;
        justify-content: center;
        margin-bottom: 2rem;
    }

    .color-search-input {
        flex: 1;
        max-width: 600px;
        padding: 12px 20px;
        font-size: 1rem;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        font-family: "gillsansnova_book", sans-serif;
        transition: border-color 0.3s ease;
    }
    @media screen and (max-width: 768px) {
        .color-search-input {
           width: 100%;
        }
    }
    .color-search-input:focus {
        outline: none;
        border-color: #000;
    }

    #filteredProductsContainer {
        min-height: 200px;
    }

    /* Product Card Styles - Match Related Products */
    #filteredProductsContainer .col-md-3 {
        margin-bottom: 2rem;
    }

    #filteredProductsContainer .product {
        text-align: center;
        transition: transform 0.3s ease;
    }

    #filteredProductsContainer .product:hover {
        transform: translateY(-5px);
    }

    #filteredProductsContainer .woocommerce-loop-product__link {
        text-decoration: none;
        display: block;
    }

    #filteredProductsContainer .woocommerce-loop-product__title {
        font-family: "gillsansnova_book", sans-serif;
        font-size: 1.125rem;
        color: var(--text-dark);
        margin: 1rem 0 0.5rem;
        font-weight: 600;
    }

    #filteredProductsContainer .price {
        font-family: "gillsansnova_book", sans-serif;
        font-size: 1rem;
        color: #666;
        margin-bottom: 1rem;
    }

    #filteredProductsContainer img {
        width: 100%;
        height: auto;
        border-radius: 8px;
    }

    .no-products-text {
        font-family: "gillsansnova_book", sans-serif;
        font-size: 1.25rem;
        color: #666;
    }

    .spinner-border {
        width: 3rem;
        height: 3rem;
        border: 0.25em solid currentColor;
        border-right-color: transparent;
        border-radius: 50%;
        animation: spinner-border 0.75s linear infinite;
    }

    @keyframes spinner-border {
        to {
            transform: rotate(360deg);
        }
    }

    @media (max-width: 768px) {
        .filter-section-title {
            font-size: 1.5rem;
        }

        .color-search-wrapper {
            flex-direction: column;
        }

        .color-search-input {
            max-width: 100%;
        }

        #filteredProductsContainer .col-md-3 {
            margin-bottom: 1.5rem;
        }
    }
</style>
<?php
get_footer();