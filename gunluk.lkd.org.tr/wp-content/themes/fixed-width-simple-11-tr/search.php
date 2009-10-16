<?php get_header(); ?>

	<?php if (have_posts()) : ?>
	<div class="storytitle">Arama</div>
	<?php include (TEMPLATEPATH . '/searchform.php'); ?>
		

<div class="storytitle">Arama Sonuçları</div>
		
		<div class="navigation">
			<?php next_posts_link('&laquo; Eski Yazılar &laquo;') ?>
			<?php previous_posts_link('&raquo; Yeni Yazılar &raquo;') ?>
		</div>


		<?php while (have_posts()) : the_post(); ?>
				
		<div class="post">
	 <div class="storytitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
	<div class="meta"><?php the_time('d M Y') ?> <?php edit_post_link('Düzenle','|',''); ?></div>
	
	<div class="storycontent">
		<?php the_excerpt(); ?>
	</div>
			</div>
	
		<?php endwhile; ?>

			<div class="navigation">
			<?php next_posts_link('&laquo; Eski Yazılar &laquo;') ?>
			<?php previous_posts_link('&raquo; Yeni Yazılar &raquo;') ?>
		</div>

		<div class="storytitle"></div>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	<?php else : ?>

		<div class="storytitle"> Üzgünüm </div>
<p><?php _e('Verdiğiniz kriterlere uygun yazı bulunamadı, lütfen tekrar deneyin.'); ?></p>


<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>
		

<?php get_footer(); ?>
