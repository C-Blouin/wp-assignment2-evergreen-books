<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */
get_header();
?>
<!-- Start of Main -->
<main>
    <!-- Start of Products Wrapper -->
    <div class="products-wrapper">

        <!-- Start of Products Section -->
        <section id="products">
            <!-- Intro Content -->
            <div class="products-intro">
                <h1>Products</h1>
                <p>Browse the books available at Evergreen! Wether you are looking for a physical or digital copy, we have you covered!</p>
            </div>
            <?php
            // Shop loop to display products, I am limited the displayed products to 12, will spreading the products over 4 columns for consistency.
            do_action('woocommerce_before_shop_loop');
                echo do_shortcode('[products limit="12" columns="4"]');
            do_action('woocommerce_after_shop_loop');
            ?>       
        </section>   
        <!-- End of Products Section -->   

    </div>
    <!-- End of Products Wrapper -->
</main>
<!-- End of Main -->
<?php
get_footer();
?>