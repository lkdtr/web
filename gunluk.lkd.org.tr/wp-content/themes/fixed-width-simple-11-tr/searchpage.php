<?php
/*
Template Name: searchpage
*/
?>
<?php 
get_header();
?>

<div class="storytitle"> Ara: </div>
<div class="meta"> <?php edit_post_link('Edit','|',''); ?></div>

			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			

<?php get_footer(); ?>