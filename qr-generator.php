<?php
/*
=== QR Generator ===
Plugin Name: QR Generator
Plugin URI: http://ootooban.com/qr-generator-for-wordpress/
Description: Creates and shows QR code images for blog articles. <br /> <b>Usage:</b> Use the function show_qr(128); in your theme. The number indicates the size of the image.
Author: Hamed Momeni
Author URI: http://ootooban.com
Version: 0.9
*/
define('IMG_URL',plugins_url( 'qr-img.php' , __FILE__ ));
require('qrcode.php');
function show_qr($size = 128){
	global $post;
	$permalink = get_permalink($post->ID);
	$qr = new qrcode();
	$qr->link($permalink);
	echo '<a href="',$permalink,'" class="qr-anchor"><img src="',$qr->get_link(intval($size)),'" class="qr-img" title="',$post->post_title,'"/></a>';
}
