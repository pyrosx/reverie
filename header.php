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

	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	
	<meta name="keywords" content="Lymphangioleiomyomatosis, LAM, lung disease, lymph, asthma, Angiomyolipoma, Tuberous Sclerosis, cyst, AML, alveoli, dyspnea, pneumothorax, emphysema, TS, pregnancy, LARA" />
	<meta name="description" content="LAM Australasia Research Alliance (LARA) funds research into lymphangioleiomyomatosis, a rare and devastating lung disease striking women mostly in their 30s." />

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

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive-nav.css">
	<script src="<?php echo get_template_directory_uri(); ?>/js/responsive-nav.min.js"></script>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/animate.css"/> 
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/liquid-slider.css"/>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div class="bg bgblue" id="bluetop"></div>

<div class="bg bgwhite" id="header">
	<div class="row hide-for-small">
		<a href="<?php echo get_home_url(); ?>"><img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/lara-header.png"/></a>
		<a class="headerlink bgorange" href="<?php echo get_home_url(); ?>/join-us/">Join Us</a>
		<a class="headerlink bgblue" href="<?php echo get_home_url(); ?>/donate-now/">Donate Today</a>
	</div>

	<div class="hr hide-for-small"></div>

	<div class="row nav">
		<a class="headerlink bgorange hide-for-medium-up" href="<?php echo get_home_url(); ?>/join-us/">Join Us</a>
		<a class="headerlink bgblue hide-for-medium-up" href="<?php echo get_home_url(); ?>/donate-now/">Donate</a>

		<nav class="nav-collapse">
		<?php
			// Get the nav menu based on $menu_name (same as 'theme_location' or 'menu' arg to wp_nav_menu)
			// This code based on wp_nav_menu's code to get Menu ID from menu slug

			$menu_name = 'primary';

			if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
				$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

				$menu_items = wp_get_nav_menu_items($menu->term_id);

				// last entry, "Donate Now", is unnecessary, so we're going to remove it.
				array_pop($menu_items);

				$menu_list = '<ul id="menu-' . $menu_name . '">';

				foreach ( (array) $menu_items as $key => $menu_item ) {
					$name = str_replace(' ', '', $menu_item->title);
					$menu_list .= '<li id="li-'.$name.'"><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
				}
				$menu_list .= '</ul>';
			} else {
				$menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
			}
			// $menu_list now ready to output		
			echo $menu_list;
		?>	
		</nav>
	</div>
</div>


<div class="hr hide-for-small"></div>

<div class="content">



	

