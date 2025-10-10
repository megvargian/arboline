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
    wp_enqueue_style('account_page_style', get_template_directory_uri() . '/inc/assets/css/account-page.css', array(), '1.0');
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

    // Add Paint Colors Options Page
    acf_add_options_page(
        array(
            'page_title' => 'Paint Color Picker',
            'menu_title' => 'Paint Colors',
            'menu_slug' => 'paint-colors-settings',
            'capability' => 'edit_posts',
            'icon_url' => 'dashicons-art',
            'position' => 30
        )
    );
}

// if (function_exists('acf_add_options_page')) {
//     acf_add_options_page(
//         array(
//             'page_title' => 'Size Guide Table',
//             'menu_title' => 'Size Guide Table',
//             'menu_slug' => 'size-guide-table',
//             'capabality' => 'edit_posts'
//         )
//     );
// }

// Register ACF fields for Paint Color Picker
add_action('acf/init', 'register_paint_color_picker_fields');
function register_paint_color_picker_fields() {
    if (function_exists('acf_add_local_field_group')) {
        acf_add_local_field_group(array(
            'key' => 'group_paint_colors',
            'title' => 'Paint Color Picker Settings',
            'fields' => array(
                array(
                    'key' => 'field_paint_colors_repeater',
                    'label' => 'Paint Colors',
                    'name' => 'paint_colors',
                    'type' => 'repeater',
                    'instructions' => 'Add paint colors that will appear in the color picker page. Each color can be assigned to a color family for filtering.',
                    'required' => 0,
                    'layout' => 'table',
                    'button_label' => 'Add Color',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_color_name',
                            'label' => 'Color Name',
                            'name' => 'color_name',
                            'type' => 'text',
                            'required' => 1,
                            'placeholder' => 'e.g., Real Red',
                            'wrapper' => array(
                                'width' => '20',
                            ),
                        ),
                        array(
                            'key' => 'field_color_code',
                            'label' => 'Color Code',
                            'name' => 'color_code',
                            'type' => 'text',
                            'required' => 1,
                            'placeholder' => 'e.g., SW 6868',
                            'wrapper' => array(
                                'width' => '15',
                            ),
                        ),
                        array(
                            'key' => 'field_hex_color',
                            'label' => 'Hex Color',
                            'name' => 'hex_color',
                            'type' => 'color_picker',
                            'required' => 1,
                            'default_value' => '#ffffff',
                            'wrapper' => array(
                                'width' => '15',
                            ),
                        ),
                        array(
                            'key' => 'field_color_family',
                            'label' => 'Color Family',
                            'name' => 'color_family',
                            'type' => 'select',
                            'required' => 1,
                            'choices' => array(
                                'reds' => 'Reds',
                                'oranges' => 'Oranges',
                                'yellows' => 'Yellows',
                                'greens' => 'Greens',
                                'blues' => 'Blues',
                                'purples' => 'Purples',
                                'neutrals' => 'Neutrals',
                                'whites' => 'Whites',
                                'blacks' => 'Blacks',
                            ),
                            'default_value' => 'neutrals',
                            'wrapper' => array(
                                'width' => '15',
                            ),
                        ),
                        array(
                            'key' => 'field_rgb_values',
                            'label' => 'RGB Values',
                            'name' => 'rgb_values',
                            'type' => 'text',
                            'instructions' => 'Enter RGB values separated by commas (e.g., 200,16,46)',
                            'required' => 0,
                            'placeholder' => 'e.g., 200, 16, 46',
                            'wrapper' => array(
                                'width' => '20',
                            ),
                        ),
                        array(
                            'key' => 'field_lrv_value',
                            'label' => 'LRV',
                            'name' => 'lrv_value',
                            'type' => 'number',
                            'instructions' => 'Light Reflectance Value (0-100)',
                            'required' => 0,
                            'min' => 0,
                            'max' => 100,
                            'step' => 1,
                            'wrapper' => array(
                                'width' => '15',
                            ),
                        ),
                    ),
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'paint-colors-settings',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
        ));
    }
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
            // Homepage blocks registration
            acf_register_block_type(array(
                'name'              => 'hero-section',
                'title'             => __('Hero Section'),
                'description'       => __('Homepage Hero Section'),
                'render_template'   => 'block/hero-section.php',
                'category'          => 'formatting',
                'icon'              => 'cover-image',
                'keywords'          => array('hero', 'homepage'),
            ));
            acf_register_block_type(array(
                'name'              => 'british-section',
                'title'             => __('Fervently British Section'),
                'description'       => __('Homepage British Section'),
                'render_template'   => 'block/british-section.php',
                'category'          => 'formatting',
                'icon'              => 'flag',
                'keywords'          => array('british', 'homepage'),
            ));
            acf_register_block_type(array(
                'name'              => 'beautiful-wood-section',
                'title'             => __('Beautiful Wood Section'),
                'description'       => __('Homepage Beautiful Wood Section'),
                'render_template'   => 'block/beautiful-wood-section.php',
                'category'          => 'formatting',
                'icon'              => 'palmtree',
                'keywords'          => array('wood', 'homepage'),
            ));
            acf_register_block_type(array(
                'name'              => 'full-stop-section',
                'title'             => __('Full Stop Section'),
                'description'       => __('Homepage Full Stop Section'),
                'render_template'   => 'block/full-stop-section.php',
                'category'          => 'formatting',
                'icon'              => 'minus',
                'keywords'          => array('full stop', 'homepage'),
            ));
            acf_register_block_type(array(
                'name'              => 'floor-worktop-section',
                'title'             => __('Floor & Worktop Section'),
                'description'       => __('Homepage Floor & Worktop Wood Finishes'),
                'render_template'   => 'block/floor-worktop-section.php',
                'category'          => 'formatting',
                'icon'              => 'admin-home',
                'keywords'          => array('floor', 'worktop', 'homepage'),
            ));
            acf_register_block_type(array(
                'name'              => 'interior-wood-section',
                'title'             => __('Interior Wood Section'),
                'description'       => __('Homepage Interior Wood Finishes'),
                'render_template'   => 'block/interior-wood-section.php',
                'category'          => 'formatting',
                'icon'              => 'admin-home',
                'keywords'          => array('interior', 'wood', 'homepage'),
            ));
            acf_register_block_type(array(
                'name'              => 'exterior-wood-section',
                'title'             => __('Exterior Wood Section'),
                'description'       => __('Homepage Exterior Wood Finishes'),
                'render_template'   => 'block/exterior-wood-section.php',
                'category'          => 'formatting',
                'icon'              => 'admin-home',
                'keywords'          => array('exterior', 'wood', 'homepage'),
            ));
            acf_register_block_type(array(
                'name'              => 'sustainability-section',
                'title'             => __('Sustainability Section'),
                'description'       => __('Homepage Sustainability Section'),
                'render_template'   => 'block/sustainability-section.php',
                'category'          => 'formatting',
                'icon'              => 'leaf',
                'keywords'          => array('sustainability', 'homepage'),
            ));
            acf_register_block_type(array(
                'name'              => 'slider-section',
                'title'             => __('Slider Section'),
                'description'       => __('Homepage Slider Section'),
                'render_template'   => 'block/slider-section.php',
                'category'          => 'formatting',
                'icon'              => 'images-alt2',
                'keywords'          => array('slider', 'homepage'),
            ));
            acf_register_block_type(array(
                'name'              => 'wood-bg-section',
                'title'             => __('Wood Background Section'),
                'description'       => __('Homepage Wood Background Section'),
                'render_template'   => 'block/wood-bg-section.php',
                'category'          => 'formatting',
                'icon'              => 'images-alt2',
                'keywords'          => array('wood', 'background', 'homepage'),
            ));
            acf_register_block_type(array(
                'name'              => 'about-first-block',
                'title'             => __('About Us - First Block'),
                'description'       => __('About Us First Section'),
                'render_template'   => 'block/about/first.php',
                'category'          => 'formatting',
                'icon'              => 'id',
                'keywords'          => array('about', 'history'),
            ));
            acf_register_block_type(array(
                'name'              => 'about-second-block',
                'title'             => __('About Us - Second Block'),
                'description'       => __('About Us Second Section'),
                'render_template'   => 'block/about/second.php',
                'category'          => 'formatting',
                'icon'              => 'id',
                'keywords'          => array('about', 'trade street'),
            ));
            acf_register_block_type(array(
                'name'              => 'about-third-block',
                'title'             => __('About Us - Third Block'),
                'description'       => __('About Us Third Section'),
                'render_template'   => 'block/about/third.php',
                'category'          => 'formatting',
                'icon'              => 'id',
                'keywords'          => array('about', 'manufacturing'),
            ));
            acf_register_block_type(array(
                'name'              => 'about-fourth-block',
                'title'             => __('About Us - Fourth Block'),
                'description'       => __('About Us Fourth Section'),
                'render_template'   => 'block/about/fourth.php',
                'category'          => 'formatting',
                'icon'              => 'id',
                'keywords'          => array('about', 'generations'),
            ));
            acf_register_block_type(array(
                'name'              => 'about-fifth-block',
                'title'             => __('About Us - Fifth Block'),
                'description'       => __('About Us Fifth Section'),
                'render_template'   => 'block/about/fifth.php',
                'category'          => 'formatting',
                'icon'              => 'id',
                'keywords'          => array('about', 'video'),
            ));
            acf_register_block_type(array(
                'name'              => 'guide-block',
                'title'             => __('Guide Block'),
                'description'       => __('A block to display guides'),
                'render_template'   => 'block/guide_block.php',
                'category'          => 'formatting',
                'icon'              => 'id',
                'keywords'          => array('about', 'video'),
            ));
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
// add_action('wp_head', function() {
//     echo '<script src="https://www.google.com/recaptcha/api.js?render=6Lduc_8pAAAAAJDfVdJ5UT2-KbdaxA6IgSFY5fDG"></script>';
// });

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

/**
 * Enqueue WooCommerce cart parameters for AJAX
 */
function enqueue_woocommerce_cart_params() {
    if (is_product()) {
        wp_localize_script('jquery', 'wc_add_to_cart_params', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'cart_url' => wc_get_cart_url(),
            'wc_ajax_url' => WC_AJAX::get_endpoint("%%endpoint%%")
        ));
    }
}
add_action('wp_enqueue_scripts', 'enqueue_woocommerce_cart_params');

