<?php
/**
 * The main sidebar template file
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Storytime
 */
 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Check if Sidebar has widgets.
if (   ! is_active_sidebar( 'left-sidebar'  )
	&& ! is_active_sidebar( 'right-sidebar' ) 
	&& ! is_active_sidebar( 'blog-sidebar' )
	)
	return;

	
// Use the sidebar that relates to the page type being viewed
if ( is_page_template( 'templates/left-column.php' ) ) {
		
		echo '<aside id="left-sidebar" class="sidebar widget-area clearfix">';	
			dynamic_sidebar( 'left-sidebar' );		
		echo '</aside>';	

	} elseif ( is_page_template( 'templates/right-column.php' ) ) {
		
		echo '<aside id="right-sidebar" class="sidebar widget-area clearfix">';  
			dynamic_sidebar( 'right-sidebar' );
		echo '</aside>';	

	// Skip to the blog sidebar for blog and archives if we are not on a page template
	} else {
		
		echo '<aside id="blog-sidebar" class="sidebar widget-area clearfix">';	
			dynamic_sidebar( 'blog-sidebar' );		
		echo '</aside>';	
		
	} 
	
?>
