<?php
// This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
// somewhere in your theme.
?>

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?=__('Toggle navigation', 'sage');?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=esc_url(home_url('/'));?>"> <img src="<?php bloginfo('template_directory');?>/assets/images/logo.png" title="" class="big-logo img-responsive" alt="KRUI" /></a>

    </div>

    <nav class="collapse navbar-collapse" role="navigation">
<?php
if (has_nav_menu('primary_navigation')):
wp_nav_menu(
	['theme_location' => 'primary_navigation',
		//'walker'         => new wp_bootstrap_navwalker(),
		'menu_class' => 'nav navbar-nav',
		'depth'      => 1
	]
);
endif;
?>
<form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>

 <ul class="nav navbar-nav navbar-right social">
                <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
            </ul>
    </nav>
  </div>
</header>