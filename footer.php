<div class="footer">

        <?php 
        
        wp_nav_menu(
            array(
                'theme_location' => 'footer-menu',
                'container_class' => 'bottom-nav'
            )
            );
        
        ?>

            <p>author: david kirby <?php echo date('Y'); ?></p>

        </div>
    <?php wp_footer(); ?>
    </body>
</html>