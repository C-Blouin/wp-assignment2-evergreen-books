<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon set to my Evergreen logo. -->
    <link rel="icon" type="image/x-icon" href="<?php echo esc_url( home_url( 'wp-content/uploads/2024/03/evergreen-logo.png' ) ); ?>">
    <?php wp_head(); ?>
    <!-- Linking to Normalized CSS Before Applying Custom Styles. -->
    <link rel="stylesheet" href="<?php echo esc_url( home_url( 'wp-content/themes/evergreen/normalize.css' ) ); ?>">
    <!-- Linking Custom Typekit for Futura Font from Adobe Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/zel3gbr.css">
    <!-- Importing Bootstrap CSS CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- Linking Custom Styles after normalize and bootstrap. -->
    <link rel="stylesheet" href="<?php echo esc_url( home_url( 'wp-content/themes/evergreen/style.css' ) ); ?>">
    <!-- Importing Bootstrap JS Script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous" defer></script>
    <!-- Linking Custom JavaScript -->
    <script src="<?php echo esc_url( home_url( 'wp-content/themes/evergreen/script.js' ) ); ?>" defer></script>
</head>
<body <?php body_class(); ?>>
  <!-- Start of Header  -->
    <header id="header-nav">
        <!-- Start of Primary Header Navigation -->
        <nav class="navbar navbar-expand-xl navbar-light justify-content-between align-items-center" role="navigation" data-bs-theme="light">
            <div class="container-fluid">
                <!-- Start of Hamburger Toggle Button Icon -->
                <button class="navbar-toggler d-xl-none" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- End of Hamburger Toggle Button Icon -->
                <div class="offcanvas offcanvas-end" id="navbarNav">                
                    <div class="offcanvas-body">                       
                        <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( home_url( 'wp-content/uploads/2024/03/evergreen-logo.png' ) ); ?>" class="navbar-brand" alt="Evergreen Logo" width="140"></a>
                        <!-- Start of Primary Navigation Menu, placing the registered header navigation from my functions.php here. -->
                        <?php                        
                          wp_nav_menu(array(
                              'menu'           => 'header-nav',
                              'theme_location' => '',
                              'depth'          => 1,
                              'fallback_cb'    => 'false',                             
                          ));
                        ?>
                    </div>
                    <!-- End of .offcanvas-body -->
                </div> 
                <!-- End of .offcanvas -->
            </div>
            <!-- End of .container-fluid -->
        </nav>
        <!-- End of Primary Header Navigation -->
    </header>
    <!-- End of Header -->