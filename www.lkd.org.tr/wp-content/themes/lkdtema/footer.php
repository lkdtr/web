<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<div id="alt">

<div class="icerik">

<div id="sosyalmedya">
Sosyal Ağlarda LKD : <?php wp_list_bookmarks('orderby=rating'); ?>
</div>

<div id="altlogo">
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/tlkdaltlogo.gif" />
</div>

<?php if(function_exists('langswitch_list_langs')){
langswitch_list_langs(true, false, 'li');
}?>


<?php /* "Sen ne yaptığını sanıyorsun Dave?" */ ?>

		<?php wp_footer(); ?>
        
</div>

</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7687208-2");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>

