=== Small caps ===
Contributors: chetan
Donate link:
Tags: smallcaps, abbr, typography
Requires at least: 2.0.2
Tested up to: 3.2.1
Stable tag: 1.0.4

Encloses capitalized words within `abbr` tags, so that abbr tags could be styled to display small caps&mdash;for typographical effect.

== Description ==

Encloses capitalized words with three or characters more within `<abbr> </abbr>` tags, so that abbr tags could be styled to display small caps&mdash;for typographical effect.

== Installation ==

1. Upload `small-caps.php` to the `/wp-content/plugins/` folder.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. The following styling is now part of the plugin code:

abbr { text-transform:lowercase; font-variant:small-caps; }

Optional: If you prefer to custom-style the appearance of small caps, then, you may comment lines 27 through to 33 in the plugin file `small-caps.php`, and then add the custom styling in your theme's style.css file.

== Frequently Asked Questions ==

= Does this plugin modify the database? =

No, it does not. So it's safe.
