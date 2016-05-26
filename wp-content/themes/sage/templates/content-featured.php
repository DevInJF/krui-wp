
  <article <?php post_class();?>>

    <div>
        <div class="row">
          <div class="col-lg-12">
            <a href="<?php the_permalink();?>">
              <?php
              echo get_the_post_thumbnail($page->ID, "thumbnail", array('class' => 'img-responsive main-image'));
              ?>
            </a>
             <header>
               <h1 class="entry-title">
                 <a href="<?php the_permalink();?>">
                  <?php            
                    if(!is_archive()){
                      cat_icon();
                    }
                    the_title();?>
                  </a>
                </h1>    
              </header>
            <?php get_template_part('templates/entry-meta');?>
            <div class="entry-summary">
              <?php the_excerpt();?>
            </div>
          </div>
        </div>
    </div>
