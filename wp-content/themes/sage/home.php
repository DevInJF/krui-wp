<?php get_template_part('templates/page', 'header'); ?>
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
