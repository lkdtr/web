<?php include 'header.php'; ?>

<div id="page">
  <div class="wrapper" id="content">
    <div id="buttons">
      <a href="#"><img class="button last" src="images/button-3.jpg" /></a>
      <a href="#"><img class="button" src="images/button-1.jpg" /></a>
      <a href="#"><img class="button" src="images/button-2.jpg" /></a>
    </div>
<!-- ---------------------------------------------------- -->
<?php

function microtime_float()
{
	if (version_compare(phpversion(), '5.0.0', '>='))
	{
		return microtime(true);
	}
	else
	{
		list($usec, $sec) = explode(' ', microtime());
		return ((float) $usec + (float) $sec);
	}
}

$start = microtime_float();

//include('simplepie.inc');
include('simplepie.class.php');

// Parse it
$feed = new SimplePie();
if (get_magic_quotes_gpc())
{
    $_GET['feed'] = stripslashes('http://haber.linux.org.tr/feed/');
}
$feed->set_feed_url('http://haber.linux.org.tr/feed/');
$feed->init();
$feed->handle_content_type();

?>
    <div id="sp_results">
        <?php if ($feed->data): ?>
            <?php $items = $feed->get_items(); ?>
            <p align="center"><span style="background-color:#ffc;">Displaying <?php echo $feed->get_item_quantity(); ?> most recent entries.</span></p>
            <?php foreach($items as $item): ?>
                <div class="chunk" style="padding:0 5px;">
                    <h4><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a> <?php echo $item->get_date('j M Y'); ?></h4>
                    <?php echo $item->get_content(); ?>
                    <?php
                    if ($enclosure = $item->get_enclosure(0))
                        echo '<p><a href="' . $enclosure->get_link() . '" class="download"><img src="./for_the_demo/mini_podcast.png" alt="Podcast" title="Download the Podcast" border="0" /></a></p>';
                    ?>
                </div>
            <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    <!-- --------------------------------------------------------- -->
  </div>
</div>

<?php include 'footer.php'; ?>
