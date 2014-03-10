<?php
/*
Template Name: Menu Page
*/

get_header(); 

?>

<!-- 
<div class="row preloaderer">
	<h1>Loading...</h1>
</div>
 -->

<div class="row" id="menupage">

<!-- Row for main content area -->
	<div class="small-24 columns" id="content" role="main">

		<div class="row food1bg toppanel">
		</div>

		<div class="row ">
			<ul id="menuselection">
				<?php wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent );?>
			</ul>
		</div>
		
		<?php while (have_posts()) : the_post();
			the_content(); 
		endwhile; ?>
				
		<div class="row food2bg">
		
		</div>
	</div>		
	
</div>

<script>
	(function($) {
	
		// PARALLAX CLASSES
		$('.food1bg').parallax("50%",0.3);
		$('.food2bg').parallax("50%",0.3);

		
	})(jQuery);
	

</script>

<?php get_footer(); ?>