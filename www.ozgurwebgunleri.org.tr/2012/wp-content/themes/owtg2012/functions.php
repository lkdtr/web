<?php 

add_action( 'after_setup_theme', 'owtg2012_setup' );

if ( ! function_exists( 'owtg2012_setup' ) ):

function owtg2012_setup() {

	// post-thumb active!
	add_theme_support( 'post-thumbnails' );

}
endif;

/* wp_nav_menu() fonk., anasayfayi gosterme */
function owtg2012_page_menu_args( $args ) {
	$args['show_home'] = false;
	return $args;
}
add_filter( 'wp_page_menu_args', 'owtg2012_page_menu_args' );

/* register sidebars */
function owtg2012_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Left', 'owtg2012' ),
		'id' => 'left',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Right', 'owtg2012' ),
		'id' => 'right',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );

}
add_action( 'widgets_init', 'owtg2012_widgets_init' );