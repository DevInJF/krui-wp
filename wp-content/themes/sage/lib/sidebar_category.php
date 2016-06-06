<?php
/**
 * Add <body> classes
 */

function sidebar_category($category = "opinion") {

	if ($category == "music") {
		//$icon = '<img src="'.get_bloginfo('template_directory').'/dist/images/sound-wave-icon.svg" class="cat-icon" alt="Music Category" />';
		$iconSrc = 'music-icon.png';
		$iconAlt = 'Music Category';
		$linkSrc = home_url( '/category/music/' );
	} elseif ($category == "film") {
		$iconSrc = 'film-icon.png';
		$iconAlt = 'Film Category';
		$linkSrc = home_url( '/tag/film/' );
	} elseif ($category == "sports") {
		$iconSrc = 'sports-icon.png';
		$iconAlt = 'Sports Category';
		$linkSrc = home_url( '/category/sports/' );
	} elseif ($category == "news") {
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

?>
<section class="sidebar-cat <?php echo $category ?>">
<h1>	


<?php if (isset($iconSrc) && isset($iconAlt)) {
		echo '<div class="cat-icon-container">';

			$icon = '<a href=' . $linkSrc . '>' . '<img src="' . get_bloginfo('template_directory') . '/dist/images/' . $iconSrc . '" class="cat-icon" alt="' . $iconAlt . '" />' . $category . '&rarr;' . '</a>';
			echo $icon;	
		

		echo '<div class="clearfix"></div></div>';
	
	}

	if ($category == "music"){
		
		$postQuery = new WP_Query("tag=music-2,album-review-2,new-music,album&showposts=3");

	} elseif ($category == "film"){ //not a category
	
		$postQuery = new WP_Query("category_name=film&showposts=3");

	} elseif ($category == "news"){

		$postQuery = new WP_Query("category_name=news&showposts=3");

	} elseif ($category == "sports"){

		$postQuery = new WP_Query("category_name=sports&showposts=3");

	} else{ //not a category
	
		$postQuery = new WP_Query("category_name=opinion&showposts=3");

	}	
	//echo $header
	while ($postQuery->have_posts()): $postQuery->the_post();
		?>
	  	<div class="sidebar-article">
	 		<?php get_template_part('templates/content-sidebar', get_post_type() != 'post' ? get_post_type() : get_post_format());?>
	 	</div>
	<?php endwhile; ?>

	</section>

<?php }?>