	<div class="clear"></div>
</section>

<footer>
	<aside>
		<div id="twitter">
			<?php $sontweetial=simplexml_load_file("http://tuxweet.linux.org.tr/rss/username:linuxyazkampi");
			$sontweet=$sontweetial->entry[0]->title;
			$sontweet_trimmed = ltrim($sontweet, "linuxyazkampi: #lyk2012 "); // her tweet'in basinda gelen ifadeleri kirpalim
			$sontweet_trimmed = str_replace($sontweet, "#lyk2012"); // hashtagi de kirpalim ?>
			<a href="http://tuxweet.linux.org.tr/linuxyazkampi" target="_blank"><?php echo $sontweet_trimmed; ?></a>
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
