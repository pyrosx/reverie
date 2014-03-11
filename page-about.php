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

	<div class="row topcontent parallax-first resrc first-bg "></div>	

	<?php while (have_posts()) : the_post();
			the_content(); 
	endwhile; ?>		

	<div class="row keepitsmall primary-background">
		<h1>-KEEP IT SMALL-</h1>
	</div>
	
	<div class="row parallax-bottom resrc "  >
		<p>&nbsp;</p>
	</div>
		
</div>

<script>
	(function($) {
	
		// PARALLAX CLASSES
		$('.parallax-first').parallax("50%",0.1);
		$('.parallax-second').parallax("50%",0.1);
		$('.parallax-third').parallax("50%",0.1);
		
		$('.parallax-bottom').parallax("50%",0.1);

		
	})(jQuery);
	

</script>

<?php get_footer(); ?>