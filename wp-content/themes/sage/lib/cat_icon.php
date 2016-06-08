<?php
/**
 * Add <body> classes
 */

function cat_icon($link = false, $category = "Opinion") {

	$musicTags = array('music', 'album', 'album review');
	$filmTags = array('film', 'movie', 'movies', 'films', 'film review');

 	if (in_category(array('Column'))) {

		if (has_tag($filmTags)) {
				$iconSrc = 'film-icon.png';
				$iconAlt = 'Film Category';
		}elseif (has_tag($musicTags)) {
			//$icon = '<img src="'.get_bloginfo('template_directory').'/dist/images/sound-wave-icon.svg" class="cat-icon" alt="Music Category" />';
			$iconSrc = 'music-icon.png';
			$iconAlt = 'Music Category';
			$linkSrc = home_url( '/category/music/' );
		}else{
			$iconSrc = 'online-content-icon.png';
			$iconAlt = 'Columns';
			$linkSrc = home_url( '/category/column/' );
		}
	}
	elseif (has_tag($musicTags)) {
		//$icon = '<img src="'.get_bloginfo('template_directory').'/dist/images/sound-wave-icon.svg" class="cat-icon" alt="Music Category" />';
		$iconSrc = 'music-icon.png';
		$iconAlt = 'Music';
		$linkSrc = home_url( '/category/music/' );
	} elseif (has_tag($filmTags) || $category == "film") {
		$iconSrc = 'film-icon.png';
		$iconAlt = 'Film';
		$linkSrc = home_url( '/tag/film/' );
	} elseif (in_category(array('Sports')) || $category == "sports") {
		$iconSrc = 'sports-icon.png';
		$iconAlt = 'Sports';
		$linkSrc = home_url( '/category/sports/' );
	} elseif (in_category(array('News', 'News Feature')) || $category == "news") {
		$iconSrc = 'news-icon.png';
		$iconAlt = 'News';
		$linkSrc = home_url( '/category/news/' );
	} else {
		// $iconSrc = 'online-content-icon.png';
		// $iconAlt = 'Online Content';
		$iconSrc = 'online-content-icon.png';
		$iconAlt = 'Online Content';
		$linkSrc = home_url( '/tag/opinion/' );
	}

	if (isset($iconSrc) && isset($iconAlt)) {
		echo '<div class="cat-icon-container">';
		if ($link){
			$icon = '<a href=' . $linkSrc . '>' . '<img src="' . get_bloginfo('template_directory') . '/dist/images/' . $iconSrc . '" class="cat-icon" alt="' . $iconAlt . '" />' . $iconAlt . '&rarr;' . '</a>';
			echo $icon;	
		} else{
			$icon = '<img src="' . get_bloginfo('template_directory') . '/dist/images/' . $iconSrc . '" class="cat-icon" alt="' . $iconAlt . '" />';
			echo $icon;
		}

		echo '<div class="clearfix"></div></div>';
	
	}

}
add_filter('cat_icon', __NAMESPACE__ . '\\cat_icon');