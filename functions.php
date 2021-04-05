<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'HALEN_DIR_URI' ) ) {
	define( 'HALEN_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'HALEN_DIR_ASSETS_URI' ) ) {
	define( 'HALEN_DIR_ASSETS_URI', HALEN_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'HALEN_DIR_CSS_URI' ) ) {
	define( 'HALEN_DIR_CSS_URI', HALEN_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'HALEN_DIR_JS_URI' ) ) {
	define( 'HALEN_DIR_JS_URI', HALEN_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'HALEN_DIR_IMGS_URI' ) ) {
	define( 'HALEN_DIR_IMGS_URI', HALEN_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'HALEN_DIR_ICON_IMG_URI' ) ) {
	define( 'HALEN_DIR_ICON_IMG_URI', HALEN_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'HALEN_DIR_PATH' ) ) {
	define( 'HALEN_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'HALEN_DIR_PATH_INC' ) ) {
	define( 'HALEN_DIR_PATH_INC', HALEN_DIR_PATH . 'inc/' );
}

//Halen Libraries Folder Directory
if ( ! defined( 'HALEN_DIR_PATH_LIBS' ) ) {
	define( 'HALEN_DIR_PATH_LIBS', HALEN_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'HALEN_DIR_PATH_CLASSES' ) ) {
	define( 'HALEN_DIR_PATH_CLASSES', HALEN_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'HALEN_DIR_PATH_HOOKS' ) ) {
	define( 'HALEN_DIR_PATH_HOOKS', HALEN_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function halen_admin_script(){
    wp_enqueue_style( 'halen-admin', get_template_directory_uri().'/assets/css/halen-admin.css', false, '1.0.0' );
    wp_enqueue_script( 'halen_admin', get_template_directory_uri().'/assets/js/halen-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'halen_admin_script' );



/**
 * Include File
 *
 */
require_once( HALEN_DIR_PATH_INC . 'halen-breadcrumbs.php' );
require_once( HALEN_DIR_PATH_INC . 'halen-widgets-reg.php' );
require_once( HALEN_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( HALEN_DIR_PATH_INC . 'post-like.php' );
require_once( HALEN_DIR_PATH_INC . 'halen-functions.php' );
require_once( HALEN_DIR_PATH_INC . 'halen-commoncss.php' );
require_once( HALEN_DIR_PATH_INC . 'support-functions.php' );
require_once( HALEN_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( HALEN_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( HALEN_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( HALEN_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( HALEN_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( HALEN_DIR_PATH_HOOKS . 'hooks.php' );
require_once( HALEN_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( HALEN_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( HALEN_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Halen object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Halen = new Halen();