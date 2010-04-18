<?php
/**
 * @package WordPress
 * @subpackage lkdTema
 */

get_header();
?>

<div id="page">
  <div class="wrapper" id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </div>
  <?php get_footer(); ?>
</div>