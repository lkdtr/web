<?php get_header(); ?>

<?php the_post(); ?>

<?php $sidebarVisible=get_post_custom_values('sidebar', get_the_ID());?>

	<h1><?php if(!is_front_page()) : the_title(); else: echo "19-20 Ekim"; endif; ?></h1>

	</header>

	<div class="clearfix"></div>

	<?php get_sidebar(); ?>

	<article<?php if($sidebarVisible=="hide") echo ' id="wide"'; ?>>
		<div class="entry-content">
			<?php echo "<ul class='page-list'>".wp_list_pages( 'echo=0&depth=0&child_of=' . get_the_ID() . '&title_li=' )."</ul>"; ?>
			<?php the_content(); ?>
		</div>
		<div class="clearfix"></div>
	</article>

	<?php if($sidebarVisible!="hide") { ?>
		<section id="right">
			<?php dynamic_sidebar( 'right' ); ?>
		</section>
	<?php } ?>

	<div class="clearfix"></div>

</section>

<?php get_footer(); ?>
