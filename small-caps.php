<?php
/*
Plugin Name: Small caps
Plugin URI: http://github.com/ckunte/small-caps
Description: Small caps for capitalized words. This plugin looks for sequences of 3 or more uppercase letters or numbers, such as CSS, HTML and W3C, and wraps an `&lt;abbr&gt;` tag around them. Credits to <a href="http://webtypography.net/">Webtypography</a> for the function, and for inspiration.
Version: 1.0.4
Author: ckunte
Author URI: http://github.com/ckunte
*/
//
// This function looks for sequences of 3 or more uppercase letters or numbers, 
// such as CSS, HTML and W3C, and wraps an <abbr> tag around them.
//
function ckunte_smallcaps($text) {
        $search = "/\s\b([A-Z][A-Z0-9]{2,})\b/";
        $replace = " <abbr>$1</abbr>";
        $text = preg_replace($search,$replace,$text);
        return $text;
}
//
if (function_exists('add_filter')) {
        add_filter('the_content', 'ckunte_smallcaps');
}
// 
// Adding styling to template's head section. 
// Intentionally excluded for users' freedom to style.
// 
// Styling abbr to lowercase first, and then to small-caps.
//
// Uncomment following lines (take out those //s, if you prefer automatic styling as specified below.
function ckunte_smallcaps_wp_head () {
      echo "\n<style>abbr{text-transform:lowercase; font-variant:small-caps;font-size:110%;}</style>\n";
 }
 if (function_exists('add_action')) {
     add_action( 'wp_head', 'ckunte_smallcaps_wp_head' );
 }
//
?>
