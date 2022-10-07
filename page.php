<?php get_header(); ?>

<div class="content">

<div class="nav">

<?php 
        
        /*wp_nav_menu(
            array(
                'theme_location' => 'side-menu',
                'container_class' => 'side-nav'
            )
            );*/
        
        ?>

        </div>

<div class="main">

<div class="inner-content">

<div class="main-content">

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

</div>

</div>

<?php get_footer(); ?>