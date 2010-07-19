<?php
/*
 * Template Name: News
 *
 * exceprt($limit) fonksiyonunun çalışması için şu eklentiye ihtiyaç var:
 * http://wordpress.org/extend/plugins/content-and-excerpt-word-limit/
 */
?>


<?php get_header(); ?>
<?php

    if (isset($_GET['paged'])) $cur_page = absint($_GET['paged']);
    else $cur_page = 1;

    $offset = ($cur_page - 1) * 10;
    $previous = $cur_page - 1;
    $next = $cur_page + 1;

    query_posts(array('showposts' => '10', 'offset' => $offset));

?>

<div id="page">
  <div class="wrapper">
    <div id="content-news">
      <h2>Haberler</h2>
        <ul class="content-news-top">
          <?php delete_option('wl_readmore_link'); ?>
          <?php while (have_posts()) : the_post(); ?>
          <li class="top">
              <ul>
                  <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                  <li class="bottom">
                      <h4><?php the_title(); ?></h4>
                      <p class="time">(<?php the_time('d F Y'); ?>)</p>
                      <div class="entry">
                          <p><?php excerpt(25); ?></p>
                      </div>
                  </li>
                  </a>
                  <li class="comments">
                      <?php comments_popup_link(__('No Comments'), __('1 Comment'), __('% Comments')); ?>
                  </li>
              </ul>
          </li>
          <?php endwhile; ?>
        </ul>
        <div id="navigation">
            <?php if ($previous != 0) : ?>
                <p class="previous"><a href="/haberler/?paged=<?php echo $previous; ?>"><- Önceki Sayfa</a></p>
            <?php endif; ?>
            <p class="next"><a href="/haberler/?paged=<?php echo $next; ?>">Sonraki Sayfa -></a></p>
            <div style="clear: both">
        </div>
    </div> <!-- end content -->
  </div> <!-- end wrapper -->

  <?php include 'bottom_area.php'; ?>
  <?php get_footer(); ?>
</div>
