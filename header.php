<?php get_template_part('head'); ?>
	
</head>

<?php 
	global $bar;
	global $barDisplay;
	global $currentPageURL;
	
	global $post;         // load details about this page
	if (is_page()) {

		$parent = array_reverse(get_post_ancestors($post->ID));
		$first_parent = get_page($parent[0]);

		$barDisplay = get_the_title($first_parent);
		
		$bar = strtolower(str_replace(" ", "-", $barDisplay));

// 		$currentPageURL = get_site_url();
// 		foreach (array_reverse(get_post_ancestors($post)) as $ancestor) {
// 			$currentPageURL .= '/'.get_page($ancestor)->post_name;
// 		}
// 		$currentPageURL .= '/'.$post->post_name;


 		$currentPageURL = get_permalink($post->ID);
		
	} else if (is_category()) {
		
		// there doesn't seem to be a solid way to get the url of the category archive page... safer to build it ourselves here.
		
		$disp = explode("&#8211;",single_cat_title('',false));
		$barDisplay = $disp[0];
		
		$slug = explode("_",get_category(get_query_var('cat'))->slug);
		$bar = $slug[0];
		
		$currentPageURL = get_site_url().'/category/'.$bar.'_'.$slug[1].'/';	
	}
	
	global $url, $cat;
	$url = get_site_url().'/'.$bar;
	$cat = get_site_url().'/category/'.$bar.'_';

	// echo's the <a> tag, checks it against the current url, replaces with <p class="selected"> class where necessary
	function print_link($page) {
		
		global $currentPageURL;
		
		if (!strcmp($page,$currentPageURL)) {
			echo'<p class="selected" >';
		} else {
			echo '<a href="'.$page.'">';
		}
	}
	
?>
<body 
	<?php body_class('antialiased'); ?> 
	id="<?php echo $bar;?>" 
	
	
>


<header class="contain-to-grid" id="top">

	<div class="row">	       
		<div class="small-8 medium-5 large-3 columns" id="logo">
			<a href="<?php echo get_site_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo2.png" width="89" height="91"/></a>
		</div>

		<div class="small-10 medium-5 large-3 columns" id="ident">
			<p class="primary-color"><?php echo $barDisplay;?></p>
			<p class="sub"><a href="<?php echo get_site_url();?>">Choose a small bar</a></p>
			<?php get_template_part('socialicons');?>
		</div>

		<div class="show-for-large-up medium-14 large-18 columns primary-color" id="bignav">
			<ul id="bignavul">
				<?php get_template_part("menu"); ?>
			</ul>
		</div>

		<!--- Mobile Nav --->
		<div class="small-6 columns hide-for-large-up" id="smallnavtoggle">
			<a id="toggle"><i class="fa fa-bars primary-color"></i></a>
		</div>
		
	</div>

	<div class="row hide-for-medium-up" id="whatsontoclose">
		<div class="columns whatson">
			<div id="whatsonclose"><a href="#"><i class="fa fa-times"></i></a></div>
			<?php get_template_part("whatson"); ?>
		</div>
	</div>

	<nav class=" hide-for-large-up nav-collapse row primary-color" id="smallnav">
		<ul>
			<?php get_template_part("menu"); ?>
		</ul>
	</nav>
</header>


		
<div class="container">