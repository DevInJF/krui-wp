
  <article <?php post_class();?>>

    <div>
        <div class="row">
          <div class="col-lg-12">
            <a href="<?php the_permalink();?>">
              <?php
echo get_the_post_thumbnail($page->ID, "thumbnail", array('class' => 'img-responsive main-image'));
?>
            </a>
           <header><h1 class="entry-title"><a href="<?php the_permalink();?>"><?php
the_title();?></a></h1>    </header>
          </div>
        </div>

    </div>


