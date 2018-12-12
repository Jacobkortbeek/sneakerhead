<?php
/**
 * Template Name: About Page
 *
 */
?>
<?php get_header(); ?>
<main class="about">
  <div class="ui hidden divider"></div>
  <!-- About -->
  <div class="about ui grid stackable container">
    <?php get_template_part( 'template-parts/typed', 'none' ); ?>
    <div class="two column row">
      <div class="column">
        <p>
          <?php the_field( 'about_text' ); ?>
        </p>
      </div>
      <div class="column">
        <div class="img">
          <?php if ( get_field( 'about_image') ) { ?>
	<img src="<?php the_field( 'about_image' ); ?>" />
<?php } ?>
        </div>
      </div>
    </div>
  </div>

  <div class="ui hidden divider"></div>


  <!-- Turntable -->
  <?php if( have_rows('turn_table_one') ): ?>


  <div class="turntable-ui ui grid" id="myTurntableTwo">
    <div class="sixteen wide column">
      <div class="turntable">
        <ul>
          <?php while ( have_rows('turn_table_one') ) : the_row(); ?>
          <li data-img-src="<?php the_sub_field('turntable_one_image'); ?>"></li>
        <?php endwhile; ?>
        </ul>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php if( have_rows('turn_table_two') ): ?>


<div class="turntable-ui ui grid" id="myTurntable">
  <div class="sixteen wide column">
    <div class="turntable">
      <ul>
        <?php while ( have_rows('turn_table_two') ) : the_row(); ?>
        <li data-img-src="<?php the_sub_field('turntable_two_image'); ?>"></li>
      <?php endwhile; ?>
      </ul>
    </div>
  </div>
</div>
<?php endif; ?>

<?php if( have_rows('turn_table_three') ): ?>


<div class="turntable-ui ui grid" id="myTurntableThree">
  <div class="sixteen wide column">
    <div class="turntable">
      <ul>
        <?php while ( have_rows('turn_table_three') ) : the_row(); ?>
        <li data-img-src="<?php the_sub_field('turntable_three_image'); ?>"></li>
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
      <h2 class="ui huge header"> More About US </h2>
    </div>
    <div class="two column row">
      <div class="column">
        <div class="img">
          <img src="./assets/img/hermes-rivera-770599-unsplash.jpg" alt="">
        </div>
      </div>
      <div class="column">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
  </div>

  <div class="ui hidden divider"></div>





</main>
<?php get_footer(); ?>
