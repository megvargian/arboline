<?php
/**
* A Simple Category Template
*/

get_header();
?>
<section class="single_category">
    <nav class="woocommerce-breadcrumb"><a href="https://fiddes.co.uk">Home</a>&nbsp;/&nbsp;<a
            href="https://fiddes.co.uk/product-category/wood-finishes/">Interior Wood Finishes</a>&nbsp;/&nbsp;Oils
    </nav>
    <div class="row">
        <div class="woocommerce-products-header col-12  col-md-6 ">
            <img src="https://fiddes.co.uk/app/uploads/2022/12/Fiddes-Group-Tins_OILS.jpg" alt="Oils"
                class="img-fluid w-100">
        </div>
        <div class="col-12  col-md-6 ">
            <header class="d-flex justify-content-center mb-4 flex-column">
                <h1 class="woocommerce-products-header__title page-title">Oils</h1>
                <p></p>
            </header>
            <div class="woocommerce-notices-wrapper"></div>
            <p class="woocommerce-result-count">
                Showing all 7 results</p>
            <form class="woocommerce-ordering" method="get">
                <select name="orderby" class="orderby" aria-label="Shop order">
                    <option value="menu_order" selected="selected">Default sorting</option>
                    <option value="popularity">Sort by popularity</option>
                    <option value="date">Sort by latest</option>
                    <option value="price">Sort by price: low to high</option>
                    <option value="price-desc">Sort by price: high to low</option>
                </select>
                <input type="hidden" name="paged" value="1">
            </form>
            <ul class="products columns-6">

                <div class="mb-4">
                    <p class="text-uppercase w-100 mb-2" id="fiddesRelatedProduct">
                        <a class="d-flex align-items-center justify-content-between w-100 border-bottom pb-1"
                            href="https://fiddes.co.uk/product/danish-oil/">
                            FIDDES Danish Oil <i class="bi bi-chevron-right"></i>
                        </a>
                    </p>
                    <p class="text-uppercase w-100 mb-2" id="fiddesRelatedProduct">
                        <a class="d-flex align-items-center justify-content-between w-100 border-bottom pb-1"
                            href="https://fiddes.co.uk/product/raw-linseed-oil/">
                            FIDDES Raw Linseed Oil <i class="bi bi-chevron-right"></i>
                        </a>
                    </p>
                    <p class="text-uppercase w-100 mb-2" id="fiddesRelatedProduct">
                        <a class="d-flex align-items-center justify-content-between w-100 border-bottom pb-1"
                            href="https://fiddes.co.uk/product/boiled-linseed-oil/">
                            FIDDES Boiled Linseed Oil <i class="bi bi-chevron-right"></i>
                        </a>
                    </p>
                    <p class="text-uppercase w-100 mb-2" id="fiddesRelatedProduct">
                        <a class="d-flex align-items-center justify-content-between w-100 border-bottom pb-1"
                            href="https://fiddes.co.uk/product/teak-oil/">
                            FIDDES Teak Oil <i class="bi bi-chevron-right"></i>
                        </a>
                    </p>
                    <p class="text-uppercase w-100 mb-2" id="fiddesRelatedProduct">
                        <a class="d-flex align-items-center justify-content-between w-100 border-bottom pb-1"
                            href="https://fiddes.co.uk/product/white-polishing-oil/">
                            FIDDES White Polishing Oil <i class="bi bi-chevron-right"></i>
                        </a>
                    </p>
                    <p class="text-uppercase w-100 mb-2" id="fiddesRelatedProduct">
                        <a class="d-flex align-items-center justify-content-between w-100 border-bottom pb-1"
                            href="https://fiddes.co.uk/product/finishing-oil/">
                            FIDDES Finishing Oil <i class="bi bi-chevron-right"></i>
                        </a>
                    </p>
                    <p class="text-uppercase w-100 mb-2" id="fiddesRelatedProduct">
                        <a class="d-flex align-items-center justify-content-between w-100 border-bottom pb-1"
                            href="https://fiddes.co.uk/product/pure-tung-oil/">
                            FIDDES Pure Tung Oil <i class="bi bi-chevron-right"></i>
                        </a>
                    </p>
                </div>
            </ul>
        </div>
    </div>
</section>
<script>
jQuery(document).ready(function($) {});
</script>
<?php get_footer(); ?>