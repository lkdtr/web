	<div class="clear"></div>
</section>

<footer>
	<aside>
		<div id="twitter">
			<?php $sontweetial=simplexml_load_file("https://twitter.com/statuses/user_timeline/592607643.rss");
			$sontweet=$sontweetial->channel->item[0]->title;
			$sontweet_trimmed = str_replace("linuxyazkampi: ", "",$sontweet); // her tweet'in basinda gelen ifadeleri kirpalim
			$sontweet_trimmed = str_replace("LinuxYazKampi:", "", $sontweet_trimmed); // her tweet'in basinda gelen ifadeleri kirpalim
			$sontweet_trimmed = str_replace("#lyk2012", "", $sontweet_trimmed); // hashtagi de kirpalim ?>
			<a href="https://twitter.com/linuxyazkampi" target="_blank"><?php echo $sontweet_trimmed; ?></a>
		</div>
		<ul id="social">
			<li><a href="http://tuxweet.linux.org.tr/linuxyazkampi" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/tuxweet_logo.png" /></a></li>
			<li><a href="https://www.facebook.com/events/368019503247693/" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/facebook_logo.png" /></a></li>
			<li><a href="http://twitter.com/linuxyazkampi" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/twitter_logo.png" /></a></li>
		</ul>
	</aside>
</footer>
<div id="footer_back"></div>

<?php wp_footer(); ?>

</body>
</html>
