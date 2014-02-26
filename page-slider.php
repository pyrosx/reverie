<?php
/*
Template Name: Slider Page - Erskine St
*/

get_header(); 

?>

<!-- 
<div class="row preloaderer">
	<h1>Loading...</h1>
</div>
 -->

<div class="row" id="sliderpage">

<!-- Row for main content area -->
	<div class="small-24 columns" id="content" role="main">

		<div class="row topcontent resrc first-bg "><div class="columns small-24">
			<h1>KEEP IT<br/> SMALL<br/> SYDNEY</h1>
		</div></div>	
		
		<div class="row pagecontent resrc">
			<div class="columns small-24">
		<?php while (have_posts()) : the_post();
			the_content(); 
		endwhile; ?>
		</div></div>	

		<div class="row maptitle"><div class="columns small-24">
			<h1>SMALL BAR ERSKINE ST</h1>
		</div>	</div>	

		<div class="row map">
			<iframe width='100%' height='100%' frameBorder='0' src='http://a.tiles.mapbox.com/v3/redro.h8gjcj02/mm/geocoder,share.html'></iframe>
		</div>
		
		<div class="row bottom resrc "  >
			<p>&nbsp;</p>
		</div>
		
	</div>		
	
</div>

<script>
	(function($) {
	
		// PARALLAX CLASSES
		$('.topcontent').parallax("50%",0.1);
		$('.bottom').parallax("50%",0.1);

		
	})(jQuery);
	

</script>

<?php get_footer(); ?>