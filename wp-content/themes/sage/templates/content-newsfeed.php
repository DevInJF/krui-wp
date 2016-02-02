<article <?php post_class();?>>
  <header>
<!-- <a href="<?php the_permalink();?>"><?php
echo get_the_post_thumbnail($page->ID, "thumbnail", array('class' => 'img-responsive'));
?></a> -->
    <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();
?></a></h2>
<?php get_template_part('templates/entry-meta');?>
</header>
  <div class="entry-summary">
<?php the_excerpt();?>
</div>
</article>
