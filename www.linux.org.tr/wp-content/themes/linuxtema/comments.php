<?php
// Bu satırları silmeyin
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Lütfen bu sayfayı direkt yüklemeyin. Teşekkürler!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">Bu yazı parola korumalı. Yorumları görmek için parolayı girin.</p>
	<?php
		return;
	}
?>

<!-- Buradan sonrasını düzenleyebilirsiniz. -->

<?php if ( have_comments() ) : ?>
	<h3 id="comments">&#8220;<?php the_title(); ?>&#8221; için <?php comments_number('Yorum Yok', '1 Yorum', '% Yorum' );?></h3>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>

	<ul class="commentlist">
	<?php wp_list_comments(); ?>
	</ul>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
 <?php else : // Hiç yorum yoksa gösterilecek bölüm ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- Yorum yapma açıksa ama henüz yorum yoksa. -->

	 <?php else : // Yorum yapma kapalıysa ?>
		<p class="nocomments">Yorum yapma kapalı.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<div id="respond">

<h3><?php comment_form_title( 'Yorum yapın', '%s için yorum yapın' ); ?></h3>

<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>Yorum yapabilmek için <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">giriş</a> yapmalısınız.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p><a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> olarak giriş yapılmış. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Bu hesaptan çıkış yapın">Çıkış &raquo;</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="author"><small>İsim <?php if ($req) echo "(gerekli)"; ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email"><small>E-posta (yayımlanmayacak) <?php if ($req) echo "(gerekli)"; ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small>Site</small></label></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> Şu etiketleri kullanabilirsiniz: <code><?php echo allowed_tags(); ?></code></small></p>-->

<p><textarea name="comment" id="comment" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Gönder" />
<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // Eğer üyelik gerekliyse ve giriş yapılmamışsa ?>
</div>

<?php endif; // eğer bunu silerseniz gökyüzü başınıza düşecek ?>