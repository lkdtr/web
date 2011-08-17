<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
	<? if(php bloginfo('url')!=$_SERVER['REQUEST_URI']) { ?><h1><?php the_title(); ?></h1><? } ?>

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

<?php get_sidebar(); ?>
<?php get_footer(); ?>
