</section></div><!-- Container End -->

<div class="row full-width">
	<?php dynamic_sidebar("Footer"); ?>
</div>

<footer class="row full-width" role="contentinfo">
	<div class="large-8 columns">
		<p>&copy; <?php echo date('Y'); ?>. Crafted on <a href="http://themefortress.com/reverie/" rel="nofollow" title="Reverie Framework">Reverie</a>.</p>
	</div>
	
	<div class="large-16 columns">
	</div>
</footer>
<!--A-->
<?php wp_footer(); ?>
<!--B-->
<script>

	(function($) {
		$(document).foundation();
	 	
		/* quick hack to set the sidebar height to that of the main content area */
		$(document).ready(function () {
			$('#sidebar').css('height',$('#maincontent').height());	
		});
		// for the window resize
		$(window).resize(function() {
			$('#sidebar').css('height',$('#maincontent').height());	
		});

	})(jQuery);

</script>


	
</body>
</html>