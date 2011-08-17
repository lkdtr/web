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
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://tuxweet.linux.org.tr/rss/username:ozguryazilimgunleri" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="image_src" href="<?php bloginfo('template_url'); ?>/images/logo.png" />

<?php wp_head(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>

<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/countdown/jquery.countdown.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/countdown/jquery.countdown-tr.js'></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/countdown/countdown.js"></script>

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
			<li class="linkedin"><a href="http://events.linkedin.com/Ozgur-Web-Teknolojileri-Gunleri/pub/383023" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="facebook"><a href="http://www.facebook.com/event.php?eid=114749385242161" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="tuxweet"><a href="http://tuxweet.linux.org.tr/ozgurwebgunleri" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="xing"><a href="https://www.xing.com/events/ozgur-web-teknolojileri-gunleri-548570" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="twitter"><a href="http://twitter.com/ozgurwebgunleri" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="technorati"><a href="http://identi.ca/ozgurwebgunleri" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="friendfeed"><a href="http://friendfeed.com/ozgurwebgunleri" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
		</ul>
		<div class="clearfix"></div>
		<?php dynamic_sidebar( 'primary-widget-area' ); ?>
	</div>
	<div id="logo">
		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a>
		<div id="countdown_text">ETKİNLİĞE SON </div><div id="countdown"></div>
		<div class="clearfix"></div>
	</div>
	<div id="right">
		<div id="tuxweet">
			<?php $sontweetial=simplexml_load_file("http://tuxweet.linux.org.tr/rss/username:ozgurwebgunleri");
			$sontweet=$sontweetial->entry[0]->title;
			$sontweet_trimmed = ltrim($sontweet, "ozgurwebgunleri: #ozgurwebgunleri "); // her tweet'in basinda gelen ifadeleri kirpalim ?>
			<a href="http://tuxweet.linux.org.tr/ozgurwebgunleri" target="_blank"><?php echo $sontweet_trimmed; ?></a>
		</div>
		<div class="clearfix"></div>
		<ul id="shareus" class="social">
			<li class="facebook"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="delicious"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="twitter"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="linkedin"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="digg"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="tuxweet"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>			
			<li class="friendfeed"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>			
		</ul>
		<div class="clearfix"></div>
		<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
	</div>
	<div class="clearfix"></div>
</div>

<div id="main">