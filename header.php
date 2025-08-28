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
        <header class="banner position-fixed w-100 tinted-bg d-none d-lg-block shadow-sm"
            style="background: none 0% 0% / auto repeat scroll padding-box border-box rgba(0, 0, 0, 0.33);">
            <div class="banner--top position-relative d-lg-block d-none" style="opacity: 1; height: auto;">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center row mx-0">
                        <div class="col-3">
                            <ul id="secondaryNav" class="nav">
                                <?php if (!empty($header['header_secondary_menu'])): ?>
                                    <?php foreach ($header['header_secondary_menu'] as $item): ?>
                                        <li class="menu-item">
                                            <a href="<?php echo esc_url($item['url']); ?>" class="text-uppercase">
                                                <?php echo esc_html($item['label']); ?>
                                            </a>
                                            <span class="menu-border"></span>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <a class="brand my-4 p-lg-0 mx-auto d-block text-center col-6" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php if (!empty($header['header_logo'])): ?>
                                <img src="<?php echo esc_url($header['header_logo']); ?>" alt="Logo" class="mx-auto img-fluid banner--logo-top light" />
                            <?php endif; ?>
                        </a>
                        <div class="account-nav col-3 d-none d-lg-flex align-items-center justify-content-end">
                            <ul class="account-nav__menu nav">
                                <?php if (!empty($header['header_account_menu'])): ?>
                                    <?php foreach ($header['header_account_menu'] as $item): ?>
                                        <li class="account-nav__item">
                                            <a href="<?php echo esc_url($item['url']); ?>" class="account-nav__link">
                                                <?php echo esc_html($item['icon_html']); ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <li class="manufacturing-info-header text-center">
                                    <?php if (!empty($header['header_union_jack_svg'])): ?>
                                        <?php echo $header['header_union_jack_svg']; ?>
                                    <?php endif; ?>
                                    <p class="text-center text-uppercase mt-n1 py-0 mb-0">
                                        <small><?php echo esc_html($header['header_made_in_britain']); ?></small>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-3 banner--menu-row" style="border-top-width: 1px; border-color: rgb(222, 226, 230) rgb(0, 0, 0) rgb(0, 0, 0);">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center row mx-0">
                        <ul class="main-menu col-9 nav">
                            <?php if (!empty($header['header_main_menu'])): ?>
                                <?php foreach ($header['header_main_menu'] as $item): ?>
                                    <li class="menu-item">
                                        <a href="<?php echo esc_url($item['url']); ?>" class="text-uppercase">
                                            <?php echo esc_html($item['label']); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div id="content" class="site-content">