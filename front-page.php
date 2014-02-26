<?php get_template_part('head'); ?>

</head>

<body <?php body_class('antialiased'); ?> id="frontpage">

<div id="title" class="snap">
	<h1>CHOOSE YOUR SMALL BAR</h1>
</div>

<ul id="coastergrid">
	<li><div class="bar erskine-street snap">
		<a href="<?php echo get_site_url();?>/erskine-street" class="hover">
		<img src="<?php echo get_template_directory_uri(); ?>/img/coaster-red.png" alt=""/>
		<p class="color">ERSKINE STREET (CBD)</p></a>
		<p>48 ERSKINE STREET, </p>
		<p>SYDNEY, 2000</p>
		<?php get_template_part('socialicons');?>
	</div></li>
	<li><div class="bar crows-nest snap">
		<a href="<?php echo get_site_url();?>/crows-nest" class="hover">
		<img src="<?php echo get_template_directory_uri(); ?>/img/coaster-purple.png" alt=""/>
		<p class="color">CROWS NEST</p></a>
		<p>85 WILLOUGHBY ROAD, </p>
		<p>CROWS NEST, 2065</p>
		<?php get_template_part('socialicons');?>
	</div></li>
	<li><div class="bar kirribilli snap">
		<a href="<?php echo get_site_url();?>/kirribilli" class="hover">
		<img src="<?php echo get_template_directory_uri(); ?>/img/coaster-blue.png" alt=""/>
		<p class="color">KIRRIBILLI</p></a>
		<p>1-3 BROUGHTON STREET, </p>
		<p>KIRRIBILLI, 2061</p>
	
		<?php get_template_part('socialicons');?>
	</div></li>
</ul>
	
<?php wp_footer(); ?>

<script>
(function($) {
	jQuery(document).foundation();
})(jQuery);
</script>

</body>
</html>