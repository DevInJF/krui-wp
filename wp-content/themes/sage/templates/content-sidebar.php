<article <?php post_class();?>>
        <div class="row">
            <div class="col-xs-5 col-md-7">
              <a href="<?php the_permalink();?>"><?php
              echo get_the_post_thumbnail($page->ID, "thumbnail", array('class' => 'img-responsive main-image'));
              ?></a>
            </div>

            <div class="col-xs-7 col-md-5">
              <header><h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
              </header>
            </div>
        </div>
</article>