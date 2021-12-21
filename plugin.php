<?php
/**
 * Plugin Name: Content and Media Block
 * Plugin URI: https://github.com/richardmscott/striped-content-media-block/
 * Description: Striped Content and Media Block - a more flexible, user friendly content and media block
 * Author: Richard Scott
 * Author URI: https://rscottdesign.co.uk
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
