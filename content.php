<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<div class="article columns small-24 medium-12">
<article id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?>>
	<div class="entry-content">
		<!-- <a href="<?php the_permalink(); ?>"> --><?php if ( has_post_thumbnail() ) {the_post_thumbnail('medium'); } ?><!-- </a> -->
		<h2><!-- <a href="<?php the_permalink(); ?>"> --><?php the_title(); ?><!-- </a> --></h2>
		<?php the_content();?>
	</div>
</article>
</div>