<?php
/*
Plugin Name: WPimgLiquid
Plugin URI: https://github.com/yukioshibata/WPimgLiquid
Description: jQuery plugin to resize images to fit in a container.
Version: 0.1
Author: Yukio Shibata
Author URI: https://github.com/yukioshibata
License: GPL2
*/
?><?php
/*  Copyright 2016 Yukio Shibata (email : yukio_s@exe-j.com)
 
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
?><?php

function my_imgLiquid() {
    wp_enqueue_script( 'imgLiquid', plugins_url( 'js/imgLiquid-min.js', __FILE__ ) , array('jquery'), false, true );
    wp_enqueue_script( 'WPimgLiquid', plugins_url( 'js/WPimgLiquid.js', __FILE__ ) , array('imgLiquid'), false, true );
}
add_action( 'wp_enqueue_scripts', 'my_imgLiquid');
