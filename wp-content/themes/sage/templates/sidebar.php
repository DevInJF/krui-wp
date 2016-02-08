<?php dynamic_sidebar('sidebar-primary'); ?>
<section class="sidebar-cat">
	<h1><img src="<?php bloginfo('template_directory')?>/dist/images/sound-wave-icon.svg" class="cat-icon" alt="Music Category" />Music</h1>
	<?php $postQuery = new WP_Query("category_name=main-feature&showposts=3"); 
  		while ($postQuery->have_posts()) : $postQuery->the_post();
	?>
		  <div class="sidebar-article">
		 	<?php get_template_part('templates/content-sidebar', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
		 </div>
	<?php endwhile; ?>
</section>
<a class="twitter-timeline" href="https://twitter.com/KRUI" data-widget-id="695271595963592704">Tweets by @KRUI</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>