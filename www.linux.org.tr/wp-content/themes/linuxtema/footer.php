<div class="wrapper" id="footer">
  <p class="left">
    <a href='http://www.mozilla.org/products/firefox/'><img src='http://sfx-images.mozilla.org/firefox/3.6/80x15_square_orange.png' alt='Spread Firefox Affiliate Button' border='0' /></a>
    <a href='http://www.vim.org'><img src='<?php bloginfo('template_url'); ?>/images/banners/vim_edited_blue.jpg' alt='Edited with VIM' /></a>
  </p>
  <span><a href="<?php bloginfo('siteurl'); ?>/gpl">GPL</a></span>
  <?php
    if (function_exists('quotescollection_quote')):
      $quote_array = quotescollection_get_randomquote();
      $quote = stripslashes($quote_array['quote']);
      print('<span><i>'. $quote .'</i></span>');
    endif;
  ?>
</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-7687208-1");
pageTracker._trackPageview();
} catch(err) {}</script>
