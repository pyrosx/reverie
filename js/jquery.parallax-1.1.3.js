/*
Plugin: jQuery Parallax
Version 1.1.3
Author: Ian Lunn
Twitter: @IanLunn
Author URL: http://www.ianlunn.co.uk/
Plugin URL: http://www.ianlunn.co.uk/plugins/jquery-parallax/

Dual licensed under the MIT and GPL licenses:
http://www.opensource.org/licenses/mit-license.php
http://www.gnu.org/licenses/gpl.html
*/

(function( $ ){
	var $window = $(window);
	var windowHeight = $window.height();

	$window.resize(function () {
		windowHeight = $window.height();
	});

	$.fn.parallax = function(xpos, speedFactor, outerHeight, yoffset) {
	
		// only apply parallax things if "no-touch" class is present in html tag
// 		if ($('html').hasClass('no-touch'))
// 			return;

		if(Modernizr.touch) {
			return;
		}			
	
		var $this = $(this);
		var getHeight;
		var firstTop;
		var paddingTop = 0;
		
		//get the starting position of each element to have parallax applied to it		
		$this.each(function(){
		    firstTop = $this.offset().top;
		});

		if (outerHeight) {
			getHeight = function(jqo) {
				return jqo.outerHeight(true);
			};
		} else {
			getHeight = function(jqo) {
				return jqo.height();
			};
		}
			
		// setup defaults if arguments aren't specified
		if (arguments.length < 1 || xpos === null) xpos = "50%";
		if (arguments.length < 2 || speedFactor === null) speedFactor = 0.1;
		if (arguments.length < 3 || outerHeight === null) outerHeight = true;
		if (arguments.length < 4 || yoffset === null) yoffset = 0;
		
		// function to be called whenever the window is scrolled or resized
		function update(){
			var pos = $window.scrollTop();				

			$this.each(function(){
				var $element = $(this);
				var top = $element.offset().top;
				var height = getHeight($element);

				// Check if totally above or totally below viewport
				if (top + height < pos || top > pos + windowHeight) {
					return;
				}
				
				// not sure why this is necessary, but stops the bars appearing at the top & bottom of the background image...?
				// but only for tall divs - the thin ones work fine? Weird
				correction = 0;
// 				if (height > 500 )
// 					correction = (firstTop*0.05);
				
				$this.css('backgroundPosition', xpos + " " + Math.round(((firstTop - pos) * speedFactor)-correction-yoffset) + "px");
				return pos;
			});
		}		

		$window.bind('scroll', update).resize(update);
		update();
	};
})(jQuery);
