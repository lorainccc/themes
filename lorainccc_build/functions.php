<?php
/**
 * lorainccc functions and definitions
 *
 * @package lorainccc
 */

function lorainccc_fonts(){
	
	$query_args = array(
		'family' => 'Open+Sans:400,700|Raleway:400,700'
		'subset' => 'latin,latin-ext',
	);
	
	wp_register_style( 'lorainccc_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null);
	
}
add_action('wp_enqueue_scripts' 'lorainccc_fonts');

function lorainccc_scripts() {

	/* ----- Add Parent Theme Styles ----- */
	/* Add Foundation CSS */

	wp_enqueue_style( 'foundation-normalize', get_template_directory_uri() . '/foundation/css/normalize.css' );
	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/foundation/css/foundation.min.css' );

	/* Add Parent CSS */

	wp_enqueue_style( 'lccc-framework-style', get_template_directory_uri() . '/style.css', array(), '1' );

	/* Add Foundation JS */

	wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/foundation/js/foundation.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'foundation-modernizr-js', get_template_directory_uri() . '/foundation/js/vendor/modernizr.js', array( 'jquery' ), '1', true );
	/* Foundation Init JS */

	wp_enqueue_script( 'foundation-init-js', get_template_directory_uri() . '/foundation.js', array( 'jquery' ), '1', true );

		/* Foundation Icons */
	if ( wp_style_is( 'foundation_font_icon_css', 'enqueued' ) ) {
		return;
	}else{
			wp_enqueue_style('foundation_font_icon_css', get_template_directory_uri() . '/foundation-icons/foundation-icons.css');
	}
	/* ----- End Foundation Support ----- */

	wp_enqueue_script( 'lorainccc-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'lccc-framework-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	/* Add Child Theme CSS */
	
	wp_enqueue_style( 'lorainccc-style', get_stylesheet_uri() );
	
}
add_action( 'wp_enqueue_scripts', 'lorainccc_scripts' );

?>