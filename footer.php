</section><!-- Container End -->

<div class="row full-width">
	<?php dynamic_sidebar("Footer"); ?>
</div>

<footer class="row full-width" role="contentinfo">
	<div class="small-24 large-8 columns">
		<p>&copy; <?php echo date('Y'); ?>. Crafted on <a href="http://themefortress.com/reverie/" rel="nofollow" title="Reverie Framework">Reverie</a>.</p>
	</div>
	
	<div class="small-24 large-16 columns">
		<?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list right')); ?>
	</div>
</footer>

<?php wp_footer(); ?>

  <script>

</script>


<script>

	

	(function($) {
		$(document).foundation();
		
		$(document).ready(function () {
			$('#sidebar').css('height',$('#maincontent').height());	
		});


	})(jQuery);
	  /* quick hack to set the sidebar height to that of the main content area */

</script>


	
</body>
</html>