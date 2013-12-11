<?php get_header(); ?>

<!-- Row for main content area -->
	
		
<div class="row">
		
	<?php
	$args = array(
		'tax_query' => array(
			array(
			  'taxonomy' => 'post_format',
			  'field' => 'slug',
			  'terms' => 'post-format-link',
			  'operator' => 'NOT IN'
			)
		),
		  'category_name' => 'news',
	);
	query_posts( $args );
	?>

	<div class="large-8 columns page-content section">
	<?php if ( have_posts() ) : ?>
	
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content' ); ?>
			<?php endwhile; ?>
		
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		
		<?php endif; // end have_posts() check ?>
	
		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
			</nav>
		<?php } ?>

	</div>
	
	<?php get_template_part('rightsidebox'); ?>
	
</div>

<?php get_footer(); ?>