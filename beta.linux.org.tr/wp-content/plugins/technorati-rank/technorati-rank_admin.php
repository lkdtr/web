<?php
/*
Author: Douglas Karr
Author URI: http://www.douglaskarr.com
Description: Administrative options for Technorati Rank
*/

load_plugin_textdomain('wptr',$path = 'wp-content/plugins/technorati-rank');
$location = get_option('siteurl') . '/wp-admin/admin.php?page=technorati-rank/technorati-rank_admin.php';

/*Lets add some default options if they don't exist*/
add_option('wptr_apikey', __('', 'wptr'));
add_option('wptr_url', __('', 'wptr'));
add_option('wptr_hours', __('', 'wptr'));

/* update options */
if ('process' == $_POST['stage'])
{
update_option('wptr_apikey', __(trim($_POST['wptr_apikey']), 'wptr'));
update_option('wptr_url', __(trim($_POST['wptr_url']), 'wptr'));
update_option('wptr_hours', __(trim($_POST['wptr_hours']), 'wptr'));
update_option('wptr_blurb', __(trim($_POST['wptr_blurb']), 'wptr'));
}

/*Get options for form fields*/
$wptr_apikey = stripslashes(get_option('wptr_apikey'));
$wptr_url = stripslashes(get_option('wptr_url'));
$wptr_hours = stripslashes(get_option('wptr_hours'));
$wptr_blurb = stripslashes(get_option('wptr_blurb'));
?>

<div class="wrap">
  <h2><?php _e('Technorati Rank Options', 'wptr') ?></h2>
  <form name="form1" method="post" action="<?php echo $location ?>&amp;updated=true">
	<input type="hidden" name="stage" value="process" />
    <table width="100%" cellspacing="2" cellpadding="5">
      <tr valign="top">
        <th scope="row" width="150px"><?php _e('<a href="http://www.technorati.com/developers/apikey.html" target="_blank" title="Click here to obtain your Technorati API Key">Technorati API Key</a>:') ?></th>
		<td><input type="text" name="wptr_apikey" id="wptr_apikey" value="<?php echo $wptr_apikey; ?>" style="width: 350px" /></td>
      </tr>
      <tr valign="top">
        <th scope="row"><?php _e('Your blog URL:') ?></th>
		<td><input type="text" name="wptr_url" id="wptr_url" value="<?php if($wptr_url =="") { echo get_option('home'); } else { echo $wptr_url; } ?>" style="width: 250px" /></td>
      </tr>
      <tr valign="top">
        <th scope="row"><?php _e('Note before your Rank:') ?></th>
		<td><input type="text" name="wptr_blurb" id="wptr_blurb" value="<?php if($wptr_blurb =="") { echo "Blog Rank:"; } else { echo $wptr_blurb; } ?>" style="width: 250px" /></td>
      </tr>
	  <tr valign="top">
        <th scope="row"><?php _e('Cache the results for:') ?></th>
		<td><select name="wptr_hours" id="wptr_hours">
		  <option value="1" <?php if($wptr_hours == "1") { echo "selected=\"selected\""; } ?>>1 hour</option>
		  <option value="2" <?php if($wptr_hours == "2") { echo "selected=\"selected\""; } ?>>2 hours</option>
		  <option value="3" <?php if($wptr_hours == "3") { echo "selected=\"selected\""; } ?>>3 hours</option>
		  <option value="4" <?php if(($wptr_hours == "4")||($wptr_hours === null)) { echo "selected=\"selected\""; } ?>>4 hours</option>
		  <option value="5" <?php if($wptr_hours == "5") { echo "selected=\"selected\""; } ?>>5 hours</option>
		  <option value="6" <?php if($wptr_hours == "6") { echo "selected=\"selected\""; } ?>>6 hours</option>
		  <option value="8" <?php if($wptr_hours == "8") { echo "selected=\"selected\""; } ?>>8 hours</option>
		  <option value="12" <?php if($wptr_hours == "12") { echo "selected=\"selected\""; } ?>>12 hours</option>
		  <option value="24" <?php if($wptr_hours == "24") { echo "selected=\"selected\""; } ?>>1 day</option>
		</select></td>
      </tr>
	  	<?php if (($wptr_apikey!="")&&($wptr_url!="")) { ?>
		<tr valign="top">
        	<th scope="row"><?php _e('Code for your blog:') ?></th>
			<td><textarea id="codetext" rows="2" cols="50">&lt;?php if(function_exists('wptr_technoratirank')) { wptr_technoratirank(); } ?&gt;</textarea></td>
      	</tr>
		</table>
		<?php } ?>
		<p class="submit">
      		<input type="submit" name="Submit" value="<?php _e('Update Options', 'wptr') ?> &raquo;" />
    	</p>
  		</form>

		<?php if (($wptr_apikey!="")&&($wptr_url!="")) { ?>
		<table width="100%" cellspacing="2" cellpadding="5">
		<tr valign="top">
        	<th scope="row"><?php _e('Your current rank:') ?></th>
			<td>
			<p><?php if(function_exists('wptr_technoratirank')) { wptr_technoratirank(1); } ?></p>
				<p>Your cache is cleared each time that you utilize this form.</p>
				<p>If you can not see your rank, there was a problem with your request.  Please verify that you have not exceeded the 500 call daily allotment of API calls at Technorati and that your API Key and URL are properly filled out. Please also verify that the blog is being monitored by <a href="http://www.technorati.com/search" title="Search Technorati">Technorati</a>.</p>
				<p>If you like this plugin, I would appreciate your support.  You can:
				<ul>
				<li><a href="http://www.technorati.com/faves/?add=http://www.douglaskarr.com" title="Add to Technorati Favorites">Add The Marketing Technology Blog</a> to your Technorati Favorites!</li>
				<li><a href="http://feeds.feedburner.com/DouglasKarr" title="My Feed">Add The Marketing Technology Blog</a> to your Feed Reader.</li>
				<li><a href="http://www.douglaskarr.com" title="My Blog">Read The Marketing Technology Blog</a> as often as you can!</li>
				<li>Or you can send me a few bucks via PayPal.<br />
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but21.gif" style="border:none" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
				<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
				">
				</form></li>
				</ul>
				<p>Thanks for all your support!  Please don't hesitate to <a href="http://www.douglaskarr.com/contact-me/">contact me</a> if you find a problem or bug.</p><p>Regards,<br />Doug Karr</p>
				<?php } ?>
			</td>
      	</tr>
	</table>
</div>