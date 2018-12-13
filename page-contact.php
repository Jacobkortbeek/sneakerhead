<?php
/**
 * Template Name: Contact Page
 *
 */
?>
<?php get_header(); ?>
<main class="contact">
  <div class="heading ui center aligned segment" style="background-image: linear-gradient( rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25) ), url('<?php the_field( 'header_image' ); ?>')!important;">
    <div class="ui text container">
      <h1><?php the_field( 'title' ); ?></h1>
    </div>
  </div>
  <div class="ui hidden divider"></div>
  <div class="ui two column stackable grid container">
    <div class="column">
      <div class="ui list">
        <div class="item">
          <i class="users icon"></i>
          <div class="content">
            <p><?php the_field( 'company_name' ); ?></p>
          </div>
        </div>
        <div class="item">
          <i class="marker icon"></i>
          <div class="content">
            <p><?php the_field( 'location' ); ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="ui list">
        <div class="item">
          <i class="mail icon"></i>
          <div class="content">
            <a href="mailto:<?php the_field( 'email_address' ); ?>"><p><?php the_field( 'email_address' ); ?></p></a>
          </div>
        </div>
        <div class="item">
          <i class="linkify icon"></i>
          <div class="content">
            <a href="http://<?php the_field( 'website' ); ?>"><p><?php the_field( 'website' ); ?></p></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ui hidden divider"></div>
  <div class="ui container">
    <form class="ui form">
      <div class="field">
        <label>First Name</label>
        <input type="text" name="first-name" placeholder="First Name">
      </div>
      <div class="field">
        <label>Last Name</label>
        <input type="text" name="last-name" placeholder="Last Name">
      </div>
      <div class="field">
        <label>Text</label>
        <textarea></textarea>
      </div>
      <button class="ui button" type="submit">Submit</button>
    </form>
  </div>
  <div class="ui hidden divider"></div>


</main>
<?php get_footer(); ?>
