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
    <a href="<?php the_permalink(); ?>">
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
  </a>
<div class="ui hidden divider small"></div>
<?php endwhile; endif; ?>
<a href="#">
  <div class="ui segment blog">
    <div class="ui grid">
      <div class="ui two column stackable row">
        <div class="column">
          <h2>Title</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <div class="column">
          <div class="ui segment img">
            <img src="./assets/img/malvestida-magazine-458582-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
          </div>
        </div>
      </div>
      <div class="sixteen wide column">
        <button class="large ui right floated button">
          More
        </button>
      </div>
  </div>
</div>
</a>
<div class="ui hidden divider small"></div>
<a href="#">
<div class="ui segment blog">
  <div class="ui grid">
    <div class="ui two column stackable row">
      <div class="column">
        <h2>Title</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="column">
        <div class="ui segment img">
          <img src="./assets/img/malvestida-magazine-458582-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
        </div>
      </div>
    </div>
    <div class="sixteen wide column">
      <button class="large ui right floated button">
        More
      </button>
    </div>
</div>
</div>
</a>
<div class="ui hidden divider small"></div>
</div>
</main>
<?php get_footer(); ?>
