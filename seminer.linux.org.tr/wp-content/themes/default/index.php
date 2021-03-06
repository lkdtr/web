<?php get_header(); ?>

	<div id="container">
		<div id="content">

      <p align="center"><font color="red"><i>Geçmiş arşivlerin aktarılması sürmektedir.</i></font></p>      

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('', 'default'); ?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<small class="meta">
          <span class="alignleft">
            <?php _e('Kategori: ', 'default' ); the_category(', '); ?>
            <?php edit_post_link(__( '(e)', 'default' ), ' | ', ''); ?>
          </span>
        </small>

				<div class="entry">
					<?php the_content((__( '&raquo; Read more: ', 'default')) . the_title('', '', false)); ?>
				</div>

      <?php // include (TEMPLATEPATH . '/ad_middle.php'); ?>
        
			</div>
<div class="clearfix"></div>
		<?php endwhile; ?>

		<div class="pagination navigation clearfix">
		  <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
  		  <div class="alignleft"><?php next_posts_link(__('&laquo; Eski Girdiler', 'default')) ?></div>
  			<div class="alignright"><?php previous_posts_link(__('Yeni Girdiler &raquo;', 'default')) ?></div>
		  <?php } ?>
		</div>


	<?php else : ?>

    <?php include (TEMPLATEPATH . "/missing.php"); ?>

	<?php endif; ?>



		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
