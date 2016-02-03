  <article <?php post_class();?>>
    
    <div>
        <div class="row">
          <div class="col-lg-12">
            <header><h2 class="entry-title"><a href="<?php the_permalink();?>"><?php cat_icon(); the_title();?></a></h2>
            </header>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
              
                
<?php get_template_part('templates/entry-meta');?>
              <div class="entry-content">
              <?php the_excerpt();?>
              </div>

            </div>

            <div class="col-lg-9">
              <a href="<?php the_permalink();?>"><?php
              echo get_the_post_thumbnail($page->ID, array(640, 360), array('class' => 'img-responsive main-image'));
              ?></a>

            </div>

        </div>

    </div>


</article>