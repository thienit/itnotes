<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">

	<link rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/css/reset.css' />
	<link rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/css/960.css'/>
	<link rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/css/text.css' />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">

		<div id="header">
			<div id="top-bar">
				<div class="container_16">
					<?php wp_nav_menu(array('menu'=>'Page Menu', 'container'=>''));?>

					<div id="page-search" class="grid_5">
						<form action="#">
							<input type="text" />
							<a id="search-submit" href="javascript:void(0)"></a>
						</form>
					</div>
				</div>
			</div><!-- end top-bar -->

			<div class="container_16">
				<div class="grid_16">
					<h1 id="logo"><a href="index.php"><image src="<?php echo bloginfo('template_directory');?>/images/logo.png" alt="IT NOTES" title="IT NOTES" /></a></h1>
				</div>

				<div class="grid_16">
					<?php wp_nav_menu(array('menu'=>'Categories Menu','container'=>''));?>
				</div><!-- end grid_16 -->
			</div><!-- end container_16 -->
		</div><!-- end #header -->