<?php get_header(); ?>
<div id="container">
	<ul id="nav">
    <li class="<? echo (is_home())?'current_page_item':''; ?>"><a href="<?php echo get_option('home'); ?>/">Anasayfa</a></li>
	<?php $pages = wp_list_pages('sort_column=menu_order&depth=1&title_li=&echo=0');
	echo $pages; ?>
    </ul>
	<? unset($pages); ?> 
    <br clear="all" />
    <div id="search"><form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
    <input type="submit" id="searchsubmit" class="btnSearch" value="&nbsp;" />
    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="txtField" />
    </form></div>
    <div id="site-name"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a><br />
    <span class="description"><?php bloginfo('description'); ?></span></div>
    <span class="rss"><a href="<?php bloginfo('rss2_url'); ?>">RSS ile Abone olabilirsiniz!</a></span>
    <div id="post-one">
    
<?php if (have_posts()) : ?>
 <?php query_posts("showposts=1"); ?>
  <?php while (have_posts()) : the_post(); ?>
  <div class="top"></div>
  		<div class="main-post" id="post-<?php the_ID(); ?>">
    	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?> için Kalıcı Bağlantı"><?php the_title(); ?></a></h2>
        <span class="meta"><?php the_time('d F Y l, H:i') ?> <?php //the_category(', ') ?></span>
        <?php the_content('Devamını Okuyun &raquo;'); ?>
        <span class="comments"><?php comments_popup_link('Yorum Yok', '1 Yorum', '% Yorum'); ?></span>
        <br clear="all" />
        </div>
   <div class="btm"></div>
        <?php endwhile; ?>
    </div>
    <div id="recent-posts">
    
    <!-- post begin -->
<?php query_posts("showposts=8&offset=1"); ?>
  <?php while (have_posts()) : the_post(); ?>
    	<div class="home-post" id="post-<?php the_ID(); ?>">
        	<div class="upper">
            <div class="fade"></div>
            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?> için Kalıcı Bağlantı"><?php the_title(); ?></a></h3>
            <span class="meta"><?php the_time('d F Y l, H:i') ?></span>
        <?php the_content('Devamını Okuyun &raquo;'); ?>
            </div>
        <span class="comments"><?php comments_popup_link('Yorum Yok', '1 Yorum', '% Yorum'); ?></span>
        </div>
<?php endwhile; ?>
<br clear="all" />
<?php else: ?>
 <!-- Error message when no post published -->
<?php endif; ?>        
    <!-- post end -->

    <br clear="all" />
    </div>
    <div class="spacer"></div>
</div>
<div class="lower-outer">
	<div id="lower">
    <?php get_sidebar(); ?>
    </div>
<!--Track Theme-->
<?php if (function_exists('trackTheme')) { ?>
<?php trackTheme("cellar-heat-dark");  ?>
<?php } ?>
<!--Track Theme-->
<?php get_footer(); ?>