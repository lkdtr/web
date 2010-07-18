<?php
/*
Template Name: News
 */
?>


<?php get_header(); ?>

<div id="page">
  <div class="wrapper">
    <div id="content-news">
        <h2>Haberler</h2>
        <ul>
          <?php
            if (isset($_GET['paged'])) $cur_page = absint($_GET['paged']);
            else $cur_page = 1;

            $offset = ($cur_page - 1) * 10;
            query_posts(array('showposts' => '10', 'offset' => $offset)); ?>
          <?php while (have_posts()) : the_post(); ?>
          <li>
            <p class="time">(<?php the_time('d F Y'); ?>)</p>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
          </li>
          <?php endwhile; ?>
        </ul>
        <div class="navigation">
            <?php posts_nav_link(); ?>
        </div>
    </div> <!-- end content -->
  </div> <!-- end wrapper -->

  <?php include 'bottom_area.php'; ?>
  <?php get_footer(); ?>
</div>
