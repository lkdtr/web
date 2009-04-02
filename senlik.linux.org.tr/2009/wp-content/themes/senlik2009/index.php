<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<div id="orta">

<div id="genislik">

<div class="solsponsorlar">

<h1>Organizasyon</h1>

<a href="http://www.lkd.org.tr/" alt="Linux Kullanıcıları Derneği" target="_blank"><img src="http://senlik.linux.org.tr/2009/wp-content/uploads/2009/03/tlkdlogo.png" width="130" /></a>

<a href="http://www.bilgi.edu.tr/" alt="İstanbul Bilgi Üniversitesi" target="_blank"><img src="http://senlik.linux.org.tr/2009/wp-content/uploads/2009/03/istanbulbilgi.png" width="130" /></a>

<br /><br />

<a href="http://senlik.linux.org.tr/2009/afis-banner/"><img src="http://senlik.linux.org.tr/2009/banner/banner160600-4.jpg" alt="" width="130" /></a>

</div>

<div class="metin">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><h1><?php the_title(); ?></h1></a>

				<div class="entry">
					<?php the_content('Yazının kalanını okuyun &raquo;'); ?>
				</div>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Eski Yazılar') ?></div>
			<div class="alignright"><?php previous_posts_link('Yeni Yazılar &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h1>Bulunamadı</h1>
		<p class="center">Üzgünüz, aradığınız şey burada değil.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>
</div>

<div class="sagsponsorlar">

<h1>Sponsorlar</h1>

<a href="http://developer.yahoo.com/" target="_blank"><img src="http://senlik.linux.org.tr/2009/wp-content/uploads/2009/03/ydn.png" align="right" width="110" /></a>

<a href="http://pardus.org.tr" target="_blank"><img src="http://senlik.linux.org.tr/2009/wp-content/uploads/2009/03/pardus.png" align="right" width="110" /></a>

<h1>İçecek</h1>

<a href="http://www.sprite.com.tr/" target="_blank"><img src="http://senlik.linux.org.tr/2009/wp-content/uploads/2009/03/sprite_logo1.jpg" align="right" width="110" /></a>

<h1>Eşantiyon</h1>

<a href="http://www.kartaca.com/" target="_blank"><img src="http://senlik.linux.org.tr/2009/wp-content/uploads/2009/03/kartaca-11.png" align="right" width="110" /></a>

<h1>Ödül</h1>

<a href="http://www.airties.com.tr/" target="_blank"><img src="http://senlik.linux.org.tr/2009/wp-content/uploads/2009/03/airties.png" align="right" width="110" /></a>

<h1>Afiş Tasarım</h1>

<a href="http://www.akinon.com/" target="_blank"><img src="http://senlik.linux.org.tr/2009/wp-content/uploads/2009/03/akion.png" align="right" width="80" /></a>

</div>

<div class="temizle"></div>

<?php get_footer(); ?>
