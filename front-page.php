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
      <?php if( have_rows( 'typed_colour_words' ) ) : $i = 0; while ( have_rows( 'typed_colour_words' ) ) : the_row(); ?>
      <p id="test<?php echo $i; ?>"><?php the_field( 'typed_main_sentence' ); ?> <?php the_sub_field( 'coloured_word' ); ?></p>
    <?php $i++; endwhile; endif; ?>
      <h2 class="ui huge header" id="typed"> <strong></strong> </h2>
    </div>
    <div class="two column row">
      <div class="column">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
      <div class="column">
        <div class="img">
          <img src="./assets/img/hermes-rivera-770599-unsplash.jpg" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="ui hidden divider"></div>

  <!-- Portfolio -->
  <div class="ui grid stackable container portfolio direction-reveal direction-reveal--demo-swing">
    <div class="two column row">
      <div class="column">
        <div class="port">
          <a href="#" class="direction-reveal__card">
            <img src="./assets/img/resized/hermes-rivera-770599-unsplash.jpg" alt="Image" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66">

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
            <img src="./assets/img/resized/satria-aditya-782549-unsplash.jpg" alt="Image" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66">

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
            <img src="./assets/img/resized/joseph-barrientos-82309-unsplash.jpg" alt="Image" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66">

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
            <img src="./assets/img/resized/xavier-teo-469050-unsplash.jpg" alt="Image" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66">

            <div class="direction-reveal__overlay direction-reveal__anim--in">
              <h3 class="direction-reveal__title">Lorem ipsum</h3>
              <p class="direction-reveal__text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore eritatis et quasi.</p>
            </div>
          </a>
        </div>
      </div>
  </div>
</div>

<div class="ui hidden divider"></div>

  <!-- Rosponsify gallery -->
  <div class="ui four column stackable padded equal height grid gallery">
    <div class="column">
      <div class="ui segment">
        <img src="./assets/img/hermes-rivera-770599-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
      </div>
      <div class="ui segment">
        <img src="./assets/img/satria-aditya-782549-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
      </div>
    </div>
    <div class="column computer only tablet only">
      <div class="ui segment">
        <img src="./assets/img/xavier-teo-469050-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
      </div>
      <div class="ui segment">
        <img src="./assets/img/malvestida-magazine-458582-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
      </div>
    </div>
    <div class="column computer only tablet only">
      <div class="ui segment">
        <img src="./assets/img/joseph-barrientos-82309-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
      </div>
      <div class="ui segment">
        <img src="./assets/img/nicholas-bui-634691-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
      </div>
    </div>
    <div class="column computer only tablet only">
      <div class="ui segment">
        <img src="./assets/img/paul-volkmer-522844-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
      </div>
      <div class="ui segment">
        <img src="./assets/img/greg-tockner-386877-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
      </div>
    </div>
  </div>

  <div class="ui hidden divider"></div>

  <!-- BLog -->
  <div class="ui three column container stackable grid">
    <div class="column">
      <div class="ui fluid card">
        <div class="image">
          <img src="./assets/img/paul-volkmer-522844-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
        </div>
        <div class="content">
          <div class="header">
            <h2>Title</h2>
          </div>
          <div class="meta">
            <a>Tag</a>
          </div>
          <div class="description">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>
        <div class="extra content">
          <button class="ui button">Read More</button>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="ui fluid card">
        <div class="image">
          <img src="./assets/img/paul-volkmer-522844-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
        </div>
        <div class="content">
          <div class="header">
            <h2>Title</h2>
          </div>
          <div class="meta">
            <a>Tag</a>
          </div>
          <div class="description">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>
        <div class="extra content">
          <button class="ui button">Read More</button>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="ui fluid card">
        <div class="image">
          <img src="./assets/img/paul-volkmer-522844-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
        </div>
        <div class="content">
          <div class="header">
            <h2>Title</h2>
          </div>
          <div class="meta">
            <a>Tag</a>
          </div>
          <div class="description">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>
        <div class="extra content">
          <button class="ui button">Read More</button>
        </div>
      </div>
    </div>

  </div>
</main>


<?php get_footer(); ?>
