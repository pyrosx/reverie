<?php
/*
Author: Zhen Huang
URL: http://themefortress.com/

This place is much cleaner. Put your theme specific codes here,
anything else you may wan to use plugins to keep things tidy.

*/

/*
1. lib/clean.php
    - head cleanup
	- post and images related cleaning
*/
require_once('lib/clean.php'); // do all the cleaning and enqueue here
/*
2. lib/enqueue-sass.php or enqueue-css.php
    - enqueueing scripts & styles for Sass OR CSS
    - please use either Sass OR CSS, having two enabled will ruin your weekend
*/
require_once('lib/enqueue-sass.php'); // do all the cleaning and enqueue if you Sass to customize Reverie
//require_once('lib/enqueue-css.php'); // to use CSS for customization, uncomment this line and comment the above Sass line
/*
3. lib/foundation.php
	- add pagination
	- custom walker for top-bar and related
*/
require_once('lib/foundation.php'); // load Foundation specific functions like top-bar
/*

/**********************
Add theme supports
**********************/
function reverie_theme_support() {
	// Add language supports. Please note that Reverie does not include language files, not yet
	load_theme_textdomain('reverie', get_template_directory() . '/lang');
	
	// Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
	add_theme_support('post-thumbnails');
	// set_post_thumbnail_size(150, 150, false);
	
	// rss thingy
	add_theme_support('automatic-feed-links');
		
	// Add menu supports. http://codex.wordpress.org/Function_Reference/register_nav_menus
	add_theme_support('menus');
	register_nav_menus(array(
		'primary' => __('Primary Navigation', 'reverie')
	));
	

}
add_action('after_setup_theme', 'reverie_theme_support'); /* end Reverie theme support */

// create widget areas: sidebar, footer
$sidebars = array('Sidebar');
foreach ($sidebars as $sidebar) {
	register_sidebar(array('name'=> $sidebar,
		'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
		'after_widget' => '</div></article>',
		'before_title' => '<h6><strong>',
		'after_title' => '</strong></h6>'
	));
}

// return entry meta information for posts, used by multiple loops.
function reverie_entry_meta() {
	echo '<time class="updated" datetime="'. get_the_time('c') .'" pubdate>'. sprintf(__('Posted on %s at %s.', 'reverie'), get_the_time('l, F jS, Y'), get_the_time()) .'</time>';
	echo '<p class="byline author">'. __('Written by', 'reverie') .' <a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a></p>';
}
?>