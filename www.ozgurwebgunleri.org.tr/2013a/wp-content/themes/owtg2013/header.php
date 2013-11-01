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

<?php $twitterrssurl = "https://api.twitter.com/1/statuses/user_timeline.rss?screen_name=ozgurwebgunleri"; ?>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php echo $twitterrssurl; ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="image_src" href="<?php bloginfo('template_url'); ?>/images/owtg2012social.png" />

<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/effects.js"></script>

<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/countdown/jquery.countdown.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/countdown/jquery.countdown-tr.js'></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/countdown/countdown.js"></script>

</head>

<body>

<section id="wrapper">

	<header>
		<div id="tweet">
			<?php $sontweetial=simplexml_load_file($twitterrssurl);
			$sontweet=$sontweetial->channel->item[0]->title;
				$sontweet_trimmed = str_replace("ozgurwebgunleri: ", "",$sontweet); // her tweet'in basinda gelen ifadeleri kirpalim
				$sontweet_trimmed = str_replace("OgurWebGunleri:", "", $sontweet_trimmed); // her tweet'in basinda gelen ifadeleri kirpalim
				$sontweet_trimmed = str_replace("#ozgurwebgunleri", "", $sontweet_trimmed); // hashtagi de kirpalim ?>
			<a href="https://twitter.com/ozgurwebgunleri" target="_blank"><?php echo $sontweet_trimmed; ?></a>
		</div>
		<ul id="organization">
			<li id="lkd"><a href="http://www.lkd.org.tr/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/tlkd.png" /></a></li>
			<li><a href="http://www.yeditepe.edu.tr/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/7tepe.png" /></a></li>
		</ul>
