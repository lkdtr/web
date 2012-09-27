<?php get_header(); ?>

<?php the_post(); ?>

	<h1><?php if(!is_front_page()) : the_title(); else: echo "19-20 Ekim"; endif; ?></h1>

	</header>

	<div class="clearfix"></div>

	<?php get_sidebar(); ?>

	<article>
		<div class="entry-content">
			<?php echo "<ul class='page-list'>".wp_list_pages( 'echo=0&depth=0&child_of=' . $pageid . '&title_li=' )."</ul>"; ?>
			<?php the_content(); ?>
		</div>
		<div class="clearfix"></div>
	</article>

	<section id="right">
		<?php dynamic_sidebar( 'right' ); ?>
	</section>

	<div class="clearfix"></div>

</section>

<?php get_footer(); ?>
