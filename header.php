<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon.png" />

	<!-- Enable Startup Image for iOS Home Screen Web App -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

	<!-- Startup Image iPad Landscape (748x1024) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<!-- Startup Image iPad Portrait (768x1004) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<!-- Startup Image iPhone (320x460) -->
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />


	<!-- webfonts -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/MyFontsWebfontsKit.css">


<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="bigheader">
	<header class="row show-for-medium-up" >
		<div class="small-8 columns" id="logo_otmc">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo_otmc.png"/>
		</div>
		<div class="small-11 columns" id="bigheaderinfo">
			<h2>PHONE <a href="tel:0292527500">02 9252 7500</a></h2>
			<h3>Suite 5, 168 Kent Street, Sydney NSW 2000</h3>
			<h3><a href="mailto:observatory@executivehealthgroup.com.au">observatory@executivehealthgroup.com.au</a></h3>
			<h3>&nbsp;</h3>
			<p><strong>日本人</strong> <a href="tel:0292528888">02 9252 8888</a>  |  <a href="mailto:japanese@executivehealthgroup.com.au">japanese@executivehealthgroup.com.au</a></p>
			<p><strong>Monteith Physio</strong> <a href="tel:0292527566">02 9252 7566</a>  |  <a href="mailto:adam@monteithphysio.com.au">adam@monteithphysio.com.au</a></p>
		</div>
		<div class="small-5 columns" id="logo_ehg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo_ehg.png"/>
		</div>

	</header>
</div>

<div id="smallheader">
	<header class="row hide-for-medium-up">
		<div id="logo_otmc_small" class="small-14 columns">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo_otmc_small.png"/>
		</div>
		<div id="logo_ehg_small" class="small-10 columns">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo_ehg_small.png"/>
		</div>
	</header>
</div>

<div id="bignav">
	<div class="row show-for-medium-up">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container' => false,
					'depth' => 0,
					'items_wrap' => '<ul class="small-block-grid-7">%3$s</ul>'
					 )
				 );
			?>
	</div>
</div>

<div id="smallnav">
	<div class="row hide-for-medium-up contain-to-grid sticky">
		<nav class="top-bar">
			<ul class="title-area small-block-grid-4">
				<li class="toggle-topbar">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/buttons/menu.png"/></a>
				</li>
				<li class="name green"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/buttons/call.png"/></a></li>
				<li class="name lgreen"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/buttons/email.png"/></a></li>
				<li class="name green"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/buttons/find.png"/></a></li>
			</ul>
			<section class="top-bar-section ">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'container' => false,
					'depth' => 0,
					'items_wrap' => '<ul class="left">%3$s</ul>',
					'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
					'walker' => new reverie_walker( array(
						'in_top_bar' => true,
						'item_type' => 'li'
					) ),
				) );
			?>
			</section>
		</nav>
	</div>
</div>
<!--
<div class="contain-to-grid sticky">
	<nav class="top-bar">
	    <ul class="title-area">
	        <li class="name">
	        
	        </li>
			<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	    </ul>
	    <section class="top-bar-section ">
	    <?php
	        wp_nav_menu( array(
	            'theme_location' => 'primary',
	            'container' => false,
	            'depth' => 0,
	            'items_wrap' => '<ul class="left">%3$s</ul>',
	            'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
	            'walker' => new reverie_walker( array(
	                'in_top_bar' => true,
	                'item_type' => 'li'
	            ) ),
	        ) );
	    ?>
	    </section>
	</nav>
</div>
-->

<!-- Start the main container -->
<section class="container row" role="document">