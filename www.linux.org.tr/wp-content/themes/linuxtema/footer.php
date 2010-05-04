<?php
/**
 * @package WordPress
 * @subpackage lkdTema
 */
?>

<div class="wrapper" id="footer">
  <p class="left">
    <a href='http://www.mozilla.org/products/firefox/'><img src='http://sfx-images.mozilla.org/firefox/3.6/80x15_square_orange.png' alt='Spread Firefox Affiliate Button' border='0' /></a>
    <a href='http://www.vim.org'><img src='<?php bloginfo('template_url'); ?>/images/banners/vim_edited_blue.jpg' alt='Edited with VIM' /></a>
  </p>
  <span><a href="<?php bloginfo('siteurl'); ?>/gpl">GPL</a></span>
  <?php
    if (function_exists('quotescollection_quote')):
      $quote_array = quotescollection_get_randomquote(); 
      echo('<span><i>"'.$quote_array['quote'].'"</i></span>');
    endif;
  ?>
</div>