<div class="sixteen wide column typed">
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
