<?php
// This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
// somewhere in your theme.
?>
<div class="now-playing-bar">
    <div data-station="kzsc" data-num="1" data-time="0" data-nolinks="0" id="spinitron-nowplaying"></div>
    <script src="//spinitron.com/js/npwidget.js"></script>

</div>

<nav>

  <?php
if (has_nav_menu('primary_navigation')):
	wp_nav_menu(
		[
			'menu_class' => 'cd-primary-nav',
			'theme_location' => 'primary_navigation',
			'depth' => 1,
		]
	);
endif;
?>
</nav>
<header class="main-header">
  <div class="container">

<div class="cd-header" role="banner">
  <a class="cd-primary-nav-trigger" href="#0">
    <span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span>
  </a>
</div>

    <div class="test clearfix">
     <a class="logo big-logo" href="<?=esc_url(home_url('/'));?>">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/dist/images/krui-logo-text.png" />
      </a>

      <nav role="navigation" class="nav-wrapper no-print" aria-label="Main menu">
        <ul class="sec-nav">
          <li><a href="https://www.facebook.com/kruifm/" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/krui" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
          <li><a href="https://www.instagram.com/krui89.7fm/" target="_blank"><i class="fa fa-lg fa-instagram"></i></a></li>
          <li><a href="https://www.instagram.com/krui89.7fm/" target="_blank"><i class="fa fa-lg fa-rss"></i></a></li>
          <li><a href="https://soundcloud.com/krui" target="_blank"><i class="fa fa-lg fa-soundcloud"></i></a></li>
        </ul>
        <?php
if (has_nav_menu('primary_navigation')):
	wp_nav_menu(
		[
			'menu_class' => 'main-nav',
			'theme_location' => 'primary_navigation',
			'depth' => 2,
		]
	);
endif;
?>

      </nav>
    </div>

  </div>
</header>
<!--  <ul class="nav navbar-nav navbar-right social visible-lg-block">
                <li><a href="https://www.facebook.com/kruifm/" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/krui" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/krui89.7fm/" target="_blank"><i class="fa fa-lg fa-instagram"></i></a></li>
                <li><a href="https://www.instagram.com/krui89.7fm/" target="_blank"><i class="fa fa-lg fa-rss"></i></a></li>

            </ul> -->
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
