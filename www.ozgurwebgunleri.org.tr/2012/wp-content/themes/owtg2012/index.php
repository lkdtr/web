<?php get_header(); ?>

<?php the_post(); ?>

	<h1><?php if(!is_front_page()) : the_title(); else: echo "19-20 Ekim"; endif; ?></h1>

	</header>

	<div class="clearfix"></div>

	<?php get_sidebar(); ?>

	<article>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		<div class="clearfix"></div>
	</article>

	<div class="clearfix"></div>

</section>

<?php get_footer(); ?>
