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
$orderby = isset($_GET['orderby']) ? sanitize_text_field($_GET['orderby']) : 'name';
$order = isset($_GET['order']) ? sanitize_text_field($_GET['order']) : 'ASC';

// Get all data sheets from ACF
$all_data_sheets = array();
if (function_exists('get_field')) {
    $acf_data_sheets = get_field('data_sheets', 'option');

    if ($acf_data_sheets && is_array($acf_data_sheets)) {
        foreach ($acf_data_sheets as $index => $sheet) {
            if (!empty($sheet['document_name']) && !empty($sheet['document_url'])) {
                $all_data_sheets[] = array(
                    'id' => $index + 1,
                    'name' => $sheet['document_name'],
                    'url' => $sheet['document_url']
                );
            }
        }
    }
}

// Apply search filter
if (!empty($search)) {
    $all_data_sheets = array_filter($all_data_sheets, function($sheet) use ($search) {
        return stripos($sheet['name'], $search) !== false;
    });
    // Re-index array after filtering
    $all_data_sheets = array_values($all_data_sheets);
}

$total_sheets = count($all_data_sheets);

// Apply sorting
if ($orderby === 'name') {
    usort($all_data_sheets, function($a, $b) use ($order) {
        $result = strcmp($a['name'], $b['name']);
        return $order === 'DESC' ? -$result : $result;
    });
} elseif ($orderby === 'id') {
    usort($all_data_sheets, function($a, $b) use ($order) {
        $result = $a['id'] - $b['id'];
        return $order === 'DESC' ? -$result : $result;
    });
}

// Pagination
$offset = ($current_page - 1) * $per_page;
$data_sheets = array_slice($all_data_sheets, $offset, $per_page);
$total_pages = ceil($total_sheets / $per_page);
$showing_from = $total_sheets > 0 ? $offset + 1 : 0;
$showing_to = min($offset + $per_page, $total_sheets);
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
                            <input type="search" class="search-input mb-0" placeholder="" aria-controls="DataTables_Table_0" value="<?php echo esc_attr($search); ?>">
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
                            <th class="sorting <?php echo ($orderby === 'name') ? 'sorting_' . strtolower($order) : ''; ?>"
                                data-column="name" data-order="<?php echo ($orderby === 'name' && $order === 'ASC') ? 'DESC' : 'ASC'; ?>"
                                tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                style="width: 1091.68px; cursor: pointer;">Document Name
                            </th>
                        </tr>
                    </thead>
                    <tbody id="data-sheet-tbody">
                        <?php
                        $row_class = 'odd';
                        foreach ($data_sheets as $sheet) :
                        ?>
                        <tr class="<?php echo $row_class; ?>">
                            <td class="py-0 sorting_1">
                                <a class="d-flex justify-content-between align-items-center w-100 py-3" target="_blank"
                                    href="<?php echo esc_url($sheet['url']); ?>">
                                    <?php echo $sheet['id']; ?>
                                </a>
                            </td>
                            <td class="py-0">
                                <a class="d-flex justify-content-between align-items-center w-100 py-3" target="_blank"
                                    href="<?php echo esc_url($sheet['url']); ?>">
                                    <?php echo esc_html($sheet['name']); ?> <i class="bi bi-cloud-arrow-down"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
                            $row_class = ($row_class === 'odd') ? 'even' : 'odd';
                        endforeach;

                        if (empty($data_sheets)) :
                        ?>
                        <tr>
                            <td colspan="2" class="text-center py-4">No data sheets found.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between align-items-center pb-4">
                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                        Showing <?php echo $showing_from; ?> to <?php echo $showing_to; ?> of <?php echo $total_sheets; ?> entries
                        <?php if (!empty($search)) : ?>
                            (filtered from search)
                        <?php endif; ?>
                    </div>
                    <div class="dataTables_paginate paging_simple_numbers mb-0" id="DataTables_Table_0_paginate">
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
            orderby: urlParams.get('orderby') || 'name',
            order: urlParams.get('order') || 'ASC',
            paged: urlParams.get('paged') || '1'
        };
    }

    // Function to update URL and reload data
    function updateTable(newParams) {
        var currentParams = getCurrentParams();

        // Merge current params with new params
        var params = $.extend({}, currentParams, newParams);

        // Build new URL
        var baseUrl = window.location.origin + window.location.pathname;
        var queryString = $.param(params);
        var newUrl = baseUrl + '?' + queryString;

        console.log('Updating table with params:', params);
        console.log('New URL:', newUrl);

        // Update browser URL without reload
        window.history.pushState({}, '', newUrl);

        // AJAX reload
        $.ajax({
            url: newUrl,
            type: 'GET',
            beforeSend: function() {
                $('#data-sheet-tbody').css('opacity', '0.5');
            },
            success: function(response) {
                var $response = $(response);

                // Update table body
                var newTbody = $response.find('#data-sheet-tbody');
                if (newTbody.length) {
                    $('#data-sheet-tbody').html(newTbody.html());
                }

                // Update info
                var newInfo = $response.find('#DataTables_Table_0_info');
                if (newInfo.length) {
                    $('#DataTables_Table_0_info').html(newInfo.html());
                }

                // Update pagination
                var newPagination = $response.find('#DataTables_Table_0_paginate');
                if (newPagination.length) {
                    $('#DataTables_Table_0_paginate').html(newPagination.html());
                }

                // Update table headers
                var newHeaders = $response.find('thead tr');
                if (newHeaders.length) {
                    $('thead tr').html(newHeaders.html());
                }

                // Update per-page select
                var newSelect = $response.find('.per-page-select');
                if (newSelect.length) {
                    $('.per-page-select').html(newSelect.html());
                }

                $('#data-sheet-tbody').css('opacity', '1');

                console.log('Table updated successfully');
            },
            error: function(xhr, status, error) {
                console.error('AJAX error:', status, error);
                // Fallback to page reload
                window.location.href = newUrl;
            }
        });
    }

    // Per page change
    $(document).on('change', '.per-page-select', function() {
        var perPage = $(this).val();
        console.log('Per page changed to:', perPage);
        updateTable({
            per_page: perPage,
            paged: '1'
        });
    });

    // Search input with debounce
    $(document).on('keyup', '.search-input', function() {
        var searchTerm = $(this).val();
        console.log('Search term:', searchTerm);

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
        console.log('Sorting by:', column, order);

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
        console.log('Page clicked:', page);

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