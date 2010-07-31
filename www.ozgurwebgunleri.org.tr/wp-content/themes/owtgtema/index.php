<?php
/**
 * Ana Tema dosyasi
 *
 * @package WordPress
 * @subpackage owtgtema
 */ ?>

<?php get_header(); ?>

<div id="orta">

<div id="solbolum"><?php get_sidebar(); ?></div>

<div id="ortabolum">
<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<div class="entry">
					<?php the_content('Yazının kalanını okuyun &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php the_tags('Etiketler: ', ', ', '<br />'); ?> Kategori <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('Yorum Yok &#187;', '1 Yorum &#187;', '% Yorum &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

	<?php else : ?>

		<h2 class="center">Bulunamadı</h2>
		<p class="center">Üzgünüz, aradığınız şey burada değil.</p>
		<?php get_search_form(); ?>

<?php endif; ?>
</div>

<div id="sagbolum">
<div id="sponsorlar"><div class="icerik"><?php wp_list_bookmarks(); ?></div></div>
</div>

<div class="temizle"></div>

</div>

<?php get_footer(); ?>
