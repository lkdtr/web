<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body>
<div id="genislik">


<div id="ust">

<div id="sol">

<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.gif" id="logo" />

</div>

<div id="sag">

<ul id="ustmenu">
<li><a href="#">site haritası</a></li>
<li><a href="#">erişilebilirlik</a></li>
<li><a href="#">bize yazın</a></li>
</ul>

<div class="temizle"></div>

<? get_search_form(); ?>

<div class="temizle"></div>

<img src="<?php bloginfo('stylesheet_directory'); ?>/images/banner.png" class="banner" />

</div>

</div>

<ul id="menu">
<li><a href="#">Ana sayfa</a></li>
<li><a href="#">Haberler</a></li>
<li><a href="#">Etkinlikler</a></li>
<li><a href="#">Çalışma Grupları</a></li>
<li><a href="#">Ekipler</a></li>
<li><a href="#">Bildirgeler</a></li>
<li><a href="#">Hakkında</a></li>
</ul>