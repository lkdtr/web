<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div id="content" class="narrowcolumn">

		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. $post değişkenini ata ki the_date() çalışsın. ?>
 	  <?php /* Kategori arşivi ise */ if (is_category()) { ?>
		<h2 class="pagetitle">&#8216;<?php single_cat_title(); ?>&#8217; kategorisi için Arşiv</h2>
 	  <?php /* Etiket arşivi ise */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">&#8216;<?php single_tag_title(); ?>&#8217; olarak etiketlenmiş yazılar</h2>
 	  <?php /* Günlük arşiv ise */ } elseif (is_day()) { ?>
		<h2 class="pagetitle"><?php the_time('d F Y'); ?> için Arşiv</h2>
 	  <?php /* Aylık arşiv ise */ } elseif (is_month()) { ?>
		<h2 class="pagetitle"><?php the_time('F Y'); ?> için Arşiv</h2>
 	  <?php /* Yıllık arşiv ise */ } elseif (is_year()) { ?>
		<h2 class="pagetitle"><?php the_time('Y'); ?> için Arşiv</h2>
	  <?php /* Yazar arşivi ise */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Yazar Arşivi</h2>
 	  <?php /* Sayfalanmış bir arşiv ise */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Arşivi</h2>
 	  <?php } ?>


		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Eski Yazılar') ?></div>
			<div class="alignright"><?php previous_posts_link('Yeni Yazılar &raquo;') ?></div>
		</div>

		<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?>>
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('l, d F Y') ?></small>

				<div class="entry">
					<?php the_content() ?>
				</div>

        <p class="postmetadata"><?php the_tags('Etiketler: ', ', ', '<br />'); ?> Kategori: <?php the_category(', ') ?> | <?php edit_post_link('Düzenle', '', ' | '); ?>  <?php comments_popup_link('Yorum Yok &#187;', '1 Yorum &#187;', '% Yorum &#187;'); ?></p>

			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Eski Yazılar') ?></div>
			<div class="alignright"><?php previous_posts_link('Yeni Yazılar &raquo;') ?></div>
		</div>
	<?php else :

		if ( is_category() ) { // Kategori arşivi ise
			printf("<h2 class='center'>Üzgünüz, %s kategorisinde henüz yazı yok.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // Tarih arşivi ise
			echo("<h2>Üzgünüz, bu tarihte yazı yok.</h2>");
		} else if ( is_author() ) { // Yazar arşivi ise
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Üzgünüz, henüz %s tarafından yazılmış herhangi bir yazı yok.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>Herhangi bir yazı bulunamadı.</h2>");
		}
		get_search_form();

	endif;
?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
