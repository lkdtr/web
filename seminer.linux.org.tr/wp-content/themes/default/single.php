<?php get_header(); ?>

	<div id="container">
		<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h1><?php the_title(); ?></h1>
			<small class="meta">
          <span class="alignleft">
            <?php _e('Kategori: ', 'default' ); the_category(', '); ?>
            <?php edit_post_link(__( '(e)', 'default' ), ' | ', ''); ?>
          </span>
      </small>

			<div class="entry">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => '<div class="page-link clearfix"><strong>Sayfalar:</strong>', 'after' => '</div>', 'next_or_number' => 'number', 'pagelink' => '<span>%</span>')); ?>

      	<ul class="previousnext clearfix">
      		<?php previous_post_link('<li class="previous_post">%link</li>', '<span>' . (__('Bir Önceki Girdi', 'default')) . ':</span> %title'); ?>
      		<?php next_post_link('<li class="next_post">%link</li>', '<span>' . (__('Bir Sonraki Girdi', 'default')) . ':</span> %title'); ?>
      	</ul>
			</div>

		</div>

  	<?php comments_template('', true); ?>
  	 

	<?php endwhile; else: ?>

    <?php include (TEMPLATEPATH . "/missing.php"); ?>

<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
