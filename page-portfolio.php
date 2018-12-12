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
  <div class="turntable-ui ui grid" id="myTurntableTwo">
    <div class="sixteen wide column">
      <div class="turntable">
        <ul>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img01.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img02.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img03.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img04.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img05.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img06.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img07.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img08.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img09.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img10.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img11.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img12.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img13.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img14.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img15.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img16.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img17.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img18.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img19.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img20.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img21.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img22.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img23.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img24.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img25.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img26.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img27.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img28.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img29.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img30.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img31.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img32.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img33.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img34.jpg"></li>
          <li data-img-src="./assets/img/sneaker/sneaker-home/img36.jpg"></li>
        </ul>
      </div>
    </div>
  </div>


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
      <div class="column">
        <div class="port">
          <a href="#" class="direction-reveal__card">
            <img src="./assets/img/satria-aditya-782549-unsplash.jpg" alt="Image" width="600px" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66">

            <div class="direction-reveal__overlay direction-reveal__anim--in">
              <h3 class="direction-reveal__title">Lorem ipsum</h3>
              <p class="direction-reveal__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore eritatis et quasi.</p>
            </div>
          </a>
        </div>
      </div>
      <div class="column">
        <div class="port">
          <a href="#" class="direction-reveal__card">
            <img src="./assets/img/joseph-barrientos-82309-unsplash.jpg" alt="Image" width="600px" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66">

            <div class="direction-reveal__overlay direction-reveal__anim--in">
              <h3 class="direction-reveal__title">Lorem ipsum</h3>
              <p class="direction-reveal__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore eritatis et quasi.</p>
            </div>
          </a>
        </div>
      </div>
      <div class="column">
        <div class="port">
          <a href="#" class="direction-reveal__card">
            <img src="./assets/img/xavier-teo-469050-unsplash.jpg" alt="Image" width="600px" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66">

            <div class="direction-reveal__overlay direction-reveal__anim--in">
              <h3 class="direction-reveal__title">Lorem ipsum</h3>
              <p class="direction-reveal__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore eritatis et quasi.</p>
            </div>
          </a>
        </div>
      </div>
      <div class="column">
        <div class="port">
          <a href="#" class="direction-reveal__card">
            <img src="./assets/img/xavier-teo-469050-unsplash.jpg" alt="Image" width="600px" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66">

            <div class="direction-reveal__overlay direction-reveal__anim--in">
              <h3 class="direction-reveal__title">Lorem ipsum</h3>
              <p class="direction-reveal__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore eritatis et quasi.</p>
            </div>
          </a>
        </div>
      </div>
      <div class="column">
        <div class="port">
          <a href="#" class="direction-reveal__card">
            <img src="./assets/img/xavier-teo-469050-unsplash.jpg" alt="Image" width="600px" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66">

            <div class="direction-reveal__overlay direction-reveal__anim--in">
              <h3 class="direction-reveal__title">Lorem ipsum</h3>
              <p class="direction-reveal__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore eritatis et quasi.</p>
            </div>
          </a>
        </div>
      </div>
      <div class="column">
        <div class="port">
          <a href="#" class="direction-reveal__card">
            <img src="./assets/img/xavier-teo-469050-unsplash.jpg" alt="Image" width="600px" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66">

            <div class="direction-reveal__overlay direction-reveal__anim--in">
              <h3 class="direction-reveal__title">Lorem ipsum</h3>
              <p class="direction-reveal__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore eritatis et quasi.</p>
            </div>
          </a>
        </div>
      </div>
      <div class="column">
        <div class="port">
          <a href="#" class="direction-reveal__card">
            <img src="./assets/img/xavier-teo-469050-unsplash.jpg" alt="Image" width="600px" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66">

            <div class="direction-reveal__overlay direction-reveal__anim--in">
              <h3 class="direction-reveal__title">Lorem ipsum</h3>
              <p class="direction-reveal__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore eritatis et quasi.</p>
            </div>
          </a>
        </div>
      </div>
  </div>
</div>






</main>
<?php get_footer(); ?>
