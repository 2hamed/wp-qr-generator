=== QR Generator ===
Contributors: 2hamed
Tags: qr-code,permalink,android,phone,mobile
Author URI: http://ootooban.com
Author: Hamed Momeni
Requires at least: 3.0.0
Tested up to: 3.4.1
Stable tag: 0.9

Creates and shows QR code images for blog articles.

== Description ==

Through this plugin you can create QR Code images based on your posts' permalinks and show anywhere in your theme.

== Installation ==

Just copy the plugin folder in `wp-content/plugins/` and activate it.

For showing the actuall QR Code you need to use function `show_qr();` provided by this plugin.
or you could just copy the following code into your `single.php` file of your theme. Remember this function must be used inside the loop.

    if(function_exists('show_qr')){ show_qr(128);}

If you noticed, there is number (128) which indicates the image size.
