<?php
/**
 * WP Bootstrap Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_Starter
 */

 if (!function_exists('wp_bootstrap_starter_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function wp_bootstrap_starter_setup()
    {
        /*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WP Bootstrap Starter, use a find and replace
	 * to change 'wp-bootstrap-starter' to the name of your theme in all the template files.
	 */
        load_theme_textdomain('wp-bootstrap-starter', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
        add_theme_support('title-tag');

        /*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary', 'wp-bootstrap-starter'),
        ));

        /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
        add_theme_support('html5', array(
            'comment-form',
            'comment-list',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('wp_bootstrap_starter_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        function wp_boostrap_starter_add_editor_styles()
        {
            add_editor_style('custom-editor-style.css');
        }
        add_action('admin_init', 'wp_boostrap_starter_add_editor_styles');
    }
endif;
add_action('after_setup_theme', 'wp_bootstrap_starter_setup');


/**
 * Add Welcome message to dashboard
 */
function wp_bootstrap_starter_reminder()
{
    $theme_page_url = 'https://afterimagedesigns.com/wp-bootstrap-starter/?dashboard=1';

    if (!get_option('triggered_welcomet')) {
        $message = sprintf(
            __('Welcome to WP Bootstrap Starter Theme! Before diving in to your new theme, please visit the <a style="color: #fff; font-weight: bold;" href="%1$s" target="_blank">theme\'s</a> page for access to dozens of tips and in-depth tutorials.', 'wp-bootstrap-starter'),
            esc_url($theme_page_url)
        );

        printf(
            '<div class="notice is-dismissible" style="background-color: #6C2EB9; color: #fff; border-left: none;">
                        <p>%1$s</p>
                    </div>',
            $message
        );
        add_option('triggered_welcomet', '1', '', 'yes');
    }
}
add_action('admin_notices', 'wp_bootstrap_starter_reminder');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_starter_content_width()
{
    $GLOBALS['content_width'] = apply_filters('wp_bootstrap_starter_content_width', 1170);
}
add_action('after_setup_theme', 'wp_bootstrap_starter_content_width', 0);


/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_starter_scripts()
{
    // load bootstrap css
    wp_enqueue_style('wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css');

    // fontawesome cdn
    wp_enqueue_style('wp-bootstrap-pro-fontawesome-cdn', get_template_directory_uri() . '/inc/assets/css/font-awsome.css');
    // load bootstrap css

    // load WP Bootstrap Starter styles
    wp_enqueue_style('wp-bootstrap-starter-style', get_stylesheet_uri());
    // ============= Load Custom stylesheets =============
    wp_enqueue_style('maze-swiper', get_template_directory_uri() . '/inc/assets/css/swiper.min.css');

    if (is_front_page()) {
        // wp_enqueue_style( 'maze-animate_headlines', get_template_directory_uri() . '/inc/assets/css/animate_headlines.css' );
    }
    wp_enqueue_style('custom_style', get_template_directory_uri() . '/inc/assets/css/custom_style.css', array(), '1.40');
    wp_enqueue_style('custom_style_sec', get_template_directory_uri() . '/inc/assets/css/sec-style.css', array(), '1.40');
    wp_enqueue_style('custom_style_third', get_template_directory_uri() . '/inc/assets/css/third-style.min.css', array(), '1.40');
    wp_enqueue_style('responsive_style', get_template_directory_uri() . '/inc/assets/css/responsive.css', array(), '1.40');

    wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script('html5hiv', get_template_directory_uri() . '/inc/assets/js/html5.js', array(), '3.7.0', false);
    wp_script_add_data('html5hiv', 'conditional', 'lt IE 9');

    // load bootstrap js
    wp_enqueue_script('wp-bootstrap-starter-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true);
    wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true);

    // ========================================================================
    // Add all custom js libraries here
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/inc/assets/js/swiper.min.js', array(), '1', true);

    // jquery visibale
    wp_enqueue_script('queryvisible-js', get_template_directory_uri() . '/inc/assets/js/jquery.visible.js', array(), '1', true);
    // wp_enqueue_script('wp-bootstrap-starter-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.js', array(), '', true );
    wp_enqueue_script('wp-bootstrap-starter-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true);
}
add_action('wp_enqueue_scripts', 'wp_bootstrap_starter_scripts');

function wp_bootstrap_starter_password_form()
{
    global $post;
    $label = 'pwbox-' . (empty($post->ID) ? rand() : $post->ID);
    $o = '<form action="' . esc_url(site_url('wp-login.php?action=postpass', 'login_post')) . '" method="post">
    <div class="d-block mb-3">' . __("To view this protected post, enter the password below:", "wp-bootstrap-starter") . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __("Password:", "wp-bootstrap-starter") . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__("Submit", "wp-bootstrap-starter") . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
add_filter('the_password_form', 'wp_bootstrap_starter_password_form');

function my_myme_types($mime_types)
{
    $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
        array(
            'page_title' => 'Website Settings',
            'menu_title' => 'Website Settings',
            'menu_slug' => 'website-settings',
            'capabality' => 'edit_posts'
        )
    );
}

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
        array(
            'page_title' => 'Size Guide Table',
            'menu_title' => 'Size Guide Table',
            'menu_slug' => 'size-guide-table',
            'capabality' => 'edit_posts'
        )
    );
}

add_image_size('main_homepage_img', 1903, 690, true);
add_image_size('main_img_company_services', 1903, 300, true);
add_image_size('services_img', 656, 580, true);
add_image_size('footer_img', 1903, 340, true);
// Add backend styles for Gutenberg.
add_action('enqueue_block_editor_assets', 'gutenberg_editor_assets');

function gutenberg_editor_assets()
{
    // Load the theme styles within Gutenberg.
    wp_enqueue_style('my-gutenberg-editor-styles', get_theme_file_uri('/assets/gutenberg-editor-styles.css'), FALSE);
}
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {
        // register a testimonial block.
        // the first one is a demo
        // acf_register_block_type(
        //     array(
        //         'name'              => 'Block1',
        //         'title'             => __('Block1'),
        //         'description'       => __('This is the first Block of Homepage'),
        //         'render_template'   => 'blocks/test.php',
        //         'category'          => 'formatting',
        //         'icon'              => 'admin-comments',
        //         'keywords'          => array('testimonial', 'quote'),
        //     )
        // );
    }
}

add_action('pre_get_posts', 'apply_custom_product_filter');

function apply_custom_product_filter($query) {
    if (is_admin() || !$query->is_main_query() || !is_shop()) {
        return;
    }
    if (isset($_GET['custom_filter']) && !empty($_GET['custom_filter'])) {
        $custom_filter = sanitize_text_field($_GET['custom_filter']);
        // Set custom attribute name and value to search for
        $attribute_name  = 'color';
        $attribute_value = $custom_filter;

        $serialized_value = serialize( 'name' ) . serialize( $attribute_name ) . serialize( 'value' ) . serialize( $attribute_value ); // extended version: $serialized_value = serialize( $attribute_name ) . 'a:6:{' . serialize( 'name' ) . serialize( $attribute_name ) . serialize( 'value' ) . serialize( $attribute_value ) . serialize( 'position' );
        $args = array(
            'post_type'      => 'product',
            'post_status'    => 'any',
            'posts_per_page' => -1,
            'orderby'        => 'title',
            'order'          => 'ASC',
            'meta_query' => array(
                array(
                    'key'     => '_product_attributes',
                    'value'   => $serialized_value,
                    'compare' => 'LIKE',
                ),
            ),
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) {
            $loop->the_post();
            ?>
                <li>
                    <pre><?php print_r(get_the_ID()); ?></pre>
                </li>
            <?php
        }
        wp_reset_postdata();
    }
}

function load_more_posts() {
    $page = $_POST['page'];
    $category_id = $_POST['category_id'];

    // $args = array(
    //     'cat' => $category_id,
    //     'post_type'         => 'product',
    //     'posts_per_page'    => 6,
    //     'paged'             => $page,
    //     'order'             =>      'DSC',
    //     'orderby'           =>      'date',
    // );

    $custom_filter = sanitize_text_field($_POST['attr_value']);
    // Set custom attribute name and value to search for
    $attribute_name  = sanitize_text_field($_POST['attribute']);
    $attribute_value = $custom_filter;

    $serialized_value = serialize( 'name' ) . serialize( $attribute_name ) . serialize( 'value' ) . serialize( $attribute_value ); // extended version: $serialized_value = serialize( $attribute_name ) . 'a:6:{' . serialize( 'name' ) . serialize( $attribute_name ) . serialize( 'value' ) . serialize( $attribute_value ) . serialize( 'position' );
    $args = array(
        'post_type'      => 'product',
        'cat'            => $category_id,
        'posts_per_page' => -1,
        'orderby'        => 'title',
        'order'          => 'ASC',
        // 'meta_query' => array(
        //     array(
        //         'key'     => '_product_attributes',
        //         'value'   => $serialized_value,
        //         'compare' => 'LIKE',
        //     ),
        // ),
    );
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) {
        $loop->the_post();
        ?>
            <li>
                <pre><?php print_r(get_the_ID()); ?></pre>
            </li>
        <?php
    }
    wp_die();
}
// you need to add this to overwrite woocommerce files from your theme
add_theme_support( 'woocommerce' );
// for recaptcha added in the header script tag
add_action('wp_head', function() {
    echo '<script src="https://www.google.com/recaptcha/api.js?render=6Lduc_8pAAAAAJDfVdJ5UT2-KbdaxA6IgSFY5fDG"></script>';
});

function custom_product_filter() {
    // $filter_attributes = array( 'pa_color', 'pa_size' ); // Replace with your attribute slugs

    // if ( ! empty( $filter_attributes ) ) {
    //     echo '<div class="custom-product-filter">';
    //     echo '<form action="' . esc_url( get_pagenum_link() ) . '" method="get">';

    //     foreach ( $filter_attributes as $attribute ) {
    //         $terms = get_terms( $attribute );
    //         echo '<pre>'; print_r($terms); echo '</pre>';
    //         if ( ! empty( $terms ) ) {
    //             $current_term = isset( $_GET[ $attribute ] ) ? sanitize_key( $_GET[ $attribute ] ) : '';

    //             echo '<select name="' . esc_attr( $attribute ) . '">';
    //             echo '<option value="">All ' . ucfirst( $attribute ) . '</option>';

    //             foreach ( $terms as $term ) {
    //                 $selected = $current_term === $term->slug ? 'selected' : '';
    //                 echo '<option value="' . esc_attr( $term->slug ) . '" ' . $selected . '>' . esc_html( $term->name ) . '</option>';
    //             }

    //             echo '</select>';
    //         }
    //     }

    //     echo '<button type="submit">Filter</button>';
    //     echo '</form>';
    //     echo '</div>';
    // }

    $filter_attributes = array( 'pa_color', 'pa_size' );

    if ( ! empty( $filter_attributes ) ) {
        echo '<div class="custom-product-filter">';
            foreach ( $filter_attributes as $attribute ) {
                $terms = get_terms( $attribute );
                if ( ! empty( $terms ) ) {
                    $current_term = isset( $_GET[ $attribute ] ) ? sanitize_key( $_GET[ $attribute ] ) : '';
                    echo '<select class="filter_id form-select" id="'. esc_attr( $attribute ) .'" name="' . esc_attr( $attribute ) . '">';
                    ?>
                        <option value="" selected>
                            <?php echo ($attribute === 'pa_color') ? 'color' : 'size'; ?>
                        </option>
                    <?php

                    foreach ( $terms as $term ) {
                        $selected = $current_term === $term->slug ? 'selected' : '';
                        echo '<option value="' . esc_attr( $term->slug ) . '" ' . $selected . '>' . esc_html( $term->name ) . '</option>';
                    }
                    ?>
                    </select>
                <?php
                }
            }
        echo '</div>';
    }

    ?>
    <script>
        <?php $category = get_queried_object(); ?>
        jQuery(document).ready(function($) {
            $('#pa_color , #pa_size').on('change', function() {
                var color = $('#pa_color').val();
                var size = $('#pa_size').val();
                $.ajax({
                    url: '<?php echo admin_url('admin-ajax.php'); ?>',
                    type: 'POST',
                    data: {
                        action: 'filter_products',
                        color: color,
                        size: size,
                        cat_id: '<?php echo $category->term_id; ?>'
                    },
                    success: function(response) {
                        $('#product-list').find('.row').html(response);
                    }
                });
            });
        });
    </script>
    <?php
}

function get_category_slug_by_id($category_id) {
    $term = get_term($category_id, 'product_cat');
    if (!is_wp_error($term) && $term) {
        return $term->slug;
    }
    return '';
}

function filter_products() {
    $color = isset($_POST['color']) ? sanitize_text_field($_POST['color']) : '';
    $size = isset($_POST['size']) ? sanitize_text_field($_POST['size']) : '';
    $category_id = isset($_POST['cat_id']) ? sanitize_text_field($_POST['cat_id']) : '';

    $tax_query = array('relation' => 'AND');

    if (!empty($color)) {
        $tax_query[] = array(
            'taxonomy' => 'pa_color', // Replace 'pa_color' with the attribute taxonomy slug
            'field' => 'slug',
            'terms' => $color,
        );
    }

    if (!empty($size)) {
        $tax_query[] = array(
            'taxonomy' => 'pa_size', // Replace 'pa_size' with the attribute taxonomy slug
            'field' => 'slug',
            'terms' => $size,
        );
    }

    if (!empty($category_id)) {
        $tax_query[] = array(
            'taxonomy' => 'product_cat',
            'field' => 'term_id',
            'terms' => $category_id,
        );
    }
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 20,
        'paged' => $paged, // Current page number
        'tax_query' => $tax_query,
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            wc_get_template_part('content', 'product');
        endwhile;
        $total_pages = $query->max_num_pages;
        if ($total_pages > 1) {
            $current_page = max(1, get_query_var('paged'));
            $category_slug = get_category_slug_by_id($category_id);
            echo paginate_links(array(
                'base' => 'https://new.maisonlesley.com/product-category/'.$category_slug.'/' . '%_%',
                'format' => 'page/%#%',
                'current' => $current_page,
                'total' => $total_pages,
                'prev_text' => __('« Prev'),
                'next_text' => __('Next »'),
                'mid_size' => 1,
                'type' => 'plain',
            ));
        }
        wp_reset_postdata();
    else : ?>
        <div class="container">
            <div class="row text-center pb-4">
                <h2>No products found</h2>
            </div>
        </div>
    <?php
    endif;

    wp_die();
}
add_action('wp_ajax_filter_products', 'filter_products');
add_action('wp_ajax_nopriv_filter_products', 'filter_products');


// add custom size for category products woocommerc
add_action('after_setup_theme', 'custom_woocommerce_image_size');
function custom_woocommerce_image_size() {
    add_image_size('custom-woocommerce-thumbnail', 1000, 1000); // 500px by 500px, hard crop
}
// remove add to cart
function remove_default_add_to_cart_button() {
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
}
add_action( 'init', 'remove_default_add_to_cart_button' );

function add_custom_add_to_cart_button() {
    global $product;
    $product_id = $product->get_id(); // Get the product ID
    $terms = get_the_terms( $product_id, 'product_cat' ); // Get the terms (categories) assigned to the product
    // Define the parent category IDs Bridal and couture
    $parent_category_ids = [21, 24];
    // Get all child categories for the specified parent categories
    $all_category_ids = [];
    foreach ($parent_category_ids as $parent_id) {
        $all_category_ids = array_merge($all_category_ids, get_term_children($parent_id, 'product_cat'));
    }
    // Add the parent categories themselves to the list
    $all_category_ids = array_merge($all_category_ids, $parent_category_ids);
    // check if the products has spesitific categories
    if ( $terms && ! is_wp_error( $terms ) ) {
        foreach ( $terms as $term ) {
            if($product && $product->get_price()){
                $send_enquiry = false;
            } else if(in_array($term->term_id, $all_category_ids)){
                $send_enquiry = true;
            } else {
                $send_enquiry = false;
            }
        }
    }
    if(!$send_enquiry){?>
        <?php
            // Check if the product exists and has attributes
            if ($product->has_attributes()) { ?>
                    <?php
                    // Loop through each attribute
                    foreach ( $product->get_attributes() as $attribute ) {
                        // Get attribute label (name)
                        $attribute_label = wc_attribute_label( $attribute->get_name(), $product );
                        $attribute_name = $attribute->get_name();
                        // Get attribute value(s)
                        $attribute_values = $attribute->get_options();
                        // Output the attribute
                        if($attribute_label == 'Size'){
                            ?>
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-2"><?php echo $attribute_label; ?></h6>
                                <button type="button" class="size-guide-class" data-bs-toggle="modal" data-bs-target="#sizeGuide" name="sizeGuide-button">
                                    Size guide
                                </button>
                            </div>
                            <?php
                            echo '<ul class="product-attributes-size w-100 d-flex justify-content-start pb-3">';
                            foreach ( $attribute_values as $value ) {
                                echo '<li><button>'. esc_html( $value ) .'</button></li>';
                            }
                            echo '</ul>';
                        }
                        if($attribute_name == 'pa_color'){
                            $terms = wc_get_product_terms($product_id, $attribute_name, array('fields' => 'all'));
                            echo '<h6 class="mb-2 color-header">'.ucfirst($attribute_label).' : <span></span></h6>';
                            echo '<ul class="product-attributes-color w-100 d-flex justify-content-start pb-3">';
                            foreach ($terms as $term) {
                                // Get the ACF field value for color
                                $color = get_field('color', $term->taxonomy . '_' . $term->term_id);
                                ?>
                                    <li>
                                        <button style="background-color: <?php echo esc_attr($color); ?>">
                                            <span class="d-none"><?php echo esc_html($term->name); ?></span>
                                        </button>
                                    </li>
                                <?php
                            }
                            echo '</ul>';
                        }
                        ?>
                        <script>
                            jQuery(document).ready(function($) {
                                $('.product-attributes-color li button').on('click', function() {
                                    const currentValueText = $(this).find('span').text();
                                    $('.color-header span').text(currentValueText);
                                });
                            });
                        </script>
                        <?php
                    }
                    ?>
                    <button disabled type="submit" id="form-add-to-cart-button" class="submit-button text-white d-block w-100" data-product-id="<?php echo esc_attr( $product->get_id() ); ?>">
                        <?php esc_html_e( 'Add to Cart', 'woocommerce' ); ?>
                    </button>
                    <span class="response d-block text-danger"></span>
            <?php
            } else {?>
                <button id="custom-add-to-cart-button" class="submit-button text-white d-block w-100" data-product-id="<?php echo esc_attr( $product->get_id() ); ?>">
                    <?php esc_html_e( 'Add to Cart', 'woocommerce' ); ?>
                </button>
                <span class="response d-block text-danger"></span>
            <?php }
        ?>
    <?php } else {?>
        <a class="submit-button text-white d-block w-100" href="/product-request/?pid=<?php echo $product->get_id(); ?>">
            SEND Enquiry
        </a>
    <?php }
}
add_action( 'woocommerce_single_product_summary', 'add_custom_add_to_cart_button', 30 );

function custom_add_to_cart() {
    $product_id = intval( $_POST['product_id'] );
    $quantity = 1; // You can customize the quantity

    $added = WC()->cart->add_to_cart( $product_id, $quantity );

    if ( $added ) {
        wp_send_json_success();
    } else {
        wp_send_json_error();
    }

    wp_die();
}
add_action( 'wp_ajax_custom_add_to_cart', 'custom_add_to_cart' );
add_action( 'wp_ajax_nopriv_custom_add_to_cart', 'custom_add_to_cart' );

function form_custom_add_to_cart() {
    $product_id = intval( $_POST['product_id'] );
    $selected_attr_size = sanitize_text_field( $_POST['selected_attr_size'] );
    $selected_attr_color = sanitize_text_field( $_POST['selected_attr_color'] );

    if ( ! empty( $selected_attr_size ) && ! empty( $selected_attr_color ) ) {
        $attributes = array(
            'attribute_pa_size'  => $selected_attr_size,
            'attribute_pa_color' => $selected_attr_color
        );
    } elseif ( ! empty( $selected_attr_color ) && empty( $selected_attr_size ) ) {
        $attributes = array(
            'attribute_pa_color' => $selected_attr_color
        );
    } elseif ( ! empty( $selected_attr_size ) && empty( $selected_attr_color ) ) {
        $attributes = array(
            'attribute_pa_size' => $selected_attr_size
        );
    } else {
        $attributes = array(); // Default case if no attributes are selected
    }

    $quantity = 1; // You can customize the quantity
    $added = WC()->cart->add_to_cart( $product_id, $quantity, 0, $attributes );

    if ( $added ) {
        wp_send_json_success();
    } else {
        wp_send_json_error();
    }

    wp_die();
}
add_action( 'wp_ajax_form_custom_add_to_cart', 'form_custom_add_to_cart' );
add_action( 'wp_ajax_nopriv_form_custom_add_to_cart', 'form_custom_add_to_cart' );

// removing category in single product page under summary class
add_action('woocommerce_single_product_summary', 'remove_product_category', 20);

function remove_product_category() {
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
}

// add for images in single prodcut page
function custom_enqueue_fancybox() {
    // Enqueue FancyBox CSS
    wp_enqueue_style('fancybox-css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css');

    // Enqueue FancyBox JS
    wp_enqueue_script('fancybox-js', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'custom_enqueue_fancybox');

// Remove default actions
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);
// add custom structure for related products in single product page woocommerce
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
// Add custom action for product images with FancyBox
add_action('woocommerce_before_single_product_summary', 'display_product_images_with_fancybox', 20);

function display_product_images_with_fancybox() {
    global $product;
    $attachment_ids = $product->get_gallery_image_ids();
    // Display gallery images with FancyBox
    if ($attachment_ids) {
        ?>
        <div class="col-lg-3 col-4">
            <?php
                foreach ($attachment_ids as $attachment_id) {
                    $image_url = wp_get_attachment_url($attachment_id);
            ?>
                <?php
                    echo '<a href="' . $image_url . '" class="fancybox d-block" data-fancybox="gallery">';
                    echo wp_get_attachment_image($attachment_id, 'custom-woocommerce-image-size');
                    echo '</a>';
                ?>
            <?php } ?>
        </div>
    <?php
    }
    // Display main image with FancyBox
    if (has_post_thumbnail()) {
        $main_image_url = wp_get_attachment_url(get_post_thumbnail_id($product->get_id()));
        ?>
            <div class="<?php echo $attachment_ids ? 'col-lg-9 col-8' : 'col-12'; ?>">
                <?php
                echo '<a href="' . $main_image_url . '" class="fancybox" data-fancybox="gallery">';
                the_post_thumbnail('shop_single');
                echo '</a>';
                ?>
            </div>
        <?php
    }
}

add_action('after_setup_theme', 'custom_woocommerce_image_size_for_single_product');
function custom_woocommerce_image_size_for_single_product() {
    add_image_size('custom-woocommerce-image-size', 200, 300, true); // 200px by 300px, hard crop
}

add_action('init', 'set_custom_cookie');

function set_custom_cookie() {
    if (!isset($_COOKIE['maison_lesley'])) {
        $cookie_name = 'maison_lesley';
        $cookie_value = '1';
        $expires = time() + (86400 * 30); // 30 days from now
        $path = '/';
        $domain = $_SERVER['HTTP_HOST'];
        $secure = isset($_SERVER['HTTPS']); // Use true if site is using HTTPS
        $httponly = true; // The cookie is only accessible via HTTP(S)
        $samesite = 'Lax'; // Prevent CSRF attacks, change to 'Strict' if needed

        // Setting the cookie
        setcookie($cookie_name, $cookie_value, [
            'expires' => $expires,
            'path' => $path,
            'domain' => $domain,
            'secure' => $secure,
            'httponly' => $httponly,
            'samesite' => $samesite,
        ]);
    }
}
// facebook pixels events
// Track Product Views (ViewContent)
function track_product_view_pixel() {
    if (is_product()) {
        global $product;
        ?>
        <script>
            fbq('track', 'ViewContent', {
                content_name: '<?php echo esc_js($product->get_name()); ?>',
                content_ids: ['<?php echo esc_js($product->get_id()); ?>'],
                content_type: 'product',
                value: '<?php echo esc_js($product->get_price()); ?>',
                currency: '<?php echo get_woocommerce_currency(); ?>'
            });
        </script>
        <?php
    }
}
add_action('wp_footer', 'track_product_view_pixel');

// Track Add to Cart
function track_add_to_cart_pixel($cart_item_key, $product_id, $quantity) {
    $product = wc_get_product($product_id);
    ?>
    <script>
        fbq('track', 'AddToCart', {
            content_name: '<?php echo esc_js($product->get_name()); ?>',
            content_ids: ['<?php echo esc_js($product_id); ?>'],
            content_type: 'product',
            value: '<?php echo esc_js($product->get_price() * $quantity); ?>',
            currency: '<?php echo get_woocommerce_currency(); ?>'
        });
    </script>
    <?php
}
add_action('woocommerce_add_to_cart', 'track_add_to_cart_pixel', 10, 3);

// Track Initiate Checkout
function track_initiate_checkout_pixel() {
    ?>
    <script>
        fbq('track', 'InitiateCheckout');
    </script>
    <?php
}
add_action('woocommerce_before_checkout_form', 'track_initiate_checkout_pixel');

// Track Purchase
function track_purchase_pixel($order_id) {
    $order = wc_get_order($order_id);
    $items = [];
    foreach ($order->get_items() as $item) {
        $product = $item->get_product();
        $items[] = [
            'id' => $product->get_id(),
            'quantity' => $item->get_quantity(),
        ];
    }
    $total = $order->get_total();
    ?>
    <script>
        fbq('track', 'Purchase', {
            value: '<?php echo esc_js($total); ?>',
            currency: '<?php echo get_woocommerce_currency(); ?>',
            contents: <?php echo wp_json_encode($items); ?>,
            num_items: <?php echo esc_js(count($items)); ?>
        });
    </script>
    <?php
}
add_action('woocommerce_thankyou', 'track_purchase_pixel');

function isMob(){
    return is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));
}
// set number of products to 15 and not 16
function set_products_per_page($query) {
    if($query -> is_main_query() && is_post_type_archive('product')){
        $query -> set('posts_per_page', 15);
    }
}
add_action('per_get_posts', 'set_products_per_page');