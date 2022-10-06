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

<div class="main-content">

<h3 class="ff1">Final Fantasy VII</h3>

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
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
    echo '';
    the_post_thumbnail('thumbnail');
    echo '';
}

echo '<p class="title">';
echo get_the_title();
echo '</p>';

endwhile;

wp_reset_postdata(); 

?>

<p> <?php the_content(); ?> </p>

<h3 class="ff2">Final Fantasy VIII</h3>

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

echo '<p class="title">';
echo get_the_title();
echo '</p>';

endwhile;

wp_reset_postdata(); 

?>

<p> <?php the_content(); ?> </p>

<div class="ff9-heading">

<h3 class="ff3">Final Fantasy</h3> 
<h3 class="ff3-1">IX</h3>

</div>


<?php

$args = array(

    'post_type' => 'ff9characters',
    'post_status' => 'publish',
    'posts_per_page' => 10,
    'order' => 'ASC',
);

$ff9 = new WP_Query( $args );

while ( $ff9->have_posts() ) : $ff9->the_post();
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}

echo '<p class="title">';
echo get_the_title();
echo '</p>';

endwhile;

wp_reset_postdata(); 

?>

<p> <?php the_content(); ?> </p>

<h3 class="ff4">Final Fantasy XIII</h3>

<?php

$args = array(

    'post_type' => 'ff13characters',
    'post_status' => 'publish',
    'posts_per_page' => 10,
    'order' => 'ASC',
);

$ff13 = new WP_Query( $args );

while ( $ff13->have_posts() ) : $ff13->the_post();
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}

echo '<p class="title">';
echo get_the_title();
echo '</p>';

endwhile;

wp_reset_postdata(); 

?>

<p> <?php the_content(); ?> </p>

<h3 class="ff5">Final Fantasy XV</h3>

<?php

$args = array(

    'post_type' => 'ff15characters',
    'post_status' => 'publish',
    'posts_per_page' => 10,
    'order' => 'ASC',
);

$ff15 = new WP_Query( $args );

while ( $ff15->have_posts() ) : $ff15->the_post();
if ( has_post_thumbnail() ) {
    the_post_thumbnail();
}

echo '<p class="title">';
echo get_the_title();
echo '</p>';

endwhile;

wp_reset_postdata(); 

?>

<p> <?php the_content(); ?> </p>



</div>

</div>

</div>

<?php get_footer(); ?>