<?php
/*

$clean_uri = $_SERVER['REQUEST_URI'];
$home_url = get_bloginfo('url');
$path_url = str_replace($home_url, "", $clean_uri);

$newUrl = $urlstr = $home_url.$path_url;
$clean_url = langswitch_uri_cleaner( $urlstr );


$path_url = str_replace("/tr/", "", $path_url);
$path_url = str_replace("/en/", "", $path_url);

if( ($path_url=="/tr") || ($path_url=="/en") || ($path_url=="")  || ($path_url=="/") ) $path_url = "home-page";

query_posts('pagename='.$path_url);

if (have_posts()) {

header("HTTP/1.0 200 OK");

}


*/


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

<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://istatistik.linux.org.tr/" : "http://istatistik.linux.org.tr/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://istatistik.linux.org.tr/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->

<script src='http://code.jquery.com/jquery-1.11.0.min.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/js/foundation.js'></script>

<script>
  $(function() {
    jQuery(document).foundation();
  });
</script>

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
<?php
  //<!--/* OpenX Local Mode Tag v2.8.10 */-->

  // The MAX_PATH below should point to the base of your OpenX installation
  define('MAX_PATH', '/var/www/vhosts/lkd.org.tr/domains/reklam.lkd.org.tr/public_html');
  if (@include_once(MAX_PATH . '/www/delivery/alocal.php')) {
    if (!isset($phpAds_context)) {
      $phpAds_context = array();
    }
    // function view_local($what, $zoneid=0, $campaignid=0, $bannerid=0, $target='', $source='', $withtext='', $context='', $charset='')
    $phpAds_raw = view_local('', 6, 0, 0, '', '', '0', $phpAds_context, '');
  }
  echo $phpAds_raw['html'];
?>

</div>

</div>

</div>

<ul id="menu">
<li><a target="_blank" href="http://www.linux.org.tr">www.linux.org.tr</a></li>
<li><a target="_blank" href="http://liste.linux.org.tr">LİSTELER</a></li>
<li><a target="_blank" href="http://seminer.linux.org.tr">SEMİNERLER</a></li>
<li><a target="_blank" href="http://senlik.linux.org.tr">ŞENLİK</a></li>
<li><a target="_blank" href="http://gezegen.linux.org.tr">GEZEGEN</a></li>
<li><a target="_blank" href="http://galeri.linux.org.tr">GALERİ</a></li>
<li><a target="_blank" href="ftp://ftp.linux.org.tr">FTP SERVİSİ</a></li>
<li><a target="_blank" href="http://uyeyazilimi.linux.org.tr">ÜYE YAZILIMI</a></li>
<li><a target="_blank" href="http://pardus.linux.org.tr">PARDUS DEPOSU</a></li>
</ul>
