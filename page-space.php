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
	
		<div class="row parallax-bottom resrc "  >
			<p>&nbsp;</p>
		</div>
	</div>		
</div>

<script>
	(function($) {
	
		// PARALLAX CLASSES
		$('.parallax-first').parallax("50%",0.2);
		$('.parallax-second').parallax("50%",0.5,false,-100);
		$('.parallax-third').parallax("50%",0.2,false,-50);
		$('.parallax-fourth').parallax("50%",0.5,false,-100);
		
		$('.parallax-bottom').parallax("50%",0.1);

		
	})(jQuery);
	

</script>

<?php get_footer(); ?>