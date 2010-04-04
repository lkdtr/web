<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<hr />
<div id="footer" role="contentinfo">
<!-- WordPress'e destek olmak istiyorsanız, blogunuzdan WordPress.org ve WordPress Türkiye'ye bağlantı (link) verebilirsiniz. Bu, bizim için en güzel destektir. :) -->
	<p>
		<?php bloginfo('name'); ?>,
		<a href="http://wordpress.org/">WordPress</a> - <a href="http://www.wordpress-tr.com/">TR</a> üzerine kurulmuştur.
		<br /><a href="<?php bloginfo('rss2_url'); ?>">Yazılar (RSS)</a>
		and <a href="<?php bloginfo('comments_rss2_url'); ?>">Yorumlar (RSS)</a>.
		<!-- <?php echo get_num_queries(); ?> sorgu. <?php timer_stop(1); ?> saniye. -->
	</p>
</div>
</div>

<!-- Michael Heilemann tarafından, harika tasarım - http://binarybonsai.com/kubrick/ -->
<?php /* "Sen ne yaptığını sanıyorsun Dave?" */ ?>

		<?php wp_footer(); ?>
</body>
</html>
