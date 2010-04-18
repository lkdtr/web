<?php
/**
 * @package WordPress
 * @subpackage lkdTema 
 */

  ini_set('error_reporting', E_ALL);
  get_header();
?>

<div id="page">
  <div class="wrapper" id="content">
    <div id="buttons">
      <a href="#"><img class="button last" src="<?php bloginfo('template_url'); ?>/images/button-3.jpg" /></a>
      <a href="#"><img class="button" src="<?php bloginfo('template_url'); ?>/images/button-1.jpg" /></a>
      <a href="#"><img class="button" src="<?php bloginfo('template_url'); ?>/images/button-2.jpg" /></a>
    </div>
    <!--
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
          <h4>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
            <p class="date"><?php the_time('d F Y'); ?></p>
          </h4>
          <div class="entry">
            <?php the_content('Yazının kalanını okuyun &raquo;'); ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <h2>Bulunamadı</h2>
      <p>Üzgünüz, aradığınız şey burada değil.</p>
    <?php endif; ?>
    -->
    <?php include 'news.php'; ?>
  </div>
  
  <?php include 'bottom_area.php'; ?>
  <?php include 'footer.php'; ?>
</div>

<!-- Finito -->
</body></html>