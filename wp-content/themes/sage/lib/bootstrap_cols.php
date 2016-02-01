<?php
function bootstrap_cols($cols = 4, $my_query, $template = 'content-newsfeed') {
	$colSize  = $cols-1;
	$colClass = ceil(12/$cols);
	if ($my_query->
		have_posts()) {
		$i = 0;
		while ($my_query->
			have_posts()):$my_query->
		the_post();
		if ($i%$cols == 0) {?>
			<div class="row">
			<?php
		}
		?>
		    <div class="col-md-<?php echo $colClass?>">
		        <div class="my-inner">
		<?php get_template_part('templates/'.$template, get_post_type() != 'post'?get_post_type():get_post_format());?>
		</div>
		    </div>
		<?php $i++;
		if ($i != 0 && $i%$cols == 0) {?>
			</div>
			<!--
			    /.row
			-->
			<div class="clearfix">
			</div>
			<?php }?>
		<?php endwhile;}
	wp_reset_query();
	?>
	</div>
	<?php
}
add_filter('bootstrap_cols', __NAMESPACE__ .'\\bootstrap_cols');
?>
