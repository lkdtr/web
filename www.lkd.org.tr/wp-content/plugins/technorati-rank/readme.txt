Plugin Name: Technorati Rank
Plugin URI: http://www.douglaskarr.com/projects/technorati-rank-plugin
Description: A plugin for users who wish to display their Technorati Rank on their blog
Author: Doug Karr
Author URI: http://www.douglaskarr.com
Version: 2.1.0
--------------------------

Installation
--------------------------
1. Upload all files to wp-content/plugins/technorati-rank/
2. Activate the plugin on the plugin screen
3. Go to Options -> Technorati Rank and update the fields with your information

Upgrade
--------------------------
Just be sure to overwrite any files that are already in the directory.

History
--------------------------
2.1.0: Added function to verify if SimpleXML is loaded.
2.0.9: Fixed an issue where the Submission button was obscured.
2.0.8: Due to some performance issues with Technorati's API, I've got it now pulling from the cache file if there is no rank returned.
2.0.7: Corrected an issue where the options page may not process in Internet Explorer
2.0.6: Modified the style for the text to ensure it's black for those folks with white backgrounds
2.0.5: Fixed a bug reported by Dan Chase (http://blog.cdchase.com/) where the default cache setting wasn't getting picked up.
2.0.4: Modified the cache directory
2.0.3: Updated my Blog Name in the Admin Section
2.0.2: Encode the output of the blog name in the event of a symbol
2.0.1: Made the cache directory configurable.  It's not configurable in the admin interface but can be modified in the plugin code ($cache_dir)
2.0.0: Totally redesigned the output and pointed to a CSS file in the plugin directory
1.1.1: Added variable for rank blurb
1.1.0: Updated Style tag
1.0.9: Added alternate and title tags to the images for W3C compliance.
1.0.8: I've got this caching to the same caching directory that WP-Cache does so that it's not adding additional folders.


Frequently Asked Questions
--------------------------


Bugs - Features - Support
--------------------------
Please report bugs via:
http://www.douglaskarr.com/contact-me/

If you need support, I will try and respond in a timely fashion, but currently I am trying to stick to bug requests and incorporating new features. You can contact me through the form for support.