<?php
/*
Plugin Name: Filosofo Home-Page Control
Plugin URI: http://www.ilfilosofo.com/blog/home-page-control
Description: Allows you to put pages on the same permalink level as the blog's directory and to set which page you want to be the "home" page.  Go to Options &raquo; Home-Page Control to adjust the settings.  Works in WordPress versions 1.5+
Version: .83
Author: Austin Matzko
Author URI: http://www.ilfilosofo.com/blog/
*/

/*  Copyright 2005  Austin Matzko  (email : if.website at gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/
if (!class_exists('filosofo_hpc')) {
class filosofo_hpc {
//*********************************************************************************
function options_page() {
global $wp_rewrite;
$fhpc_settings = get_option('filosofo_hpc');
$reminder = '';
if (isset($_REQUEST['updated']) && ($_REQUEST['updated'] == 'true')) {
	if ($wp_rewrite->use_verbose_rules || !isset($wp_rewrite->use_verbose_rules)) 
		$reminder = __('<div class="updated"><p><strong style="color:red">Don\'t forget</strong> to update your permalink settings <a href="') . get_option('siteurl') . __('/wp-admin/options-permalink.php">here</a>.  ');
	$reminder .= '</p></div>';
	if(isset($_POST['submit'])) {
		if(isset($_POST['pageselected'])) {
				$fhpc_settings['pageselected'] = (int) trim($_POST['pageselected']);
		}
     	elseif(isset($_POST['blogdir'])) {
			$fhpc_settings['blogdir'] = trim($_POST['blogdir']);
               if (preg_match('/^\//',$fhpc_settings['blogdir']))
               	$fhpc_settings['blogdir'] = substr($fhpc_settings['blogdir'],1);
               if (preg_match('/\/$/',$fhpc_settings['blogdir']))	
               	$fhpc_settings['blogdir'] = substr($fhpc_settings['blogdir'],0,strlen($fhpc_settings['blogdir'])-1);
		}
		update_option('filosofo_hpc',$fhpc_settings);
	}
	
	if (method_exists($wp_rewrite,'flush_rules'))
		$wp_rewrite->flush_rules();

}
echo $reminder ?>
<div class="wrap"><h2><?php _e('Choose the home-page and set the blog directory') ?></h2>
<form name="theme" method="post" action=""> 
<input type="hidden" name="updated" value="true" />
<fieldset class="options">
	<label for="pageselected"><?php _e('Home-Page Page:') ?></label>
	<select name="pageselected" id="pageselected">
		<?php
          $pages = get_pages();
          if ( 'NONE' == $fhpc_settings['pageselected']) $selected = " selected='selected'";
		else $selected = '';
		echo "\n\t<option value=\"NONE\" $selected>" . __('WordPress Default') . "</option>";
		foreach ($pages as $page) {
			if ($page->ID == $fhpc_settings['pageselected']) $selected = " selected='selected'";
			else $selected = '';
			echo "\n\t<option value=\"$page->ID\" $selected>$page->post_title</option>\n";
		}
		?>
	</select><input type="submit" name="submit" value="<?php _e('Save') ?> &raquo;" />
     <p><?php _e('Select which page should open when someone requests <code>'); bloginfo('url'); _e('/</code>.  When set to "WordPress Default", WordPress loads a file named "home.php" from your template directory if that file exists; otherwise WordPress will load the template\'s "index.php" file.') ?></p>
	
</fieldset>
</form>
<form name="blogdirform" method="post" action=""> 
<input type="hidden" name="updated" value="true" />
<fieldset class="options">
	<label for="blogdir"><?php _e('Blog directory:') ?></label>
	<input type="text" name="blogdir" id="blogdir" value="<?php echo $fhpc_settings['blogdir'] ?>" size="15" />
	<input type="submit" name="submit" value="<?php _e('Save') ?> &raquo;" />
	<?php _e('<p>Enter the "directory" you want to redirect to the blog page.  For example, if you want ') ?><code><?php bloginfo('url'); ?>/blog</code><?php 
	_e(' to open the main blog page, enter "blog" above. (Don\'t use a leading or trailing "/").</p>
	<p><strong>Note:</strong> As with other "directories" that appear in your permalinks, the "blog directory" should not actually exist on your server&rsquo;s filesystem.</p>') ?>
<?php $pattern = '#^/' . $fhpc_settings['blogdir'] . '/#';
if (!preg_match($pattern,get_option('permalink_structure'))) { 
	if (!('' == $fhpc_settings['blogdir'])) { ?>
	 <p><?php _e('<strong style="color:red">Note</strong>: It appears that your permalink structure begins with a different directory from the blog directory, so you may also want to modify the permalink virtual site structure <a href="'); bloginfo('url'); _e('/wp-admin/options-permalink.php">here</a> by prepending <code>/'); echo $fhpc_settings['blogdir']; _e('</code> to <code>'); echo get_option('permalink_structure'); _e(' in the "Structure" field.') ?></p>
<?php } 
	else { ?>
	<p><?php _e('You may also want to modify the permalink virtual site structure <a href="'); bloginfo('url'); _e('/wp-admin/options-permalink.php">here</a> by prepending this directory in the "Structure" field.') ?></p>
<?php } } ?>
</fieldset>
</form>
<?php 
	if ($wp_rewrite->use_verbose_rules || !isset($wp_rewrite->use_verbose_rules)) { ?>
<p><?php _e('<span style="color:red">Important</span>: You must update your permalinks under <a href="'); bloginfo('url'); _e('/wp-admin/options-permalink.php">Options &raquo; Permalinks</a> each time you change these settings (and if you de-activate this plugin) in order for the changes to take effect.') ?></p>
<?php } ?>
</div>
<?php 

} //end options_page
//*********************************************************************************
function add_options_page() { 
if (function_exists('add_options_page')) {
	add_options_page('Filosofo Home-Page Control Plugin', 'Home-Page Control', 9, __FILE__,array(&$this,'options_page'));
}
} //end add_options_page
//*********************************************************************************
function remove_old_root($rules) { //for 1.5.x only
$fhpc_settings = get_option('filosofo_hpc');
$pattern = '/(RewriteRule \^\.\*\$.*S=[0-9]*\])/'; 
if (!('NONE' == $fhpc_settings['pageselected'])) 
return preg_replace("$pattern",'',$rules);
} //end remove_old_root
//*********************************************************************************
function new_mod_rewrite_rules($rules) { 
global $wp_rewrite;
$fhpc_settings = get_option('filosofo_hpc');

//add root page
$newrules = (!('NONE' == $fhpc_settings['pageselected'])) ? array('$' => 'index.php?page_id=' . $fhpc_settings['pageselected']) : array();
// add blog directory root
$newrules[$fhpc_settings['blogdir'] . '/?$'] = 'index.php';
$match_form = ($wp_rewrite->use_verbose_rules || !isset($wp_rewrite->use_verbose_rules)) ? '$1' : $match_form = '$matches[1]';
$newrules[$fhpc_settings['blogdir'] . '/page/?([0-9]{1,})/?$'] = 'index.php?&paged=' . $match_form;
$newrules[$fhpc_settings['blogdir'] . '/feed/?(feed|rdf|rss|rss2|atom)/?$'] = 'index.php?&feed=' . $match_form;
$newrules[$fhpc_settings['blogdir'] . '/(feed|rdf|rss|rss2|atom)/?$'] = 'index.php?&feed=' . $match_form;
$newrules[$fhpc_settings['blogdir'] . '/([0-9]{4})/?$'] = 'index.php?year=' . $match_form;
return array_merge($newrules,$rules);
} // end new_mod_rewrite_rules
//*********************************************************************************
function fix_query_string($query_string) {
global $wp_rewrite;
$fhpc_settings = get_option('filosofo_hpc');
$page_str = 'page_id=' . $fhpc_settings['pageselected'];
$pattern = '/(.*)&'. $page_str . '(.*)/';
if ($wp_rewrite->use_verbose_rules || !isset($wp_rewrite->use_verbose_rules))
	return $query_string;
elseif (strpos($query_string,$page_str) && (strlen($query_string) > strlen($page_str)))
	return preg_replace("$pattern",'$1$2',$query_string);
else return $query_string;
}
//*********************************************************************************
function set_is_home() {
global $wp_query;
$request = trim($_SERVER['REQUEST_URI']);
$fhpc_settings = get_option('filosofo_hpc');
if (($wp_query->query_vars['page_id'] == $fhpc_settings['pageselected']) && ($fhpc_settings['pageselected']))
	$wp_query->is_home = true;
elseif ((get_option('siteurl') . '/') == (get_option('siteurl') . $request))
	$wp_query->is_home = true;
else $wp_query->is_home = false;
}
function change_template($path) {
global $wp_query;
if ( ($wp_query->is_home) && (TEMPLATEPATH . "/index.php" == $path) ) return false;
else return $path;
}
function change_feed($path){
	$fhpc_settings = get_option('filosofo_hpc');
	$path = (array) $path;
	$blogdir = ('' == $fhpc_settings['blogdir']) ? '' : '/' . $fhpc_settings['blogdir']; 
	return str_replace(get_option('siteurl') . '/feed',get_option('siteurl') . $blogdir . '/feed',$path[0]);
}
//**********************************************************************************
} //end class filosofo_hpc
}
$filosofo_hpc_class = new filosofo_hpc();
add_action('admin_menu', array(&$filosofo_hpc_class,'add_options_page'),1);
add_filter('mod_rewrite_rules', array(&$filosofo_hpc_class,'remove_old_root'));
add_filter('rewrite_rules_array', array(&$filosofo_hpc_class,'new_mod_rewrite_rules'));
add_filter('query_string',array(&$filosofo_hpc_class,'fix_query_string'));
add_action('pre_get_posts',array(&$filosofo_hpc_class,'set_is_home'));
add_filter('feed_link',array(&$filosofo_hpc_class,'change_feed'));
add_filter('home_template',array(&$filosofo_hpc_class,'change_template'));
add_filter('page_link',create_function('$a,$b','$c = get_option("filosofo_hpc"); if ($c["pageselected"] == $b) { return get_option("home"); } else { return $a; }'),10,2);
?>
