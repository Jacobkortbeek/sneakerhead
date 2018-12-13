<footer>

<div class="ui grid stackble">
  <div class="row stackable">
    <div class="eight wide column very padded">
      <div class="content">
        <h2 class="header">Title</h2>
          <?php if( !dynamic_sidebar( 'footer-text' )) : ?>
            no sidebar text
          <?php endif; ?>
      </div>
    </div>
    <div class="four wide column very padded">
      <?php if( !dynamic_sidebar( 'menu-one' )) : ?>
        no sidebar text
      <?php endif; ?>
    </div>
    <div class="four wide column very padded">
      <?php if( !dynamic_sidebar( 'menu-two' )) : ?>
        no sidebar text
      <?php endif; ?>
    </div>
  </div>
</div>
  <?php wp_footer(); ?>
</footer>
</div>
</body>
</html>
