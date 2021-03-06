<?php 

add_action( 'after_setup_theme', 'oylg2013_setup' );

if ( ! function_exists( 'oylg2013_setup' ) ):

function oylg2013_setup() {

	// post-thumb active!
	add_theme_support( 'post-thumbnails' );

}
endif;

/* wp_nav_menu() fonk., anasayfayi gosterme */
function oylg2013_page_menu_args( $args ) {
	$args['show_home'] = false;
	return $args;
}
add_filter( 'wp_page_menu_args', 'oylg2013_page_menu_args' );

/* register sidebars */
function oylg2013_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Header', 'oylg2013' ),
		'id' => 'header',
		'before_widget' => '',
		'after_widget' => "",
		'before_title' => '<h2 style="display:none">',
		'after_title' => '</h2>',
	) );

	register_sidebar( array(
		'name' => __( 'Footer', 'oylg2013' ),
		'id' => 'footer',
		'before_widget' => '',
		'after_widget' => "",
		'before_title' => '<h2 style="display:none">',
		'after_title' => '</h2>',
	) );

}
add_action( 'widgets_init', 'oylg2013_widgets_init' );


/* list sub-pages */
function oylg2013_list_pages( $pageid ) {
	$parent_id = get_post_ancestors( $pageid );
	$parent_id = $parent_id[0];
	if($parent_id) $pageid = $parent_id;
	
	$args = array(
		'depth'        => 0,
		'show_date'    => '',
		'date_format'  => get_option('date_format'),
		'child_of'     => $pageid,
		'exclude'      => '',
		'include'      => '',
		'title_li'     => '',
		'echo'         => 1,
		'authors'      => '',
		'sort_column'  => 'menu_order',
		'link_before'  => '',
		'link_after'   => '',
		'walker'       => '' );
	
	return wp_list_pages($args);
}