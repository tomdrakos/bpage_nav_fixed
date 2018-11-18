<?php
// Include custom navwalker
require_once('bs4navwalker.php');

// Register WordPress nav menu
register_nav_menu( 'primary', 'Primary Menu' );

if( !defined('THEME_DIR') )
	define('THEME_DIR', get_theme_root().'/'.get_template().'/');
if( !defined('THEME_URL') )
	define('THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

/* Przeladowanie rewrite rules */
add_action( 'after_switch_theme', 'bt_flush_rewrite_rules' );
function bt_flush_rewrite_rules() {
     flush_rewrite_rules();
}

add_theme_support( 'post-thumbnails' ); 
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 500, 250, true ); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
}

function font_awesome_url(){ return 'https://use.fontawesome.com/releases/v5.4.1/css/all.css'; }

/*remove 32px admin bar maring */
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

//Live reload https://medium.com/@maicc/how-to-wordpress-live-reload-2cd12a19357c
function liveReload(){
    echo '<script>document.write(\'<script src="http://\' + (location.host || \'localhost\').split(\':\')[0] +\':35729/livereload.js?snipver=1"></\' + \'script>\')</script>';
   }
   add_action( 'wp_footer', 'liveReload',100 );
?>