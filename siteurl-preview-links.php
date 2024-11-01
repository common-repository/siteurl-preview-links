<?php
/*
Plugin Name: SITEURL for Preview Links
Plugin URI:  https://www.geeky.software/wordpress-plugins/siteurl-preview-links/
Description: Rewrites preview links from HOME to SITEURL.
Version:     1.0.6
Author:      Geeky Software
Author URI:  https://www.geeky.software/
License:     GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

if (!defined('ABSPATH')) {
  header('HTTP/1.1 403 Forbidden');
  exit(  'HTTP/1.1 403 Forbidden');
}

function siteurl_preview_links_rewrite($preview_link, $post = NULL) {
  return str_replace(get_home_url(), get_site_url(), $preview_link);
}
add_filter('preview_post_link', 'siteurl_preview_links_rewrite');

?>
