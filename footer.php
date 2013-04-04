</section></div><!-- Container End -->

<div class="row full-width">
	<?php dynamic_sidebar("Footer"); ?>
</div>

<footer class="row full-width" role="contentinfo">
	<div class="large-10 columns">
		<p>&copy; <?php echo date('Y'); ?>. Crafted on <a href="http://themefortress.com/reverie/" rel="nofollow" title="Reverie Framework">Reverie</a>.</p>
	</div>
	
	<div class="large-16 columns">
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	 	
	 	
		/* if in non-mobile mode */
		if ($('body').width() >= 768) {
			/* set the maincontent and sidebar heights to that of the main content bg height */
			$(document).ready(function () {
				//var $height = $('#maincontent').height() > $('#sidebar').height() ? $('#maincontent').height() : $('#sidebar').height();
				var $height = $('#contentbg').outerHeight();
			
				$('#sidebar').css('height',$height);	
				$('#maincontent').css('height',$height);	
			
			});
			// for the window resize
			$(window).resize(function() {
				//var $height = $('#maincontent').height() > $('#sidebar').height() ? $('#maincontent').height() : $('#sidebar').height();
				var $height = $('#contentbg').outerHeight();
			
				$('#sidebar').css('height',$height);	
				$('#maincontent').css('height',$height);
			});
		}
	})(jQuery);
</script>
	
</body>
</html>