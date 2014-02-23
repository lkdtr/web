<?php get_header(); ?>

<article>
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h1><?php the_title(); ?></h1>
				<div class="entry">
					<?php the_content(); ?>
				</div>
				<div class="clear"></div>
			</div>
		<?php endwhile; ?>
	<?php else : ?>
	<h1>Bulunamadı</h1>
		<p class="center">Üzgünüz, aradığınız şey burada değil.</p>
		<?php get_search_form(); ?>
	<?php endif; ?>
</article>

<?php get_footer(); ?>
