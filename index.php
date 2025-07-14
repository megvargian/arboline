<?php
/**
 * Template Name: Homepage
 */
get_header();
?>
<?php
	// while ( have_posts() ) : the_post();
    //     the_content();
	// endwhile;
?>



        <div class="offcanvas offcanvas-start" tabindex="-1" id="mobMenu" aria-labelledby="mobMenuLabel">
            <div class="offcanvas-header">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <p class="h2 mb-0">Products</p>
                <div class="accordion mobile-nav mb-4" id="mobileNavAcordion">
                    <div class="accordion-item border-0">
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
                                            href="https://fiddes.co.uk/product/hard-wax-oil/">
                                            Hard Wax Oil
                                        </a>
                                    </li>
                                    <li class="child-menu-item  ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product/hard-wax-oil/#fiddes-ultra-raw-hard-wax-oil">
                                            ULTRA RAW HARD WAX OIL
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product/premier-wood-varnish/">
                                            Premier Wood Varnish
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product/floor-reviving-kit/">
                                            Floor Reviving Kit
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product/liquid-floor-wax/">
                                            Floor Wax
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product/floor-surface-cleaner/">
                                            Floor Cleaner
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product/wood-surface-cleaner/">
                                            Wood Surface Cleaner
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product/barrier-seal/">
                                            Barrier Seal
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product/clear-glaze/">
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
                                            href="https://fiddes.co.uk/product-category/wood-finishes/oils/">
                                            Oils
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-type-taxonomy menu-item-object-product_cat ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product-category/wood-finishes/shellac-polish/">
                                            Shellac
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-type-taxonomy menu-item-object-product_cat ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product-category/wood-finishes/wax/">
                                            Wax
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-type-taxonomy menu-item-object-product_cat ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product-category/wood-finishes/stains/">
                                            Stains
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-type-taxonomy menu-item-object-product_cat ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product-category/wood-finishes/thinners/">
                                            Thinners
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product/light-fast-water-concentrates/">
                                            Concentrates
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product/spirit-oil-soluble-base-tints/">
                                            Base Tints
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product/spirit-soluble-dry-pigment-powders/">
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
                                            href="https://fiddes.co.uk/product/exterior-high-build-wood-oil/">
                                            Exterior High Build Wood Oil
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product/exterior-wood-protector/">
                                            Exterior Wood Protector
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product/decking-oil/">
                                            Universal Decking Oil
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product/fiddes-deck-cleaner/">
                                            FIDDES Deck Cleaner
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product/wood-reviver-gel/">
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
                                            href="https://fiddes.co.uk/product-category/accessories/abrasives/">
                                            Abrasives
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-type-taxonomy menu-item-object-product_cat ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product-category/accessories/adhesives/">
                                            Adhesives
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-type-taxonomy menu-item-object-product_cat ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product-category/accessories/brushes/">
                                            Brushes
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-type-taxonomy menu-item-object-product_cat ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product-category/accessories/chemicals-solvents/">
                                            Chemicals &amp; Solvents
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-type-taxonomy menu-item-object-product_cat ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product-category/accessories/sundries/">
                                            Sundries
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-type-taxonomy menu-item-object-product_cat ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product-category/accessories/wood-fillers/">
                                            Wood Fillers
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 ">
                        <a class="accordion-button border-bottom collapsed px-0 menu-link text-uppercase"
                            href="https://fiddes.co.uk/spray-finishes/">
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
                                            href="https://fiddes.co.uk/product/full-stop-stain-block/">
                                            FIDDES Full Stop Stain Block
                                        </a>
                                    </li>
                                    <li class="child-menu-item  menu-item-object-product ">
                                        <a class="p-2 w-100 d-block text-uppercase"
                                            href="https://fiddes.co.uk/product/fiddes-full-stop-h20-stain-block-1/">
                                            FIDDES Full Stop H20
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="h2 mb-0">FIDDES</p>
                <ul id="mobTopNav" class="nav mb-4">
                    <li
                        class="menu-item font-weight-bold d-block w-100  menu-item-home current-menu-item page-item-6 current_page_item active ">
                        <a href="https://fiddes.co.uk/" class="text-uppercase py-1 d-block w-100">
                            Home
                        </a>
                    </li>
                    <li class="menu-item font-weight-bold d-block w-100   ">
                        <a href="https://fiddes.co.uk/product-catalogue/" class="text-uppercase py-1 d-block w-100">
                            Product Catalogue
                        </a>
                    </li>
                    <li class="menu-item font-weight-bold d-block w-100   ">
                        <a href="https://fiddes.co.uk/restores-revives-protects/"
                            class="text-uppercase py-1 d-block w-100">
                            About
                        </a>
                    </li>
                    <li class="menu-item font-weight-bold d-block w-100   ">
                        <a href="https://fiddes.co.uk/articles-guides/" class="text-uppercase py-1 d-block w-100">
                            GUIDES
                        </a>
                    </li>
                    <li class="menu-item font-weight-bold d-block w-100   ">
                        <a href="https://fiddes.co.uk/contact/" class="text-uppercase py-1 d-block w-100">
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
                            <a href="https://fiddes.co.uk/my-account/" class="account-nav__link account">
                                <i class="bi bi-person"></i>
                            </a>
                        </li>
                        <li class="account-nav__item">
                            <a href="https://fiddes.co.uk/cart/" class="account-nav__link cart position-relative">
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

        <main id="main" class="main">
            <div class="container">
                <div class="wp-block-cover alignfull is-light intro position-relative" style="min-height:93vh"><span
                        aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"
                        style="background-color:#57420e"></span><video
                        class="wp-block-cover__video-background intrinsic-ignore" autoplay="" muted="" loop=""
                        playsinline="" src="https://fiddes.co.uk/app/uploads/2023/02/home-application-vid.mp4"
                        data-object-fit="cover"></video>
                    <div class="wp-block-cover__inner-container" style="margin-top: 0%;">
                        <h2 class="d-inline-block intro-text has-white-color has-text-color has-background"
                            style="background-color:#00000000">Wood. Finished.</h2>



                        <div class="is-content-justification-center is-layout-flex wp-container-1 wp-block-buttons">
                            <div class="wp-block-button has-custom-font-size has-medium-font-size"><a
                                    class="wp-block-button__link has-secondary-background-color has-background wp-element-button"
                                    href="https://fiddes.co.uk/product-catalogue/" style="border-radius:0px">Shop
                                    now</a></div>
                        </div>
                    </div>
                    <div class="mouse-icon-wrap">
                        <div class="mouse-icon">
                            <div class="mouse-wheel"></div>
                        </div>
                    </div>
                </div>



                <div class="wp-block-cover alignfull is-light mt-0" style="min-height:60vh"><span aria-hidden="true"
                        class="wp-block-cover__background has-white-background-color has-background-dim-90 has-background-dim"></span><img
                        decoding="async" width="2560" height="551"
                        class="wp-block-cover__image-background wp-image-2244" alt=""
                        src="https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-scaled.jpg"
                        style="object-position:10% 54%" data-object-fit="cover" data-object-position="10% 54%"
                        srcset="https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-scaled.jpg 2560w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-scaled-600x129.jpg 600w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-300x65.jpg 300w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-1024x220.jpg 1024w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-768x165.jpg 768w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-1536x330.jpg 1536w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-2048x440.jpg 2048w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-1320x284.jpg 1320w"
                        sizes="(max-width: 2560px) 100vw, 2560px">
                    <div class="wp-block-cover__inner-container">
                        <div class="wp-block-cover alignfull is-light contained-bg mb-0 pb-0"><span aria-hidden="true"
                                class="wp-block-cover__background has-secondary-background-color has-background-dim-0 has-background-dim"></span><img
                                decoding="async" loading="lazy" width="2560" height="1449"
                                class="wp-block-cover__image-background wp-image-2303" alt=""
                                src="https://fiddes.co.uk/app/uploads/2022/11/1896-1.png"
                                style="object-position:50% 48%" data-object-fit="cover" data-object-position="50% 48%"
                                srcset="https://fiddes.co.uk/app/uploads/2022/11/1896-1.png 2560w, https://fiddes.co.uk/app/uploads/2022/11/1896-1-600x340.png 600w, https://fiddes.co.uk/app/uploads/2022/11/1896-1-300x170.png 300w, https://fiddes.co.uk/app/uploads/2022/11/1896-1-1024x580.png 1024w, https://fiddes.co.uk/app/uploads/2022/11/1896-1-768x435.png 768w, https://fiddes.co.uk/app/uploads/2022/11/1896-1-1536x869.png 1536w, https://fiddes.co.uk/app/uploads/2022/11/1896-1-2048x1159.png 2048w, https://fiddes.co.uk/app/uploads/2022/11/1896-1-1320x747.png 1320w"
                                sizes="(max-width: 2560px) 100vw, 2560px">
                            <div class="wp-block-cover__inner-container">
                                <div
                                    class="is-layout-flex wp-container-4 wp-block-columns are-vertically-aligned-center mb-0">
                                    <div class="is-layout-flow wp-block-column is-vertically-aligned-center">
                                        <figure class="wp-block-image aligncenter size-large is-resized mb-1"><img
                                                decoding="async" loading="lazy"
                                                src="https://fiddes.co.uk/app/uploads/2022/11/uk-flag-1024x609.png"
                                                alt="" class="wp-image-2534" width="76" height="45"
                                                srcset="https://fiddes.co.uk/app/uploads/2022/11/uk-flag-1024x609.png 1024w, https://fiddes.co.uk/app/uploads/2022/11/uk-flag-600x357.png 600w, https://fiddes.co.uk/app/uploads/2022/11/uk-flag-300x178.png 300w, https://fiddes.co.uk/app/uploads/2022/11/uk-flag-768x457.png 768w, https://fiddes.co.uk/app/uploads/2022/11/uk-flag.png 1116w"
                                                sizes="(max-width: 76px) 100vw, 76px"></figure>



                                        <div style="height:20px" aria-hidden="true"
                                            class="wp-block-spacer d-lg-block d-none"></div>



                                        <h2 class="has-text-align-center underline h1"><span
                                                style="text-decoration: underline;">FERVENTLY BRITISH</span></h2>



                                        <p class="has-text-align-center has-medium-font-size">FIDDES has a long and
                                            proud history of caring for wood that began during the early part of last
                                            century and continues to this day.&nbsp;</p>



                                        <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>



                                        <p class="has-text-align-center underline"><a
                                                href="https://fiddes.co.uk/restores-revives-protects/" data-type="page"
                                                data-id="1509"><span style="text-decoration: underline;">DISCOVER
                                                    MORE</span></a></p>
                                    </div>



                                    <div class="is-layout-flow wp-block-column is-vertically-aligned-center mb-0">
                                        <figure class="wp-block-image size-full"><img decoding="async" loading="lazy"
                                                width="850" height="844"
                                                src="https://fiddes.co.uk/app/uploads/2022/12/FIDDES-LID.png" alt=""
                                                class="wp-image-3288"
                                                srcset="https://fiddes.co.uk/app/uploads/2022/12/FIDDES-LID.png 850w, https://fiddes.co.uk/app/uploads/2022/12/FIDDES-LID-200x200.png 200w, https://fiddes.co.uk/app/uploads/2022/12/FIDDES-LID-600x596.png 600w, https://fiddes.co.uk/app/uploads/2022/12/FIDDES-LID-300x298.png 300w, https://fiddes.co.uk/app/uploads/2022/12/FIDDES-LID-150x150.png 150w, https://fiddes.co.uk/app/uploads/2022/12/FIDDES-LID-768x763.png 768w, https://fiddes.co.uk/app/uploads/2022/12/FIDDES-LID-32x32.png 32w"
                                                sizes="(max-width: 850px) 100vw, 850px"></figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="wp-block-cover alignfull is-light has-parallax" style="min-height:60vh"><span
                        aria-hidden="true"
                        class="wp-block-cover__background has-background-dim-20 has-background-dim"></span>
                    <div role="img" class="wp-block-cover__image-background wp-image-3409 has-parallax"
                        style="background-position:50% 50%;background-image:url(https://fiddes.co.uk/app/uploads/2022/12/kntted-wood.jpg)">
                    </div>
                    <div class="wp-block-cover__inner-container">
                        <p class="has-text-align-center for-beautiful-wood has-white-color has-text-color">FOR BEAUTIFUL
                            WOOD</p>
                    </div>
                </div>



                <div class="wp-block-cover alignfull is-light my-0" style="min-height:60vh"><span aria-hidden="true"
                        class="wp-block-cover__background has-white-background-color has-background-dim-80 has-background-dim"></span><img
                        decoding="async" loading="lazy" width="1800" height="1200"
                        class="wp-block-cover__image-background wp-image-3471" alt=""
                        src="https://fiddes.celfapps.com/app/uploads/2022/12/mould-bg.jpg" data-object-fit="cover"
                        srcset="https://fiddes.co.uk/app/uploads/2022/12/mould-bg.jpg 1800w, https://fiddes.co.uk/app/uploads/2022/12/mould-bg-600x400.jpg 600w, https://fiddes.co.uk/app/uploads/2022/12/mould-bg-300x200.jpg 300w, https://fiddes.co.uk/app/uploads/2022/12/mould-bg-1024x683.jpg 1024w, https://fiddes.co.uk/app/uploads/2022/12/mould-bg-768x512.jpg 768w, https://fiddes.co.uk/app/uploads/2022/12/mould-bg-1536x1024.jpg 1536w, https://fiddes.co.uk/app/uploads/2022/12/mould-bg-1320x880.jpg 1320w"
                        sizes="(max-width: 1800px) 100vw, 1800px">
                    <div class="wp-block-cover__inner-container">
                        <div class="is-layout-flow wp-block-group alignfull mb-0 full-stop-group has-background"
                            style="background-color:#ffffff00">
                            <div class="is-layout-flex wp-container-8 wp-block-columns mb-0 pt-0 pt-lg-5 pb-0 gap-2">
                                <div class="is-layout-flow wp-block-column text-center mb-0 mt-0 py-0"
                                    style="flex-basis:50%">
                                    <div
                                        class="is-content-justification-center is-nowrap is-layout-flex wp-container-5 wp-block-group">
                                        <figure class="wp-block-image aligncenter size-full is-resized my-0"><a
                                                href="https://fiddes.co.uk/product/full-stop-stain-block/"><img
                                                    decoding="async" loading="lazy"
                                                    src="https://fiddes.celfapps.com/app/uploads/2024/12/full-stop-red-png.png"
                                                    alt="" class="wp-image-32061" width="549" height="626"></a></figure>



                                        <figure class="wp-block-image aligncenter size-full is-resized my-0"><a
                                                href="https://fiddes.co.uk/product/fiddes-full-stop-h20-stain-block/"><img
                                                    decoding="async" loading="lazy"
                                                    src="https://fiddes.celfapps.com/app/uploads/2024/12/full-stop-h20.png"
                                                    alt="" class="wp-image-32059" width="732" height="835"></a></figure>
                                    </div>



                                    <p class="has-text-align-center underline pe-5 mt-n3 mt-md-4"><a
                                            href="https://fiddes.co.uk/product-category/stain-block/"><span
                                                style="text-decoration: underline;">DISCOVER MORE</span></a></p>
                                </div>



                                <div class="is-layout-flow wp-block-column is-vertically-aligned-center py-0 my-0"
                                    style="flex-basis:50%">
                                    <figure
                                        class="wp-block-image aligncenter size-full is-resized mt-4 pb-0 mt-md-n5 pb-md-5">
                                        <img decoding="async" loading="lazy"
                                            src="https://fiddes.celfapps.com/app/uploads/2024/12/new-h2o.png" alt=""
                                            class="wp-image-32063" width="395" height="395"></figure>
                                </div>
                            </div>
                        </div>



                        <style>
                        .full-stop-group {
                            width: 1100px !important;
                        }

                        @media screen and (max-width: 991px) {
                            .full-stop-group .wp-block-columns {
                                flex-direction: column-reverse;
                            }
                        }
                        </style>
                    </div>
                </div>



                <div class="wp-block-cover alignfull is-light my-0" style="min-height:60vh"><span aria-hidden="true"
                        class="wp-block-cover__background has-gray-100-background-color has-background-dim-0 has-background-dim"></span><img
                        decoding="async" loading="lazy" width="2560" height="1128"
                        class="wp-block-cover__image-background wp-image-30801" alt=""
                        src="https://fiddes.co.uk/app/uploads/2024/01/raw-ultra-bg-scaled-1.jpg"
                        style="object-position:52% 100%" data-object-fit="cover" data-object-position="52% 100%"
                        srcset="https://fiddes.co.uk/app/uploads/2024/01/raw-ultra-bg-scaled-1.jpg 2560w, https://fiddes.co.uk/app/uploads/2024/01/raw-ultra-bg-scaled-1-300x132.jpg 300w, https://fiddes.co.uk/app/uploads/2024/01/raw-ultra-bg-scaled-1-1024x451.jpg 1024w, https://fiddes.co.uk/app/uploads/2024/01/raw-ultra-bg-scaled-1-768x338.jpg 768w, https://fiddes.co.uk/app/uploads/2024/01/raw-ultra-bg-scaled-1-1536x677.jpg 1536w, https://fiddes.co.uk/app/uploads/2024/01/raw-ultra-bg-scaled-1-2048x902.jpg 2048w, https://fiddes.co.uk/app/uploads/2024/01/raw-ultra-bg-scaled-1-600x264.jpg 600w"
                        sizes="(max-width: 2560px) 100vw, 2560px">
                    <div class="wp-block-cover__inner-container">
                        <div class="is-layout-flex wp-container-12 wp-block-columns mb-0 pt-0 pt-lg-5 pb-0 w-100">
                            <div class="is-layout-flow wp-block-column is-vertically-aligned-center pb-5"
                                style="flex-basis:50%">
                                <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>



                                <figure class="wp-block-image aligncenter size-full is-resized mb-5"><a
                                        href="https://fiddes.co.uk/product/hard-wax-oil/#fiddes-ultra-raw-hard-wax-oil"><img
                                            decoding="async" loading="lazy"
                                            src="https://fiddes.co.uk/app/uploads/2024/01/new-fiddes-ultra-raw.svg"
                                            alt="" class="wp-image-30800" width="395" height="395"></a></figure>



                                <p class="has-text-align-center underline"><span style="text-decoration: underline;"><a
                                            href="https://fiddes.co.uk/product/hard-wax-oil/#fiddes-ultra-raw-hard-wax-oil">DISCOVER
                                            MORE</a></span></p>
                            </div>



                            <div class="is-layout-flow wp-block-column is-vertically-aligned-center"
                                style="flex-basis:50%">
                                <figure class="wp-block-image aligncenter size-full is-resized mb-0 mt-n4"><a
                                        href="https://fiddes.co.uk/product/hard-wax-oil/#fiddes-ultra-raw-hard-wax-oil"><img
                                            decoding="async" loading="lazy"
                                            src="https://fiddes.co.uk/app/uploads/2024/01/Fiddes-HWO-2.5lt-3D_Ultra-Raw.png"
                                            alt="" class="wp-image-30802" width="502" height="469"
                                            srcset="https://fiddes.co.uk/app/uploads/2024/01/Fiddes-HWO-2.5lt-3D_Ultra-Raw.png 1000w, https://fiddes.co.uk/app/uploads/2024/01/Fiddes-HWO-2.5lt-3D_Ultra-Raw-300x280.png 300w, https://fiddes.co.uk/app/uploads/2024/01/Fiddes-HWO-2.5lt-3D_Ultra-Raw-768x717.png 768w, https://fiddes.co.uk/app/uploads/2024/01/Fiddes-HWO-2.5lt-3D_Ultra-Raw-600x560.png 600w"
                                            sizes="(max-width: 502px) 100vw, 502px"></a></figure>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="wp-block-cover alignfull is-light my-0" style="min-height:60vh"><span aria-hidden="true"
                        class="wp-block-cover__background has-background-dim-10 has-background-dim"
                        style="background-color:#717171"></span><img decoding="async" loading="lazy" width="2000"
                        height="430" class="wp-block-cover__image-background wp-image-2499" alt=""
                        src="https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1.jpg" style="object-position:9% 35%"
                        data-object-fit="cover" data-object-position="9% 35%"
                        srcset="https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1.jpg 2000w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-600x129.jpg 600w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-300x65.jpg 300w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-1024x220.jpg 1024w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-768x165.jpg 768w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-1536x330.jpg 1536w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-1320x284.jpg 1320w"
                        sizes="(max-width: 2000px) 100vw, 2000px">
                    <div class="wp-block-cover__inner-container">
                        <div class="is-layout-flow wp-block-group alignfull mb-0">
                            <div
                                class="is-layout-flex wp-container-15 wp-block-columns are-vertically-aligned-top mb-0 pt-0 pt-lg-5 pb-0 gap-2">
                                <div class="is-layout-flow wp-block-column is-vertically-aligned-top">
                                    <figure class="wp-block-image size-full mb-0"><img decoding="async" loading="lazy"
                                            width="896" height="794"
                                            src="https://fiddes.co.uk/app/uploads/2022/12/hwo-image.png" alt=""
                                            class="wp-image-3252"
                                            srcset="https://fiddes.co.uk/app/uploads/2022/12/hwo-image.png 896w, https://fiddes.co.uk/app/uploads/2022/12/hwo-image-600x532.png 600w, https://fiddes.co.uk/app/uploads/2022/12/hwo-image-300x266.png 300w, https://fiddes.co.uk/app/uploads/2022/12/hwo-image-768x681.png 768w"
                                            sizes="(max-width: 896px) 100vw, 896px"></figure>
                                </div>



                                <div class="is-layout-flow wp-block-column is-vertically-aligned-top">
                                    <div style="height:10px" aria-hidden="true"
                                        class="wp-block-spacer d-none d-lg-block"></div>



                                    <h3 class="has-text-align-center underline h1"><span
                                            style="text-decoration: underline;"><a
                                                href="https://fiddes.co.uk/product-category/floor-worktop-finishes/">FIDDES
                                                FLOOR &amp; WORKTOP WOOD FINISHES</a></span></h3>



                                    <p
                                        class="has-text-align-center mb-lg-4 mb-4 pt-2 has-black-color has-text-color has-medium-font-size">
                                        Select to discover FIDDES wide range of floor &amp; worktop finishes.</p>



                                    <p class="has-text-align-center mb-1 mt-2 has-medium-font-size"
                                        style="line-height:1.5"><a href="https://fiddes.co.uk/product/hard-wax-oil/"
                                            data-type="product" data-id="1045">HARD WAX OIL</a></p>



                                    <p class="has-text-align-center mb-1 mt-2 has-medium-font-size"
                                        style="line-height:1.5"><a
                                            href="https://fiddes.co.uk/product/floor-reviving-kit/" data-type="product"
                                            data-id="1047">FLOOR REVIVING KIT</a></p>



                                    <p class="has-text-align-center mb-1 mt-2 has-medium-font-size"
                                        style="line-height:1.5"><a href="https://fiddes.co.uk/product/liquid-floor-wax/"
                                            data-type="product" data-id="1090">FLOOR WAX</a></p>



                                    <p class="has-text-align-center mb-1 mt-2 has-medium-font-size"
                                        style="line-height:1.5"><a
                                            href="https://fiddes.co.uk/product/floor-surface-cleaner/"
                                            data-type="product" data-id="1048">FLOOR CLEANER</a></p>



                                    <p class="has-text-align-center mb-1 mt-2 has-medium-font-size"
                                        style="line-height:1.5"><a
                                            href="https://fiddes.co.uk/product/wood-surface-cleaner/"
                                            data-type="product" data-id="1049">WOOD SURFACE CLEANER</a></p>



                                    <p class="has-text-align-center mb-1 mt-2 has-medium-font-size"
                                        style="line-height:1.5"><a href="https://fiddes.co.uk/product/barrier-seal/"
                                            data-type="product" data-id="1046">BARRIER SEAL</a></p>



                                    <p class="has-text-align-center mb-1 mt-2 has-medium-font-size"
                                        style="line-height:1.5"><a href="https://fiddes.co.uk/product/clear-glaze/"
                                            data-type="product" data-id="1075">CLEAR GLAZE</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="wp-block-cover alignfull is-light my-0" style="min-height:60vh"><span aria-hidden="true"
                        class="wp-block-cover__background has-white-background-color has-background-dim-90 has-background-dim"></span><img
                        decoding="async" loading="lazy" width="2560" height="551"
                        class="wp-block-cover__image-background wp-image-2244" alt=""
                        src="https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-scaled.jpg"
                        style="object-position:12% 50%" data-object-fit="cover" data-object-position="12% 50%"
                        srcset="https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-scaled.jpg 2560w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-scaled-600x129.jpg 600w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-300x65.jpg 300w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-1024x220.jpg 1024w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-768x165.jpg 768w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-1536x330.jpg 1536w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-2048x440.jpg 2048w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-1320x284.jpg 1320w"
                        sizes="(max-width: 2560px) 100vw, 2560px">
                    <div class="wp-block-cover__inner-container">
                        <div class="is-layout-flow wp-block-group alignfull mb-0 has-background"
                            style="background-color:#ffffff00">
                            <div
                                class="is-layout-flex wp-container-19 wp-block-columns mb-0 pt-0 pt-lg-5 pb-0 gap-2 flex-column-reverse flex-lg-row">
                                <div class="is-layout-flow wp-block-column is-vertically-aligned-top">
                                    <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>



                                    <h3 class="has-text-align-center underline h1"><span
                                            style="text-decoration: underline;">FIDDES<a
                                                href="https://fiddes.co.uk/product-category/wood-finishes/">
                                            </a>INTERIOR WOOD FINISHES</span></h3>



                                    <p class="has-text-align-center mb-lg-5 mb-4 has-medium-font-size">Select to
                                        discover FIDDES wide range of interior wood finishes.</p>



                                    <p class="has-text-align-center mb-1 mt-2 has-medium-font-size"><a
                                            href="https://fiddes.co.uk/product-category/wood-finishes/oils/">OILS</a>
                                    </p>



                                    <p class="has-text-align-center mb-1 mt-2 has-medium-font-size"><a
                                            href="https://fiddes.co.uk/product-category/wood-finishes/shellac-polish/">SHELLAC</a>
                                    </p>



                                    <p class="has-text-align-center mb-1 mt-2 has-medium-font-size"><a
                                            href="https://fiddes.co.uk/product-category/wood-finishes/wax/">WAX</a></p>



                                    <p class="has-text-align-center mb-1 mt-2 has-medium-font-size"><a
                                            href="https://fiddes.co.uk/product-category/wood-finishes/stains/">STAINS</a>
                                    </p>



                                    <p class="has-text-align-center mb-1 mt-2 has-medium-font-size"><a
                                            href="https://fiddes.co.uk/product-category/wood-finishes/thinners/">THINNERS</a>
                                    </p>



                                    <p class="has-text-align-center mb-1 mt-2 has-medium-font-size"><a
                                            href="https://fiddes.co.uk/product-category/wood-finishes/concentrates/">CONCENTRATES</a>
                                    </p>



                                    <p class="has-text-align-center mb-1 mt-2 has-medium-font-size"><a
                                            href="https://fiddes.co.uk/product/spirit-oil-soluble-base-tints/">BASE
                                            TINTS</a></p>



                                    <p class="has-text-align-center mb-1 mt-2 has-medium-font-size"><a
                                            href="https://fiddes.co.uk/product/spirit-soluble-dry-pigment-powders/">PIGMENT
                                            POWDER</a></p>
                                </div>



                                <div class="is-layout-flow wp-block-column is-vertically-aligned-center">
                                    <figure class="wp-block-image size-full mb-0"><img decoding="async" loading="lazy"
                                            width="896" height="794"
                                            src="https://fiddes.co.uk/app/uploads/2022/12/fiddes-wood-finishes-1.png"
                                            alt="" class="wp-image-3481"
                                            srcset="https://fiddes.co.uk/app/uploads/2022/12/fiddes-wood-finishes-1.png 896w, https://fiddes.co.uk/app/uploads/2022/12/fiddes-wood-finishes-1-600x532.png 600w, https://fiddes.co.uk/app/uploads/2022/12/fiddes-wood-finishes-1-300x266.png 300w, https://fiddes.co.uk/app/uploads/2022/12/fiddes-wood-finishes-1-768x681.png 768w"
                                            sizes="(max-width: 896px) 100vw, 896px"></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="wp-block-cover alignfull is-light my-0" style="min-height:60vh"><span aria-hidden="true"
                        class="wp-block-cover__background has-background-dim-10 has-background-dim"
                        style="background-color:#717171"></span><img decoding="async" loading="lazy" width="2000"
                        height="430" class="wp-block-cover__image-background wp-image-2499" alt=""
                        src="https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1.jpg" style="object-position:10% 33%"
                        data-object-fit="cover" data-object-position="10% 33%"
                        srcset="https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1.jpg 2000w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-600x129.jpg 600w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-300x65.jpg 300w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-1024x220.jpg 1024w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-768x165.jpg 768w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-1536x330.jpg 1536w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-1320x284.jpg 1320w"
                        sizes="(max-width: 2000px) 100vw, 2000px">
                    <div class="wp-block-cover__inner-container">
                        <div class="is-layout-flow wp-block-group alignfull mb-0">
                            <div class="is-layout-flex wp-container-23 wp-block-columns mb-0 pt-0 pt-lg-5 pb-0 gap-2">
                                <div class="is-layout-flow wp-block-column is-vertically-aligned-center">
                                    <figure class="wp-block-image size-full mb-0"><img decoding="async" loading="lazy"
                                            width="896" height="794"
                                            src="https://fiddes.co.uk/app/uploads/2023/02/exterior-finishes-img.png"
                                            alt="" class="wp-image-3887"
                                            srcset="https://fiddes.co.uk/app/uploads/2023/02/exterior-finishes-img.png 896w, https://fiddes.co.uk/app/uploads/2023/02/exterior-finishes-img-600x532.png 600w, https://fiddes.co.uk/app/uploads/2023/02/exterior-finishes-img-300x266.png 300w, https://fiddes.co.uk/app/uploads/2023/02/exterior-finishes-img-768x681.png 768w"
                                            sizes="(max-width: 896px) 100vw, 896px"></figure>
                                </div>



                                <div class="is-layout-flow wp-block-column is-vertically-aligned-top">
                                    <div style="height:50px" aria-hidden="true"
                                        class="wp-block-spacer d-lg-block d-none"></div>



                                    <h3 class="has-text-align-center underline h1"><span
                                            style="text-decoration: underline;"><a
                                                href="https://fiddes.co.uk/product-category/exterior-finishes/">FIDDES
                                                EXTERIOR WOOD FINISHES</a></span></h3>



                                    <p
                                        class="has-text-align-center mb-lg-5 mb-4 has-black-color has-text-color has-medium-font-size">
                                        Select to discover FIDDES range of exterior wood finishes formulated to help
                                        preserve, protect and restore exterior wood and joinery.</p>



                                    <p class="has-text-align-center mb-1 mt-2 has-medium-font-size"><a
                                            href="https://fiddes.co.uk/product/decking-oil/" data-type="product"
                                            data-id="1274">FIDDES UNIVERSAL DECKING OIL</a></p>



                                    <p class="has-text-align-center mb-1 mt-2 has-medium-font-size"><a
                                            href="https://fiddes.co.uk/product/fiddes-deck-cleaner/" data-type="product"
                                            data-id="29873">FIDDES DECK CLEANER</a></p>



                                    <p class="has-text-align-center mb-1 mt-2 text-uppercase has-medium-font-size"><a
                                            href="https://fiddes.co.uk/product/exterior-high-build-wood-oil/"
                                            data-type="product" data-id="1035">FIDDES Exterior High Build Wood Oil</a>
                                    </p>



                                    <p class="has-text-align-center mb-1 mt-2 text-uppercase has-medium-font-size"><a
                                            href="https://fiddes.co.uk/product/exterior-wood-protector/"
                                            data-type="product" data-id="1273">FIDDES EXTERIOR WOOD PROTECTOR</a></p>



                                    <p class="has-text-align-center mb-1 mt-2 text-uppercase has-medium-font-size"><a
                                            href="https://fiddes.co.uk/product/wood-reviver-gel/" data-type="product"
                                            data-id="1281">FIDDES WOOD REVIVER GEL</a></p>



                                    <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="wp-block-cover alignfull is-light my-0 d-none" style="min-height:60vh"><span
                        aria-hidden="true"
                        class="wp-block-cover__background has-white-background-color has-background-dim-80 has-background-dim"></span><img
                        decoding="async" loading="lazy" width="1800" height="1200"
                        class="wp-block-cover__image-background wp-image-3471" alt=""
                        src="https://fiddes.co.uk/app/uploads/2022/12/mould-bg.jpg" data-object-fit="cover"
                        srcset="https://fiddes.co.uk/app/uploads/2022/12/mould-bg.jpg 1800w, https://fiddes.co.uk/app/uploads/2022/12/mould-bg-600x400.jpg 600w, https://fiddes.co.uk/app/uploads/2022/12/mould-bg-300x200.jpg 300w, https://fiddes.co.uk/app/uploads/2022/12/mould-bg-1024x683.jpg 1024w, https://fiddes.co.uk/app/uploads/2022/12/mould-bg-768x512.jpg 768w, https://fiddes.co.uk/app/uploads/2022/12/mould-bg-1536x1024.jpg 1536w, https://fiddes.co.uk/app/uploads/2022/12/mould-bg-1320x880.jpg 1320w"
                        sizes="(max-width: 1800px) 100vw, 1800px">
                    <div class="wp-block-cover__inner-container">
                        <div class="is-layout-flow wp-block-group alignfull mb-0 full-stop-group has-background"
                            style="background-color:#ffffff00">
                            <div class="is-layout-flex wp-container-27 wp-block-columns mb-0 pt-0 pt-lg-5 pb-0 gap-2">
                                <div class="is-layout-flow wp-block-column is-vertically-aligned-center py-0 my-0"
                                    style="flex-basis:50%">
                                    <h3 class="has-text-align-center underline h1"><span
                                            style="text-decoration: underline;"><a
                                                href="https://fiddes.co.uk/product/full-stop-stain-block/">FIDDES STAIN
                                                BLOCK</a></span></h3>



                                    <p class="has-text-align-center has-medium-font-size">FULL STOP is the ideal one
                                        coat,<br>multipurpose stain stopping primer.</p>



                                    <p class="has-text-align-center underline"><a
                                            href="https://fiddes.co.uk/product/full-stop-stain-block/"><span
                                                style="text-decoration: underline;">DISCOVER MORE</span></a></p>
                                </div>



                                <div class="is-layout-flow wp-block-column text-center mb-0 mt-n5 mt-lg-0 py-0"
                                    style="flex-basis:50%">
                                    <figure class="wp-block-image aligncenter size-full is-resized my-0"><img
                                            decoding="async" loading="lazy"
                                            src="https://fiddes.co.uk/app/uploads/2024/04/fiddes-full-stop-1.png" alt=""
                                            class="wp-image-31880" width="410" height="410"
                                            srcset="https://fiddes.co.uk/app/uploads/2024/04/fiddes-full-stop-1.png 800w, https://fiddes.co.uk/app/uploads/2024/04/fiddes-full-stop-1-300x300.png 300w, https://fiddes.co.uk/app/uploads/2024/04/fiddes-full-stop-1-768x768.png 768w, https://fiddes.co.uk/app/uploads/2024/04/fiddes-full-stop-1-600x600.png 600w, https://fiddes.co.uk/app/uploads/2024/04/fiddes-full-stop-1-200x200.png 200w"
                                            sizes="(max-width: 410px) 100vw, 410px"></figure>
                                </div>
                            </div>
                        </div>



                        <style>
                        //.full-stop-group {
                        //width: 870px !important;
                        //}
                        </style>
                    </div>
                </div>



                <div class="wp-block-cover alignfull is-light my-0 py-3 py-lg-5"><span aria-hidden="true"
                        class="wp-block-cover__background has-white-background-color has-background-dim-90 has-background-dim"></span><img
                        decoding="async" loading="lazy" width="2560" height="551"
                        class="wp-block-cover__image-background wp-image-2244" alt=""
                        src="https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-scaled.jpg"
                        style="object-position:12% 50%" data-object-fit="cover" data-object-position="12% 50%"
                        srcset="https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-scaled.jpg 2560w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-scaled-600x129.jpg 600w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-300x65.jpg 300w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-1024x220.jpg 1024w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-768x165.jpg 768w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-1536x330.jpg 1536w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-2048x440.jpg 2048w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain@2x-100-min-1320x284.jpg 1320w"
                        sizes="(max-width: 2560px) 100vw, 2560px">
                    <div class="wp-block-cover__inner-container">
                        <div class="is-layout-flow wp-block-group alignfull mb-0 has-background"
                            style="background-color:#ffffff00">
                            <div class="wp-block-slider">
                                <div class="content-slider slick-initialized slick-slider">
                                    <div class="slick-list draggable">
                                        <div class="slick-track"
                                            style="opacity: 1; width: 664px; transform: translate3d(0px, 0px, 0px);">
                                            <div class="slick-slide slick-current slick-active" data-slick-index="0"
                                                aria-hidden="false" style="width: 664px;">
                                                <div>
                                                    <div class="slide px-2 px-lg-5"
                                                        style="width: 100%; display: inline-block;">
                                                        <!-- wp:columns {"className":"mb-0"} -->
                                                        <div class="wp-block-columns mb-0">
                                                            <!-- wp:column {"verticalAlignment":"center"} -->
                                                            <div class="wp-block-column is-vertically-aligned-center">
                                                                <!-- wp:image {"id":2322,"sizeSlug":"large","linkDestination":"none"} -->
                                                                <figure class="wp-block-image size-large"><img
                                                                        decoding="async" loading="lazy" width="1024"
                                                                        height="732"
                                                                        src="https://fiddes.co.uk/app/uploads/2022/09/bee-2-1-1024x732.png"
                                                                        alt="" class="wp-image-2322"
                                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/bee-2-1-1024x732.png 1024w, https://fiddes.co.uk/app/uploads/2022/09/bee-2-1-600x429.png 600w, https://fiddes.co.uk/app/uploads/2022/09/bee-2-1-300x214.png 300w, https://fiddes.co.uk/app/uploads/2022/09/bee-2-1-768x549.png 768w, https://fiddes.co.uk/app/uploads/2022/09/bee-2-1-1536x1097.png 1536w, https://fiddes.co.uk/app/uploads/2022/09/bee-2-1-1320x943.png 1320w, https://fiddes.co.uk/app/uploads/2022/09/bee-2-1.png 1576w"
                                                                        sizes="(max-width: 1024px) 100vw, 1024px">
                                                                </figure>
                                                                <!-- /wp:image -->
                                                            </div>
                                                            <!-- /wp:column -->

                                                            <!-- wp:column {"verticalAlignment":"center","className":" px-4"} -->
                                                            <div
                                                                class="wp-block-column is-vertically-aligned-center px-4">
                                                                <!-- wp:heading {"textAlign":"center","level":3,"textColor":"black","className":"underline"} -->
                                                                <h3
                                                                    class="has-text-align-center underline has-black-color has-text-color">
                                                                    <span
                                                                        style="text-decoration: underline;">SUSTAINABILITY</span>
                                                                </h3>
                                                                <!-- /wp:heading -->

                                                                <!-- wp:paragraph {"align":"center","textColor":"black","className":"mb-0 px-4","fontSize":"medium"} -->
                                                                <p
                                                                    class="has-text-align-center mb-0 px-4 has-black-color has-text-color has-medium-font-size">
                                                                    Accredited to ISO 9001 Standards, Fiddes has
                                                                    maintained a progressive outlook to develop and
                                                                    produce a wide selection of quality wood finishes
                                                                    using the finest, natural and sustainably sourced
                                                                    raw materials.</p>
                                                                <!-- /wp:paragraph -->

                                                                <!-- wp:spacer {"height":"50px"} -->
                                                                <div style="height:50px" aria-hidden="true"
                                                                    class="wp-block-spacer"></div>
                                                                <!-- /wp:spacer -->
                                                            </div>
                                                            <!-- /wp:column -->
                                                        </div>
                                                        <!-- /wp:columns -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="wp-block-cover alignfull is-light" style="min-height:60vh"><span aria-hidden="true"
                        class="wp-block-cover__background has-background-dim-10 has-background-dim"
                        style="background-color:#717171"></span><img decoding="async" loading="lazy" width="2000"
                        height="430" class="wp-block-cover__image-background wp-image-2499" alt=""
                        src="https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1.jpg" data-object-fit="cover"
                        srcset="https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1.jpg 2000w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-600x129.jpg 600w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-300x65.jpg 300w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-1024x220.jpg 1024w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-768x165.jpg 768w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-1536x330.jpg 1536w, https://fiddes.co.uk/app/uploads/2022/11/wood-grain-1-1320x284.jpg 1320w"
                        sizes="(max-width: 2000px) 100vw, 2000px">
                    <div class="wp-block-cover__inner-container">
                        <div class="is-layout-flow wp-block-group alignfull py-0 py-lg-5">
                            <div class="wp-block-suppliers text-center">


                                <figure class="wp-block-image size-full is-resized mx-auto"><img decoding="async"
                                        loading="lazy" src="https://fiddes.co.uk/app/uploads/2022/09/product-tins-1.png"
                                        alt="" class="wp-image-993" width="623" height="343"
                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/product-tins-1.png 784w, https://fiddes.co.uk/app/uploads/2022/09/product-tins-1-600x331.png 600w, https://fiddes.co.uk/app/uploads/2022/09/product-tins-1-300x165.png 300w, https://fiddes.co.uk/app/uploads/2022/09/product-tins-1-768x423.png 768w"
                                        sizes="(max-width: 623px) 100vw, 623px"></figure>



                                <h3 class="has-text-align-center underline h1 has-black-color has-text-color"><span
                                        style="text-decoration: underline;">WHERE TO BUY</span></h3>



                                <p class="has-text-align-center has-black-color has-text-color has-medium-font-size">Our
                                    products are <a href="https://fiddes.co.uk/product-catalogue/" data-type="page"
                                        data-id="1413"><strong>available online</strong></a> or at your local decorating
                                    centre.</p>



                                <p class="has-text-align-center has-black-color has-text-color has-medium-font-size">
                                    Search your nearest stockist below.</p>


                                <form class="af-form acf-form" method="POST" action="https://fiddes.co.uk/"
                                    id="form_where_to_buy" data-key="form_where_to_buy">
                                    <div class="af-fields acf-fields acf-form-fields -top">
                                        <div id="acf-form-data" class="acf-hidden">
                                            <input type="hidden" id="_acf_screen" name="_acf_screen"
                                                value="acf_form"><input type="hidden" id="_acf_post_id"
                                                name="_acf_post_id" value="0"><input type="hidden" id="_acf_validation"
                                                name="_acf_validation" value="1"><input type="hidden" id="_acf_form"
                                                name="_acf_form" value="0"><input type="hidden" id="_acf_nonce"
                                                name="_acf_nonce" value="c8f2faeab5"><input type="hidden"
                                                id="_acf_changed" name="_acf_changed" value="0">
                                        </div>
                                        <div class="acf-hidden"><input type="hidden" name="_acfnonce"
                                                value="5620ef7902"><input type="hidden" name="nonce"
                                                value="5620ef7902"><input type="hidden" name="af_form"
                                                value="form_where_to_buy"><input type="hidden" name="af_form_args"
                                                value="eyJhamF4IjpmYWxzZSwiZGlzcGxheV90aXRsZSI6ZmFsc2UsImRpc3BsYXlfZGVzY3JpcHRpb24iOmZhbHNlLCJpZCI6ImZvcm1fd2hlcmVfdG9fYnV5IiwidmFsdWVzIjpbXSwic3VibWl0X3RleHQiOiJTdWJtaXQiLCJyZWRpcmVjdCI6bnVsbCwidGFyZ2V0IjoiaHR0cHM6XC9cL2ZpZGRlcy5jby51a1wvIiwiZWNobyI6dHJ1ZSwiZXhjbHVkZV9maWVsZHMiOltdLCJ1cGxvYWRlciI6IndwIiwiZmlsdGVyX21vZGUiOmZhbHNlLCJsYWJlbF9wbGFjZW1lbnQiOiJ0b3AiLCJpbnN0cnVjdGlvbl9wbGFjZW1lbnQiOiJsYWJlbCIsImhvbmV5cG90Ijp0cnVlfQ=="><input
                                                type="hidden" name="_acf_form"
                                                value="eyJhamF4IjpmYWxzZSwiZGlzcGxheV90aXRsZSI6ZmFsc2UsImRpc3BsYXlfZGVzY3JpcHRpb24iOmZhbHNlLCJpZCI6ImZvcm1fd2hlcmVfdG9fYnV5IiwidmFsdWVzIjpbXSwic3VibWl0X3RleHQiOiJTdWJtaXQiLCJyZWRpcmVjdCI6bnVsbCwidGFyZ2V0IjoiaHR0cHM6XC9cL2ZpZGRlcy5jby51a1wvIiwiZWNobyI6dHJ1ZSwiZXhjbHVkZV9maWVsZHMiOltdLCJ1cGxvYWRlciI6IndwIiwiZmlsdGVyX21vZGUiOmZhbHNlLCJsYWJlbF9wbGFjZW1lbnQiOiJ0b3AiLCJpbnN0cnVjdGlvbl9wbGFjZW1lbnQiOiJsYWJlbCIsImhvbmV5cG90Ijp0cnVlfQ=="><input
                                                type="hidden" name="af_form_nonce" value="ffa073dff6"><label
                                                for="af_email_for_non_humans_form_where_to_buy" aria-hidden="true">Email
                                                for non-humans</label><input type="text" name="email_for_non_humans"
                                                id="af_email_for_non_humans_form_where_to_buy" tabindex="-1"
                                                autocomplete="off"><input type="hidden" name="af_origin_url"
                                                value="https://fiddes.co.uk/"></div>
                                        <div class="col-8 af-field af-field-type-text af-field-postcode acf-field acf-field-text acf-field-63121ae1a7242"
                                            data-name="postcode" data-key="field_63121ae1a7242" data-type="text">
                                            <div class="af-label acf-label"><label
                                                    for="acf-field_63121ae1a7242">Postcode</label></div>
                                            <div class="af-input acf-input">
                                                <div class="acf-input-wrap"><input type="text"
                                                        id="acf-field_63121ae1a7242" name="acf[field_63121ae1a7242]"
                                                        placeholder="Enter postcode"></div>
                                            </div>
                                        </div>
                                        <div class="af-submit acf-form-submit"><button type="submit"
                                                class="acf-button af-submit-button">Submit</button><span
                                                class="acf-spinner af-spinner"></span></div>
                                    </div>
                                </form>


                                <div class="supplier-slider slick-initialized slick-slider"><a type="button"
                                        class="slick-prev slick-arrow" style=""><i
                                            class="bi bi-chevron-compact-left"></i></a>
                                    <div class="slick-list draggable">
                                        <div class="slick-track"
                                            style="opacity: 1; width: 5148px; transform: translate3d(-1170px, 0px, 0px); transition: transform 500ms;">
                                            <div class="slick-slide slick-cloned" data-slick-index="-4" id=""
                                                aria-hidden="true" style="width: 234px;" tabindex="-1">
                                                <div><a class="d-block" target="_blank" href="https://www.paintstop.uk/"
                                                        rel="noopener" tabindex="-1"
                                                        style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2023/01/paint-stop-new.png"
                                                            class="img-fluid" alt="Paint Stop">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="-3" id=""
                                                aria-hidden="true" style="width: 234px;" tabindex="-1">
                                                <div><a class="d-block" target="_blank"
                                                        href="https://nextdaypaint.co.uk/" rel="noopener" tabindex="-1"
                                                        style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2025/04/next-day-paint-logo.png"
                                                            class="img-fluid" alt="Next Day Paint">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="-2" id=""
                                                aria-hidden="true" style="width: 234px;" tabindex="-1">
                                                <div><a class="d-block" target="_blank" href="https://restorate.co.uk/"
                                                        rel="noopener" tabindex="-1"
                                                        style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2025/04/restorate-logo.png"
                                                            class="img-fluid" alt="Restorate">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="-1" id=""
                                                aria-hidden="true" style="width: 234px;" tabindex="-1">
                                                <div><a class="d-block" target="_blank"
                                                        href="https://www.wood-finishes-direct.com/" rel="noopener"
                                                        tabindex="-1" style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2025/04/wood-finishes-direct-logo.png"
                                                            class="img-fluid" alt="Wood Finishes Direct">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="0" aria-hidden="true"
                                                style="width: 234px;">
                                                <div><a class="d-block" target="_blank"
                                                        href="https://www.brewers.co.uk/" rel="noopener" tabindex="0"
                                                        style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2025/04/brewers-logo.jpg"
                                                            class="img-fluid" alt="Brewers Decorator Centres">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide slick-current slick-active" data-slick-index="1"
                                                aria-hidden="false" style="width: 234px;">
                                                <div><a class="d-block" target="_blank"
                                                        href="https://www.crowndecoratingcentres.co.uk/" rel="noopener"
                                                        tabindex="0" style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2023/01/CrownDecoratingCentres_logo.png"
                                                            class="img-fluid" alt="Crown Decorating Centres">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide slick-active" data-slick-index="2"
                                                aria-hidden="false" style="width: 234px;">
                                                <div><a class="d-block" target="_blank"
                                                        href="https://www.thepaintshed.com/" rel="noopener" tabindex="0"
                                                        style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2023/01/The-Paint-Shed.svg"
                                                            class="img-fluid" alt="The Paint Shed">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide slick-active" data-slick-index="3"
                                                aria-hidden="false" style="width: 234px;">
                                                <div><a class="d-block" target="_blank"
                                                        href="https://www.robbins.co.uk/" rel="noopener" tabindex="0"
                                                        style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2023/01/Robbins-logo-hi-res-002.png"
                                                            class="img-fluid" alt="Robbins Timber">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide slick-active" data-slick-index="4"
                                                aria-hidden="false" style="width: 234px;" tabindex="-1">
                                                <div><a class="d-block" target="_blank" href="https://rabart.co.uk/"
                                                        rel="noopener" tabindex="-1"
                                                        style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2023/01/rabart-logonew2017.png"
                                                            class="img-fluid" alt="Rabart">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="5" aria-hidden="true"
                                                style="width: 234px;" tabindex="-1">
                                                <div><a class="d-block" target="_blank" href="https://www.paintstop.uk/"
                                                        rel="noopener" tabindex="-1"
                                                        style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2023/01/paint-stop-new.png"
                                                            class="img-fluid" alt="Paint Stop">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="6" aria-hidden="true"
                                                style="width: 234px;" tabindex="-1">
                                                <div><a class="d-block" target="_blank"
                                                        href="https://nextdaypaint.co.uk/" rel="noopener" tabindex="-1"
                                                        style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2025/04/next-day-paint-logo.png"
                                                            class="img-fluid" alt="Next Day Paint">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="7" aria-hidden="true"
                                                style="width: 234px;" tabindex="-1">
                                                <div><a class="d-block" target="_blank" href="https://restorate.co.uk/"
                                                        rel="noopener" tabindex="-1"
                                                        style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2025/04/restorate-logo.png"
                                                            class="img-fluid" alt="Restorate">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide" data-slick-index="8" aria-hidden="true"
                                                style="width: 234px;" tabindex="-1">
                                                <div><a class="d-block" target="_blank"
                                                        href="https://www.wood-finishes-direct.com/" rel="noopener"
                                                        tabindex="-1" style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2025/04/wood-finishes-direct-logo.png"
                                                            class="img-fluid" alt="Wood Finishes Direct">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="9" id=""
                                                aria-hidden="true" style="width: 234px;" tabindex="-1">
                                                <div><a class="d-block" target="_blank"
                                                        href="https://www.brewers.co.uk/" rel="noopener" tabindex="-1"
                                                        style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2025/04/brewers-logo.jpg"
                                                            class="img-fluid" alt="Brewers Decorator Centres">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="10" id=""
                                                aria-hidden="true" style="width: 234px;" tabindex="-1">
                                                <div><a class="d-block" target="_blank"
                                                        href="https://www.crowndecoratingcentres.co.uk/" rel="noopener"
                                                        tabindex="-1" style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2023/01/CrownDecoratingCentres_logo.png"
                                                            class="img-fluid" alt="Crown Decorating Centres">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="11" id=""
                                                aria-hidden="true" style="width: 234px;" tabindex="-1">
                                                <div><a class="d-block" target="_blank"
                                                        href="https://www.thepaintshed.com/" rel="noopener"
                                                        tabindex="-1" style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2023/01/The-Paint-Shed.svg"
                                                            class="img-fluid" alt="The Paint Shed">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="12" id=""
                                                aria-hidden="true" style="width: 234px;" tabindex="-1">
                                                <div><a class="d-block" target="_blank"
                                                        href="https://www.robbins.co.uk/" rel="noopener" tabindex="-1"
                                                        style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2023/01/Robbins-logo-hi-res-002.png"
                                                            class="img-fluid" alt="Robbins Timber">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="13" id=""
                                                aria-hidden="true" style="width: 234px;" tabindex="-1">
                                                <div><a class="d-block" target="_blank" href="https://rabart.co.uk/"
                                                        rel="noopener" tabindex="-1"
                                                        style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2023/01/rabart-logonew2017.png"
                                                            class="img-fluid" alt="Rabart">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="14" id=""
                                                aria-hidden="true" style="width: 234px;" tabindex="-1">
                                                <div><a class="d-block" target="_blank" href="https://www.paintstop.uk/"
                                                        rel="noopener" tabindex="-1"
                                                        style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2023/01/paint-stop-new.png"
                                                            class="img-fluid" alt="Paint Stop">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="15" id=""
                                                aria-hidden="true" style="width: 234px;" tabindex="-1">
                                                <div><a class="d-block" target="_blank"
                                                        href="https://nextdaypaint.co.uk/" rel="noopener" tabindex="-1"
                                                        style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2025/04/next-day-paint-logo.png"
                                                            class="img-fluid" alt="Next Day Paint">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="16" id=""
                                                aria-hidden="true" style="width: 234px;" tabindex="-1">
                                                <div><a class="d-block" target="_blank" href="https://restorate.co.uk/"
                                                        rel="noopener" tabindex="-1"
                                                        style="width: 100%; display: inline-block;">
                                                        <img decoding="async"
                                                            src="https://fiddes.co.uk/app/uploads/2025/04/restorate-logo.png"
                                                            class="img-fluid" alt="Restorate">
                                                    </a></div>
                                            </div>
                                            <div class="slick-slide slick-cloned" data-slick-index="17" id=""
                                                aria-hidden="true" style="width: 234px;" tabindex="-1">
                                                <div><a class="d-block" target="_blank"
                                                        href="https://www.wood-finishes-direct.com/" rel="noopener"
                                                        tabindex="-1" style="width: 100%; display: inline-block;">
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



                <div
                    class="is-layout-flow wp-block-group alignfull bg-primary has-primary-background-color has-background">
                    <div class="is-layout-flex wp-container-34 wp-block-columns are-vertically-aligned-center mb-0 py-3 py-lg-5"
                        style="padding-top:4em;padding-bottom:3em">
                        <div class="is-layout-flow wp-block-column is-vertically-aligned-center px-5 px-lg-2"
                            style="flex-basis:40%">
                            <figure class="wp-block-image aligncenter size-full is-resized"><img decoding="async"
                                    loading="lazy"
                                    src="https://fiddes.co.uk/app/uploads/2022/12/White-circular-logo-for-green-background.svg"
                                    alt="" class="wp-image-3285" width="425" height="425"></figure>
                        </div>



                        <div class="is-layout-flow wp-block-column is-vertically-aligned-center px-4"
                            style="flex-basis:60%">
                            <h2
                                class="has-text-align-center underline h1 underline--white has-white-color has-text-color">
                                <span style="text-decoration: underline;">ESTABLISHED 1896</span></h2>



                            <p class="has-text-align-center has-text-color has-medium-font-size" style="color:#fefefe">
                                For over four generations, FIDDES remains a family owned independent <br>British
                                manufacturer of traditional wood and floor finishes. </p>



                            <p class="has-text-align-center has-text-color has-medium-font-size" style="color:#fefefe">
                                Originally developing wood finishing products for the professional woodworking trade,
                                FIDDES has also built a reputation as being the natural choice for interior wood and
                                outdoor DIY enthusiasts.</p>



                            <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>



                            <div class="is-layout-flex wp-block-buttons">
                                <div class="wp-block-button aligncenter"><a
                                        class="wp-block-button__link has-secondary-background-color has-background wp-element-button"
                                        href="https://fiddes.co.uk/product-catalogue/" style="border-radius:0px">Shop
                                        now</a></div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="is-layout-flow wp-block-group alignfull pt-5 pt-lg-0 pb-0 has-gray-200-background-color has-background"
                    style="padding-top:140px;padding-bottom:120px">
                    <div style="height:100px" aria-hidden="true" class="wp-block-spacer d-none d-lg-block"></div>


                    <div class="wp-block-slider testimonial-slider">
                        <div class="content-slider slick-initialized slick-slider"><a type="button"
                                class="slick-prev slick-arrow" style=""><i class="bi bi-chevron-compact-left"></i></a>
                            <div class="slick-list draggable">
                                <div class="slick-track"
                                    style="opacity: 1; width: 24408px; transform: translate3d(-11752px, 0px, 0px); transition: transform 500ms;">
                                    <div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">Floor came out
                                                    perfect, products are top quality! Will definitely be back in the
                                                    future!</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Kellen Jeremy</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide" data-slick-index="0" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","className":"mb-4","fontSize":"medium"} -->
                                                <p class="has-text-align-center mb-4 has-medium-font-size">My
                                                    basket-weave oak floor is sixty years old – and surely has never
                                                    looked better than this. <br>Hard Wax Oil with a clear satin finish.
                                                </p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Philip Brooksby</strong>
                                                </p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide" data-slick-index="1" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">Great quality wood
                                                    finishing products. <br>I use Fiddes Supreme Wax Polish regularly
                                                    and it always does the job – <br>lends great character to an open
                                                    grain finish!<a
                                                        href="https://www.google.com/maps/uv?pb=!1s0x486e04a5b9f6edaf:0x6fdc3ec30adc930c!3m1!7e115!5sGoogle+Search!15zQ2dJZ0FRPT0&amp;hl=en&amp;imagekey=!1e10!2sAF1QipMhZpZ5EnxxK1PAVva2IHIwGKAV5WzXp7AMvEim&amp;sa=X&amp;ved=2ahUKEwjYtajrvcn7AhUuTEEAHan_CDMQ9fkHKAB6BQgBEKMB"
                                                        target="_blank" rel="noopener" tabindex="-1"></a></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Square Woodshop</strong>
                                                </p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide" data-slick-index="2" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">Great products.
                                                    Both the Fiddes filler gel and the 2-part varnish gave the perfect
                                                    finish to my parquet restoration project. <br>Would definitely use
                                                    Fiddes again.</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>J Peill</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide" data-slick-index="3" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">Buy all my shellac
                                                    from Fiddes. Keep telling myself I’m going to try somewhere new, but
                                                    when it comes to it can’t beat reliably good products. Recently
                                                    purchased the White Polish for the first time and the slight hint of
                                                    colour and finish on a beech desk was great.</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>James Mcloughlin</strong>
                                                </p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide" data-slick-index="4" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">Absolutely love
                                                    Fiddes products, and their customer service is second to none, Bob
                                                    is hugely knowledgeable in anything wood! The White Hard Wax Oil has
                                                    made my French bed look amazing. Thank you.</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Lisa Royle</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide" data-slick-index="5" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">The old Welsh
                                                    Dresser worktop needed a good facelift. Following sanding and
                                                    testing we decided to enhance the colour with Fiddes walnut Wood
                                                    Dye, finishing off with three layers of Fiddes clear matt Hard Wax
                                                    Oil. The end result is perfect. Extremely pleased with the products
                                                    and the advice provided by Fiddes. Thank you.</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Owen Roberts</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide" data-slick-index="6" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">I have used Fiddes
                                                    products and services for over 25 years. Their business is
                                                    innovative, has a fantastic tradition and always deals with my
                                                    requirements in the most professional manner. <br>Well done and keep
                                                    up the good work!</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Russell Lawson</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide" data-slick-index="7" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">I have been using
                                                    Fiddes products for a very long time and have always been delighted
                                                    with both the service and the quality of the goods supplied. I would
                                                    be happy to recommend Fiddes to any potential customers.</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Sam Stewart</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide" data-slick-index="8" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">Best place in
                                                    Cardiff for top quality and premium wood oils, glazes and lacquers.
                                                    The owners really know what they are talking about. They provide
                                                    really good advice on which oils, glazes or laquers that will meet
                                                    the requirements of the finish you want. Awesome place.</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Delroy Rowe</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide" data-slick-index="9" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">Very good service,
                                                    advice given on product we needed and also very good knowledge of
                                                    colour matching different woods.</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Jon D</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide" data-slick-index="10" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">Fantastic products
                                                    and service. I regularly visit the store for various finishing
                                                    products. Alan at the store is always extremely knowledgeable and
                                                    friendly, a credit to the company. Fiddes products are always made
                                                    to a very high standard and I would not consider purchasing from
                                                    anywhere else. Highly recommended.</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Ben Morgan</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide" data-slick-index="11" aria-hidden="true"
                                        style="width: 904px;">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">I went in here to
                                                    look for something to treat my oak door surrounds. The guys behind
                                                    the counter took ages with me. They explained the pros and cons of
                                                    many products and even took a piece of wood and tested it in front
                                                    of me. I ended up buying their own brand of varnish or treatment and
                                                    went home to apply it myself. It didn’t disappoint and I’m very
                                                    happy with the service and the product. Thank you</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Katie
                                                        Parsons-Young</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-current slick-active" data-slick-index="12"
                                        aria-hidden="false" style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">Floor came out
                                                    perfect, products are top quality! Will definitely be back in the
                                                    future!</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Kellen Jeremy</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="13" id="" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","className":"mb-4","fontSize":"medium"} -->
                                                <p class="has-text-align-center mb-4 has-medium-font-size">My
                                                    basket-weave oak floor is sixty years old – and surely has never
                                                    looked better than this. <br>Hard Wax Oil with a clear satin finish.
                                                </p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Philip Brooksby</strong>
                                                </p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="14" id="" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">Great quality wood
                                                    finishing products. <br>I use Fiddes Supreme Wax Polish regularly
                                                    and it always does the job – <br>lends great character to an open
                                                    grain finish!<a
                                                        href="https://www.google.com/maps/uv?pb=!1s0x486e04a5b9f6edaf:0x6fdc3ec30adc930c!3m1!7e115!5sGoogle+Search!15zQ2dJZ0FRPT0&amp;hl=en&amp;imagekey=!1e10!2sAF1QipMhZpZ5EnxxK1PAVva2IHIwGKAV5WzXp7AMvEim&amp;sa=X&amp;ved=2ahUKEwjYtajrvcn7AhUuTEEAHan_CDMQ9fkHKAB6BQgBEKMB"
                                                        target="_blank" rel="noopener" tabindex="-1"></a></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Square Woodshop</strong>
                                                </p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="15" id="" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">Great products.
                                                    Both the Fiddes filler gel and the 2-part varnish gave the perfect
                                                    finish to my parquet restoration project. <br>Would definitely use
                                                    Fiddes again.</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>J Peill</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="16" id="" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">Buy all my shellac
                                                    from Fiddes. Keep telling myself I’m going to try somewhere new, but
                                                    when it comes to it can’t beat reliably good products. Recently
                                                    purchased the White Polish for the first time and the slight hint of
                                                    colour and finish on a beech desk was great.</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>James Mcloughlin</strong>
                                                </p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="17" id="" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">Absolutely love
                                                    Fiddes products, and their customer service is second to none, Bob
                                                    is hugely knowledgeable in anything wood! The White Hard Wax Oil has
                                                    made my French bed look amazing. Thank you.</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Lisa Royle</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="18" id="" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">The old Welsh
                                                    Dresser worktop needed a good facelift. Following sanding and
                                                    testing we decided to enhance the colour with Fiddes walnut Wood
                                                    Dye, finishing off with three layers of Fiddes clear matt Hard Wax
                                                    Oil. The end result is perfect. Extremely pleased with the products
                                                    and the advice provided by Fiddes. Thank you.</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Owen Roberts</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="19" id="" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">I have used Fiddes
                                                    products and services for over 25 years. Their business is
                                                    innovative, has a fantastic tradition and always deals with my
                                                    requirements in the most professional manner. <br>Well done and keep
                                                    up the good work!</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Russell Lawson</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="20" id="" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">I have been using
                                                    Fiddes products for a very long time and have always been delighted
                                                    with both the service and the quality of the goods supplied. I would
                                                    be happy to recommend Fiddes to any potential customers.</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Sam Stewart</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="21" id="" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">Best place in
                                                    Cardiff for top quality and premium wood oils, glazes and lacquers.
                                                    The owners really know what they are talking about. They provide
                                                    really good advice on which oils, glazes or laquers that will meet
                                                    the requirements of the finish you want. Awesome place.</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Delroy Rowe</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="22" id="" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">Very good service,
                                                    advice given on product we needed and also very good knowledge of
                                                    colour matching different woods.</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Jon D</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="23" id="" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">Fantastic products
                                                    and service. I regularly visit the store for various finishing
                                                    products. Alan at the store is always extremely knowledgeable and
                                                    friendly, a credit to the company. Fiddes products are always made
                                                    to a very high standard and I would not consider purchasing from
                                                    anywhere else. Highly recommended.</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Ben Morgan</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="24" id="" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">I went in here to
                                                    look for something to treat my oak door surrounds. The guys behind
                                                    the counter took ages with me. They explained the pros and cons of
                                                    many products and even took a piece of wood and tested it in front
                                                    of me. I ended up buying their own brand of varnish or treatment and
                                                    went home to apply it myself. It didn’t disappoint and I’m very
                                                    happy with the service and the product. Thank you</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Katie
                                                        Parsons-Young</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slick-slide slick-cloned" data-slick-index="25" id="" aria-hidden="true"
                                        style="width: 904px;" tabindex="-1">
                                        <div>
                                            <div class="slide px-2 px-lg-5" style="width: 100%; display: inline-block;">
                                                <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size">Floor came out
                                                    perfect, products are top quality! Will definitely be back in the
                                                    future!</p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} -->
                                                <p class="has-text-align-center has-medium-font-size"
                                                    style="text-transform:uppercase"><strong>Kellen Jeremy</strong></p>
                                                <!-- /wp:paragraph -->

                                                <!-- wp:image {"align":"center","id":1558,"width":143,"height":20,"sizeSlug":"full","linkDestination":"none","className":"mx-auto"} -->
                                                <figure class="wp-block-image aligncenter size-full is-resized mx-auto">
                                                    <img decoding="async" loading="lazy"
                                                        src="https://fiddes.co.uk/app/uploads/2022/09/stars.png" alt=""
                                                        class="wp-image-1558" width="143" height="20"
                                                        srcset="https://fiddes.co.uk/app/uploads/2022/09/stars.png 214w, https://fiddes.co.uk/app/uploads/2022/09/stars-200x30.png 200w"
                                                        sizes="(max-width: 143px) 100vw, 143px"></figure>
                                                <!-- /wp:image -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><a type="button" class="slick-next slick-arrow" style=""><i
                                    class="bi bi-chevron-compact-right"></i></a>
                        </div>
                    </div>



                    <div style="height:90px" aria-hidden="true" class="wp-block-spacer d-none d-lg-block"></div>
                </div>


            </div>
        </main>
<script>
jQuery(document).ready(function($) {});
</script>
<?php
get_footer();