<?php
/**
 * Template Name: Template Home
 *
 */

$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
if($feat_image) $pageBackgroundStyle=' style="background-image: url('.$feat_image.');"'; ?>
<section<?php echo $pageBackgroundStyle; ?> id="<?php if (get_post_meta($post->ID, 'fw_page_link_alternative', true)) { echo get_post_meta($post->ID, 'fw_page_link_alternative', true); } else { echo the_fw_title(); } ?>" class="section-page full-home home-section <?php echo the_slug(); ?>">
	<div class="container <?php if (!get_post_meta($post->ID, 'fw_label_one', true)) { ?>no-bubbles<?php } ?>">
		<?php if(!get_post_meta($post->ID, 'fw_hide_logo', true)) {?>
		<div id="home-header">
			<div id="logo" class="left-logo">
				<img src="<?php echo $fw_logo; ?>" alt="<?php bloginfo('name') ?>" height="45" />
			</div>
			<h2 id="mini-slogan"><?php bloginfo( 'description' ); ?></h2>
		</div>
		<?php } ?>
	  	<?php
			if 	(get_post_meta($post->ID, 'fw_big_one', true) &&
				 get_post_meta($post->ID, 'fw_big_two', true) &&
				 get_post_meta($post->ID, 'fw_big_three', true))
			{
		?>
		<div class="three-big" id="slogan">
	   		<h1 id="first-title" class="big-title"><?php $first_title = get_post_meta($post->ID, 'fw_big_one', true); echo do_shortcode( $first_title );?></h1>
	   		<h1 id="second-title" class="big-title"><?php $second_title = get_post_meta($post->ID, 'fw_big_two', true); echo do_shortcode( $second_title );?></h1>
	   		<h1 id="third-title" class="big-title"><?php $third_title =  get_post_meta($post->ID, 'fw_big_three', true); echo do_shortcode( $third_title );?></h1>
	   	</div>
	   	<?php }
	   	else if (get_post_meta($post->ID, 'fw_big_one', true) &&
				 get_post_meta($post->ID, 'fw_big_two', true))
			{
	 		?>
	   	<div class="two-big" id="slogan">
	   		<h1 id="first-title" class="big-title"><?php $first_title = get_post_meta($post->ID, 'fw_big_one', true); echo do_shortcode( $first_title );?></h1>
	   		<h1 id="second-title" class="big-title"><?php $second_title = get_post_meta($post->ID, 'fw_big_two', true); echo do_shortcode( $second_title );?></h1>
	   	</div>
	   	<?php  } else if (get_post_meta($post->ID, 'fw_big_one', true)) { ?>
	   	<div class="one-big" id="slogan">
	   		<h1 id="first-title" class="big-title"><?php $first_title = get_post_meta($post->ID, 'fw_big_one', true); echo do_shortcode( $first_title );?></h1>
	 		</div>
	   	<?php } ?>
		<?php if (get_post_meta($post->ID, 'fw_label_one', true)) { ?>
	   	<div class="<?php if (!get_option('fw_spin_effect')) { ?>spin-effect<?php }?>" id="bubbles">
	   		<img src="<?php echo $fw_logo; ?>" />
	   	</div>
	   	<?php } ?>
	</div>
</section>
