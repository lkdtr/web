<?php
/**
 * Template Name: Template Full Width
 *
 */

$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
if($feat_image) $pageBackgroundStyle=' style="background-image: url('.$feat_image.');"';
else $pageBackgroundStyle=""; ?>
	<section<?php echo $pageBackgroundStyle; ?> id="<?php if (get_post_meta($post->ID, 'fw_page_link_alternative', true)) { echo get_post_meta($post->ID, 'fw_page_link_alternative', true); } else { echo the_fw_title(); } ?>" class="section-page <?php echo the_slug(); ?>">
		<div class="container" id="full-width">
			<h2 class="section-title"><?php the_title(); ?></h2>
			<div class="full-width-container">
				<?php the_content(); ?>
			</div>
		</div>
	</section>
