<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-24 large-15 columns" role="main" id="maincontent">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
<!--			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php reverie_entry_meta(); ?>
			</header>
-->
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<!--
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			-->
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	<div id="sidebar" class="small-24 large-9 columns">
		<div id="sidebarcontent">
		<h1>Health <span class="yellow">Focus</span></h1>
		<?php $my_query = new WP_Query('category_name=frontpage&posts_per_page=10'); ?>

		<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h5 class="entry-title"><?php the_title(); ?></h5>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
		</div>
		<img id="tower" class="hide-for-small" src="<?php echo get_template_directory_uri(); ?>/img/tower.jpg"/>
	</div><!-- /#sidebar -->
		
<?php get_footer(); ?>