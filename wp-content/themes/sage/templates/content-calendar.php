<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>
<?php while (have_posts()):the_post();
?>
  <article <?php post_class();?>>
  
        <div class="row">
          <div class="col-lg-12">
              <header><h1 class="entry-title text-center"><?php the_title();?></h1> </header>

          </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
              <?php the_content();?>
            </div>
        </div>
    <footer>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>'.__('Pages:', 'sage'), 'after' => '</p></nav>']);?>
</footer>
<?php comments_template('/templates/comments.php');?>
</article>

<?php endwhile;?>

