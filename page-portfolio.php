<?php
/**
 * Template Name: Portfolio Page
 *
 */
?>
<?php get_header(); ?>

<main class="portfolio">
  <div class="heading ui center aligned segment" style="background-image: linear-gradient( rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25) ), url('<?php the_field( 'header_image' ); ?>')!important;">
    <div class="ui text container">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>

  <div class="ui hidden divider"></div>


  <!-- Turntable -->
  <?php if( have_rows('turntable_portfolio') ): ?>


  <div class="turntable-ui ui grid" id="myTurntableTwo">
    <div class="sixteen wide column">
      <div class="turntable">
        <ul>
          <?php while ( have_rows('turntable_portfolio') ) : the_row(); ?>
          <li data-img-src="<?php the_sub_field('turntable_images'); ?>"></li>
        <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
<?php endif; ?>


  <div class="ui hidden divider"></div>

  <!-- Portfolio -->
  <?php

    $num_posts = get_option( 'posts_per_page' );

    $args = array(
      'post_type' => 'portfolio',
      'posts_per_page' => $num_posts,
      'orderby' => 'post_date'
    );

    $query = new WP_Query( $args );

  ?>
  <div class="ui grid stackable container portfolio direction-reveal direction-reveal--demo-swing">
    <div class="two column row">
      <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
          <div class="column">
      <div class="port">
        <a href="#" class="direction-reveal__card">
          <img src="<?php if ( get_field( 'portfolio_image') ) { ?>
                                                         <?php the_field( 'portfolio_image' ); ?>
                                                         <?php } ?>" alt="Image" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66">

          <div class="direction-reveal__overlay direction-reveal__anim--in">
            <h3 class="direction-reveal__title"><?php the_title(); ?></h3>
            <p class="direction-reveal__text"><?php the_content(); ?></p>
          </div>
        </a>
      </div>
      </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>

  </div>
</div>






</main>
<?php get_footer(); ?>
