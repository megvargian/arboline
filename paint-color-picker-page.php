<?php
/**
 * Template Name: Paint Color Picker Page
 */
get_header();
?>
<section>
    <div>
        <header class="header">
            <h1>Color Wall Explorer</h1>
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
                    <div class="color-preview" id="modalColorPreview"></div>
                    <div class="color-details">
                        <h2 id="modalColorName"></h2>
                        <p class="color-code" id="modalColorCode"></p>
                        <div class="color-info">
                            <h3>Color Family</h3>
                            <p id="modalColorFamily"></p>
                        </div>
                        <div class="color-info">
                            <h3>RGB Values</h3>
                            <p id="modalColorRGB"></p>
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
        const colorData = [
            // Reds
            {
                name: 'Real Red',
                code: 'SW 6868',
                hex: '#C8102E',
                family: 'reds',
                rgb: [200, 16, 46],
                lrv: 12
            },
            {
                name: 'Heartthrob',
                code: 'SW 6866',
                hex: '#D4424F',
                family: 'reds',
                rgb: [212, 66, 79],
                lrv: 18
            },
            {
                name: 'Ablaze',
                code: 'SW 6870',
                hex: '#B5202E',
                family: 'reds',
                rgb: [181, 32, 46],
                lrv: 9
            },
            {
                name: 'Red Bay',
                code: 'SW 6321',
                hex: '#8B3A3D',
                family: 'reds',
                rgb: [139, 58, 61],
                lrv: 7
            },
            {
                name: 'Fireweed',
                code: 'SW 6328',
                hex: '#A4484B',
                family: 'reds',
                rgb: [164, 72, 75],
                lrv: 10
            },
            {
                name: 'Coral Rose',
                code: 'SW 9004',
                hex: '#E77B7F',
                family: 'reds',
                rgb: [231, 123, 127],
                lrv: 32
            },
            {
                name: 'Begonia',
                code: 'SW 6599',
                hex: '#D0555A',
                family: 'reds',
                rgb: [208, 85, 90],
                lrv: 16
            },
            {
                name: 'Show Stopper',
                code: 'SW 7588',
                hex: '#BD3E43',
                family: 'reds',
                rgb: [189, 62, 67],
                lrv: 11
            },

            // Oranges
            {
                name: 'Energetic Orange',
                code: 'SW 6880',
                hex: '#E67635',
                family: 'oranges',
                rgb: [230, 118, 53],
                lrv: 24
            },
            {
                name: 'Copper Harbor',
                code: 'SW 6634',
                hex: '#C46D43',
                family: 'oranges',
                rgb: [196, 109, 67],
                lrv: 18
            },
            {
                name: 'Knockout Orange',
                code: 'SW 6885',
                hex: '#D95D2A',
                family: 'oranges',
                rgb: [217, 93, 42],
                lrv: 16
            },
            {
                name: 'Obstinate Orange',
                code: 'SW 6884',
                hex: '#ED7D3A',
                family: 'oranges',
                rgb: [237, 125, 58],
                lrv: 28
            },
            {
                name: 'Outgoing Orange',
                code: 'SW 6641',
                hex: '#F5935D',
                family: 'oranges',
                rgb: [245, 147, 93],
                lrv: 38
            },
            {
                name: 'Navel',
                code: 'SW 6887',
                hex: '#F69349',
                family: 'oranges',
                rgb: [246, 147, 73],
                lrv: 36
            },
            {
                name: 'Copper Wire',
                code: 'SW 7707',
                hex: '#B86841',
                family: 'oranges',
                rgb: [184, 104, 65],
                lrv: 15
            },
            {
                name: 'Rhumba Orange',
                code: 'SW 6642',
                hex: '#E9945A',
                family: 'oranges',
                rgb: [233, 148, 90],
                lrv: 35
            },

            // Yellows
            {
                name: 'Lemon Twist',
                code: 'SW 6909',
                hex: '#F9C846',
                family: 'yellows',
                rgb: [249, 200, 70],
                lrv: 62
            },
            {
                name: 'Daisy',
                code: 'SW 6910',
                hex: '#F5B841',
                family: 'yellows',
                rgb: [245, 184, 65],
                lrv: 54
            },
            {
                name: 'Decisive Yellow',
                code: 'SW 6902',
                hex: '#F4B436',
                family: 'yellows',
                rgb: [244, 180, 54],
                lrv: 52
            },
            {
                name: 'Cheerful',
                code: 'SW 6903',
                hex: '#F1A82F',
                family: 'yellows',
                rgb: [241, 168, 47],
                lrv: 46
            },
            {
                name: 'Goldenrod',
                code: 'SW 6677',
                hex: '#E6A532',
                family: 'yellows',
                rgb: [230, 165, 50],
                lrv: 44
            },
            {
                name: 'Solaria',
                code: 'SW 6688',
                hex: '#F2C75C',
                family: 'yellows',
                rgb: [242, 199, 92],
                lrv: 60
            },
            {
                name: 'Bee',
                code: 'SW 6683',
                hex: '#EBB737',
                family: 'yellows',
                rgb: [235, 183, 55],
                lrv: 54
            },
            {
                name: 'Gambol Gold',
                code: 'SW 6690',
                hex: '#E8B954',
                family: 'yellows',
                rgb: [232, 185, 84],
                lrv: 52
            },

            // Greens
            {
                name: 'Verdant',
                code: 'SW 6713',
                hex: '#3A7F3E',
                family: 'greens',
                rgb: [58, 127, 62],
                lrv: 15
            },
            {
                name: 'Organic Green',
                code: 'SW 6732',
                hex: '#4A8C4B',
                family: 'greens',
                rgb: [74, 140, 75],
                lrv: 18
            },
            {
                name: 'Jolly Green',
                code: 'SW 6931',
                hex: '#28834E',
                family: 'greens',
                rgb: [40, 131, 78],
                lrv: 14
            },
            {
                name: 'Greens',
                code: 'SW 6748',
                hex: '#3E7D5C',
                family: 'greens',
                rgb: [62, 125, 92],
                lrv: 14
            },
            {
                name: 'Derbyshire',
                code: 'SW 6741',
                hex: '#2F6B4E',
                family: 'greens',
                rgb: [47, 107, 78],
                lrv: 10
            },
            {
                name: 'Kilkenny',
                code: 'SW 6740',
                hex: '#316D50',
                family: 'greens',
                rgb: [49, 109, 80],
                lrv: 11
            },
            {
                name: 'Jade Dragon',
                code: 'SW 9129',
                hex: '#4A9872',
                family: 'greens',
                rgb: [74, 152, 114],
                lrv: 20
            },
            {
                name: 'Eco Green',
                code: 'SW 6739',
                hex: '#3D8966',
                family: 'greens',
                rgb: [61, 137, 102],
                lrv: 16
            },

            // Blues
            {
                name: 'Loyal Blue',
                code: 'SW 6510',
                hex: '#004C97',
                family: 'blues',
                rgb: [0, 76, 151],
                lrv: 8
            },
            {
                name: 'Blue Chip',
                code: 'SW 6959',
                hex: '#2B73A6',
                family: 'blues',
                rgb: [43, 115, 166],
                lrv: 14
            },
            {
                name: 'Secure Blue',
                code: 'SW 6508',
                hex: '#3B6D9B',
                family: 'blues',
                rgb: [59, 109, 155],
                lrv: 12
            },
            {
                name: 'Dignity Blue',
                code: 'SW 6804',
                hex: '#2D5F8D',
                family: 'blues',
                rgb: [45, 95, 141],
                lrv: 10
            },
            {
                name: 'Adriatic Sea',
                code: 'SW 6790',
                hex: '#326B8C',
                family: 'blues',
                rgb: [50, 107, 140],
                lrv: 12
            },
            {
                name: 'Distance',
                code: 'SW 6243',
                hex: '#5B8CAD',
                family: 'blues',
                rgb: [91, 140, 173],
                lrv: 20
            },
            {
                name: 'Sporty Blue',
                code: 'SW 6522',
                hex: '#3C7BA4',
                family: 'blues',
                rgb: [60, 123, 164],
                lrv: 16
            },
            {
                name: 'Blue Mosque',
                code: 'SW 6789',
                hex: '#4C849E',
                family: 'blues',
                rgb: [76, 132, 158],
                lrv: 18
            },

            // Purples
            {
                name: 'Passionate Purple',
                code: 'SW 6981',
                hex: '#6B3E8F',
                family: 'purples',
                rgb: [107, 62, 143],
                lrv: 9
            },
            {
                name: 'Gutsy Grape',
                code: 'SW 6980',
                hex: '#7D509E',
                family: 'purples',
                rgb: [125, 80, 158],
                lrv: 12
            },
            {
                name: 'Vigorous Violet',
                code: 'SW 6982',
                hex: '#5D3A7F',
                family: 'purples',
                rgb: [93, 58, 127],
                lrv: 7
            },
            {
                name: 'Impulsive Purple',
                code: 'SW 6832',
                hex: '#8259A2',
                family: 'purples',
                rgb: [130, 89, 162],
                lrv: 14
            },
            {
                name: 'Clematis',
                code: 'SW 6831',
                hex: '#9069AF',
                family: 'purples',
                rgb: [144, 105, 175],
                lrv: 18
            },
            {
                name: 'Mystical Shade',
                code: 'SW 6276',
                hex: '#7B5B8F',
                family: 'purples',
                rgb: [123, 91, 143],
                lrv: 12
            },
            {
                name: 'Venture Violet',
                code: 'SW 6970',
                hex: '#5E428C',
                family: 'purples',
                rgb: [94, 66, 140],
                lrv: 8
            },
            {
                name: 'Plummy',
                code: 'SW 6558',
                hex: '#654773',
                family: 'purples',
                rgb: [101, 71, 115],
                lrv: 8
            },

            // Neutrals
            {
                name: 'Accessible Beige',
                code: 'SW 7036',
                hex: '#D6CABD',
                family: 'neutrals',
                rgb: [214, 202, 189],
                lrv: 58
            },
            {
                name: 'Agreeable Gray',
                code: 'SW 7029',
                hex: '#D1CBC1',
                family: 'neutrals',
                rgb: [209, 203, 193],
                lrv: 60
            },
            {
                name: 'Repose Gray',
                code: 'SW 7015',
                hex: '#C8C6BD',
                family: 'neutrals',
                rgb: [200, 198, 189],
                lrv: 58
            },
            {
                name: 'Mindful Gray',
                code: 'SW 7016',
                hex: '#B3AEA5',
                family: 'neutrals',
                rgb: [179, 174, 165],
                lrv: 47
            },
            {
                name: 'Requisite Gray',
                code: 'SW 7023',
                hex: '#A8A49C',
                family: 'neutrals',
                rgb: [168, 164, 156],
                lrv: 43
            },
            {
                name: 'Balanced Beige',
                code: 'SW 7037',
                hex: '#C1B5A7',
                family: 'neutrals',
                rgb: [193, 181, 167],
                lrv: 50
            },
            {
                name: 'Worldly Gray',
                code: 'SW 7043',
                hex: '#9C9388',
                family: 'neutrals',
                rgb: [156, 147, 136],
                lrv: 36
            },
            {
                name: 'Amazing Gray',
                code: 'SW 7044',
                hex: '#A8A39D',
                family: 'neutrals',
                rgb: [168, 163, 157],
                lrv: 42
            }
        ]

        let currentFilter = 'all'

        function hexToRgb(hex) {
            const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex)
            return result ? {
                r: parseInt(result[1], 16),
                g: parseInt(result[2], 16),
                b: parseInt(result[3], 16)
            } : null
        }

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
            const rgb = hexToRgb(colorData.hex)

            $('#modalColorPreview').css('background-color', colorData.hex)
            $('#modalColorName').text(colorData.name)
            $('#modalColorCode').text(colorData.code)
            $('#modalColorFamily').text(colorData.family.charAt(0).toUpperCase() + colorData.family.slice(1))
            $('#modalColorRGB').text(`R: ${rgb.r}, G: ${rgb.g}, B: ${rgb.b}`)
            $('#modalColorLRV').text(colorData.lrv)

            $modal.addClass('active')
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

    .color-preview {
        min-height: 400px;
        border-radius: 16px 0 0 16px;
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