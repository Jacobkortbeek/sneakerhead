<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<main class="fourOfour">
  <div class="wrap">


  			<?php get_search_form(); ?>

        <?php

        global $query_string;

        wp_parse_str( $query_string, $search_query );
        $search = new WP_Query( $search_query );

        ?>

  </div><!-- .wrap -->

  </main>

<?php get_footer(); ?>
