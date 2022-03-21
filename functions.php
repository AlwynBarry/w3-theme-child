<?php
/**
 * w3 Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @author		Alwyn Barry
 * @copyright	2021
 * For use in	w3-theme
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version		1.0.0
 * 
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
 * General Public License as published by the Free Software Foundation; either version 2 of the License, 
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * 
 * @package w3_theme
 */
 

/**
 * Enqueue the parent theme stylesheet.
 */
add_action( 'wp_enqueue_scripts', 'wt_theme_child_enqueue_parent_styles' );
function wt_theme_child_enqueue_parent_styles() {
    $theme = wp_get_theme();
    wp_enqueue_style( 'wt-parent-style',
					  get_template_directory_uri() . '/style.css' , 
					  array( 'wt-blocks-style', 'wt-getwid-style', 'wt-w3css-style', 'w3m-topnav-style' ),
					  $theme->parent()->get('Version'),
					  'all'
    );
	/*  NO NEED TO ENQUEUE CHILD style.css - THE CHILD IS INCLUDED BY DEFAULT */
	/*  BUT - MAY NEED TO ORDER CHILD style.css SO IT IS LAST IN THE QUEUE    */
}

/*
 * Enqueue the child theme stylesheet for the block editor.
 */
add_action( 'enqueue_block_editor_assets', 'wt_theme_child_enqueue_block_editor_styles' );
function wt_theme_child_enqueue_block_editor_styles() {
    $theme = wp_get_theme();
    wp_enqueue_style( 'wt-theme-child-block-editor-style',
					  get_theme_file_uri( '/style-editor.css' ),
					  array(),
			          $theme->parent()->get('Version'),
			          'all'
	);
}


