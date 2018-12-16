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

			    	<p class="meta">
            By <?php the_author_posts_link(); ?>
            on <?php echo the_time('l, F jS, Y'); ?>
            <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
        </p>

        <?php the_expert(); ?>

      <?php endwhile; else: ?>

        <p>No results :(</p>

      <?php endif; ?>

  </div><!-- .wrap -->

  </main>

<?php get_footer(); ?>
