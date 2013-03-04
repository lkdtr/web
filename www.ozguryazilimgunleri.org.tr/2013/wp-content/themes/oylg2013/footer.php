	<div class="clear"></div>
</section>

<aside>
	<?php dynamic_sidebar('footer'); ?>
</aside>

<div class="clear"></div>

<footer>
	<aside>
		<div id="twitter">
			<?php $twitterRssUrl = "https://api.twitter.com/1/statuses/user_timeline.rss?screen_name=Ozgryzlmgunleri";
			$sontweetial=simplexml_load_file($twitterRssUrl);
			$sontweet=$sontweetial->channel->item[0]->title;
			$sontweet_trimmed = str_replace("Ozgryzlmgunleri: ", "",$sontweet); // her tweet'in basinda gelen ifadeleri kirpalim
			$sontweet_trimmed = str_replace("ozgryzlmgunleri:", "", $sontweet_trimmed); // her tweet'in basinda gelen ifadeleri kirpalim
			$sontweet_trimmed = str_replace("#lyk2012", "", $sontweet_trimmed); // hashtagi de kirpalim ?>
			<a href="https://twitter.com/Ozgryzlmgunleri" target="_blank"><?php echo $sontweet_trimmed; ?></a>
		</div>
		<div id="place">
			İSTANBUL BİLGİ ÜNİVERSİTESİ
			<span>SANTRAL KAMPÜSÜ</span>
		</div>
		<div id="share">
			<a href="http://tuxweet.linux.org.tr/linuxyazkampi" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/tuxweet_logo.png" /></a>
			<a href="https://www.facebook.com/events/368019503247693/" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/facebook_logo.png" /></a>
			<a href="http://twitter.com/linuxyazkampi" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/twitter_logo.png" /></a>
		</div>
		<div class="clear"></div>
	</aside>
	<div class="clear"></div>
	<ul id="organization">
		<li class="lkd"><a href="http://www.lkd.org.tr" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/lkd.png" /></a></li>
		<li class="university"><a href="http://www.bilgi.edu.tr/" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/istanbulbilgi.png" /></a></li>
	</ul>
</footer>

<?php wp_footer(); ?>

</body>
</html>
