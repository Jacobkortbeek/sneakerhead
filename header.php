<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
  </head>
  <body>

  <div class="loader" id="load typedLoad">
    <div class="loaderIcon">
      <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
    </div>
  </div>

    <div class="ui sticky top attached menu fixed top" id="menu">
<a class="item">
  <i class="sidebar icon"></i>
  Menu
</a>
</div>
<div class="ui sidebar inverted vertical menu">
  <a href="index.html" class="item">
 Home
 </a>
  <a href="about.html" class="item">
 About
 </a>
  <a href="portfolio.html" class="item">
 Portfolio
 </a>
 <a href="gallery.html" class="item">
 Gallery
 </a>
 <a href="blog.html" class="item">
 Blog
 </a>
 <a href="contact.html" class="item">
 Contact
 </a>
</div>
<div class="pusher">
