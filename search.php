<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<main class="fourOfour">
  <div class="wrap">


  			<?php get_search_form(); ?>

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_exerpt(); ?>

      <?php endwhile; else: ?>

        <p>No results :(</p>

      <?php endif; ?>

  </div><!-- .wrap -->

  </main>

<?php get_footer(); ?>
