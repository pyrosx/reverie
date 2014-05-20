<?php
/*
Template Name: Home Page 
*/

get_header(); 

?>


<div class="row" id="homepage">

<!-- Row for main content area -->
	<div class="small-24 columns" id="content" role="main">

		<div class="row topcontent parallax parallax-fourth resrc first-bg screen-height centerbox">
			<div class="columns small-24">
				<h1>Sydney’s Original <br/>Small Bar </h1>
				<h2>Keep it Small…</h2>
			</div>
		</div>	
		
		<?php while (have_posts()) : the_post();
			the_content(); 
		endwhile; ?>
		
		<div class="row parallax-bottom resrc "  >
			<p>&nbsp;</p>
		</div>
		
	</div>		
	
</div>

<?php get_footer(); ?>