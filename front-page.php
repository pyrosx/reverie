<?php get_template_part('head'); ?>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive-nav.css">
	<script src="<?php echo get_template_directory_uri(); ?>/js/responsive-nav.min.js"></script>
	
</head>

<body <?php body_class('antialiased'); ?> id="frontpage">

<div id="title">
	<h1>CHOOSE YOUR SMALL BAR</h1>
</div>


<ul class="medium-block-grid-3 hide-for-small-only" id="coastergrid">
	<?php get_template_part('coasters');?>
</ul>
	
<ul class="hide-for-medium-up" id="coasterslider" data-orbit data-options="
	
	timer_speed: 1500;
	animation_speed: 500;
	navigation_arrows: true;
	slide_number: false;
	timer: true;
	bullets: false;
	resume_on_mouseout: true;
	
">
	<?php get_template_part('coasters');?>
</ul>
	
<?php wp_footer(); ?>

<script>
	(function($) {
		jQuery(document).foundation();
	})(jQuery);
</script>

</body>
</html>