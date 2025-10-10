<?php
/**
 * Template Name: Data Sheet Page
 *
 * @package WordPress
 * @subpackage Arboline
 * @since 1.0.0
 */

get_header();

// Get parameters
$per_page = isset($_GET['per_page']) ? intval($_GET['per_page']) : 10;
$current_page = isset($_GET['paged']) ? intval($_GET['paged']) : 1;
$search = isset($_GET['search']) ? sanitize_text_field($_GET['search']) : '';
$orderby = isset($_GET['orderby']) ? sanitize_text_field($_GET['orderby']) : 'title';
$order = isset($_GET['order']) ? sanitize_text_field($_GET['order']) : 'ASC';

// Query all products with data sheets
$args = array(
    'post_type' => 'product',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'meta_query' => array(
        array(
            'key' => '_product_data_sheet_url',
            'compare' => 'EXISTS'
        )
    )
);

// Add search if provided
if (!empty($search)) {
    $args['s'] = $search;
}

$all_products = get_posts($args);
$total_products = count($all_products);

// Manual sorting
if ($orderby === 'title') {
    usort($all_products, function($a, $b) use ($order) {
        $result = strcmp($a->post_title, $b->post_title);
        return $order === 'DESC' ? -$result : $result;
    });
} elseif ($orderby === 'id') {
    usort($all_products, function($a, $b) use ($order) {
        $result = $a->ID - $b->ID;
        return $order === 'DESC' ? -$result : $result;
    });
}

// Pagination
$offset = ($current_page - 1) * $per_page;
$products = array_slice($all_products, $offset, $per_page);
$total_pages = ceil($total_products / $per_page);
$showing_from = $total_products > 0 ? $offset + 1 : 0;
$showing_to = min($offset + $per_page, $total_products);
?>

<section>
    <div class="container">
        <h2><?php the_title(); ?></h2>
        <div class="wp-block-document-list">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="dataTables_length" id="DataTables_Table_0_length">
                        <label>Show
                            <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="per-page-select">
                                <option value="10" <?php selected($per_page, 10); ?>>10</option>
                                <option value="25" <?php selected($per_page, 25); ?>>25</option>
                                <option value="50" <?php selected($per_page, 50); ?>>50</option>
                                <option value="100" <?php selected($per_page, 100); ?>>100</option>
                            </select> entries
                        </label>
                    </div>
                    <div id="DataTables_Table_0_filter" class="dataTables_filter">
                        <label>Search:
                            <input type="search" class="search-input" placeholder="" aria-controls="DataTables_Table_0" value="<?php echo esc_attr($search); ?>">
                        </label>
                    </div>
                </div>
                <table class="table technical-sheet-table table-responsive table-hover dataTable no-footer"
                    id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr>
                            <th scope="row" class="sorting <?php echo ($orderby === 'id') ? 'sorting_' . strtolower($order) : ''; ?>"
                                data-column="id" data-order="<?php echo ($orderby === 'id' && $order === 'ASC') ? 'DESC' : 'ASC'; ?>"
                                tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                style="width: 172.323px; cursor: pointer;">#</th>
                            <th class="sorting <?php echo ($orderby === 'title') ? 'sorting_' . strtolower($order) : ''; ?>"
                                data-column="title" data-order="<?php echo ($orderby === 'title' && $order === 'ASC') ? 'DESC' : 'ASC'; ?>"
                                tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                style="width: 1091.68px; cursor: pointer;">Title
                            </th>
                        </tr>
                    </thead>
                    <tbody id="data-sheet-tbody">
                    <tbody id="data-sheet-tbody">
                        <?php
                        $row_class = 'odd';
                        foreach ($products as $product) :
                            $data_sheet_url = get_post_meta($product->ID, '_product_data_sheet_url', true);
                            $data_sheet_name = get_post_meta($product->ID, '_product_data_sheet_name', true);

                            // Use product title if no custom name
                            if (empty($data_sheet_name)) {
                                $data_sheet_name = $product->post_title;
                            }

                            if (!empty($data_sheet_url)) :
                        ?>
                        <tr class="<?php echo $row_class; ?>">
                            <td class="py-0 sorting_1">
                                <a class="d-flex justify-content-between align-items-center w-100 py-3" target="_blank"
                                    href="<?php echo esc_url($data_sheet_url); ?>">
                                    <?php echo $product->ID; ?>
                                </a>
                            </td>
                            <td class="py-0">
                                <a class="d-flex justify-content-between align-items-center w-100 py-3" target="_blank"
                                    href="<?php echo esc_url($data_sheet_url); ?>">
                                    <?php echo esc_html($data_sheet_name); ?> <i class="bi bi-cloud-arrow-down"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
                            $row_class = ($row_class === 'odd') ? 'even' : 'odd';
                            endif;
                        endforeach;

                        if (empty($products)) :
                        ?>
                        <tr>
                            <td colspan="2" class="text-center py-4">No data sheets found.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                        Showing <?php echo $showing_from; ?> to <?php echo $showing_to; ?> of <?php echo $total_products; ?> entries
                        <?php if (!empty($search)) : ?>
                            (filtered from <?php echo count($all_products); ?> total entries)
                        <?php endif; ?>
                    </div>
                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                        <a class="paginate_button previous <?php echo ($current_page <= 1) ? 'disabled' : ''; ?>"
                        aria-controls="DataTables_Table_0"
                        data-page="<?php echo max(1, $current_page - 1); ?>"
                        tabindex="<?php echo ($current_page <= 1) ? '-1' : '0'; ?>"
                        id="DataTables_Table_0_previous">Previous</a>
                        <span>
                            <?php
                            // Show max 5 page numbers
                            $start_page = max(1, $current_page - 2);
                            $end_page = min($total_pages, $start_page + 4);
                            $start_page = max(1, $end_page - 4);

                            for ($i = $start_page; $i <= $end_page; $i++) :
                            ?>
                            <a class="paginate_button <?php echo ($i === $current_page) ? 'current' : ''; ?>"
                            aria-controls="DataTables_Table_0"
                            data-page="<?php echo $i; ?>"
                            tabindex="0"><?php echo $i; ?></a>
                            <?php endfor; ?>
                        </span>
                        <a class="paginate_button next <?php echo ($current_page >= $total_pages) ? 'disabled' : ''; ?>"
                        aria-controls="DataTables_Table_0"
                        data-page="<?php echo min($total_pages, $current_page + 1); ?>"
                        tabindex="<?php echo ($current_page >= $total_pages) ? '-1' : '0'; ?>"
                        id="DataTables_Table_0_next">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
