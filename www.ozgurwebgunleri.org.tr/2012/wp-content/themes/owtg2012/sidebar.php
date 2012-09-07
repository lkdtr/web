<section id="sidebar">
	<div id="logo">
		<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/blank.gif" /></a>
	</div>
	<?php wp_nav_menu(); ?>
	<div id="countdown"></div>
	<div class="clearfix"></div>
	<?php dynamic_sidebar( 'left' ); ?>
</section>