<!DOCTYPE html>
<html <?php language_attributes(); ?> id="splash">
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

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/fontface.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/splash.css" />

<!--[if ff]>
<style type="text/css" media="screen"> @import "<?php bloginfo('template_url'); ?>/css/firefox.css";</style>
<![endif]-->

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://tuxweet.linux.org.tr/rss/username:ozgurwebgunleri" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="image_src" href="<?php bloginfo('template_url'); ?>/images/owtg2013social.png" />

<?php wp_head(); ?>

</head>

<body>

<section>
	<aside id="top">
		<h1>Geçmiş Etkinlikler</h1>
		<ul class="vertical">
			<li><a href="../2012">2012</a></li>
			<li><a href="../2011">2011</a></li>
			<li><a href="../2010">2010</a></li>
		</ul>
	</aside>
	<aside id="bottom">
		<h1>Web Sitemiz Hazırlanıyor.</h1>
		<ul class="horizontal">
			<li><a href="/2013a/wp-content/uploads/ozgur_web_teknolojileri_gunleri_2013_sponsorluk_dosyasi_web.pdf">Sponsor Dosyası</a></li>
			<li><a href="/2013a/etkin-katilim-cagrisi">Etkin Katılım Çağrısı</a></li>
			<li><a href="/2013a/basvuru">Başvuru Formu</a></li>
		</ul>
	</aside>
</section>

<?php wp_footer(); ?>

</body>
</html>
