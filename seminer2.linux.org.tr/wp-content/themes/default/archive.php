<?php get_header(); ?>

	<div id="container">
		<div id="content">

		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		  <h1 class="pagetitle"> <?php single_cat_title(); ?></h1>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		  <h1 class="pagetitle"> <?php single_tag_title(); ?>&#8217;</h1>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		  <h1 class="pagetitle"> <?php the_time(__('F jS, Y','default')); ?></h1>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		  <h1 class="pagetitle"> <?php the_time(__('F, Y','default')); ?></h1>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		  <h1 class="pagetitle"> <?php the_time(__('Y','default')); ?></h1>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		  <h1 class="pagetitle"><?php _e('Author Archive', 'default'); ?></h1>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		  <h1 class="pagetitle"><?php _e('Blog Archives', 'default'); ?></h1>
 	  <?php } ?>


		<div class="navigation clearfix">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Eski Girdiler', 'default')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('Yeni Girdiler &raquo;', 'default')) ?></div>
		</div>

		<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class(archives-page) ?>>
			<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title=" <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<small class="meta">Tarih: <?php the_time(__('j F Y','default')); ?> | <?php _e('Kategori: ', 'default' ); the_category(', '); ?><?php edit_post_link(__( '(düzenle)', 'default' ), ' | ', ''); ?></small>

			<div class="entry">
				<?php the_content((__( '&raquo; Daha fazlasını okuyun: ', 'default')) . the_title('', '', false)); ?>
			</div>

		</div>

		<?php endwhile; ?>

		<div class="pagination navigation clearfix">
		  <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
  		  <div class="alignleft"><?php next_posts_link(__('&laquo; Sonraki Sayfa', 'default')) ?></div>
  			<div class="alignright"><?php previous_posts_link(__('Önceki Sayfa &raquo;', 'default')) ?></div>
		  <?php } ?>
		</div>		
		
	<?php else : ?>

    <?php include (TEMPLATEPATH . "/missing.php"); ?>

	<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
