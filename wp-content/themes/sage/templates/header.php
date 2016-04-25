<?php
// This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
// somewhere in your theme.
?>
<div class="now-playing-bar">
    <div data-station="kzsc" data-num="1" data-time="0" data-nolinks="0" id="spinitron-nowplaying"></div>
    <script src="//spinitron.com/js/npwidget.js"></script>

</div>
<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?=__('Toggle navigation', 'sage');?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=esc_url(home_url('/'));?>"><img src="<?php echo get_bloginfo('template_directory'); ?>/dist/images/logo-white.png" /></a>

    </div>

    <nav class="collapse navbar-collapse" role="navigation">
<?php
if (has_nav_menu('primary_navigation')):
	wp_nav_menu(
		['theme_location' => 'primary_navigation',
			'walker' => new wp_bootstrap_navwalker(),
			'menu_class' => 'nav navbar-nav',
			'depth' => 2,
		]
	);
endif;
?>
<!--<form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
<!-- <a type="button" class="btn btn-primary navbar-btn">Listen</a> -->
<!-- <p class="navbar-text"> Hunny - Parking Lot
from Pain Ache Loving, 53 Minutes Ago</p> -->
 <ul class="nav navbar-nav navbar-right social visible-lg-block">
                <li><a href="https://www.facebook.com/kruifm/" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/krui" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/krui89.7fm/" target="_blank"><i class="fa fa-lg fa-instagram"></i></a></li>
                <li><a href="https://www.instagram.com/krui89.7fm/" target="_blank"><i class="fa fa-lg fa-rss"></i></a></li>

            </ul>

    </nav>
  </div>
</header>

<?php if (!is_single()) {
	?>
<div class="news-top-holder">
  <div class="news-top container">
  <?php
bootstrap_cols(8, new WP_query(array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 6,
	)));

	?>
  </div>
</div>
<?php }?>

<?php if (is_front_page()) {
	?>
<div class="featured-post container">
  <div class="row">
    <?php $postQuery = new WP_Query("category_name=main-feature&showposts=1");
	while ($postQuery->have_posts()): $postQuery->the_post();
		?>
																				    	  <div class="col-md-8">
																				    	 <?php get_template_part('templates/content-featured', get_post_type() != 'post' ? get_post_type() : get_post_format());?>
																				    	 </div>
																				   <?php endwhile;?>
    <div class="col-md-4 featured-sidebar">
    <?php $postQuery = new WP_Query("category_name=main-feature&showposts=2&offset=1");
	while ($postQuery->have_posts()): $postQuery->the_post();?>
																        <?php get_template_part('templates/content-featured-sidebar', get_post_type() != 'post' ? get_post_type() : get_post_format());?>
																	      <?php endwhile;?>


    </div>
  </div>
</div>
<?php }?>

