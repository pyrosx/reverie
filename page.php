<?php get_header(); ?>

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
		<div id="sidebarcontent">
			<h1>Health <span class="yellow">Focus</span></h1>
			<?php $my_query = new WP_Query('category_name=healthfocus&posts_per_page=10'); ?>

			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<h5 class="entry-title"><?php the_title(); ?></h5>
					<?php the_content(); ?>
				</article>
			<?php endwhile; ?>
		</div>
		<div id="towercontainer" class="bottom">
			<ul data-orbit id="tower" data-options="timer_speed:5000; bullets:false;">
<!--
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/tower.jpg"/></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/tower2.jpg"/></li>
				<li><img src="<?php echo get_template_directory_uri(); ?>/img/tower3.jpg"/></li>
-->
			<?php $my_query = new WP_Query('category_name=imageslider'); ?>

			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			
				<li> <?php the_post_thumbnail('full'); ?></li>

			<?php endwhile; ?>

			</ul>
		</div>
	</div><!-- /#sidebar -->
		
<?php get_footer(); ?>