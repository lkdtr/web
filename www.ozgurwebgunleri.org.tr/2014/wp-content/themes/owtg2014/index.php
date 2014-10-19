<?php get_header(); ?>

<main>
      <div id="main">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        	<?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
        
        
        <div class="clearfix"></div>
      </div>
      <aside>
        <div>
          
        </div>
      </aside>
</main>

<div class="clearfix"></div>
<?php get_footer(); ?>