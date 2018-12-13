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

    <div class="ui top attached sticky menu fixed top" id="menu">
<a class="item">
  <i class="sidebar icon"></i>
  Menu
</a>
</div>
<div class="ui sidebar inverted vertical menu">
  <?php

              $defaults = array(
                'container' => 'ul',
                'theme_location' => 'primary-menu',
                'menu_class' => 'navbar-nav'
              );

              wp_nav_menu( $defaults );

            ?>
</div>
<div class="pusher">
