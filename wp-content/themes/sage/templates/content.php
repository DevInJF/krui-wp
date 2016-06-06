  <article <?php post_class();?>>

    <div>
        <div class="row">
          <div class="col-lg-12">
            <header><h2 class="entry-title"><a href="<?php the_permalink();?>"><?php 
            if(!is_archive()){
              cat_icon();
            }
            the_title('<span>','</span>');?></a>
            <div class="clearfix"></div></h2>

            </header>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-3">


              <?php get_template_part('templates/entry-meta');?>
              <div class="entry-content">
                <?php the_excerpt();?>
                <p><a href="<?php the_permalink();?>">Keep reading...</a></p>
              </div>

            </div>

            <div class="col-lg-9">
              <a href="<?php the_permalink();?>">
              <?php
                if(has_post_thumbnail()){
                  echo get_the_post_thumbnail($page->ID, array(640, 360), array('class' => 'img-responsive main-image'));
                }else{
                  get_template_part('templates/image-placeholder');
                }
                
                ?></a>

            </div>

        </div>

    </div>


</article>