<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
<h2><? if($_GET["lang"]=="en") echo "FOLLOW US"; else echo "TAKİP ET"; ?></h2>
<?php wp_list_bookmarks("title_before=<h2 style='display:none;'>&title_li=&category_before=&category_after=&category=4&orderby=rating"); ?>
<div class="clearfix"></div>
<div id="tuxweet">
	<?php $sontweetial=simplexml_load_file("http://tuxweet.linux.org.tr/rss/username:ozguryazilimgunleri");
	$sontweet=$sontweetial->entry[0]->title;
	$sontweet_trimmed = ltrim($sontweet, "ozguryazilimgunleri: "); //her tweet'in basinda gelen ifadeleri kirpalim ?>
	<a href="http://tuxweet.linux.org.tr/ozguryazilimgunleri"><?php echo $sontweet_trimmed; ?></a>
</div>
<div align="center"><a href="http://www.ozguryazilimgunleri.org/2011/gorseller"><img src="http://www.ozguryazilimgunleri.org/2011/wp-content/uploads/afis<? if($_GET["lang"]=="en") echo "_en"; ?>.jpg" alt="Özgür Yazılım Günleri 2011 Gorseller" /></a></div>
<div align="center"><a href="http://www.ozguryazilimgunleri.org/2011/wp-content/uploads/<? if($_GET["lang"]=="en") echo "ozgur_yazilim_ve_linux_gunleri_2011_sponsorluk_dosyasi_web_en.pdf"; else echo "2010/12/ozgur_yazilim_ve_linux_gunleri_2011_sponsorluk_dosyasi_web_tr.pdf"; ?>" target="_blank"><img src="http://www.ozguryazilimgunleri.org/2011/wp-content/uploads/sponsordosyasi<? if($_GET["lang"]=="en") echo "_en"; ?>.jpg" /></a></div>