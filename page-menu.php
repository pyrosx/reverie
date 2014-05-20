<?php
/*
Template Name: Menu Page
*/

get_header(); 


$menushare = 
'		<div class="row menuemail primary-background">
			<p>Share this menu: 
			<a href="mailto:?subject='.rawurlencode("Check out this Smallbar Menu").'&body='.rawurlencode($currentPageURL).'"><i class="fa fa-envelope "></i></a>
			<a href="http://www.facebook.com/sharer.php?s=100
				&p[url]='.$currentPageURL.'
				&p[summary]=Check out this Smallbar Menu" target="_blank"><i class="fa fa-facebook "></i></a>
			<a href="https://twitter.com/home?status='.$currentPageURL.'"><i class="fa fa-twitter "></i></a>
			</p>
		</div>';

?>

<div class="row <?php the_title();?>" id="menupage">

<!-- Row for main content area -->
	<div class="small-24 columns" id="content" role="main">

		<div class="row parallax menutop first-bg resrc"></div>

		<div class="row ">
			<ul id="menuselection">
				<?php wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent );?>
			</ul>
		</div>

		<?php echo $menushare; ?>
		
		<?php while (have_posts()) : the_post();
			the_content(); 
		endwhile; ?>
				
		<div class="row menubottom resrc"></div>

	</div>
		
</div>

<?php get_footer(); ?>