<?php

// Theme will only work for WordPress 4.9.6 or later.
if (version_compare($GLOBALS['wp_version'], '4.9.6', '<')) {
    die('This theme only works in WordPress 4.9.6 or later. ');
}

/**
 * This function will load in both our styles/scripts into our
 * project correctly. Make sure you include wp_head at the end of your </head>
 * and wp_footer at the end of before closing </body>
 *
 * @link https://developer.wordpress.org/themes/basics/including-css-javascript/
 */
function load_theme_assets()
{
    // You can include these parameters:
    // $handle is simply the name of the stylesheet.
    // $src is where it is located. The rest of the parameters are optional.
    // $deps refers to whether or not this stylesheet is dependent on another stylesheet. If this is set, this stylesheet will not be loaded unless its dependent stylesheet is loaded first.
    // $ver sets the version number.
    // $media can specify which type of media to load this stylesheet in, such as ‘all’, ‘screen’, ‘print’ or ‘handheld.’

    wp_enqueue_style('style', get_template_directory_uri() . '/dist/css/styles.css');
    wp_enqueue_style('font-style','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

    wp_enqueue_script('fonts', 'https://fonts.googleapis.com/css?family=BioRhyme|Cabin');
    wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/main.js ');
}
add_action('wp_enqueue_scripts', 'load_theme_assets');

/**
 * This function will register the navigation menus.
 * You can call display the menu by calling wp_nav_menu() in your templates
 *
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 * @method register_nav_menus
 */
function register_menus()
{
    register_nav_menus([
        'main'   => __('Main Navigation'),
        'footer' => __('Footer Navigation'),
    ]);
}

add_action('init', 'register_menus');

/**
 * Register our sidebars and widgets into our theme
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function register_widgets()
{
    register_sidebar([
        'name'          => 'Blog Sidebar',
        'id'            => 'sidebar',
    ]);
}

add_action('widgets_init', 'register_widgets');
add_theme_support('post-thumbnails');

function my_nav_wrap() {
  // default value of 'items_wrap' is <ul id="%1$s" class="%2$s">%3$s</ul>'
  
  // open the <ul>, set 'menu_class' and 'menu_id' values
  $wrap  = '<ul class="%2$s">';
  
  // the static link 
  $wrap .= '<li><a href="javascript:void(0)" class="close" onclick="closeMenu()">&times;</a></li>';
    
  // get nav items as configured in /wp-admin/
  $wrap .= '%3$s';
  
  // the static link 
  $wrap .= '<li><div class="searchContainer"> <form action="search.php"> <input type="text" placeholder="Search..." name="search"><button type="submit"><i class="fa fa-search"></i></button></form></div></li>';
  
  // close the <ul>
  $wrap .= '</ul>';
  // return the result
  return $wrap;
}
