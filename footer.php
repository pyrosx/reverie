</div><!-- Container End -->

</div>
</div> <!-- wrapper -->

<div id="footer_wrapper">
<footer class="row" id="bottom">
	<div class="medium-18 columns" id="whatson">
		<span class="primary-color">What's On:</span>
		<span> Dynamic here</span>
		<span class="accent">View More <i class="fa fa-caret-right"></i></span>
	</div>
	<div class="medium-3  columns" id="legal">
		<p>&copy; Copyright 2014 Small Bar</p>
		<p><a href="http://www.redro.com.au/">Created by Redro Design</a></p>
	</div>
	<div class="medium-3 columns" id="social">
		<?php get_template_part('socialicons');?>
	</div>
</footer>
</div>

<?php wp_footer(); ?>

<script>
/*
	var nav = responsiveNav(".nav-collapse", { // Selector
		animate: true, // Boolean: Use CSS3 transitions, true or false
		transition: 800, // Integer: Speed of the transition, in milliseconds
		label: '', // String: Label for the navigation toggle
		insert: "before", // String: Insert the toggle before or after the navigation
		customToggle: "toggle", // Selector: Specify the ID of a custom toggle
		openPos: "static", // String: Position of the opened nav, relative or static
		jsClass: "js", // String: 'JS enabled' class which is added to <html> el
		init: function(){}, // Function: Init callback
		open: function(){}, // Function: Open callback
		close: function(){} // Function: Close callback
	});


	function onScrollDown(windowTop, lastScrollTop, quijibo, quijiboHeight, startPos) {
		if(windowTop >= quijiboHeight + startPos){
			if(quijibo.css('position') == 'fixed'){
				quijibo.css({'position' : 'absolute', 'top' : windowTop + 'px'});
			} else {
				quijibo.css({'position' : 'absolute', 'top' : windowTop - quijiboHeight + 'px'});		
			}
		}  
	}
	
	function onScrollUp(windowTop, lastScrollTop, quijibo, quijiboHeight, startPos) {
		if(windowTop <= startPos){
			quijibo.css({'position' : 'fixed', 'top' : '0px'});
		}
	}
	
	function showQuijibo(windowTop, quijibo) {
		var quijiboPos = quijibo.css('position');
		if (quijiboPos == "fixed"){
			//DO NOTHING  - EVENTUALLY MAKE THIS != FIXED TO NOT HAVE THIS HERE
			console.log("fixed");
		} else {
			quijibo.animate({'top' : windowTop});
		}
		
	}

jQuery(document).ready(function($){
	
	var quijibo = $('#top'); //Make a variable to reference the div
	var quijiboStartPos = 0;  //Find the starting position as a fixed element
	var quijiboHeight = quijibo.height();  //Find the total height of the element
	quijibo.css({'position' : 'absolute', 'top' : + quijiboStartPos + 'px', 'z-index' : '999999'});  //Place the element in the correct spot
	quijibo.after("<div id='quijiboExtra' style='width:100%; height:" + quijiboHeight + "px'><input type='hidden' id='quijiboHidden' value='0' /></div>");  //Add another div to push down 
	
	var lastScrollTop = 0;
	$(window).scroll(function(event){
		var windowTop = $(this).scrollTop();
		var startPos = parseInt(quijibo.css('top').replace('px', ''));
		$('#quijiboHidden').val(windowTop);
		
		
		if (windowTop > lastScrollTop){
			onScrollDown(windowTop, lastScrollTop, quijibo, quijiboHeight, startPos);
		} else {
			onScrollUp(windowTop, lastScrollTop, quijibo, quijiboHeight, startPos);
		}
		lastScrollTop = windowTop;
	});
	
	
	var currentMousePos = { x: -1, y: -1 };
	$(document).mousemove(function(event) {
		var windowTop = parseInt($('#quijiboHidden').val());
		currentMousePos.y = event.pageY;
		var windowMousePosY = (currentMousePos.y - windowTop);
		var windowHeight = $(window).height();
		var mouseGesture = windowMousePosY / windowHeight;
		
		
		if (mouseGesture <= 0.35){
			//showQuijibo(windowTop, quijibo);
		} else {
				
		}
		
	});
	
	
	

	jQuery(document).foundation();
});
*/

	(function($) {
		$(document).foundation();
		$('#top').scrollUpMenu();
	})(jQuery);

</script>

	
</body>
</html>