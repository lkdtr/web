<?php
/*
Template Name: Count Users
*/
?>
<?php get_header();?>

<article>

<h1><?php the_title(); ?></h1>
<div class="counter">
	<?php   $result = count_users();
			foreach($result['avail_roles'] as $role => $count) {
				if($role=='subscriber') {
			    	$numbers = str_split($count);
			    	foreach ($numbers as $number) {
			    		echo '<span class="number">'.$number.'</span>';
			    	}
			    }
			}
	?>
</div>
</article>
<?php get_footer();?>