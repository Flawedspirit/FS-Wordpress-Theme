<?php
/**
 * Flawedspirit WP Theme functions and definitions
 * 
 * @author Flawedspirit
 * @package FlawedspiritWP
 * @since 1.0.0
 */

/**
* Bootstrap submenu walker.
*/
require_once get_template_directory() . '/vendor/class-wp-bootstrap-navwalker.php';

if (function_exists('add_theme_support')) {

    // Support for navbar menu
    add_theme_support('menus');

    // Support for featured images in posts
    add_theme_support('post-thumbnails');

    add_image_size('largest',   1600, 1600, false);
    add_image_size('large',     800, 800,   false);
    add_image_size('medium',    480, 480,   false);
    add_image_size('small',     240, 240,   false);
    add_image_size('smallest',  160, 160,   false);
    add_image_size('post_head', 730, 450,   true);
    add_image_size('thumbnail', 160, 160,   true);

    // Support for custom banner header
    $header_args = array(
        'default-image' => get_template_directory_uri() . '/images/banner.png',
        'width'         => 1920,
        'height'        => 300,
        'flex-width'    => false,
        'flex-height'   => false
    );
    add_theme_support('custom-header', $header_args);

    // Support for localization
    load_theme_textdomain('flawedspirit-wp', get_template_directory() . '/languages');
}

function flawedspirit_wp_load_stylesheets() {

    wp_register_style('theme-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_register_style('theme-default', get_template_directory_uri() . '/style.css', array('theme-bootstrap'), @md5_file(get_template_directory_uri() . '/style.css'), 'all');
    wp_register_style('font-el-messiri', 'https://fonts.googleapis.com/css?family=El+Messiri:400,500,700', array(), null, 'all');

    wp_enqueue_style('theme-bootstrap');
    wp_enqueue_style('theme-default');
    wp_enqueue_style('font-el-messiri');
}

function flawedspirit_wp_load_javascript() {

    // Ensure we are using the proper version of jquery for Bootstrap
    wp_deregister_script('jquery');

    wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '3.3.1', false);
    wp_register_script('js-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
    wp_register_script('js-default', get_template_directory_uri() . '/js/scripts.js', array('jquery'), @md5_file(get_template_directory_uri() . '/js/scripts.js'), true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('js-bootstrap');
    wp_enqueue_script('js-default');
}

function flawedspirit_wp_init_nav() {

    register_nav_menus(
        array(
            'header-nav' => __('Navbar', 'flawedspirit-wp')
        )
    );
}

function remove_admin_bar() {

    if(!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}

function trim_excerpt($text) {

    $text = str_replace('[&hellip;]', '...', $text);
    return $text;
}

function unset_comment_urls($fields) {

    unset($fields['url']);
    return $fields;
}

function set_comment_field_order($fields) {

    $comment_field = $fields['comment'];

    if(isset($fields['comment'])) unset($fields['comment']);
    $fields['comment'] = $comment_field;    
    return $fields;
}

add_action('wp_enqueue_scripts', 'flawedspirit_wp_load_stylesheets');
add_action('wp_enqueue_scripts', 'flawedspirit_wp_load_javascript');
add_action('init', 'flawedspirit_wp_init_nav');
add_action('after_setup_theme', 'remove_admin_bar');

add_filter('comment_form_fields', 'set_comment_field_order');
add_filter('comment_form_default_fields', 'unset_comment_urls');
add_filter('get_the_excerpt', 'trim_excerpt');

?>
