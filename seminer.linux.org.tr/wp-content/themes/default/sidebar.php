<div id="sidebar">
	<ul class="sb-list clearfix">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>




<li>
	<ul class="sb-tools clearfix">
		<li class="rss-icon">
			<a href="<?php if (get_option('greenpark2_feed_enable') == 'yes') { echo 'http://feeds.feedburner.com/' . get_option('greenpark2_feed_uri'); } else { echo get_bloginfo('rss2_url'); }?>" title="<?php _e('Subscribe to my feed - You\'ll be happy!', 'default'); ?>">
				<span><?php _e('RSS', 'default'); ?></span>
				<?php _e('Bizi Takip Edin', 'default'); ?>
			</a>
		</li>
	</ul>
</li>

<div>
    <center>
<?php
  //<!--/* OpenX Local Mode Tag v2.8.10 */-->

  // The MAX_PATH below should point to the base of your OpenX installation
  define('MAX_PATH', '/var/www/vhosts/lkd.org.tr/domains/reklam.lkd.org.tr/public_html');
  if (@include_once(MAX_PATH . '/www/delivery/alocal.php')) {
    if (!isset($phpAds_context)) {
      $phpAds_context = array();
    }
    // function view_local($what, $zoneid=0, $campaignid=0, $bannerid=0, $target='', $source='', $withtext='', $context='', $charset='')
    $phpAds_raw = view_local('', 5, 0, 0, '', '', '0', $phpAds_context, '');
  }
  echo $phpAds_raw['html'];
?>


</center>
</div>


<div><h5>Seminer Çalışmaları Hakkında</h5>
<p align="justify">Linux Kullanıcıları Derneği Seminer Çalışma Grubu, derneğin gerçekleştirdiği seminerlerin sağlıklı bir biçimde yürütülmesinden sorumludur. Seminerlerde görev alacak kişilerin tespiti, desteklenmesi ve lojistik çalışmaları yürütmek başlıca görevleri arasında yer alır.<br /><br />
Seminer konuları, konuşmacılara ve dinleyicilerin isteklerine göre belirlenmektedir. Fikir, görüş ve önerilerinizi üst menüde yer alan "İletişim" bağlantısına tıklayarak göndermekten çekinmeyin.</p>
</div>

<?php endif; // end 1st sidebar widgets  ?>


<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>

	<?php if ( is_404() || is_category() || is_day() || is_month() || is_year() || is_search() || is_paged() ) { ?>
	<li class="currently-viewing">

	<?php /* If this is a 404 page */ if (is_404()) { ?>
	<?php /* If this is a category archive */ } elseif (is_category()) { ?>
	<p><?php _e('You are currently browsing the archives for the', 'default'); ?> <?php single_cat_title(''); ?> <?php _e('category', 'default'); ?>.</p>

	<?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
	<p><?php _e('You are currently browsing the archives for the day', 'default'); ?> <?php the_time('l, F jS, Y'); ?>.</p>

	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
	<p><?php _e('You are currently browsing the archives for', 'default'); ?> <?php the_time('F, Y'); ?>.</p>

	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
	<p><?php _e('You are currently browsing the archives for the year', 'default'); ?> <?php the_time('Y'); ?>.</p>

	<?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
	<p><?php _e('You have searched for', 'default'); ?> <strong>'<?php the_search_query(); ?>'</strong>.
  <?php _e('If you are unable to find anything in these search results, you can try one of these links', 'default'); ?>.</p>

	<?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	<p><?php _e('You are currently browsing the', 'default'); ?> <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> <?php _e('blog archives', 'default'); ?>.</p>

	<?php } ?>

	</li>
	<?php }?>

<?php endif; // end 2nd sidebar widgets  ?>
</ul>




</div> <!-- #sidebar -->
