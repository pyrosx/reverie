<?php get_template_part('head'); ?>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive-nav.css">
	<script src="<?php echo get_template_directory_uri(); ?>/js/responsive-nav.min.js"></script>
	
</head>

<?php 
	global $bar;
	global $barDisplay;
	global $currentPageURL;
	
	global $post;         // load details about this page
	if (is_page()) {

		$barDisplay = get_the_title($post->post_parent);
		$bar = strtolower(str_replace(" ", "-", $barDisplay));
		$currentPageURL = get_site_url().'/'.$bar;
		if ($post->post_parent) {
			$currentPageURL .= '/'.get_post( $post )->post_name;
		}
	} else if (is_category()) {
	
		$disp = explode("&#8211;",single_cat_title('',false));
		$barDisplay = $disp[0];
		
		$slug = explode("_",get_category(get_query_var('cat'))->slug);
		$bar = $slug[0];
		
		$currentPageURL = get_site_url().'/category/'.$bar.'_'.$slug[1];		
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
	style="background-image: url('<?php 
		if (($bg_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID))) == false) 
			$bg_url = get_template_directory_uri().'/img/bg-red.png';
			
		echo $bg_url;
	?>')"
>

<div id="wrapper">
<div id="content_wrapper"> 

<header class="contain-to-grid" id="top">

	<div class="row">	       
		<div class="small-8 medium-5 large-3 columns" id="logo">
			<a href="<?php echo get_site_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"/></a>
		</div>

		<div class="small-10 medium-5 large-3 columns" id="ident">
			<p class="primary-color"><?php echo $barDisplay;?></p>
			<p class="sub"><a href="<?php echo get_site_url();?>">Choose a small bar</a></p>
			<?php get_template_part('socialicons');?>
		</div>

		<div class="show-for-large-up medium-14 large-18 columns primary-color" id="bignav">
			<ul class="small-block-grid-10">
				<?php get_template_part("menu"); ?>
			</ul>
		</div>

		<!--- Mobile Nav --->
		<div class="small-6 columns hide-for-large-up" id="smallnavtoggle">
			<a id="toggle"><i class="fa fa-bars primary-color"></i></a>
		</div>
		
		<nav class=" hide-for-large-up nav-collapse columns primary-color" id="smallnav">
			<ul>
				<?php get_template_part("menu"); ?>
			</ul>
		</nav>
	</div>
	

</header>

<div class="container">