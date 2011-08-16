<!DOCTYPE html>
<html <?php language_attributes(); ?>>
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
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body>
<div id="header">
	<div id="left">
		<ul id="organization">
			<li><a href="http://www.lkd.org.tr/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/tlkd.png" /></a></li>
			<li><a href="http://www.yucomp.org/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/7tepe.png" /></a></li>
		</ul>
		<div class="clearfix"></div>
		<ul id="followus" class="social">
			<?php wp_list_bookmarks('orderby=rating&category=3'); ?>
		</ul>
		<div class="clearfix"></div>
		<ul id="leftmenu" class="menu">
			<li class="home current"><a href="#">ANASAYFA</a></li>
		</ul>
	</div>
	<div id="logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></div>
	<div id="right">
		<div id="tuxweet">
			<?php $sontweetial=simplexml_load_file("http://tuxweet.linux.org.tr/rss/username:ozgurwebgunleri");
			$sontweet=$sontweetial->entry[0]->title;
			$sontweet_trimmed = ltrim($sontweet, "ozgurwebgunleri: #ozgurwebgunleri "); // her tweet'in basinda gelen ifadeleri kirpalim ?>
			<a href="http://tuxweet.linux.org.tr/ozgurwebgunleri"><?php echo $sontweet_trimmed; ?></a>
		</div>
		<div class="clearfix"></div>
		<ul id="shareus" class="social">
			<?php wp_list_bookmarks('orderby=rating&category=4'); ?>
		</ul>
		<div class="clearfix"></div>
		<ul id="rightmenu" class="menu">
			<li class="home current"><a href="#">ANASAYFA</a></li>
		</ul>
	</div>
	<div class="clearfix"></div>
</div>

<div id="main">