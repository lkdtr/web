<?php get_header(); ?>

<div id="page">
  <div class="wrapper">
    <div id="content" style="min-height: 470px">
      <h2>Haberler</h2>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      <?php endwhile; endif; ?>

      <div style="clear: both"></div>
      <?php comments_template( '', true ); ?>
      <a class="haberler" href="/haberler">&raquo; Haberler sayfasına git. &raquo;</a>
    </div>
  </div>
  <?php include 'bottom_area.php'; ?>
  <?php get_footer(); ?>
</div>
