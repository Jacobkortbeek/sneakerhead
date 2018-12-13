<?php get_header(); ?>


  <main class="blog">
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="heading ui center aligned segment" style="background-image: linear-gradient( rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25) ), url('<?php the_post_thumbnail_url( 'full' ); ?>')!important;">
      <div class="ui text container">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>

    <div class="ui hidden divider"></div>

  <div class="ui container">
    <div class="row">
      <div class="sixteen wide column">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
<?php endwhile; ?>
  </main>
<?php get_footer(); ?>
