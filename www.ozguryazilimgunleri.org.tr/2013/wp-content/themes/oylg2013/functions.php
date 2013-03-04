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
		'name' => __( 'Footer', 'lkd_kamp' ),
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

/* list images */
function oylg2013_list_images( $pageid ) {
		
	$args = array(
	'order'          => 'ASC',
	'orderby'        => 'menu_order',
	'post_type'      => 'attachment',
	'post_parent'    => $pageid,
	'post_mime_type' => 'image,video,text',
	'post_status'    => null,
	'numberposts'    => -1,
	);
	$attachments = get_posts($args);

		if ($attachments) {
			echo '<div id="slider">';
		    foreach ($attachments as $attachment) {
		    	$attachement_url=wp_get_attachment_url($attachment->ID);
		    	echo "<li>";
		    	if(stristr($attachment->post_mime_type, "video/")!==FALSE) {
		    		echo "<object width=\"736\" height=\"358\" id=\"undefined\" name=\"undefined\" data=\"".get_template_directory_uri()."/js/player.swf\" type=\"application/x-shockwave-flash\"><param name=\"movie\" value=\"".get_template_directory_uri()."/js/player.swf\" /><param name=\"allowfullscreen\" value=\"true\" /><param name=\"allowscriptaccess\" value=\"always\" /><param name=\"flashvars\" value='config={\"clip\":{\"url\":\"".$attachement_url."\",\"scaling\":\"orig\"},\"playlist\":[{\"url\":\"".$attachement_url."\"}]}' /></object>";
		    	} else if(stristr($attachment->post_mime_type, "image/")!==FALSE) {
	    			echo "<img src='".$attachement_url."' />";
	    		} else if(stristr($attachment->post_mime_type, "text/")!==FALSE) {
	    			$text=file($attachement_url);
	    			echo $text[0];
	    		}
	    		echo "</li>";
		}
		echo '</div>';
	}
	
}