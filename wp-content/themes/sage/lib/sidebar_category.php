<?php
/**
 * Add <body> classes
 */

function sidebar_category($category = "opinion") {

	if ($category == "music"){
		
		$postQuery = new WP_Query("category_name=music&showposts=3");

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
	<?php endwhile;

}?>