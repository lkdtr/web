<?php 
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 
	
<div class="post">
	 <div class="storytitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a> </div>
	 <div class="meta"><?php edit_post_link('Düzenle','|',''); ?></div>
	
	
	<div class="storycontent">
		<?php the_content(__('(devam...)')); ?>
	</div>
	
	<div class="feedback">
            <?php wp_link_pages(); ?>
	
	</div>
	
	<!--
	<?php trackback_rdf(); ?>
	-->

</div>

<?php comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<p><?php _e('Üzgünüm, verdiğiniz kriterlere uygun yazı bulunamadı.'); ?></p>
<?php endif; ?>




<?php get_footer(); ?>
