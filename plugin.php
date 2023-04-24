<?php
/**
 * BLOG_template
 *
 * @package           figuren-theater/BLOG_template
 * @author            figuren.theater
 * @copyright         2022 figuren.theater
 * @license           GPL-3.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       figuren.theater | blog_template
 * Plugin URI:        https://github.com/figuren-theater/BLOG_template
 * Description:       ... like the figuren.theater WordPress Multisite network.
 * Version:           1.0.0
 * Requires at least: 6.0
 * Requires PHP:      7.2
 * Author:            figuren.theater
 * Author URI:        https://figuren.theater
 * Text Domain:       figurentheater
 * Domain Path:       /languages
 * License:           GPL v3 or later
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Update URI:        https://github.com/figuren-theater/BLOG_template
 */
namespace Figuren_Theater\blog_template;

const DIRECTORY = __DIR__;

add_action( 'altis.modules.init', __NAMESPACE__ . '\\register' );
