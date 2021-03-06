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
		<li class="mail-icon">
			<a href="https://liste.linux.org.tr/mailman/listinfo/lkd-duyuru" title="LKD Duyuru Listesine Üye Olun ">
				<span>DUYURU LİSTESİ</span>
				LKD Duyuru Listesine Üye Olun
			</a>
		</li>
	</ul>
</li>

<div>
    <center>
        <script type='text/javascript'><!--// <![CDATA[
            /* [id2] 300x250 - seminer.linux.org.tr */
            OA_show(2);
        // ]]> --></script><noscript><a target='_blank' href='http://reklam.lkd.org.tr/www/delivery/ck.php?n=c4bc036'><img border='0' alt='' src='http://reklam.lkd.org.tr/www/delivery/avw.php?zoneid=2&amp;n=c4bc036' /></a></noscript>
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
