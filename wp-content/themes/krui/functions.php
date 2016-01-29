<?php
// Add a search form to the header
function childtheme_searchform() {
    get_search_form();
}
add_action('thematic_header','childtheme_searchform',7);

// Customize the search form
function childtheme_search_form($form) {
    $form = '<form method="get" id="searchform" action="' . get_option('home') . '/" >
            <label class="hidden" for="s">' . __('Search:') . '</label>
            <div>';
    if (is_search()) {
        $form .='<input type="text" value="' . attribute_escape(apply_filters('the_search_query', get_search_query())) . '" name="s" id="s"  />';
    } else {
        $form .='<input type="text" value="To search, type here and hit enter" name="s" id="s" size="30" onfocus="if(this.value==this.defaultValue)this.value=\'\';" onblur="if(this.value==\'\')this.value=this.defaultValue;"/>';
    }
    $form .= '<input type="submit" id="searchsubmit" value="'.attribute_escape(__('Search')).'" />
            </div>
            </form>';
    return $form;
}
add_filter('get_search_form', 'childtheme_search_form');
?>
<?php
// Define specific child theme functions
function childtheme_javascript() {
    $site['url'] = get_bloginfo('wpurl');
    $site['theme']['assets'] = $site['url'].'/wp-content/themes/krui';
    //Include jQuery + jQuery UI libraries
    //$js = '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>';
    $js = '<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.4/jquery-ui.min.js"></script>';
    //Include plugins + third party libraries
    $js .= '<script type="text/javascript" src="'.$site['theme']['assets'].'/js/jquery.tipsy.js"></script>';
    $js .= '<script type="text/javascript" src="'.$site['theme']['assets'].'/js/jquery.twitter.js"></script>';
    $js .= '<script type="text/javascript" src="'.$site['theme']['assets'].'/js/s3Slider.js"></script>';
    $js .= '<script type="text/javascript" src="'.$site['theme']['assets'].'/js/humane.js"></script>';
    //Include child theme specific JavaScript
    $js .= '<script type="text/javascript" src="'.$site['theme']['assets'].'/js/master.js"></script>';
    echo $js;
}
// Call custom child theme functions
add_action('thematic_after','childtheme_javascript');
?>
<?php
/*
* Main page
*/
//Define featured content and right column layout
function childtheme_home_style() {
    $site['url'] = get_bloginfo('wpurl');
    $site['theme']['assets'] = $site['url'].'/wp-content/themes/krui';
    if (is_front_page()) {
        $css = '<link rel="stylesheet" type="text/css" href="'.$site['theme']['assets'].'/home.css">';
        echo $css;
    }
}
function childtheme_home() {
    if (is_front_page()) {
        echo '<div id="main-feature" class="featured-slider">';
        echo '<ul id="main-featureContent">';
            $postQuery = new WP_Query("category_name=main-feature&showposts=5");
            while ($postQuery->have_posts()) : $postQuery->the_post();
                $thumbnail = get_the_post_thumbnail(get_the_ID(), array(630,420));
                echo '<li class="main-featureImage">';
                echo '<a href="'.get_permalink(get_the_ID()).'">'.$thumbnail.'</a><span class="bottom"><strong>'.get_the_title(get_the_ID()).'</strong><br/>'.get_the_excerpt(get_the_ID()).'</span>';
                echo '</li>';
            endwhile;
        echo '<div class="clear main-featureImage"></div>';
        echo '</ul>';
        echo'</div>';
    //Right column
    echo '<div id="right-column">
            <div id="main-column-1" class="right-column-item">
                <h2>Listen</h2>
                <ul>
                    <ul class="main-listen">
                        <li class="main-listen-header">89.7 FM</li>
                        <li><a href="http://krui.student-services.uiowa.edu:8000/listen.m3u">320k stream</a></li>
                    </ul>
                    <ul class="main-listen">
                        <li class="main-listen-header">The Lab</li>
                        <li><a href="http://krui.student-services.uiowa.edu:8200/listen.m3u">128k stream</a></li>
                    </ul>
                </ul>
            </div>
            <div id="main-column-2" class="right-column-item">
                <h2>Events</h2>
                <a href="'.get_bloginfo('wpurl').'/events">View all</a>
                '.do_shortcode('[google-calendar-events id="2" type="list" max="2"]').'';
     echo '</div>
            <div id="main-column-3" class="right-column-item">
                <h2>Recent Articles</h2>';
                $recentQuery = new WP_Query("posts_per_page=-1&showposts=5");
                echo '<ul>';
                while ($recentQuery->have_posts()) : $recentQuery->the_post();
                    echo '<li>';
                    echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a>';
                    echo '</li>';
                endwhile;
                echo '</ul>';
     echo '</div>
         </div>';
    }
}
//Define below the fold three column layout
function childtheme_home_content() {
    if (is_front_page()) {
        /*echo '<div class="subcontent" id="subcontent-1">
                    <div class="subcontent-column-primary">
                        <h2>89.7 FM</h2>';
                        $mainQuery = new WP_Query("category_name=89-7-fm-feature&showposts=1");
                        while ($mainQuery->have_posts()) : $mainQuery->the_post();
                            echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a><br/>';
                            $thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                            //$thumbnail = get_post_meta(get_the_ID(), "thumbnail", true);
                            echo $thumbnail;
                        endwhile;
              echo '</div>';
              echo '<div class="subcontent-column-primary">
                        <h2>The&nbsp;Lab</h2>';
                        $labQuery = new WP_Query("category_name=the-lab-feature&showposts=1");
                        while ($labQuery->have_posts()) : $labQuery->the_post();
                            echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a><br/>';
                            $thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                            //$thumbnail = get_post_meta(get_the_ID(), "thumbnail", true);
                            echo $thumbnail;
                        endwhile;
              echo '</div>';
        echo '</div>';*/
        echo '<div class="subcontent" id="subcontent-2">
                    <div class="subcontent-column-secondary">
                        <h2>Music</h2>';
                        $musicQuery = new WP_Query("category_name=music&showposts=7");
                        while ($musicQuery->have_posts()) : $musicQuery->the_post();
                            //$thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                            //$thumbnail = get_post_meta(get_the_ID(), "thumbnail", true);
                            echo '<li>';
                            //echo $thumbnail;
                            echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a>';
                            echo '</li>';
                        endwhile;
               echo'</div>';
                echo '<div class="subcontent-column-secondary">
                        <h2>News</h2>';
                        $newsQuery = new WP_Query("category_name=news&showposts=7");
                        while ($newsQuery->have_posts()) : $newsQuery->the_post();
                            //$thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                            echo '<li>';
                            //echo $thumbnail;
                            echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a>';
                            echo '</li>';
                        endwhile;
               echo'</div>';
                    echo '<div class="subcontent-column-secondary">
                            <h2>Sports</h2>';
                            $sportsQuery = new WP_Query("category_name=sports&showposts=7");
                            while ($sportsQuery->have_posts()) : $sportsQuery->the_post();
                                //$thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                                echo '<li>';
                                //echo $thumbnail;
                                echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a>';
                                echo '</li>';
                            endwhile;
                    echo '</div>';
            echo '</div>';
    }
}
/*
* Music page
*/
//Define featured content and right column layout
function childtheme_music_style() {
    $site['url'] = get_bloginfo('wpurl');
    $site['theme']['assets'] = $site['url'].'/wp-content/themes/krui';
    if (is_page(10)) {
        $css = '<link rel="stylesheet" type="text/css" href="'.$site['theme']['assets'].'/music.css">';
        echo $css;
    }
}
function childtheme_music() {
    if (is_page(10)) {
        echo '<div id="main-feature" class="featured-slider">';
        echo '<ul id="main-featureContent">';
            $postQuery = new WP_Query("category_name=music-feature&showposts=5");
            while ($postQuery->have_posts()) : $postQuery->the_post();
                $thumbnail = get_the_post_thumbnail(get_the_ID(), array(630,420));
                echo '<li class="main-featureImage">';
                echo '<a href="'.get_permalink(get_the_ID()).'">'.$thumbnail.'</a><span class="bottom"><strong>'.get_the_title(get_the_ID()).'</strong><br/>'.get_the_excerpt(get_the_ID()).'</span>';
                echo '</li>';
            endwhile;
        echo '<div class="clear main-featureImage"></div>';
        echo '</ul>';
        echo'</div>';
    //Right column
    $args = array( 'numberposts' => 10, 'order'=> 'ASC', 'orderby' => 'title' );
    $postslist = get_posts($args);
    echo '<div id="right-column">
            <div id="main-column-1" class="right-column-item">
                <h2>Charts</h2>';
                $charts = new WP_Query("category_name=music-chart&showposts=1");
                echo '<ul>';
                while ($charts->have_posts()) : $charts->the_post();
                    echo '<li>';
                    echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a>';
                    echo '</li>';
                endwhile;
                echo '</ul>';
      echo '</div>
            <div id="main-column-2" class="right-column-item">
                <h2>Track of the Week</h2>';
                $trackOfTheWeek = new WP_Query("category_name=track-of-the-week&showposts=1");
                echo '<ul>';
                while ($trackOfTheWeek->have_posts()) : $trackOfTheWeek->the_post();
                    echo '<li>';
                    echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a>';
                    echo '</li>';
                endwhile;
                echo '</ul>';
     echo '</div>';
        echo '<div id="main-column-3" class="right-column-item">
                <h2>Recent Articles</h2>';
                $recentQuery = new WP_Query("category_name=music&showposts=5");
                echo '<ul>';
                while ($recentQuery->have_posts()) : $recentQuery->the_post();
                    echo '<li>';
                    echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a>';
                    echo '</li>';
                endwhile;
                echo '</ul>';
     echo '</div>
         </div>';
    }
}
//Define below the fold three column layout
function childtheme_music_content() {
    if (is_page(10)) {
        echo '<div class="subcontent" id="subcontent-1">
                    <div class="subcontent-column-primary">
                        <h2>In-Studios</h2>';
                        $in_studio = new WP_Query("category_name=in-studio&showposts=1");
                        while ($in_studio->have_posts()) : $in_studio->the_post();
                            $thumbnail = get_the_post_thumbnail(get_the_ID(), array(290,240));
                            //$thumbnail = get_post_meta(get_the_ID(), "thumbnail", true);
                            echo '<li>';
                            echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a><br/>';
                            echo $thumbnail;
                            echo '</li>';
                        endwhile;
              echo '</div>
                    <div class="subcontent-column-primary">
                        <h2>Album Reviews</h2>';
                        $album_reviews = new WP_Query("category_name=album-review&showposts=1");
                        while ($album_reviews->have_posts()) : $album_reviews->the_post();
                            $thumbnail = get_the_post_thumbnail(get_the_ID(), array(290,285));
                            //$thumbnail = get_post_meta(get_the_ID(), "thumbnail", true);
                            echo '<li>';
                            echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a><br/>';
                            echo $thumbnail;
                            echo '</li>';
                        endwhile;
            echo '</div>
            </div>';
        echo '<div class="subcontent" id="subcontent-2">
                    <div class="subcontent-column-secondary">
                        <h2>Music News</h2>';
                        $musicQuery = new WP_Query("category_name=music-news&showposts=4");
                        while ($musicQuery->have_posts()) : $musicQuery->the_post();
                            //$thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                            //$thumbnail = get_post_meta(get_the_ID(), "thumbnail", true);
                            echo '<li>';
                            //echo $thumbnail;
                            echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a>';
                            echo '</li>';
                        endwhile;
               echo'</div>';
                echo '<div class="subcontent-column-secondary">
                        <h2>Show Previews</h2>';
                        $newsQuery = new WP_Query("category_name=show-preview&showposts=4");
                        while ($newsQuery->have_posts()) : $newsQuery->the_post();
                            //$thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                            echo '<li>';
                            //echo $thumbnail;
                            echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a>';
                            echo '</li>';
                        endwhile;
               echo'</div>';
                    echo '<div class="subcontent-column-secondary">
                            <h2>Concert Dates</h2>';
                            $sportsQuery = new WP_Query("category_name=concert-date&showposts=4");
                            while ($sportsQuery->have_posts()) : $sportsQuery->the_post();
                                //$thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                                echo '<li>';
                                //echo $thumbnail;
                                echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a>';
                                echo '</li>';
                            endwhile;
                    echo '</div>';
                    echo '<a href="/category/music">View more music</a>';
            echo '</div>';
    }
}
function childtheme_news() {
    if (is_page(12)) {
        echo '<div id="main-feature" class="featured-slider">';
        echo '<ul id="main-featureContent">';
            $postQuery = new WP_Query("category_name=news-feature&showposts=5");
            while ($postQuery->have_posts()) : $postQuery->the_post();
                $thumbnail = get_the_post_thumbnail(get_the_ID(), array(630,420));
                echo '<li class="main-featureImage">';
                echo '<a href="'.get_permalink(get_the_ID()).'">'.$thumbnail.'</a><span class="bottom"><strong>'.get_the_title(get_the_ID()).'</strong><br/>'.get_the_excerpt(get_the_ID()).'</span>';
                echo '</li>';
            endwhile;
        echo '<div class="clear main-featureImage"></div>';
        echo '</ul>';
        echo'</div>';
    //Right column
    echo '<div id="right-column">
            <div id="main-column-1" class="right-column-item">
                <h2>Latest newscast</h2><br/>
                <a href="http://krui.fm/news/latest-newscast">View the latest newscast</a>';
     echo '</div>
            <div id="main-column-2" class="right-column-item">
                <h2>Latest Vox Pop</h2><br/>
                <a href="http://krui.fm/news/latest-vox-pop">View the latest vox pop</a>
            </div>
            <div id="main-column-3" class="right-column-item">
                <h2>Meet the Staff</h2>';
                echo '<a href="http://krui.fm/news/staff/">View staff profiles</a>';
                $recentQuery = new WP_Query("category_name=music&showposts=5");
                // echo '<ul>';
                // echo '<li><a href="http://krui.fm/news/staff/">View Staff Profiles</a></li>';
                // echo '</ul>';
     echo '</div>
         </div>';
    }
}
function childtheme_news_content() {
    if (is_page(12)) {
        echo '<div class="subcontent" id="subcontent-1">
                    <div class="subcontent-column-primary">
                        <h2>In-Studios</h2>';
                        $news_in_studioQuery = new WP_Query("category_name=news-in-studio&showposts=7");
                        while ($news_in_studioQuery->have_posts()) : $news_in_studioQuery->the_post();
                            //$thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                            //$thumbnail = get_post_meta(get_the_ID(), "thumbnail", true);
                            echo '<li>';
                            //echo $thumbnail;
                            echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a>';
                            echo '</li>';
                        endwhile;
                    echo'</div>
                    <div class="subcontent-column-primary">
                        <h2>Feature Stories</h2>';
                        $news_in_studioQuery = new WP_Query("category_name=news-featured-story&showposts=7");
                        while ($news_in_studioQuery->have_posts()) : $news_in_studioQuery->the_post();
                            //$thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                            //$thumbnail = get_post_meta(get_the_ID(), "thumbnail", true);
                            echo '<li>';
                            //echo $thumbnail;
                            echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a>';
                            echo '</li>';
                        endwhile;
             echo '</div>
             </div>';
        echo '<div class="subcontent" id="subcontent-2">
                    <div class="subcontent-column-secondary">
                        <h2>News Segments</h2>';
                        $newsQuery = new WP_Query("category_name=news-segment&showposts=5");
                        while ($newsQuery->have_posts()) : $newsQuery->the_post();
                            //$thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                            //$thumbnail = get_post_meta(get_the_ID(), "thumbnail", true);
                            echo '<li>';
                            //echo $thumbnail;
                            echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a>';
                            echo '</li>';
                        endwhile;
                    echo'</div>';
                    echo '<div class="subcontent-column-secondary">
                        <h2>Reviews</h2>'; //Reviews & Previews
                        $news_in_studioQuery = new WP_Query("category_name=news-review-preview&showposts=5");
                        while ($news_in_studioQuery->have_posts()) : $news_in_studioQuery->the_post();
                            //$thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                            //$thumbnail = get_post_meta(get_the_ID(), "thumbnail", true);
                            echo '<li>';
                            //echo $thumbnail;
                            echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a>';
                            echo '</li>';
                        endwhile;
                    echo '</div>
                    <div class="subcontent-column-secondary">
                        <h2>The RoundTable</h2>';
                        $news_feature = new WP_Query("category_name=roundtable&showposts=5");
                        while ($news_feature->have_posts()) : $news_feature->the_post();
                            //$thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                            //$thumbnail = get_post_meta(get_the_ID(), "thumbnail", true);
                            echo '<li>';
                            //echo $thumbnail;
                            echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a>';
                            echo '</li>';
                        endwhile;
                    echo '</div>';
                    echo '<a href="/category/news">View more news</a>';
            echo '</div>';
    }
}
function childtheme_sports_style() {
    $site['url'] = get_bloginfo('wpurl');
    $site['theme']['assets'] = $site['url'].'/wp-content/themes/krui';
    if (is_page(14) || is_page(12) || is_page(6)) {
        $css = '<link rel="stylesheet" type="text/css" href="'.$site['theme']['assets'].'/sports.css">';
        echo $css;
    }
}
function childtheme_sports() {
    if (is_page(14)) {
        echo '<div id="main-feature" class="featured-slider">';
        echo '<ul id="main-featureContent">';
            $postQuery = new WP_Query("category_name=sports-feature&showposts=5");
            while ($postQuery->have_posts()) : $postQuery->the_post();
                $thumbnail = get_the_post_thumbnail(get_the_ID(), array(630,420));
                echo '<li class="main-featureImage">';
                echo '<a href="'.get_permalink(get_the_ID()).'">'.$thumbnail.'</a><span class="bottom"><strong>'.get_the_title(get_the_ID()).'</strong><br/>'.get_the_excerpt(get_the_ID()).'</span>';
                echo '</li>';
            endwhile;
        echo '<div class="clear main-featureImage"></div>';
        echo '</ul>';
        echo'</div>';
    //Right column
    echo '<div id="right-column">';
    //         <div id="sports-column-1" class="right-column-item">
    //             <h2>Today&#39;s Shows</h2>';
    //             //echo do_shortcode('[google-calendar-events id="3, 4" type="list" max="4"]');
    //     echo '</div>';
        echo '<div id="main-column-3" class="right-column-item">
                <h2>Meet the Staff</h2>';
                echo '<a href="http://krui.fm/sports/staff/">View staff profiles</a>';
        echo '</div>';
    echo '</div>';
    }
}
function childtheme_sports_content() {
    if (is_page(14)) {
        echo '<div class="subcontent" id="subcontent-1">
                    <div class="subcontent-column-primary">
                        <h2>Interviews</h2>';
                        $news_in_studioQuery = new WP_Query("category_name=sports-in-studio&showposts=7");
                        while ($news_in_studioQuery->have_posts()) : $news_in_studioQuery->the_post();
                            //$thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                            //$thumbnail = get_post_meta(get_the_ID(), "thumbnail", true);
                            echo '<li>';
                            //echo $thumbnail;
                            echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a>';
                            echo '</li>';
                        endwhile;
                    echo'</div>
                    <div class="subcontent-column-primary">
                        <h2>Recent Articles</h2>';
                        $news_in_studioQuery = new WP_Query("category_name=sports&showposts=7");
                        while ($news_in_studioQuery->have_posts()) : $news_in_studioQuery->the_post();
                            //$thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                            //$thumbnail = get_post_meta(get_the_ID(), "thumbnail", true);
                            echo '<li>';
                            //echo $thumbnail;
                            echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a>';
                            echo '</li>';
                        endwhile;
             echo '</div>
             <a href="/category/sports">View more sports</a>
             </div>';
    }
}
function childtheme_main_studio() {
    if (is_page(6)) {
        echo '<div id="main-feature" class="featured-slider">';
        echo '<ul id="main-featureContent">';
            $postQuery = new WP_Query("category_name=89-7-fm-feature&showposts=5");
            while ($postQuery->have_posts()) : $postQuery->the_post();
                $thumbnail = get_the_post_thumbnail(get_the_ID(), array(630,420));
                echo '<li class="main-featureImage">';
                echo '<a href="'.get_permalink(get_the_ID()).'">'.$thumbnail.'</a><span class="bottom"><strong>'.get_the_title(get_the_ID()).'</strong><br/>'.get_the_excerpt(get_the_ID()).'</span>';
                echo '</li>';
            endwhile;
        echo '<div class="clear main-featureImage"></div>';
        echo '</ul>';
        echo'</div>';
    //Right column
    echo '<div id="right-column">
            <div id="main-studio-1" class="right-column-item">
                <h2>Recently Played</h2>
            </div>
         </div>';
    }
}
function childtheme_main_studio_content() {
    if (is_page(6)) {
        echo '<div class="subcontent" id="subcontent-1">
                    <div class="subcontent-column-primary">
                        <h2>In-Studios</h2>';
                        $news_in_studioQuery = new WP_Query("category_name=in-studio&showposts=5");
                        while ($news_in_studioQuery->have_posts()) : $news_in_studioQuery->the_post();
                            //$thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                            //$thumbnail = get_post_meta(get_the_ID(), "thumbnail", true);
                            echo '<li>';
                            //echo $thumbnail;
                            echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a>';
                            echo '</li>';
                        endwhile;
                    echo'</div>
                    <div class="subcontent-column-primary">
                        <h2>Recent Articles</h2>';
                        $news_in_studioQuery = new WP_Query("category_name=89-7-fm&showposts=5");
                        while ($news_in_studioQuery->have_posts()) : $news_in_studioQuery->the_post();
                            //$thumbnail = get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                            //$thumbnail = get_post_meta(get_the_ID(), "thumbnail", true);
                            echo '<li>';
                            //echo $thumbnail;
                            echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title(get_the_ID()).'</a>';
                            echo '</li>';
                        endwhile;
             echo '</div>
             </div>';
    }
}
function childtheme_the_lab() {
    if (is_page(8)) {
        echo '<div id="main-feature" class="featured-slider">';
        echo '<ul id="main-featureContent">';
            $postQuery = new WP_Query("category_name=the-lab-feature&showposts=5");
            while ($postQuery->have_posts()) : $postQuery->the_post();
                $thumbnail = get_the_post_thumbnail(get_the_ID(), array(630,420));
                echo '<li class="main-featureImage">';
                echo '<a href="'.get_permalink(get_the_ID()).'">'.$thumbnail.'</a><span class="bottom"><strong>'.get_the_title(get_the_ID()).'</strong><br/>'.get_the_excerpt(get_the_ID()).'</span>';
                echo '</li>';
            endwhile;
        echo '<div class="clear main-featureImage"></div>';
        echo '</ul>';
        echo'</div>';
    //Right column
    echo '<div id="right-column">
            <div id="lab-studio-1" class="right-column-item">
                <h2>Recently Played</h2>
            </div>
         </div>';
    }
}
function childtheme_the_lab_content() {
    if (is_page(8)) {
        /*echo '<div class="subcontent" id="subcontent-1">
                    <span class="subcontent-column-primary">
                        <h2>In-Studios</h2>';
                    echo'</span>
                    <span class="subcontent-column-primary">
                        <h2>Recent Articles</h2>
                        ';
             echo '</span>
             </div>';*/
    }
}
function childtheme_main_playlist() {
    if (is_page(7937)) {
        echo('
        <script src="https://raw.github.com/rmm5t/jquery-timeago/master/jquery.timeago.js" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery("span.time").timeago();
            });
        </script>
		<table>
            <tr>
                <th class="name">Name</th>
                <th class="artist">Artist</th>
                <th class="album">Album</th>
            </tr>');
        date_default_timezone_set('America/Chicago');
            $curl = curl_init();
            $time = time() - 604800;
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_URL, "http://staff.krui.fm/api/playlist/main/items.json?limit=5000&after={$time}");
            $data = json_decode(curl_exec($curl), true);
	    if ($data) {
            foreach ($data as $row) {
                // Song
                echo('<tr class="item" style="border-bottom: none;">');
                printf('<td class="name">%s</td>', $row[0][song]['name']);
                printf('<td class="artist">%s</td>', $row[0][song]['artist']);
                printf('<td class="album">%s</td>', $row[0][song]['album']);
                // Time and DJ
                echo('</tr>');
                echo('<tr class="meta">');
                printf('<td colspan="3" style="color: #666; font-size: 12px; padding-top: 0px;">Played by %s %s, <span class="time" title="%s">%s</span></td>', $row[0][user]['firstname'], $row[0][user]['lastname'], $row[0][song]['time'], $row[0][song]['time']);
                echo('</tr>');
            }
	    } else {
		echo('<tr class="error">');
		echo('<td colspan="3">Sorry!  We are experiencing issues with the playlist at the moment.</td>');
		echo('</tr>');
	    }
	
        echo('</table>');
    }
}
function childtheme_lab_playlist() {
    if (is_page(7942)) {
        echo('
        <script src="https://raw.github.com/rmm5t/jquery-timeago/master/jquery.timeago.js" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery("span.time").timeago();
            });
        </script>
        <table>
            <tr>
                <th class="name">Name</th>
                <th class="artist">Artist</th>
                <th class="album">Album</th>
            </tr>');
        date_default_timezone_set('America/Chicago');
            $curl = curl_init();
            $time = time() - 604800;
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_URL, "http://staff.krui.fm/api/playlist/lab/items.json?limit=5000&after={$time}");
            $data = json_decode(curl_exec($curl), true);
	    if ($data) {
            foreach ($data as $row) {
                // Song
                echo('<tr class="item" style="border-bottom: none;">');
                printf('<td class="name">%s</td>', $row[0][song]['name']);
                printf('<td class="artist">%s</td>', $row[0][song]['artist']);
                printf('<td class="album">%s</td>', $row[0][song]['album']);
                // Time and DJ
                echo('</tr>');
                echo('<tr class="meta">');
                printf('<td colspan="3" style="color: #666; font-size: 12px; padding-top: 0px;">Played by %s %s, <span class="time" title="%s">%s</span></td>', $row[0][user]['firstname'], $row[0][user]['lastname'], $row[0][song]['time'], $row[0][song]['time']);
                echo('</tr>');
            }
	    } else {
		echo('<tr class="error">');
		echo('<td colspan="3">Sorry!  We are experiencing issues with the playlist at the moment.</td>');
		echo('</tr>');
	    }
        echo('</table>');
    }
}
//Call page methods
/*Home*/
add_action('wp_head', 'childtheme_home_style');
add_action('thematic_belowheader','childtheme_home');
add_action('thematic_abovecomments', 'childtheme_home_content');
/*Music*/
add_action('wp_head', 'childtheme_music_style');
add_action('thematic_belowheader','childtheme_music');
add_action('thematic_abovecomments', 'childtheme_music_content');
/*News*/
add_action('thematic_belowheader','childtheme_news');
add_action('thematic_abovecomments', 'childtheme_news_content');
/*Sports*/
add_action('wp_head', 'childtheme_sports_style');
add_action('thematic_belowheader','childtheme_sports');
add_action('thematic_abovecomments', 'childtheme_sports_content');
/*89.7 FM*/
add_action('thematic_belowheader','childtheme_main_studio');
add_action('thematic_abovecomments','childtheme_main_studio_content');
/*The Lab*/
add_action('thematic_belowheader','childtheme_the_lab');
add_action('thematic_abovecomments','childtheme_the_lab_content');
/*89.7 FM Playlist*/
add_action('thematic_abovecomments', 'childtheme_main_playlist');
/*The Lab Playlist*/
add_action('thematic_abovecomments', 'childtheme_lab_playlist');
?>