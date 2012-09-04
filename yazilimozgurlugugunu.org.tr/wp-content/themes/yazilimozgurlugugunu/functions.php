<?php 

add_action( 'after_setup_theme', 'yazilimozgurlugugunu_setup' );

if ( ! function_exists( 'yazilimozgurlugugunu_setup' ) ):

function yazilimozgurlugugunu_setup() {

	// post-thumb active!
	add_theme_support( 'post-thumbnails' );

}
endif;