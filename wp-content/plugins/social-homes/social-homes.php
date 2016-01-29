<?php
/*
Plugin Name: Social Homes
Plugin URI: http://silentlycrashing.net/blog/repository/social-homes/
Description: Adds a sidebar widget containing a subtle list of all your social homes as linked favicons. Current services include anything and everything! Just add the full URL to the list of services and Social Homes will figure out what the icon is automatically. 
Author: Elie Zananiri
Author URI: http://www.silentlycrashing.net
Version: 3.3
Build: $Id: social-homes.php 113536 2009-04-27 00:11:11Z prisonerjohn $
*/

/*
This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/


include('load.php');


// global services list, used for importing data from 2.x to this version
$services[0]  = array(	
	'serv' =>'BlogCatalog',
	'link1'=>'http://www.blogcatalog.com/user/',
	'link2'=>'',
	'icon' =>'http://www.blogcatalog.com/favicon.ico'
);

$services[]  = array(	
	'serv' =>'Blogger',
	'link1'=>'http://',
	'link2'=>'.blogspot.com/',
	'icon' =>'http://blogspot.com/favicon.ico'
);

$services[]  = array(	
	'serv' =>'BUMPzee',
	'link1'=>'http://www.bumpzee.com/users/view/',
	'link2'=>'',
	'icon' =>'http://www.bumpzee.com/favicon.ico'
);

$services[]  = array(	
	'serv' =>'Dailymotion',
	'link1'=>'http://www.dailymotion.com/',
	'link2'=>'',
	'icon' =>'http://www.dailymotion.com/favicon.ico'
);
	
$services[] = array(
	'serv' =>'Delicious',
	'link1'=>'http://delicious.com/',
	'link2'=>'',
	'icon' =>'http://delicious.com/favicon.ico'
);

$services[]  = array(
	'serv' =>'Digg',
	'link1'=>'http://digg.com/users/',
	'link2'=>'',
	'icon' =>'http://digg.com/favicon.ico'
);

$services[]  = array(
	'serv' =>'Facebook',
	'link1'=>'http://www.facebook.com/profile.php?id=',
	'link2'=>'',
	'icon' =>'http://www.facebook.com/favicon.ico'
);

$services[]  = array(
	'serv' =>'Flickr',
	'link1'=>'http://www.flickr.com/people/',
	'link2'=>'',
	'icon' =>'http://www.flickr.com/favicon.ico'
);

$services[]  = array(
	'serv' =>'FriendFeed',
	'link1'=>'http://friendfeed.com/',
	'link2'=>'',
	'icon' =>'http://friendfeed.com/favicon.ico'
);

$services[]  = array(
	'serv' =>'Jaiku',
	'link1'=>'http://',
	'link2'=>'.jaiku.com/',
	'icon' =>'http://www.jaiku.com/favicon.ico'
);

$services[]  = array(	
	'serv' =>'Last.fm',
	'link1'=>'http://www.last.fm/user/',
	'link2'=>'',
	'icon' =>'http://cdn.last.fm/flatness/favicon.2.ico'
);

$services[]  = array(	
	'serv' =>'LinkedIn',
	'link1'=>'http://www.linkedin.com/in/',
	'link2'=>'',
	'icon' =>'http://www.linkedin.com/favicon.ico'
);

$services[]  = array(
	'serv' =>'LiveJournal',
	'link1'=>'http://',
	'link2'=>'.livejournal.com/',
	'icon' =>'http://www.livejournal.com/favicon.ico'
);

$services[]  = array(
	'serv' =>'Ma.gnolia',
	'link1'=>'http://ma.gnolia.com/people/',
	'link2'=>'',
	'icon' =>'http://ma.gnolia.com/favicon.ico'
);

$services[]  = array(
	'serv' =>'MyBlogLog',
	'link1'=>'http://www.mybloglog.com/buzz/members/',
	'link2'=>'',
	'icon' =>'http://www.mybloglog.com/favicon.ico'
);

$services[]  = array(
	'serv' =>'MySpace',
	'link1'=>'http://www.myspace.com/',
	'link2'=>'',
	'icon' =>'http://www.myspace.com/favicon.ico'
);

$services[]  = array(
	'serv' =>'Picasa',
	'link1'=>'http://picasaweb.google.com/',
	'link2'=>'',
	'icon' =>'http://picasa.google.com/assets/picasa.ico'
);

$services[]  = array(
	'serv' =>'Pownce',
	'link1'=>'http://pownce.com/',
	'link2'=>'',
	'icon' =>'http://pownce.com/img/favicon.ico'
);

$services[]  = array(
	'serv' =>'reddit',
	'link1'=>'http://www.reddit.com/user/',
	'link2'=>'',
	'icon' =>'http://www.reddit.com/favicon.ico'
);

$services[]  = array(
	'serv' =>'StumbleUpon',
	'link1'=>'http://',
	'link2'=>'.stumbleupon.com/',
	'icon' =>'http://www.stumbleupon.com/favicon.ico'
);

$services[]  = array(
	'serv' =>'Technorati',
	'link1'=>'http://www.technorati.com/people/technorati/',
	'link2'=>'',
	'icon' =>'http://www.technorati.com/favicon.ico'
);
	
$services[]  = array(
	'serv' =>'Twitter',
	'link1'=>'http://twitter.com/',
	'link2'=>'',
	'icon' =>'http://twitter.com/favicon.ico'
);

$services[]  = array(
	'serv' =>'Utterz',
	'link1'=>'http://www.utterz.com/~h-',
	'link2'=>'',
	'icon' =>'http://www.utterz.com/favicon.ico'
);
	
$services[]  = array(	
	'serv' =>'Vimeo',
	'link1'=>'http://www.vimeo.com/user:',
	'link2'=>'',
	'icon' =>'http://www.vimeo.com/favicon.ico'
);

$services[]  = array(
	'serv' =>'VIRB&deg;',
	'link1'=>'http://www.virb.com/',
	'link2'=>'',
	'icon' =>'http://www.virb.com/favicon.ico'
);

$services[]  = array(
	'serv' =>'XING',
	'link1'=>'https://www.xing.com/profile/',
	'link2'=>'',
	'icon' =>'https://www.xing.com/favicon.ico'
);

$services[]  = array(
	'serv' =>'YouTube',
	'link1'=>'http://www.youtube.com/profile?user=',
	'link2'=>'',
	'icon' =>'http://www.youtube.com/favicon.ico'
);

$services[]  = array(	
	'serv' =>'Zooomr',
	'link1'=>'http://www.zooomr.com/',
	'link2'=>'',
	'icon' =>'http://www.zooomr.com/favicon.ico'
);


$defaultName = 'Service Name';
$defaultAddress = 'http://www.full.address.com';


///////////////////////////////////////////////////////////////////////////////////////////
// Social Homes init
// all Social Homes functions are encapsulated here to ensure that widget 
// funtionality exists
// called at the plugins_loaded action
///////////////////////////////////////////////////////////////////////////////////////////
function widget_socialhomes_init() {
	
	// make sure the widget functionality exists before proceeding
	if (!function_exists('register_sidebar_widget'))
		return;

	///////////////////////////////////////////////////////////////////////////////////////
	// Social Homes output
	// prints out the registered services in order as linked favicons
	///////////////////////////////////////////////////////////////////////////////////////
	function widget_socialhomes($args) {
	
		// $args is an array of strings that help widgets to conform to
		// the active theme: before_widget, before_title, after_widget,
		// and after_title are the array keys. Default tags: li and h2.
		extract($args);

		// load the Social Homes data
		$options = get_option('widget_socialhomes3');
		
		// generate the output
		if ($options['show-title'])
			$title = htmlspecialchars($options['title'], ENT_QUOTES);
			
		if ($options['link-blank']) 
			$linkBlank = 'target="_blank"';
		else 
			$linkBlank = '';

		echo $before_widget . $before_title . $title . $after_title;
		$url_parts = parse_url(get_bloginfo('home'));
		echo '<div class="socialhomes" style="margin-top:5px;text-align:left;">';
		for ($i=0; $i < count($options); $i++) {
			if ($options[$i]['toggle']) {
				// get the data
				$name = $options[$i]['name'];
				$icon = $options[$i]['icon'];
				$address = $options[$i]['address'];
				
				// print the link
				echo '<a title="' . $name . '" href="' . $address . '" rel="external" ' . $linkBlank . '><img width="16" height="16" src="' . $icon . '" alt="' . $name . '" /></a>&nbsp;&nbsp;';
			}
		}
		echo '</div>';
		echo $after_widget;
		
	}
	
	
	///////////////////////////////////////////////////////////////////////////////////////////
	// Social Homes service parser
	// Retrieves the page title and favicon from the given URL
	///////////////////////////////////////////////////////////////////////////////////////////
	function widget_socialhomes_parse_service($url) {
	
		// load the URL
		$url = strip_tags(stripslashes($url));
		$urlComponents = parse_url($url);
		$domain = $urlComponents['host'];
		
		$contents = load($url);
		
		// grab the name
		$tmpName1 = split('<title>', $contents);
		$tmpName2 = split('</title>', $tmpName1[1]);
		$name = strip_tags(stripslashes($tmpName2[0]));
		
		// grab the favicon
		$tmpIcon1 = split('"shortcut icon"', $contents);
		$tmpIcon2 = split('href="', $tmpIcon1[1]);
		$tmpIcon3 = split('"', $tmpIcon2[1]);
		$icon = $tmpIcon3[0];
		// if there's no favicon, assume it is at the standard location
		if (strcmp($icon, '') == 0) {
			$icon = 'http://' . $domain . '/favicon.ico';
		}
		// make sure the favicon url is complete
		else if (strpos($icon, 'http://') === FALSE) {
			$icon = 'http://' . $domain . $icon;
		}
		
		return array('name' => $name, 'icon' => $icon, 'address' => $url);
		
	}


	///////////////////////////////////////////////////////////////////////////////////////
	// Social Homes control form
	// sets up the services to register and the order to display them in
	///////////////////////////////////////////////////////////////////////////////////////
	function widget_socialhomes_control() {
	
		global $services;
		global $defaultName;
		global $defaultAddress;
		
		// get the data
		$options = get_option('widget_socialhomes3');
		
		if (!is_array($options)) {
			$options = array();
			$options['show-title'] = ' checked';
			$options['title'] = 'Social Homes';
			$options['link-blank'] = ' checked';
			
			// look for old data that can be ported over
			$oldOptions = get_option('widget_socialhomes');			
			if (is_array($oldOptions)) {
				$options['show-title'] = $oldOptions['show-title'];
				$options['title'] = $oldOptions['title'];
				
				// rebuild the old services
				for ($i=0; $i < count($services); $i++) {
					if (strcmp($oldOptions[$i]['toggle'], ' checked') == 0) {
						$s = $oldOptions[$i]['service'];

						$address = $services[$s]['link1'].htmlspecialchars($oldOptions[$i]['handle'], ENT_QUOTES).$services[$s]['link2'];
						//$icon = $services[$s]['icon'];
						$name = $services[$s]['serv'];
						$options[] = array('name'=>$name, 'toggle'=>' checked', 'address'=>$address);
					}
					
				}
			}
			
			// create default services
			for ($i=0; $i < 5; $i++) {
				$options[] = array('name'=>$defaultName, 'toggle'=>0, 'address'=>$defaultAddress);
			}
		}
		else {
			// add a few extra default services
			$num = count($options) + 3;
			for ($i=$num-1; $i > $num-6; $i--) {
				$options[] = array('name'=>$defaultName, 'toggle'=>0, 'address'=>$defaultAddress);
			}
		}
		
		$numServices = count($options) - 3;
		
		// save the submitted data if there was a submit
		if ($_POST['socialhomes-submit']) {
			// parse submitted data into the $options array
			if ($_POST['socialhomes-show-title']) 
				$options['show-title'] = ' checked';
			else
				$options['show-title'] = '';

			$options['title'] = strip_tags(stripslashes($_POST['socialhomes-title-text']));
			
			if ($_POST['socialhomes-link-blank']) 
				$options['link-blank'] = ' checked';
			else
				$options['link-blank'] = '';
			
			for ($i=0; $i < $numServices; $i++) {
				$service = widget_socialhomes_parse_service($_POST['socialhomes-' . $i . '-address']);
				
				// if the address is still the default value or is empty, skip this entry
				if (strcmp($_POST['socialhomes-' . $i . '-address'], $defaultAddress) == 0 ||
					strcmp($_POST['socialhomes-' . $i . '-address'], '') == 0) {
					$options[$i]['address'] = $_POST['socialhomes-' . $i . '-address'];
					continue;
				}
				
				// set toggle
				if ($_POST['socialhomes-' . $i . '-toggle']) 
					$options[$i]['toggle'] = ' checked';
				else 
					$options[$i]['toggle'] = '';
					
				// set name
				if (strcmp($_POST['socialhomes-' .$i . '-name'], $defaultName) != 0) {
					// use the user-defined name
					$options[$i]['name'] = strip_tags(stripslashes($_POST['socialhomes-' . $i . '-name']));
				} else {
					// use the page title
					$options[$i]['name'] = $service['name'];
				}
				
				// set icon
				$options[$i]['icon'] = $service['icon'];
				
				// set address
				$options[$i]['address'] = $service['address'];
			}
			
			// remove all the incomplete entries
			$newOptions = array();
			$newOptions['show-title'] = $options['show-title'];
			$newOptions['title'] = $options['title'];
			$newOptions['link-blank'] = $options['link-blank'];
			for ($i=0; $i < $numServices; $i++) {
				if (strcmp($options[$i]['address'], $defaultAddress) != 0 &&
					strcmp($options[$i]['address'], '') != 0) {
					$newOptions[] = $options[$i];
				}
			}
			
			// save all the new data in the persistent storage
			update_option('widget_socialhomes3', $newOptions);
		}
		
		// print the control form
		// general options
		echo '<p style="text-align:left;font-size:10px;">';
		echo '<input type="checkbox" id="socialhomes-show-title" name="socialhomes-show-title" ' . $options['show-title'] . '></input>';
		echo '&nbsp;&nbsp;';
		echo 'Title';
		echo '&nbsp;&nbsp;';
		echo '<input style="width:180px;font-size:14px;margin-right:0;" id="socialhomes-title-text" name="socialhomes-title-text" type="text" value="' . htmlspecialchars($options['title'], ENT_QUOTES) . '" />';
		echo '</p>';
		
		echo '<p style="text-align:left;font-size:10px;">';
		echo '<input type="checkbox" id="socialhomes-link-blank" name="socialhomes-link-blank" ' . $options['link-blank'] . '></input>';
		echo '&nbsp;&nbsp;';
		echo 'Open links in new page';
		echo '</p>';
		
		// services
		for ($i=0; $i < $numServices; $i++) {
			echo '<p style="text-align:left;font-size:10px;">';
			// print a checkbox to enable or disable the service
		    echo '<input type="checkbox" id="socialhomes-' . $i . '-toggle" name="socialhomes-' . $i . '-toggle" ' .$options[$i]['toggle'] . '></input>';
			echo '&nbsp;&nbsp;';
			// print a text field for the name
			echo '<input style="width:100px;height:20px;font-size:10px;margin-right:0;" id="socialhomes-' . $i . '-name" name="socialhomes-' . $i . '-name" type="text" value="' . htmlspecialchars($options[$i]['name'], ENT_QUOTES) . '" />';
			echo '<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
			// print a text field for the address
			echo '<input style="width:220px;height:20px;font-size:10px;margin-right:0;" id="socialhomes-'.$i.'-address" name="socialhomes-' . $i . '-address" type="text" value="' . htmlspecialchars($options[$i]['address'], ENT_QUOTES) . '" />';
			echo '</p>';
		}
		echo '<input type="hidden" id="socialhomes-submit" name="socialhomes-submit" value="1" />';
	}
	
	
	// registers Social Homes so it appears with the other available widgets and 
	// can be dragged and dropped into any active sidebars
	register_sidebar_widget(array('Social Homes', 'widgets'), 'widget_socialhomes');

	// registers the Social Homes control form
	register_widget_control(array('Social Homes', 'widgets'), 'widget_socialhomes_control');
	
}


// run the Social Homes code later in case it loads prior to any required plugins
add_action('widgets_init', 'widget_socialhomes_init');

?>
