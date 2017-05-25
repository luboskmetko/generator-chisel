<?php
/**
 * Plugin Name:
 * Description: Custom functionality plugin for
 * Version: 0.0.1
 * Author:
 */

// If this file is called directly, abort.
if ( !defined( 'WPINC' ) ) {
	die;
}

use Site\Analytics;
use Site\Media;
use Site\Performance;
use Site\PostTypes;
use Site\Taxonomies;
use Site\Security;

// Autoload function
spl_autoload_register( 'plugin_autoloader' );

function plugin_autoloader( $class_name ) {
	if ( false !== strpos( $class_name, 'Site' ) ) {
		$classes_dir = realpath( plugin_dir_path( __FILE__ ) ) . DIRECTORY_SEPARATOR;
		$class_file = str_replace( '\\', DIRECTORY_SEPARATOR, $class_name ) . '.php';
		require_once $classes_dir . $class_file;
	}
}

// Initiate functionality
add_action( 'plugins_loaded', 'plugin_init' );

function plugin_init() {
	(new Analytics)->run();
	(new Media)->run();
	(new Performance)->run();
	(new PostTypes)->run();
	(new Taxonomies)->run();
	(new Security)->run();
}
