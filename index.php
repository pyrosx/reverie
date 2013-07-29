<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" role="main" id="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h3 class="entry-title"><?php the_title(); ?></h3>
				<?php echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('Posted on %s at %s.', 'reverie'), get_the_time('l, F jS, Y'), get_the_time()) .'</time>'; ?>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			
			<p class="byline author">
				<?php echo '<a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a>';?>
			</p>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			
		</article>
	<?php endwhile; // End the loop ?>

	</div>
		
<?php get_footer(); ?>