<?php

include('simplepie.class.php');

$feed = new SimplePie();
$feed->set_feed_url('http://haber.linux.org.tr/feed/');
$feed->init();
$feed->strip_attributes();
$feed->strip_comments();
$feed->strip_htmltags();
$feed->handle_content_type();

?>

<h4 class="news_title"><a href="#">Haber Linux</a></h4>

<?php if ($feed->data): ?>
  <?php $items = $feed->get_items(0, 5); ?>
  <span class="news_description">Son <?php echo count($items); ?> haber görüntüleniyor..</span>
  <ul class="news">
    <?php foreach($items as $item): ?>
        <li class="new">
        <h4><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a> <?php echo $item->get_date('j M Y'); ?></h4>
        <?php echo $item->get_content(); ?>
        <?php
        if ($enclosure = $item->get_enclosure(0))
          echo '<p><a href="' . $enclosure->get_link() . '" class="download"><img src="./for_the_demo/mini_podcast.png" alt="Podcast" title="Download the Podcast" border="0" /></a></p>';
        ?>
      </li>
    <?php endforeach; ?>
  </ul>
  </div>
<?php endif; ?>

