<?php

include('simplepie.class.php');

$feed = new SimplePie();
$feed->set_feed_url('http://haber.linux.org.tr/feed/');
$feed->set_cache_location(TEMPLATEPATH.'/cache');
$feed->set_cache_duration(600);
$feed->init();
$feed->strip_attributes();
$feed->strip_comments();
$feed->strip_htmltags();
$feed->handle_content_type();

?>

<?php if ($feed->data): ?>
  <?php $last_item = $feed->get_item(0); ?>
  <h4>
    <a href="<?php echo $last_item->get_permalink(); ?>"><?php echo $last_item->get_title(); ?></a>
    <p class="date"><?php echo $last_item->get_date('j M Y'); ?></p>
  </h4>
  <?php echo $last_item->get_content(); ?>
  <?php
  if ($enclosure = $last_item->get_enclosure(0))
    echo '<p><a href="' . $enclosure->get_link() . '" class="download"><img src="./for_the_demo/mini_podcast.png" alt="Podcast" title="Download the Podcast" border="0" /></a></p>';
    ?>

  <?php $items = $feed->get_items(1, 2); ?>
  <h4>Diğer Haber Başlıkları</h4>
  <ul class="news">
    <?php foreach($items as $item): ?>
      <li class="other_new"><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a> <?php echo $item->get_date('j M Y'); ?></li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>