/**
 * Disable WooCommerce default add to cart redirect to ensure our custom functionality works
 */
function disable_woocommerce_add_to_cart_redirect() {
    return false;
}
add_filter('woocommerce_add_to_cart_redirect', 'disable_woocommerce_add_to_cart_redirect');

/**
 * Ensure cart fragments work properly with our custom add to cart
 */
function custom_woocommerce_cart_fragments($fragments) {
    $fragments['span.cart-count'] = '<span class="cart-count">' . WC()->cart->get_cart_contents_count() . '</span>';
    return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'custom_woocommerce_cart_fragments');
// remove add to cart
function remove_default_add_to_cart_button() {
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
    // Also remove other potential duplicate forms
    remove_action( 'woocommerce_variable_add_to_cart', 'woocommerce_variable_add_to_cart', 30 );
    remove_action( 'woocommerce_simple_add_to_cart', 'woocommerce_simple_add_to_cart', 30 );
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
// add_action( 'woocommerce_single_product_summary', 'add_custom_add_to_cart_button', 30 );

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
    // Comment out the meta removal since we use it in our custom template
    // remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
}

// add for images in single prodcut page
function custom_enqueue_fancybox() {
    // Enqueue FancyBox CSS
    wp_enqueue_style('fancybox-css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css');

    // Enqueue FancyBox JS
    wp_enqueue_script('fancybox-js', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'custom_enqueue_fancybox');

// Remove default actions for custom product layout
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);
// add custom structure for related products in single product page woocommerce
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
// Note: We keep the excerpt removal here as it's handled in our custom template
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

