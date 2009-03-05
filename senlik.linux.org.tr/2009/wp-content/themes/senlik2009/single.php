<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
<div id="orta">

<div id="genislik">

<div class="metin">

	<div id="content" class="widecolumn">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h1><?php the_title(); ?></h1>

			<div class="entry">
				<?php the_content('<p class="serif">Yazının tamamını okuyun &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Sayfalar:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Etiketler: ', ', ', '</p>'); ?>

			

			</div>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Üzgünüz, kriterinize uygun yazı bulunamadı.</p>

<?php endif; ?>

	</div>

</div></div>

<?php get_footer(); ?>
