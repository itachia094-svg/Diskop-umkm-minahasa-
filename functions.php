<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Patterns Political functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Patterns Political
 */

/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'PATTERNS_POLITICAL_PATH', trailingslashit( get_template_directory() ) );
define( 'PATTERNS_POLITICAL_URL', trailingslashit( get_template_directory_uri() ) );
define( 'PATTERNS_POLITICAL_VERSION', '1.0.0' );
define( 'PATTERNS_POLITICAL_THEME_NAME', 'patterns-political' );
define( 'PATTERNS_POLITICAL_OPTION_NAME', 'patterns-political' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require PATTERNS_POLITICAL_PATH . 'includes/main.php';

/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function patterns_political_run() {
	new Patterns_Political();
}
patterns_political_run();
