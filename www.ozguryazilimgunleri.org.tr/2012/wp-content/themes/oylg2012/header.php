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
<link rel="stylesheet" type="text/css" media="all" href="<?php echo "http://".$_SERVER["HTTP_HOST"]."/2012/wp-content/themes/oylg2012/css/fontface.css"; ?>" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://tuxweet.linux.org.tr/rss/username:ozgurwebgunleri" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="image_src" href="<?php bloginfo('template_url'); ?>/images/owtg2011social.jpg" />

<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>

<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/countdown/jquery.countdown.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/countdown/jquery.countdown-tr.js'></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/countdown/countdown.js"></script>

</head>

<body>

<div id="header_top">
	<div id="tuxweet">
		<?php $sontweetial=simplexml_load_file("http://tuxweet.linux.org.tr/rss/username:ozguryazilimgunleri");
		$sontweet=$sontweetial->entry[0]->title;
		$sontweet_trimmed = ltrim($sontweet, "ozguryazilimgunleri: #ozguryazilimgunleri "); // her tweet'in basinda gelen ifadeleri kirpalim ?>
		<a href="http://tuxweet.linux.org.tr/ozguryazilimgunleri" target="_blank"><?php echo $sontweet_trimmed; ?></a>
	</div>
</div>

<div id="header_left">
	<div id="logo">
		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a>
	</div>
	<ul id="followus" class="social">
		<li class="tuxweet"><a href="http://tuxweet.linux.org.tr/ozguryazilimgunleri" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
		<li class="technorati"><a href="http://identi.ca/ozguryazilimgunleri" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
		<li class="friendfeed"><a href="http://friendfeed.com/ozguryazilimgunleri" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
		<li class="twitter"><a href="http://twitter.com/Ozgryzlmgunleri" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
		<li class="facebook"><a href="http://www.facebook.com/events/135560503168688/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
	</ul>
	<div class="clearfix"></div>
</div>

<div id="organization">
	<a href="http://www.lkd.org.tr" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/lkd_logo.png" /></a>
	<a href="http://www.bilgi.edu.tr" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/bilgi_logo.png" /></a>
</div>

<div class="clearfix"></div>

<div id="mainmenumargin"></div>

<div id="mainmenu"><?php dynamic_sidebar( 'primary-widget-area' ); ?></div>

<div class="clearfix"></div>

<div id="main">
