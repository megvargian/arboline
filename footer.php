<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
        <?php if(!is_product_category() && !is_product()){ ?>
            <div class="wp-block-cover alignfull is-light" style="min-height:60vh"><span aria-hidden="true"
                    class="wp-block-cover__background has-background-dim-10 has-background-dim"
                    style="background-color:#717171"></span><img decoding="async" loading="lazy" width="2000" height="430"
                    class="wp-block-cover__image-background wp-image-2499" alt=""
                    src="https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1.jpg" data-object-fit="cover"
                    srcset="https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1.jpg 2000w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-600x129.jpg 600w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-300x65.jpg 300w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-1024x220.jpg 1024w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-768x165.jpg 768w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-1536x330.jpg 1536w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-1320x284.jpg 1320w"
                    sizes="(max-width: 2000px) 100vw, 2000px">
                <div class="wp-block-cover__inner-container">
                    <div class="is-layout-flow wp-block-group alignfull py-0 py-lg-5">
                        <div class="wp-block-suppliers text-center">


                            <figure class="wp-block-image size-full is-resized mx-auto"><img decoding="async" loading="lazy"
                                    src="https://fiddes.co.uk/app/uploads/2022/09/product-tins-1.png" alt="" class="wp-image-993"
                                    width="623" height="343"
                                    srcset="https://fiddes.co.uk/app/uploads/2022/09/product-tins-1.png 784w, https://fiddes.co.uk/app/uploads/2022/09/product-tins-1-600x331.png 600w, https://fiddes.co.uk/app/uploads/2022/09/product-tins-1-300x165.png 300w, https://fiddes.co.uk/app/uploads/2022/09/product-tins-1-768x423.png 768w"
                                    sizes="(max-width: 623px) 100vw, 623px"></figure>



                            <h3 class="has-text-align-center underline h1 has-black-color has-text-color"><span
                                    style="text-decoration: underline;">WHERE TO BUY</span></h3>



                            <p class="has-text-align-center has-black-color has-text-color has-medium-font-size">Our products
                                are <a href="https://fiddes.co.uk/product-catalogue/" data-type="page"
                                    data-id="1413"><strong>available online</strong></a> or at your local decorating centre.</p>



                            <p class="has-text-align-center has-black-color has-text-color has-medium-font-size">Search your
                                nearest stockist below.</p>


                            <form class="af-form acf-form" method="POST" action="/" id="form_where_to_buy"
                                data-key="form_where_to_buy">
                                <div class="af-fields acf-fields acf-form-fields -top">
                                    <div class="col-8 af-field pt-0 af-field-type-text af-field-postcode acf-field acf-field-text acf-field-63121ae1a7242"
                                        data-name="postcode" data-key="field_63121ae1a7242" data-type="text">
                                        <div class="af-label acf-label"><label for="acf-field_63121ae1a7242">Postcode</label>
                                        </div>
                                        <div class="af-input acf-input w-100">
                                            <div class="acf-input-wrap">
                                                <input type="text" class="w-100" id="acf-field_63121ae1a7242"
                                                    name="acf[field_63121ae1a7242]" placeholder="Enter postcode">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="af-submit acf-form-submit"><button type="submit"
                                            class="acf-button af-submit-button">Submit</button><span
                                            class="acf-spinner af-spinner"></span></div>
                                </div>
                            </form>
                            <div class="supplier-slider slick-initialized slick-slider"><a type="button"
                                    class="slick-prev slick-arrow" style=""><i class="bi bi-chevron-compact-left"></i></a>
                                <div class="swiper whereToBuySwiper">
                                    <div class="swiper-wrapper align-items-center"
                                        style="opacity: 1; width: 4872px; transform: translate3d(-696px, 0px, 0px);">
                                        <div class="swiper-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://nextdaypaint.co.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/next-day-paint-logo.png"
                                                        class="img-fluid" alt="Next Day Paint">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://restorate.co.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/restorate-logo.png"
                                                        class="img-fluid" alt="Restorate">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.wood-finishes-direct.com/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/wood-finishes-direct-logo.png"
                                                        class="img-fluid" alt="Wood Finishes Direct">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-current slick-active" data-slick-index="0"
                                            aria-hidden="false" style="width: 232px;">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.brewers.co.uk/" rel="noopener" tabindex="0"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/brewers-logo.jpg"
                                                        class="img-fluid" alt="Brewers Decorator Centres">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-active" data-slick-index="1" aria-hidden="false"
                                            style="width: 232px;">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.crowndecoratingcentres.co.uk/" rel="noopener" tabindex="0"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2023/01/CrownDecoratingCentres_logo.png"
                                                        class="img-fluid" alt="Crown Decorating Centres">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-active" data-slick-index="2" aria-hidden="false"
                                            style="width: 232px;">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.thepaintshed.com/" rel="noopener" tabindex="0"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2023/01/The-Paint-Shed.svg"
                                                        class="img-fluid" alt="The Paint Shed">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" data-slick-index="3" aria-hidden="true" style="width: 232px;"
                                            tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.robbins.co.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2023/01/Robbins-logo-hi-res-002.png"
                                                        class="img-fluid" alt="Robbins Timber">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" data-slick-index="4" aria-hidden="true" style="width: 232px;"
                                            tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank" href="https://rabart.co.uk/"
                                                    rel="noopener" tabindex="-1" style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2023/01/rabart-logonew2017.png"
                                                        class="img-fluid" alt="Rabart">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" data-slick-index="5" aria-hidden="true" style="width: 232px;"
                                            tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.paintstop.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2023/01/paint-stop-new.png"
                                                        class="img-fluid" alt="Paint Stop">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" data-slick-index="6" aria-hidden="true" style="width: 232px;"
                                            tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://nextdaypaint.co.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/next-day-paint-logo.png"
                                                        class="img-fluid" alt="Next Day Paint">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" data-slick-index="7" aria-hidden="true" style="width: 232px;"
                                            tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://restorate.co.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/restorate-logo.png"
                                                        class="img-fluid" alt="Restorate">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide" data-slick-index="8" aria-hidden="true" style="width: 232px;"
                                            tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.wood-finishes-direct.com/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/wood-finishes-direct-logo.png"
                                                        class="img-fluid" alt="Wood Finishes Direct">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.brewers.co.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/brewers-logo.jpg"
                                                        class="img-fluid" alt="Brewers Decorator Centres">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.crowndecoratingcentres.co.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2023/01/CrownDecoratingCentres_logo.png"
                                                        class="img-fluid" alt="Crown Decorating Centres">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.thepaintshed.com/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2023/01/The-Paint-Shed.svg"
                                                        class="img-fluid" alt="The Paint Shed">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="12" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.robbins.co.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2023/01/Robbins-logo-hi-res-002.png"
                                                        class="img-fluid" alt="Robbins Timber">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="13" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank" href="https://rabart.co.uk/"
                                                    rel="noopener" tabindex="-1" style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2023/01/rabart-logonew2017.png"
                                                        class="img-fluid" alt="Rabart">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="14" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.paintstop.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2023/01/paint-stop-new.png"
                                                        class="img-fluid" alt="Paint Stop">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="15" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://nextdaypaint.co.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/next-day-paint-logo.png"
                                                        class="img-fluid" alt="Next Day Paint">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="16" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://restorate.co.uk/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/restorate-logo.png"
                                                        class="img-fluid" alt="Restorate">
                                                </a></div>
                                        </div>
                                        <div class="swiper-slide slick-cloned" data-slick-index="17" id="" aria-hidden="true"
                                            style="width: 232px;" tabindex="-1">
                                            <div class="w-100"><a class="w-100 d-block" target="_blank"
                                                    href="https://www.wood-finishes-direct.com/" rel="noopener" tabindex="-1"
                                                    style="width: 100%; display: inline-block;">
                                                    <img decoding="async"
                                                        src="https://fiddes.co.uk/app/uploads/2025/04/wood-finishes-direct-logo.png"
                                                        class="img-fluid" alt="Wood Finishes Direct">
                                                </a></div>
                                        </div>
                                    </div>
                                </div><a type="button" class="slick-next slick-arrow" style=""><i
                                        class="bi bi-chevron-compact-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="is-layout-flow wp-block-group alignfull bg-primary has-primary-background-color has-background">
                <div class="container is-layout-flex wp-container-34 wp-block-columns are-vertically-aligned-center mb-0 py-3 py-lg-5"
                    style="padding-top:4em;padding-bottom:3em">
                    <div class="is-layout-flow wp-block-column is-vertically-aligned-center px-5 px-lg-2" style="flex-basis:40%">
                        <figure class="wp-block-image aligncenter size-full is-resized">
                            <img decoding="async" loading="lazy"
                                src="https://fiddes.co.uk/app/uploads/2022/12/White-circular-logo-for-green-background.svg" alt=""
                                class="wp-image-3285" width="425" height="425">
                        </figure>
                    </div>
                    <div class="is-layout-flow wp-block-column is-vertically-aligned-center px-4" style="flex-basis:60%">
                        <h2 class="has-text-align-center underline h1 underline--white has-white-color has-text-color"><span
                                style="text-decoration: underline;">ESTABLISHED 1896</span></h2>



                        <p class="has-text-align-center has-text-color has-medium-font-size" style="color:#fefefe">For over four
                            generations, FIDDES remains a family owned independent <br>British manufacturer of traditional wood
                            and floor finishes. </p>



                        <p class="has-text-align-center has-text-color has-medium-font-size" style="color:#fefefe">Originally
                            developing wood finishing products for the professional woodworking trade, FIDDES has also built a
                            reputation as being the natural choice for interior wood and outdoor DIY enthusiasts.</p>
                        <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                        <div class="is-layout-flex wp-block-buttons">
                            <div class="wp-block-button aligncenter">
                                <a class="wp-block-button__link has-secondary-background-color has-background wp-element-button"
                                    href="https://fiddes.co.uk/product-catalogue/"
                                    style="border-radius:0px; color: #fff; width: fit-content;">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div><!-- #content -->
    <footer class="content-info bg-black py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5 mb-4 mb-lg-0">
                    <section class="widget nav_menu-2 widget_nav_menu">
                        <div class="menu-footer-navigation-container">
                            <ul id="menu-footer-navigation" class="menu">
                                <li id="menu-item-3298"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3298"><a
                                        href="https://arboline.com/technical-sheets/">Technical Sheets</a></li>
                                <li id="menu-item-2468"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2468"><a
                                        href="https://arboline.com/delivery-returns/">Delivery &amp; Returns</a></li>
                                <li id="menu-item-2467"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2467"><a
                                        href="https://arboline.com/terms-conditions/">Terms &amp; Conditions</a></li>
                                <li id="menu-item-2466"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-2466">
                                    <a href="https://arboline.com/privacy-policy/">Privacy Policy</a>
                                </li>
                                <li id="menu-item-2229"
                                    class="d-none menu-item menu-item-type-post_type menu-item-object-page menu-item-2229">
                                    <a href="https://arboline.com/media/">Media</a>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <section class="widget block-7 widget_block">
                        <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
                    </section>
                    <section class="widget block-6 widget_block widget_text">
                        <p class="mb-0">Fiddes &amp; Son Ltd<br>Florence Works, Brindley Rd, Cardiff, UK CF11 8TX</p>
                    </section>
                </div>
                <div class="col-3">
                    <!--?xml version="1.0" encoding="UTF-8"?--><svg alt="Fiddes White Circular Logo"
                        class="img-fluid fiddes-white-circular-logo mb-3 mb-lg-0" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 274 273.99">
                        <defs>
                            <style>
                            .cls-1 {
                                fill: #fff;
                            }
                            </style>
                        </defs>
                        <g>
                            <path class="cls-1"
                                d="M137,0C61.46,0,0,61.46,0,137s61.46,136.99,137,136.99,137-61.46,137-136.99S212.54,0,137,0Zm.3,270.63C63.67,270.63,3.76,210.73,3.76,137.12S63.67,3.55,137.3,3.55s133.54,59.92,133.54,133.57-59.91,133.51-133.54,133.51Z">
                            </path>
                            <path class="cls-1"
                                d="M157.85,206.69c.04-.53,.13-2.92,.13-3.5s0-1.06-.31-1.06-.62,.67-.67,1.11c-.04,.44-.22,6.82-.22,7.26,0,.02,0,.05,0,.08,.03,0,.07-.02,.1-.03,.28-.07,.56-.14,.84-.22,.03-1.34,.08-3.27,.11-3.64Z">
                            </path>
                            <path class="cls-1"
                                d="M103.11,199.21c-.04,.44-.04,4.06-.07,5.74,.2,.1,.4,.19,.6,.29l.4,.2c-.02-.8,.4-3.82,.44-4.72,.04-.93,.13-1.81-.35-1.81s-.97-.23-1.02,.31Z">
                            </path>
                            <path class="cls-1"
                                d="M49.86,89.27c4.21,2.87,8.34,5.98,12.41,9.06,.46-.98,.92-1.88,1.49-2.71,.57-.83,1.23-1.59,1.98-2.38-4.36-2.66-8.76-5.36-12.97-8.23l-4.17-2.84c3.04-4.47,6.81-9.89,9.52-13.13-.56-.23-1.12-.46-1.61-.79-.49-.33-.91-.77-1.33-1.21-2.55,4.58-5.6,9.27-8.64,13.73-2.06-1.4-3.96-2.62-6.21-4.15-2.06-1.4-4.08-2.86-6.35-4.48,2.3-3.38,7.62-10.55,10.51-14.06-.56-.23-1.09-.51-1.58-.84-.49-.33-.95-.72-1.36-1.16-2.4,3.84-4.39,6.97-6.51,10.09-2.12,3.11-4.31,6.11-6.58,9.13,4.35,2.66,8.76,5.36,12.97,8.23l8.43,5.74Z">
                            </path>
                            <path class="cls-1"
                                d="M72.43,62.02c3.24,3.94,6.32,8.09,9.36,12.19,.71-.82,1.41-1.55,2.19-2.18,.78-.64,1.63-1.18,2.57-1.72-3.43-3.78-6.9-7.61-10.14-11.55l-6.47-7.88c-3.24-3.94-6.32-8.09-9.36-12.19-.71,.82-1.41,1.55-2.19,2.19-.78,.64-1.63,1.18-2.57,1.73,3.43,3.78,6.9,7.6,10.13,11.54l6.47,7.88Z">
                            </path>
                            <path class="cls-1"
                                d="M90.46,47.72c1.51,4.87,2.8,9.87,4.07,14.81,2.65-1.01,5.25-1.94,7.95-2.78,2.7-.84,5.43-1.38,8.13-2.21,9.48-2.95,20.23-11.99,15.53-27.11-3.62-11.66-11.58-16.95-25.63-12.59-3,.93-5.97,2.17-8.97,3.1-3,.93-6.1,1.77-9.15,2.53,1.75,4.79,3.52,9.65,5.03,14.51l3.02,9.74Zm7.68-26.54c9.84-3.06,18.05-2.07,22.13,11.07,4.64,14.95-3.94,21.21-12.76,23.95-3.06,.95-6.25,1.69-8.04,1.88-1.45-3.83-2.84-7.87-4.09-11.89l-3.02-9.74c-1.27-4.07-2.39-8.13-3.28-11.83,2.37-1.05,5.53-2.34,9.07-3.44Z">
                            </path>
                            <path class="cls-1"
                                d="M161.51,65.03c-.3-.71-.62-1.53-.88-2.22l-.69-1.73-.58-1.42c-.48-1.22-1.08-2.71-1.91-4.14,9.4,1.38,21.35-1.71,24.74-15.83,2.85-11.87-1.29-20.49-15.59-23.92-3.06-.73-6.24-1.19-9.3-1.93-3.05-.73-6.14-1.6-9.16-2.5-.94,5.02-1.9,10.09-3.09,15.05l-2.38,9.92c-.89,3.7-1.92,7.4-2.98,11.08-6.71,.23-11.27,2.61-13.45,4.06-3.09,2.06-5.52,6.57-6.01,7.89,0,0-.68,2.23-.68,2.23l-.51,1.72c-33.14,8.2-57.78,38.18-57.78,73.83,0,13.39,3.5,25.98,9.6,36.91,.04,.26,.1,.52,.19,.76l-.04-.12s.07,.57-.6,1.58c-1.19,1.77-2.29,4.42-1.82,6.5,.17,.75,.08,2.02,0,3.36-.27,3.98-.69,10.01,5.74,10.89,4.74,.65,7.29-.16,9.76-.95,1.28-.41,2.52-.8,4.08-1.01,1.25,1.06,2.53,2.1,3.85,3.08,.2,.15,.41,.29,.61,.44,.2-4.86-1.03-4.75-1.03-4.75-7.81-.35-8.75,3.26-17.12,2.1-7.39-1.02-4.04-10-4.81-13.4-.39-1.73,.64-4.12,1.66-5.65,1.02-1.53,.76-2.42,.76-2.42-.51-1.53-.07-4.01,1.02-5.23,2.17-2.42,2.04-4.33,2.29-5.86,.02-.11,.05-.25,.08-.37,.38-1.65,1.69-4.7,4.89-7.66,3.44-3.19,10.33-15.41,10.33-15.41l.06-.1c1.06-2.41,7.15-9.83,8.57-10.98,1.42-1.16,1.68-1.42,3.1-1.86,1.42-.44,6.64-2.48,7.79-2.75,1.15-.26,3.72-1.15,5.32-1.41,1.6-.27,7.18-1.77,9.3-4.52,2.13-2.75,6.29-8.24,6.29-13.03,0-2.21-1.86-5.85-3.45-7.44-1.59-1.6-3.01-4.3-2.93-5.8-.25-.67-.51-.56-1.02-.62-1.33-.16-1.59-.07-2.44-.49-.66-.33-1.03-.64-1.19-1.77-.09-.62-.45-.75-.66-1.02-.22-.27-1.73-4.25-2-4.83-.27-.58-1.14-3.57-.84-4.61,.23-.8,.83-1.19,1.73-1.19,.26,0,.4-.23,.4-.71,0-.25,.17-2.36,.33-4.44,.15-1.9,.29-3.78,.29-4.24,0-.97,.27-3.06,.71-4.39,.44-1.33,.75-2.79,1.19-3.99,.44-1.2,2.79-5.5,5.59-7.35,3.1-2.06,7.9-3.9,13.87-3.9,2.64,0,8.62,.09,13.69,4.9,2.53,2.4,3.57,6.04,4.52,8.18,.53,1.2,1.59,4.36,2.33,5.45,.9,1.33,1.89,4.32,1.93,5.28,.02,.52-.23,1.23-.41,1.71-.05,.14-.1,.26-.13,.35-.11,.68,.05,.86,1.17,1.23,.42,.14,1.13,.63,1.13,1.66,0,1.26-.5,6.31-.57,7.64-.06,1.33-.2,2.56-.86,3.22-.67,.67-1.26,1.46-2.2,1.6-.49,.13-1.39,.26-1.59,.63-.19,.37-.3,.93-.39,1.5-.1,.56-.67,1.33-.86,1.89-.04,.7-.13,7.91,.1,9.2,.73,1.56,1.56,3.85,1.76,5.98,.13,.56,1.46,3.22,2.06,3.92,.59,.7,1.3,1.69,1.36,2.4,.07,.69,.04,1.32,.84,1.66,.79,.33,8.23,4.48,9.63,5.05,1.39,.57,5.78,2.03,7.04,2.46,1.26,.43,3.75,1.43,5.08,2.09,1.33,.66,3.62,1.79,4.82,2.32,1.19,.53,2.22,1.07,3.06,1.96,.82,.9,1.13,1.52,1.86,2.46,.73,.93,.56,1.4,.99,2.22,.43,.83,.56,.9,.83,1.56,.27,.67,.43,.95,.7,2.87l.03,.15s1.72,8.06-4.05,27.55c-2.8,9.44-6.72,15.21-10.97,20.14-4.25,4.92-4.59,4.08-7.39,6.12,0,0,0,.35,.01,.94,.02,1.44,.08,4.38,.16,7.53,0,0,.02-.01,.03-.02,.33-.2,.64-.4,.97-.6,.03-.02,.06-.04,.09-.06h0c21.51-13.44,35.86-37.32,35.86-64.49,0-33.47-21.74-61.94-51.82-72.08Zm-91.92,72.01c0,8.91,1.76,17.42,4.91,25.21,0,.02,.01,.03,.02,.05-.09,.31-.15,.59-.2,.86,0,0,0,0,0,0l-.11,.82c-.15,1.25-.32,2.54-1.63,4.14-.09,.11-.18,.23-.28,.35-.02,.02-.04,.06-.06,.08-4.65-9.52-7.28-20.22-7.28-31.51,0-33.25,22.65-61.3,53.33-69.56-.01,.19-.02,.37-.02,.53,0,.02,0,.06,0,.08,0,.39-.12,2.08-.26,3.77-.01,.18-.03,.35-.04,.53,0,0,0,0,0,0-27.92,8.24-48.37,34.1-48.37,64.65ZM155.17,52.56c-3.21-3.05-6.77-4.3-9.67-4.82,.63-3.38,1.37-6.83,2.18-10.23l2.38-9.92c1-4.15,2.1-8.21,3.23-11.85,2.58,.31,5.95,.82,9.55,1.68,10.02,2.4,16.57,7.45,13.36,20.83-3.33,13.87-12.41,15.93-20.79,14.55-.08-.08-.15-.17-.24-.25Zm22.2,144.11c0-.2,0-.41-.01-.61,0-.52-.02-1.03-.03-1.52,0-.04,0-.09,0-.14,.53-.34,1.43-.91,1.43-.91,1.43-.82,2.56-1.46,5.68-5.09,2.68-3.11,5.6-6.95,8.15-12.45,.37-.8,.73-1.64,1.09-2.51,6.77-10.51,10.72-23,10.72-36.4,0-26.86-15.79-50.09-38.57-60.92-.11-.28-.26-.53-.43-.74-.34-.42-.79-.72-1.23-.87,0,0-.19-.08-.36-.14,0-.02,.02-.04,.02-.07,.24-.66,.46-1.34,.46-1.98,0-.03,0-.07,0-.1-.01-.34-.11-.84-.26-1.4-.05-.2-.1-.39-.17-.6,26.45,10.67,45.18,36.6,45.18,66.83,0,24.77-12.57,46.65-31.66,59.62Z">
                            </path>
                            <path class="cls-1"
                                d="M191.26,72.53c2.98,2.41,5.83,4.88,8.6,7.35,.23-.49,.6-1.04,.94-1.46,.33-.41,.87-.97,1.31-1.31-3.53-1.94-9.33-6.56-13.67-10.08,.88-1.19,2.66-3.49,5.5-6.99,3.58-4.42,4.52-5.57,5.46-6.64,2.34,1.9,8.42,6.98,11.53,10.03,.27-.54,.6-1.04,.97-1.5,.38-.46,.83-.93,1.3-1.31-3.07-2.11-6.47-4.49-12.24-9.16,.93-1.15,2.94-3.72,4.88-6.12,1.83-2.26,3.28-3.75,4.94-5.69,6.35,5.14,8.48,7.4,12.36,11.01,.28-.54,.6-1.04,.97-1.5,.37-.46,.79-.88,1.27-1.26-2.99-2.2-5.95-4.44-8.88-6.81-2.93-2.37-5.74-4.8-8.55-7.31-2.98,4.07-6.03,8.24-9.24,12.2l-6.42,7.92c-3.21,3.96-6.65,7.81-10.09,11.66,3.09,2.27,6.1,4.56,9.07,6.97Z">
                            </path>
                            <path class="cls-1"
                                d="M229.92,69.06c-12.01,7.07,2.08,21.75-7.33,27.29-4.09,2.41-9.13,1.44-11.97-3.38-2.74-4.66-1.42-9.08,.28-11.68l-.39-.65c-2.07,.92-3.19,1.36-5.15,1.65-.31,2.74-.3,6.16,2.35,10.65,4.91,8.34,13.07,10.17,19.31,6.5,11.29-6.65-2.74-21.36,6.82-26.98,3.73-2.2,8.06-.81,10.45,3.26,2.39,4.06,.43,7.4-1.01,9.27l.38,.65c2.2-.71,3.59-1.02,5.15-1.07,.36-3.13-.31-6.02-2.32-9.43-4.24-7.2-10.9-9.41-16.58-6.07Z">
                            </path>
                            <path class="cls-1"
                                d="M151.78,177.19c.04,.22,.31,.4,.58,.4s.62-.31,.67-.54c.04-.22-.49-.31-.67-.35-.22-.05-.62,.27-.58,.49Z">
                            </path>
                            <path class="cls-1"
                                d="M151.51,179.05c0,.31-.09,.53,.27,.71,.35,.18,.84,.18,.97,0,.13-.18,.09-.27-.18-.44-.27-.18-.4-.49-.4-.49,0,0-.05-.44-.36-.35-.22,.07-.31,.27-.31,.58Z">
                            </path>
                            <path class="cls-1"
                                d="M150.05,172.67c-.31,0-.79,.13-.83,.31-.07,.24,.26,.58,.75,.62,.49,.05,.84-.04,.89-.39,.04-.36-.49-.53-.8-.53Z">
                            </path>
                            <path class="cls-1"
                                d="M148.67,186.45c-.4,.13-.52,.48-.52,.75s.04,.93,.22,1.15c.17,.22,.22,.44,.62,.49,.4,.04,.58-.23,.75-.36,.18-.13,.31-.39,.66-.35,.36,.04,.45,.14,.67,.35,.22,.23,.63,.45,.84,.71,.22,.27,.56,.82,1.11,.75,.35-.05,.79-.13,1.37,.27,.37,.25,.66-.32,.93-.54,.26-.22,.26-.48,.26-.84s-.13-.84-.31-1.07c-.17-.22-.71-.18-.71,.13s.31,.62,.22,.89c-.09,.27-.31,1.02-.84,.93-.53-.09-.93-.44-.89-.93,.04-.42,0-.44-.35-.75-.35-.31-.66-.84-.88-1.11-.22-.27-.62-.58-1.51-.66-.31-.03-1.24,.04-1.64,.18Z">
                            </path>
                            <path class="cls-1"
                                d="M152.31,185.21c.13,.18,.53,.67,.84,.67s.71-.18,.67-.49c-.04-.31-.08-1.15-.27-1.38-.18-.22-.27-.53-.49-.53s-.44-.04-.44-.04c-.31,0-.44,.04-.66,.26-.23,.23-.54,.4-.32,.71,.22,.31,.53,.62,.67,.8Z">
                            </path>
                            <path class="cls-1"
                                d="M152.42,168.8c0,.44,.43,.7,.73,.93,.31,.23,.63,.3,1.06,.37,.44,.06,1.16,.26,1.63,.33,.19,.03,1.06,.27,1.53,.27,.36,0,1.02-.23,1.26-.27,.4-.07,1.23-.27,1.6-.33,.37-.07,1.09-.2,1.43-.27,.33-.07,1.09,.07,1.33,.03,.24-.03,.63-.03,.93-.07,.3-.04,.53,.1,.76,0,.24-.1,.6-.56,.86-.8,.27-.24,.54-.57,.6-.76,.07-.2-.33-.43-.63-.6-.3-.17-.83-.4-1.26-.4s-.7,.13-.73,.4c-.04,.27,.3,.6,.27,.9-.04,.3-.31,.37-.47,.5-.17,.13-.37,.3-.7,.3s-.46,0-.66,.1c-.2,.1-.43,0-.53-.13-.15-.2-.2-.1-.16-.3,.04-.2,.27-.1,.43-.13,.21-.04-.3-.33-.27-.5,.04-.16-.03-.99-.03-1.33s-.13-.56-.56-.6c-.43-.03-.83,.53-1.03,.73-.2,.2-.43,.5-.46,.79-.04,.3,.09,1.1-.07,1.3-.16,.2-.73,.13-1.1,.13s-1.03,.3-1.43,.3-.69,.2-1.19-.07c-.5-.27-.6-.79-.6-1s-.33-.49-.7-.53c-.37-.03-.47-.27-.74-.27-.83,0-1.09,.53-1.09,.96Z">
                            </path>
                            <path class="cls-1"
                                d="M154.26,173.78c.22-.36,.36-.84,.36-1.24s-.14-.89-.58-.98c-.31-.06-.53,.18-.75,.4-.22,.22-.53,.4-.53,.66s.09,.62,.18,.89c.09,.27-.04,.8,.44,.75,.49-.04,.67-.13,.89-.49Z">
                            </path>
                            <path class="cls-1"
                                d="M159.93,154.38c.17,.27,.97,.77,1.33,1.06,.36,.3,.6-.13,.47-.39s-.4-.84-.5-1.1c-.1-.27-.7-.73-1.4-.7-.33,.01-.63,.19-.56,.47,.07,.26,.5,.4,.66,.66Z">
                            </path>
                            <path class="cls-1"
                                d="M151.96,181.48c.22,.05,.39,.22,.66,.36,.27,.13,.71,.17,.71-.09s.04-.62-.22-.71c-.27-.09-.85-.39-1.1-.39-.23,0-.45,.13-.45,.31s.18,.49,.4,.53Z">
                            </path>
                            <path class="cls-1"
                                d="M148.15,175.24c-.09,.17-.04,.31,.22,.53,.27,.22,.62,.44,.79,.62,.18,.18,.48,.27,.75,.27s.54-.27,.54-.57-.23-.84-.54-.89c-.31-.04-.66-.22-.97-.17-.22,.03-.71,.04-.79,.22Z">
                            </path>
                            <path class="cls-1"
                                d="M161.93,159.43c-.43-.03-.97-.16-1.36-.16s-.87,.33-1.3,.33-1.17,.2-1.46,.27c-.3,.07-.95,.73-.9,1,.1,.49,1.13,.33,1.5,.26,.36-.07,1.19,.16,1.49,.16s1.17-.23,1.66-.33c1.05-.21,1.34-.59,1.39-.9,.04-.2-.59-.6-1.02-.63Z">
                            </path>
                            <path class="cls-1"
                                d="M142.96,203.46c.04,.27-.04,.58,.27,.62,.31,.04,.31-.09,.35-.49,.05-.4,.14-1.29,.27-1.68,.13-.4,.18-1.11,0-1.42-.18-.31-.31-.44-.27-.89,.05-.44,.27-1.73-.09-1.55-.32,.16-.13,.53-.22,.8-.09,.26-.22,.66-.14,.93,.09,.27,.36,1.02,.27,1.38-.09,.36-.49,2.04-.44,2.3Z">
                            </path>
                            <path class="cls-1"
                                d="M142.3,171.65c-.4-.04-1.19,.62-1.24,1.02-.04,.4,.4,.49,.66,.49s.89-.27,.94-.76c.04-.48,.08-.71-.36-.75Z">
                            </path>
                            <path class="cls-1"
                                d="M142.43,176.08c.14-.27,.14-.62-.04-.8-.18-.18-.58-.48-.76-.53-.18-.04-.57-.13-.8-.09-.22,.04-.31,.04-.44,.22-.12,.16,.04,.49,.22,.62,.18,.13,.4,.53,.54,.62,.13,.09,.35,.18,.62,.13,.27-.04,.53,.09,.67-.17Z">
                            </path>
                            <path class="cls-1"
                                d="M140.22,191.41c.13,.13,.49,.44,.75,.49,.27,.04,.53,0,.49-.35-.05-.36-.27-.62-.57-.67-.31-.04-.36-.08-.54,.04-.19,.14-.27,.35-.13,.49Z">
                            </path>
                            <path class="cls-1"
                                d="M142.19,73.23c.36,.47,.46,.73,.93,.8,.46,.07,.5,.3,.93,.56,.43,.27,.83,.6,1.66,.6s2.11-1.02,2.26-1.26c.2-.3-.23-.36-.43-.2-.42,.35-1.13,.53-1.63,.53-1.13,0-2-.7-2.59-1.1-.59-.4-1.26-.77-1.66-.77,.13,.47,.15,.34,.53,.83Z">
                            </path>
                            <path class="cls-1"
                                d="M149.21,180.55c-.45,0-1.06,.23-1.06,.45,0,.18,.04,.39,.31,.44,.26,.04,.71,0,.93,0,.21,0,.35,.18,.57,.09,.22-.09,.49-.49,.22-.62-.27-.13-.53-.36-.97-.36Z">
                            </path>
                            <path class="cls-1"
                                d="M145.27,190.34c.23,.13,.58,.35,.93,.53,.36,.18,.76,.36,1.16,.58,.4,.22,.62,.18,1.29,.31,.66,.13,.79-.22,1.1-.44,.31-.22,.09-.48,0-.66-.09-.19-.52-.27-.92-.27s-1.07-.31-1.42-.44c-.36-.13-.94-.44-1.33-.57-.4-.14-.66-.4-1.06-.4-.48,0-.39,.18-.48,.44-.09,.26,.53,.8,.75,.93Z">
                            </path>
                            <path class="cls-1"
                                d="M147.71,183.39c0,.31-.09,.89,0,1.06,.09,.18,.35,.44,.75,.44s.57-.04,.93-.26c.35-.23,.66-.44,.92-.71,.27-.28,.22-.76-.13-.85-.35-.08-.81,.01-1.11-.04-.47-.08-.43-.4-.84-.36-.36,.04-.53,.39-.53,.71Z">
                            </path>
                            <path class="cls-1"
                                d="M141.76,182.55c.18,.04,.14,.18,.36,.18,.21,0,.35-.22,.4-.49,.04-.27,.04-.49-.23-.53-.26-.04-.53-.27-.58-.44-.04-.17-.09-.44-.26-.44s-.44,.18-.44,.4,.13,.48,.26,.71c.13,.22,.32,.57,.49,.62Z">
                            </path>
                            <path class="cls-1"
                                d="M140.92,177.68c-.22,0-.49,.17-.53,.44-.04,.27,.22,.44,.44,.53,.22,.09,.4,.4,.71,.4s.49-.31,.49-.44-.71-.93-1.11-.93Z">
                            </path>
                            <path class="cls-1"
                                d="M161.53,182.33c0,.58,.27,.75,.62,.75s.54-.35,.58-.71c.04-.36-.18-.44-.35-.44-.31,0-.84,.17-.84,.39Z">
                            </path>
                            <path class="cls-1"
                                d="M177.41,140.93c.04-.14-.28-.48-.55-.42-.35,.07-1.11,.8-1.11,1.11s.18,.27,.31,.27,.65-.42,.85-.49c.2-.07,.47-.33,.5-.46Z">
                            </path>
                            <path class="cls-1"
                                d="M173.49,160.4c-.1-.1-.63-.24-.8-.24-.27,0-.87,.07-1,.2-.13,.13-.3,.23-.27,.47,.04,.23,.27,.46,.5,.46s.66-.06,.83,.14c.17,.2,.27,.53,.17,.73-.1,.2-.3,.5-.37,.67-.07,.17,.1,.26,.27,.3,.16,.04,.6,.17,.76,0,.16-.16,.33-.46,.5-.63,.17-.16,.33-.5,.36-.73,.04-.23,0-.33-.16-.5-.17-.16-.7-.76-.79-.86Z">
                            </path>
                            <path class="cls-1"
                                d="M173.95,165.55c-.04,.3,.23,.53,.2,.83-.04,.3-.13,.73-.33,.84-.2,.1-.33,.36-.24,.63,.1,.27,.24,.4,.53,.4s.47-.13,.6-.36c.13-.24,.36-.5,.36-.7s-.26-.5-.2-.73c.07-.23,.27-.87,.46-1.13,.2-.27,.77-1.1,1.03-1.26,.27-.17,.87-.83,1-1,.13-.16-.07,.03,.1-.3-.3,.1-1.03,.57-1.26,.7-.24,.13-.8,.4-.97,.6-.16,.2-.49,.59-.72,.73-.24,.13-.54,.47-.57,.76Z">
                            </path>
                            <path class="cls-1"
                                d="M174.85,158.8c-.16,.13-.29,.3-.2,.4,.11,.1,.54,.27,.63,.67,.1,.4,.23,.93,.3,1.07,.07,.13,.36,.23,.39,0,.03-.27,.24-.43,.31-.64,.06-.2,.26-.53,.29-.76,.04-.27-.44-.73-1.2-.83-.16-.02-.36-.03-.53,.1Z">
                            </path>
                            <path class="cls-1"
                                d="M177.67,144.29c-.09,.09-.2,.23-.39,.33-.2,.1-.47,.33-.54,.46-.07,.14-.2,.56-.26,.73-.07,.17-.26,.37-.3,.56-.04,.2-.1,.56,.07,.7,.16,.13,.2,.2,.33,.37,.13,.16,.16,.2,.33,.2s.47-.1,.57-.27c.1-.17,.3-.56,.3-.73s.12-.86,.2-1.03c.07-.17,.07-1.07,.04-1.19-.04-.13-.2-.27-.34-.13Z">
                            </path>
                            <path class="cls-1"
                                d="M177.14,135.16c-.48,.16-.8,.66-1.06,1-.27,.33-.6,1.23-.7,1.62l.17,.04c.07-.17,.46-.9,.74-1.16,.26-.26,.36-.56,.49-.76,.13-.2,.27-.43,.53-.56,.27-.14,.13-.27-.16-.17Z">
                            </path>
                            <path class="cls-1"
                                d="M180.8,150.17c.09-.17,.16-.47,.33-.73,.16-.27,.33-.67,.33-.93s-.13-.77-.43-.77c-.2,0-.3,.27-.4,.4-.1,.13-.1,.43-.1,.67s-.03,1.13-.03,1.3,.2,.23,.3,.07Z">
                            </path>
                            <path class="cls-1"
                                d="M178.97,149.23c-.17-.04-.2-.23-.5-.23-.13,0-.43,.03-.63,.16-.2,.13-.56,.33-.67,.57-.1,.23-.3,.67-.33,.83-.04,.17-.07,.8,.1,.9,.16,.1,.46,.43,.7,.43,.22,0,.56-.1,.56-.4s.24-.73,.33-.9c.1-.16,.4-.73,.5-.86,.1-.13,.1-.47-.06-.5Z">
                            </path>
                            <path class="cls-1"
                                d="M180.53,156.28c.3-.03,.7-.07,.9-.37,.2-.3,.9-1.33,1.09-1.59,.2-.27,.57-.8,.6-1.16,.04-.36-.13-.63-.69-.7-.27-.04-.67,.13-.87,.36-.2,.23-.63,.66-.83,1.13-.2,.47-.76,1.59-.73,1.96,.04,.37,.24,.4,.53,.37Z">
                            </path>
                            <path class="cls-1"
                                d="M178.37,158.57c-.1,.23-.3,.83-.33,1.13-.04,.3-.18,1.13-.14,1.33,.04,.2,.07,1.1,.11,1.3,.2-.2,.63-.63,.9-.83,.27-.2,.49-.4,.6-.66,.09-.27,.29-.8,.36-1.13,.07-.33,.2-.7,.3-.93,.1-.24,.13-.4,.04-.6-.1-.2-.34-.2-.5-.26-.3-.12-.53,.07-.73,.2-.2,.14-.5,.24-.6,.47Z">
                            </path>
                            <path class="cls-1"
                                d="M166.18,177.94c.44-.22,.58-.26,.93-.49,.36-.22,.94-.59,.84-.79-.13-.27-.31-.18-.53-.44-.2-.25-.48,.35-.79,.53-.31,.18-.62,.4-.84,.53-.22,.13-.82,.43-.75,.57,.13,.27,.29,.63,.44,.58,.27-.09,.27-.27,.71-.49Z">
                            </path>
                            <path class="cls-1"
                                d="M168.79,178.47c-.27,.31-1.38,1.24-1.72,1.69-.35,.44-1.11,1.1-1.46,1.46-.36,.35-1.01,1.15-1.33,1.55-.31,.4-.4,.49-1.15,1.2-.75,.71-1.06,1.06-1.37,1.33-.31,.27-.53,.71-.98,1.19-.44,.49-.44,.63-.88,1.06-.44,.44-.75,.84-1.11,.8-.36-.04-.54-.4-.62-.8-.09-.4-.13-.88-.58-.84-.27,.03-.53,.18-.53,.4s.09,.39-.18,.57c-.27,.18-.58,.22-.53,.53,.05,.31,.18,.49,.35,.71,.18,.22,.23,.71,.45,.84,.22,.13,.44,.13,.71-.05,.27-.18,.31-.39,.79-.39s.58-.09,.98-.35c.4-.27,.8-.54,1.11-.85,.31-.31,.89-.98,1.33-1.28,.44-.31,1.29-1.2,1.68-1.51,.4-.31,.75-.67,1.19-.93,.45-.27,.58-.62,.84-1.06,.27-.44,.32-.67,.84-1.02,.53-.36,.89-.53,1.19-1.02,.31-.48,.58-.8,.97-1.24,.4-.44,.93-1.06,1.24-1.5,.31-.44,.89-.93,1.2-1.37,.31-.44,.57-.54,1.06-1.16,.49-.62,.79-.97,1.15-1.28,.35-.31,.66-1.46,0-1.42-.67,.05-.58,.18-.84,.53-.27,.35-.71,.79-1.02,1.19-.31,.4-1.02,1.15-1.24,1.46-.22,.31-1.29,1.24-1.55,1.55Z">
                            </path>
                            <path class="cls-1"
                                d="M162.37,180.02c.39-.04,1.1-.31,1.15-.62,.04-.31-.49-.88-.79-.93-.31-.04-.49-.36-.8-.31-.27,.04-.53,.23-.58,.58-.12,.93,.45,1.35,1.02,1.29Z">
                            </path>
                            <path class="cls-1"
                                d="M162.37,176.17c-.36,0-.49,.26-.49,.49s.4,.66,.76,.66,.79-.18,.75-.44c-.04-.27-.18-.35-.48-.49-.32-.14-.22-.22-.53-.22Z">
                            </path>
                            <path class="cls-1"
                                d="M148.5,130.58c.43-.53,1.13-1.76,1.26-2.5,.13-.73,.34-2.42,.3-2.99-.04-.56-.17-.53-.44-.53s-.53,.3-.53,.6c0,.77,.17,2.19-.2,2.89-.37,.7-.56,1.86-1.07,2.19-.26,.17-.4,.27-.4,.27l.07,.67c.27-.04,.57-.07,1-.6Z">
                            </path>
                            <path class="cls-1"
                                d="M162.68,174.05c-.23-.09-.36-.27-.72-.27-.27,0-.44,.13-.44,.53s.13,.44,.49,.53c.35,.09,.52,.18,.83,.09,.32-.09,.44-.27,.4-.49-.04-.22-.35-.31-.57-.4Z">
                            </path>
                            <path class="cls-1"
                                d="M158.64,180.51c-.22,0-.31,.09-.36,.44-.04,.36-.22,.94-.22,1.11s.09,.71,.36,.71,.53-.22,.62-.75c.09-.53,.36-1.46-.4-1.51Z">
                            </path>
                            <path class="cls-1"
                                d="M160.55,185.16c.05-.22-.04-.62,.4-.75,0,0,.31-.75,0-.71-.4,.06-.66,.23-.84,.44-.18,.22-.4,.67-.18,.85,.22,.17,.36,.17,.62,.17Z">
                            </path>
                            <path class="cls-1"
                                d="M157.8,184.54c-.07,.17-.04,.35,.26,.49,.31,.13,.36,.27,.62,.31,.27,.04,.49-.09,.45-.35-.05-.27-.31-.4-.58-.45-.27-.04-.67-.22-.75,0Z">
                            </path>
                            <path class="cls-1"
                                d="M158.47,176.21c-.31,.03-.4,.27-.67,.27s-.54,0-.67,.18c-.13,.18-.18,.93,.18,.89,.36-.05,.44-.27,.8-.27s.39-.04,.67-.27c.27-.22,.18-.84-.31-.8Z">
                            </path>
                            <path class="cls-1"
                                d="M137.08,111.95c-.27,0-.75,.57-.75,.8s.13,.36,.49,.36,.49-.31,.49-.58,.22-.57-.22-.57Z">
                            </path>
                            <path class="cls-1"
                                d="M196.51,140.3c-.03,.2,0,.37-.23,.57-.23,.2-.4,.1-.57,.27-.17,.17-.3,.56-.4,1.03-.1,.46-.24,1.09-.3,1.39-.06,.3-.37,1.03-.43,1.36-.07,.33-.13,.73-.3,1.19-.17,.47-.24,1.03-.27,1.46-.04,.43-.27,1.03-.5,1.5-.24,.46-.34,1.23-.53,1.73-.2,.49-.57,1.23-.63,1.62-.07,.4-.37,1.16-.4,1.43-.03,.33,.04,1.1,.37,1.13,.16-.13,.4-.2,.43-.53,.04-.33,.04-.76,.2-1.19,.17-.43,.6-1.4,.74-1.73,.13-.33,.33-.93,.43-1.4,.1-.46,.47-1.33,.71-1.73,.22-.4,.13-1.03,.19-1.49,.07-.47,.2-.86,.47-1.1,.27-.23,.5-.4,.5-.83s-.1-1.6,.2-2.03c.3-.44,.7-1.13,.86-1.36,.17-.23,.39-.5,.39-.8s-.13-.7-.6-1.13c.04,.03-.32,.6-.33,.63Z">
                            </path>
                            <path class="cls-1"
                                d="M192.49,133.47c-.2,0-.63,.1-.83,.3-.2,.2-.3,.53-.33,.83-.04,.3-.04,.96-.04,1.43s-.16,1.53-.27,1.73c-.1,.2-.4,1.56-.46,2.05-.07,.5-.24,1.19-.37,1.66-.13,.46-.33,.92-.43,1.49-.1,.56-.27,1.12-.43,1.56-.17,.43-.33,.83-.4,1.27-.06,.43-.12,.73-.23,1.03-.09,.29-.26,.79-.56,1.36-.3,.56-.27,.56-.63,1.19-.36,.63-1.36,1.83-1.6,2.2-.23,.36-.66,1.36-.99,1.66-.33,.3-.7,1.43-.73,1.79-.03,.37,.03,1.03,.33,1.13,.31,.1,.56-.1,.76-.33,.2-.23,.63-.73,.7-1.03,.07-.3,.3-.73,.4-1.26,.1-.53,.5-1.26,.73-1.73,.23-.47,.66-1.39,.89-1.83,.24-.43,.7-1.16,.9-1.49,.2-.33,.6-.96,.67-1.4,.07-.43,.66-2.26,.76-2.85,.11-.6,.13-1.4,.43-2.06,.3-.66,.53-1.26,.63-1.79,.1-.53,.47-1.76,.6-2.32,.13-.56,.36-1.46,.46-1.89,.1-.44,.6-1.33,.6-1.86,0-.27-.15-.83-.57-.83Z">
                            </path>
                            <path class="cls-1"
                                d="M189.3,133.07c-1.29,0-1.52,.61-1.86,1.03-.27,.33-.56,1.33-.56,1.63s-.24,1.4-.33,1.63c-.1,.23-.13,.6,.13,.7,.26,.1,.5,.46,.4,.92-.1,.47-.53,.73-.89,.83-.17,.13-.43,.46-.47,.73-.03,.27,0,.63-.13,.83-.13,.2-.4,.4-.46,.76-.07,.36-.16,1.03-.27,1.39-.1,.36-.43,1.23-.57,1.73-.13,.5-.56,1.96-.69,2.36-.14,.4-.27,.93-.4,1.4-.13,.47-.23,.93-.3,1.13-.07,.2-.4,.57-.4,.83s.1,.37,.36,.37,.7-.17,1.06-.53c.46-.47,.94-.94,1.27-1.54,.43-.76,1.16-2.12,1.46-2.62,.3-.5,1.3-2.76,1.33-3.26,.03-.5-.07-.89-.04-1.53,.04-.63,.04-1.16,.17-1.49,.13-.33,.09-.3,.09-.57,0-.23,.47-1.36,.73-1.65,.27-.3,.47-.73,.57-1,.1-.26,.24-.8,.37-1.16,.13-.37,.33-1.1,.39-1.6,.18-1.3-.77-1.33-.96-1.33Z">
                            </path>
                            <path class="cls-1"
                                d="M189.4,129.55c-.43,0-1.1,.1-1.63,.23-.53,.13-1.3,.5-1.63,.7-.34,.2-.7,.3-.99,.46-.3,.17-.7,.33-1.26,.63-.56,.3-1.1,.59-1.3,.93-.2,.33-.9,.73-1.29,1.06-.4,.33-1.5,1.36-1.2,1.36,.57,0,1.03-.33,1.36-.6,.33-.27,.97-.63,1.39-.87,.43-.23,1.17-.86,1.53-1.1,.36-.23,1.46-.7,1.96-.9,.5-.2,2.09-.96,2.72-1.06,.63-.1,.93-.3,1.03-.47,.1-.17-.27-.4-.7-.4Z">
                            </path>
                            <path class="cls-1"
                                d="M174.65,151c-.26,.03-.29,.27-.43,.4-.13,.13-.3,.43-.27,.59,.03,.17-.04,.7,.36,.67,.4-.04,.46-.3,.56-.47,.1-.16,.27-.46,.24-.63-.04-.17-.13-.6-.47-.57Z">
                            </path>
                            <path class="cls-1"
                                d="M184.95,128.12c-.5,.03-.97,.1-1.66,.23-.7,.13-1,.5-1.53,.83-.54,.33-.73,.4-1.03,.9-.3,.5-.6,.83-.7,1.2-.1,.37-.43,.67-.73,.99-.3,.34-.85,.87-.6,1.1,.18,.17,.49-.3,.69-.5,.2-.2,.8-.9,1.13-1.19,.34-.3,.87-.3,1.3-.87,.2-.26,.79-.86,1.13-1.13,.33-.26,1.56-.79,1.89-.93,.41-.16,.83-.27,1.23-.54,.4-.26,.27-.36,0-.33-.27,.04-.63,.2-1.13,.24Z">
                            </path>
                            <path class="cls-1"
                                d="M137.35,126.04c.31,.04,.44-.22,.79-.58,.22-.57,1.46-3.76,1.72-4.52-1.06,.04-.88,.36-1.15,.49v.35c-.52,.31-1.37,2.4-1.5,2.93-.14,.53-.18,1.28,.13,1.33Z">
                            </path>
                            <path class="cls-1"
                                d="M193.08,160.57c.2-.5,.4-1.16,.54-1.59,.13-.44,1.07-2.86,1.39-3.46,.33-.6,1.13-2.56,1.27-3.06,.12-.5,.46-1.56,.69-2.09,.23-.53,.37-.84,.43-1.2,.07-.36,.36-2.33-.07-3.12-.14-.27-.3,.56-.47,.96-.17,.4-.79,1.2-.99,1.4,0,.36,.1,1.63-.14,1.86-.23,.24-.4,.67-.43,.96-.04,.3-.24,.87-.57,1.2-.33,.33-.53,1.1-.73,1.63-.2,.53-.27,1.53-.44,1.9-.16,.36-.76,1.66-.93,2.25-.17,.6-.66,1.6-.97,2.16-.3,.57-.63,1.33-.93,1.66-.3,.33-.59,.83-.96,1.36-.37,.53-1.73,2.56-2,2.86-.27,.3-1.13,1.46-1.39,1.73-.27,.27-.93,1.33-1.33,1.76-.4,.43-.8,.93-.96,1.4-.17,.47-.47,1.23-.8,1.9-.33,.66-.54,.73-1,1.2-.47,.46-1,1.29-.93,1.66,.07,.36,.07,1.03,.77,.99,.69-.03,.69-.19,.96-.53,.27-.33,.67-.56,.77-.83,.1-.27,.3-.87,.56-1.13,.27-.26,.33-.43,.43-.8,.1-.37,.36-1.14,.5-1.63,.13-.5,.43-.96,.63-1.49,.19-.53,.76-1.1,.93-1.5,.17-.39,.9-1.19,1.2-1.69,.3-.5,1.19-1.39,1.39-1.76,.2-.36,.87-1.16,1.03-1.63,.16-.47,.46-.96,1.06-1.46,.4-.73,1-1.53,1.46-1.86Z">
                            </path>
                            <path class="cls-1"
                                d="M90.66,182.68c0,.36,.04,.57,.44,.57,.31,0,1.33-.35,1.29-.66-.05-.31-.49-.49-.8-.49s-.93,.22-.93,.58Z">
                            </path>
                            <path class="cls-1"
                                d="M189.17,171.4c.3-.4,.4-.83,.7-1.26,.3-.43,.33-.9,.57-1.27,.23-.37,.7-.93,.79-1.23,.12-.35,.5-.69,.6-1.16,.05-.23,.37-.57,.47-1.03,.07-.34,.5-.93,.07-1-.39-.06-1.34,1.54-1.56,2.06-.23,.57-1.03,1.53-1.22,1.92-.2,.4-1.03,1.83-1.26,2.27-.23,.43-1.13,2.09-1.37,2.59-.23,.5-.59,1.63-.96,1.93-.37,.3-.76,.97-1.03,1.43-.27,.46-.74,.9-1.1,1.19-.37,.3-1.63,1.4-1.6,1.69,.04,.3,.24,.4,.6,.37,.37-.04,.57-.17,.8-.4,.23-.23,.9-.93,1.26-1.29,.36-.36,.56-.7,.66-.93,.11-.24,.33-.49,.57-.73,.24-.23,.46-.73,.66-1,.2-.27,.56-.53,.66-.83,.1-.3,.04-.53,.24-.9,.2-.37,.23-.64,.53-1.1,.3-.46,.63-.93,.93-1.33Z">
                            </path>
                            <path class="cls-1"
                                d="M170.63,148.97c-.16,.14-.62,.3-.82,.44-.2,.13-.53,.47-.67,.56-.13,.1-.43,.53-.36,.7,.07,.16,.23,.29,.4,.29s1-.23,1.16-.36c.16-.13,.7-.53,.77-.73,.07-.2,.39-.67,.13-.94-.15-.14-.44-.1-.6,.03Z">
                            </path>
                            <path class="cls-1"
                                d="M138.54,136.63c-.05-.22-.22-.04-.35,.13-.14,.18-.36,.18-.67,.18s-1.02,.18-1.1,.53c-.09,.37-.27,1.99-.44,2.39-.18,.4-.58,1.24-.53,1.68,.04,.44,.22,.75,.79,.75s1.68-.93,1.81-1.46c.14-.53,.31-1.24,.14-1.73-.18-.48,.13-.97,.3-1.28,.18-.32,.09-.98,.05-1.19Z">
                            </path>
                            <path class="cls-1"
                                d="M140.61,128.78c0-.57-.22-1.95,.36-2.66,.81-1,2.08-1.73,2.08-3.59,0-.97-1.37-.89-1.51-.14-.11,.64-.46,1.81-.71,1.95-.4,.22-.93,1.77-1.02,2.26-.06,.58-.08,.89-.31,1.37-.26,.58-.44,1.91-.66,2.57-.18,.55-.66,1.28-1.02,1.73-.28,.35-.09,1.06-.31,1.33-.22,.26-.09,.53,.18,.44,.26-.09,.53-.75,.88-.71,.35,.04,1.32-.36,1.28-1.06-.04-.71-.09-1.47,.13-2.04,.22-.58,.62-.89,.62-1.46Z">
                            </path>
                            <path class="cls-1"
                                d="M171.56,156.34c-.13,.33-.27,.63-.3,.9-.03,.27-.03,.36,.3,.27,.33-.1,.83-.2,1.32-.27,.51-.07,1.23-.13,1.56-.33,.33-.2,1-.76,1-1.26s-.13-.63-.69-.67c-.27-.02-.8,.1-1.1,.26-.3,.17-.83,.27-1.1,.43-.27,.17-.86,.33-.99,.66Z">
                            </path>
                            <path class="cls-1" d="M133.63,74.66c.23,.13,.43-.77,.2-.8-.21-.03-.43,.67-.2,.8Z"></path>
                            <path class="cls-1"
                                d="M134.29,72.57c.13-.01,.25-.5,.19-.77-.06-.28-.03-.68-.35-.73-.17-.03-.37,.41-.34,.65,.02,.24,.05,.89,.5,.85Z">
                            </path>
                            <path class="cls-1"
                                d="M136.2,131.18c.4-.4,1.02-2.02,1.24-2.75,.13-.44-.31-.66-.44-.31-.13,.35-1.24,1.28-1.77,1.95-.53,.67-1.51,3.23-1.82,4.83-.31,1.59-.27,5.61-.13,6.06,.13,.44,.57,.53,.67,.04,.09-.49,1.06-5.48,1.15-6.14,.09-.67-.31-1.77-.13-2.48,.18-.71,.84-.79,1.24-1.19Z">
                            </path>
                            <path class="cls-1"
                                d="M142.39,133.57c.13-.71,.35-1.24,.48-1.99,.13-.76,.49-1.42,.49-2.09s.13-1.19,.08-1.46c-.04-.26-.71-.31-.79,0-.13,.43-.23,1.64-.36,2.08-.13,.44-.26,.44-.53,.66-.26,.22-.26,.54-.26,.98s-.14,1.77-.18,2.26c-.07,.87-.73,1.82-.88,2.44-.13,.53-.22,1.15-.53,2.03-.1,.3,0,.31,.31,.36,.31,.04,.49-.27,.75-.58,.27-.31,.62-.62,.93-.84,0-.62-.05-1.02,.23-1.46,0-.4,.13-1.68,.26-2.39Z">
                            </path>
                            <path class="cls-1"
                                d="M88.93,177.68c.31,.22,1.37,.97,1.91,1.02,.53,.04,.8-.45,.31-.62-.49-.18-1.55-.8-1.73-1.02-.18-.22-.66-.35-.84-.17-.18,.17,.05,.57,.36,.8Z">
                            </path>
                            <path class="cls-1"
                                d="M168.63,155.25c-.06,.38-.44,.77-1.3,.77-.3,0-1.2-.06-1.32-.36-.19-.41-.11-.56-.14-.8-.04-.23-.26-.41-.56-.17-.16,.14-.73,.5-.94,.56-.2,.07-1.09,.17-1.26,.9-.07,.29,.1,.4,.33,.63,.24,.24,.9,.83,1.3,.8,.4-.03,.53-.1,.83-.23,.3-.14,.56-.17,.9-.33,.33-.16,.7-.27,.86-.4,.17-.13,.67-.27,1.03-.3,.36-.03,.49,0,.73-.24,.24-.23,.6-.63,.77-.79,.16-.16,.5-.43,.56-.6,.06-.16,.19-.86,0-.96-.2-.1-.33-.34-.53-.3-.2,.03-.56,0-.77,.2-.2,.2-.33,.43-.39,.66-.07,.24-.07,.77-.1,.96Z">
                            </path>
                            <path class="cls-1"
                                d="M144.85,133.87c.23-.83,.27-1.13,.43-1.79,.16-.66,.16-.63,.3-1.03,.13-.41,.75-1.37,1.02-1.73,.24-.3,.24-.8,.4-1.13,.16-.33,.28-.79,.4-1.03,.24-.47-.13-1.07-.37-1.23-.13,.2-.33,.33-.53,.46-.32,.22-.48,.2-.7,.63-.2,.4-.55,1.06-.57,1.56-.03,.59-.23,1.16-.26,1.69-.04,.53-.24,1.45-.4,1.76-.25,.5-.21,1.39-.39,1.79-.14,.28-.44,.73-.44,.73l.07,.63c.32-.23,.93-.97,1.03-1.33Z">
                            </path>
                            <path class="cls-1"
                                d="M151.53,108.98c-1.07,.3-1.76,.7-2.06,1-.3,.3-1.16,.63-1.66,.79-.5,.18-.15,.49,.23,.93,.47,.53,1.46,.87,2.33,.87,.67,0,1.3,.23,1.23,1.16l-.43,5.88c3.17,.45,4.66-.49,6.32-1.33,1.27-.65,2.26-1.31,2.59-3.69,.15-1.12-1.33-7.61-1.66-8.54-1.55,1.33-5.66,2.58-6.88,2.92Z">
                            </path>
                            <path class="cls-1"
                                d="M101.11,176.25c.27-.31-.18-1.19-.8-1.19-.36,0-.49,0-.53,.32-.04,.31,.18,.4,.44,.66,.27,.27,.62,.53,.89,.22Z">
                            </path>
                            <path class="cls-1"
                                d="M95.49,174.22c-.22,.22-.04,1.02,.31,1.02s1.06-.14,1.06-.58-.49-.84-.8-.89c-.31-.05-.4,.27-.58,.45Z">
                            </path>
                            <path class="cls-1"
                                d="M97.02,162.46c-.28-.26-.76,.27-.76,.5s.17,.33,.36,.37c.2,.03,.77-.53,.4-.87Z"></path>
                            <path class="cls-1"
                                d="M94.34,180.6c.4,0,.84-.44,1.42-.44s1.1,1.15,1.68,1.2c.58,.04,.93-.62,.89-1.15-.04-.53-1.68-.89-2.26-.89-.69,0-2.26,.08-2.26,1.02,0,.36,.17,.27,.53,.27Z">
                            </path>
                            <path class="cls-1"
                                d="M94.96,184.72c.28,.22,1.29-.75,1.29-1.15s-.4-.62-.89-.67c-.49-.04-1.33,.49-1.28,.75,.05,.28,.49,.75,.89,1.07Z">
                            </path>
                            <path class="cls-1" d="M138.01,114.92c-.49,0-.88,.98-.26,.98s.84-.98,.26-.98Z"></path>
                            <path class="cls-1"
                                d="M144.07,112.44c.45,.04,.62-.18,.58-.44-.04-.27-1.01-.67-1.24-.32-.18,.3,.22,.71,.66,.76Z">
                            </path>
                            <path class="cls-1"
                                d="M143.82,125.33h.67c.9-.46,1.25-1.5,1.32-2.22,.04-.53-.18-.89-.62-.89-.2,0-.49,.39-.38,.79,.08,.31,.02,.72-.16,.99-.17,.27-.74,.84-.83,1.33Z">
                            </path>
                            <path class="cls-1"
                                d="M140.97,112.93c0-.27-.22-.75-.58-.75-.4,0-1.06,.38-1.06,.67,0,.39,.66,.79,1.01,.79,.54,0,.62-.44,.62-.71Z">
                            </path>
                            <path class="cls-1"
                                d="M178.8,154.62c.13-.23,.3-.53,.13-.69-.17-.17-.17-.2-.6-.17-.43,.03-.67,.07-.83,.33-.16,.27-.3,.63-.4,.87-.1,.24-.37,.57-.43,.83-.07,.27,0,.59,.34,.7,.33,.1,.43,.19,.69-.07,.27-.27,.5-.73,.64-.97,.13-.23,.33-.59,.46-.83Z">
                            </path>
                            <path class="cls-1"
                                d="M112.59,204.04c.27,.04,.49-2.17,.49-2.71s.08-2.43-.4-2.39c-.29,.03-.31,.84-.35,1.19-.04,.36,.13,2.53,.13,2.93s-.13,.93,.13,.98Z">
                            </path>
                            <path class="cls-1"
                                d="M100.58,130.34c-.53,0-.93,.71-1.02,1.33-.09,.62-.13,2.04,.66,1.99,.8-.04,.49-.4,.4-1.02-.09-.62,.18-.88,.31-1.46,.13-.58-.05-.84-.36-.84Z">
                            </path>
                            <path class="cls-1"
                                d="M93.9,155.78c0,.59,.13,.7,.7,.66,.57-.03,.83-.2,.76-.63-.07-.43-.07-1.69,.1-2.06,.16-.36-.17-.26-.33-.06-.32,.38-1.23,1.5-1.23,2.09Z">
                            </path>
                            <path class="cls-1"
                                d="M92.43,172.76c0,.22,.26,.57,.62,.57,.58,0,.8-1.06,.22-1.06s-.84,.27-.84,.49Z"></path>
                            <path class="cls-1" d="M97.09,160.13c-.7-.03-.61,.99,.13,.99,.56,0,.66-.96-.13-.99Z"></path>
                            <path class="cls-1"
                                d="M98.38,144.82c.3-.43,.93-1.63,1.1-2.19,.16-.56,.86-2.09,.3-2.09-.35,0-.5,.2-.6,.57-.1,.36-.2,.66-.2,1.13s0,.86-.37,.96c-.36,.1-.63,.17-.73,.53-.1,.36,0,1.13-.1,1.53-.1,.4-.56,1.33-.83,1.63-.27,.3-1.19,1.8-1.3,2.16-.1,.37-.26,1.77-.26,2.56s0,1.2,.07,1.26c.06,.07,.2-.03,.4-.33,.2-.3,.67-.86,.73-1.23,.07-.36,.07-1.03,.1-1.59,.03-.56,.57-2.29,.77-2.76,.2-.46,.63-1.69,.93-2.12Z">
                            </path>
                            <path class="cls-1"
                                d="M98.23,177.63c-.31-.18-.88-.71-1.33-.27-.22,.22,.04,.84,.62,.88,.75,.06,1.2-.33,.71-.62Z">
                            </path>
                            <path class="cls-1"
                                d="M89.14,171.4c-.23-.17-.37-.4-.6-.53-.23,.03-.63,.16-.87,.46,.3,.3,.66,.6,.9,.7,.39-.19,.35-.36,.57-.63Z">
                            </path>
                            <path class="cls-1"
                                d="M111.44,206.6c.13-.53,.22-4.43,.4-5.09,.18-.67,.32-1.91-.04-1.91s-.17,1.42-.49,1.38c-.31-.04-.31-.44-.27-.93,.05-.48,.09-.93-.22-.93s-.4,.05-.45,.4c-.05,.44-.09,.75-.18,1.46-.09,.71-.04,1.99-.09,2.44-.04,.44-.18,2.48-.27,2.79-.09,.31,.31,.62,.44,.13,.13-.49,.35-3.24,.35-3.85s.62-.58,.62-.05-.14,3.81-.18,4.12c-.05,.31,.22,.58,.35,.04Z">
                            </path>
                            <path class="cls-1"
                                d="M96.95,187.6c-.18,.35,.27,.4,.71,.35,.45-.04,.71,.13,1.02,.18,.31,.04,.58-.13,.53-.49-.05-.35-.71-.71-1.24-.66-.53,.04-.8,.17-1.02,.62Z">
                            </path>
                            <path class="cls-1"
                                d="M182.09,126.13c-.37-.03-.63-.2-.93-.16-.3,.03-.71,.13-.93,.3-.24,.17-.67,.36-.93,.7-.27,.33-.44,.66-.63,1.02-.2,.37-.4,.53-.66,.77-.27,.23-.7,.23-.9,.6-.2,.37-.47,1.3-.59,1.5-.14,.2-.23,.96-.43,1.33-.12,.23-.73,1.16-.9,1.5-.17,.33-.74,.86-.8,1.13-.07,.27-.07,.23,.17,.23,.27,0,.36-.03,.59-.5,.23-.47,.47-.96,.6-1.23,.13-.26,.43-.73,.73-1.13,.3-.4,.76-.9,1-1.19,.23-.3,.73-.97,1.1-1.3,.36-.33,1.03-.9,1.42-1.16,.4-.27,1-.93,1.46-1.2,.47-.26,1.06-.59,1.13-.79,.07-.2-.13-.37-.49-.4Z">
                            </path>
                            <path class="cls-1"
                                d="M97.32,139.87c-.17,.26-.67,1.13-.2,1.33,.47,.2,.57-.3,.7-.63,.13-.33,.7-.93,.2-1.1-.36-.12-.53,.13-.69,.4Z">
                            </path>
                            <path class="cls-1"
                                d="M94.59,136.52c-.27-.13-.37,.1-.53,.27-.17,.16-1.6,2.29-1.8,2.55-.2,.26-.3,.27-.03,.47,.26,.2,.5,.06,.6-.14,.1-.2,1.6-2.18,1.79-2.48,.2-.3,.19-.55-.03-.67Z">
                            </path>
                            <path class="cls-1"
                                d="M97.26,132.55c-.22,.4-.39,.76-.66,1.1-.26,.32-.53,.54-.93,.9-.38,.33,.31,.71,.53,.57,.22-.13,1.33-1.59,1.55-1.9,.43-.61-.18-1.22-.49-.67Z">
                            </path>
                            <path class="cls-1"
                                d="M94.79,140.1c-.3,.1-.86,.4-1.06,.8-.2,.4-.83,1.46-.93,2.75l1.79-1.76c.03-.37,.23-1.1,.63-1.36,.4-.26,.3-.69,.54-.99,.23-.3,.53-.5,.73-.99,.27-.67,.65-1.11,.83-1.65-.7,.33-1.33,1.19-1.56,1.69-.24,.5-.67,1.43-.96,1.52Z">
                            </path>
                            <path class="cls-1"
                                d="M101.47,154.02c.38,0,.43-.39,.5-.63,.07-.23,.37-.36,.6-.53,.03-.46,0-1.09-.03-1.63-.04-.63-.42-1.58-.7-1.56-.18,.01-.83,1.32-.86,1.79-.03,.5-.23,2.56,.5,2.56Z">
                            </path>
                            <path class="cls-1"
                                d="M100.84,144.05c-.3,0-.6,.17-.7,.63-.1,.46,.13,.96-.03,1.19-.17,.23-.77,1.43-1.03,1.86-.27,.43-.66,.86-.73,1.4-.06,.53-.26,1.03-.3,1.79-.03,.76,0,1.33-.23,1.83-.23,.5-.6,.97-.6,1.56s.26,.7,.23,1.2c-.04,.62-.23,1.36-.13,1.42,.25,.16,.6-.51,.63-.53,.34-.34,.93-.9,1.23-1.2,.3-.3,.04-.56-.2-.7-.24-.13-.1-.96-.04-1.59,.07-.63,.29-.8,.36-1.73,.11-1.28,2.09-4.02,2.13-5.62,.02-.73,.27-1.53-.6-1.53Z">
                            </path>
                            <path class="cls-1"
                                d="M111.21,126.61c.05-.27,.18-.58-.35-.58s-1.42,1.02-1.42,1.46,.09,.48,.45,.48,1.28-1.1,1.32-1.37Z">
                            </path>
                            <path class="cls-1"
                                d="M103.59,128.38c-.65-.06-.99,.48-1.24,.98-.27,.53-1.08,5.71-.4,5.71,.8,0,1.95-5.27,2.08-5.8,.13-.53,.05-.84-.44-.89Z">
                            </path>
                            <path class="cls-1"
                                d="M103.59,161.63c.03,.26,.14,.43,.3,.43s.13-.1,.43-.33c.3-.23,.67-.66,.86-.83,.26-.21,.9-.66,1.33-.69,.43-.04,.9,.3,1.39,.3s.87-.2,1.43-.26c.37-.05,2.29-.06,3.71-.07-.76-.32-2.93-.73-3.55-.83-.43-.07-2.06-.36-2.39-.4-.33-.03-.46-.27-.53-.43-.06-.16-.12-.47-.12-.67s.07-.1,.23-.26c.17-.17,.4-.23,.63-.2,.27,.04,.9,0,1-.03,.57-.2,1.02-1.38,1.29-2.35,.27-.97,1.16-3.54,1-4.02,0-.29-.1-.93-.37-1.03-.26-.09-.8-.4-.83-.83-.03-.43,.1-1.07,.9-1.07,.33,0,.67,.22,1,.36,.53,.23,2.36,.56,3.16,.63,.8,.07,2.69,.5,3.39,.6,.69,.1,1.79,.23,2.06,.33,.61,.23,.45,1.03,.3,1.5-.29,.86-.38,2.3-1.93,2.16-.94-.08-.83-.57-.8-.93,.03-.36,.03-1.03-.1-1.33-.14-.3-1.37-.59-1.94-.59-.23,0-1.2,.22-1.43,.45-.23,.24-.57,.8-.57,1.37,.07,.2,1.07,.3,1.18,.2,.1-.1,.31-.59,.9-.5,.83,.13,.34,1.53,.17,2.26-.17,.7-.33,1.6-.47,1.96-.13,.36-.4,.6-.86,.5-.45-.1-.37-.4-.47-.87-.1-.46-.36-.8-.8-.87-.74-.11-.61,.11-.72,.33-.06,.13-.26,.7-.26,.96s-.4,1.13-.1,1.33c.3,.2,1.2,.29,1.53,.42,.44,.17,.8,.5,.66,.93-.14,.43-.2,.48-.35,.81-.01,.04-.03,.07-.05,.1h.78c.67,.04,3.66,.27,4.39,.2,.73-.07,1.1-.36,1.3-.87,.2-.5,1.16-2.52,1.23-3.38,.07-.87,.83-3.32,.7-3.62-.14-.3-.6-.36-.6-.93s-.1-1.1,.36-1.16c.47-.07,.83-.04,1.13,.1,.61,.27,.62,.31,1.09-.17,.3-.3,.73-.9,1.3-.99,.56-.1,1.79-.07,2.19,.1,.4,.17,.6,.63,.57,.93-.03,.3-.26,.86-.93,.79-.66-.07-1.13-.03-1.36,.17-.23,.2-.7,.93-.9,1.27-.2,.33-.73,1.66-.93,1.99-.2,.33-.66,2.09-.66,2.53s.17,1.26,.77,1.26c.46,0,1.44,.02,1.33,.9-.1,.79-.6,.73-1.06,.7-.44-.03-.87-.23-1.07-.23s-.86,.33-.86,.86,.38,.54,.9,.67c.66,.17,3.46,1,4.49,1.23,1.03,.24,4.75,1.07,6.48,1.46,1.72,.4,3.38,.67,4.48,1.03,1.09,.36,1.46,.56,2.48,.8,1.03,.24,.97,.13,2.13,.66,1.16,.53,.46,.53,1.3,.86,.84,.33,.63,.6,1.23,.73,.6,.13,.9,.46,1.5,.46s.63-.36,.8-.86c.16-.5,.39-1.53,.73-1.79,.33-.27,.87-.23,1.4-.4,.53-.17,1.29-.64,1.5-1.2,.2-.57,.36-1.33,.93-1.89,.57-.56,.93-.83,1.03-.89-.17-.17-.04-.3-.33-.23-.31,.06-1.03,.12-1.5,.13-1.16,.04-1.9,.21-2.49,.17-.56-.04-.87-.34-1.19-.51-.33-.16-.76-.33-1.06-.43-.31-.1-.37-.46-.37-.73s.2-.53,.4-.7c.13-.11,.84-.16,.9-1.34,.04-.7,.43-1.29,.46-1.69,.03-.4,.33-1.73,.3-2.22-.04-.5-.37-1.87-.39-2.33-.04-.46,.36-.46,.69-.53,.34-.07,.77-.47,.74-.93-.04-.46,.07-1.73-.3-2.22-.37-.5-.53-1.4-1.33-1.43-.8-.04-1.17,0-1.43-.2-.27-.2-.5-.2-.99-.2s-1.23-.13-2.13-.17c-.9-.03-2.82-.2-3.75-.24-.87-.03-3.11-.36-3.88-.36s-2.66-.27-3.48-.37c-.99-.12-2.58-.08-2.93,.2-.11,.09-.84,.46-.9,1.16-.03,.47-.13,.93-.4,1.07-.59,.3-1.06-.15-1.36-.13-.43,.03-1.01,.22-1.16,.6-.23,.56-.3,.53-.67,.93-.5,.55-.86,.7-1.59,.76-.37,.04-1.09,.18-2.36-.23-3.76-1.22-7.58-2.21-11.63-2.29-.97-.01-1.86,.27-2.43,.5-.1,.46-.86,1.63-1,1.99-.13,.37-.1,.83-.24,1.17-.13,.33-.33,1.29-.33,1.76s-.13,.63-.47,1.23c-.33,.6,0,.77-.4,1.43-.4,.67-.76,2.72-.83,3.26-.07,.53-.53,2.99-.5,3.29Zm35.9-5.15c.3-.33,.6-2.23,.57-2.63-.03-.4,.3-1.56,.33-1.86,.03-.3,.13-.73,.07-.99-.07-.27-.66-.5-.7-.83-.01-.19-.12-.46,.04-.64,.43-.46,.66-.53,1.13-.56,.74-.05,1.24,.23,1.53,.3,.53,.14,1.52,.04,2.36,.24,1.46,.35,2.84,1.18,3.36,2.12,.23,.43,.33,1.5,.36,1.89,.04,.4,.13,1.4-.07,2.43v.1c-.17,2.24-2.13,3.46-2.55,3.65-.6,.27-2.73,.57-3.22,.5-.69-.1-1.73-.37-2.36-.4-.63-.04-1.82-.3-2.19-.47-.28-.12-.3-.7-.3-1.06s.7-.96,.93-1.1c.23-.13,.43-.36,.73-.7Zm-10.88,.19c.2-.08,.61-.3,.6-.66-.03-.8,.3-2.66,.33-3.09,.03-.43,.43-1.73,.6-2.16,.14-.38-.17-.6-.3-.87-.13-.26-.2-.83,.07-1.16,.3-.36,.66-.36,.96-.4,.23-.03,1,.32,1.5,.34,.37,0,1.16-.2,1.92-.14,1.39,.12,2.06,.52,2.92,1,1.73,.99,1.45,2.68,1.43,4.19-.06,2.44-2.03,3.78-2.59,4.01-.63,.27-2.56,.5-3.35,.53-.8,.04-3.15,.14-3.56,.2-.4,.07-.83,.4-1.13,.56-.3,.17-.6,0-.77-.16-.16-.17-.16-.37-.36-.63-.2-.27-.1-.56,.13-.77,.23-.2,1.33-.7,1.6-.8Z">
                            </path>
                            <path class="cls-1"
                                d="M113.7,145.2c.66-.53,.97-1.33,1.15-1.86,.18-.53,1.55-4.78,1.86-5.84,.31-1.06,1.99-4.42,2.88-5.8,.88-1.37,2.97-4.7,3.59-5.67,.62-.97,1.9-3.01,2.26-3.76,.35-.76,1.15-2.22,1.68-3.59l-.44,.09c-.35,.49-2.44,2.7-3.06,3.86-.65,1.22-3.58,7.17-3.9,7.48l-1.77,.18c-.79,.66-1.38,4.61-2.35,6.38-.4,.72-1.55,1.28-1.77,1.77-.22,.49-2.53,5.48-2.44,6.55,.05,.6,1.64,.75,2.3,.22Z">
                            </path>
                            <path class="cls-1"
                                d="M193.75,138.32c-.2,.26-.33,.59-.53,.86-.2,.26-.36,.59-.39,1.03-.04,.43-.17,.76-.21,1.36-.03,.6-.03,1.16-.13,1.59-.1,.43-.13,.5-.26,1.2-.14,.69-.3,1.13-.43,1.43-.13,.3-.4,.89-.57,1.19-.17,.3-.5,1.13-.56,1.33-.07,.2-.53,1.13-.6,1.36-.07,.23-.33,.86-.53,1.19-.2,.33-.5,.9-.67,1.17-.17,.26-.43,.73-.5,1.09-.07,.36-.07,1.86-.27,2.19-.2,.33-.93,1.1-1.17,1.4-.23,.3-1.19,1.92-1.39,2.22-.2,.3-1.03,1.93-1.23,2.26-.19,.34-.83,1.73-1.06,2.09-.24,.36-1.13,1.59-1.43,1.89-.3,.3-.7,1.03-1.07,1.29-.36,.27-.66,.6-.93,.96-.27,.37-.4,.37-.5,.74-.1,.36-.07,.33-.33,.7-.27,.37-.56,.86-.56,1.33s-.24,1.93,.43,1.86c.66-.07,.53-.3,.63-.53,.09-.23,.23-.36,.4-.53-.04-.2-.04-.93,.13-1.42,.17-.5,.43-.9,.6-1.17,.17-.26,.26-.9,.59-1.46,.33-.57,.54-.8,.7-1.1,.17-.3,.33-.7,.73-1.13,.4-.43,.67-.99,.97-1.36,.29-.36,.76-.83,1.06-1.16,.31-.34,.7-.7,1-1.03,.29-.33,.83-.43,1.13-.87,.3-.43,.83-1.43,.9-1.89,.07-.47,.4-1.33,.43-1.7,.03-.37,.36-1.27,.59-1.6,.24-.33,.93-1.16,1.07-1.53,.13-.37,.66-1.26,.86-1.46,.2-.2,.56-.93,.7-1.3,.13-.37,.46-1.09,.57-1.53,.09-.43,.36-1.1,.49-1.39,.13-.3,.3-1.1,.43-1.53,.13-.43,.36-1.03,.53-1.63,.17-.6,.6-1.96,.77-2.49,.17-.53,.49-1.59,.73-2.19,.24-.6,.5-1.26,.57-1.72,.07-.47-.4-.89-.37-1.32,.04-.43,.07-1,.24-1.26,.16-.27,.16-1.1-.4-1.1-.14,0-.3,.07-.37,.37-.07,.3-.2,.7-.2,.9s-.03,.53-.07,.8c-.04,.26,.07,.4-.07,.7-.13,.3-.27,.63-.47,.9Z">
                            </path>
                            <path class="cls-1"
                                d="M131.19,133.83c0,.44,.05,.71,.27,.71s.53-.45,.57-.84c.05-.4,.22-.75,.13-1.41-.35,.22-.97,1.1-.97,1.55Z">
                            </path>
                            <path class="cls-1"
                                d="M98.91,137.22c-.2,.37-.73,1.2-.83,1.46-.1,.27,.47,.66,.76,.2,.3-.46,.63-1.29,.83-1.56,.2-.26,.2-.63-.07-.69-.26-.07-.5,.23-.7,.59Z">
                            </path>
                            <path class="cls-1"
                                d="M132.87,75.82c-.6-.33-1-.67-2.26-.67s-1.46,.43-1.92,.83c.93,.03,1.36,.56,1.99,.59,.63,.04,1.73-.36,2.19-.76Z">
                            </path>
                            <path class="cls-1"
                                d="M94.65,176.08c0-.4-.18-.67-.84-.75-.67-.09-1.55,.04-1.86-.27-.31-.31-.93-.71-1.2-.83-.27-.14-1.69-.58-2.22,.3-.12,.19,.4,.75,1.02,.8,.62,.04,1.2,.4,1.42,.66,.22,.26,.89,.58,1.29,.62,.4,.05,1.15,.27,1.41,.27s.98-.4,.98-.79Z">
                            </path>
                            <path class="cls-1"
                                d="M173.49,148.27c0,.13,0,.6,.19,.56,.2-.03,.3-.16,.5-.36,.2-.2,.4-.27,.53-.5,.13-.23,.2-.33,.16-.56-.04-.23-.1-.36-.13-.56-.04-.2-.07-.36-.31-.36-.19,0-.26,0-.33,.16-.07,.17-.2,.23-.3,.3-.1,.07-.17,.27-.17,.46s.13,.4,0,.47c-.13,.07-.16,.27-.16,.4Z">
                            </path>
                            <path class="cls-1"
                                d="M156.91,79.31c.4-1,.8-2.13,.8-2.69s.07-1.93,.03-2.52l-5.18-2.13c-.37-.17-.7-.17-1.2-.07-.5,.1-.87,.56-1,1.03-.18,.64-.46,1.93-1.3,2.66-.69,.61-2.12,1.06-2.79,1.1-1.21,.06-2.21-.04-2.62-.2-.92-.34-2.08-1.93-2.69-1.93-.46,0-.76,.56-1.36-.03-.33-.33-.46-.96-.46-1.4s-.23-1.56-.93-1.56c-.5,0-1.03,.6-1.03,1.1s-.07,1.7,.26,2c.33,.3,.67,.5,1.03,.53,.36,.03,.66,.43,.3,.73-.36,.3-1.85,1.23-1.82,2.23,.03,.99,.03,.76,.56,1.26,.54,.5,.3,.43,.47,.66,.16,.23,.73,.53,.79,.83,.07,.3,.43,.73,.66,.77,.23,.03,.84-.07,.8-.3-.03-.23-.63-.33-.8-.6-.16-.27-.33-.9-.1-1.1,.23-.2,.69-.53,1.32-.53l1.1,.1c.07,.46,.43,1.21,.97,1.33,.76,.17,2.39,.67,2.82,.93,.42,.25,.68-.24,.33-.7-.37-.49-1.26-1.37-1.3-2.26-.01-.44,.17-.7,.6-.7,.26,0,.73,.13,1.06,.57,.33,.43,.56,.43,1.19,.8,.63,.36,1.86,.96,2.4,1.3,.53,.33,1.33,.93,1.79,1.36,.47,.43,1.24,1.79,1.26,2.63,.03,1.39-.67,5.01-.86,5.94-.18,.83-.43,1.53-.97,1.5-.57-.04-.5-.56-.46-.93,.03-.34-.07-2.23-.13-2.59-.07-.37-.1-1.2-.96-1.23-.37,.03-1.23,.27-1.73-.07-.5-.33-.76-.67-1.29-.67s-2.33,.6-3.09,.63c-.76,.03-3.52-.07-3.95-.04-.43,.04-1.79,.23-1.79,.53,0,.17,.3,.26,.53,.26,1.04,.04,1.81-.33,2.19-.33,.32,0,1.27,.23,1.3,1.5,.02,1.5-1.92,1.53-2.42,1.56-.47,.04-1.43-.07-1.66-.13-.23-.07-.33,0-.43,.17-.1,.16-.37,.46-.34,.76,.03,.3-.2,.56-.53,.76-.33,.2-1.16,.57-1.19,1.16-.04,.6,.13,2.96,.23,3.35,.1,.4,.37,1.17,1.17,1.49,.79,.33,2.45,1.2,3.57,1.17,1.13-.04,3.06-.6,4.06-.83,1-.23,7.85-1.69,8.91-1.99,1.06-.3,1.25,.43,1.16,.7-.1,.27-1.13,1.7-1.5,1.93-.36,.23-2.12,1.86-2.75,2.52-.63,.66-.83,1.36-1.13,1.79-.3,.43-.63,1.2-1.07,1.37-.43,.16-.73,.16-1.33,.16s-3.06-.13-3.66-.13-1.03,.03-1.16,.3c-.14,.27-.39,.36-.1,.73,.2,.26,.77,.99,.96,1.23,.2,.23,.83,.83,.83,1.5,0,.95-1.11,1.25-1.4,1.26-.54,.04-1.06,0-1.06,.24,0,.46,.62,.56,1.3,.56,.89,0,4.69-.99,6.28-1.96,.87-.53,.98-.79,1.43-1.76,.19-.43,1.23-2.72,1.29-3.22,.06-.5,.36-.9,.7-.9,.46,0,1.22,.61,1.07,1.66-.1,.7-.57,1.3-.6,1.69-.04,.4,.03,.63,.43,.57,.39-.07,.74-.2,1.46-.5,.73-.3,2.56-1.5,2.79-1.82,.23-.33,.5-.87,.46-1.63-.04-.76-.57-6.31-.43-7.64,.13-1.33-.03-1.03,.24-1.59,.26-.55,.55-1.45,.51-2.17-.09-.49-.3-3.86,1.03-3.82,1.33,.04,1.42,.98,2.26,1.02,.84,.05,1.29-.75,1.29-1.15,0-.59-.49-.39-.98-.44-.4-.04-.78-.58-.75-.84,.03-.33,.43-.96,.72-1.17,.3-.2,.34-.5,.87-.5s1.16-.36,1.16-.7,.1-.83-.3-.83-.53,.86-1.23,.9c-.76,.04-.89-.61-.83-1.4,.03-.43-.04-1.06-.37-1.06-.27,0-.43,1.13-.4,1.96,.03,.83,0,2.65-1.96,2.59-.85-.03-1.36-.42-1.9-.83-.43-.33-.2-1.4-.2-1.86,0-1.37,.33-2.92,.73-3.92Z">
                            </path>
                            <path class="cls-1"
                                d="M163.35,145.69c.57-1.95,1.37-9.55,1.46-10.88,.08-1.33,.62-12.13,.71-13.15,.05-.54-.31-.8-.75-.84-.33-.04-1.82,.85-1.82-.13,0-1.15-.09-4.96-.8-5.67,0,1.33,.18,10.28,.18,11.43s-2.57,17.79-2.75,19.21l3.77,.05Z">
                            </path>
                            <path class="cls-1"
                                d="M126.12,73.4c.14-.03,.17-.53,.07-.79-.1-.27-.13-.67-.47-.67-.18,0-.3,.46-.23,.7,.07,.24,.19,.87,.63,.76Z">
                            </path>
                            <path class="cls-1"
                                d="M90.54,161.26c.36-.03,.53-.13,.7-.73,.17-.6,.5-3.16-.2-3.23-.2-.02-.2,.24-.4,.27-.2,.03-.53,.23-.63,.4-.1,.16-.3,.39-.23,.7,.07,.3,.3,1.66,.33,2,.03,.33,.07,.62,.43,.59Z">
                            </path>
                            <path class="cls-1"
                                d="M91.53,146.08c-.43,0-.67,.26-.73,.53-.06,.27-.06,.86,.43,.83,.5-.04,.33-.5,.43-.77,.1-.26,.36-.59-.13-.59Z">
                            </path>
                            <path class="cls-1"
                                d="M86.22,168.01c-.46-.04-.96,.53-1.06,.9-.1,.36,.23,.36,.6,.36s.86-.53,.86-.83-.03-.4-.4-.43Z">
                            </path>
                            <path class="cls-1"
                                d="M86.09,153.19c-.2,.01-.47,.33-.66,.7-.2,.37-.6,1.53-.73,1.9-.13,.36-.66,1.66-.73,2.16-.06,.5-.43,1.88,.23,1.96,.26,.04,.48-.5,.56-.96,.06-.4,.43-1.56,.7-1.93,.27-.37,.83-.94,.83-1.33s.5-2.53-.2-2.49Z">
                            </path>
                            <path class="cls-1"
                                d="M82.16,168.47c.3-.37,.87-2.55,.93-3.13,.07-.56-.53,.07-.86,.33-.33,.27-.2,.7-.4,1.2-.2,.5-.47,1.2-.4,1.66,.06,.47,.43,.3,.73-.06Z">
                            </path>
                            <path class="cls-1"
                                d="M177.48,167.34c.13-.33,.39-.87,.6-1.17,.2-.29,.43-.66,.69-.76,.27-.1,.76-.66,.93-.9,.16-.23,.46-.63,.73-.9,.26-.27,.66-.6,.87-.87,.2-.27,.3-.53,.47-.9,.16-.36,.69-1.39,.89-1.82,.2-.43,.47-1.2,.6-1.5,.13-.3,.6-.96,.03-.99-.2-.01-.43,.19-.6,.33-.17,.14-.53,.73-.59,1.03-.07,.3-.27,.7-.33,.99-.07,.3-.34,.93-.37,1.16-.04,.23-.13,.27-.33,.47-.2,.19-.43,.36-.53,.59-.1,.23-.07,.67-.23,.9-.17,.24-.3,.33-.43,.53-.13,.2-.5,.77-.6,.93-.09,.16-.16,.09-.46,.09s-.73-.13-.94,.14c-.2,.27-.52,.39-.72,.86-.2,.46-.47,.97-.54,1.17s0,.69-.13,.93c-.14,.24-.16,.57-.3,.8-.13,.23-.4,.67-.36,.93,.03,.27,.43,.87,.7,.87s.4-.07,.46-.3c.07-.23,.17-.83,.23-1.23,.07-.4,.14-1.07,.27-1.39Z">
                            </path>
                            <path class="cls-1"
                                d="M132.87,156.81c.5,0,1.06-.5,1.3-.8,.23-.3,.7-1.16,.96-1.46,.26-.3,.99-1.73,.96-2.29-.06-1.02-.39-2.05-1.19-2.09-.59-.04-.69,.2-.96,.33-.27,.13-.6,.23-.8,.63-.2,.4-.43,1.09-.6,1.62-.16,.5-1.18,4.05,.33,4.05Z">
                            </path>
                            <path class="cls-1"
                                d="M126.62,79.61c.8,.37,1.14,.34,1.69,.47,.56,.14,.83,.37,1.13,.76,.19,.26,.32,.51,.77,.27,.43-.23,.43-.17,.96-.67,.33-.31,.8-1.33,1-1.69,.17-.3-.4-.4-.79-.4s-2.29-.16-2.86-.2c-.57-.04-1.8-.66-2.16-.66-.61-.01-.63,.23-.66,.93-.03,.63,.13,.83,.93,1.19Z">
                            </path>
                            <path class="cls-1"
                                d="M80.34,158.07c-.4,.47-.76,.87-1,1.26-.23,.4-.2,1.1,.4,1.1,.73,0,1.62-1.82,1.73-2.02,.16-.31,.33-1.1,.03-1.37-.33-.3-.76,.56-1.16,1.03Z">
                            </path>
                            <path class="cls-1"
                                d="M84.36,173.29c0,.24,.17,.3,.44,.36,.26,.07,1.26-.06,1.56,0,.07,.01,.07-.84-.03-.89-.2-.11-.73-.31-1.03-.27-.3,.03-.93,.53-.93,.79Z">
                            </path>
                            <path class="cls-1"
                                d="M78.41,167.27c0,.53,.13,.74,.63,.77,.77,.05,1.36-1.05,1.36-1.69s-.3-.6-.63-.6c-.82,0-1.36,.73-1.36,1.53Z">
                            </path>
                            <path class="cls-1"
                                d="M134.29,128.08c.27-.4,.57-.84,.66-1.51,.09-.66,.09-1.95,.04-2.61-.49,.58-1.5,3.15-1.5,3.94,.09,.75,.48,.65,.79,.18Z">
                            </path>
                            <path class="cls-1"
                                d="M142.92,158.41c.4,.03,.66-.2,.93-.34,.27-.13,.67-.47,.93-.7,.26-.24,.3-.63,.5-.86,.2-.24,.37-.46,.39-.83,.04-.47,.3-2.99-.26-3.69-.57-.7-.94-.83-1.23-.79-.3,.03-.5-.06-.77,.24-.19,.21-.17,.16-.2,.73-.04,.57-.07,1.23-.1,1.69-.04,.47-.08,1.26-.17,1.76-.1,.56-.29,1.1-.46,1.33-.16,.24-.43,.57-.4,.83,.04,.33,.24,.58,.83,.63Z">
                            </path>
                            <path class="cls-1"
                                d="M106.87,127.86c-.49,0-.84,.62-.93,1.02-.09,.4-.26,1.2-.44,1.82-.18,.62-.8,2.13-.97,2.7-.18,.58-.62,3.98-.09,4.03,.68,.06,1.03-1.46,1.11-2.88,.05-.84,.62-2.57,.93-3.32,.31-.75,.8-1.37,.8-2.17s.18-1.19-.4-1.19Z">
                            </path>
                            <path class="cls-1"
                                d="M106.7,136.84c.3,.18,.53-.36,.62-.53,.22-.4,.95-2.25,1.11-2.52,.18-.33-.52-1.03-.84-.4-.22,.62-1.6,3.28-.89,3.45Z">
                            </path>
                            <path class="cls-1"
                                d="M91.47,141.3c-.51,0-.57,.46-.63,.93-.06,.46-.16,.73-.47,.93-.3,.2-.5,.63-.5,1.06s.27,.36,.4,.13c.13-.24,.43-.63,.5-.93,.06-.3,.2-.6,.43-.8,.23-.2,.17-.26,.33-.53,.17-.27,.23-.8-.07-.8Z">
                            </path>
                            <path class="cls-1"
                                d="M87.48,160.57c.63,.2,.69-.23,.83-.8,.13-.56,.16-2.79,.3-3.32,.13-.53,.36-1.59,.7-2.39,.33-.79,1.26-1.76,1.3-2.19,.03-.43,.26-.7-.27-.7-.26,0-.46,.07-.6,.5-.13,.43-.4,1.06-.43,1.29-.03,.23-.27,1.06-.43,1.46-.17,.4-.54,1.56-.73,1.96-.2,.4-1.16,2.4-1.2,2.76-.04,.36-.1,1.23,.53,1.43Z">
                            </path>
                            <path class="cls-1"
                                d="M131.11,127.14c.09-.22,.84-1.99,.84-2.48s-.27-.35-.35-.22c-.38,.57-.84,2.04-.97,2.48-.13,.44,.39,.44,.48,.22Z">
                            </path>
                            <path class="cls-1"
                                d="M91,153.85c-.37,.3-.83,1.39,.23,1.59,1.06,.2,1.06-.16,1.43-1.06,.36-.9,.59-.79,.63-1.59,.04-.63,.1-2.39,.13-2.76,.03-.36,.63-1.2,.83-1.56,.2-.36,.3-1.26,.47-1.66,.3-.71,1.26-2,1.73-2.56,.46-.56,.43-1.29-.03-1.26-.59,.05-1.36,1.4-1.76,2.06-.4,.66-1.23,1.83-1.4,2.42-.16,.6-.43,1.16-.76,1.5-.33,.33-.56,1.24-.67,1.7-.07,.29,.17,.43,.13,.83s.2,1.36-.17,1.6c-.36,.24-.46,.5-.79,.76Z">
                            </path>
                            <path class="cls-1"
                                d="M88.18,179.93c0-.27-.13-.53-.53-.62-.4-.09-1.2-.27-1.38-.49-.18-.22-.67-.62-.93-.71-.27-.09-1.11-.39-1.24-.09-.08,.21,.31,.44,.53,.53,.22,.09,.71,.49,.8,.75,.09,.27,1.15,.71,1.59,.89,.44,.18,1.15,0,1.15-.27Z">
                            </path>
                            <path class="cls-1"
                                d="M87.95,150.96c.2-.2,.37-.4,.53-.86,.17-.46,.4-.6,.47-1.07,.06-.46,.06-.73-.27-.76-.27-.03-.6,.4-.7,.56-.1,.17-.37,.57-.47,1.03-.1,.46-.36,.66-.4,.99-.03,.33-.13,.87,.1,.87s.53-.57,.73-.77Z">
                            </path>
                            <path class="cls-1"
                                d="M86.12,165.25c.04-.33-.03-.83-.5-.83-.43,0-.63,.56-.66,.96-.03,.4,.03,.63,.59,.63s.53-.44,.57-.77Z">
                            </path>
                            <path class="cls-1"
                                d="M166.02,160.83c.19,.13,.49,.17,.76,.06,.26-.1,1.13,0,1.43,.07,.29,.06,1.33,.17,1.56-.03,.24-.21,.4-.37,.63-.6,.23-.24,.2-.9-.1-1.03-.3-.13-.63-.17-1.03-.2-.4-.03-1.23,.17-1.56,.2-.34,.03-1.17,.03-1.43,.16-.26,.13-.6,.5-.7,.83-.1,.32,.23,.4,.44,.53Z">
                            </path>
                            <path class="cls-1"
                                d="M164.75,162.49c-.37,.07-1.97,.04-2.29,0-.33-.03-.73,.04-1.2,.27-.51,.26-1.48,.17-2.03,.27-.6,.1-1.59,.27-2.12,.36-.53,.1-1.18,.21-1.53,.3-.4,.1-.37,.47,.04,.57,.4,.1,.37,.04,.56,.17,.2,.13,.23,.56,.23,.83s-.09,.3,.2,.53c.3,.24,.7,.16,.97,.13,.26-.03,1.16-.47,1.56-.73,.4-.27,.79-.6,1.13-.8,.34-.2,.86-.83,1.13-1,.27-.16,.69-.33,1.03-.33s.36,.1,.63,.24,.1,1.06,.1,1.29-.03,.34,.23,.47c.27,.13,.86,0,1.26,.03,.4,.03,1.89,.17,2.29,.23,.39,.07,1.22,.07,1.72,0,.5-.07,.96-.47,1.33-.63,.36-.16,.62-.66,.73-1.03,.1-.36-.17-.57-.36-.57-.2,0-1.23-.03-1.5-.06-.2,.06,.17,.4,.47,.43,.3,.03,.3,.66,.23,.99s-.76,.5-1.03,.5c-1.47,0-1.9-.89-2.06-1.09-.17-.2-.83-.77-1-1.03-.16-.27-.36-.4-.72-.33Z">
                            </path>
                            <path class="cls-1"
                                d="M179.86,146.34c.5,.07,.73,.07,1.14-.03,.39-.1,.79-.2,.93-.43,.13-.23,.66-.8,.66-1.03s.43-.77,.47-1.26c.04-.5,.24-.8,.3-1.13,.07-.33,.23-.63,.17-.96-.07-.34,.07-.47-.43-.5-.47-.03-.83,.23-1.06,.37-.23,.14-.4,.37-.63,.53-.23,.16-.67,.49-.76,.69-.1,.2-.5,.79-.53,1.03-.04,.23-.27,.83-.43,1-.16,.17-.47,.96-.43,1.26,.03,.3,.13,.4,.62,.46Z">
                            </path>
                            <path class="cls-1"
                                d="M143.37,183.52c.04,.22,0,.44,.4,.44s.75,.04,1.06,.04,.53,.13,.8,.18c.27,.04,.57,.13,.53-.26-.04-.4-.18-.59-.62-.72-.44-.13-.62-.31-.89-.26-.22,.04-.4,.13-.66,.18-.26,.04-.66,.18-.62,.4Z">
                            </path>
                            <path class="cls-1"
                                d="M180.06,139.64c.04-.33,.17-1.26-.07-1.26s-.46,.2-.56,.53c-.1,.33-.4,1.49,.07,1.56,.23,.03,.53-.5,.56-.83Z">
                            </path>
                            <path class="cls-1"
                                d="M152.59,124.56c.24,0,.17-.3,.4-.7,.23-.4,1.59-2.2,.67-2.2-.19,0-.43,.3-.56,.53-.13,.23-.97,1.53-.93,1.93,.03,.4,.2,.43,.43,.43Z">
                            </path>
                            <path class="cls-1"
                                d="M151.59,159.77c.48,0,1.03-.2,1.36-.83,.33-.63,.9-1.81,1.5-1.76,.43,.03,.53,.46,.53,.8s-.12,1.3-.1,1.73c.03,.43,.03,.57,.2,.67,.26-.16,.36-.43,.36-.43-.04-.27-.13-.73,.04-.96,.16-.24,.23-.4,.67-.4s.63-.04,.96-.23c.33-.2,1.26-.48,1.26-.79,0-.5-.5-.6-1.1-.9-.55-.28-.86-1.26-.86-2.19,0-1.99,1.7-3.26,3.16-3.26,.79,0,2.58,.5,3.36,1.36,.09,.1,.33,.31,.23,.73-.07,.3,.03,.59,.27,.63,.23,.03,.43,.09,.73-.27,.3-.36,.7-1.16,.7-1.76s.03-2.69-.1-2.99c-.14-.3-.37-.53-.71-.59-.33-.07-4.22-.25-5.11-.2-.63,.03-3.79,.1-4.22,.1s-.79,.04-1.16,.17c-.36,.13-1.43,.07-1.66,.1-.24,.04-.3,.16-.33,.36-.03,.2,0,.9,.07,1.1,.16,.48,.27,1.5,.96,1.46,.7-.03,1.03-.36,1.96-.3,.94,.07,1.7,.53,1.63,1.33-.03,.4-.2,1.03-.33,1.26-.14,.23-.34,.8-.37,1.06-.04,.27,0,.67-.2,.7-.3,.04-.66,.1-.83,.04-.17-.07-.33-.16-.3-.56,.03-.37,.07-1.29-.2-1.4-.27-.1-.6-.26-.83-.2-.23,.06-.47,.06-.66,.23-.2,.17-.49,.4-.66,.87-.07,.3,.1,.16,.2,.03,.1-.13,.13-.3,.66-.3,.34,0,.55,.44,.47,.97-.08,.53-.27,1.09-.29,1.43-.07,.86-.17,1.22-.24,1.52-.07,.3-.53,.27-.76,.27-.54,0-.46-.56-.76-.6-.27-.03-.2,0-.24,.17-.03,.16-.23,.56-.23,.83,0,.8,.78,1.03,1,1.03Z">
                            </path>
                            <path class="cls-1"
                                d="M146.64,187.51c.75,.08,.22-.53,0-.67-.22-.14-.45-.53-.8-.67-.35-.13-.75-.44-1.46-.57-.31-.06-.75-.58-1.41-.67-.35-.04-.4,.36-.36,.67,.05,.31-.13,.71,.27,.88,.4,.18,.58,.36,1.07,.49,.48,.13,.88,.35,1.37,.4,.49,.04,.58,.04,1.33,.13Z">
                            </path>
                            <path class="cls-1"
                                d="M151.33,121.94c-.27,0-.8,.26-.8,.53s.33,.63,.57,.63c.33,0,.87-1.16,.23-1.16Z"></path>
                            <path class="cls-1"
                                d="M183.66,138.48c.2-.23,.56-.73,.79-1.06,.23-.33,.5-.9,.73-1.26,.23-.36,.53-.7,.53-1s-.13-.5-.46-.53c-.33-.03-.53,.07-.7,.2-.17,.13-.5,.43-.74,.73-.23,.3-.66,1.06-.86,1.46-.2,.4-.37,1.13-.37,1.42s-.13,.5,.27,.53c.37,.03,.6-.26,.8-.5Z">
                            </path>
                            <path class="cls-1"
                                d="M157.77,120.04c-.04-.33-.04-.39-.4-.39s-1.86,1.56-1.03,1.56c.24,0,1.46-.83,1.43-1.17Z">
                            </path>
                            <path class="cls-1"
                                d="M174.64,176.52c-.35,.27-.4,.66-.89,.84-.48,.18-1.02,.4-1.28,.71-.26,.31-.53,.84-.93,1.02-.4,.17-.54,.39-.94,.71-.4,.31-.97,1.07-1.28,1.5-.31,.44-.93,1.24-1.11,1.55-.18,.31-.35,.79-.62,.93-.27,.14-.62,.08-.71,.44v.13s-.05,.76,.13,.89c.18,.13,.75-.4,1.02-.67,.27-.27,.84-.84,1.2-1.33,.35-.48,1.07-1.24,1.29-1.55,.22-.31,.66-.84,1.15-1.02,.49-.18,.97-.44,1.33-.89,.35-.44,1.2-1.33,1.5-1.73,.32-.4,.62-.58,.84-.71,.13-.35,.13-.8,.18-1.02-.27-.04-.53-.09-.89,.18Z">
                            </path>
                            <path class="cls-1"
                                d="M177.12,182.81c-.31-.31-.83,.44-1.33,.71-.49,.27-1.24,1.24-1.73,1.64-.48,.4-1.73,1.73-2.04,2.04-.31,.31-2.04,1.64-2.35,1.99-.31,.35-1.55,1.5-1.95,1.81-.4,.31-.93,1.2-1.24,1.46-.31,.27-.04,.71,.35,.71s1.95-1.38,2.36-1.73c.39-.35,3.14-3.01,3.45-3.37,.32-.35,2.57-2.52,2.84-2.83,.27-.31,1.15-1.29,1.37-1.6,.23-.31,.45-.66,.27-.84Z">
                            </path>
                            <path class="cls-1"
                                d="M175.39,187.77c-.27,.31-.75,.58-1.06,.93-.31,.36-.88,.89-1.19,1.24-.31,.36-.98,.71-1.02,1.02-.04,.31,.26,.53,.67,.49,.39-.04,.57-.75,.75-1.02,.18-.26,.39-.22,.71-.49,.32-.27,.93-.75,1.15-.97,.22-.22,.62-.31,.8-.49,.18-.17,.27-.66,.44-.84,.17-.18,.31-.54,.13-.66-.54-.35-1.11,.48-1.38,.79Z">
                            </path>
                            <path class="cls-1"
                                d="M170.21,192.03c-.35,0-.8,.49-1.02,.66-.23,.18-.23,.71,.04,.76,.27,.04,.31,.31,.58,.35,.27,.05,.35-.22,.62-.39,.27-.19,.4-.49,.4-.85s-.31-.53-.62-.53Z">
                            </path>
                            <path class="cls-1"
                                d="M155.68,184.1c-.28,0-.54,0-.54,.27s-.09,.76,.09,.84c.17,.09,.44,.09,.58-.13,.13-.22,.35-.31,.35-.49s-.22-.49-.48-.49Z">
                            </path>
                            <path class="cls-1"
                                d="M183.02,169.84c.16-.43,.47-.97,.66-1.36,.2-.4,.7-.9,.9-1.2,.2-.3,.5-1.06,.97-1.53,.46-.47,.83-1.23,1.23-1.59,.4-.37,.93-.73,1.37-1.13,.43-.4,.79-.73,1.06-1.17,.27-.43,.44-1.22,.63-1.69,.21-.46,.8-1.26,1.07-1.63,.27-.37,.53-1.1,.69-1.43,.17-.33,.87-1.26,.57-1.76-.11-.18-.57-.23-.79-.13-.23,.1-.53,.13-.73,.33-.19,.2-.33,.27-.43,.63-.1,.37-.23,.83-.29,1-.08,.17-.1,.4-.33,.66-.24,.27-.4,.33-.44,.63-.04,.3-.07,.7-.16,1.16-.1,.46-.24,.83-.3,1.09-.06,.27-.03,.6-.33,.76-.3,.17-.9,.63-1.13,.83-.23,.2-.49,.56-.82,.93-.34,.36-.64,.69-.9,1.1-.27,.4-.56,.9-.8,1.06-.23,.17-.43,.4-.53,.7-.1,.3-.33,.77-.6,1.03-.27,.27-.66,.57-.94,.8-.26,.23-.52,.59-.69,1.02-.16,.43-.24,.66-.3,1.14-.07,.46-.07,.86-.36,1.22-.3,.37-.6,1.03-.83,1.4-.23,.36-.57,.76-.6,1.03-.04,.27,.3,.27,.62,.07,.34-.2,.34-.47,.54-.73,.2-.27,.46-.57,.59-.86,.13-.3,.4-.77,.73-1.17,.33-.4,.53-.79,.7-1.22Z">
                            </path>
                            <path class="cls-1"
                                d="M170.87,185.83c.36-.4,2.09-2.13,2.44-2.48,.35-.35,1.69-1.5,2.13-1.86,.44-.35,1.06-1.19,1.42-1.46,.35-.27-.04-1.02-.66-1.06-.62-.04-1.07,.97-1.55,1.5-.48,.54-1.15,1.11-1.55,1.6-.39,.49-.79,.62-1.42,.75-.62,.13-1.19,1.28-1.51,1.82-.3,.53-.62,1.85-.83,2.25-.23,.4-.76,.36-1.46,.71-.71,.35-.98,.8-1.29,1.38-.31,.57-.8,.84-1.37,1.29-.57,.44-1.51,1.11-2,1.46-.48,.35-1.24,1.1-1.64,1.41-.39,.31-1.11,.93-1.6,1.33-.48,.4-2.48,1.15-2.96,1.19-.48,.04-2.35-.53-3.01-.71-.66-.17-1.06-.44-1.81-.62-.75-.18-1.42-.39-2.3-.71-.89-.31-1.91-.53-2.12-.66-.23-.14-.99-.69-1.38-.58-.44,.14,.48,.84,.89,1.11,.4,.26,2.25,1.28,3.41,1.72,1.15,.44,3.27,.75,4.03,.89,.75,.13,2.97,.39,3.77,.39s1.42-.71,1.95-1.02c.53-.31,3.06-2.26,3.5-2.74,.44-.49,2.92-2.84,3.32-3.19,.4-.35,3.28-3.32,3.63-3.72Z">
                            </path>
                            <path class="cls-1"
                                d="M187.04,177.08c-.2,.3-.63,.56-.79,.76-.17,.2-.37,.6-.5,.87-.14,.27-.39,.83-.59,1.16-.2,.33-.37,.67-.6,1-.24,.33-.34,.59-.87,.93-.53,.33-.93,.5-1.3,.73-.36,.23-.59,.83-.66,1.16-.07,.33-.17,1.33,0,1.59,.17,.27,.33,.37,.53,.37s.43-.2,.57-.37c.13-.16,.57-.86,.8-1.09,.24-.24,.56-.64,.9-.8,.33-.16,.47-.6,.6-.93,.13-.33,.49-.79,.59-1.13,.1-.33,.37-.87,.67-1.16,.3-.3,.62-.63,.69-1.13,.07-.5,.24-1,.37-1.23,.13-.23,.23-.83,.33-1.06,.1-.23,.23-.8,.07-.8-.55,0-.6,.84-.8,1.13Z">
                            </path>
                            <path class="cls-1"
                                d="M151.78,191.54c-.16,.37,.18,.67,.53,.89,.36,.22,.75,.33,1.37,.58,1.02,.4,1.5,.21,2.35,.31,.84,.09,1.19,.31,1.86,.09,.67-.22,1.64-.71,2.04-1.07,.4-.35,1.33-1.42,1.73-1.73s1.24-1.23,1.77-1.55c.53-.31,.84-.71,1.16-1.02,.3-.31,.92-1.06,.62-1.24-.32-.18-.4,.04-.66,.27-.27,.22-1.19,.93-1.51,1.15-.31,.22-1.28,1.02-1.55,1.29-.27,.27-.71,.88-1.24,1.24-.53,.36-1.28,.98-2.44,1.06-1.5,.12-2.62,0-3.37-.09-.72-.09-2.52-.49-2.66-.18Z">
                            </path>
                            <path class="cls-1"
                                d="M144.07,178.65c.18,.13,.45,.45,.67,.58,.22,.13,.71,.22,.84,0,.12-.22,.12-.53-.18-.62-.31-.08-.76-.58-1.15-.53-.22,.02-.35,.44-.18,.57Z">
                            </path>
                            <path class="cls-1"
                                d="M155.46,201.51c-.27,0-.4,.17-.4,.62s.05,7.18-.04,7.44c-.09,.27,0,1.59-.8,1.59-.18,0-.67-1.02-.57-2.26,.09-1.24,.27-4.92,.27-5.49s-.05-1.9-.44-1.99c-.4-.09-.49,1.24-.49,1.68s-.17,5.9-.22,6.34c-.05,.44-.23,1.15-.58,1.1-.36-.05-.53-.53-.48-1.15,.04-.62,.17-3.63,.13-4.17-.04-.53,.31-4.43-.09-4.47-.4-.05-.27,.75-.45,.98-.17,.22-.26,.27-.31,.62-.04,.35-.22,6.33-.27,6.91-.04,.58-.75,.62-.84-.09-.09-.71,0-3.81,.04-4.52,.05-.71-.04-2.65,.05-3.1,.08-.44-.09-.44-.36-.44s-.79,.04-.71,.48c.09,.45-.04,2.35-.04,2.97s.18,3.86-.67,3.82c-.84-.05-.48-2.79-.53-3.5-.05-.71,.22-4.61,.17-5.01-.04-.4-.08-.71-.48-.71s-.58,.35-.58,.75-.27,6.38-.22,6.65c.04,.27-.22,.63-.53,.44-.32-.18-.49-.49-.4-1.11,.09-.62,.4-6.2,.31-6.55-.09-.36,0-.67-.4-.67s-.35,.23-.58,.36c-.22,.13-.58,.08-.66,.35-.08,.27,0,.58,.09,.84,.09,.27,.18,.89,.18,1.24s-.13,2.44-.08,2.62c.04,.18,.48,.27,.31,.71-.18,.44-.14,.98-.58,.98s-.49-.84-.8-.8c-.31,.04-.62,.4-.93,.27-.31-.13-.62-.62-.62-.97s.44-.36,.44-.84,.09-1.73,.09-2.21,.18-1.99,.13-2.21c-.13-.18-.58-.32-.58-.67s0-.66-.27-.71c-.27-.04-.36,.35-.36,.71s-.13,1.37-.13,2.04,.13,2.26,.13,2.61-.04,1-.49,.98c-.76-.05-.8-1.38-1.15-1.38s-.45,.59-.84,.49c-.31-.09-.84-.57-1.1-.57s-.53,.39-.93,.39-.84-.53-1.02-.53-.57,.39-.97,.44c-.4,.04-.71-.23-.71-.75s.22-4.21,.22-4.79-.09-1.99-.44-1.99-.09,.48-.13,.71c-.05,.23-.44,.58-.44,.85s-.02,5.36-.04,5.58c-.05,.49-.84,.44-.8,.14,.04-.31,.04-4.35,.04-4.65s-.17-.44-.44-.44-.31,.4-.31,.71,0,4.39-.09,4.61c-.09,.22-.44,.31-.71,.31s-.44-.26-.84-.31c-.4-.04-.31,.31-.71,.31s-.44-.31-.76-.31-.66,.75-.93,.75-.27-.13-.58-.13-.4,.35-.89,.35-.62-.27-.97-.22c-.35,.05-.35,.58-.75,.58s-.35-.27-.66-.18c-.31,.09-.09,.8-.8,.85-.71,.04-.53-.53-.49-.89,.04-.36,.44-1.73,.44-2.09s.09-.53-.4-.48c-.49,.04-.93,3.19-.97,3.46-.05,.26-.67,.36-.67,.04s.44-4.21,.44-4.92,.04-.71-.31-.66c-.36,.04-.22,.48-.4,.75-.18,.27-.44,.62-.44,.98s.22,1.11,.18,1.46c-.04,.36-.18,1.24-.18,1.64s-.14,.84,.04,.84,.4,.4,.04,.43c-.35,.05-.66,.4-.88,.4s-.4-.09-.35-.84c.04-.75,.27-6.25,.22-7-.04-.75-.09-.58-.4-.53-.31,.04-.75,.22-.75,.53s.4,2.88,.31,3.37c-.09,.49-.27,3.76-.44,4.12-.18,.35-.71,0-.89,.26-.17,.27-.26,.89-.71,.84-.44-.04-.8-.04-1.11,.22-.31,.27-1.06,.35-.93-.31,.14-.67,.4-2.52,.4-3.28s-.31-1.23-.62-1.23-.44,.67-.48,1.1c-.04,.44-.09,2.79-.09,2.97s.31,1.02,.22,1.33c-.09,.31-.36,.22-.71,.22s-.62-.26-.93-.26-.45,.93-.75,.88c-.31-.04-.53-.62-.84-.62s-.35,.4-.71,.36c-.35-.04-.89-.62-.75-1.24,.13-.62,.4-3.45,.4-4.07s.27-3.11-.22-3.02c-.49,.09-.97,0-.97,.35v3.06c0,.44,.09,3.01,.04,3.54-.04,.53,0,.75,.27,.98,.04,.04,.06,.08,.08,.11,.49,.2,.98,.38,1.47,.57,.39,.15,.77,.3,1.15,.44,1.07,.39,2.16,.76,3.26,1.1,.22,.07,.45,.13,.67,.19,.9,.27,1.8,.53,2.71,.77,.41,.11,.83,.2,1.25,.3,.73,.18,1.46,.35,2.2,.51,.46,.1,.92,.19,1.38,.27,.71,.14,1.43,.27,2.14,.38,.47,.08,.95,.15,1.42,.22,.73,.11,1.47,.2,2.21,.28,.46,.05,.92,.11,1.38,.15,.81,.08,1.62,.13,2.44,.19,.39,.02,.79,.06,1.18,.08,1.21,.06,2.43,.09,3.66,.09s2.37-.04,3.54-.09c.36-.02,.72-.04,1.07-.06,.84-.05,1.67-.11,2.5-.19,.38-.04,.76-.07,1.15-.11,.9-.1,1.8-.21,2.69-.34,.26-.04,.52-.07,.78-.11,1.13-.18,2.24-.38,3.35-.6,.31-.06,.61-.13,.92-.2,.78-.17,1.56-.35,2.34-.54,.06-.64,.26-4.73,.26-5.16s.31-2.17,.31-2.62-.31-.84-.36-1.15c-.04-.31-.13-.44-.39-.44Z">
                            </path>
                            <path class="cls-1"
                                d="M130.49,201.95c.22,0,.44-.04,.44-.4s.13-1.55,.13-1.86,.09-.62-.22-.58c-.22,.03-.35,.09-.35,.27s.22,.98,0,1.15c-.22,.17-.53,.22-.36,.58,.18,.35,.13,.84,.36,.84Z">
                            </path>
                            <path class="cls-1"
                                d="M130.4,198.5c.04-.4,.09-2.17-.31-2.13-.23,.03-.22,.75-.22,1.02s-.14,.93,.18,1.38c.31,.44,.31,.13,.35-.27Z">
                            </path>
                            <path class="cls-1"
                                d="M136.99,177.1c-.22,.04-.53,0-.53,.18s-.04,.49,.17,.57c.22,.09,.76,.49,.93,.49s.53-.09,.53-.35-.13-.49-.31-.67c-.18-.18-.53-.27-.8-.22Z">
                            </path>
                            <path class="cls-1"
                                d="M163.3,80.89c.53,.18,.53-2.12,.35-2.83-.18-.71-.71-1.06-1.24-.88-.54,.17-1.42,1.24-1.42,1.24,.53,.53,1.77,2.3,2.3,2.48Z">
                            </path>
                            <path class="cls-1"
                                d="M110.14,161.96c-1.08,.2-4.42,.96-7.04,3.19-2.62,2.22-4.19,3.28-4.12,3.99,.06,.7,.57,1.29,1.03,1.56,.47,.26,.9,.73,1.46,1.09,.79,.36,2.06,.59,3.16,.23,.87-2.59,5.35-8.77,5.95-9.43,.55-.61,.12-.74-.43-.63Z">
                            </path>
                            <path class="cls-1"
                                d="M100.44,164.68c.24,.2,.4,.2,.66-.1,.27-.29,1.1-1.12,1.1-1.82s0-.87-.43-.83c-.33,.02-.46,.13-.6,.62-.13,.5-.13,.93-.43,1.23-.3,.3-.54,.7-.3,.9Z">
                            </path>
                            <path class="cls-1"
                                d="M144.03,181.79c.31,.14,.62,.14,.93,.22,.31,.09,.45,.05,.63-.17,.17-.23,.22-.67,0-.84-.23-.18-.71-.58-1.03-.58-.22,0-.62,.04-.62,.4s-.22,.84,.09,.97Z">
                            </path>
                            <path class="cls-1"
                                d="M137.3,179.85c-.24,.2-.31,.44-.22,.58,.09,.13,.44,.53,.62,.53s.57-.13,.57-.4-.71-.93-.97-.71Z">
                            </path>
                            <path class="cls-1"
                                d="M138.71,184.94c.27,0,.53-.22,.53-.44s0-.71-.35-.75c-.35-.05-.79-.27-1.1-.44-.31-.18-.75-.36-.97-.58-.22-.22-.75-.67-.97-.93-.22-.26-.66-.49-.84-.22-.14,.2-.18,.39-.04,.62,.13,.22,.35,.58,.57,.71,.22,.13,.58,.49,.88,.62,.31,.13,.62,.31,.97,.53,.35,.23,.57,.36,.8,.58,.22,.22,.26,.31,.52,.31Z">
                            </path>
                            <path class="cls-1"
                                d="M93.33,159.24c-.34,.01-.47,.4-.5,.76-.03,.36-.06,.73-.1,1.29-.04,.56,.1,1.6,.9,1.63,.8,.03,.93-.64,.93-1.13s-.1-.8-.53-.96c-.43-.16-.24-.47-.24-.7s.17-.93-.46-.9Z">
                            </path>
                            <path class="cls-1"
                                d="M135.75,197.66c.44-.27,.04-1.33-.05-1.5-.08-.18,0-.32-.31-.36-.36-.05-.09,.53-.13,.93-.04,.4,.09,1.38-.09,1.69-.18,.31-.27,1.42-.27,1.72s0,.58,.31,.58,.22-.31,.27-.75c.04-.44,.09-1.24,.18-1.51,.09-.27-.35-.53,.09-.79Z">
                            </path>
                            <path class="cls-1"
                                d="M145.62,173.73c.22,.05,.44-.09,.44-.27s.04-.58,.22-.8c.18-.22-.17-.49-.35-.31-.2,.19-.53,.57-.58,.84-.04,.27,.04,.49,.27,.53Z">
                            </path>
                            <path class="cls-1"
                                d="M100.84,156.41c-.32-.1-.87,.26-1.1,.76-.23,.5-.5,.6-.47,1.19,.03,.6,.24,1.1,.27,1.43,.03,.33,.4,.7,.23,.93-.17,.24-.2,.63,.07,.7,.27,.06,.83-.37,.83-1s.1-2.56,.23-3.09c.14-.53,.37-.79-.06-.93Z">
                            </path>
                            <path class="cls-1"
                                d="M137.61,200.1c0-.45,.04-1.38,.22-1.74,.18-.35,.18-.53,.14-1.02-.04-.49-.04-.71-.26-.71-.53,0-.44,.22-.44,.67v2.83c0,.23,.35,.4,.35-.04Z">
                            </path>
                            <path class="cls-1"
                                d="M136.28,189.64c0-.26-.18-1.16-.44-1.33-.26-.18-.84-.62-.97-.89-.13-.27-.44-.44-.75-.35-.25,.07-.31,.22-.26,.53,.04,.31-.05,.67,.09,.98,.13,.31,.35,.8,.62,.97,.26,.18,1.06,.63,1.37,.63s.35-.27,.35-.53Z">
                            </path>
                            <path class="cls-1"
                                d="M139.95,188.35c-.09-.31-.4-.97-.84-.97-.27,0-.79,.17-.75,.39,.05,.22,.18,.53,.4,.75,.22,.22,.44,.49,.79,.49s.49-.35,.4-.67Z">
                            </path>
                            <path class="cls-1"
                                d="M139.34,202.08c.26,.04,.26-.93,.26-1.24s-.05-2.62-.36-2.62c-.4,0-.09,2.08-.09,2.57s-.09,1.24,.18,1.28Z">
                            </path>
                            <path class="cls-1"
                                d="M76.52,187.25c.33,.16,1.19,.86,1.46,.99,.26,.14,.93,.67,1.06,.8,.13,.13,.46,.39,.77,.36,.3-.03,1.03-.5,1.09-1.09,.07-.6-.3-.7-.69-1-.4-.3-2.22-.99-2.42-1.13-.2-.13-.47-.36-.9-.33-.43,.04-.83,.17-.87,.47-.02,.23,.17,.76,.5,.93Z">
                            </path>
                            <path class="cls-1"
                                d="M76.39,176.11c-.07-.33-.14-.43-.53-.3-.4,.13-.67,.53-.87,.9-.2,.36-.06,.56,.37,.79,.5-.43,1.1-1.06,1.03-1.4Z">
                            </path>
                            <path class="cls-1"
                                d="M98.77,202.6l.07,.04c.08,.05,.17,.1,.25,.15,.15-1.17,.37-2.87,.34-3.28-.04-.53-.04-1.78-.44-1.78s-.26,1.51-.26,2.09c0,.34,.05,1.66,.05,2.77Z">
                            </path>
                            <path class="cls-1"
                                d="M166.84,203.95c.09,.52,.13,2.7,.18,3.11l.55-.24c.3-.13,.6-.25,.89-.38,0-.15-.03-.28-.06-.37-.14-.31-.49-.76-.31-1.07,.18-.31,.18-.71,.09-1.24-.09-.53-.27-2.61-.27-3.11s.4-2.7-.17-2.7c-.27,0-.4,.26-.4,.48s-.4,.4-.4,.67,.04,1.06,0,1.46c-.04,.4-.18,2.83-.09,3.37Z">
                            </path>
                            <path class="cls-1"
                                d="M82.6,185.08c.03-.4-.33-.83-.73-.89-.4-.07-1.96-.3-2.19-.54-.23-.23-1.04-.28-1.15,.28-.03,.27,.08,.78,.35,1.01,.27,.24,.6,.4,1.26,.53,.66,.13,.86,.3,1.33,.33,.46,.03,1.1-.33,1.13-.73Z">
                            </path>
                            <path class="cls-1"
                                d="M96.6,199.96c-.03,.21-.08,.77-.11,1.24,.22,.14,.44,.29,.67,.43,.03-1.3,0-2.83-.25-2.78-.34,.08-.26,.79-.31,1.1Z">
                            </path>
                            <path class="cls-1"
                                d="M80.93,177.04c.27,.04,.24,0,.37-.07l.03-.76s-.13-.27-.47-.27c-.37,0-.4,.2-.4,.43s.2,.63,.46,.67Z">
                            </path>
                            <path class="cls-1"
                                d="M159.97,202.17c-.04-.26-.08-.17-.31-.22-.22-.04-.18,.22-.26,.44-.09,.22-.44,.53-.44,1.29s0,4.83-.05,5.36c-.01,.18-.01,.54,0,.94,.08-.03,.17-.05,.25-.08,.35-.11,.7-.21,1.05-.32-.06,.02-.13,.04-.19,.06-.02-1.57-.07-3.69-.04-4.06,.05-.58,.05-3.15,0-3.42Z">
                            </path>
                            <path class="cls-1"
                                d="M163.52,200.36c-.78,.06-.58,1.02-.67,1.69-.09,.66-.04,3.58-.09,4.07-.02,.25-.07,1.48-.11,2.65,.22-.08,.45-.15,.67-.23,.2-.07,.4-.16,.6-.23,.04-.02,.08-.03,.13-.05,.06-.59,.11-1.07,.12-1.25,.04-.53,.09-2.88,.14-3.63,.04-.75,.44-3.1-.8-3.01Z">
                            </path>
                            <path class="cls-1"
                                d="M143.25,69.18c.27-.16,.73-.37,1.36-.37s1.87,.34,2.75,.5c.94,.17,1.2-1.1,.6-1.3-.69-.23-2.59-.2-3.16-.16-.78,.03-1.52,.69-1.96,.93-.36,.2-.06,.67,.4,.4Z">
                            </path>
                            <path class="cls-1"
                                d="M161.48,201.16c-.4,0-.48,.31-.48,.62s-.18,3.59-.18,4.12c0,.31,.12,1.97,.21,3.43,.31-.1,.62-.21,.93-.32,.02-1.02,.04-1.96,.07-2.18,.04-.49-.18-4.87-.18-5.23s.04-.44-.35-.44Z">
                            </path>
                            <path class="cls-1"
                                d="M98.37,191.01c.31,0,.89-.27,.85-.75-.05-.49-.85-.75-1.78-.75-.53,0-1.9,.67-1.9,1.19s.31,.62,.48,.62c.31,0,.71-.48,1.46-.53,.53-.04,.58,.22,.89,.22Z">
                            </path>
                            <path class="cls-1"
                                d="M87.65,186.54c.17,.04,.62-.31,.62-.58s-.09-.4-.4-.4c-.49,0-.53,.4-.53,.58s.13,.35,.31,.4Z">
                            </path>
                            <path class="cls-1"
                                d="M86.23,181.89c.22-.4-.13-.22-.4-.18-.27,.04-1.51-.35-1.77-.53-.27-.17-.76-.31-.98-.67-.22-.35-.26-.4-.53-.4s-.44,.04-.67,.22c-.22,.18-.8,.58-.8,.89s.57,.53,1.37,.67c.8,.13,1.86,.97,2.48,.97s1.06-.58,1.29-.97Z">
                            </path>
                            <path class="cls-1"
                                d="M76.35,169.54c0-.5-.27-1.17-.77-1.17-.3,0-.37,.2-.43,.43-.07,.23-.04,.67-.23,.96-.2,.3-.4,.8-.4,1s.16,.33,.46,.36c.83,.09,1.36-1.24,1.36-1.59Z">
                            </path>
                            <path class="cls-1"
                                d="M166.28,207.38c-.04-1.29-.08-2.43-.15-2.82-.17-1.06,.36-4.74-.26-4.65-.63,.09-.58,.74-.62,1.02-.04,.39-.09,2.04-.13,2.35-.05,.31,.09,2.83,.09,3.9,0,.17,0,.38,0,.62,.36-.14,.72-.28,1.07-.43Z">
                            </path>
                            <path class="cls-1"
                                d="M92.92,191.45c.26,0,.57-.31,.57-.53s-.27-.49-.53-.45c-.27,.05-.66,.27-.66,.49s.18,.49,.62,.49Z">
                            </path>
                            <path class="cls-1"
                                d="M90.7,189.86c.98,.09,1.15-.71,.31-.71-.49,0-2.04,.79-1.51,1.32,.22,.23,.71-.66,1.2-.62Z">
                            </path>
                            <path class="cls-1"
                                d="M124.68,66.98c.13,.43,.09,.97,.31,1.42,.4-.44,.62-.8,1.37-1.02,.76-.22,4.88-1.46,6.16-1.46s3.58,1.42,4.25,2.13c.26,.31,.35,.93,.18,1.24-.18,.31-.09,.31,.13,.35h1.59c.22,0,.97-.26,1.19-.71,.22-.44,.93-1.68,.93-2.26s.67-.75,1.02-.8c.35-.04,3.23-.67,5.04-.67s5.25,2.17,6.03,2.71c.84,.57,.39,1.47-.36,1.37-.35-.04-1.28-.27-1.68-.49l-.23,.22c1.41,.9,4.86,2.45,6.87,3.26-.04-.02-.25-.63-.75-1.44-1.18-1.9-1.52-4.45-1.39-7,.4-.51,.67-.75,1.79-.66,.93,.07,.55-1.62,.13-2.31-.26-.44-.97-1.37-1.19-2.08-.22-.71-3.23-5-6.07-6.25-2.84-1.24-5.89-1.99-9.4-1.99s-11.01,2.04-12.25,3.41c-1.24,1.38-.89,1.04-1.11,1.53-.22,.49-.53,.82-.8,1.31-.26,.49-.19,.91-.46,1.35-.45,.75-1.89,3.11-1.75,5.6,.09,1.6-.22,2.57,.44,3.23Z">
                            </path>
                            <path class="cls-1"
                                d="M78.98,178.84c-.26,.15-.3,.53-.3,.73s-.33,.37-.2,.6c.13,.23,.86,.27,.9-.03,.03-.3-.1-.43-.1-.63s.27-.36,.23-.5c-.03-.13-.36-.27-.53-.16Z">
                            </path>
                            <path class="cls-1"
                                d="M169.9,202.93c.22,.04,.26-.39,.31-.71,.04-.31,.04-2,.18-2.53,.13-.53,.31-3.24-.4-3.24-.44,0-.48,.09-.48,.58s-.17,4.08-.13,4.52c.04,.44-.21,1.22,.53,1.37Z">
                            </path>
                            <path class="cls-1"
                                d="M80.57,172.66c.26-.36-.14-.56-.47-.63-.4,.27-1.4,1.2-1.56,1.8l.4,.56c.17-.23,.7-.53,1-.67,.3-.13,.37-.7,.64-1.06Z">
                            </path>
                            <path class="cls-1"
                                d="M117.46,198.5c-.31-.04-.35,1.02-.4,1.5-.04,.49-.27,2.35,.18,2.35s.44-1.29,.39-1.95c-.04-.66,.23-1.86-.17-1.9Z">
                            </path>
                            <path class="cls-1"
                                d="M130.88,69.02s-1.42-1.06-1.95-.53c-.53,.53-1.06,.71-1.06,.71,1.6-.18,3.01,.36,3.01,.36v-.53Z">
                            </path>
                            <path class="cls-1"
                                d="M93.41,188.13c.4,.04,1.06-.75,1.15-1.02,.09-.26-.31-.53-.62-.62-.31-.08-1.6-.93-1.91-.93-.44,0-.49,.13-.71,.4-.22,.27-.4,.66-.35,.93,.04,.27,.22,.22,.62,.4,.39,.18,1.42,.8,1.81,.84Z">
                            </path>
                            <path class="cls-1"
                                d="M75.52,188.97c-.3-.23-.47-.4-.86-.63-.23-.13-.63,1-.3,1.3,.57,.51,.96-.37,1.16-.67Z">
                            </path>
                            <path class="cls-1"
                                d="M105.99,197.79c-.22,0-.44,.31-.44,.53s-.09,1.37-.13,1.81c-.04,.45-.36,1.91-.27,2.44,.09,.53,.45,1.38,.31,1.77-.13,.4-.27,.88-.31,1.37,0,.07,0,.16,0,.26,.2,.09,.39,.19,.58,.28,.16-.12,.45,.14,.52-.63,.09-.98,0-6.91,.04-7.4,.04-.49-.09-.44-.31-.44Z">
                            </path>
                            <path class="cls-1"
                                d="M102.31,200.13c-.04,.36-.22,.49-.31,.89-.09,.4-.13,1.33-.13,2.04,0,.3-.04,.78-.06,1.24,.03,.02,.06,.03,.09,.05,.17,.09,.34,.19,.51,.27,.03-.78,.17-2.34,.17-2.94,0-.66,.17-2.26-.09-2.26-.13,0-.13,.36-.18,.71Z">
                            </path>
                            <path class="cls-1"
                                d="M100.72,200.05c-.44,.05-.31,.8-.36,1.42-.02,.27-.04,1.13-.06,2.03,.08,.05,.17,.09,.25,.14,.2,.11,.4,.22,.6,.32,.03-.74,.05-1.44,.05-1.69,0-.53-.04-2.26-.48-2.21Z">
                            </path>
                            <path class="cls-1"
                                d="M74.26,186.32s.37-.27,.5-.44c.14-.16,.34-1.09,.1-1.26-.24-.17-.7-.27-.93-.1-.24,.17-.4,.3-.57,.47-.16,.16,.57,1.13,.9,1.33Z">
                            </path>
                            <path class="cls-1"
                                d="M93.76,197.61c-.44,.08-.26,.44-.22,.93,0,.11,.02,.37,.03,.69,.22,.16,.44,.31,.66,.47-.04-1.01-.15-2.15-.47-2.09Z">
                            </path>
                            <path class="cls-1"
                                d="M76.42,183.36c.17-.03,.43-.36,.43-.6s-.37-.3-.6-.3-.66,0-.66,.23c0,.37,.66,.7,.83,.67Z">
                            </path>
                            <path class="cls-1"
                                d="M73.16,179.14c0-.23-.07-.7-.53-.66-.26,.04-.43,.34-.43,.53,0,.38-.19,1.43,.57,1.43,.4,0,.63-.11,.63-.33s-.23-.73-.23-.97Z">
                            </path>
                            <polygon class="cls-1"
                                points="48.79 200.28 50.58 199.12 46.85 193.41 51.11 190.64 54.96 196.54 56.74 195.39 51.58 187.48 37.66 196.56 42.94 204.66 44.71 203.5 40.74 197.4 45.07 194.57 48.79 200.28">
                            </polygon>
                            <path class="cls-1"
                                d="M60.32,202.8c.9,1.05,1.3,2.41,1.2,4.07l2.06-1.76c-.16-1.39-.69-2.61-1.59-3.67-.94-1.11-2.02-1.74-3.23-1.9-1.21-.16-2.32,.18-3.32,1.04-.67,.57-1.1,1.25-1.29,2.05-.2,.8-.19,1.86,.02,3.17l.34,2.09c.26,1.7,0,2.88-.77,3.54-.48,.41-1.03,.56-1.67,.45-.64-.11-1.2-.45-1.69-1.01-1.1-1.29-1.45-2.95-1.04-4.99l-2.3,1.96c.11,1.68,.7,3.15,1.76,4.4,.93,1.09,2,1.7,3.21,1.84,1.21,.14,2.33-.23,3.34-1.09,1.43-1.22,1.94-2.99,1.54-5.32l-.36-2.08c-.17-.93-.2-1.68-.11-2.24,.09-.56,.33-1.01,.71-1.33,.43-.37,.94-.47,1.54-.33,.6,.15,1.15,.52,1.66,1.11Z">
                            </path>
                            <polygon class="cls-1"
                                points="75.28 217.55 76.69 215.96 66.27 206.75 64.87 208.33 69.14 212.11 59.51 223.02 61.3 224.6 70.94 213.7 75.28 217.55">
                            </polygon>
                            <path class="cls-1"
                                d="M98.82,229.21c-.55-.65-1.46-1.26-2.71-1.82l-3.98-1.78-6.81,15.19,5.14,2.3c1.16,.52,2.21,.76,3.16,.72,.94-.04,1.75-.27,2.42-.7,.67-.43,1.18-1.03,1.53-1.81,.44-.98,.49-1.97,.15-2.96-.34-1-1.02-1.85-2.03-2.56,1.83,.05,3.08-.68,3.75-2.17,.35-.78,.47-1.54,.36-2.3s-.43-1.46-.99-2.11Zm-3.41,10.9c-.2,.45-.52,.81-.95,1.09-.43,.28-.9,.41-1.41,.41-.51,0-1.36-.27-2.54-.81l-2.14-.96,2.16-4.82,2.03,.91c1.08,.48,1.83,.93,2.24,1.34,.42,.41,.67,.87,.77,1.38s.05,.99-.16,1.46Zm1.7-7.32c-.32,.7-.82,1.17-1.5,1.39-.69,.22-1.61,.07-2.77-.45l-1.45-.65,2.05-4.57,1.87,.84c1.86,.83,2.46,1.98,1.8,3.43Z">
                            </path>
                            <polygon class="cls-1"
                                points="108.12 231.96 105.83 231.3 101.24 247.3 110.73 250.03 111.33 247.95 104.13 245.88 108.12 231.96">
                            </polygon>
                            <rect class="cls-1" x="110.14" y="241.79" width="16.65" height="2.38"
                                transform="translate(-141.44 317.31) rotate(-79.97)"></rect>
                            <path class="cls-1"
                                d="M128,238.37c.53-.32,1.18-.45,1.95-.39,1.38,.1,2.62,.77,3.73,2.01l.2-2.7c-1.1-.87-2.34-1.35-3.73-1.45-1.45-.11-2.66,.21-3.63,.96-.97,.75-1.5,1.78-1.6,3.08-.07,.87,.12,1.66,.54,2.37,.43,.71,1.18,1.45,2.27,2.22l1.72,1.23c1.39,1.02,2.05,2.03,1.97,3.04-.05,.62-.33,1.12-.86,1.5-.53,.38-1.16,.54-1.91,.48-1.69-.13-3.11-1.05-4.27-2.77l-.23,3.02c1.27,1.11,2.73,1.73,4.37,1.85,1.43,.11,2.62-.22,3.57-.99,.95-.76,1.48-1.81,1.58-3.14,.14-1.87-.76-3.49-2.69-4.85l-1.74-1.21c-.78-.54-1.34-1.04-1.67-1.5-.34-.46-.48-.94-.45-1.44,.04-.56,.33-1,.85-1.32Z">
                            </path>
                            <polygon class="cls-1"
                                points="150 235.63 150.57 242.81 141.24 243.54 140.67 236.36 138.3 236.55 139.61 253.15 141.98 252.96 141.42 245.74 150.74 245 151.31 252.23 153.68 252.04 152.38 235.44 150 235.63">
                            </polygon>
                            <polygon class="cls-1"
                                points="162.72 248.01 161.49 242.98 168.11 241.36 167.6 239.29 160.98 240.91 159.78 235.98 166.63 234.3 166.13 232.24 156.96 234.48 160.9 250.63 170.29 248.34 169.79 246.28 162.72 248.01">
                            </polygon>
                            <path class="cls-1"
                                d="M184.35,229.35c-1.23-.91-2.59-1.41-4.07-1.52-1.48-.11-3.26,.29-5.34,1.18l-5.16,2.21,6.54,15.29,4.84-2.07c1.36-.58,2.26-1.01,2.71-1.29,.45-.28,.91-.66,1.39-1.13,.83-.79,1.46-1.72,1.89-2.76,.43-1.02,.64-2.08,.63-3.19,0-1.1-.23-2.17-.66-3.19-.61-1.43-1.54-2.6-2.77-3.51Zm.6,9.2c-.19,.48-.44,.92-.75,1.33s-.73,.81-1.27,1.22c-.54,.41-1.36,.85-2.46,1.32l-2.8,1.2-4.87-11.38,2.74-1.17c1.05-.45,1.83-.74,2.34-.86,.51-.12,1.08-.17,1.72-.15,.63,.02,1.24,.14,1.81,.35,1.55,.56,2.68,1.67,3.38,3.31,.71,1.67,.77,3.29,.15,4.85Z">
                            </path>
                            <rect class="cls-1" x="199.83" y="215.55" width="2.38" height="16.65"
                                transform="translate(-93.4 161.85) rotate(-36.18)"></rect>
                            <path class="cls-1"
                                d="M212.35,214.14c.37-1.65,.05-3.02-.96-4.11-.89-.97-1.99-1.47-3.31-1.48s-2.48,.44-3.51,1.38c-1.04,.96-1.62,2.1-1.72,3.43-.11,1.33,.28,2.48,1.16,3.43,.5,.55,1.06,.93,1.67,1.14,.61,.21,1.37,.29,2.27,.23-.54,1.74-.24,3.23,.9,4.48,.91,1,2.06,1.49,3.43,1.47,1.38-.02,2.62-.53,3.73-1.55,1.12-1.03,1.75-2.21,1.88-3.55,.13-1.34-.27-2.51-1.2-3.53-1.17-1.28-2.62-1.72-4.36-1.34Zm-4.78,1.87c-.72-.01-1.31-.27-1.78-.78-.49-.53-.71-1.13-.65-1.81s.36-1.27,.93-1.79c.56-.51,1.19-.77,1.87-.76,.68,.01,1.27,.28,1.76,.81,.46,.5,.67,1.11,.62,1.81s-.33,1.3-.87,1.79c-.54,.49-1.17,.74-1.88,.72Zm8.01,2.99c-.1,.69-.45,1.32-1.07,1.88-.64,.59-1.33,.89-2.06,.91-.73,.01-1.36-.26-1.88-.83-.52-.57-.75-1.21-.68-1.93,.07-.72,.41-1.37,1.04-1.94,.64-.58,1.32-.88,2.05-.9,.72-.01,1.35,.26,1.86,.82l.16,.18c.48,.52,.67,1.13,.58,1.82Z">
                            </path>
                            <path class="cls-1"
                                d="M221.66,200.32c-1.37-1.14-2.8-1.69-4.32-1.65s-2.78,.66-3.78,1.87c-.9,1.07-1.29,2.29-1.17,3.65,.12,1.36,.71,2.48,1.77,3.37,1.02,.85,2.18,1.23,3.49,1.14,1.31-.09,2.37-.63,3.19-1.6,.65-.78,1.04-1.61,1.16-2.49,.7,.99,1.18,2.19,1.44,3.61s.29,2.85,.1,4.29l2.27-.02c.35-2.25,.13-4.51-.65-6.8-.78-2.28-1.94-4.07-3.49-5.37Zm-2.18,4.98c-.49,.58-1.11,.92-1.86,1s-1.41-.1-1.96-.57c-.6-.5-.95-1.12-1.02-1.84-.08-.72,.13-1.38,.62-1.97,.54-.65,1.22-.98,2.03-1,.81-.02,1.59,.28,2.33,.89,.15,.12,.43,.42,.86,.9-.09,1.03-.43,1.89-1,2.57Z">
                            </path>
                            <path class="cls-1"
                                d="M234.53,191.58c-1.14-.72-2.35-.95-3.61-.68-1.27,.26-2.25,.95-2.95,2.06-.47,.74-.74,1.6-.83,2.59-.87-1.08-1.49-2.24-1.87-3.46-.37-1.23-.57-2.6-.59-4.11l-2.3,.25v.29c.1,1.71,.38,3.28,.86,4.68s1.15,2.67,2,3.8c.85,1.12,1.85,2.04,2.97,2.75,1.51,.95,2.98,1.31,4.43,1.08s2.58-1.01,3.42-2.33c.74-1.18,.97-2.45,.67-3.79s-1.04-2.39-2.21-3.13Zm-.29,5.72c-.45,.72-1.08,1.15-1.88,1.29-.8,.14-1.6-.04-2.39-.54-.39-.25-.72-.5-1.01-.75-.02-.65,0-1.17,.09-1.54s.24-.75,.47-1.13c.46-.73,1.04-1.19,1.75-1.37s1.39-.06,2.07,.37c.67,.42,1.08,.98,1.26,1.67,.17,.7,.06,1.37-.35,2.01Z">
                            </path>
                            <path class="cls-1"
                                d="M66.77,229.41l2.05,1.35,4.45-2.98,5.93,3.91-.86,5.34,2.04,1.34,2.97-18.09-1.4-.92-15.18,10.05Zm12.78-.04l-4.32-2.85,5.4-3.67-1.07,6.51Z">
                            </path>
                        </g>
                        <g>
                            <path class="cls-1"
                                d="M247.55,94.57c-.81-1.86,.05-4.03,1.9-4.84s4.03,.05,4.84,1.9-.05,4.03-1.9,4.84-4.03-.05-4.84-1.9Zm6.32-2.75c-.71-1.63-2.61-2.38-4.24-1.67s-2.38,2.61-1.67,4.24,2.61,2.38,4.24,1.67,2.38-2.61,1.67-4.24Z">
                            </path>
                            <path class="cls-1"
                                d="M250.55,93.38l-.3-.69-1.37,.59-.27-.62,3.55-1.54,.54,1.25c.18,.41,.22,.77,.14,1.07-.09,.3-.3,.53-.65,.68-.24,.1-.46,.13-.67,.09-.21-.04-.4-.15-.58-.32l-1.13,1.44h-.03s-.29-.65-.29-.65l1.06-1.31Zm.2-.9l.28,.63c.09,.21,.21,.35,.37,.42,.16,.07,.32,.07,.51-.01s.31-.2,.37-.35c.06-.15,.04-.34-.05-.55l-.28-.65-1.19,.52Z">
                            </path>
                        </g>
                    </svg>
                </div>
                <div class="col-12 col-lg-4 d-flex flex-column justify-content-end">
                    <div
                        class="d-flex flex-column flex-md-row justify-content-start justify-content-lg-end align-items-start align-items-lg-center">
                        <ul class="socials list-unstyled d-flex mx-n1 mb-0 ms-2">

                            <li>
                                <a target="_blank" rel="noopener noreferrer"
                                    href="https://www.instagram.com/fiddes_woodfinishes/">
                                    <i class="bi bi-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a target="_blank" rel="noopener noreferrer"
                                    href="https://www.facebook.com/fiddeswoodfinishes/">
                                    <i class="bi bi-facebook"></i>
                                </a>
                            </li>

                            <li>
                                <a target="_blank" rel="noopener noreferrer" href="https://twitter.com/FiddesWoodCare">
                                    <i class="bi bi-twitter-x"></i>
                                </a>
                            </li>

                            <li>
                                <a target="_blank" rel="noopener noreferrer"
                                    href="https://www.linkedin.com/company/fiddes-&amp;-son-ltd">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                            </li>

                            <li>
                                <a target="_blank" rel="noopener noreferrer"
                                    href="https://www.youtube.com/channel/UCDpfpaO_s33AtfALBuuDCiw">
                                    <i class="bi bi-youtube"></i>
                                </a>
                            </li>

                            <li>
                                <a target="_blank" rel="noopener noreferrer"
                                    href="https://www.tiktok.com/@fiddes_woodfinishes">
                                    <i class="bi bi-tiktok"></i>
                                </a>
                            </li>

                            <li>
                                <a target="_blank" rel="noopener noreferrer"
                                    href="https://uk.pinterest.com/fiddes_woodfinishes/">
                                    <i class="bi bi-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="row mt-4">
                        <div class="manufacturing-info col-lg-6 col-12 text-left text-lg-center mb-lg-0 mb-4">
                            <svg alt="Union Jack Logo" class="img-fluid union-jack-logo mb-2"
                                xmlns="http://www.w3.org/2000/svg" width="558.385" height="332.335"
                                viewBox="0 0 558.385 332.335">
                                <g id="union-jack" transform="translate(2)">
                                    <rect id="Rectangle_420" data-name="Rectangle 420" width="557.985" height="332.335"
                                        transform="translate(-1.681)" fill="#282e6e"></rect>
                                    <path id="Path_330" data-name="Path 330"
                                        d="M496.908,0h61.077V34.812L62.608,332.335H0V298.767Z" transform="translate(-1.681)"
                                        fill="#fff"></path>
                                    <path id="Path_331" data-name="Path 331"
                                        d="M496.908,332.335h61.077V297.523L62.608,0H0V33.568Z" transform="translate(-1.681)"
                                        fill="#fff"></path>
                                    <rect id="Rectangle_421" data-name="Rectangle 421" width="78.443" height="332.335"
                                        transform="translate(239.087)" fill="#fff"></rect>
                                    <rect id="Rectangle_422" data-name="Rectangle 422" width="557.985" height="83.227"
                                        transform="translate(-1.681 123.781)" fill="#fff"></rect>
                                    <rect id="Rectangle_423" data-name="Rectangle 423" width="557.985" height="52.609"
                                        transform="translate(-1.681 139.472)" fill="#e31318"></rect>
                                    <rect id="Rectangle_424" data-name="Rectangle 424" width="46.868" height="332.335"
                                        transform="translate(254.874)" fill="#e31318"></rect>
                                    <path id="Path_332" data-name="Path 332" d="M239.087,1298.1H201.324L-2,1423.427H35.778Z"
                                        transform="translate(0 -1091.092)" fill="#e31318"></path>
                                    <path id="Path_333" data-name="Path 333"
                                        d="M2216.6,1300.5h31.575l173.009,103.528-.08,21.417Z"
                                        transform="translate(-1864.8 -1093.109)" fill="#e31318"></path>
                                    <path id="Path_334" data-name="Path 334" d="M2010.1,123.781h36.12L2247.535,0h-36.423Z"
                                        transform="translate(-1691.231)" fill="#e31318"></path>
                                    <path id="Path_335" data-name="Path 335" d="M0,0,210.086,123.781H177.235L0,19.392Z"
                                        transform="translate(-1.681)" fill="#e31318"></path>
                                </g>
                            </svg>
                            <p class="text-left text-lg-center text-uppercase">
                                Made in Britain
                            </p>
                        </div>
                        <div class="copyright-info col-lg-6 col-12 text-lg-end">
                            <img src="https://fiddes.co.uk/app/themes/fiddes-uk/public/images/9001-accred.789311.png"
                                class="img-fluid accred-logo mb-2" alt="FIDDES 9001 Accred">
                            <p class="text-lg-end mb-n2">
                                <small>
                                    Copyright © Fiddes 2025
                                </small>
                            </p>
                            <p class="text-lg-end w-100">
                                <small>
                                    <a class="text-white" rel="noopener noreferrer" href="https://www.celfcreative.com/"
                                        alt="Website Design by Celf Creative">Design: Celf Creative</a>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->
<script>
jQuery(document).ready(function($) {
    // $('#custom-filter').change(function() {
    //     $('#custom-filter-form').submit();
    // });
    // $('#custom-add-to-cart-button').on('click', function() {
    //     var product_id = $(this).data('product-id');
    //     $.ajax({
    //         type: 'POST',
    //         url: '<?php echo admin_url('admin-ajax.php'); ?>',
    //         data: {
    //             action: 'custom_add_to_cart',
    //             product_id: product_id,
    //         },
    //         success: function(response) {
    //             if (response.success) {
    //                 window.location.href = '/cart/';
    //             } else {
    //                 $('.response').text(
    //                     'There was an error adding the product to the cart.');
    //             }
    //         }
    //     });
    // });
    // // select attribute and make it active
    // $('.product-attributes-size li').on('click', function() {
    //     $('.product-attributes-size li button').removeClass('active');
    //     $(this).find('button').addClass('active');
    //     if ($('.product-attributes-color').length > 0) {
    //         if ($('.product-attributes-color li').find('button.active').length > 0) {
    //             $('#form-add-to-cart-button').removeAttr('disabled');
    //         }
    //     } else {
    //         $('#form-add-to-cart-button').removeAttr('disabled');
    //     }
    // });
    // $('.product-attributes-color li').on('click', function() {
    //     $('.product-attributes-color li button').removeClass('active');
    //     $(this).find('button').addClass('active');
    //     if ($('.product-attributes-size').length > 0) {
    //         if ($('.product-attributes-size li').find('button.active').length > 0) {
    //             $('#form-add-to-cart-button').removeAttr('disabled');
    //         }
    //     } else {
    //         $('#form-add-to-cart-button').removeAttr('disabled');
    //     }
    // });
    // // add to cart with selected attribute
    // $('#form-add-to-cart-button').on('click', function() {
    //     var product_id = $(this).data('product-id');
    //     var selected_attr_size = $('.product-attributes-size').find('button.active').text();
    //     var selected_attr_color = $('.product-attributes-color').find('button.active').find('span')
    //         .text();
    //     $.ajax({
    //         type: 'POST',
    //         url: '<?php echo admin_url('admin-ajax.php'); ?>',
    //         data: {
    //             action: 'form_custom_add_to_cart',
    //             product_id: product_id,
    //             selected_attr_size: selected_attr_size,
    //             selected_attr_color: selected_attr_color,
    //         },
    //         success: function(response) {
    //             if (response.success) {
    //                 $('#form-add-to-cart-button').prop('disabled', true);
    //                 window.location.href = '/cart/';
    //             } else {
    //                 $('#form-add-to-cart-button').prop('disabled', true);
    //                 $('.response').text(
    //                     'There was an error adding the product to the cart.');
    //             }
    //         }
    //     });
    // });
    // // Apply FancyBox to product images
    // $('a.fancybox').fancybox({
    //     // FancyBox options can be added here
    //     buttons: [
    //         'zoom',
    //         'close'
    //     ]
    // });
    // // form subscribe
    // $('.subscription-button').on('click', function() {
    //     $('.subscription-button-demo').click();
    // });
    // var cf7form = $('#wpcf7-f1449-o2');
    // if (cf7form) {
    //     $(cf7form).each(function(index, el) {
    //         if (el) {
    //             $(el).find('form').submit(function(event) {
    //                 $(el).find('form').find('.wpcf7-submit').addClass('disabled');
    //                 $(el).parents('.form_validation_parent').find('.contact_success_message')
    //                     .hide();
    //                 $(el).parents('.form_validation_parent').find('.contact_fail_message')
    //                     .hide();
    //             });
    //             el.addEventListener('wpcf7mailsent', function(event) {
    //                 $(el).parents('.form_validation_parent').find('.contact_success_message')
    //                     .slideDown(300);
    //             }, false);
    //             el.addEventListener('wpcf7mailfailed', function(event) {
    //                 $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
    //                 $(el).parents('.form_validation_parent').find('.contact_fail_message')
    //                     .slideDown(300);
    //             }, false);
    //             el.addEventListener('wpcf7spam', function(event) {
    //                 $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
    //                 $(el).parents('.form_validation_parent').find('.contact_fail_message')
    //                     .slideDown(300);
    //             }, false);
    //             el.addEventListener('wpcf7invalid', function(event) {
    //                 $(el).find('form').find('.wpcf7-submit').removeClass('disabled');
    //                 $(el).parents('.form_validation_parent').find('.contact_fail_message')
    //                     .slideDown(300);
    //             }, false);
    //         }
    //     });
    // }
    // $('.return-to-shop a').attr('href', 'https://maisonlesley.com/');
     var swiper = new Swiper(".whereToBuySwiper", {
        slidesPerView: 4,
        spaceBetween: 20,
        centeredSlides: true, // Center active slide
        loop: true,
        autoplay: {
            delay: 3000, // 3 seconds
            disableOnInteraction: true, // Keeps autoplay after user swipes
        },
        navigation: {
            nextEl: ".slick-next",
            prevEl: ".slick-prev",
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1.5,
                spaceBetween: 20,
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 1.5,
                spaceBetween: 30,
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            991: {
                slidesPerView: 4,
                spaceBetween: 50,
            }
        }
    });
});
</script>
<?php wp_footer(); ?>
</body>

</html>