/**
 * Add custom meta fields for product data sheet
 */
function add_product_data_sheet_meta_fields() {
    global $post;

    echo '<div class="options_group">';

    woocommerce_wp_text_input(
        array(
            'id' => '_product_data_sheet_url',
            'label' => __('Data Sheet URL', 'woocommerce'),
            'placeholder' => 'https://example.com/datasheet.pdf',
            'desc_tip' => 'true',
            'description' => __('Enter the URL to the product data sheet/PDF.', 'woocommerce'),
        )
    );

    woocommerce_wp_text_input(
        array(
            'id' => '_product_data_sheet_name',
            'label' => __('Data Sheet Name', 'woocommerce'),
            'placeholder' => 'Product Data Sheet',
            'desc_tip' => 'true',
            'description' => __('Enter the display name for the data sheet link.', 'woocommerce'),
        )
    );

    echo '</div>';
}
add_action('woocommerce_product_options_general_product_data', 'add_product_data_sheet_meta_fields');

/**
 * Save custom meta fields for product data sheet
 */
function save_product_data_sheet_meta_fields($post_id) {
    $data_sheet_url = $_POST['_product_data_sheet_url'];
    $data_sheet_name = $_POST['_product_data_sheet_name'];

    if (!empty($data_sheet_url)) {
        update_post_meta($post_id, '_product_data_sheet_url', esc_url($data_sheet_url));
    }

    if (!empty($data_sheet_name)) {
        update_post_meta($post_id, '_product_data_sheet_name', sanitize_text_field($data_sheet_name));
    }
}
add_action('woocommerce_process_product_meta', 'save_product_data_sheet_meta_fields');

/**
 * Debug function to check product short description
 */
function debug_product_short_description() {
    if (is_product()) {
        global $product;
        if ($product) {
            $short_desc = $product->get_short_description();
            if (current_user_can('manage_options')) { // Only show to admins
                echo '<!-- DEBUG: Short Description Length: ' . strlen($short_desc) . ' -->';
                echo '<!-- DEBUG: Short Description Content: ' . esc_html($short_desc) . ' -->';
            }
        }
    }
}
add_action('wp_head', 'debug_product_short_description');

/**
 * Ensure WooCommerce theme support and customizations
 */
function arboline_woocommerce_support() {
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'arboline_woocommerce_support');

/**
 * Customize WooCommerce single product page layout
 */
function arboline_single_product_customizations() {
    // Only remove hooks that we're completely replacing with custom layout
    // Keep add_to_cart and meta hooks as they're used in our template
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
    // Keep add_to_cart and meta actions as we use them via do_action in our template
}
add_action('init', 'arboline_single_product_customizations');

/**
 * Add custom CSS for WooCommerce single product page
 */
