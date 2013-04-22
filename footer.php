</section></div><!-- Container End -->

<div id="locationbg">
	<div id="locationtarget"></div>
	<div class="row" >
		<div class="large-5 columns" id="locationlabel">
			<h1><img src="<?php echo get_template_directory_uri(); ?>/img/icons/green/location.png"/></h1>
			<h1>Location</h1>
		</div>
		<div class="large-19 columns" id="locationdetails">
			<h1>SUITE 5, 168 KENT STREET, SYDNEY NSW 2000</h1>
			<p>Observatory Tower Ground Floor Retail Courtyard</p> 
			<h3><a href="location/">Click here for more detailed information on how to find to us</a></h3>
		</div>
	</div>
	<div class="row full-width">
		<div class="flex-video fvcustom">
<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Observatory+Tower+Medical+Centre,+5%2F168+Kent+Street,+Sydney+NSW&amp;aq=0&amp;oq=obs&amp;sll=-32.830735,147.451465&amp;sspn=12.136287,23.203125&amp;ie=UTF8&amp;hq=Observatory+Tower+Medical+Centre,&amp;hnear=5%2F168+Kent+St,+Millers+Point+New+South+Wales+2000&amp;ll=-33.860295,151.204024&amp;spn=0.006295,0.006295&amp;t=m&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Observatory+Tower+Medical+Centre,+5%2F168+Kent+Street,+Sydney+NSW&amp;aq=0&amp;oq=obs&amp;sll=-32.830735,147.451465&amp;sspn=12.136287,23.203125&amp;ie=UTF8&amp;hq=Observatory+Tower+Medical+Centre,&amp;hnear=5%2F168+Kent+St,+Millers+Point+New+South+Wales+2000&amp;ll=-33.862295,151.204024&amp;spn=0.006295,0.006295&amp;t=m" style="color:#0000FF;text-align:left">View Larger Map</a></small>
		</div>
	</div>
</div>

<div id="footerbg">
<footer class="row full-width" role="contentinfo">
	<div class="large-9 columns" id="footercontactform">
<!--	
		<p><strong> Want to receive Health Alerts and reminders from us? <span class="yellow">Sign up here</span> </strong></p>
		<form>
			<input type="text" name="Name" id="name"/>
			<input type="email" name="email" id="email"/>
			<button type="submit">
				<img src="<?php echo get_template_directory_uri(); ?>/img/buttons/submit.png"/>
			</button>
		</form>
-->	
	<p><strong> Want to receive Health Alerts and reminders from us? <span class="yellow">Sign up here</span> </strong></p>
	<?php dynamic_sidebar("Footer"); ?>
	</div>
	
	
	<div class="large-5 large-offset-1 columns" id="footerinfo">
		<p><a href="privacy">Privacy Policy</a> </p>   
		<p>&copy; Copyright 2013 Salutay Pty Ltd </p>
		<p>ABN 75 083 634 217</p>
		<p><a href="http://www.redro.com.au/">Created by Redro Design</a></p>
	</div>
	<div class="large-9 columns">
		<div class="row">
			<div class="large-12 columns" id="footer_otmc">
				<a href="/dev/otmc"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_otmc_med.png"/></a>
			</div>
			<div class="large-12 columns" id="footer_ehg">
				<a href="/dev/otmc/under-construction/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_ehg_med.png"/></a>
			</div>
		</div>
	</div>
</footer>
</div>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
			 	
		// set the maincontent and sidebar heights to that of the main content bg height
		var setDivHeights = function() {
			// reset stuff that we might have already fiddled with...
			$('#sidebar').css('height','auto');
			$('#maincontent').css('height','auto');	
			$('#towercontainer').css('padding-top',0);
			if ($('body').width() >= 768) {				
				
			
				var height = $('#contentbg').outerHeight();
				
				$('#sidebar').css('height',height);	
				$('#maincontent').css('height',height);
				
				if ($('#towercontainer').hasClass("bottom")) {
					// move #towercontainer to the bottom
					var towerpad = $('#sidebar').outerHeight() - $('#sidebarcontent').outerHeight() - $('#towercontainer').outerHeight();
				
					$('#towercontainer').css('padding-top',towerpad);
				}
			}	
		};
		
		var internalLabels = function(target) {
			var defaultlabel = "data-deftext";
			$(target).each(function(i, o) {
				//alert($(o).attr('id'));
				var label = $("label[for='"+$(o).attr('id')+"']");
				//alert(label.text());
				// replace removes any pesky *'s
				$(o).attr(defaultlabel,label.text().replace(/\*/g, ''));
				
			});
			
			$(target).change(function() {
				if ($(this).val() == "") {
					$(this).val($(this).attr(defaultlabel));
				}
			});			
			$(target).change(); // trigger manually		
			$(target).click(function(){
				// Select field contents
				this.select();
			});	
		};
		
		// on first load
		$(window).load(function () {
			setDivHeights();
			internalLabels(":text");
		});
		// and when the window resizes
		$(window).resize(function() {
					
			setDivHeights();
		});
		
		// click handling for location link
		var shrinkToLocation = function() { 
			if ($('#locationdetails').hasClass('large-19')) {
				$('#locationdetails').removeClass('large-19').addClass('large-24');
			} else {
				$('#locationdetails').removeClass('large-24').addClass('large-19');
			}
			$('#locationlabel').toggle();			
			$('#contentbg').toggle("slow");
		};
		
		$('#li-Location').click(function (e) {
			e.preventDefault();
			shrinkToLocation();
		});
		
		
	
	})(jQuery);
</script>
	
</body>
</html>