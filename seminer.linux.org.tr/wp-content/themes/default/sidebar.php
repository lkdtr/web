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
        <!--/* Revive Adserver Javascript Tag v3.0.2 */-->

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
           document.write ("?zoneid=2");
           document.write ('&amp;cb=' + m3_r);
           if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
           document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
           document.write ("&amp;loc=" + escape(window.location));
           if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
           if (document.context) document.write ("&context=" + escape(document.context));
           if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
           document.write ("'><\/scr"+"ipt>");
        //]]>--></script><noscript><a href='http://reklam.lkd.org.tr/www/delivery/ck.php?n=a03c405f&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='http://reklam.lkd.org.tr/www/delivery/avw.php?zoneid=2&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a03c405f' border='0' alt='' /></a></noscript>
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
