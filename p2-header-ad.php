<?php
/**
 * Plugin Name: P2 Header Ad
 * Plugin URI: http://wpguru.co.uk
 * Description: inserts a block of ad code into the P2 Theme's Header
 * Version: 1.0
 * Author: Jay Versluis
 * Author URI: http://wpguru.co.uk
 * License: GPL2
 */
 
/*  Copyright 2013  Jay Versluis (email support@wpguru.co.uk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Add a new submenu under DASHBOARD
function p2HeaderAd_menu() {
	
	// using a wrapper function (easy, but not good for adding JS later - hence not used)
	add_theme_page('P2 Header Ad', 'P2 Header Ad', 'administrator', 'p2HeaderAd', 'p2_header_ad_main');
}
add_action('admin_menu', 'p2HeaderAd_menu');

// link some styles to the admin page

	$p2headeradstyles = plugins_url ('p2-header-ad-styles.css', __FILE__);
	wp_enqueue_style ('p2headeradstyles', $p2headeradstyles );


////////////////////////////////////////////
// here's the code for the actual admin page
function p2_header_ad_main  () {
	
// check that the user has the required capability 
    if (!current_user_can('manage_options'))
    {
      wp_die( __('You do not have sufficient privileges to access this page. Sorry!') );
    }	

	
	///////////////////////////////////////
	// MAIN AMDIN CONTENT SECTION
	///////////////////////////////////////
	
	
	// display heading with icon WP style
	?>
    <div class="wrap">
    <div id="icon-index" class="icon32"><br></div>
<h2>P2 Header Ad</h2>
    
    <p>Enter some HTML in the box, and it will be displayed inside the P2 header</p>
    <p><em>imagine a box here where users can add a code snipped</em></p>
    <p>Things to do:</p>
    <ul>
      <li>add that box</li>
      <li>add save button</li>
      <li>save box content to database upon save</li>
    </ul>
   
    
    
	<?php
	// our code is inside a variable
	$p2HeaderCode = '<div id="p2HeaderAd"><a href="http://www.elegantthemes.com/affiliates/idevaffiliate.php?id=6674_0_1_7" target="_blank"><img style="border:0px" src="http://www.elegantthemes.com/affiliates/banners/468x60.gif" width="468" height="60" alt=""></a></div>';
	
	// let's save this to the database
	save_option ('p2HeaderCode', $p2HeaderCode);
	
	// now setup a hook inside the head
	
	
} // end of main function


// hopefully displays the advert
function p2DisplayAdvert () {
	
	$p2HeaderCode = get_option ('p2HeaderCode');
	echo '<div id="p2HeaderAd"><a href="http://www.versluis.com" target="_blank"><img style="border:0px" src="http://localhost/devplugins/wp-content/plugins/ps-header-ad/images/Header-Advert.png" width="468" height="60" alt=""></a></div>';
}
add_action ('wp_head', 'p2DisplayAdvert');



?>
