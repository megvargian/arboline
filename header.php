<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
$options = get_fields('options');
$header = $options['header'];
$left_side = $header['left_side'];
$right_side = $header['right_side'];
$logo = $header['header_logo'];
$main_menu = $header['header_main_menu'];
$sub_menu = $header['sub_menus'];
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site main_page_wrapper">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            style="display: none;" aria-modal="true" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-black text-white">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Find a Product</h5>
                        <a type="button" class="text-white" data-bs-dismiss="modal" aria-label="Close"><i
                                class="bi bi-x-lg"></i></a>
                    </div>
                    <div class="modal-body">
                        <div class="yith-ajaxsearchform-container">
                            <form role="search" method="get" id="yith-ajaxsearchform" action="/">
                                <div>
                                    <label class="screen-reader-text" for="yith-s">Search for:</label>
                                    <input type="search" value="" name="s" id="yith-s" class="yith-s"
                                        placeholder="Search for products" data-loader-icon="" data-min-chars="3"
                                        autocomplete="off">
                                    <input type="submit" id="yith-searchsubmit" value="Search">
                                    <input type="hidden" name="post_type" value="product">
                                </div>
                            </form>
                            <div class="autocomplete-suggestions"
                                style="position: absolute; display: none; max-height: 300px; z-index: 9999;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="banner position-fixed w-100 tinted-bg d-none d-lg-block shadow-sm"
            style="background: none 0% 0% / auto repeat scroll padding-box border-box rgba(0, 0, 0, 0.33);">
            <div class="banner--top position-relative d-lg-block d-none" style="opacity: 1; height: auto;">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center row mx-0">
                        <div class="col-3">
                            <ul id="secondaryNav" class="nav">
                                <li class="menu-item">
                                    <a href="<?php echo $left_side['first_button_url']; ?>" class="text-uppercase">
                                        <?php echo $left_side['first_button_text']; ?>
                                    </a>
                                    <span class="menu-border"></span>
                                </li>
                                <li class="menu-item">
                                    <a href="<?php echo $left_side['second_button_url']; ?>" class="text-uppercase">
                                        <?php echo $left_side['second_button_text']; ?>
                                    </a>
                                    <span class="menu-border"></span>
                                </li>
                            </ul>
                        </div>
                        <a class="brand my-4 p-lg-0 mx-auto d-block text-center col-6"
                            href="<?php echo esc_url(home_url('/')); ?>">
                            <img aria-label="Logo" class="mx-auto img-fluid banner--logo-top light" id="Layer_1"
                                src="<?php echo $logo; ?>" alt="arboline">
                        </a>
                        <div class="account-nav col-3 d-none d-lg-flex align-items-center justify-content-end">
                            <ul class="account-nav__menu nav">
                                <li class="account-nav__item">
                                    <a href="#" class="account-nav__link search" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="bi bi-search"></i>
                                    </a>
                                </li>
                                <li class="account-nav__item px-3">
                                    <a href="https://arboline.com/my-account/" class="account-nav__link account">
                                        <i class="bi bi-person"></i>
                                    </a>
                                </li>
                                <li class="account-nav__item">
                                    <a href="https://arboline.com/cart/"
                                        class="account-nav__link cart position-relative">
                                        <i class="bi bi-cart"></i>
                                    </a>
                                </li>
                                <li class="manufacturing-info-header text-center">
                                    <img src="<?php echo $right_side['image_flag']; ?>" alt="Union Jack Logo"
                                        class="img-fluid union-jack-logo m-0">
                                    <p class="text-center text-uppercase mt-n1 py-0 mb-0">
                                        <small><?php echo $right_side['made_in_text']; ?></small>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-3 banner--menu-row"
                style="border-top-width: 1px; border-color: rgb(222, 226, 230) rgb(0, 0, 0) rgb(0, 0, 0);">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center row mx-0">
                        <a class="col-3 brand p-2 p-lg-0" href="https://arboline.com/">
                            <!--?xml version="1.0" encoding="UTF-8"?--><svg aria-label="Logo"
                                class="img-fluid banner--logo-menu" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 371.37 79.11" style="opacity: 0;">
                                <g>
                                    <path
                                        d="M.61,15.81C.42,11.12,.22,6.32,0,1.44c3.31,.15,6.59,.28,9.86,.39s6.56,.17,9.86,.17,6.65-.06,10.03-.17c3.38-.11,7.05-.24,11.02-.39-.22,1.11-.33,2.22-.33,3.33s.11,2.22,.33,3.33c-1.98-.22-4.37-.42-7.16-.61-2.8-.19-5.64-.33-8.54-.45-2.9-.11-5.69-.2-8.37-.28-2.68-.07-4.9-.12-6.67-.12-.07,2.59-.13,5.07-.17,7.43-.04,2.37-.05,4.74-.05,7.1,0,2.59,.02,4.97,.05,7.16,.04,2.18,.06,4.46,.06,6.83,4.84,0,9.64-.08,14.38-.22,4.74-.15,9.42-.45,14.05-.89-.29,1.11-.44,2.22-.44,3.33s.15,2.22,.44,3.33c-1.84-.22-3.91-.39-6.22-.5-2.32-.11-4.73-.2-7.22-.28-2.5-.07-5.03-.12-7.6-.12h-7.38v9.43c0,4.88,.09,9.7,.28,14.43,.18,4.73,.38,9.39,.6,13.98-1.69-.15-3.49-.22-5.4-.22s-3.71,.07-5.4,.22c.22-4.59,.42-9.24,.61-13.98,.18-4.73,.28-9.54,.28-14.43V30.18c0-4.88-.1-9.67-.28-14.37">
                                    </path>
                                    <path
                                        d="M55.71,15.81c-.18-4.69-.39-9.49-.61-14.37,.96,.15,1.87,.28,2.75,.39,.88,.11,1.77,.17,2.65,.17s1.76-.06,2.65-.17c.88-.11,1.8-.24,2.75-.39-.22,4.88-.42,9.68-.6,14.37-.18,4.7-.27,9.49-.27,14.37v19.08c0,4.88,.09,9.7,.27,14.43,.18,4.73,.38,9.39,.6,13.98-1.69-.15-3.49-.22-5.4-.22s-3.71,.07-5.4,.22c.22-4.59,.42-9.24,.61-13.98,.18-4.73,.28-9.54,.28-14.43V30.18c0-4.88-.1-9.67-.28-14.37">
                                    </path>
                                    <path
                                        d="M95.65,49.26c0,7.99,.21,15.83,.66,23.52,1.55,.37,3.64,.65,6.28,.84,2.64,.18,5.36,.28,8.15,.28,4.04,0,8.08-.48,12.12-1.44,4.04-.96,7.66-2.77,10.85-5.44,3.2-2.66,5.81-6.3,7.82-10.93,2.02-4.62,3.03-10.6,3.03-17.92,0-6.44-.79-11.73-2.37-15.87-1.58-4.14-3.75-7.42-6.5-9.82s-6.05-4.06-9.86-4.99c-3.82-.93-8-1.39-12.56-1.39-3.3,0-6.39,.11-9.25,.34-2.87,.22-5.44,.48-7.72,.78-.22,3.55-.38,7.27-.5,11.15-.11,3.88-.16,7.82-.16,11.81v19.08Zm-9.04-19.08c0-4.88-.1-9.67-.28-14.37-.18-4.69-.39-9.49-.61-14.37,2.8,.15,5.57,.28,8.32,.39,2.75,.11,5.53,.17,8.32,.17s5.56-.1,8.32-.28c2.75-.19,5.53-.28,8.31-.28,6.46,0,12,.86,16.59,2.56,4.59,1.7,8.36,4.12,11.3,7.26,2.93,3.15,5.08,6.99,6.45,11.54,1.36,4.55,2.04,9.67,2.04,15.37,0,7.4-1.27,13.63-3.8,18.69-2.54,5.07-5.77,9.15-9.7,12.26-3.93,3.11-8.26,5.31-13,6.6-4.74,1.29-9.27,1.94-13.61,1.94-2.5,0-4.96-.04-7.38-.11-2.43-.07-4.89-.11-7.38-.11h-7.38c-2.43,0-4.89,.07-7.38,.22,.22-4.59,.43-9.24,.61-13.98,.18-4.73,.28-9.54,.28-14.43V30.18Z">
                                    </path>
                                    <path
                                        d="M181.39,49.26c0,7.99,.22,15.83,.66,23.52,1.55,.37,3.64,.65,6.28,.84,2.64,.18,5.36,.28,8.15,.28,4.04,0,8.08-.48,12.12-1.44,4.04-.96,7.66-2.77,10.85-5.44,3.2-2.66,5.81-6.3,7.82-10.93,2.02-4.62,3.03-10.6,3.03-17.92,0-6.44-.79-11.73-2.37-15.87-1.58-4.14-3.75-7.42-6.5-9.82s-6.04-4.06-9.86-4.99c-3.82-.93-8-1.39-12.56-1.39-3.3,0-6.39,.11-9.25,.34-2.87,.22-5.44,.48-7.72,.78-.22,3.55-.38,7.27-.5,11.15-.11,3.88-.16,7.82-.16,11.81v19.08Zm-9.04-19.08c0-4.88-.1-9.67-.28-14.37-.18-4.69-.39-9.49-.61-14.37,2.8,.15,5.57,.28,8.32,.39,2.75,.11,5.53,.17,8.32,.17s5.56-.1,8.32-.28c2.75-.19,5.53-.28,8.32-.28,6.46,0,11.99,.86,16.59,2.56,4.59,1.7,8.36,4.12,11.3,7.26,2.93,3.15,5.08,6.99,6.45,11.54,1.36,4.55,2.04,9.67,2.04,15.37,0,7.4-1.27,13.63-3.8,18.69-2.54,5.07-5.77,9.15-9.7,12.26-3.93,3.11-8.26,5.31-13,6.6-4.74,1.29-9.27,1.94-13.61,1.94-2.5,0-4.96-.04-7.38-.11-2.43-.07-4.89-.11-7.38-.11h-7.38c-2.43,0-4.89,.07-7.38,.22,.22-4.59,.42-9.24,.61-13.98,.18-4.73,.28-9.54,.28-14.43V30.18Z">
                                    </path>
                                    <path
                                        d="M257.81,15.65c-.19-4.73-.39-9.47-.61-14.21,3.31,.15,6.59,.28,9.86,.39,3.27,.11,6.56,.17,9.86,.17s6.58-.06,9.81-.17c3.23-.11,6.51-.24,9.81-.39-.22,1.11-.33,2.22-.33,3.33s.11,2.22,.33,3.33c-2.35-.14-4.5-.3-6.45-.44-1.95-.15-4.01-.29-6.17-.44-2.17-.15-4.54-.28-7.11-.39-2.58-.11-5.66-.17-9.26-.17-.07,2.37-.16,4.63-.27,6.77-.11,2.15-.16,4.58-.16,7.32,0,2.89,.01,5.7,.05,8.43,.04,2.74,.05,4.81,.05,6.21,3.23,0,6.13-.04,8.7-.11,2.57-.07,4.92-.17,7.05-.28,2.13-.11,4.09-.22,5.9-.34,1.8-.11,3.51-.23,5.13-.38-.22,1.11-.33,2.25-.33,3.44,0,1.11,.11,2.22,.33,3.33-1.91-.22-4.13-.4-6.67-.56-2.54-.15-5.07-.24-7.6-.28-2.54-.03-4.92-.07-7.16-.11-2.25-.04-4.03-.05-5.35-.05,0,.67-.02,1.39-.05,2.17-.04,.78-.05,1.76-.05,2.94v10.98c0,4.22,.01,7.69,.05,10.43,.04,2.74,.09,4.81,.16,6.21h7.72c2.79,0,5.53-.05,8.21-.16,2.68-.11,5.22-.26,7.6-.45,2.38-.19,4.46-.46,6.22-.84-.15,.52-.24,1.09-.28,1.72-.04,.63-.05,1.2-.05,1.72,0,1.19,.11,2.15,.33,2.89-3.3-.15-6.59-.22-9.86-.22h-20c-3.3,0-6.65,.07-10.03,.22,.22-4.73,.42-9.45,.61-14.15,.18-4.7,.27-9.49,.27-14.37V30.07c0-4.88-.1-9.69-.27-14.42">
                                    </path>
                                    <path
                                        d="M313.13,67.29c.99,1.37,2.2,2.61,3.63,3.72,1.43,1.11,3.11,2.01,5.02,2.72,1.91,.7,4.04,1.05,6.39,1.05s4.61-.42,6.55-1.27c1.95-.85,3.6-2,4.96-3.44,1.36-1.44,2.41-3.14,3.14-5.1,.73-1.96,1.1-4.05,1.1-6.27,0-3.4-.87-6.1-2.59-8.1-1.73-2-3.88-3.66-6.45-4.99-2.57-1.34-5.35-2.56-8.32-3.66-2.98-1.11-5.75-2.5-8.32-4.16-2.57-1.67-4.72-3.79-6.45-6.38-1.73-2.59-2.59-6.06-2.59-10.43,0-3.1,.55-5.94,1.65-8.49,1.11-2.55,2.7-4.75,4.8-6.6,2.09-1.85,4.61-3.29,7.55-4.33,2.93-1.03,6.24-1.55,9.92-1.55s6.57,.43,9.15,1.28c2.57,.85,4.96,2.16,7.16,3.94-.66,1.26-1.21,2.59-1.66,3.99-.43,1.41-.88,3.18-1.32,5.32h-1.32c-.37-1.03-.87-2.16-1.49-3.38-.63-1.22-1.48-2.35-2.54-3.39-1.06-1.03-2.33-1.91-3.8-2.61-1.47-.7-3.23-1.05-5.29-1.05s-3.95,.34-5.68,1c-1.73,.67-3.23,1.61-4.52,2.83-1.28,1.22-2.28,2.68-2.98,4.38-.7,1.7-1.05,3.55-1.05,5.55,0,3.48,.86,6.21,2.59,8.21,1.73,2,3.88,3.68,6.44,5.05,2.58,1.37,5.35,2.59,8.32,3.66,2.98,1.07,5.75,2.39,8.32,3.94,2.57,1.55,4.72,3.55,6.44,5.99,1.73,2.44,2.59,5.7,2.59,9.76,0,3.4-.61,6.62-1.82,9.65-1.21,3.04-2.97,5.68-5.29,7.93-2.32,2.26-5.14,3.99-8.49,5.22-3.34,1.22-7.14,1.83-11.4,1.83-4.56,0-8.25-.61-11.07-1.83-2.83-1.22-5.2-2.6-7.11-4.16,.66-1.7,1.12-3.24,1.38-4.61,.26-1.37,.5-3.12,.72-5.27h1.32c.58,1.33,1.38,2.68,2.37,4.05">
                                    </path>
                                </g>
                                <g>
                                    <path
                                        d="M364.83,14.52c-3.6,0-6.53-2.94-6.53-6.55,0-3.6,2.94-6.53,6.55-6.53,3.6,0,6.53,2.94,6.53,6.55s-2.94,6.53-6.55,6.53Zm.02-12.27c-3.16,0-5.74,2.56-5.74,5.72s2.56,5.74,5.72,5.74,5.74-2.56,5.74-5.72-2.56-5.74-5.72-5.74Z">
                                    </path>
                                    <path
                                        d="M365.02,8.77h-1.33s0,2.65,0,2.65h-1.2s.01-6.89,.01-6.89h2.42c.79,0,1.41,.18,1.84,.54,.43,.36,.65,.87,.65,1.55,0,.46-.11,.85-.34,1.16-.22,.31-.53,.55-.93,.72l1.54,2.87v.06s-1.28,0-1.28,0l-1.38-2.65Zm-1.33-.97h1.23c.4,0,.72-.1,.95-.3,.23-.2,.34-.48,.34-.83s-.1-.65-.31-.86c-.21-.2-.52-.31-.94-.31h-1.26s0,2.31,0,2.31Z">
                                    </path>
                                </g>
                            </svg>
                        </a>
                        <div class="col-6 flex-column justify-content-between align-items-center d-none d-lg-flex">
                            <ul id="primaryNav" class="nav">
                                <?php foreach ($main_menu as $key => $menu_item) {
                                    if ($key == 1) { ?>
                                <li class="menu-item product-dropdown awwdawda">
                                    <a class="text-uppercase" data-bs-toggle="collapse" href="#collapseProducts"
                                        role="button" aria-expanded="false" aria-controls="collapseProducts">
                                        <?php echo $menu_item['label']; ?>
                                    </a>
                                </li>
                                <?php continue; } ?>
                                <li class="menu-item">
                                    <a href="<?php echo $menu_item['url']; ?>" class="text-uppercase">
                                        <?php echo $menu_item['label']; ?>
                                    </a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="account-nav col-3 d-none d-lg-flex align-items-center justify-content-end">
                            <ul class="account-nav__menu nav">
                                <li class="account-nav__item">
                                    <a href="#" class="account-nav__link search" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="bi bi-search"></i>
                                    </a>
                                </li>
                                <li class="account-nav__item px-3">
                                    <a href="https://arboline.com/my-account/" class="account-nav__link account">
                                        <i class="bi bi-person"></i>
                                    </a>
                                </li>
                                <li class="account-nav__item">
                                    <a href="https://arboline.com/cart/"
                                        class="account-nav__link cart position-relative">
                                        <i class="bi bi-cart"></i>
                                    </a>
                                </li>
                                <li class="manufacturing-info-header text-center">
                                    <svg alt="Union Jack Logo" class="img-fluid union-jack-logo m-0"
                                        xmlns="http://www.w3.org/2000/svg" width="558.385" height="332.335"
                                        viewBox="0 0 558.385 332.335">
                                        <g id="union-jack" transform="translate(2)">
                                            <rect id="Rectangle_420" data-name="Rectangle 420" width="557.985"
                                                height="332.335" transform="translate(-1.681)" fill="#282e6e"></rect>
                                            <path id="Path_330" data-name="Path 330"
                                                d="M496.908,0h61.077V34.812L62.608,332.335H0V298.767Z"
                                                transform="translate(-1.681)" fill="#fff"></path>
                                            <path id="Path_331" data-name="Path 331"
                                                d="M496.908,332.335h61.077V297.523L62.608,0H0V33.568Z"
                                                transform="translate(-1.681)" fill="#fff"></path>
                                            <rect id="Rectangle_421" data-name="Rectangle 421" width="78.443"
                                                height="332.335" transform="translate(239.087)" fill="#fff"></rect>
                                            <rect id="Rectangle_422" data-name="Rectangle 422" width="557.985"
                                                height="83.227" transform="translate(-1.681 123.781)" fill="#fff">
                                            </rect>
                                            <rect id="Rectangle_423" data-name="Rectangle 423" width="557.985"
                                                height="52.609" transform="translate(-1.681 139.472)" fill="#e31318">
                                            </rect>
                                            <rect id="Rectangle_424" data-name="Rectangle 424" width="46.868"
                                                height="332.335" transform="translate(254.874)" fill="#e31318"></rect>
                                            <path id="Path_332" data-name="Path 332"
                                                d="M239.087,1298.1H201.324L-2,1423.427H35.778Z"
                                                transform="translate(0 -1091.092)" fill="#e31318"></path>
                                            <path id="Path_333" data-name="Path 333"
                                                d="M2216.6,1300.5h31.575l173.009,103.528-.08,21.417Z"
                                                transform="translate(-1864.8 -1093.109)" fill="#e31318"></path>
                                            <path id="Path_334" data-name="Path 334"
                                                d="M2010.1,123.781h36.12L2247.535,0h-36.423Z"
                                                transform="translate(-1691.231)" fill="#e31318"></path>
                                            <path id="Path_335" data-name="Path 335"
                                                d="M0,0,210.086,123.781H177.235L0,19.392Z" transform="translate(-1.681)"
                                                fill="#e31318"></path>
                                        </g>
                                    </svg>
                                    <p class="text-center text-uppercase mt-n1 py-0 mb-0">
                                        <small>Made in Britain</small>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse product-mega-menu bg-gray-200 pb-3" id="collapseProducts">
                <div class="product-mega-menu__inner py-4 pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-7 py-4">
                                <p class="h2 text-uppercase underline mb-5 text-center">
                                    <span class="w-100 d-block">Categories</span>
                                </p>
                                <nav class="navbar navbar-expand-lg navbar-light bg-light flex-column align-items-start"
                                    style="background-color: #efefef !important">
                                    <ul id="productMegaNav" class="mx-0 p-0 w-50">
                                        <?php foreach ($sub_menu as $key => $menu) {
                                            if($menu['has_menu']) { ?>
                                                <li class="menu-item mb-3  menu-item-type-taxonomy menu-item-object-product_cat  has-children dropdown">
                                                    <a href="#"
                                                        class="pb-2 d-flex justify-content-between text-uppercase nav-link  dropdown-toggle"
                                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <?php echo $menu['title']; ?>
                                                        <i class="bi bi-chevron-right"></i>
                                                    </a>
                                                    <ul class="ps-4 dropdown-menu child-menu list-unstyled shadow-0"
                                                        data-bs-popper="static" aria-labelledby="navbarDropdownMenuLink">
                                                        <?php foreach ($menu['menu'] as $key => $menu_item) { ?>
                                                            <li class="child-menu-item mb-2  menu-item-object-product ">
                                                                <a class="text-uppercase"
                                                                    href="<?php echo $menu_item['url']; ?>">
                                                                    <?php echo $menu_item['label']; ?>
                                                                </a>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                </li>
                                            <?php } else { ?>
                                                 <li class="menu-item mb-3   ">
                                                    <a href="<?php echo $menu['title_url']; ?>"
                                                        class="pb-2 d-flex justify-content-between text-uppercase nav-link ">
                                                        <?php echo $menu['title']; ?>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        <?php } ?>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-12 col-lg-1 d-flex">
                                <div class="mx-auto h-100 border-end d-block"></div>
                            </div>
                            <div class="col-12 col-lg-4 py-4">
                                <p class="h2 text-uppercase underline text-center mb-5 w-100"><span
                                        class="w-100 d-block">Catalogue</span></p>
                                <p class="text-center pt-1 mb-4">
                                    <a class="text-uppercase fs-4" href="https://arboline.com/product-catalogue/">View
                                        All</a>
                                </p>
                                <a class="text-uppercase" href="https://arboline.com/product-catalogue/">
                                    <img class="w-100 img-fluid" alt="FIDDES Product Catalogue"
                                        src="<?php echo get_template_directory_uri(); ?>/inc/assets/images/catalogue-image.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <header class="mobBanner d-flex d-lg-none fixed-top bg-white shadow" style="">
            <div class="col-6">
                <a class="d-flex align-items-center h-100 ps-4" href="<?php echo home_url(); ?>">
                    <img src="<?php echo $header['black_logo']; ?>" alt="arboline" aria-label="Logo" class="img-fluid d-block mob-logo">
                </a>
            </div>
            <div class="col-6 flex-column justify-content-end align-items-end d-flex d-lg-none">
                <button class="btn bg-gray-100 text-primary d-block d-lg-none mobile-nav-toggle" type="button"
                    data-bs-toggle="offcanvas" data-bs-target="#mobMenu" aria-controls="mobMenu">
                    <i class="bi bi-list fs-1"></i>
                </button>
            </div>
        </header>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="mobMenu" aria-labelledby="mobMenuLabel"
            aria-modal="true" role="dialog">
            <div class="offcanvas-header">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <p class="h2 mb-0">Products</p>
                <div class="accordion mobile-nav mb-4" id="mobileNavAcordion">
                    <?php foreach ($sub_menu as $key => $menu) {
                        if($menu['has_menu']) { ?>
                            <div class="accordion-item border-0">
                                <p class="accordion-header border-0" id="heading-floor-worktop-finishes-<?php echo $key; ?>">
                                    <a class="text-uppercase accordion-button border-bottom collapsed px-0 has-children"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#floor-worktop-finishes-<?php echo $key; ?>"
                                        aria-expanded="" aria-controls="floor-worktop-finishes-<?php echo $key; ?>">
                                        <?php echo $menu['title']; ?>
                                    </a>
                                </p>
                                <div id="floor-worktop-finishes-<?php echo $key; ?>" class="accordion-collapse collapse"
                                    aria-labelledby="heading-floor-worktop-finishes-<?php echo $key; ?>" data-bs-parent="#mobileNavAcordion">
                                    <div class="accordion-body bg-gray-100 p-0">
                                        <ul class="list-unstyled m-0 py-2 px-2">
                                            <?php foreach ($menu['menu'] as $key => $menu_item) { ?>
                                                <li class="child-menu-item  menu-item-object-product ">
                                                    <a class="p-2 w-100 d-block text-uppercase"
                                                        href="<?php echo $menu_item['url']; ?>">
                                                        <?php echo $menu_item['label']; ?>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="accordion-item border-0 ">
                                <a class="accordion-button border-bottom collapsed px-0 menu-link text-uppercase"
                                    href="<?php echo $menu['title_url']; ?>">
                                    <?php echo $menu['title']; ?>
                                </a>
                            </div>
                        <?php  } ?>
                    <?php  } ?>
                    <!-- <div class="accordion-item border-0">
                        <p class="accordion-header border-0" id="heading-floor-worktop-finishes">
                            <a class="text-uppercase accordion-button border-bottom collapsed px-0 has-children"
                                type="button" data-bs-toggle="collapse" data-bs-target="#floor-worktop-finishes"
                                aria-expanded="" aria-controls="floor-worktop-finishes">
                                Floor &amp; Worktop Finishes
                            </a>
                        </p>
                        <div id="floor-worktop-finishes" class="accordion-collapse collapse"
                            aria-labelledby="heading-floor-worktop-finishes" data-bs-parent="#mobileNavAcordion">
                            <div class="accordion-body bg-gray-100 p-0">
                                <ul class="list-unstyled m-0 py-2 px-2">
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product/hard-wax-oil/">
                                            Hard Wax Oil
                                        </a>
                                    </li>
                                    <li class="child-menu-item  ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product/hard-wax-oil/#fiddes-ultra-raw-hard-wax-oil">
                                            ULTRA RAW HARD WAX OIL
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product/premier-wood-varnish/">
                                            Premier Wood Varnish
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product/floor-reviving-kit/">
                                            Floor Reviving Kit
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product/liquid-floor-wax/">
                                            Floor Wax
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product/floor-surface-cleaner/">
                                            Floor Cleaner
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product/wood-surface-cleaner/">
                                            Wood Surface Cleaner
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product/barrier-seal/">
                                            Barrier Seal
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product/clear-glaze/">
                                            Clear Glaze
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <p class="accordion-header border-0" id="heading-interior-wood-finishes">
                            <a class="text-uppercase accordion-button border-bottom collapsed px-0 has-children"
                                type="button" data-bs-toggle="collapse" data-bs-target="#interior-wood-finishes"
                                aria-expanded="" aria-controls="interior-wood-finishes">
                                Interior Wood Finishes
                            </a>
                        </p>
                        <div id="interior-wood-finishes" class="accordion-collapse collapse"
                            aria-labelledby="heading-interior-wood-finishes" data-bs-parent="#mobileNavAcordion">
                            <div class="accordion-body bg-gray-100 p-0">
                                <ul class="list-unstyled m-0 py-2 px-2">
                                    <li class="child-menu-item  menu-item-type-taxonomy menu-item-object-product_cat ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product-category/wood-finishes/oils/">
                                            Oils
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-type-taxonomy menu-item-object-product_cat ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product-category/wood-finishes/shellac-polish/">
                                            Shellac
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-type-taxonomy menu-item-object-product_cat ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product-category/wood-finishes/wax/">
                                            Wax
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-type-taxonomy menu-item-object-product_cat ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product-category/wood-finishes/stains/">
                                            Stains
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-type-taxonomy menu-item-object-product_cat ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product-category/wood-finishes/thinners/">
                                            Thinners
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product/light-fast-water-concentrates/">
                                            Concentrates
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product/spirit-oil-soluble-base-tints/">
                                            Base Tints
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product/spirit-soluble-dry-pigment-powders/">
                                            Pigment Powder
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <p class="accordion-header border-0" id="heading-exterior-wood-finishes">
                            <a class="text-uppercase accordion-button border-bottom collapsed px-0 has-children"
                                type="button" data-bs-toggle="collapse" data-bs-target="#exterior-wood-finishes"
                                aria-expanded="" aria-controls="exterior-wood-finishes">
                                Exterior Wood Finishes
                            </a>
                        </p>
                        <div id="exterior-wood-finishes" class="accordion-collapse collapse"
                            aria-labelledby="heading-exterior-wood-finishes" data-bs-parent="#mobileNavAcordion">
                            <div class="accordion-body bg-gray-100 p-0">
                                <ul class="list-unstyled m-0 py-2 px-2">
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product/exterior-high-build-wood-oil/">
                                            Exterior High Build Wood Oil
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product/exterior-wood-protector/">
                                            Exterior Wood Protector
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product/decking-oil/">
                                            Universal Decking Oil
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product/fiddes-deck-cleaner/">
                                            FIDDES Deck Cleaner
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product/wood-reviver-gel/">
                                            WOOD REVIVER GEL
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0">
                        <p class="accordion-header border-0" id="heading-accessories">
                            <a class="text-uppercase accordion-button border-bottom collapsed px-0 has-children"
                                type="button" data-bs-toggle="collapse" data-bs-target="#accessories" aria-expanded=""
                                aria-controls="accessories">
                                Accessories
                            </a>
                        </p>
                        <div id="accessories" class="accordion-collapse collapse" aria-labelledby="heading-accessories"
                            data-bs-parent="#mobileNavAcordion">
                            <div class="accordion-body bg-gray-100 p-0">
                                <ul class="list-unstyled m-0 py-2 px-2">
                                    <li class="child-menu-item  menu-item-type-taxonomy menu-item-object-product_cat ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product-category/accessories/abrasives/">
                                            Abrasives
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-type-taxonomy menu-item-object-product_cat ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product-category/accessories/adhesives/">
                                            Adhesives
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-type-taxonomy menu-item-object-product_cat ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product-category/accessories/brushes/">
                                            Brushes
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-type-taxonomy menu-item-object-product_cat ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product-category/accessories/chemicals-solvents/">
                                            Chemicals &amp; Solvents
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-type-taxonomy menu-item-object-product_cat ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product-category/accessories/sundries/">
                                            Sundries
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-type-taxonomy menu-item-object-product_cat ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product-category/accessories/wood-fillers/">
                                            Wood Fillers
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 ">
                        <a class="accordion-button border-bottom collapsed px-0 menu-link text-uppercase"
                            href="https://arboline.com/spray-finishes/">
                            Industrial Spray Finishes
                        </a>
                    </div>
                    <div class="accordion-item border-0">
                        <p class="accordion-header border-0" id="heading-stain-block">
                            <a class="text-uppercase accordion-button border-bottom collapsed px-0 has-children"
                                type="button" data-bs-toggle="collapse" data-bs-target="#stain-block" aria-expanded=""
                                aria-controls="stain-block">
                                Stain Block
                            </a>
                        </p>
                        <div id="stain-block" class="accordion-collapse collapse" aria-labelledby="heading-stain-block"
                            data-bs-parent="#mobileNavAcordion">
                            <div class="accordion-body bg-gray-100 p-0">
                                <ul class="list-unstyled m-0 py-2 px-2">
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product/full-stop-stain-block/">
                                            FIDDES Full Stop Stain Block
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://arboline.com/product/fiddes-full-stop-h20-stain-block-1/">
                                            FIDDES Full Stop H20
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>

                <p class="h2 mb-0">FIDDES</p>
                <ul id="mobTopNav" class="nav mb-4">
                    <li
                        class="menu-item font-weight-bold d-block w-100  menu-item-home current-menu-item page-item-6 current_page_item active ">
                        <a href="https://arboline.com/" class="text-uppercase py-1 d-block w-100">
                            Home
                        </a>
                    </li>
                    <li class="menu-item font-weight-bold d-block w-100   ">
                        <a href="https://arboline.com/" class="text-uppercase py-1 d-block w-100">
                            Product Catalogue
                        </a>
                    </li>
                    <li class="menu-item font-weight-bold d-block w-100   ">
                        <a href="https://arboline.com/about/" class="text-uppercase py-1 d-block w-100">
                            About
                        </a>
                    </li>
                    <li class="menu-item font-weight-bold d-block w-100   ">
                        <a href="https://arboline.com/guides/" class="text-uppercase py-1 d-block w-100">
                            GUIDES
                        </a>
                    </li>
                    <li class="menu-item font-weight-bold d-block w-100   ">
                        <a href="https://arboline.com/contact/" class="text-uppercase py-1 d-block w-100">
                            Contact
                        </a>
                    </li>
                </ul>
                <div class="account-nav w-100 d-flex d-lg-none align-items-start justify-content-start">
                    <ul class="account-nav__menu nav">
                        <li class="account-nav__item">
                            <a href="#" class="account-nav__link search" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="bi bi-search"></i>
                            </a>
                        </li>
                        <li class="account-nav__item px-3">
                            <a href="https://arboline.com/my-account/" class="account-nav__link account">
                                <i class="bi bi-person"></i>
                            </a>
                        </li>
                        <li class="account-nav__item">
                            <a href="https://arboline.com/cart/" class="account-nav__link cart position-relative">
                                <i class="bi bi-cart"></i>
                            </a>
                        </li>
                        <li class="manufacturing-info-header text-center">
                            <svg alt="Union Jack Logo" class="img-fluid union-jack-logo m-0"
                                xmlns="http://www.w3.org/2000/svg" width="558.385" height="332.335"
                                viewBox="0 0 558.385 332.335">
                                <g id="union-jack" transform="translate(2)">
                                    <rect id="Rectangle_420" data-name="Rectangle 420" width="557.985" height="332.335"
                                        transform="translate(-1.681)" fill="#282e6e"></rect>
                                    <path id="Path_330" data-name="Path 330"
                                        d="M496.908,0h61.077V34.812L62.608,332.335H0V298.767Z"
                                        transform="translate(-1.681)" fill="#fff"></path>
                                    <path id="Path_331" data-name="Path 331"
                                        d="M496.908,332.335h61.077V297.523L62.608,0H0V33.568Z"
                                        transform="translate(-1.681)" fill="#fff"></path>
                                    <rect id="Rectangle_421" data-name="Rectangle 421" width="78.443" height="332.335"
                                        transform="translate(239.087)" fill="#fff"></rect>
                                    <rect id="Rectangle_422" data-name="Rectangle 422" width="557.985" height="83.227"
                                        transform="translate(-1.681 123.781)" fill="#fff"></rect>
                                    <rect id="Rectangle_423" data-name="Rectangle 423" width="557.985" height="52.609"
                                        transform="translate(-1.681 139.472)" fill="#e31318"></rect>
                                    <rect id="Rectangle_424" data-name="Rectangle 424" width="46.868" height="332.335"
                                        transform="translate(254.874)" fill="#e31318"></rect>
                                    <path id="Path_332" data-name="Path 332"
                                        d="M239.087,1298.1H201.324L-2,1423.427H35.778Z"
                                        transform="translate(0 -1091.092)" fill="#e31318"></path>
                                    <path id="Path_333" data-name="Path 333"
                                        d="M2216.6,1300.5h31.575l173.009,103.528-.08,21.417Z"
                                        transform="translate(-1864.8 -1093.109)" fill="#e31318"></path>
                                    <path id="Path_334" data-name="Path 334"
                                        d="M2010.1,123.781h36.12L2247.535,0h-36.423Z" transform="translate(-1691.231)"
                                        fill="#e31318"></path>
                                    <path id="Path_335" data-name="Path 335" d="M0,0,210.086,123.781H177.235L0,19.392Z"
                                        transform="translate(-1.681)" fill="#e31318"></path>
                                </g>
                            </svg>
                            <p class="text-center text-uppercase mt-n1 py-0 mb-0">
                                <small>Made in Britain</small>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <script>
        jQuery(document).ready(function($) {
            <?php if(is_product_category() || is_product() || is_checkout() || is_account_page() || is_cart() || is_page(13) ){ ?>
                $("header").addClass("active");
                $('.banner--menu-row').css({
                    'border-top-width': '0px',
                    'border-color': 'rgb(204, 204, 204)',
                });
                $('.banner--menu-row').addClass("hide-bg");
                $('.banner--logo-menu').css({
                    'opacity': '1',
                });
                $('.banner--menu-row.account-nav').css({
                    'opacity': '1',
                });
                $('.banner--top').css({
                    opacity: 0,
                    height: '0px'
                });
            <?php } else { ?>
                $(window).scroll(function() {
                    var currentScreenPosition = $(document).scrollTop();
                    if (currentScreenPosition > 250) {
                        $("header").addClass("active");
                        $('.banner--menu-row').css({
                            'border-top-width': '0px',
                            'border-color': 'rgb(204, 204, 204)',
                        });
                        $('.banner--menu-row').addClass("hide-bg");
                        $('.banner--logo-menu').css({
                            'opacity': '1',
                        });
                        $('.banner--menu-row.account-nav').css({
                            'opacity': '1',
                        });
                        $('.banner--top').css({
                            opacity: 0,
                            height: '0px'
                        });
                    }
                    if (currentScreenPosition < 125) {
                        $("header").removeClass("active");
                        $('.banner--top').css({
                            opacity: 1,
                            height: '78px'
                        });
                        $('.banner--menu-row').css({
                            'border-top': '1px solid #dee2e6',
                            'border-top-color': 'rgb(222, 226, 230) rgb(0, 0, 0) rgb(0, 0, 0)',
                        });
                        $('.banner--logo-menu').css({
                            'opacity': '0',
                        });
                        $('.banner--menu-row.account-nav').css({
                            'opacity': '0',
                        });
                        $('.banner--menu-row').removeClass("hide-bg");
                    }
                    $('.wp-block-cover__inner-container').css({
                        'margin-top': '0px',
                    });
                });
            <?php } ?>
        });
        </script>
        <div id="content" class="site-content">