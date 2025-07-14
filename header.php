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
        <script>
        jQuery(document).ready(function($) {
            $(window).scroll(function() {
                var currentScreenPosition = $(document).scrollTop();
                if (currentScreenPosition > 250) {
                    $("header").addClass("active");
                    $('.main-nav-section').addClass("active");
                    $('.main-logo-section').addClass("active");
                    $('.first-header').addClass("active");
                    $('.second-header').addClass("active");
                }
                if (currentScreenPosition < 125) {
                    $("header").removeClass("active");
                    $('.main-nav-section').removeClass("active");
                    $('.main-logo-section').removeClass("active");
                    $('.first-header').removeClass("active");
                    $('.second-header').removeClass("active");
                }
            });
            $('.main-menu-link.sub-menu').hover(function() {
                $('.header-active-background-gray').toggleClass("active");
            })
            $('.menu_mobile_nav').click(function(event) {
                $(this).toggleClass('active');
                $('html, body').toggleClass('hide_scroll');
                $('.menu_on_mobile').toggleClass('active');
                $('.display_background_of_the_page').toggleClass('mobile_active');
            });
        });
        </script>
        <div id="content" class="site-content">