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
				<? if($_SERVER['REQUEST_URI']!="/") { ?><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2><? } ?>

				<div class="entry">
					<?php the_content('Yazının kalanını okuyun &raquo;'); ?>
				</div>
                
			</div>

		<?php endwhile; ?>

	<?php else : ?>

		<h2 class="center">Bulunamadı</h2>
		<p class="center">Üzgünüz, aradığınız şey burada değil.</p>
		<?php get_search_form(); ?>

<?php endif; ?>
</div>

<div id="sagbolum">
<div id="sponsorlar"><div class="icerik">
<ul>
<?php wp_list_bookmarks('orderby=rating'); ?>
</ul>
</div></div>
</div>

<div class="temizle"></div>

</div>

<?php get_footer(); ?>