function arboline_woocommerce_custom_styles() {
    if (is_product()) {
        ?>
        <style>
        /* Custom quantity input styling */
        .quantity-wrapper {
            margin: 15px 0;
            display: flex !important;
            align-items: center;
            justify-content: flex-start;
        }

        .quantity-wrapper .btn {
            padding: 8px 12px;
            border: 1px solid #ddd;
            background: #f8f9fa;
            min-width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .quantity-wrapper .btn:hover {
            background: #e9ecef;
            border-color: #adb5bd;
        }

        .quantity-wrapper .quantity {
            margin: 0 5px;
        }

        .quantity-wrapper .quantity input {
            width: 60px;
            height: 40px;
            text-align: center;
            border: 1px solid #ddd;
            margin: 0;
            padding: 0 5px;
            border-radius: 4px;
        }

        /* Ensure variations form is visible */
        .variations_form {
            display: block !important;
            width: 100%;
        }

        /* Size dropdown styling */
        .variations {
            width: 100%;
            margin-bottom: 20px;
        }

        .variations select {
            width: 100% !important;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background: white;
            font-size: 16px;
            margin-bottom: 15px;
            display: block;
        }

        .variations th {
            display: none; /* Hide the label as it's shown in placeholder */
        }

        .variations td {
            padding: 0;
            width: 100%;
        }

        /* Single variation wrapper */
        .single_variation_wrap {
            display: block !important;
            width: 100%;
        }

        /* Variation add to cart wrapper */
        .woocommerce-variation-add-to-cart {
            width: 100%;
        }

        /* Add to cart button styling */
        .single_add_to_cart_button {
            width: 100%;
            padding: 12px 20px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 600;
            margin-top: 15px;
            text-transform: uppercase;
        }

        .single_add_to_cart_button:hover {
            background: #218838;
        }

        .single_add_to_cart_button:disabled {
            background: #6c757d;
            cursor: not-allowed;
        }

        /* Product description below title */
        .woocommerce-product-details__short-description {
            font-size: 16px !important;
            line-height: 1.6 !important;
            color: #666 !important;
            margin: 15px 0 20px 0 !important;
            padding: 0 !important;
            display: block !important;
            visibility: visible !important;
            background: transparent !important;
            border: none !important;
            border-radius: 0 !important;
        }

        .woocommerce-product-details__short-description p {
            margin: 0 0 10px 0 !important;
            padding: 0 !important;
            font-size: 16px !important;
            line-height: 1.6 !important;
            color: #666 !important;
        }        /* Debug styling for no description */
        .no-short-description {
            display: block !important;
            visibility: visible !important;
        }

        /* Product title and price styling */
        .product_title {
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #333;
        }

        .price {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .price .woocommerce-Price-currencySymbol {
            font-size: 1.2em;
        }

        /* Variation form styling */
        .variations_form {
            margin-top: 20px;
        }

        .single_variation_wrap {
            margin-top: 20px;
        }

        /* Reset link styling */
        .reset_variations {
            font-size: 14px;
            color: #666;
            text-decoration: none;
            margin-left: 10px;
        }

        .reset_variations:hover {
            color: #333;
            text-decoration: underline;
        }
        </style>

        <script>
        jQuery(document).ready(function($) {
            // Initialize WooCommerce variation form (but not our custom form)
            if (typeof wc_add_to_cart_variation_params !== 'undefined') {
                $('.variations_form:not(.custom-variations-form)').wc_variation_form();
            }

            // Ensure quantity buttons work (only for quantity-wrapper context)
            $(document).on('click', '.quantity-wrapper .plus:not(.single-product .plus)', function(e) {
                e.preventDefault();
                e.stopPropagation();
                var input = $(this).siblings('.quantity').find('input');
                var val = parseInt(input.val()) || 0;
                var max = parseInt(input.attr('max')) || 999;
                if (val < max) {
                    input.val(val + 1).trigger('change');
                }
            });

            $(document).on('click', '.quantity-wrapper .minus:not(.single-product .minus)', function(e) {
                e.preventDefault();
                e.stopPropagation();
                var input = $(this).siblings('.quantity').find('input');
                var val = parseInt(input.val()) || 0;
                var min = parseInt(input.attr('min')) || 1;
                if (val > min) {
                    input.val(val - 1).trigger('change');
                }
            });
        });
        </script>
        <?php
    }
}
add_action('wp_head', 'arboline_woocommerce_custom_styles');

/**
 * Custom AJAX handler for variable products add to cart
 */
function custom_variable_add_to_cart_handler() {
    // Check if this is an AJAX request
    if (!wp_doing_ajax()) {
        wp_die('Direct access not allowed');
    }

    // Verify nonce
    if (!isset($_POST['security']) || !wp_verify_nonce($_POST['security'], 'add_to_cart_nonce')) {
        wp_send_json_error(array('message' => 'Security check failed'));
    }

    // Validate required fields
    if (!isset($_POST['product_id']) || !isset($_POST['variation_id']) || !isset($_POST['quantity'])) {
        wp_send_json_error(array('message' => 'Missing required fields'));
    }

    $product_id = intval($_POST['product_id']);
    $variation_id = intval($_POST['variation_id']);
    $quantity = intval($_POST['quantity']);
    $variation = array();

    // Ensure quantity is at least 1
    if ($quantity < 1) {
        $quantity = 1;
    }

    // Debug logging
    error_log('Add to cart attempt - Product ID: ' . $product_id . ', Variation ID: ' . $variation_id . ', Quantity: ' . $quantity);
    error_log('POST data: ' . print_r($_POST, true));

    // Handle variation attributes
    if (isset($_POST['variation']) && is_array($_POST['variation'])) {
        foreach ($_POST['variation'] as $key => $value) {
            $variation[sanitize_key($key)] = sanitize_text_field($value);
        }
    }

    // Validate product exists
    $product = wc_get_product($product_id);
    if (!$product) {
        wp_send_json_error(array('message' => 'Product not found'));
    }

    // For variable products, validate variation
    if ($product->is_type('variable')) {
        if ($variation_id <= 0) {
            wp_send_json_error(array('message' => 'Please select all product options'));
        }

        $variation_product = wc_get_product($variation_id);
        if (!$variation_product || !$variation_product->exists()) {
            wp_send_json_error(array('message' => 'Selected variation does not exist'));
        }

        if (!$variation_product->is_purchasable()) {
            wp_send_json_error(array('message' => 'This variation cannot be purchased'));
        }

        if (!$variation_product->is_in_stock()) {
            wp_send_json_error(array('message' => 'Selected variation is out of stock'));
        }

        // Validate that the variation belongs to the parent product
        if ($variation_product->get_parent_id() !== $product_id) {
            wp_send_json_error(array('message' => 'Invalid variation for this product'));
        }

        // Get the variation attributes if not provided
        if (empty($variation)) {
            $variation_attributes = $variation_product->get_variation_attributes();
            foreach ($variation_attributes as $attribute_name => $attribute_value) {
                $variation[$attribute_name] = $attribute_value;
            }
            error_log('Auto-populated variation attributes: ' . print_r($variation, true));
        } else {
            error_log('Using provided variation attributes: ' . print_r($variation, true));
        }
    }

    error_log('Final add to cart parameters - Product ID: ' . $product_id . ', Quantity: ' . $quantity . ', Variation ID: ' . $variation_id . ', Variation: ' . print_r($variation, true));

    // Add to cart
    try {
        if ($variation_id > 0) {
            $added = WC()->cart->add_to_cart($product_id, $quantity, $variation_id, $variation);
            error_log('Variable product add to cart result: ' . ($added ? 'SUCCESS' : 'FAILED'));
        } else {
            $added = WC()->cart->add_to_cart($product_id, $quantity);
            error_log('Simple product add to cart result: ' . ($added ? 'SUCCESS' : 'FAILED'));
        }

        if ($added) {
            // Get cart hash to confirm addition
            $cart_hash = WC()->cart->get_cart_hash();

            // Trigger cart updated events
            WC_AJAX::get_refreshed_fragments();

            wp_send_json_success(array(
                'message' => 'Product added to cart successfully!',
                'cart_count' => WC()->cart->get_cart_contents_count(),
                'cart_url' => wc_get_cart_url(),
                'cart_hash' => $cart_hash,
                'added_to_cart' => true,
                'success' => true
            ));
        } else {
            // Check for WooCommerce notices/errors
            $error_messages = array();
            $notices = wc_get_notices('error');
            if (!empty($notices)) {
                foreach ($notices as $notice) {
                    $error_messages[] = $notice['notice'];
                }
                wc_clear_notices(); // Clear the notices
            }

            $error_message = !empty($error_messages) ? implode(', ', $error_messages) : 'Failed to add product to cart. Please try again.';
            error_log('Add to cart failed with errors: ' . $error_message);
            wp_send_json_error(array('message' => $error_message));
        }
    } catch (Exception $e) {
        error_log('Add to cart error: ' . $e->getMessage());
        wp_send_json_error(array('message' => 'Error: ' . $e->getMessage()));
    }
}
add_action('wp_ajax_custom_variable_add_to_cart', 'custom_variable_add_to_cart_handler');
add_action('wp_ajax_nopriv_custom_variable_add_to_cart', 'custom_variable_add_to_cart_handler');

// Simple test function to verify AJAX is working
function test_ajax_handler() {
    wp_send_json_success(array('message' => 'AJAX is working!'));
}
add_action('wp_ajax_test_ajax', 'test_ajax_handler');
add_action('wp_ajax_nopriv_test_ajax', 'test_ajax_handler');

/**
 * Custom AJAX handler for simple products add to cart
 */
function custom_simple_add_to_cart_handler() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['security'], 'add_to_cart_nonce')) {
        wp_send_json_error(array('message' => 'Security check failed'));
    }

    $product_id = intval($_POST['product_id']);
    $quantity = intval($_POST['quantity']);

    // Ensure quantity is at least 1
    if ($quantity < 1) {
        $quantity = 1;
    }

    // Validate product exists
    $product = wc_get_product($product_id);
    if (!$product) {
        wp_send_json_error(array('message' => 'Product not found'));
    }

    // Check if product is in stock
    if (!$product->is_in_stock()) {
        wp_send_json_error(array('message' => 'Product is out of stock'));
    }

    // Add to cart
    try {
        $added = WC()->cart->add_to_cart($product_id, $quantity);

        if ($added) {
            // Get cart hash to confirm addition
            $cart_hash = WC()->cart->get_cart_hash();

            wp_send_json_success(array(
                'message' => 'Product added to cart successfully!',
                'cart_count' => WC()->cart->get_cart_contents_count(),
                'cart_url' => wc_get_cart_url(),
                'cart_hash' => $cart_hash,
                'added_to_cart' => true,
                'success' => true
            ));
        } else {
            wp_send_json_error(array('message' => 'Failed to add product to cart'));
        }
    } catch (Exception $e) {
        wp_send_json_error(array('message' => 'Error: ' . $e->getMessage()));
    }
}
add_action('wp_ajax_custom_simple_add_to_cart', 'custom_simple_add_to_cart_handler');
add_action('wp_ajax_nopriv_custom_simple_add_to_cart', 'custom_simple_add_to_cart_handler');

