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

$gfeed = new SimplePie();
$gfeed->set_feed_url('feed://gezegen.linux.org.tr/rss20.xml');
$gfeed->set_cache_location(TEMPLATEPATH.'/cache');
$gfeed->set_cache_duration(600);
$gfeed->init();
$gfeed->strip_attributes();
$gfeed->strip_comments();
$gfeed->strip_htmltags();
$gfeed->handle_content_type();

?>

<?php $last_item = $feed->get_item(0); ?>
<h2>
  <a href="<?php echo $last_item->get_permalink(); ?>"><?php echo $last_item->get_title(); ?></a>
  <p class="date"><?php echo $last_item->get_date('d m Y'); ?></p>
</h2>
<?php echo $last_item->get_content(); ?>
<?php
if ($enclosure = $last_item->get_enclosure(0))
  echo '<p><a href="' . $enclosure->get_link() . '" class="download"><img src="./for_the_demo/mini_podcast.png" alt="Podcast" title="Download the Podcast" border="0" /></a></p>';
  ?>


<div id="other-news">
<div id="right-news">
<?php $items = $gfeed->get_items(0, 2); ?>
<h2>Linux Gezegeni</h2>
<ul class="news">
  <?php foreach($items as $item): ?>
    <li class="other_new">
      <a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a>
      <p style="font-size: 9px; margin: 0;">(<?php echo $item->get_date('d m Y'); ?>)</p>
    </li>
  <?php endforeach; ?>
</ul>
<p style="padding-bottom: 10px; font-size: 10px; font-style: italic; list-style-type: none;">(Tüm gezegen yazılarını görmek için <a href="http://gezegen.linux.org.tr/">tıklayın.</a>)</p>
</div>

<?php $items = $feed->get_items(1, 2); ?>
<h2>Diğer Haber Başlıkları</h2>
<ul class="news">
  <?php foreach($items as $item): ?>
    <li class="other_new">
      <a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a>
      <p style="font-size: 9px; margin: 0;">(<?php echo $item->get_date('d m Y'); ?>)</p>
     </li>
  <?php endforeach; ?>
</ul>
<p style="padding-bottom: 10px; font-size: 10px; font-style: italic; list-style-type: none;">(Tüm haberleri görmek için <a href="http://haber.linux.org.tr/">tıklayın.</a>)</p>
</div>