jQuery(document).ready(function($) {
    var debounceTimer;

    // Get current URL parameters
    function getCurrentParams() {
        var urlParams = new URLSearchParams(window.location.search);
        return {
            per_page: urlParams.get('per_page') || '10',
            search: urlParams.get('search') || '',
            orderby: urlParams.get('orderby') || 'title',
            order: urlParams.get('order') || 'ASC',
            paged: urlParams.get('paged') || '1'
        };
    }

    // Function to update URL and reload data
    function updateTable(newParams) {
        var url = new URL(window.location.href);
        var currentParams = getCurrentParams();

        // Merge current params with new params
        var params = Object.assign({}, currentParams, newParams);

        // Clear all existing params
        url.search = '';

        // Update URL parameters
        Object.keys(params).forEach(function(key) {
            if (params[key] && params[key] !== '') {
                url.searchParams.set(key, params[key]);
            }
        });

        // Update browser URL without reload
        window.history.pushState({}, '', url);

        // AJAX reload
        $.ajax({
            url: url.toString(),
            type: 'GET',
            beforeSend: function() {
                $('#data-sheet-tbody').css('opacity', '0.5');
            },
            success: function(response) {
                var $response = $(response);

                // Update table body
                var newTbody = $response.find('#data-sheet-tbody').html();
                $('#data-sheet-tbody').html(newTbody);

                // Update info
                var newInfo = $response.find('#DataTables_Table_0_info').html();
                $('#DataTables_Table_0_info').html(newInfo);

                // Update pagination
                var newPagination = $response.find('#DataTables_Table_0_paginate').html();
                $('#DataTables_Table_0_paginate').html(newPagination);

                // Update table headers
                var newHeaders = $response.find('thead tr').html();
                $('thead tr').html(newHeaders);

                $('#data-sheet-tbody').css('opacity', '1');
            },
            error: function() {
                // Fallback to page reload
                window.location.href = url.toString();
            }
        });
    }

    // Per page change
    $('.per-page-select').on('change', function() {
        var perPage = $(this).val();
        updateTable({
            per_page: perPage,
            paged: '1'
        });
    });

    // Search input with debounce
    $('.search-input').on('keyup', function() {
        var searchTerm = $(this).val();

        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(function() {
            updateTable({
                search: searchTerm,
                paged: '1'
            });
        }, 500);
    });

    // Column sorting
    $(document).on('click', 'th.sorting, th.sorting_asc, th.sorting_desc', function() {
        var column = $(this).data('column');
        var order = $(this).data('order');

        updateTable({
            orderby: column,
            order: order,
            paged: '1'
        });
    });

    // Pagination clicks
    $(document).on('click', '.paginate_button:not(.disabled):not(.current)', function(e) {
        e.preventDefault();
        var page = $(this).data('page');

        if (page) {
            updateTable({
                paged: page.toString()
            });
        }
    });
});
</script>

<?php
get_footer();