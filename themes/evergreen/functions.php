<?php
// Navigation menu registration
function navigation_setup(){
    register_nav_menus(array(
        'header-nav' => 'Header menu',
        'footer-nav' => 'Footer menu'
    ));
}

// Adding my navigation menu by adding the action.
add_action( 'after_setup_theme', 'navigation_setup' );

// Featued Image Support.
add_theme_support( 'post-thumbnails' );

// Creating a custom post type for my offerings, displayed on my homepage.
function offerings_init(){
    $args = array(
        'label' => 'Offerings',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'taxonomies'  => array( 'category', 'post_tag'),
        'hierarchical' => 'false',
        'query_var' => true,
        'menu_icon' => 'dashicons-archive',
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'author',
            'page-attributes',
            'custom-fields',
        )
    );

    // Registering my offerings custom post type, and passing in the arguments.
    register_post_type('offerings', $args);

}

// Initializing my custom offerings post type.
add_action('init', 'offerings_init');

// Shortcode function that will display my custom offerings.
function offerings_shortcode() {

    // Setting up my query to retrieve the offerings from my WordPress database. Limiting the number of offerings to 3.
    $query = new WP_Query(array('post_type' => 'offerings', 'posts_per_page' => 3, 'order' => 'asc'));

    // Looping through the offerings retrieved from the database, to generate article elements for each offering with their designated content.
    while ($query -> have_posts()) : $query-> the_post(); ?>
        <article>
            <h3><?php the_title(); ?></h3>
            <?php $offerings_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail'); ?>
            <?php if ($offerings_image): ?>
                <img src="<?php echo $offerings_image[0]; ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <p><?php echo wp_kses_post(get_field('offerings_paragraph')); ?></p>
        </article>
    <?php endwhile;
    // End of the loop.
    wp_reset_postdata();
}

// Registering the shortcode to display my custom offerings post type.
add_shortcode('offerings', 'offerings_shortcode');

// Enabling WooCommerce support for my WordPress theme.
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Enabling the custom gallery zoom functionality.
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );

// Adding the action to enable WooCommerce support.
add_action( 'after_setup_theme', 'woocommerce_support' );