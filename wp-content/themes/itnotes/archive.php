<?php get_header(); ?>

<div id="content-wrap" class="container_16">
	<div id="main-content" class="grid_11">
		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2>Archive for <?php the_time('F jS, Y'); ?></h2>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2>Archive for <?php the_time('F, Y'); ?></h2>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2>Archive for <?php the_time('Y'); ?></h2>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2>Author Archive</h2>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2>Blog Archives</h2>
			
			<?php } ?>

			
			<?php while (have_posts()) : the_post(); ?>
			
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

			<?php endwhile; ?>

			<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
			
	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>

	</div><!-- end main-content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>