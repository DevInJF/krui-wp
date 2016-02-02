<?php
/**
 * Add <body> classes
 */

function cat_icon() {

	$musicTags = array( 'music', 'album', 'album review');
	$filmTags = array( 'film', 'movie', 'movies', 'films', 'film review');


	if ( has_tag( $musicTags )) {
		//$icon = '<img src="'.get_bloginfo('template_directory').'/dist/images/sound-wave-icon.svg" class="cat-icon" alt="Music Category" />';
		$iconSrc = 'sound-wave-icon.svg';
		$iconAlt = 'Music Category';
	}elseif(has_tag($filmTags)){
		$iconSrc = 'film-icon.svg';
		$iconAlt = 'Film Category';
	}elseif(in_category(array('Sports'))){
		$iconSrc = 'sports-icon.svg';
		$iconAlt = 'Sports Category';
	}elseif(in_category(array('News', 'News Feature'))){
		$iconSrc = 'news-icon.svg';
		$iconAlt = 'News Category';
	}

	if(isset($iconSrc) && isset($iconAlt)){
		$icon = '<img src="'.get_bloginfo('template_directory').'/dist/images/'.$iconSrc.'" class="cat-icon" alt="'.$iconAlt.'" />';
		echo $icon;
	}

	
}
add_filter('cat_icon', __NAMESPACE__ .'\\cat_icon');