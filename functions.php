
<?php
function Iankirkwood() {
  wp_enqueue_style('style',get_stylesheet_uri());


add_action('wp_enqueue_scripts', 'Iankirkwood');


//navigation
  register_nav_menus(array(
'primary' => __('Primary Menu'),
'footer' => __('Footer Menu'),
));


//adding featured image
add_theme_support('post-thumblines');
}
  add_action('after_setup_theme','Iankirkwood');
