<?php get_header(); ?>

<div class="row <?php the_title();?>" id="standardpage">

<!-- Row for main content area -->
	<div class="small-24 columns" id="content" role="main">

		<div class="topcontent row resrc parallax parallax-fifth first-bg">
			<h1><?php the_title();?></h1>
		</div>
		
		<?php while (have_posts()) : the_post();
				the_content(); 
		endwhile; ?>		
		
		<div class="row parallax-bottom resrc">
			<p>&nbsp;</p>
		</div>
	</div>		
</div>

<?php get_footer(); ?>