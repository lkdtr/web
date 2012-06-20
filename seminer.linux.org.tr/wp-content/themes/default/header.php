<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title><?php wp_title('&raquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<!--[if IE 6]>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ie6.css" type="text/css" />
<![endif]-->

<meta name="robots" content="index,follow" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon" />

<?php 
if (isset($_SERVER['HTTP_REFERER']) && strpos($_SERVER['HTTP_REFERER'], 'images.google.com'))
echo '<script language="JavaScript" type="text/javascript">
if (top.location != self.location) top.location = self.location;
</script>';
?>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://istatistik.linux.org.tr/" : "http://istatistik.linux.org.tr/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 4);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://istatistik.linux.org.tr/piwik.php?idsite=4" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->

</head>
<body id="home">


<div id="header" class="clearfix">

	<ul id="accessibility">
		<li class="last-item"><a href="http://www.lkd.org.tr">Linux Kullanıcıları Derneği</a></li>
	</ul>

	<div id="branding">
		<h1 id="logo"><a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png"></a></h1>

	</div>
	
	<div id="nav" class="clearfix">
		<div id="nav-search">
			<?php get_search_form(); ?>
		</div>
		<ul id="menu">
  		<li class="page-item-home <?php if ( is_home() ) { ?> current_page_item <?php } ?>"><a href="<?php echo get_option('home'); ?>/">Seminerler</a></li>
		<li><a href="<?php echo get_option('home'); ?>/seminer-notlari">Seminer Notları</a></li>
		<li><a href="<?php echo get_option('home'); ?>/seminer-videolari">Seminer Videoları</a></li>
		<li><a href="<?php echo get_option('home'); ?>/sss">Sık Sorulan Sorular</a></li>
		<li><a href="<?php echo get_option('home'); ?>/iletisim">İletişim</a></li>
		</ul>
	</div>

</div>


<div id="main" class="clearfix">
