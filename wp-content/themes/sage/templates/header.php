<?php
// This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
// somewhere in your theme.
?>
<!-- <div class="now-playing-bar">
    
<script src="//spinitron.com/js/npwidget.js"></script>
    <div data-station="krui" data-num="1" data-time="0" data-nolinks="0" id="spinitron-nowplaying">
      <p class="recentsong"><a href="https://spinitron.com/radio/playlist.php?station=krui#main" target="_blank">KRUI on Spinitron &rarr;</a></p>
    </div>
</div>
 -->
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
          <a href="<?php echo site_url(); ?>/wp-content/themes/sage/player.html" class="stream-link-mobile btn"><span class="stream-link-mobile__text">Stream</span> <img class="tower-icon tower-icon--mobile" alt="" role="presentation" src="<?php echo get_bloginfo('template_directory'); ?>/dist/images/tower.png"></a>
    <div class="clearfix">
     <a class="logo big-logo" href="<?=esc_url(home_url('/'));?>">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/dist/images/krui-logo-text-sm.png" srcset="<?php echo get_bloginfo('template_directory'); ?>/dist/images/krui-logo-text.png 2x" />
      </a>
<!--       <div id="spin-top">
        <i class="fa fa-music" aria-hidden="true"></i>
        <div id="spin-header" data-station="krui" data-num="1">
        </div>
      </div> -->
      <script>
        (function (win, doc, id) {
            'use strict';
            var query = [], i, attr, script, elem = doc.getElementById(id),
                attrs = ['station', 'num', 'time', 'nolinks', 'tweets', 'target'],
                fn = '_spinitron' + (Math.random().toString() + new Date().getTime()).slice(2, -1);
            win[fn] = function (html) {
                elem.innerHTML = html;
                script.parentElement.removeChild(script);
                delete win[fn];
            };
            for (i = 0; i < attrs.length; i += 1) {
                attr = elem.getAttribute('data-' + attrs[i]);
                if (attr) {
                    query.push(encodeURIComponent(attrs[i]) + '=' + encodeURIComponent(attr));
                }
            }
            query.push('callback=' + fn);
            script = doc.createElement('script');
            script.src = '//spinitron.com/radio/newestsong.php?' + query.join('&');
            doc.getElementsByTagName('head')[0].appendChild(script);
        }(window, document, "spin-header"));
      </script>
      <nav role="navigation" class="nav-wrapper no-print" aria-label="Main menu">
        <ul class="sec-nav">
          <li><a href="#" onclick="return player('<?php echo site_url(); ?>/wp-content/themes/sage/player.html')"class="stream-link">Stream Now <img alt="" role="presentation" src="<?php echo get_bloginfo('template_directory'); ?>/dist/images/tower.png" class="tower-icon" /></a></li>
          <li><a href="https://www.facebook.com/kruifm/" target="_blank"><i class="fa fa-lg fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/krui" target="_blank"><i class="fa fa-lg fa-twitter"></i></a></li>
          <li><a href="https://www.instagram.com/krui89.7fm/" target="_blank"><i class="fa fa-lg fa-instagram"></i></a></li>
         <!--  <li><a href="https://www.instagram.com/krui89.7fm/" target="_blank"><i class="fa fa-lg fa-rss"></i></a></li> -->
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

