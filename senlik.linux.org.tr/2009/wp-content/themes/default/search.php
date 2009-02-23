<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

	<div id="content" class="narrowcolumn">

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Arama Sonuçları</h2>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Eski Yazılar') ?></div>
			<div class="alignright"><?php previous_posts_link('Yeni Yazılar &raquo;') ?></div>
		</div>


		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?>>
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?> için Kalıcı Bağlantı"><?php the_title(); ?></a></h3>
				<small><?php the_time('l, j F Y') ?></small>

        <p class="postmetadata"><?php the_tags('Etiketler: ', ', ', '<br />'); ?> Kategori: <?php the_category(', ') ?> | <?php edit_post_link('Düzenle', '', ' | '); ?>  <?php comments_popup_link('Yorum Yok &#187;', '1 Yorum &#187;', '% Yorum &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

    <div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Eski Yazılar') ?></div>
			<div class="alignright"><?php previous_posts_link('Yeni Yazılar &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Hiç yazı bulunamadı. Yeni bir arama yapmak ister misiniz?</h2>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>