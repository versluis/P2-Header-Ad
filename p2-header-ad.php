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
	
	/////////////////////////////////////////////////////////////////////////////////////
	// SAVING CHANGES
	/////////////////////////////////////////////////////////////////////////////////////
	
	if (isset($_POST['SaveChanges'])) {
		// save content of text box
		update_option ('p2HeaderCode', $_POST['p2HeaderCode']);
	}
	
	if (isset ($_POST['SampleData'])) {
		// populate with sample data
		update_option ('p2HeaderCode', '<div id="p2HeaderAd"><a href="http://www.versluis.com" target="_blank"><img style="border:0px" src="http://localhost/devplugins/wp-content/plugins/p2-header-ad/images/Header-Advert.png" width="468" height="60" alt=""></a></div>');
	}
	
	//////////////////////////////////
	// READ IN DATABASE OPTION
	//////////////////////////////////
	
	$p2HeaderCode = get_option ('p2HeaderCode');


	
	///////////////////////////////////////
	// MAIN AMDIN CONTENT SECTION
	///////////////////////////////////////
	
	
	// display heading with icon WP style
	?>
    <form name="p2HeaderAdForm" method="post" action="">
    <div class="wrap">
    <div id="icon-index" class="icon32"><br></div>
<h2>P2 Header Advert</h2>
    
    <p>Enter some HTML in the box, and it will be displayed inside the P2 header</p>
    <p><em>imagine a box here where users can add a code snipped</em></p>
    <p>Things to do:</p>
    <ul>
      <li>save box content to database upon save</li>
    </ul>
    
    <textarea name="p2HeaderCode" cols="80" rows="10" class="p2CodeBox">
    <?php $p2HeaderCode; ?>
    </textarea>
    
    <p>&nbsp; </p>
    <p class="save-button-wrap">
    <input type="submit" name="SaveChanges" class="button-primary" value="Save Changes" />
    &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" name="SampleData" class="button-secondary" value="Use Sample Data" />
    
    </form> 
 
	<?php	
	
	/////////////
	// TESTING
	/////////////
	
	// do we have the right value here?
	echo 'Testing here... <br>';
	echo get_option ('p2HeaderCode');
	
} // end of main function


// hopefully displays the advert
function p2DisplayAdvert () {
	
	$p2HeaderCode = get_option ('p2HeaderCode');
	echo '<div id="p2HeaderAd"><a href="http://www.versluis.com" target="_blank"><img style="border:0px" src="http://localhost/devplugins/wp-content/plugins/p2-header-ad/images/Header-Advert.png" width="468" height="60" alt=""></a></div>';
}
add_action ('wp_head', 'p2DisplayAdvert');



?>
