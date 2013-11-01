<!DOCTYPE html>
<html <?php language_attributes(); ?> style="background:#000; !important">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<!--[if ff]>
<style type="text/css" media="screen"> @import "<?php bloginfo('template_url'); ?>/css/firefox.css";</style>
<![endif]-->

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://tuxweet.linux.org.tr/rss/username:ozgurwebgunleri" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="image_src" href="<?php bloginfo('template_url'); ?>/images/owtg2011social.jpg" />

<?php wp_head(); ?>

</head>

<body style="background:#000; overflow:hidden;">
<?php the_post(); ?>

<div style="margin:auto; width:900px;">
	<?php the_content(); ?>
</div>

<?php wp_footer(); ?>

</body>
</html>
