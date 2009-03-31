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

<img src="http://senlik.linux.org.tr/2009/wp-content/uploads/2009/03/istanbulbilgi.png" width="130" />

<img src="http://senlik.linux.org.tr/2009/wp-content/uploads/2009/03/tlkdlogo.png" width="130" />

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

<img src="http://senlik.linux.org.tr/2009/wp-content/uploads/2009/03/ydn.png" align="right" width="110" />

<img src="http://senlik.linux.org.tr/2009/wp-content/uploads/2009/03/pardus.png" align="right" width="110" />

<h1>İçecek</h1>

<img src="http://senlik.linux.org.tr/2009/wp-content/uploads/2009/03/sprite_logo1.jpg" align="right" width="110" />

<h1>Eşantiyon</h1>

<img src="http://senlik.linux.org.tr/2009/wp-content/uploads/2009/03/kartaca-11.png" align="right" width="110" />

<h1>Ödül</h1>

<img src="http://senlik.linux.org.tr/2009/wp-content/uploads/2009/03/airties.png" align="right" width="110" />

<h1>Afiş Tasarım</h1>

<img src="http://senlik.linux.org.tr/2009/wp-content/uploads/2009/03/akion.png" align="right" width="80" />

</div>

<div class="temizle"></div>

<?php get_footer(); ?>
