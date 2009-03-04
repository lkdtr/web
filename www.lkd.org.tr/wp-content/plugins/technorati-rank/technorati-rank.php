<?php
/*
Plugin Name: Technorati Rank
Plugin URI: http://www.douglaskarr.com/projects/technorati-rank-plugin
Description: A plugin for users who wish to display their Technorati Rank.  Requires a <a href="http://www.technorati.com/developers/apikey.html" target="_blank" title="Click here to obtain your Technorati API Key">Technorati API Key</a>, WordPress 2.1+ and PHP5+ (uses SimpleXML).
Author: Douglas Karr
Author URI: http://www.douglaskarr.com
Version: 2.1.0
*/

load_plugin_textdomain('wptr',$path = 'wp-content/plugins/technorati-rank');

// this function checks for the Cache directory.  
// I got this function from Ricard Gulli Granada's WP-Cache plugin at http://mnm.uib.es/gallir/wp-cache-2/
$wptr_cache_dir = ABSPATH.'wp-content/plugins/technorati-rank/cache/';

function wptr_isSimpleXMLLoaded() {
	$array = array();
	$array = get_loaded_extensions();
	$result = false;
	
	foreach ($array as $i => $value) {
		if (strtolower($value) == "simplexml") { $result = true; }
	}
	return $result;
}

function wptr_verify_cache_dir() {
	global $wptr_cache_dir;

	$dir = dirname($wptr_cache_dir);
	if ( !file_exists($wptr_cache_dir) ) {
		if ( !is_writable( $dir ) || !($dir = mkdir( $wptr_cache_dir, 0777) ) ) {
				echo "<b>Error:</b> Your cache directory (<b>$wptr_cache_dir</b>) did not exist and couldn't be created by the web server.<br />Check  $dir permissions.";
				return false;
		}
	}
	if ( !is_writable($wptr_cache_dir)) {
		echo "<b>Error:</b> Your cache directory (<b>$wptr_cache_dir</b>) or <b>$dir</b> need to be writable for this plugin to work.<br />Double-check it.";
		return false;
	}

	if ( '/' != substr($wptr_cache_dir, -1)) {
		$wptr_cache_dir .= '/';
	}
	return true;
}

// Add the Options page
function wptr_add_options_page() {
	add_options_page('Technorati Rank Options', 'Technorati Rank', 'manage_options', 'technorati-rank/technorati-rank_admin.php');
	}
	
function wptr_add_style() {
	$style = get_option('siteurl') . '/wp-content/plugins/technorati-rank/style.css';
	echo "<style type='text/css'>@import \"".$style."\";</style>";
	}
	
function wptr_admin_head() {
	wptr_add_style();
	}

// Display the rank
function wptr_technoratirank($refresh = 0) {
	// retrieve the plugin options
		$wptr_apikey = stripslashes(get_option('wptr_apikey'));
		$wptr_url = stripslashes(get_option('wptr_url'));
		$wptr_hours = stripslashes(get_option('wptr_hours'));
		$wptr_blurb = stripslashes(get_option('wptr_blurb'));
		$wptr_cache_dir = ABSPATH.'wp-content/plugins/technorati-rank/cache/';
		
		if ( !wptr_verify_cache_dir() ) {
			echo "<br />Cannot continue... fix previous problems and retry.<br />";
			return;
		}
		
		if (!wptr_isSimpleXMLLoaded()) {
			echo "<br />Cannot continue... this plugin requires SimpleXML, released in PHP5 or higher.  Check with your hosting company to find out why they aren't providing you with the latest and greatest version of PHP!<br />";
			return;
		}
		
		if (($wptr_apikey!="")&&($wptr_url!="")&&($wptr_hours!="")) {
			$cachefile = $wptr_cache_dir."/technorati-rank.html";
			$cachetime = $wptr_hours * 60 * 60;

			// Serve from the cache if it is younger than $cachetime
			if (($refresh!=1)&&(file_exists($cachefile) && (time() - $cachetime < filemtime($cachefile)))) {
				include($cachefile);
			} else {
				// Retrieve the current rank from the API
				$request = 'http://api.technorati.com/bloginfo?key='.$wptr_apikey.'&url='.$wptr_url;
				
				// Initialize the session
				$session = curl_init($request);
				
				// Set curl options
				curl_setopt($session, CURLOPT_HEADER, false);
				curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
				
				// Make the request
				$response = curl_exec($session);
				
				// Close the curl session
				curl_close($session);
				
				// Get the XML from the response, bypassing the header
				if (!($xmlstr = strstr($response, '<?xml'))) {
					$xmlstr = null;
				} else {
					$xml = new SimpleXMLElement($xmlstr);
					$rank = trim($xml->document->result->weblog->rank);
					$rank = number_format($rank);
					$name = htmlspecialchars(trim($xml->document->result->weblog->name));
					$rssurl = trim($xml->document->result->weblog->rssurl);
					$inblog = $xml->document->result->inboundblogs;
					$inblog = number_format($inblog);
					$inlink = $xml->document->result->inboundlinks;
					$inlink = number_format($inlink);
					$error = "";
					$error = trim($xml->document->result->error);
				}
				// Construct the output
					$message =  "<!-- http://www.douglaskarr.com/projects/technorati-rank -->\n";
					$message .= "<div id=\"technorati-rank\">\n";
					$message .= "<a id=\"wptra\" href=\"".$rssurl."\" title=\"RSS Feed for ".$name."\"></a>\n";
					$message .= "<a id=\"wptrb\" href=\"http://www.technorati.com/blogs/".$wptr_url."\" title=\"".$name.": &#10;".$inlink." Links from ".$inblog." Blogs\"></a>\n";
					$message .= "<a id=\"wptrc\" href=\"http://www.technorati.com/faves/?add=".$wptr_url."\" title=\"Add ".$name." to my Technorati Favorites\"></a>\n";
					$message .= "<a id=\"wptrd\" href=\"http://www.technorati.com/wtf\" title=\"Where's the Fire?\"></a>\n";
					$message .= "<div id=\"wptre\">".$wptr_blurb." ".$rank."</div>\n";
					$message .= "<a id=\"wptrf\" href=\"http://www.technorati.com\" title=\"Visit Technorati\"></a>\n";
					$message .= "<a id=\"wptrg\" href=\"http://www.douglaskarr.com/projects/technorati-rank-plugin\" title=\"Get this WordPress Plugin for your Site!\" target=\"_blank\"></a>\n";
					$message .= "</div>\n";
					if ($error!="") { $message .= "<!-- ".$error." -->\n"; }
					$message .= "<!-- End Technorati Rank Plugin Results -->";
					
					// Write the results to a cache file
					if(strlen($rank)>0) {
						$fp = fopen($cachefile, 'w');
						fwrite($fp, $message);
						fclose($fp);
						echo $message;
					} else {
						include($cachefile);
					}
				}
			} else {
				echo "Please configure!";
			}
}

// Add the Technorati Options to the Administrative Menu
add_action('admin_head', 'wptr_add_options_page');
add_action('admin_head', 'wptr_admin_head');
// Add the Styles
add_action('wp_head', 'wptr_add_style');
?>