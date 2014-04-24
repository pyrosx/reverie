<?php
/*
Template Name: Functions Page
*/

get_header(); 

?>

<!-- 
<div class="row preloaderer">
	<h1>Loading...</h1>
</div>
 -->

<div class="row" id="functionspage">

<!-- Row for main content area -->
	<div class="small-24 columns" id="content" role="main">

		<div class="row topcontent parallax-first resrc first-bg  centerbox"><div class="columns small-24">
			<h1>LOOKING FOR &lsquo;THE&rsquo; VENUE
			<br/>TO HOST YOUR EVENT OR
			<br/>FUNCTION?</h1>
		</div></div>	

		<div class="row wood2bg"><div class="columns small-24">
		<div class="functioncontent">
		<?php while (have_posts()) : the_post();
				the_content(); 
		endwhile; ?>		
		</div>
		</div></div>
		
		<div class="row parallax-third resrc screen-height"></div>

	
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