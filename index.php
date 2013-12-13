<?php get_header(); ?>

<!-- Row for main content area -->
<div class="row">
	<div class="large-8 columns page-content section">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
		</article>

		<?php if( in_category( 'story')) { ?>
			<div class="buttons">
				<div class="round-button"><a class="bgblue" href="<?php echo get_site_url(); ?>/category/story/">MORE STORIES</a></div>
			</div>
		<?php } ?>

	<?php endwhile; // End the loop ?>

	</div>
	
	<?php get_template_part('rightsidebox'); ?>

</div>
		
<?php get_footer(); ?>