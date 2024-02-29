<?php
/**
 * Twenty Twenty-Four functions and definitions
 */

add_theme_support('woocommerce');
add_theme_support('post-thumbnails');
require_once('includes/settings.php');
register_nav_menus(array(
   'header' => 'Header',
   'footer1' => 'Footer 1',
   'footer2' => 'Footer 2',
   'footer3' => 'Footer 3',
   'footer4' => 'Footer 4',
   'bottom'  => 'Bottom'
));
