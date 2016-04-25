<?php dynamic_sidebar('sidebar-primary');?>
<section class="sidebar-cat">
	<h1><a href="categories/music"><img src="<?php bloginfo('template_directory')?>/dist/images/music-icon.png" class="cat-icon" alt="Music Category" />Music &rarr;</a></h1>
	<?php $postQuery = new WP_Query("category_name=main-feature&showposts=3");
while ($postQuery->have_posts()): $postQuery->the_post();
	?>
								  <div class="sidebar-article">
								 	<?php get_template_part('templates/content-sidebar', get_post_type() != 'post' ? get_post_type() : get_post_format());?>
								 </div>
							<?php endwhile;?>
</section>
<a class="twitter-timeline" href="https://twitter.com/KRUI" data-widget-id="695271595963592704">Tweets by @KRUI</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<section class="sidebar-cat">
<h1><a href="https://www.facebook.com/kruifm" target="_blank">KRUI on Facebook &rarr;</a></h1>
<div class="fb-page" data-href="https://www.facebook.com/kruifm" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/kruifm"><a href="https://www.facebook.com/kruifm">KRUI 89.7 FM</a></blockquote></div></div>
</section>