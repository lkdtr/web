<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<div id="alt">

<div class="icerik">

<div id="altbilgiler">
		<?php bloginfo('name'); ?>,
    <a href="http://wordpress.org/">WordPress</a> - <a href="http://www.wordpress-tr.com/">TR</a> üzerine kurulmuştur.
		<br /><a href="<?php bloginfo('rss2_url'); ?>">Yazılar (RSS)</a>
		and <a href="<?php bloginfo('comments_rss2_url'); ?>">Yorumlar (RSS)</a>.
		<!-- <?php echo get_num_queries(); ?> sorgu. <?php timer_stop(1); ?> saniye. -->
</div>

<div id="altlogo">
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/tlkdaltlogo.gif" />
</div>

<?php /* "Sen ne yaptığını sanıyorsun Dave?" */ ?>

		<?php wp_footer(); ?>
        
</div>

</div>

</body>
</html>
