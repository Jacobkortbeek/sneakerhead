<?php get_header(); ?>
<main class="blog">
  <div class="heading ui center aligned segment" style="background-image: linear-gradient( rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25) ), url('<?php the_field( 'header_image', 145 ); ?>')!important;">
    <div class="ui text container">
      <h1><?php the_field( 'blog_title', 145 ); ?></h1>
    </div>
  </div>

  <div class="ui hidden divider"></div>

  <div class="ui container">
    <?php

      $num_posts = get_option( 'posts_per_page' );

      $args = array(
        'post_type' => 'post',
        'posts_per_page' => $num_posts,
        'orderby' => 'post_date'
      );

      $query = new WP_Query( $args );

    ?>
    <?php $i=0; if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
      <div class="ui segment blog">
        <div class="ui grid">
          <div class="ui two column stackable row">
            <div class="column">
              <h2><?php the_title(); ?></h2>

                <?php the_excerpt(); ?>

            </div>
            <div class="column">
              <div class="ui segment img">
                <?php the_post_thumbnail( 'medium' ); ?>
              </div>
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

<div class="ui hidden divider small"></div>
</div>
</main>
<?php get_footer(); ?>
