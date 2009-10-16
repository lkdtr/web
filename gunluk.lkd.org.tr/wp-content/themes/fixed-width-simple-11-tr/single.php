<?php 
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 
	
<div class="post">
	 <div class="storytitle" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
	<div class="meta"> <?php the_time('d F Y l, H:i') ?> tarihinde yazılmıştır. <?php edit_post_link('Düzenle','|',''); ?></div>
	
	<div class="storycontent">
		<?php the_content(__('(devam...)')); ?>
	</div>

	<div class="feedback">
<?php comments_popup_link('Yorum Yok', '1 Yorum', '% Yorum'); ?>   <?php edit_post_link('Düzenle','|',''); ?>
	</div>

		<div class="navigation">
			<?php previous_post_link('&laquo; %link &laquo;') ?> <br/>
		 <?php next_post_link('&raquo; %link &raquo;') ?>
		</div>	

	<!--
	<?php trackback_rdf(); ?>
	-->
 

</div>

<?php comments_template(); // Get wp-comments.php template ?>

<?php endwhile; else: ?>
<div class="storytitle"> Üzgünüm </div>
<p><?php _e('Verdiğiniz kriterlere uygun yazı bulunamadı, lütfen tekrar deneyin.'); ?></p>

<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<?php endif; ?>




<?php get_footer(); ?>
