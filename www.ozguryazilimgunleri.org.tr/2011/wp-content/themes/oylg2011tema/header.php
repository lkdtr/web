<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon.png" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://tuxweet.linux.org.tr/rss/username:ozguryazilimgunleri" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="image_src" href="<?php bloginfo('template_url'); ?>/images/logo.jpg" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/countdown/jquery.countdown.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/countdown/jquery.countdown-tr.js'></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/countdown/countdown.js"></script>
</head>

<body>

<div id="header">
	<div id="organization">
		<ul>
			<li><a href="http://www.lkd.org.tr" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/tlkdlogo.png" /></a></li>
			<li><a href="http://www.bilgi.edu.tr" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/istanbulbilgilogo.png" /></a></li>
		</ul>
	</div>
	<div id="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Ozgur Yazilim Gunleri 2010 Logo" /></a></div>
	<div id="tuxweet">
		<div id="top"></div>
		<?php $sontweetial=simplexml_load_file("http://tuxweet.linux.org.tr/rss/username:ozguryazilimgunleri");
		$sontweet=$sontweetial->entry[0]->title;
		$sontweet_trimmed = ltrim($sontweet, "ozguryazilimgunleri: "); //her tweet'in basinda gelen ifadeleri kirpalim ?>
		<div id="center"><a href="http://tuxweet.linux.org.tr/ozguryazilimgunleri"><?php echo $sontweet_trimmed; ?></a></div>
		<div id="bottom"></div>
	</div>
</div>

<div class="clearfix"></div>

<div id="menu">
	<div class="content">
		<?php dynamic_sidebar( 'primary-widget-area' ); ?>
		<div id="date">
			<div id="countdown"></div>
			<div id="realdate"><a href="javascript:displayCountdown()">1-2 NISAN 2011</a></div>
		</div>
	</div>
</div>

<div class="clearfix"></div>

