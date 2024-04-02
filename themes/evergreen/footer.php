        <!-- Start of Footer -->
        <footer>
            <nav>      
                <!-- Footer navigation logo. -->
                <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( home_url( 'wp-content/uploads/2024/03/evergreen-logo.png' ) ); ?>" class="navbar-brand" alt="Evergreen Logo" width="140"></a>          
                <!-- Start of Footer Navigation Menu, placing the registered footer from my functions here. -->
                <?php
                    wp_nav_menu(array(
                        'menu'           => 'footer-nav',
                        'theme_location' => '',
                        'depth'          => 1,
                        'fallback_cb'    => 'false',
                    ));
                ?>
            </nav>
            <!-- Copyright infomation. -->
            <p class="copyright">&copy; 2024 Evergreen. Website Developed By <span class="highlight">Christopher Blouin</span></p>
        </footer>
        <?php wp_footer(); ?>
    <!-- End of Footer -->
    </body>
</html>