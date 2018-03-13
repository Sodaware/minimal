<?php
/**
 * functions.php
 *
 * Shared functionality used by the theme. Sets up theme options and contains
 * helper functions for displaying things
 *
 * @package    MinimalTheme
 * @subpackage Functions
 * @author     Phil Newton <phil@sodaware.net>
 * @copyright  2012 Phil Newton
 * @version    $Id$
 */


// ----------------------------------------------------------------------
// -- Theme Setup
// ----------------------------------------------------------------------

// Hooks
add_action( 'init', 'minimal_setup_theme' );
add_action( 'wp_head', 'minimal_minify_location', 99 );

add_theme_support( 'title-tag' );


// ----------------------------------------------------------------------
// -- Theme Setup Functions
// ----------------------------------------------------------------------

/**
 * Setup the theme sidebars, menus and external resources.
 */
function minimal_setup_theme() {
	minimal_setup_javascript();
	minimal_setup_stylesheets();
	minimal_setup_sidebars();
	minimal_setup_menus();
}

/**
 * Setup site javascript
 */
function minimal_setup_javascript() {

	// Don't load scripts in admin area as it stops jQuery from working
	if ( is_admin() ) {
		return;
	}

	// Remove jquery
	wp_deregister_script( 'jquery' );
	wp_deregister_script( 'simple_google_analytics' );
	// Add modernizr for Internet Explorer.
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js' );
	wp_script_add_data( 'modernizr', 'conditional', 'IE' );

}

/**
 * Setup site stylesheets
 */
function minimal_setup_stylesheets() {

	if ( is_admin() ) {
		return;
	}

	// Theme stylesheet
	wp_enqueue_style( 'minimal', get_template_directory_uri() . '/style.css' );

	// Print stylesheet
	wp_enqueue_style( 'minimal-print', get_template_directory_uri() . '/print.css', null, false, 'print' );

}

/**
 * Registers theme sidebars with WordPress
 */
function minimal_setup_sidebars() {
	register_sidebar( array(
		'name'          => 'Primary Sidebar Widgets',
		'id'            => 'primary-sidebar',
		'description'   => 'Widgets that appear in the left sidebar',
		'before_widget' => '<section id="%1$s" class="%2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}

/**
 * Registers theme menus with WordPress
 */
function minimal_setup_menus() {

	register_nav_menus( array(
		'footer_links' => 'Footer Links',
	) );

}


// ----------------------------------------------------------------------
// -- Minify Helpers
// ----------------------------------------------------------------------

/**
 * If WP Minify is installed, sets the placement at the bottom of the header.
 * This means that minified files that require jQuery will still work as jQuery
 * will now load before, rather than after minified files.
 */
function minimal_minify_location() {
	if ( class_exists( 'WPMinify' ) ) {
		echo "<!-- WP-Minify JS -->\n";
		echo "<!-- WP-Minify CSS -->\n";
	}
}
