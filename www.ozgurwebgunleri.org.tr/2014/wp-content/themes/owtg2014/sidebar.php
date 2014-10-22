<section id="aside">
        <?php

		if(!function_exists('dynamic_sidebar')
		|| !dynamic_sidebar()) :
				dynamic_sidebar('Sidebar');
		endif;
	?>
</section>