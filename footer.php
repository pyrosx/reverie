<div class="footer-content">
	<div class="hr"></div>

	<div class="bg white">
		<div class="row section" id="sponsors">
	
			<div class="columns large-3">
				<h3>Our Supporters</h3>
			</div>			
			
			<div class="columns large-9 hide-for-small">
				<div class="liquid-slider" id="main-slider">
				
					<?php 
						$my_query = new  WP_Query(array(
						  'tax_query' => array(
							array(
							  'taxonomy' => 'post_format',
							  'field' => 'slug',
							  'terms' => 'post-format-link'
							)
						  ),
						  'orderby' => 'rand'
						)); 
						$pcount = 0;
				
				
						echo '<div class="sponsor-img-div">';
				
						while ($my_query->have_posts()) : $my_query->the_post();
							if ($pcount != 0 && $pcount % 3 == 0) {echo '</div><div class="sponsor-img-div>';}
							$pcount++;
							$img = wp_get_attachment_image_src( get_post_thumbnail_id(),'full');
							echo '<a href="'.get_the_content().'"><img class="sponsor-img" src="'.$img[0].'"/></a>';
							//get_the_post_thumbnail();
						endwhile; 
						echo '</div>'	
					?> 
					
				</div>
			</div>
				
			<div class="columns show-for-small">
				<div class="scroll-box">				
					<?php 
					$my_query = new  WP_Query(array(
					  'tax_query' => array(
						array(
						  'taxonomy' => 'post_format',
						  'field' => 'slug',
						  'terms' => 'post-format-link'
						)
					  ),
					  'orderby' => 'rand'
					)); 
					while ($my_query->have_posts()) : $my_query->the_post();
						$img = wp_get_attachment_image_src( get_post_thumbnail_id(),'full');
						echo '<div class="small-slider-pane"><a href="'.get_the_content().'"><img class="sponsor-img-small" src="'.$img[0].'"/></a></div>';
						//get_the_post_thumbnail();
					endwhile; ?> 
					
				</div>
			</div>
					
		</div>
	</div>
	
	<div class="hr"></div>
	
	<div class="bg bgwhite">
		<div class="row section" id="team">
			<div class="columns">
				<h2 class="blue">TEAM LARA</h2>
				<div class="buttons show-for-small"><div class="round-button"><a id="team-toggle" class="bgorange" href="#">VIEW TEAM</a></div></div>
				
				<div class="row team-content">
					<div class="columns large-3">				
						<h5>PATRON</h5>

						<p>Dr Linda Friedland</p>
						<p>&nbsp;</p>
						
						<h5>MEDICAL & SCIENTIFIC ADVISORY PANEL</h5>

						<p>Prof David Sonnabend (Convenor)</p>
						<p>Prof Judith Black AO</p>
						<p>Dr Tamera Corte</p>
						<p>Prof Alan Glanville</p>
						<p>Dr Jeffrey Lindenmayer</p>
						<p>A/Prof Mervyn Merrilees</p>
						<p>Dr Helen Whitford</p>
						<p>A/Prof Deborah Yates</p>
					</div>
					<div class="columns large-3">
						<h5>EXECUTIVE</h5>

						<p><strong>President:</strong> Janet Neustein</p>
						<p><strong>Vice President:</strong> Melanie Hawyes</p>
						<p><strong>Secretary:</strong> Michael Neustein</p>
						<p><strong>Treasurer:</strong> Annette Hicks</p>

						</div>
					<div class="columns large-3">
						<h5>COMMITTEE</h5>

						<p>Pat Evans</p>
						<p>Marion Lang</p>
						<p>Ros Pollard</p>
						<p>Kate Wingrave</p>
						<p>&nbsp;</p>
						<p><strong>Public Officer:</strong> Peter Kelso</p>
						<p><strong>Hon Auditor:</strong> Peter Hersh, Logicca P/L</p>
						<p><strong>Director, NZ LAM TRUST:</strong> Bronwyn Gray</p>
						<p><strong>Founding President:</strong> Heather Telford</p>
					</div>
					<div class="columns large-3">
						<h5>ACKNOWLEDGEMENTS</h5>

						<p>ARA thanks the professionals who work pro bono for this not-for-profit organisation. </p>
						<p>We highly recommend the services of:</p>
						<p>&nbsp;</p>
						<p>Karen Riethmuller, KGR Design</p>
						<p>Peter Hersh, Loggica Pty Ltd</p>
						<p>Peter Kelso</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="bg bgvlgrey" id="greyfooter">
		<div class="row section">
			<div class="columns large-3">
				<h3>LARA&rsquo;S OBJECTIVES</h3>
				<ul>
					<li>Funding research to find a cure for LAM</li>
					<li>Raising awareness of LAM</li>
					<li>Supporting women living with LAM</li>
				</ul>
				<p><a href="todo">Share this site with a friend › </a></p>
			</div>
			<div class="columns large-3">
				<h3>DONATE </h3>
				<p>All donations to LARA are fully tax deductible. Your contribution to LARA will go 100% to funding vital medical research to find a cure for LAM.</p>
				<p><a href="<?php echo get_site_url(); ?>/donate-now/">Donate now › </a></p>
			</div>
			<div class="columns large-3">
				<h3>JOIN US</h3>
				<p>Join LARA by completing our online membersip form</p>
				<p><a href="<?php echo get_site_url(); ?>/join-us/">Join now ›</a></p>
			</div>
			<div class="columns large-3">
				<h3>WHAT TO DO IF YOU THINK YOU MIGHT HAVE LAM</h3>
				<p><a href="<?php echo get_site_url(); ?>/5-step-checklist/">View our 5 step checklist ›</a></p>
			</div>
		</div>
	</div>

	<div class="bg bgblue" id="bluefooter">
		<div class="row">	

			<div class="columns large-4 hide-for-small section">
				<nav>
			<?php
				// Get the nav menu based on $menu_name (same as 'theme_location' or 'menu' arg to wp_nav_menu)
				// This code based on wp_nav_menu's code to get Menu ID from menu slug

				$menu_name = 'primary';

				if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
					$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
					$menu_items = wp_get_nav_menu_items($menu->term_id);

					foreach ( (array) $menu_items as $key => $menu_item ) {
						$menu_list .= '<h4><a href="' . $menu_item->url . '">' . $menu_item->title . '</a></h4>';
					}
				}
				// $menu_list now ready to output		
				echo $menu_list;
			?>	
				</nav>
			</div>
		
		
			<div class="columns large-5 section push-3">			
				<h3 class="conn">CONNECT WITH US ›</h3>
				<div class="conn">
					<a href="http://www.facebook.com/LARA.org"><img class="rotate" src="<?php echo get_template_directory_uri(); ?>/img/icon-fb.png"/></a>
					<a href="http://twitter.com/LARA_org"><img class="rotate" src="<?php echo get_template_directory_uri(); ?>/img/icon-twitter.png"/></a>
					<a href="mailto:admin@lara.org.au"><img class="rotate" src="<?php echo get_template_directory_uri(); ?>/img/icon-mail.png"/></a>
				</div>
				<h3>&nbsp;</h3>
			
				<?php dynamic_sidebar("Footer"); ?>
			
			</div>

			<div class="columns large-3 section pull-5">
				<p>&copy; 2013 Copyright LARA. All rights reserved</p>
				<p>Privacy Policy</p>
				<p>Created by Redro Design</p>
			</div>

		</div>
	</div>
