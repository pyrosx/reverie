</section></div><!-- Container End -->

<div id="locationbg">
	<div class="row" >
		<div class="large-5 columns" id="locationlabel">
			<h1><img src="<?php echo get_template_directory_uri(); ?>/img/icons/green/location.png"/></h1>
			<h1>Location</h1>
		</div>
		<div class="large-19 columns" id="locationdetails">
			<h1>SUITE 5, 168 KENTSTREET, SYDNEY NSW 2000</h1>
			<p>Observatory Tower Ground Floor Retail Courtyard</p> 
			<a href="location/">Click here for more information on how to find to us</a>
		</div>
	</div>
	<div class="row full-width">
		<div class="flex-video fvcustom">


<!-- google maps copy/paste -->

			<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Observatory+Tower+Medical+Centre,+5%2F168+Kent+Street,+Sydney+NSW&amp;aq=0&amp;oq=obs&amp;sll=-32.830735,147.451465&amp;sspn=12.136287,23.225098&amp;ie=UTF8&amp;hq=Observatory+Tower+Medical+Centre,&amp;hnear=5%2F168+Kent+St,+Millers+Point+New+South+Wales+2000&amp;ll=-33.862295,151.204024&amp;spn=0.006295,0.006295&amp;t=m&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.au/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Observatory+Tower+Medical+Centre,+5%2F168+Kent+Street,+Sydney+NSW&amp;aq=0&amp;oq=obs&amp;sll=-32.830735,147.451465&amp;sspn=12.136287,23.225098&amp;ie=UTF8&amp;hq=Observatory+Tower+Medical+Centre,&amp;hnear=5%2F168+Kent+St,+Millers+Point+New+South+Wales+2000&amp;ll=-33.862295,151.204024&amp;spn=0.006295,0.006295&amp;t=m" style="color:#0000FF;text-align:left">View Larger Map</a></small>

<!-- end google maps -->


		</div>
	</div>
</div>

<div class="row full-width">
	<?php dynamic_sidebar("Footer"); ?>
</div>

<div id="footerbg">
<footer class="row full-width" role="contentinfo">
	<div class="large-9 columns" id="footercontactform">
		<p><strong> Want to receive Health Alerts and reminders from us? <span class="yellow">Sign up here</span> </strong></p>
		<form>
			<input type="text" name="Name" id="name"/>
			<input type="email" name="email" id="email"/>
			<button type="submit">
				<img src="<?php echo get_template_directory_uri(); ?>/img/buttons/submit.png"/>
			</button>
		</form>
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
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo_otmc_med.png"/>
			</div>
			<div class="large-12 columns" id="footer_ehg">
				<img src="<?php echo get_template_directory_uri(); ?>/img/logo_ehg_med.png"/>
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

		$(window).load(function () {
			/* if in non-mobile mode */
			if ($('body').width() >= 768) {
				//var $height = $('#maincontent').height() > $('#sidebar').height() ? $('#maincontent').height() : $('#sidebar').height();
				var $height = $('#contentbg').outerHeight();
				
				$('#sidebar').css('height',$height);	
				$('#maincontent').css('height',$height);	
			}
		});
		// for the window resize
		$(window).resize(function() {
			// if in non-mobile mode
			$('#sidebar').css('height','auto');
			$('#maincontent').css('height','auto');			
			if ($('body').width() >= 768) {				
				//var $height = $('#maincontent').height() > $('#sidebar').height() ? $('#maincontent').height() : $('#sidebar').height();
				var $height = $('#contentbg').outerHeight();
				
				$('#sidebar').css('height',$height);	
				$('#maincontent').css('height',$height);
			}	
						
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
		
		$('#menu-item-28').click(function (e) {
			e.preventDefault();
			shrinkToLocation();
		});
		
		
	
	})(jQuery);
</script>
	
</body>
</html>