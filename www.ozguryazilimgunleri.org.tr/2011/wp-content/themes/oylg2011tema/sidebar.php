<h2><? if($_GET["lang"]=="en") echo "MAIN SPONSORS"; else echo "ANA SPONSORLAR"; ?></h2>
<?php wp_list_bookmarks("title_before=<h2 style='display:none;'>&title_li=&category_before=&category_after=&category=8&orderby=rating"); ?>
<div class="clearfix"></div>
<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
<? if($_GET["lang"]!="en") { ?>
<div id="tuxweet">
	<div id="top"></div>
	<div id="center">
	<?php $sontweetial=simplexml_load_file("http://tuxweet.linux.org.tr/rss/username:ozguryazilimgunleri");
	$sontweet=$sontweetial->entry[0]->title;
	$sontweet_trimmed = ltrim($sontweet, "ozguryazilimgunleri: "); //her tweet'in basinda gelen ifadeleri kirpalim ?>
	<a href="http://tuxweet.linux.org.tr/ozguryazilimgunleri"><?php echo $sontweet_trimmed; ?></a>
	</div>
	<div id="bottom"></div>
</div>
<? } ?>
<div align="center"><a href="http://www.ozguryazilimgunleri.org/2011/wp-content/uploads/<? if($_GET["lang"]=="en") echo "ozgur_yazilim_ve_linux_gunleri_2011_sponsorluk_dosyasi_web_en.pdf"; else echo "2010/12/ozgur_yazilim_ve_linux_gunleri_2011_sponsorluk_dosyasi_web_tr.pdf"; ?>" target="_blank"><img src="http://www.ozguryazilimgunleri.org/2011/wp-content/uploads/sponsordosyasi<? if($_GET["lang"]=="en") echo "_en"; ?>.jpg" style="margin:10px 0 0 0;" /></a></div>