<div class="footer-content">
</div>

<script>
	var nav = responsiveNav(".nav-collapse", { // Selector
		animate: true, // Boolean: Use CSS3 transitions, true or false
		transition: 800, // Integer: Speed of the transition, in milliseconds
		label: '<img id="menubutton" src="<?php echo get_template_directory_uri(); ?>/img/menu-nav.png"/>', // String: Label for the navigation toggle
		insert: "before", // String: Insert the toggle before or after the navigation
		customToggle: "", // Selector: Specify the ID of a custom toggle
		openPos: "relative", // String: Position of the opened nav, relative or static
		jsClass: "js", // String: 'JS enabled' class which is added to <html> el
		init: function(){}, // Function: Init callback
		open: function(){}, // Function: Open callback
		close: function(){} // Function: Close callback
	});
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery.easing.1.3.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery.touchSwipe.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery.liquid-slider.min.js"></script>  
<script>
    jQuery('#main-slider').liquidSlider({
    	slideEaseFunction:'animate.css',
		animateOut: "fadeOutUp",
		animateIn: "fadeInUp",
		slideEaseDuration: 600,
		fadeInDuration: 200,
		fadeOutDuration: 200,

		autoSlide: true,
		autoSlideInterval:  4000,
		preloader: true,
		pauseOnHover: true,
		responsive: true,
		autoHeight: true
	});
	/*
    jQuery('#small-slider').liquidSlider({
    	slideEaseFunction:'animate.css',
		animateOut: "fadeOut",
		animateIn: "fadeIn",
		slideEaseDuration: 1000,
		fadeInDuration: 300,
		fadeOutDuration: 300,
		autoSlide: true,
		autoSlideInterval:  3000,
		preloader: true,
		pauseOnHover: true,
		responsive: true,
		autoHeight: true,
mobileNavigation: true,
hideArrowsWhenMobile: false,
swipe: false,
hoverArrows: false

	});
*/
    /* If you need to access the internal property or methods, use this:
    var api = $.data( $('#slider-id')[0], 'liquidSlider');
    */
  </script>

<script>

	(function($) {
	
		$('#team-toggle').click(function(e) {
			if ($('.team-content').css('max-height') == '0px') {
				$('.team-content').css('max-height','1500px');
			} else {
				$('.team-content').css('max-height','0px');
			}

			e.preventDefault();
		});
		
		$(document).foundation();
	})(jQuery);
</script>

 
</body>
</html>