<?php get_header(); ?>

<main>
      <div id="main">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        	<?php the_content(__('More', 'seventhblog').' &#8250;'); ?>
        <?php endwhile; ?>
        <?php endif; ?>
        
        
        <div class="clearfix"></div>
      </div>
      <aside>
        <div>
          <a href="#">
            <img src="http://www.ozguryazilim.com.tr/wp-content/uploads/2011/09/ozgur_yazilim_logo_128.png" alt="" />
          </a>
        </div>
      </aside>
    </main>


<?php get_footer(); ?>