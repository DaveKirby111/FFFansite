<?php get_header(); ?>

<div class="content">

<div class="main">

<div class="inner-content">

<?php

query_posts( $args );


while ( have_posts() ) : the_post();
echo '<li>';
the_title();
echo '</li>';
endwhile;


wp_reset_query();
?>


</div>

</div>

</div>

<?php get_footer(); ?>