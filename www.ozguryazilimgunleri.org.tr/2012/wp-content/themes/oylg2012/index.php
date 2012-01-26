<?php get_header();

global $post;
$custom_fields=get_post_custom($post->ID);
$sidebarstatus=$custom_fields['sidebar'][0]; ?>

<div id="content">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<? if($_SERVER['REQUEST_URI']!="/2012/") { ?><h1><?php the_title(); ?></h1><? } ?>
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

<?php if($sidebarstatus!="0") { ?>
<?php get_sidebar(); ?>
<?php } else { ?>
<style type="text/css">
#sidebar {
	display:none;
}

#content {
	width:690px;
}
html {
	background:#44605f url(../images/htmlbackground_1.gif) no-repeat left top;
}
</style>
<?php } ?>
<?php get_footer(); ?>
