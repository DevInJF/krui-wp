  <article <?php post_class();?>>
    <div>
        <div class="row">
          <div class="col-lg-12">
            <a href="<?php the_permalink();?>">
              <?php

                if(has_post_thumbnail()){
                  echo get_the_post_thumbnail($page->ID, "thumbnail", array('class' => 'img-responsive main-image'));
                }else{
                  get_template_part('templates/image-placeholder');
                }
                
                ?>
            </a>
          <header>
            <h1 class="entry-title">
              <a href="<?php the_permalink();?>">
                <?php 
                if(!is_archive()){
                    cat_icon();
                  }
                the_title('<span>','</span>');?> 
              </a>
              <div class="clearfix"></div>
            </h1>
          </header>
          <?php get_template_part('templates/entry-meta');?>
          </div>
        </div>
    </div>
</article>