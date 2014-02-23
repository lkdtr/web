	<div class="clear"></div>
</section>

<div class="clear"></div>

<div class="turuncu">
	<div class="penguen"></div>
	<footer>
		<div id="countdown">
			<h2>etkinliğe geri sayim</h2>
			<?php   //Convert to date
					$datestr="2014-03-28 09:00:00";//Your date
					$date=strtotime($datestr);//Converted to a PHP date (a second count)

					//Calculate difference
					$diff=$date-time();//time returns current time in seconds
					$days=floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day)
					$hours=round(($diff-$days*60*60*24)/(60*60));
					$minutes=round(($diff-$hours*60*60*24)/(60*60*60)); ?>
			<div class="circle">
				<?php echo $days; ?>
				<span>gün</span>
			</div>
			<div class="circle">
				<?php echo $hours; ?>
				<span>saat</span>
			</div>
			<div class="circle">
				<?php echo $minutes; ?>
				<span>dakika</span>
			</div>
		</div>
		<div id="share">
			<h2>sponsor dosyasi</h2>
			<a href="http://www.ozguryazilimgunleri.org.tr/2014/wp-content/uploads/ozgur_yazilim_ve_linux_gunleri_2014_sponsorluk_dosyasi_tr_web.pdf" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/sponsor.png" /></a>
		</div>
		<div id="twitter">
			<?php dynamic_sidebar('footer'); ?>
		</div>
		<div id="shareNfollow">
			<div id="share">
				<h2>Paylaş</h2>
					<a href="https://twitter.com/Ozgryzlmgunleri" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/share.png" /></a>
			</div>
			<div id="follow">
				<h2>Takip Et</h2>
					<a href="https://www.facebook.com/events/375066242634913" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/facebook.png" /></a>
					<a href="https://twitter.com/Ozgryazlmgunleri" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/twitter.png" /></a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