/**
 * Custom AJAX handler for add to cart
 */
function custom_add_to_cart_handler() {
    // Verify nonce
    if (!wp_verify_nonce($_POST['security'], 'add_to_cart_nonce')) {
        wp_die('Security check failed');
    }

    $product_id = intval($_POST['product_id']);
    $quantity = intval($_POST['quantity']);
    $variation_id = 0;
    $variation = array();

    // Handle variable products
    if (isset($_POST['attribute_pa_size']) && !empty($_POST['attribute_pa_size'])) {
        $product = wc_get_product($product_id);
        if ($product && $product->is_type('variable')) {
            $variation['attribute_pa_size'] = sanitize_text_field($_POST['attribute_pa_size']);

            // Find the variation ID
            $available_variations = $product->get_available_variations();
            foreach ($available_variations as $available_variation) {
                if ($available_variation['attributes']['attribute_pa_size'] === $variation['attribute_pa_size']) {
                    $variation_id = $available_variation['variation_id'];
                    break;
                }
            }
        }
    }

    // Add to cart
    if ($variation_id > 0) {
        $added = WC()->cart->add_to_cart($product_id, $quantity, $variation_id, $variation);
    } else {
        $added = WC()->cart->add_to_cart($product_id, $quantity);
    }

    if ($added) {
        wp_send_json_success(array(
            'message' => 'Product added to cart successfully!',
            'cart_count' => WC()->cart->get_cart_contents_count()
        ));
    } else {
        wp_send_json_error(array(
            'message' => 'Failed to add product to cart'
        ));
    }
}
add_action('wp_ajax_custom_add_to_cart', 'custom_add_to_cart_handler');
add_action('wp_ajax_nopriv_custom_add_to_cart', 'custom_add_to_cart_handler');

// Add custom meta box for additional product information
add_action('add_meta_boxes', 'add_custom_product_info_meta_box');
add_action('save_post', 'save_custom_product_info_meta_box');

// Migration function to convert old format to new format
function migrate_custom_product_info_data($post_id) {
    $custom_fields = get_post_meta($post_id, '_custom_product_info', true);

    // Check if we have old format data (associative array with predefined keys)
    if (is_array($custom_fields) && !isset($custom_fields[0]['label'])) {
        $new_format = array();

        $old_field_labels = array(
            'coverage' => 'Coverage',
            'application_method' => 'Application Method',
            'drying_time' => 'Drying Time',
            'finish_type' => 'Finish Type',
            'suitable_for' => 'Suitable For',
            'color_options' => 'Color Options'
        );

        foreach ($old_field_labels as $key => $label) {
            if (!empty($custom_fields[$key])) {
                $new_format[] = array(
                    'label' => $label,
                    'value' => $custom_fields[$key]
                );
            }
        }

        if (!empty($new_format)) {
            update_post_meta($post_id, '_custom_product_info', $new_format);
        }
    }
}

function add_custom_product_info_meta_box() {
    add_meta_box(
        'custom_product_info',
        'Custom Additional Information',
        'custom_product_info_meta_box_callback',
        'product',
        'normal',
        'high'
    );
}

