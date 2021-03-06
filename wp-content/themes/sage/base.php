<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>
<!doctype html>
<html <?php language_attributes();?>>
<?php get_template_part('templates/head');?>
  <body <?php body_class();?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=127918570561161";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <!--[if IE]>
    <div class="alert alert-warning">
<?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage');?>
</div>
    <![endif]-->
<?php get_template_part('templates/division-bar'); ?>
<?php
do_action('get_header');
get_template_part('templates/header');

if(is_archive() || is_front_page() && !is_paged()){
  get_template_part('templates/page', 'featured-posts');
}
?>

<div class="wrap container" role="document">
  <div class="content row">
    <main class="main">
      <?php include Wrapper\template_path();?>
    </main><!-- /.main -->
    <?php if (Setup\display_sidebar()): ?>
      <aside class="sidebar">
        <?php include Wrapper\sidebar_path();?>
      </aside><!-- /.sidebar -->
    <?php endif;?>
  </div><!-- /.content -->
</div><!-- /.wrap -->
<?php
do_action('get_footer');
get_template_part('templates/footer');
wp_footer();
?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-426753-69', 'auto');
  ga('send', 'pageview');

</script>
        </body>
      </html>