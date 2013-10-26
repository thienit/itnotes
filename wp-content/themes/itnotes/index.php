<?php get_header(); ?>

<div id="content-wrap" class="container_16">
	<div id="main-content" class="grid_11">
		<?php $features = new WP_Query('posts_per_page=10');
		while($features->have_posts()) : $features->the_post();?>
			<div class="post">
				<div class="image">
					<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
				</div>
				<div class="info">
					<h6><?php the_category(', ');?></h6>
					<h2><a href="<?php the_permalink();?>" data-tooltip="<?php the_content_rss('',true,'',50);?>"><?php the_title();?></a></h2>
					<p class="post-date">Posted on <?php the_time('F j, Y')?></p>
					<ul class="rating">
						<li class="view">152</li>
						<li class="comt"><?php comments_popup_link('0','1','%','comment-link');?></li>
					</ul>
				</div>
			</div><!-- end post -->
		<?php endwhile; wp_reset_postdata();?>

		<div id="load-more"><a href="#">XEM THÊM</a></div>
	</div><!-- end main-content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>