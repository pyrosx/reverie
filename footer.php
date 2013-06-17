	</div> <!-- end large-9 columns from header.php -->
	<!-- putting the left side second, so that the menu ends up underneath the content in small mode -->
	<div class="large-3 pull-9 columns" id="left_side_bar">

		<div class="logo hide-for-small" ><a href="<?php echo esc_url( home_url( '/' ) );?>"><img src="<?php echo get_template_directory_uri();?>/img/Sushi_Izu_Logo.png" alt="Sushi Izu Logo"/></a></div>

		<?php 
		dynamic_sidebar("Sidebar");
	
		if ( is_user_logged_in() ) {
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container' => false,
				'depth' => 0,
				'items_wrap' => '<ul class="side-nav">%3$s</ul>',
				'fallback_cb' => 'reverie_menu_fallback', // workaround to show a message to set up a menu
			
			) );
		} 

		?>
	</div>

</section><!-- Container End -->

<footer class="row full-width" role="contentinfo">

	<div class="large-3 columns">
		<p>&copy; <?php echo date('Y'); ?> <a href="http://sushiizu.com.au/">AFC Australia</a></p>
	</div>
	<div class="large-6 columns">
		<p>Content and Training by <a href="http://elevatingfoodsafety.com/">Elevating Food Safety</a></p>
	</div>
	<div class="large-3 columns">
		<p>Created by <a href="mailto:pyrosx+afc@gmail.com">pyrosx</a></p>
	</div>
		
</footer>

<?php wp_footer(); ?>	

<script>
	(function($) {
		$(document).foundation();
			 	
		// set the maincontent and sidebar heights to that of the main content bg height
		var setDivHeights = function() {
			minheight = 600;
			// reset stuff that we might have already fiddled with...
			$('#left_side_bar').css('height','auto');
			$('#right_content').css('height','auto');				
			if ($('body').width() >= 768) {				
				var height = $('#main_wrap').outerHeight();
				if (height < minheight) height = minheight;
				$('#left_side_bar').css('height',height);	
				$('#right_content').css('height',height);
			}	
		};
		
		// on first load
		$(window).load(function () {
			setDivHeights();
		});
		// and when the window resizes
		$(window).resize(function() {					
			setDivHeights();
		});
		
	})(jQuery);
</script>

</body>
</html>