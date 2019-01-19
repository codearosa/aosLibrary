<?php
/*
Plugin Name: AOS Library
Plugin URI: https://github.de/fidentia
Description: Initialize AOS Library in WordPress
Version: 1.0
Author: Melanie Müller
Author URI: http://codearosa.de
License: MIT
*/

//jQuery to footer
function aos_library_function() {

  wp_enqueue_script( 'aosstyle', plugins_url( 'aos-2/dist/aos.js', __FILE__ ), array( 'jquery' ) );
  wp_enqueue_style('aosstyle-css', plugins_url( 'aos-2/dist/aos.css', __FILE__ ), array(), '1.1', 'all' );
}

add_action('wp_enqueue_scripts','aos_library_function');
