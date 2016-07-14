<?php if((!is_front_page()) && (!is_single()) && (!is_page())) { ?>
<div class="container">
<?php get_template_part('templates/page', 'header'); ?>
</div>
<?php } ?>
<?php if (is_front_page()) {
  ?>
<div class="featured-post container">
  <div class="row">
    <?php $postQuery = new WP_Query("category_name=main-feature&showposts=1");
          $featuredPosts = array();
  while ($postQuery->have_posts()): $postQuery->the_post();
        array_push($featuredPosts, get_the_id());
    ?>
        <div class="col-md-8">
       <?php get_template_part('templates/content-featured', get_post_type() != 'post' ? get_post_type() : get_post_format());?>
       </div>
   <?php endwhile;?>
    <div class="col-md-4 featured-sidebar">
    <?php $postQuery = new WP_Query("category_name=main-feature&showposts=2&offset=1");
  while ($postQuery->have_posts()): $postQuery->the_post();
    array_push($featuredPosts, get_the_id());?>

    <?php get_template_part('templates/content-featured-sidebar', get_post_type() != 'post' ? get_post_type() : get_post_format());?>
    <?php endwhile;?>


    </div>
  </div>
</div>
<?php  query_posts(array('post__not_in' => $featuredPosts)); ?>

<?php }elseif((!is_single())&&(!is_page())&&(!is_paged())) {
  ?>
<div class="featured-post container">
  <div class="row">
  <?php 
      global $query_string;
      //print_r($query_string);
      $postQuery = new WP_Query($query_string."&showposts=1");
      while ($postQuery->have_posts()): $postQuery->the_post(); ?>
   
        <div class="col-md-8">
       <?php get_template_part('templates/content-featured', get_post_type() != 'post' ? get_post_type() : get_post_format());?>
       </div>
   <?php endwhile;?>
    <div class="col-md-4 featured-sidebar">
    <?php $postQuery = new WP_Query($query_string."&showposts=2&offset=1");
  while ($postQuery->have_posts()): $postQuery->the_post();?>
    <?php get_template_part('templates/content-featured-sidebar', get_post_type() != 'post' ? get_post_type() : get_post_format());?>
    <?php endwhile;?>


    </div>
  </div>
</div>
<?php if(!is_paged()){query_posts($query_string."&offset=3");} ?>
<?php }?>
