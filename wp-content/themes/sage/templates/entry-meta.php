<div class="post-meta-container">

<div class="post-meta"><?php if (is_single()) {
	cat_icon();
}
?>
<time class="updated" datetime="<?=get_post_time('c', true);?>"><?=get_the_date();
?></time>
<p class="byline author vcard"><?=__('By', 'sage');
?> <a href="<?=get_author_posts_url(get_the_author_meta('ID'));?>" rel="author" class="fn"><?=get_the_author();
?></a></p>
</div>
<?php

if (is_single()) {
	echo get_the_tag_list('<p class="tags hidden-xs">Tags: ', ', ', '</p>');
}
?>

</div>