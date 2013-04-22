<?php
/*
Template Name: No Health Focus Section
*/
get_header(); ?>

<!-- Row for main content area -->
	<div class="small-24 large-15 columns" role="main" id="maincontent">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	<div id="sidebar" class="small-24 large-9 columns">
		<div id="towercontainer">
			<ul data-orbit id="tower" data-options="timer_speed:5000; bullets:false;">
			
			<?php $my_query = new WP_Query('category_name=imageslider'); ?>

			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			
				<li> <?php the_post_thumbnail('full'); ?></li>

			<?php endwhile; ?>

			</ul>
		</div>
	</div><!-- /#sidebar -->
		
<?php get_footer(); ?>