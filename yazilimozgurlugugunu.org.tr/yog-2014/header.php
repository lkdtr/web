<!Doctype html>
<html <?php language_attributes(); ?>>
<head>
<title><?php wp_title('|', true, 'right'); ?></title>

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />  
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="header autoSize">
	<div class="topLine autoSize">
		<div class="stabilSize overflowHid">
			<div class="right socialIco">
				<a href="http://facebook.com/yazilimozgurlugugunu"><img src="<?php bloginfo('template_url'); ?>/themeImage/face.png" alt="" /></a>
				<a href="https://groups.google.com/forum/#!forum/yazilimozgurlugu"><img src="<?php bloginfo('template_url'); ?>/themeImage/twit.png" alt="" /></a>
				<a href="https://groups.google.com/forum/#!forum/yazilimozgurlugu"><img src="<?php bloginfo('template_url'); ?>/themeImage/gplus.png" alt="" /></a>
			</div>
		</div>
	</div>
	
	<div class="botLine autoSize">
		<div class="stabilSize overflowHid">
			<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/themeImage/logo.png" alt="" class="left headLogo" /></a>
			<?php
				$endDay = 21;
				$nowDay = date("d");
				$daysTo = $endDay - $nowDay;
				$split	= str_split($daysTo,1);
			?>
			<div class="right daysTo"><?php foreach($split as $splitDay) echo "<span>".$splitDay."</span>"; ?></div>
		</div>
	</div>
	
		<?php wp_nav_menu( 
			array(
				'menu' => 'menu'
			)
		); ?>
</div>