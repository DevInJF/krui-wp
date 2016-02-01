
<?php while (have_posts()):the_post();
?>
  <article <?php post_class();?>>
    <header>
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="entry-title"><?php the_title();?></h1>

          </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
              
                
<?php get_template_part('templates/entry-meta');?>


            </div>

            <div class="col-lg-9">
              <?php
              echo get_the_post_thumbnail($page->ID, array(640, 360), array('class' => 'img-responsive main-image'));
              ?>
              <div class="entry-content">
              <?php the_content();?>
              </div>
            </div>

        </div>

    </div>
    </header>
    <footer>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>'.__('Pages:', 'sage'), 'after' => '</p></nav>']);?>
</footer>
<?php comments_template('/templates/comments.php');?>
</article>
<?php endwhile;?>
