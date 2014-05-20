<?php
	global $bar;
	$fb = "";
	$twit = "http://twitter.com/SmallBarSydney";
	$inst = "http://instagram.com/smallbarsydney";
	switch($bar) {
		case "erskine-street" :
			$fb = "http://www.facebook.com/ErskineStreetSmallBar";
			break;
		case "crows-nest" :
			$fb = "http://www.facebook.com/CrowsNestSmallBar";
			break;
		case "kirribilli" :
			$fb = "http://www.facebook.com/SmallBarKitchen";
			break;
	}

?>

<ul class="small-block-grid-3 socialicons">
	<li><a href="<?php echo $fb;?>"><div class="circle primary-background buzz-out"><i class="fa fa-facebook"></i> </div></a></li>
	<li><a href="<?php echo $twit;?>"><div class="circle primary-background buzz-out"><i class="fa fa-twitter"></i> </div></a></li>
	<li><a href="<?php echo $inst;?>"><div class="circle primary-background buzz-out"><i class="fa fa-instagram"></i> </div></a></li>
</ul>