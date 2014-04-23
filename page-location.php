<?php
/*
Template Name: Location/Contact Page
*/

get_header(); 

?>

<div class="row" id="locationpage">

<!-- Row for main content area -->
	<div class="small-24 columns" id="content" role="main">

		<div class="topcontent row resrc parallax-fifth">
			<h1><?php the_title();?></h1>
		</div>
		
		<div class="row location wood2bg">
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
		$('.parallax-fifth').parallax("50%",0.3);
		
		$('.parallax-bottom').parallax("50%",0.1);

		
	})(jQuery);
	

</script>

<?php get_footer(); ?>