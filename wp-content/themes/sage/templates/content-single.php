<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
?>
<?php while (have_posts()):the_post();
?>
  <article <?php post_class();?>>

        <div class="row">
          <div class="col-lg-12">
              <header><h1 class="entry-title"><?php the_title();?></h1> </header>

          </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
              <?php get_template_part('templates/entry-meta');?>
              <?php get_template_part('templates/entry-social-media');?>
         </div>

            <div class="col-lg-10">
              <?php
                if(has_post_thumbnail()){
                  echo get_the_post_thumbnail($page->ID, array(640, 360), array('class' => 'img-responsive main-image'));
                }else{
                  get_template_part('templates/image-placeholder');
                }              
                ?>

              <div class="row">
                <div class="col-sm-8">

                  <div class="entry-content">
                    <?php the_content();?>
                  </div>

                </div>

           
              <aside class="sidebar">
                <?php wp_related_posts()?>
                <?php include Wrapper\sidebar_path();?>
              </aside><!-- /.sidebar -->

        
              </div>

            </div>

        </div>

    <footer>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>'.__('Pages:', 'sage'), 'after' => '</p></nav>']);?>
</footer>
<?php comments_template('/templates/comments.php');?>
</article>

<?php endwhile;?>

