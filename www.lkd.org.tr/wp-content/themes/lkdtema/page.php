<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
<div id="orta">
	<div id="content" class="narrowcolumn">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="entry">
				<?php the_content('<p class="serif">Bu sayfanın tamamını okuyun &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Sayfalar:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Sayfayı düzenleyin.', '<p>', '</p>'); ?>
	</div>
    </div>
<?php get_sidebar(); ?>

</div>

<div class="temizle"></div>

<?php get_footer(); ?>
