<?php if ( !empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
<p><?php _e('Yorumları görmek için parolanızı girin.'); ?></p>
<?php return; endif; ?>

<h4 id="comments">
<br/>
<?php if ( comments_open() ) : ?>
	<a href="#postcomment" title="<?php _e("Yorum yazın"); ?>">
&raquo; &raquo; &raquo;  Yorum yazın &raquo; &raquo; &raquo; </a>
<?php endif; ?>
<br/><br/>

<?php comments_number(__('Yorum Yok'), __('1 Yorum'), __('% Yorum')); ?> 

<br/>

</h4>

<?php if ( $comments ) : ?>
<ol id="commentlist">

<?php foreach ($comments as $comment) : ?>
	<li id="comment-<?php comment_ID() ?>">
	<strong><?php comment_author_link() ?></strong> <?php _e("diyor ki"); ?>
	<?php comment_text() ?>
	<p><cite><?php comment_time('d M Y') ?> | <a href="#comment-<?php comment_ID() ?>">#</a> <?php edit_comment_link(__("Düzenle"), ' |'); ?></cite></p>
	</li>

<?php endforeach; ?>

</ol>

<?php else : // If there are no comments yet ?>
<?php endif; ?>

<?php if ( comments_open() ) : ?>
<!--<h4 id="postcomment"><?php _e('Yorum yazın'); ?></h4>--> 

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>Yorum yazabilmek için sisteme <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">giriş yapmış</a> olmalısınız.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p><a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a> olarak sisteme giriş yapmış durumdasınız. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Çıkış') ?>">Çıkış &raquo;</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><small>İsim <?php if ($req) _e('(zorunlu)'); ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small>E-posta (yayınlanmayacaktır) <?php if ($req) _e('(zorunlu)'); ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small>Web Sitesi</small></label></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->

<script type="text/javascript">

function grin(tag) {
	var myField;
	if (document.getElementById('content') && document.getElementById('content').type == 'textarea') {
		myField = document.getElementById('content');
	}
	else if (document.getElementById('comment') && document.getElementById('comment').type == 'textarea') {
		myField = document.getElementById('comment');
	}
	else {
		return false;
	}
	if (document.selection) {
		myField.focus();
		sel = document.selection.createRange();
		sel.text = tag;
		myField.focus();
	}
	else if (myField.selectionStart || myField.selectionStart == '0') {
		var startPos = myField.selectionStart;
		var endPos = myField.selectionEnd;
		var cursorPos = endPos;
		myField.value = myField.value.substring(0, startPos)
					  + tag
					  + myField.value.substring(endPos, myField.value.length);
		cursorPos += tag.length;
		myField.focus();
		myField.selectionStart = cursorPos;
		myField.selectionEnd = cursorPos;
	}
	else {
		myField.value += tag;
		myField.focus();
	}
}


</script>

  <br />

<p>
    <textarea name="comment" id="comment" cols="100%" rows="6" tabindex="4"></textarea>
  </p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Yorum gönder" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>

<p><?php comments_rss_link(__('Yorumları <abbr title="Really Simple Syndication">RSS</abbr> ile takip edin.')); ?> 
<?php if ( pings_open() ) : ?> |
	<a href="<?php trackback_url() ?>" rel="trackback"><?php _e('Geri izleme <abbr title="Uniform Resource Identifier">bağlantısı</abbr>'); ?></a>
<?php endif; ?>
</p>

<?php endif; // If registration required and not logged in ?>

<?php else : // Comments are closed ?>
<p><?php _e(''); ?></p>
<?php endif; ?>