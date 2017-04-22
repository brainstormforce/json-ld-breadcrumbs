<?php
/**
 * Plugin Name:     Invisible Breadcrumbs
 * Plugin URI:      https://www.nikhilchavan.com/
 * Description:     Adds JSON-LD based Breadcrumbs schema to your site visible only to the Search Engines.
 * Author:          Nikhil Chavan
 * Author URI:      https://www.nikhilchavan.com/
 * Text Domain:     invisible-breadcrumbs
 * Domain Path:     /languages
 * Version:         1.0.0
 *
 * @package         Invisible_Breadcrumbs
 */

// Exit if the file is called directy by URL.
defined( 'ABSPATH' ) or exit;

define( 'INVISIBLE_BREADCRUMBS_VER', '1.0.0' );
define( 'INVISIBLE_BREADCRUMBS_DIR', plugin_dir_path( __FILE__ ) );
define( 'INVISIBLE_BREADCRUMBS_URL', plugins_url( '/', __FILE__ ) );
define( 'INVISIBLE_BREADCRUMBS_PATH', plugin_basename( __FILE__ ) );

// Boorstrap the plugin.
include 'class-invisible-breadcrumbs.php';
add_action( 'wp', 'Invisible_Breadcrumbs::instance' );
