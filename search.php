<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<main class="blog">

  <div class="ui container search">
    <?php get_search_form(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="ui segment blog">
        <div class="ui grid">
          <div class="ui two column stackable row">
            <div class="column">
              <h2><?php the_title(); ?></h2>

                <?php the_excerpt(); ?>

            </div>
            <div class="column">
              <?php if ( has_post_thumbnail() ) : ?>
              <div class="ui segment img">
                <?php the_post_thumbnail( 'medium' ); ?>
              </div>
            <?php endif; ?>
            </div>
          </div>
          <div class="sixteen wide column">
            <a href="<?php the_permalink(); ?>">
              <button class="large ui right floated button">
              More
            </button></a>

          </div>
      </div>
    </div>
<div class="ui hidden divider small"></div>
<?php endwhile; endif; ?>


  </main>

<?php get_footer(); ?>