function custom_product_info_meta_box_callback($post) {
    // Add nonce for security
    wp_nonce_field('save_custom_product_info', 'custom_product_info_nonce');

    // Migrate old format data if needed
    migrate_custom_product_info_data($post->ID);

    // Get existing values
    $custom_fields = get_post_meta($post->ID, '_custom_product_info', true);
    if (!is_array($custom_fields)) {
        $custom_fields = array();
    }

    // Ensure we have at least one empty field
    if (empty($custom_fields)) {
        $custom_fields = array(
            array('label' => '', 'value' => '')
        );
    }

    ?>
    <div id="custom-product-info-container">
        <h4>Custom Additional Information Fields</h4>
        <p>These fields will be displayed in the "Additional Information" accordion table on the product page.</p>

        <table class="form-table">
            <thead>
                <tr>
                    <th width="25%">Field Label</th>
                    <th width="60%">Field Value</th>
                    <th width="15%">Action</th>
                </tr>
            </thead>
            <tbody id="custom-fields-tbody">
                <?php
                $index = 0;
                foreach ($custom_fields as $field) :
                    $label = isset($field['label']) ? $field['label'] : '';
                    $value = isset($field['value']) ? $field['value'] : '';
                ?>
                <tr class="custom-field-row" data-index="<?php echo $index; ?>">
                    <td>
                        <input type="text"
                               name="custom_product_info[<?php echo $index; ?>][label]"
                               value="<?php echo esc_attr($label); ?>"
                               placeholder="Enter field label"
                               class="regular-text field-label-input" />
                    </td>
                    <td>
                        <input type="text"
                               name="custom_product_info[<?php echo $index; ?>][value]"
                               value="<?php echo esc_attr($value); ?>"
                               placeholder="Enter field value"
                               class="regular-text field-value-input" />
                    </td>
                    <td>
                        <button type="button" class="button remove-field" onclick="removeCustomField(this)">Remove</button>
                    </td>
                </tr>
                <?php
                $index++;
                endforeach;
                ?>
            </tbody>
        </table>

        <p>
            <button type="button" class="button button-secondary" onclick="addCustomField()">Add New Field</button>
        </p>
    </div>

    <script type="text/javascript">
    let fieldIndex = <?php echo $index; ?>;

    function addCustomField() {
        const tbody = document.getElementById('custom-fields-tbody');
        const newRow = document.createElement('tr');
        newRow.className = 'custom-field-row';
        newRow.setAttribute('data-index', fieldIndex);

        newRow.innerHTML = `
            <td>
                <input type="text"
                       name="custom_product_info[${fieldIndex}][label]"
                       value=""
                       placeholder="Enter field label"
                       class="regular-text field-label-input" />
            </td>
            <td>
                <input type="text"
                       name="custom_product_info[${fieldIndex}][value]"
                       value=""
                       placeholder="Enter field value"
                       class="regular-text field-value-input" />
            </td>
            <td>
                <button type="button" class="button remove-field" onclick="removeCustomField(this)">Remove</button>
            </td>
        `;

        tbody.appendChild(newRow);
        fieldIndex++;
    }

    function removeCustomField(button) {
        const row = button.closest('tr');
        const tbody = document.getElementById('custom-fields-tbody');

        // Don't remove if it's the last row
        if (tbody.children.length > 1) {
            row.remove();
        } else {
            // Clear the inputs instead of removing the row
            row.querySelector('.field-label-input').value = '';
            row.querySelector('.field-value-input').value = '';
        }
    }
    </script>

    <style>
    #custom-product-info-container .form-table th,
    #custom-product-info-container .form-table td {
        padding: 10px;
        vertical-align: middle;
    }

    .custom-field-row input[type="text"] {
        width: 100%;
    }

    .remove-field {
        color: #a00;
    }

    .remove-field:hover {
        color: #dc3232;
    }
    </style>
    <?php
}

function save_custom_product_info_meta_box($post_id) {
    // Check if nonce is valid
    if (!isset($_POST['custom_product_info_nonce']) || !wp_verify_nonce($_POST['custom_product_info_nonce'], 'save_custom_product_info')) {
        return;
    }

    // Check if user has permission to edit the post
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Check if not an autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Save the custom fields
    if (isset($_POST['custom_product_info'])) {
        $custom_fields = array();

        foreach ($_POST['custom_product_info'] as $field) {
            $label = sanitize_text_field($field['label']);
            $value = sanitize_text_field($field['value']);

            // Only save fields that have both label and value
            if (!empty($label) && !empty($value)) {
                $custom_fields[] = array(
                    'label' => $label,
                    'value' => $value
                );
            }
        }

        update_post_meta($post_id, '_custom_product_info', $custom_fields);
    } else {
        // If no fields are set, delete the meta
        delete_post_meta($post_id, '_custom_product_info');
    }
}


// Add custom fields for tint images in WooCommerce product edit page
add_action('woocommerce_product_options_general_product_data', function() {
    global $post;
    $product = wc_get_product($post->ID);
    if ($product && $product->is_type('variable')) {
        $variation_attributes = $product->get_variation_attributes();
        foreach ($variation_attributes as $attribute_name => $options) {
            if (stripos($attribute_name, 'tint') !== false) {
                echo '<div class="options_group">';
                echo '<h4>Tint Images</h4>';
                foreach ($options as $tint) {
                    $field_id = 'tint_image_' . sanitize_title($tint);
                    $image_id = get_post_meta($post->ID, $field_id, true);
                    $image_url = $image_id ? wp_get_attachment_url($image_id) : '';
                    echo '<p class="form-field">';
                    echo '<label>' . esc_html($tint) . ' Image</label><br>';
                    echo '<input type="hidden" class="tint-image-upload" name="' . esc_attr($field_id) . '" value="' . esc_attr($image_id) . '" />';
                    echo '<img src="' . esc_url($image_url) . '" style="max-width:100px;max-height:100px;display:' . ($image_url ? 'block' : 'none') . ';" class="tint-image-preview" />';
                    echo '<button type="button" class="button tint-image-upload-btn" data-field="' . esc_attr($field_id) . '">Upload</button>';
                    echo '<button type="button" class="button tint-image-remove-btn" data-field="' . esc_attr($field_id) . '">Remove</button>';
                    echo '</p>';
                }
                echo '</div>';
            }
        }
    }
});

