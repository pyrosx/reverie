<?php
/*
Template Name: Location Page
*/

get_header(); 

?>

<div class="row" id="locationpage">

<!-- Row for main content area -->
	<div class="small-24 columns" id="content" role="main">

		<div class="topcontent row resrc parallax-fifth">
			<h1>LOCATION</h1>
		</div>
		
		<div class="row location">
		<?php while (have_posts()) : the_post();
				the_content(); 
		endwhile; ?>		
		</div>
		
		<div class="row parallax-bottom resrc"  >
			<p>&nbsp;</p>
		</div>
	</div>		
</div>

<script>
	(function($) {
	
		// PARALLAX CLASSES
		$('.parallax-first').parallax("50%",0.5);
		$('.parallax-second').parallax("50%",0.2);
		$('.parallax-third').parallax("50%",-0.1);
		$('.parallax-fourth').parallax("50%",0.5);
		
		$('.parallax-bottom').parallax("50%",0.1);

		
	})(jQuery);
	

</script>

<?php get_footer(); ?>