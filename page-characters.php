<?php get_header(); ?>

<div class="content">

<?php 
        
        /*wp_nav_menu(
            array(
                'theme_location' => 'side-menu',
                'container_class' => 'side-nav'
            )
            ); */
        
        ?>

<div class="main">

<div class="inner-content">

<?php

$args = array(

    'post_type' => 'ff7characters',
    'post_status' => 'publish',
    'posts_per_page' => 10,
    'order' => 'ASC',
);

$ff7 = new WP_Query( $args );

while ( $ff7->have_posts() ) : $ff7->the_post();
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}
endwhile;

wp_reset_postdata(); 

?>

<h4> <?php echo get_the_title(); ?> </h4>
<p> <?php the_content(); ?> </p>

<?php

$args = array(

    'post_type' => 'ff8characters',
    'post_status' => 'publish',
    'posts_per_page' => 10,
    'order' => 'ASC',
);

$ff8 = new WP_Query( $args );

while ( $ff8->have_posts() ) : $ff8->the_post();
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}
endwhile;

wp_reset_postdata(); 

?>

<h4> <?php echo get_the_title(); ?> </h4>
<p> <?php the_content(); ?> </p>



</div>

</div>

</div>

<?php get_footer(); ?>