// Save tint image fields
add_action('woocommerce_process_product_meta', function($post_id) {
    $product = wc_get_product($post_id);
    if ($product && $product->is_type('variable')) {
        $variation_attributes = $product->get_variation_attributes();
        foreach ($variation_attributes as $attribute_name => $options) {
            if (stripos($attribute_name, 'tint') !== false) {
                foreach ($options as $tint) {
                    $field_id = 'tint_image_' . sanitize_title($tint);
                    if (isset($_POST[$field_id])) {
                        update_post_meta($post_id, $field_id, intval($_POST[$field_id]));
                    }
                }
            }
        }
    }
});

// Enqueue media uploader for admin
add_action('admin_enqueue_scripts', function($hook) {
    if ($hook === 'post.php' || $hook === 'post-new.php') {
        wp_enqueue_media();
        wp_add_inline_script('jquery', 'jQuery(document).ready(function($){
            $(".tint-image-upload-btn").on("click", function(e){
                e.preventDefault();
                var field = $(this).data("field");
                var frame = wp.media({title: "Select or Upload Tint Image", button: {text: "Use this image"}, multiple: false});
                frame.on("select", function(){
                    var attachment = frame.state().get("selection").first().toJSON();
                    $("input[name="+field+"]").val(attachment.id);
                    $("input[name="+field+"]").siblings(".tint-image-preview").attr("src", attachment.url).show();
                });
                frame.open();
            });
            $(".tint-image-remove-btn").on("click", function(e){
                e.preventDefault();
                var field = $(this).data("field");
                $("input[name="+field+"]").val("");
                $("input[name="+field+"]").siblings(".tint-image-preview").attr("src", "").hide();
            });
        });');
    }
});


function enqueue_glightbox_assets() {
    // Glightbox CSS
    wp_enqueue_style(
        'glightbox-css',
        'https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css',
        array(),
        null
    );

    // Glightbox JS
    wp_enqueue_script(
        'glightbox-js',
        'https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js',
        array(),
        null,
        true
    );

    // Init script
    wp_add_inline_script(
        'glightbox-js',
        'document.addEventListener("DOMContentLoaded", function() {
            const lightbox = GLightbox({
                selector: ".glightbox-tint",
                touchNavigation: true,
                loop: false,
                zoomable: true,
                width: "90%",
                height: "auto"
            });
        });'
    );
}
add_action('wp_enqueue_scripts', 'enqueue_glightbox_assets');

// AJAX search for products and categories (for header search popup)
add_action('wp_ajax_arboline_search_suggestions', 'arboline_search_suggestions');
add_action('wp_ajax_nopriv_arboline_search_suggestions', 'arboline_search_suggestions');
function arboline_search_suggestions() {
    $results = array();
    $q = isset($_POST['q']) ? sanitize_text_field($_POST['q']) : '';
    if (strlen($q) < 2) {
        wp_send_json($results);
    }
    // Search products
    $product_args = array(
        'post_type' => 'product',
        'post_status' => 'publish',
        'posts_per_page' => 10,
        's' => $q,
    );
    $product_query = new WP_Query($product_args);
    if ($product_query->have_posts()) {
        while ($product_query->have_posts()) {
            $product_query->the_post();
            $results[] = array(
                'label' => get_the_title(),
                'url' => get_permalink(),
                'type' => 'product',
            );
        }
        wp_reset_postdata();
    }
    // Search categories
    $cat_args = array(
        'taxonomy' => 'product_cat',
        'hide_empty' => false,
        'name__like' => $q,
        'number' => 10,
    );
    $categories = get_terms($cat_args);
    if (!is_wp_error($categories)) {
        foreach ($categories as $cat) {
            $results[] = array(
                'label' => $cat->name . ' (Category)',
                'url' => get_term_link($cat),
                'type' => 'category',
            );
        }
    }
    wp_send_json($results);
}

// // Add custom field for calculator formula in product edit page
// add_action('add_meta_boxes', function() {
//     add_meta_box(
//         'custom_calculator_formula',
//         'Custom Calculator Formula',
//         function($post) {
//             $value = get_post_meta($post->ID, '_custom_calculator_formula', true);
//             echo '<label for="custom_calculator_formula">Enter a PHP formula using $width, $length, $coverage (e.g., ($width * $length * 1000) / $coverage):</label>';
//             echo '<input type="text" id="custom_calculator_formula" name="custom_calculator_formula" value="' . esc_attr($value) . '" style="width:100%">';
//         },
//         'product',
//         'side',
//         'default'
//     );
// });

// add_action('save_post_product', function($post_id) {
//     if (isset($_POST['custom_calculator_formula'])) {
//         update_post_meta($post_id, '_custom_calculator_formula', sanitize_text_field($_POST['custom_calculator_formula']));
//     }
// });

