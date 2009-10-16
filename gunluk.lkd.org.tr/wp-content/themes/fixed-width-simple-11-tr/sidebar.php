<div id="side"> <!-- begin sidebar -->

<ul>

<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>

<?php if (function_exists('vote_poll') && !in_pollarchive()): ?>
<li>
   <h2>Anket</h2>
   <ul>
      <li><?php get_poll();?></li>
   </ul>
   <?php display_polls_archive_link(); ?>
</li>
<?php endif; ?> 

	<?php wp_list_pages('title_li=Sayfa' ); ?>


	
<!-- <li id="categories"><?php _e('Kategoriler'); ?>
	<ul>
	<?php wp_list_cats(); ?>
	</ul>
 </li>
 
 	<li id="blogroll"><?php _e('Günceler'); ?>
	
	<ul><?php get_links(-1, '<li>', '</li>', '', FALSE, 'name', FALSE); ?></ul>
</li>-->
	
 
 
 <li id="search">
 
   <label for="s"><?php _e('Ara'); ?></label>	
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
 </li>
 
 <li id="archives"><?php _e('Arşiv'); ?>
  	
  	<ul>
	 <?php wp_get_archives('type=monthly'); ?>
 	</ul>
 
 </li>
 
 <!--
 <li id="meta"><?php _e('Meta'); ?>
 	<ul>
		<?php wp_register(); ?>
		<li><?php wp_loginout(); ?></li>
		<li><a href="feed:<?php bloginfo('rss2_url'); ?>" title="<?php _e('Bu siteyi RSS ile izleyin.'); ?>"><?php _e('<abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
		<li><a href="http://validator.w3.org/check/referer" title="<?php _e('Bu sayfa XHTML 1.0 Transitional ile uyumludur.'); ?>"><?php _e('<abbr title="eXtensible HyperText Markup Language">XHTML</abbr> ile uyumlu'); ?></a></li>
		<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Dostluk Ağı">XFN</abbr></a></li>
		<li><a href="http://wordpress.org/" title="<?php _e('Gücünü WordPress kişisel yayın yazılımından almaktadır.'); ?>"><abbr title="WordPress">WP</abbr></a></li>
		<?php wp_meta(); ?>
	</ul>
 </li>-->

<?php endif; ?>
</ul>

</div> <!-- end sidebar -->
