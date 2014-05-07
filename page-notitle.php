<?php
/*
Template Name: No Title Page
*/

get_header(); 

?>

<div id="standardpage">

<!-- Row for main content area -->
	<div class="small-24 columns" id="content" role="main">
		
		<div class="row location headfootbg">
		<?php while (have_posts()) : the_post();
				the_content(); 
		endwhile; ?>		
		</div>
		
		<div class="row parallax parallax-bottom resrc"  >
			<p>&nbsp;</p>
		</div>
	</div>		
</div>

<?php get_footer(); ?>