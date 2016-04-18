<?php
/**
 * Add <body> classes
 */

function cat_icon() {

	$musicTags = array('music', 'album', 'album review');
	$filmTags = array('film', 'movie', 'movies', 'films', 'film review');

	if (has_tag($musicTags)) {
		//$icon = '<img src="'.get_bloginfo('template_directory').'/dist/images/sound-wave-icon.svg" class="cat-icon" alt="Music Category" />';
		$iconSrc = 'music-icon.png';
		$iconAlt = 'Music Category';
	} elseif (has_tag($filmTags)) {
		$iconSrc = 'film-icon.png';
		$iconAlt = 'Film Category';
	} elseif (in_category(array('Sports'))) {
		$iconSrc = 'sports-icon.png';
		$iconAlt = 'Sports Category';
	} elseif (in_category(array('News', 'News Feature'))) {
		$iconSrc = 'news-icon.png';
		$iconAlt = 'News Category';
	}

	if (isset($iconSrc) && isset($iconAlt)) {
		$icon = '<img src="' . get_bloginfo('template_directory') . '/dist/images/' . $iconSrc . '" class="cat-icon" alt="' . $iconAlt . '" />';
		echo $icon;
	}

}
add_filter('cat_icon', __NAMESPACE__ . '\\cat_icon');