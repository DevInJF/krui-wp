<?php
/**
 * Add <body> classes
 */

function cat_icon($link = false, $category = "Opinion") {

	$musicTags = array('music', 'album', 'album review');
	$filmTags = array('film', 'movie', 'movies', 'films', 'film review');

	if (has_tag($musicTags) || $category == "Music") {
		//$icon = '<img src="'.get_bloginfo('template_directory').'/dist/images/sound-wave-icon.svg" class="cat-icon" alt="Music Category" />';
		$iconSrc = 'music-icon.png';
		$iconAlt = 'Music Category';
		$linkSrc = home_url( '/category/music/' );
	} elseif (has_tag($filmTags) || $category == "Film") {
		$iconSrc = 'film-icon.png';
		$iconAlt = 'Film Category';
		$linkSrc = home_url( '/tag/film/' );
	} elseif (in_category(array('Sports')) || $category == "Sports") {
		$iconSrc = 'sports-icon.png';
		$iconAlt = 'Sports Category';
		$linkSrc = home_url( '/category/sports/' );
	} elseif (in_category(array('News', 'News Feature')) || $category == "News") {
		$iconSrc = 'news-icon.png';
		$iconAlt = 'News Category';
		$linkSrc = home_url( '/category/news/' );
	} else {
		// $iconSrc = 'online-content-icon.png';
		// $iconAlt = 'Online Content';
		$iconSrc = 'online-content-icon.png';
		$iconAlt = 'Online Content';
		$linkSrc = home_url( '/tag/opinion/' );
	}

	if (isset($iconSrc) && isset($iconAlt)) {
		if ($link){
			$icon = '<a href=' . $linkSrc . '>' . '<img src="' . get_bloginfo('template_directory') . '/dist/images/' . $iconSrc . '" class="cat-icon" alt="' . $iconAlt . '" />' . $category . '&rarr;' . '</a>';
			echo $icon;	
		} else{
			$icon = '<img src="' . get_bloginfo('template_directory') . '/dist/images/' . $iconSrc . '" class="cat-icon" alt="' . $iconAlt . '" />';
			echo $icon;
		}
	
	}

}
add_filter('cat_icon', __NAMESPACE__ . '\\cat_icon');