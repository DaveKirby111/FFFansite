<?php get_header(); ?>

<div class="content">

<?php 
        
        /*wp_nav_menu(
            array(
                'theme_location' => 'side-menu',
                'container_class' => 'side-nav'
            )
            );*/
        
        ?>

<div class="main">

<?php

the_post_thumbnail();

?>

<?php

   if( have_posts() ) {

        while( have_posts() ) {
            the_post();
            the_content();
        }


   }


?>

</div>

</div>

<?php get_footer(); ?>