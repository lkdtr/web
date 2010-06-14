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
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/images/favicon.png" />
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
<!--<li><a href="#">site haritası</a></li>-->
<li><a href="http://www.lkd.org.tr/hakkimizda/iletisim/">bize yazın</a></li>
</ul>

<div class="temizle"></div>

<? get_search_form(); ?>

<div class="temizle"></div>


<div class="banner" >

<!--/* OpenX Javascript Tag v2.6.3 */-->

<!--/*
  * The backup image section of this tag has been generated for use on a
  * non-SSL page. If this tag is to be placed on an SSL page, change the
  *   'http://reklam.lkd.org.tr/www/delivery/...'
  * to
  *   'https://reklam.lkd.org.tr/www/delivery/...'
  *
  * This noscript section of this tag only shows image banners. There
  * is no width or height in these banners, so if you want these tags to
  * allocate space for the ad before it shows, you will need to add this
  * information to the <img> tag.
  *
  * If you do not want to deal with the intricities of the noscript
  * section, delete the tag (from <noscript>... to </noscript>). On
  * average, the noscript tag is called from less than 1% of internet
  * users.
  */-->

<script type='text/javascript'><!--//<![CDATA[
   var m3_u = (location.protocol=='https:'?'https://reklam.lkd.org.tr/www/delivery/ajs.php':'http://reklam.lkd.org.tr/www/delivery/ajs.php');
   var m3_r = Math.floor(Math.random()*99999999999);
   if (!document.MAX_used) document.MAX_used = ',';
   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
   document.write ("?zoneid=4");
   document.write ('&amp;cb=' + m3_r);
   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
   document.write ("&amp;loc=" + escape(window.location));
   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
   if (document.context) document.write ("&context=" + escape(document.context));
   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
   document.write ("'><\/scr"+"ipt>");
//]]>--></script><noscript><a href='http://reklam.lkd.org.tr/www/delivery/ck.php?n=a6a504c4&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img 
src='http://reklam.lkd.org.tr/www/delivery/avw.php?zoneid=4&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a6a504c4' border='0' alt='' /></a></noscript>


</div>

</div>

</div>

<ul id="menu">
<li><a target="_blank" href="http://www.linux.org.tr">www.linux.org.tr</a></li>
<li><a target="_blank" href="http://liste.linux.org.tr">E-posta Listeleri</a></li>
<li><a target="_blank" href="http://seminer.linux.org.tr">Seminerler</a></li>
<li><a target="_blank" href="http://senlik.linux.org.tr">Şenlik</a></li>
<li><a target="_blank" href="http://gezegen.linux.org.tr">Linux Gezegeni</a></li>
<li><a target="_blank" href="ftp://ftp.linux.org.tr">FTP Servisi</a></li>
<li><a target="_blank" href="http://uyeyazilimi.linux.org.tr">Üye Yazılımı</a></li>
<li><a target="_blank" href="http://pardus.linux.org.tr">Pardus Deposu</a></li>
<li><a target="_blank" href="http://galeri.linux.org.tr">Fotoğraflar</a></li>
</ul>
