	<div class="clear"></div>
</section>

<div class="clear"></div>

<div class="turuncu">
	<div class="penguen"></div>
	<footer>
		<div id="countdown">
			<h2>etkinliğe geri sayim</h2>
			<?php  
                   $tarih = strtotime("March 28, 2014 09:00 AM");
                   $kalan = $tarih - time();
                   $gun = floor($kalan / 86400);
                   $saat = floor(($kalan % 86400) / 3600);
                   $dakika = floor(($kalan % 3600) / 60);
			?>
			<div class="circle">
				<?php echo $gun; ?>
				<span>gün</span>
			</div>
			<div class="circle">
				<?php echo $saat; ?>
				<span>saat</span>
			</div>
			<div class="circle">
				<?php echo $dakika; ?>
				<span>dakika</span>
			</div>
		</div>
		<div id="sponsorluk">
			<h2>sponsorluk</h2>
			<a href="http://www.ozguryazilimgunleri.org.tr/2014/wp-content/uploads/ozgur_yazilim_ve_linux_gunleri_2014_sponsorluk_dosyasi_tr_web.pdf" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/sponsor.png" /></a>
		</div>
		<div id="twitter">
			<?php dynamic_sidebar('footer'); ?>
		</div>
		<div id="shareNfollow">
			<div id="share">
				<h2>Paylaş</h2>
					<!-- AddToAny BEGIN -->
					<a class="a2a_dd" href="http://www.addtoany.com/share_save"><img src="<?php bloginfo( 'template_url' ); ?>/images/share.png" /></a>
					<script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>
					<!-- AddToAny END -->
			</div>
			<div id="follow">
				<h2>Takip Et</h2>
					<a href="https://www.facebook.com/events/375066242634913" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/facebook.png" /></a>
					<a href="https://twitter.com/Ozgryzlmgunleri" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/twitter.png" /></a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
