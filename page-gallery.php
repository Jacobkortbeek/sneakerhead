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
<?php $galArray = Array(); ?>
<?php $iNum=0; if( have_rows('gallery_images') ): while ( have_rows('gallery_images') ) : the_row(); ?>

<?php $iNum++; endwhile; endif; ?>
<?php  echo $iNum; $iNumFourth = $iNum / 4; $iNumRound =  round($iNumFourth); echo $iNumFourth; echo$iNumRound; ?>
  <div class="ui four column stackable padded equal height grid gallery">
    <?php if( have_rows('gallery_images') ): ?>
      <?php echo sizeof('gallery_images'); ?>
      <?php $i=0; while ( have_rows('gallery_images') ) : the_row(); ?>
        <?php if ($i===0) : ?>
    <div class="column">
    <?php endif; ?>
    <?php echo $i; ?>
      <div class="ui segment">
        <img src="<?php the_sub_field( 'gallery_image' ) ?>" alt="" data-focus-left=".30" data-focus-top=".12" data-focus-right=".79" data-focus-bottom=".66" />
      </div>
      <?php if ($i===1) : ?>
    </div>
    <?php endif; ?>
    <?php if($i===0) :
      $i++;
     elseif ($i===1) :
       $i=0;
     endif;?>
  <?php endwhile; ?>
  <?php endif; ?>

  </div>





</main>
<?php get_footer(); ?>
