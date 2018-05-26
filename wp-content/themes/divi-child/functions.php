<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function print_menu_shortcode($atts, $content = null) {
    extract(shortcode_atts(array( 'name' => null, ), $atts));
    return wp_nav_menu( array( 'menu' => $name, 'echo' => false ) );
}
add_shortcode('menu', 'print_menu_shortcode');

function monarchShortcode() {
  $monarch = $GLOBALS['et_monarch'];
  $monarch_options = $monarch->monarch_options;
  return $monarch->generate_inline_icons('et_social_inline_top');
}

add_shortcode('social_share', 'monarchShortcode');