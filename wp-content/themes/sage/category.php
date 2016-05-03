<?php get_template_part('templates/page', 'header'); ?>



<div class="featured-post container">
  <div class="row">
    <?php 
    $categories = get_the_category();
	$category_id = $categories[0]->cat_ID;
	
    $postQuery = new WP_Query("category_id=$category_ide&showposts=1");
	while ($postQuery->have_posts()): $postQuery->the_post();
		?>
    	  <div class="col-md-8">
    	 <?php get_template_part('templates/content-featured', get_post_type() != 'post' ? get_post_type() : get_post_format());?>
    	 </div>
   <?php endwhile;?>
    <div class="col-md-4 featured-sidebar">
    <?php $postQuery = new WP_Query("category_name=$category_id&showposts=2&offset=1");
	while ($postQuery->have_posts()): $postQuery->the_post();?>
    <?php get_template_part('templates/content-featured-sidebar', get_post_type() != 'post' ? get_post_type() : get_post_format());?>
    <?php endwhile;?>


    </div>
  </div>
</div>


<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
