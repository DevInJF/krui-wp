<article <?php post_class();?>>
        <div class="row">
            <div class="col-xs-5 col-md-7">
              <a href="<?php the_permalink();?>"><?php
                if(has_post_thumbnail()){
                  echo get_the_post_thumbnail($page->ID, "thumbnail", array('class' => 'img-responsive main-image'));
                }else{
                  get_template_part('templates/image-placeholder');
                }
              ?></a>
            </div>

            <div class="col-xs-7 col-md-5">
              <header><h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
              </header>
              <div class="visible-xs-block">
                <div class="entry-summary">
                    <?php the_excerpt();?>
                    <p><a href="<?php the_permalink();?>">Keep reading...</a></p>
                </div>
              </div>
            </div>
        </div>
</article>