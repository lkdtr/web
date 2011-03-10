<?php get_header(); ?>

<div id="wrapper">
	
	<div id="content">

		<div id="left"><?php get_sidebar(); ?></div>

		<div id="center">
			<?php if (have_posts()) : ?>

				<?php while (have_posts()) : the_post(); ?>

					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						
						<?php if ( is_home() || is_front_page() ) { ?>
							
						<?php } else { ?>
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
		<div id="language">
			<a href="<?php get_home_url(); ?>/2011/?lang="><img src="<?php bloginfo('template_url'); ?>/images/turkish.png" /></a>
			<a href="<?php get_home_url(); ?>/2011/?lang=en"><img src="<?php bloginfo('template_url'); ?>/images/english.png" /></a>
		</div>
		<div class="content">
			<h2><? if($_GET["lang"]=="en") echo "SPONSORS"; else echo "SPONSORLAR"; ?></h2>
			<?php wp_list_bookmarks("title_before=<h2 style='display:none;'>&title_li=&category_before=&category_after=&category=3&orderby=rating"); ?>
		</div>
	</div>

	<div class="clearfix"></div>

	</div>

</div>

<?php get_footer(); ?>
