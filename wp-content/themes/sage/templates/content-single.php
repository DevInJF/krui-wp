
<?php while (have_posts()):the_post();
?>
  <article <?php post_class();?>>
    <header>
    <div>
        <div class="row">
          <div class="col-lg-12">
            <h1 class="entry-title"><?php the_title();?></h1>

          </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
              <?php get_template_part('templates/entry-meta');?>
              <div class="article-social-container-main hidden-print affix-top">
                <ul class="article-social text-center">
                  <li><span class="social-label">Share:</span></li>
                  <li><a href="javascript:window.open('http://www.facebook.com/sharer/sharer.php?u<?php the_permalink(); ?>', '_blank', 'width=400,height=500');void(0);" title="Share on Facebook">
                  <span class="fa fa-lg fa-facebook"></span></a></li>
                  <li><a href="https://twitter.com/intent/tweet?text<?php the_permalink(); ?>" title="Share on Twitter" target="_blank">
                  <span class="fa fa-lg fa-twitter"></span></a></li>
                  <li>
                   <a href="https://plus.google.com/share?url<?php the_permalink(); ?>" title="Share on Google Plus" target="_blank"><span class="fa fa-lg fa-google"></span></a>
                  </li>
                </ul>
              </div>
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
<div class="news-top-holder">
  <div class="news-top container">
  <?php
  bootstrap_cols(8, new WP_query(array(
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => 6,
      )));

  ?>
  </div>
</div>
<?php comments_template('/templates/comments.php');?>
</article>
<?php wp_related_posts()?>
<?php endwhile;?>

