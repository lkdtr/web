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
