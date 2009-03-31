<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<div id="orta">

<div id="genislik">

<div class="solsponsorlar">



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

<img src="http://senlik.linux.org.tr/2009/wp-content/uploads/2009/03/pardus.png" width="140" />

</div>

<div class="temizle"></div>

<?php get_footer(); ?>
