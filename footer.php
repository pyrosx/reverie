</div><!-- Container End -->

<footer class="row" id="bottom">
	<div class="medium-16 large-18 columns show-for-medium-up whatson">
		<?php get_template_part('whatson'); ?>		
	</div>
	<div class="medium-4 medium-push-4 large-3 large-push-3 columns" id="social">
		<?php get_template_part('socialicons');?>
	</div>
	<div class="medium-4 medium-pull-4 large-3 large-pull-3 columns" id="legal">
		<p>&copy; 2014 Small Bar <span class="medium-up"><br/></span>
		<a href="http://www.redro.com.au/">A Redro Design</a></p>
	</div>

</footer>


<?php wp_footer(); ?>

<script>
resrc = {
  options: {
    server: "trial.resrc.it",
	resrcOnResize: false
  }
};
</script>
<script src="//use.resrc.it"></script>
<script>

	(function($) {
	
		
		// $topheight: 130px;
		// $bottomheight: 70px;
		
		// The below needs to match the above in style.scss for everything to be peachy...
		
		var topheight = 130;
		var bottomheight = 70;

		$(window).resize(function() {
			// make sure first background element fills available space
			if ($('.first-bg').is(':visible')) {
				$('.first-bg').css('height',$(window).height()-bottomheight);			
			}
			if ($('.first-bg-nofooter').is(':visible')) {
				$('.first-bg-nofooter').css('height',$(window).height()-topheight);			
			}
			$('.firstbg-min').css('min-height',$(window).height()-bottomheight-topheight);
			
 			$('.screen-height').css('height',$(window).height()-bottomheight);			

			if ($('#bignav').is(':visible')) {
				// space bignav
				var total = $('#bignav').width();
				var menuItems = 0;
				var linksWidth = 0;
		
				$('#bignavul li').each(function() {
					linksWidth += $(this).width();
					menuItems++;
				});
				var padding = (total-linksWidth)/(menuItems+1);
			
				$('#bignav li').css('padding-left',padding);
			}			
			
			// resize smallnav
			if ($('#smallnav').is(':visible')) {
				$('#smallnav').height((window.innerHeight ? window.innerHeight : $(window).height())-topheight); 
			}
		});
		
		$(window).resize();
		
		
		$(document).foundation();
		
		nav = responsiveNav(".nav-collapse", { // Selector
			animate: true, // Boolean: Use CSS3 transitions, true or false
			transition: 800, // Integer: Speed of the transition, in milliseconds
			label: '', // String: Label for the navigation toggle
			insert: "before", // String: Insert the toggle before or after the navigation
			customToggle: "toggle", // Selector: Specify the ID of a custom toggle
			openPos: "relative", // String: Position of the opened nav, relative or static
			jsClass: "js", // String: 'JS enabled' class which is added to <html> el
			init: function(){}, // Function: Init callback
			open: function(){}, // Function: Open callback
			close: function(){} // Function: Close callback
		});

		$('#top').scrollUpMenu(nav);


		
		function closeWhatsOn() {
			$('#whatsontoclose').toggle();
			$('.container').css('margin-top',$('#top').height() );
		};
    
    	var bar = $('body').attr('id');
    	
    
		$('#whatsonclose').click(function() {
			closeWhatsOn();
			sessionStorage['whatsonclosed'+bar] = "yes";
		});
		
		if (sessionStorage['whatsonclosed'+bar] == "yes") {
			closeWhatsOn();
		}

		
		$('.resrc').review({
		  callback: function() {
			resrc.resrc(this);
		  }
		});
		
		// custom hacking to fix myguestlist form
		
		$('.MGLField').each(function() {
			$(this).children().attr("placeholder",$(this).prev().text());
		});
		
		
	})(jQuery);
	

	jQuery(window).load(function(){
		// fully loaded (we've got snacks and supplies)
		jQuery(window).resize();
		
	});

</script>

	
</body>
</html>