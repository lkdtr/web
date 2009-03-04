<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

<div id="orta">

<div id="genislik">

<div class="metin">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><h1><?php the_title(); ?></h1></a>

				<div class="entry">
					<?php the_content('Yazının kalanını okuyun &raquo;'); ?>
				</div>

				<p class="altbaglantilar"><?php the_tags('Etiketler: ', ', ', '<br />'); ?> Kategori <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('Yorum Yok &#187;', '1 Yorum &#187;', '% Yorum &#187;'); ?></p>
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

<?php get_footer(); ?>
