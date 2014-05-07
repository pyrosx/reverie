<?php
/*
Template Name: Space Page
*/

get_header(); 

?>

<!-- 
<div class="row preloaderer">
	<h1>Loading...</h1>
</div>
 -->

<div class="row" id="spacepage">

<!-- Row for main content area -->
	<div class="small-24 columns" id="content" role="main">

		<?php while (have_posts()) : the_post();
				the_content(); 
		endwhile; ?>		
	
		<div class="row parallax parallax-bottom resrc "  >
			<p>&nbsp;</p>
		</div>
	</div>		
</div>

<?php get_footer(); ?>