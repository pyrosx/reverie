<?php
/*
Template Name: What's On Page
*/

get_header(); 

// need to remove bar name from single_cat_title()
$title = explode("–",single_cat_title('',false));
$title = $title[1];

global $slug
?>

<div class="row categorypage">

<!-- Row for main content area -->
	<div class="small-24 columns" id="content" role="main">

		<div class="topcontent row resrc parallax parallax-sixth first-bg">
			<h1><?php echo $title?> </h1>
		</div>
		
		<div class="row wood2bg">
			<div class="articles" >
				<div class="row">
			<?php 
			if ( have_posts() ) : 
	
				/* Start the Loop */
				$count=0;
				while ( have_posts() ) : the_post();
					get_template_part( 'content' );

					$count++;
					if ($count%2 == 0) {
						echo '</div><div class="row">';
					}

				endwhile;
		
				else :
					get_template_part( 'content', 'none' );
		
			endif; // end have_posts() check 
				
			?>
				</div>
			</div>
		</div>				
					
		<div class="row parallax-bottom resrc"  >
			<p>&nbsp;</p>
		</div>
	</div>		
	
</div>

<?php get_footer(); ?>