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

<!--[if ff]>
<style type="text/css" media="screen"> @import "<?php bloginfo('template_url'); ?>/css/firefox.css";</style>
<![endif]-->

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://tuxweet.linux.org.tr/rss/username:ozguryazilimgunleri" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="image_src" href="<?php bloginfo('template_url'); ?>/images/owtg2011social.jpg" />

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
			<li><a href="http://www.yucomp.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/7tepe.png" /></a></li>
		</ul>
		<div class="clearfix"></div>
		<ul id="followus" class="social">
			<li class="linkedin"><a href="http://events.linkedin.com/Ozgur-Web-Teknolojileri-Gunleri-2011/pub/760709" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="facebook"><a href="http://www.facebook.com/event.php?eid=139940079428957" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="tuxweet"><a href="http://tuxweet.linux.org.tr/ozgurwebgunleri" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="xing"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></li>
			<li class="twitter"><a href="http://twitter.com/ozgurwebgunleri" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="technorati"><a href="http://identi.ca/ozgurwebgunleri" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="friendfeed"><a href="http://friendfeed.com/ozgurwebgunleri" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
		</ul>
		<div class="clearfix"></div>
		<?php dynamic_sidebar( 'primary-widget-area' ); ?>
	</div>
	<div id="logo">
		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a>
		<div class="clearfix"></div>
		<div id="countdown_text">14-15 EKİM</div><div id="countdown"></div>
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
			<li class="facebook"><a target="_blank" href="http://www.facebook.com/sharer.php?u=http://www.ozgurwebgunleri.org.tr/2011&t=%C3%96zg%C3%BCr%20Web%20Teknoloji%20G%C3%BCnleri%2014-15%20Ekim%202011%27de%20Yeditepe%20%C3%9Cniversitesi%27nde"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="delicious"><a target="_blank" href="http://delicious.com/save?jump=yes&url=http://www.ozgurwebgunleri.org.tr/2011&title=%C3%96zg%C3%BCr%20Web%20Teknoloji%20G%C3%BCnleri%202011&notes=%C3%96zg%C3%BCr%20Web%20Teknoloji%20G%C3%BCnleri%2014-15%20Ekim%202011%27de%20Yeditepe%20%C3%9Cniversitesi%27nde"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="twitter"><a target="_blank" href="http://twitter.com/home?status=%C3%96zg%C3%BCr%20Web%20Teknoloji%20G%C3%BCnleri%2014-15%20Ekim%202011%27de%20Yeditepe%20%C3%9Cniversitesi%27nde%20http://www.ozgurwebgunleri.org.tr/2011"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="linkedin"><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=http://www.ozgurwebgunleri.org.tr/2011&title=%C3%96zg%C3%BCr%20Web%20Teknoloji%20G%C3%BCnleri%202011&summary=%C3%96zg%C3%BCr%20Web%20Teknoloji%20G%C3%BCnleri%2014-15%20Ekim%202011%27de%20Yeditepe%20%C3%9Cniversitesi%27nde&source=%C3%96zg%C3%BCr%20Web%20Teknoloji%20G%C3%BCnleri%202011"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="digg"><a target="_blank" href="http://digg.com/submit?url=http://www.ozgurwebgunleri.org.tr/2011"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>
			<li class="tuxweet"><a target="_blank" href="http://tuxweet.linux.org.tr/"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>			
			<li class="friendfeed"><a target="_blank" href="http://friendfeed.com/?url=http://www.ozgurwebgunleri.org.tr/2011&title=%C3%96zg%C3%BCr%20Web%20Teknoloji%20G%C3%BCnleri%2014-15%20Ekim%202011%27de%20Yeditepe%20%C3%9Cniversitesi%27nde"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a></li>			
		</ul>
		<div class="clearfix"></div>
		<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
	</div>
	<div class="clearfix"></div>
</div>

<div id="main">
