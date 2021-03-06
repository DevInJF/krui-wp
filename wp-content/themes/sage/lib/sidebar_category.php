<?php
/**
 * Add <body> classes
 */

function sidebar_category($category = "opinion") {

	if ($category == "column") {
		//$icon = '<img src="'.get_bloginfo('template_directory').'/dist/images/sound-wave-icon.svg" class="cat-icon" alt="Music Category" />';
		$iconSrc = 'online-content-icon.png';
		$iconAlt = 'Columns';
		$linkSrc = home_url( '/category/krui-column/' );
	}
	elseif ($category == "music") {
		//$icon = '<img src="'.get_bloginfo('template_directory').'/dist/images/sound-wave-icon.svg" class="cat-icon" alt="Music Category" />';
		$iconSrc = 'music-icon.png';
		$iconAlt = 'Music';
		$linkSrc = home_url( '/category/music/' );
	} elseif ($category == "film") {
		$iconSrc = 'film-icon.png';
		$iconAlt = 'Film';
		$linkSrc = home_url( '/tag/film/' );
	} elseif ($category == "sports") {
		$iconSrc = 'sports-icon.png';
		$iconAlt = 'Sports';
		$linkSrc = home_url( '/category/sports/' );
	} elseif ($category == "news") {
		$iconSrc = 'news-icon.png';
		$iconAlt = 'News';
		$linkSrc = home_url( '/category/news/' );
	} else {
		// $iconSrc = 'online-content-icon.png';
		// $iconAlt = 'Online Content';
		$iconSrc = 'online-content-icon.png';
		$iconAlt = 'Online Content';
		$linkSrc = home_url( '/category/krui-column/' );
	}

?>
<section class="sidebar-cat <?php echo $category ?>">
<h1>	


<?php if (isset($iconSrc) && isset($iconAlt)) {
		echo '<div class="cat-icon-container">';

			$icon = '<a href=' . $linkSrc . '>' . '<img src="' . get_bloginfo('template_directory') . '/dist/images/' . $iconSrc . '" class="cat-icon" alt="' . $iconAlt . '" />' . $iconAlt . ' &rarr;' . '</a>';
			echo $icon;	
		

		echo '<div class="clearfix"></div></div>';
	
	}

	if ($category == "music"){
		
		$postQuery = new WP_Query("tag=music-2,album-review-2,new-music,album&showposts=2");

	} elseif ($category == "film"){ //not a category
	
		$postQuery = new WP_Query("category_name=film&showposts=2");

	} elseif ($category == "news"){

		$postQuery = new WP_Query("category_name=news&showposts=2");

	} elseif ($category == "sports"){

		$postQuery = new WP_Query("category_name=sports&showposts=2");

	} elseif ($category == "krui-column"){

		$postQuery = new WP_Query("category_name=krui-column&showposts=2");

	} 	else{ //not a category
	
		$postQuery = new WP_Query("category_name=krui-column&showposts=2");

	}?>
	</h1>
	<?php
	//echo $header
	while ($postQuery->have_posts()): $postQuery->the_post();
		?>
	  	<div class="sidebar-article">
	 		<?php get_template_part('templates/content-sidebar', get_post_type() != 'post' ? get_post_type() : get_post_format());?>
	 	</div>
	<?php endwhile; ?>

	</section>

<?php }?>