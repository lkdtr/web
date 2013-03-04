	<div class="clear"></div>
</section>

</div>

<div class="clear"></div>

<footer>
	<aside>
		<div id="twitter">
			<?php //$twitterRssUrl = "https://api.twitter.com/1/statuses/user_timeline.rss?screen_name=Ozgryzlmgunleri";
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
			<a href="https://www.facebook.com/sharer.php?u=http://www.ozguryazilimgunleri.org.tr/2013" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/blank.png" width="55px" height="100px" /></a>
			<a href="https://twitter.com/intent/tweet?source=webclient&text=%C3%96zg%C3%BCr%20Yaz%C4%B1l%C4%B1m%20ve%20Linux%20G%C3%BCnleri%205-6%20Nisan%20tarihlerinde%20%C4%B0stanbul%20Bilgi%20%C3%9Cniversitesi%20Santral%20Kamp%C3%BCs%C3%BCnde!&url=http://www.ozguryazilimgunleri.org.tr/2013&hashtags=oylg2013" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/blank.png" width="65px" height="100px" /></a>
			<a href="http://identi.ca/ozguryazilimgunleri" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/blank.png" width="70px" height="100px" /></a>
		</div>
		<div class="clear"></div>
	</aside>
	<div class="clear"></div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
