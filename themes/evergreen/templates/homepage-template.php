<?php 
/**
 * Template Name: Homepage Template
 * Template Post Type: page
 */
get_header();
?>
<!-- Start of Main -->
<main>
    <!-- Start of Hero Wrapper -->
    <div class="hero-wrapper">
        <!-- Start of Hero Section -->
        <section id="hero">

                <!-- Start of Hero Content -->
                <div>
                    <!-- Each field can be dynamically changed in the WordPress Dashboard. -->
                    <h1><?php echo wp_kses_post(get_field('hero_heading')); ?></h1>                   
                    <p><?php echo wp_kses_post(get_field('hero_intro')); ?></p>
                    <a href="#offerings"><?php echo wp_kses_post(get_field('hero_cta')); ?></a>
                </div>   
                <!-- End of Hero Content -->

                <!-- Start of Hero Image -->
                <figure>
                    <!-- Thank you to Adobe Stock for the hero image, reference here: https://stock.adobe.com/ca/images/character-people-read-books-in-a-room-vector-illustrations-to-increase-insight-and-knowledge-flat-design/438539192?prev_url=detail&asset_id=438539192 -->
                    <img src="<?php echo wp_kses_post(get_field('hero_image')); ?>" alt="<?php echo esc_attr(get_field('hero_image_alt_text')); ?>">
                </figure>     
                <!-- End of Hero Image -->

        </section>
        <!-- End of Hero Section -->
    </div>
    <!-- End of Hero Wrapper -->
    
    <!-- Start of Offerings Wrapper -->
    <div class="offerings-wrapper">

        <!-- Start of Offerings Section -->
        <section id="offerings">
            <h2>Our Offerings!</h2>
            <div class="offerings-container">
                <!-- Shortcode to display the offerings available, this is a custom shortcode from my functions.php -->
                <?php
                do_shortcode('[offerings]');
                ?>
            </div>
            <!-- CTA Button to redirect to the shop page. -->
            <a href="<?php echo esc_url( home_url( 'shop' ) ); ?>">Start Reading!</a>
        </section>
        <!-- End of Offerings Section -->

    </div>
    <!-- End of Offerings Wrapper -->

</main>
<!-- End of Main -->
<?php
get_footer();
?>