<td width="508" valign="top">
<?php
/* 
 ======================================================================
 lastRSS usage DEMO 2
 ----------------------------------------------------------------------
 This example shows, how to
     - create lastRSS object
    - set transparent cache
    - get RSS file from URL
    - access and show fields of the result
 ======================================================================
*/

// include lastRSS
include "./lastRSS.php";

// Create lastRSS object
$rss = new lastRSS;

// Set cache dir and cache time limit (1200 seconds)
// (don't forget to chmod cahce dir to 777 to allow writing)
$rss->cache_dir = './temp';
$rss->cache_time = 1200;

// Try to load and parse RSS file
if ($rs = $rss->get('http://haber.linux.org.tr/feed/')) {
    // Show website logo (if presented)
    if ($rs[image_url] != '') {
        echo "<a href=\"$rs[image_link]\"><img src=\"$rs[image_url]\" alt=\"$rs[image_title]\" vspace=\"1\" border=\"0\" /></a><br />\n";
        }
    // Show clickable website title
    echo "<big><b><a href=\"$rs[link]\">$rs[title]</a></b></big><br />\n";
    // Show website description
    echo "$rs[description]<br />\n";
    // Show last published articles (title, link, description)
    echo "<ul>\n";
    foreach($rs['items'] as $item) {
        echo "\t<li><a href=\"$item[link]\">".$item['title']."</a><br />".$item['description']."</li>\n";
        }
    echo "</ul>\n";
    }
else {
    echo "Error: It's not possible to reach RSS file...\n";
}
?> 
</td>
