<?php
/**
 * KE Pitchfork Child theme functions and definitions
 *
 * @package ke-pitchfork-child
 */

 // Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Enqueue child scripts and styles.
 */
function ke_pitchfork_child_scripts() {
	// Get the theme data.
	$the_theme     = wp_get_theme();
	$theme_version = $the_theme->get( 'Version' );

	$css_child_version = $theme_version . '.' . filemtime( get_stylesheet_directory() . '/css/child-theme.min.css' );
	wp_enqueue_style( 'pitchfork-child-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array( 'pitchfork-styles' ), $css_child_version );

	$js_child_version = $theme_version . '.' . filemtime( get_stylesheet_directory() . '/js/child-theme.js' );
	wp_enqueue_script( 'pitchfork-child', get_stylesheet_directory_uri() . '/js/child-theme.js', array(), $js_child_version );

}
add_action( 'wp_enqueue_scripts', 'ke_pitchfork_child_scripts' );

/**
 * Enqueue the child-theme.css into the editor.
 */
function ke_pitchfork_child_css() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/child-theme.min.css' );

}
add_action( 'after_setup_theme', 'ke_pitchfork_child_css' );


/**
 * Other included partials for functions.php.
 *
 * NDR (2023-07-13): This is loading custom includes in one of Engineering's child themes that I was referencing.
 * Unsure if any of this would useful for us, I am leaving this code block in but commented out. I recommend reviewing
 * the pitchfork-innercircle child theme to determine what might be useful for us:
 * https://github.com/asuengineering/pitchfork-innercircle
 *  */
// ===============================================
// require get_stylesheet_directory() . '/inc/custom-post-types.php';
// require get_stylesheet_directory() . '/inc/acf-register.php';
// require get_stylesheet_directory() . '/inc/font-awesome-pro.php';
// require get_stylesheet_directory() . '/inc/event-line.php';
// require get_stylesheet_directory() . '/inc/uds-calendar-dates.php';
// require get_stylesheet_directory() . '/inc/calendar-date-validation.php';
// require get_stylesheet_directory() . '/inc/rest-api-extensions.php';
