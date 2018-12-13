<?php
/**
 * Template Name: Gallery Page
 *
 */
?>
<?php get_header(); ?>
<main class="gallery">
  <div class="heading ui center aligned segment" style="background-image: linear-gradient( rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25) ), url('<?php the_field( 'header_image' ); ?>')!important;">
    <div class="ui text container">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>

  <div class="ui hidden divider"></div>

  <div class="ui four column stackable padded equal height grid gallery">
    <?php if( have_rows('gallery_images') ): ?>
      <?php $i=0; while ( have_rows('turn_table_one') ) : the_row(); ?>
        <?php if ($i===0) : ?>
    <div class="column">
    <?php endif; ?>
    <?php echo $i; ?>
      <div class="ui segment">
        <img src="./assets/img/hermes-rivera-770599-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
      </div>
      <div class="ui segment">
        <img src="./assets/img/satria-aditya-782549-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
      </div>
      <?php if ($i===1) : ?>
    </div>
    <?php $i=0; endif; ?>
  <?php $i++; endwhile; ?>
  <?php endif; ?>
    <div class="column">
      <div class="ui segment">
        <img src="./assets/img/xavier-teo-469050-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
      </div>
      <div class="ui segment">
        <img src="./assets/img/malvestida-magazine-458582-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
      </div>
    </div>
    <div class="column">
      <div class="ui segment">
        <img src="./assets/img/joseph-barrientos-82309-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
      </div>
      <div class="ui segment">
        <img src="./assets/img/nicholas-bui-634691-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
      </div>
    </div>
    <div class="column">
      <div class="ui segment">
        <img src="./assets/img/paul-volkmer-522844-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
      </div>
      <div class="ui segment">
        <img src="./assets/img/greg-tockner-386877-unsplash.jpg" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
      </div>
    </div>
  </div>





</main>
<?php get_footer(); ?>
