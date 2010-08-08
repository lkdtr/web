<?php
/**
 *
 * @package WordPress
 * @subpackage owtgtema
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/resimler/favicon.png" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="image_src" href="<?php bloginfo('template_url'); ?>/resimler/logo.jpg" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>

<body>

<div id="ust">
<div id="ustbolum">
<?php $sontweetlerial=simplexml_load_file("http://tuxweet.linux.org.tr/rss/username:ozgurwebgunleri");
$sontweet=$sontweetlerial->entry[0]->item; ?>
<div id="sontweet"><?php echo $sontweet; ?></div>
<div id="etkinlikgerisayim"></div>
</div>
</div>

<div class="temizle"></div>

<div id="ortaustbolum">
<ul id="menu">
<li class="birincimenu"><a href="/bilgiler">BİLGİLER</a></li>
<li class="ikincimenu"><a href="/ulasim">ULAŞIM</a></li>
<li class="ucuncumenu"><a href="/etkinlik-programi">ETKİNLİK PROGRAMI</a></li>
<li class="dorduncumenu"><a href="/iletisim">İLETİŞİM</a></li>
</ul>
</div>

<div class="temizle"></div>

