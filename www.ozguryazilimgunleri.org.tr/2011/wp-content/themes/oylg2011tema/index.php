<?php get_header(); ?>

<div id="wrapper">
	
	<div id="content">

		<div id="left"><?php get_sidebar(); ?></div>

		<div id="center">
			<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>

					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						
						<?php if ( is_home() || is_front_page() ) { ?>
							<h1><?php the_title(); ?></h1>
						<?php } ?>

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

	<div id="right">
		<div class="content">
			<?php wp_list_bookmarks('title_li=&category_before=&category_after=&category=3&orderby=rating'); ?>
		</div>
	</div>

	<div class="clearfix"></div>

	</div>

</div>

<?php get_footer(); ?>