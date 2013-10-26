<?php get_header(); ?>

<div id="content-wrap" class="container_16">
	<div id="main-content" class="grid_11">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<h3><?php the_category(', ');?></h3>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<h2><?php the_title(); ?></h2>
				
				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<div class="entry">
					
					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
					
					<?php the_tags( 'Tags: ', ', ', ''); ?>

				</div>
				
				<?php edit_post_link('Edit this entry','','.'); ?>
				
			</div>

		<?php comments_template(); ?>

		<?php endwhile; endif; ?>
	</div><!-- end main-content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>