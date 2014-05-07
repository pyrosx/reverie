<?php
/*
Template Name: About Page
*/

get_header(); 

?>

<!-- 
<div class="row preloaderer">
	<h1>Loading...</h1>
</div>
 -->

<div class="row" id="aboutpage">

<!-- Row for main content area -->
	<div class="small-24 columns" id="content" role="main">

	<div class="row topcontent parallax parallax-first resrc first-bg "></div>	

	<?php while (have_posts()) : the_post();
			the_content(); 
	endwhile; ?>		

	<div class="row keepitsmall primary-background">
		<h1>-KEEP IT SMALL-</h1>
	</div>
	
	<div class="row parallax parallax-bottom resrc "  >
		<p>&nbsp;</p>
	</div>
		
</div>

<?php get_footer(); ?>