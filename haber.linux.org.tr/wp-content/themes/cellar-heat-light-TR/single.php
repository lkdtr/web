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
    <div class="column01">
    <div id="post-one">
    
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  		<div class="top"></div>
		<div class="main-post" id="post-<?php the_ID(); ?>">
    	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?> için Kalıcı Bağlantı"><?php the_title(); ?></a></h2>
        <span class="meta"><?php the_time('d F Y l, H:i') ?> <?php //the_category(', ') ?></span>
        <?php the_content('Devamını okuyun &raquo;'); ?>
        <br clear="all" />
        </div>
		<div class="btm"></div>
        <?php comments_template(); ?>
<?php endwhile; ?>
<?php else: ?>
 <!-- Error message when no post published -->
<?php endif; ?>         
    </div></div>
<div id="column02">
    	
            <?php 
			$previouspost = get_previous_post($in_same_cat, $excluded_categories);
			if ($previouspost != null) {
			
			echo '<div class="side-post"><div class="upper"><div class="fade"></div><h3>';
			previous_post_link('%link');
			echo '</h3>';
			previous_post_excerpt();
			echo '</div><span class="btn-readon">';
			previous_post_link('%link');
			echo '</span><span class="sub-txt">Önceki Yazılar</span></div>';
        } ?>

            <?php 
			$nextpost = get_next_post($in_same_cat, $excluded_categories);
			if ($nextpost != null) {
			
			echo '<div class="side-post"><div class="upper"><div class="fade"></div><h3>';
			next_post_link('%link');
			echo '</h3>';
			next_post_excerpt();
			echo '</div><span class="btn-readon">';
			next_post_link('%link');
			echo '</span><span class="sub-txt">Sonraki Yazılar</span></div>';
        } ?>

</div>
    <br clear="all" />
    </div>
    <div class="spacer"></div>
</div>
<div class="lower-outer">
	<div id="lower">
    <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>