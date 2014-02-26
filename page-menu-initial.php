<?php
/*
Template Name: Menu Page - Initial
*/

get_header(); 

?>

<!-- 
<div class="row preloaderer">
	<h1>Loading...</h1>
</div>
 -->

<div class="row" id="menupageinitial">

<!-- Row for main content area -->
	<div class="small-24 columns" id="content" role="main">

		<div class="row first-bg"><div class="columns small-24">
			
			<h2>CHOOSE YOUR MENU
			<br/>
			<i class="fa fa-chevron-down primary-color"></i>
			<br/>
			</h2>
		
			<ul>
				<?php wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID );?>
			</ul>
			
		</div></div>		
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