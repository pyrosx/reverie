<?php
/*
Template Name: Home Page 
*/

get_header(); 

?>


<div class="row" id="homepage">

<!-- Row for main content area -->
	<div class="small-24 columns" id="content" role="main">

		<div class="row topcontent parallax-fourth resrc first-bg centerbox"><div class="columns small-24">
			<h1>Sydney’s Original <br/>Small Bar </h1>
			<h2>Keep it Small…</h2>
			
		</div></div>	
		
		<?php while (have_posts()) : the_post();
			the_content(); 
		endwhile; ?>

		
		<div class="row parallax-bottom resrc "  >
			<p>&nbsp;</p>
		</div>
		
	</div>		
	
</div>

<script>
	(function($) {
	
		// PARALLAX CLASSES
		$('.parallax-first').parallax("50%",0.1);
		$('.parallax-second').parallax("50%",0.1);
		$('.parallax-third').parallax("50%",0.1);
		$('.parallax-fourth').parallax("50%",0.1);
		$('.parallax-bottom').parallax("50%",0.1);

		
	})(jQuery);
	

</script>

<?php get_footer(); ?>