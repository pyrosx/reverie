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

		if ( current_user_can('wpsqt-manage') ) {
		
			echo '<ul class="side-nav"><li>';
				// edit page link
				edit_post_link( 'Edit Page');
				// control panel link						
				echo '<a href="'.WPSQT_URL_DASHBOARD.'">Control Panel</a></li>';
			echo '</ul>';
		}

		?>
	</div>

</section><!-- Container End -->

<footer class="row full-width" role="contentinfo">

	<div class="large-3 columns">
		<p>&copy; <?php echo date('Y'); ?> <a href="http://sushiizu.com.au/">AFC Australia</a></p>
	</div>
	<div class="large-9 columns">
		<p>Content and Training by <a href="http://elevatingfoodsafety.com/">Elevating Food Safety</a></p>
	</div>
	<!-- Code and design by pyrosx@gmail.com -->		
</footer>

<?php wp_footer(); ?>	

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>

</body>
</html>