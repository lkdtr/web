<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php

	global $page, $paged;

	wp_title( '|', true, 'right' );

	bloginfo( 'name' );

	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	?></title>

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/css/ieFix.css" />
<![endif]-->
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<meta property="og:title" content="<?php bloginfo( 'name' ); ?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php bloginfo( 'url' ); ?>"/>
<meta property="og:image" content="<?php bloginfo( 'template_url' ); ?>/images/social_share.png"/>
<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>"/>
<meta property="og:description" content="Özgür Yazılım ve Linux Günleri 5-6 Nisan tarihlerinde İstanbul Bilgi Üniversitesi Santral Kampüsünde!"/>

<?php wp_head(); ?>

</head>

<body>

<div id="wrapper">

<header id="head">
	<ul id="organization">
		<li class="lkd"><a href="http://www.lkd.org.tr" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/lkd.png" /></a></li>
		<li class="university"><a href="http://www.bilgi.edu.tr/" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/istanbulbilgi.png" /></a></li>
	</ul>
	<div id="logo"><a href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" alt="<?php echo bloginfo( 'name' ); ?>" title="<?php echo bloginfo( 'name' ); ?>" /></a></div>
</header>

<section>

	<nav><?php wp_nav_menu(); ?></nav>

	<div class="clear"></div>

	<aside>
		<?php dynamic_sidebar('footer'); ?>
	</aside>

	<aside></aside>
