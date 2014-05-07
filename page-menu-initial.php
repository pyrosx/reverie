<?php
/*
Template Name: Menu Page - Initial
*/

get_header(); 
?>

<div class="row" id="menupageinitial">

<!-- Row for main content area -->
	<div class="small-24 columns" id="content" role="main">

		<div class="row first-bg-nofooter screen-height first-bg food1bg">
			<div class="columns small-24">			
				<h2>CHOOSE YOUR MENU
				<br/>
				<i class="fa fa-chevron-down primary-color"></i>
				<br/>
				</h2>
		
				<ul>
					<?php wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID );?>
				</ul>
			</div>
		</div>		
	</div>		
	
</div>

<?php get_footer(); ?>