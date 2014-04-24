<?php
/*
Template Name: Home Page - Erskine St
*/

get_header(); 

?>

<!-- 
<div class="row preloaderer">
	<h1>Loading...</h1>
</div>
 -->

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

		<div class="row maptitle"><div class="columns small-24">
			<h1>SMALL BAR ERSKINE ST</h1>
		</div>	</div>	

		<div class="row map">
<!-- 			<iframe width='100%' height='100%' frameBorder='0' src='http://a.tiles.mapbox.com/v3/redro.h8gjcj02/mm/geocoder,share.html'></iframe> -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.8867266157376!2d151.203753!3d-33.866809999999944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae4751d3ecab%3A0xfc7006091e09d08c!2s48+Erskine+St!5e0!3m2!1sen!2sau!4v1398325199006"  width="100%" height="100%" frameborder="0" style="border:0"></iframe>		
		</div>
		
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