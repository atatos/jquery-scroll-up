<?php
/*
Plugin Name: Scroll Up
Plugin URI: http://wp-snippets.com/plugins/scroll-up
Description: The plugin adds a small arrow to the bottom of the screen, and when the user clicks it the page automatically scrolls the user to the top of the screen.
Version: 1.0
Author: Filip Stefansson
Author URI: http://wp-snippets.com
License: GPL2
*/

/*  Copyright 2012  Filipstefansson  (email : filip.stefansson@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* ============================================================= */



class Scroll_Up {

  function __construct() {
    add_action( 'init', array( $this, 'load_script' ) ); 
    add_action( 'wp_footer', array( $this, 'add_script_to_footer' ) ); 
  }


  /*--------------------------------------------------------------------------------------
    *
    * load_script
    *
    * @author Filip Stefansson
    * @since 1.0
    * 
    *-------------------------------------------------------------------------------------*/

  function load_script() {
  	wp_enqueue_script(
		'jquery.scroll-up',
		plugins_url('/jquery-scroll-up/jquery.scroll-up.js', __FILE__),
		array('jquery')
	);
  }

  /*--------------------------------------------------------------------------------------
    *
    * add_script_to_footer
    *
    * @author Filip Stefansson
    * @since 1.0
    * 
    *-------------------------------------------------------------------------------------*/

  function add_script_to_footer() { 
  	echo '<script type="text/javascript">$.scrollUp({image_src: \'' . plugins_url('/scroll-up/jquery-scroll-up/arrow_up.png') . '\'});</script>';
  }

}

new Scroll_Up()


?>