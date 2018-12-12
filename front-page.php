<?php get_header(); ?>


<main class="home">

  <!-- HERO -->
  <div class="hero ui center aligned segment" style="background-image: linear-gradient( rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25) ), url(<?php $hero_background_image = get_field( 'hero_background_image' ); ?> <?php if ( $hero_background_image ) { ?>'<?php echo $hero_background_image['url']; ?>')!important;<?php } ?>">
    <div class="ui text container">
      <?php if( get_field( 'hero_text' ) ) : ?>
        <h1><?php the_field( 'hero_text' ); ?></h1>
      <?php endif; ?>
    </div>
  </div>

  <div class="ui hidden divider"></div>

  <!-- Turntable -->
  <?php if( have_rows('turntable_images') ): ?>


  <div class="turntable-ui ui grid" id="myTurntable">
    <div class="sixteen wide column">
      <div class="turntable">
        <ul>
          <?php while ( have_rows('turntable_images') ) : the_row(); ?>
          <li data-img-src="<?php the_sub_field('image'); ?>"></li>
        <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
<?php endif; ?>

  <div class="ui hidden divider"></div>

  <!-- About -->
  <div class="about ui grid stackable container">
    <div class="sixteen wide column">
      <div class="mainSentences">
        <p id="main"><?php the_field( 'typed_main_sentence' ); ?></p>
      </div>

      <div class="sentences">
        <?php if( have_rows( 'typed_colour_words' ) ) : $i = 0; while ( have_rows( 'typed_colour_words' ) ) : the_row(); ?>
        <p id="test<?php echo $i; ?>"> <?php the_sub_field( 'coloured_word' ); ?></p>
      <?php $i++; endwhile; endif; ?>
      </div>
      <h2 class="ui huge header" id="typed"> <strong></strong> </h2>
    </div>
    <div class="two column row">
      <div class="column">
        <p>
          <?php the_field( 'about_content' ); ?>
        </p>
      </div>
      <div class="column">
        <div class="img">
          <?php $about_image = get_field( 'about_image' ); ?>
          <?php if ( $about_image ) { ?>
	          <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>" />
          <?php } ?>
        </div>
      </div>
    </div>
  </div>

  <div class="ui hidden divider"></div>

  <!-- Portfolio -->

  <div class="ui grid stackable container portfolio direction-reveal direction-reveal--demo-swing">
    <div class="two column row">
        <?php

          $num_posts = get_option( 'posts_per_page' );

          $args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => $num_posts,
            'orderby' => 'post_date'
          );

          $query = new WP_Query( $args );

        ?>
        <?php $i=0; if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
          <?php if( $i < 4 ) : ?>
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
      <?php endif; ?>
        <?php $i++;?>
        <?php endwhile; endif; wp_reset_postdata(); ?>


  </div>
</div>

<div class="ui hidden divider"></div>

  <!-- Rosponsify gallery -->
<?php if( have_rows('home_gallery') ): ?>
  <div class="ui four column stackable padded equal height grid gallery">
    <?php $i=0; while ( have_rows('home_gallery') ) : the_row(); ?>
        <?php if($i<2) : ?>
          <?php if($i===0) : ?>
            <div class="column">
          <?php endif; ?>
          <div class="ui segment">
            <img src="<?php the_sub_field('gallery_image'); ?>" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
          </div>
          <?php if($i===1) : ?>
            </div>
          <?php endif; ?>
        <?php elseif ($i<4) : ?>
          <?php if ($i===2) : ?>
            <div class="column computer only tablet only">
          <?php endif ?>
          <div class="ui segment">
            <img src="<?php the_sub_field('gallery_image'); ?>" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
          </div>
          <?php if($i===3) : ?>
            </div>
          <?php endif; ?>
        <?php elseif ($i<6) : ?>
          <?php if ($i===4) : ?>
            <div class="column computer only tablet only">
          <?php endif; ?>
          <div class="ui segment">
            <img src="<?php the_sub_field('gallery_image'); ?>" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
          </div>
          <?php if($i===5) : ?>
            </div>
          <?php endif; ?>
        <?php elseif ($i<8) : ?>
          <?php if ($i===6) : ?>
            <div class="column computer only tablet only">
          <?php endif; ?>
          <div class="ui segment">
            <img src="<?php the_sub_field('gallery_image'); ?>" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
          </div>
          <?php if($i===7) : ?>
            </div>
          <?php endif; ?>
        <?php endif; ?>
    <?php $i++; endwhile; ?>
  </div>
<?php endif; ?>

  <div class="ui hidden divider"></div>

  <!-- BLog -->
  <div class="ui three column container stackable grid">
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
      <?php if ($i>3) : ?>
    <div class="column">
      <div class="ui fluid card">
        <div class="image">
          <?php the_post_thumbnail( 'medium' ); ?>
        </div>
        <div class="content">
          <div class="header">
            <h2><?php the_title(); ?></h2>
          </div>
          <div class="meta">
            <a><?php the_tags(); ?></a>
          </div>
          <div class="description">
            <p>
              <?php the_excerpt(); ?>
            </p>
          </div>
        </div>
        <div class="extra content">
          <button href="<?php the_permalink(); ?>" class="ui button">Read More</button>
        </div>
      </div>
    </div>
    <?php endif; $i++; endwhile; endif; ?>
  </div>
</main>


<?php get_footer(); ?>