// Add custom field for thickness in product edit page (for calculator)
add_action('add_meta_boxes', function() {
    add_meta_box(
        'product_thickness',
        'Calculator Thickness',
        function($post) {
            // Only show for specific products or categories
            $allowed_cat_ids = array(21, 22, 23, 24, 35, 34, 27, 41, 39); // category IDs
            $allowed_product_ids = array(728, 743, 758, 773, 788, 804, 819, 971, 986, 1001, 1016, 1225, 1240, 1255); // product IDs (replace with your actual IDs)
            $show = false;
            if (in_array($post->ID, $allowed_product_ids)) {
                $show = true;
            }
            if (has_term($allowed_cat_ids, 'product_cat', $post->ID)) {
                $show = true;
            }
            if (!$show) return;
            $value = get_post_meta($post->ID, '_product_thickness', true);
            echo '<label for="product_thickness">Coverage (mm):</label>';
            echo '<input type="number" id="product_thickness" name="product_thickness" value="' . esc_attr($value) . '" min="0" step="0.01" style="width:100%"><br><br>';

            // Formula type field
            $formula_type = get_post_meta($post->ID, '_product_formula_type', true);
            echo '<label for="product_formula_type">Calculator Formula Type:</label>';
            echo '<select id="product_formula_type" name="product_formula_type" style="width:100%">';
            echo '<option value="1"' . selected($formula_type, '1', false) . '>Formula 1 (default)</option>';
            echo '<option value="2"' . selected($formula_type, '2', false) . '>Formula 2 (density required)</option>';
            echo '</select><br><br>';

            // Density field
            $density = get_post_meta($post->ID, '_product_density', true);
            echo '<label for="product_density">Product Density (Kg/L):</label>';
            echo '<input type="number" id="product_density" name="product_density" value="' . esc_attr($density) . '" min="0" step="0.01" style="width:100%">';
        },
        'product',
        'side',
        'default'
    );
});

add_action('save_post_product', function($post_id) {
    if (isset($_POST['product_thickness'])) {
        update_post_meta($post_id, '_product_thickness', floatval($_POST['product_thickness']));
    }
    if (isset($_POST['product_formula_type'])) {
        update_post_meta($post_id, '_product_formula_type', sanitize_text_field($_POST['product_formula_type']));
    }
    if (isset($_POST['product_density'])) {
        update_post_meta($post_id, '_product_density', floatval($_POST['product_density']));
    }
});

// AJAX handler for filtering products by tint color in category 27
add_action('wp_ajax_filter_products_by_tint', 'filter_products_by_tint');
add_action('wp_ajax_nopriv_filter_products_by_tint', 'filter_products_by_tint');

function filter_products_by_tint() {
    $search_term = isset($_POST['search_term']) ? sanitize_text_field($_POST['search_term']) : '';

    // Query products in category 21
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => -1,
    );

    $products = new WP_Query($args);
    $matched_products = array();

    if ($products->have_posts()) {
        while ($products->have_posts()) {
            $products->the_post();
            $product_id = get_the_ID();

            // If no search term, include all products
            if (empty($search_term)) {
                $matched_products[] = $product_id;
                continue;
            }

            $product = wc_get_product($product_id);

            // Skip if product doesn't exist
            if (!$product) {
                continue;
            }

            // Get product attributes
            $attributes = $product->get_attributes();

            if (empty($attributes)) {
                continue;
            }

            $product_matched = false;

            // Look for tint attribute
            foreach ($attributes as $attribute) {
                if ($product_matched) break; // Skip if already matched

                $attribute_name = $attribute->get_name();

                // Check if this is a tint or color attribute (case-insensitive)
                if (stripos($attribute_name, 'tint') !== false || stripos($attribute_name, 'color') !== false) {
                    $options = $attribute->get_options();

                    if (empty($options)) {
                        continue;
                    }

                    // Search through tint options
                    foreach ($options as $option) {
                        if ($attribute->is_taxonomy()) {
                            // Taxonomy attribute (e.g. pa_tint)
                            $term = get_term($option);
                            if ($term && !is_wp_error($term)) {
                                $tint_name = $term->name;
                            } else {
                                continue;
                            }
                        } else {
                            // Custom attribute (text)
                            $tint_name = $option;
                        }

                        // Check match (case-insensitive, partial)
                        if (stripos($tint_name, $search_term) !== false) {
                            $matched_products[] = $product_id;
                            $product_matched = true;
                            break;
                        }
                    }
                }
            }
        }
        wp_reset_postdata();
    }

    // Remove duplicates
    $matched_products = array_unique($matched_products);
    if (empty($matched_products)) {
        wp_send_json_error(array('message' => 'No products found'));
        return;
    }

    // Generate HTML for matched products (4 per row like related products)
    ob_start();

    $count = 0;
    foreach ($matched_products as $product_id) {
        $product = wc_get_product($product_id);

        if (!$product) {
            continue;
        }

        ?>
        <div class="col-md-3 col-6 mb-4">
            <div class="product">
                <a href="<?php echo esc_url(get_permalink($product_id)); ?>" class="woocommerce-loop-product__link">
                    <?php echo $product->get_image('woocommerce_thumbnail'); ?>
                    <h2 class="woocommerce-loop-product__title"><?php echo esc_html($product->get_name()); ?></h2>
                    <span class="price"><?php echo $product->get_price_html(); ?></span>
                </a>
            </div>
        </div>
        <?php

        $count++;
    }

    $html = ob_get_clean();

    wp_send_json_success(array(
        'html' => $html,
        'count' => $count
    ));
}

// Add password toggle functionality to My Account page
add_action('wp_footer', 'add_account_page_scripts');
function add_account_page_scripts() {
    if (is_account_page()) {
        ?>
        <script>
        jQuery(document).ready(function($) {
            // Password visibility toggle
            $('.show-password-input').on('click', function() {
                var $this = $(this);
                var $input = $this.siblings('input');
                var toggle = $this.attr('data-toggle');

                if (toggle === '0') {
                    $input.attr('type', 'text');
                    $this.attr('data-toggle', '1');
                    $this.find('.dashicons').removeClass('dashicons-visibility').addClass('dashicons-hidden');
                } else {
                    $input.attr('type', 'password');
                    $this.attr('data-toggle', '0');
                    $this.find('.dashicons').removeClass('dashicons-hidden').addClass('dashicons-visibility');
                }
            });
        });
        </script>
        <?php
    }
}

// Load Google reCAPTCHA on account page
add_action('wp_enqueue_scripts', 'enqueue_recaptcha_script');
function enqueue_recaptcha_script() {
    if (is_account_page()) {
        wp_enqueue_script('google-recaptcha', 'https://www.google.com/recaptcha/api.js', array(), null, true);
    }
}
