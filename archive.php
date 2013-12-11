<?php get_header(); ?>

<!-- Row for main content area -->
	
		
		<div class="row">
	<div class="large-8 columns page-content section">
	
	<?php /* Start loop */ ?>
<?php if ( have_posts() ) : ?>
	
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
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
	<div class="large-4 columns">
		<div class="bgblue side-box section">
			
			<h1 class="bgblue">Please donate today</h1>
			<p><strong>ALL DONATIONS TO LARA ARE FULLY TAX DEDUCTIBLE</strong></p>
			<p>Your contribution to LARA will go 100% to funding vital medical research to find a cure for LAM.</p>
			<div class="buttons"><div class="round-button"><a class="bgorange" href="<?php echo get_site_url(); ?>/donate-now/">DONATE</a></div></div>

		</div>
		<div class="bgvlgrey side-box section">
			<h1>News & Events</h1>
			<p>LARA's new Patron, Dr Linda Friedland, is a highly-accomplished doctor, widely-read author, and dynamic public speaker. Dr Friedland travels the world speaking about health and well being.</p>
			<div class="buttons"><div class="round-button"><a class="bgblue" href="<?php echo get_site_url(); ?>/news/">READ MORE</a></div></div>

		</div>
		<div class="bgorange side-box section">
			<h1 class="bgorange">Kate Wingrave's Story</h1>
			<p>&ldquo;November 2010 is a month I will never forget. This was the month when I was rushed to hospital with severe back pain and came home diagnosed with lymphangioleiomyomatosis, a disease I'd never heard of before.&rdquo;</p>
			<div class="buttons">
				<div class="round-button"><a class="bgvlgrey" href="<?php echo get_site_url(); ?>/stories/kate-wingraves-story/">READ MORE</a></div>
				<div class="round-button"><a class="bgblue" href="<?php echo get_site_url(); ?>/stories/">MORE STORIES</a></div>
			</div>

		</div>
	</div>
</div>

<?php get_footer(); ?>