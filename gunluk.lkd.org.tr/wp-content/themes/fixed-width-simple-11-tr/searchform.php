<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
	<div>
		<input id="s" name="s" type="text" value="<?php echo wp_specialchars($s, 1); ?>" tabindex="1" size="17" /><br>
		<input id="searchsubmit" name="searchsubmit" type="submit" value="Ara" tabindex="2" />
	</div>
</form> 
