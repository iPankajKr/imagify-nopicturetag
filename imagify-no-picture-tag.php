<?php
/**
 * Plugin Name: Imagify | Prevent picture tag
 * Description: Prevents the replacement of img tag with picture tag.
 * Plugin URI:  https://github.com/iPankajKr/imagify-nopicturetag
 * Author:      Pankaj Kumar
 * Author URI:  https://github.com/iPankajKr
 * License:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright SAS WP MEDIA 2018
 */

namespace Imagify\Webp\Picture;

defined( 'ABSPATH' ) or die();

function disable_picture($allow) {
	
	//Prevent the replacement of <img> tag with <picture> by changing the value of $allow to 'false'.

	$allow = false;
}


//Required hook to interact with Imagify.
add_action( 'imagify_allow_picture_tags_for_webp', 'disable_picture', 2 );
