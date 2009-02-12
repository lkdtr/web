<?php 	/* Widgetized sidebar, if you have the plugin installed. */
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
        
    	<div class="module">
        	<div class="top"></div>
            <span class="title">Son Yazılar</span>
        	<ul>
            <?php dp_recent_comments(6); ?>
            </ul>
            <div class="btm"></div>
        </div>
        <div class="module-mid">
        	<div class="top"></div>
            <span class="title">Arşiv</span>
        	<ul>
            <?php wp_get_archives('type=monthly'); ?>
            </ul>
            <div class="btm"></div>
        </div>
        <div class="module-end">
        	<div class="top"></div>
            <span class="title">Bağlantılar</span>
        	<ul>
            <?php wp_list_bookmarks('title_li=&categorize=0'); ?>
            </ul>
            <div class="btm"></div>
        </div>
        <?php endif; ?>
		<br clear="all" />