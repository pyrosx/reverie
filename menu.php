<?php
global $url, $cat, $bar;	
?>

	<li><?php print_link($url.'/'); ?>Home</a></li>
<!-- 	<li><?php print_link($url.'/about-us/'); ?>About Us</a></li> -->
	<li><?php print_link($url.'/menu/'); ?>Menu</a></li>
	<li><?php print_link($url.'/space/'); ?>Space</a></li>
<?php
	if ($bar != "kirribilli") {
?>	
	<li><?php print_link($url.'/functions/'); ?>Functions</a></li>
<?php
	}
?>
	<li><?php print_link($url.'/location/'); ?>Location</a></li>
	<li><?php print_link($url.'/contact/'); ?>Contact</a></li>
	<li><?php print_link($cat.'whatson/'); ?>What's On</a></li>
<!-- 	<li><?php print_link($url.'/jobs/'); ?>Jobs</a></li> -->
<?php
	if ($bar == "crows-nest") {
?>
	<li><?php print_link($url.'/small-sounds/'); ?>Small Sounds</a></li>
<?php
	}
?>
	<li><?php print_link($cat.'press/'); ?>Press</a></li>
