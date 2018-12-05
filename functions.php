<?php
function wpt_theme_styles() {
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css?family=KoHo' );
  wp_enqueue_style( 'semantic_ui', get_template_directory_uri() . '/css/semantic.min.css' );
  wp_enqueue_style( 'direction_reveal', get_template_directory_uri() . '/css/direction-reveal.css' );
  wp_enqueue_style( 'turn_table', get_template_directory_uri() . '/css/turntable.css' );
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

function wpt_theme_js() {
  wp_enqueue_script( 'semantic_js', get_template_directory_uri() . '/js/semantic.js', array('jquery'), ' ', true );
  wp_enqueue_script( 'turntable_js', get_template_directory_uri() . '/js/turntable.js', array('jquery'), ' ', true );
  wp_enqueue_script( 'typed_js', get_template_directory_uri() . '/js/typed.js', array('jquery'), ' ', true );
  wp_enqueue_script( 'responsify_js', get_template_directory_uri() . '/js/responsify.js', array('jquery'), ' ', true );
  wp_enqueue_script( 'matchHeight_js', get_template_directory_uri() . '/js/jquery.matchHeight.js', array('jquery'), ' ', true );
  wp_enqueue_script( 'direction-reveal_js', get_template_directory_uri() . '/js/bundle.js', array('jquery'), ' ', true );
  wp_enqueue_script( 'functions_js', get_template_directory_uri() . '/js/functions.js', array('jquery'), ' ', true );
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );
?>
