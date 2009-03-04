<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
<div id="orta">
	<div id="content" class="widecolumn">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>

			<div class="entry">
				<?php the_content('<p class="serif">Yazının tamamını okuyun &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Sayfalar:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Etiketler: ', ', ', '</p>'); ?>

				<p class="postmetadata alt">
					<small>
						Bu yazı
						<?php /* Bu özellik kapalı çünkü kimi zaman küçük bir ayar gerektiriyor.
							Aşağıdaki eklentiyi indirip, yönergeleri takip etmelisiniz:
							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
						<?php the_time('l, d F Y') ?>, <?php the_time() ?> tarihinde
						<?php the_category(', ') ?> kategorisi altında yayınlandı.
						Bu yazıya yapılacak yorumlardan haberdar olmak için <?php post_comments_feed_link('RSS 2.0'); ?> beslemesini kullanabilirsiniz.

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Yorumlar ve geri izlemeler açık ?>
              <a href="#respond">Yorum yapabilirsiniz</a>, veya kendi sitenizden <a href="<?php trackback_url(); ?>" rel="trackback">geri izleme</a> yapabilirsiniz.

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Sadece geri izlemeler açık ?>
							Yorum yapma şimdilik kapalı, fakat kendi sitenizden <a href="<?php trackback_url(); ?> " rel="trackback">geri izleme</a> yapabilirsiniz.

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Yorum yapma açık, ping kapalı ?>
							Sona gidip yorum yapabilirsiniz. Pingleme şimdilik kapalı.

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Ne yorum yapma ne de pingleme açık ?>
							Yorum yapma ve pingleme kapalı.

						<?php } edit_post_link('Yazıyı düzenleyin','','.'); ?>

					</small>
				</p>

			</div>
		</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Üzgünüz, kriterinize uygun yazı bulunamadı.</p>

<?php endif; ?>

<?php get_sidebar(); ?>

</div>

<div class="temizle"></div>

<?php get_footer(); ?>
