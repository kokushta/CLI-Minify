<?php
/**
* PHP Minify Command Line Tool
*
* @author Baki Goxhaj <banago@gmail.com>
* @version 1.0
*
* @copyright Copyright (c) 2013, Baki Goxhaj. All rights reserved.
* @license MIT License
*/

require_once 'lib/Minify.php';
require_once 'lib/CSS.php';
require_once 'lib/JS.php';
require_once 'lib/Exception.php';

use MatthiasMullie\Minify;

$ini_data = parse_ini_file('minify.ini', true);

if( isset( $ini_data['CSS'] ) ) :

	$css_target = $ini_data['CSS']['target'];
	
	$min_css = new Minify\CSS();

	foreach( $ini_data['CSS']['source'] as $file ) 
		$min_css->add( $file );
	
	$min_css->minify($css_target, Minify\CSS::ALL);
	
	echo 'CSS minification finished.' . PHP_EOL;

endif;

if( isset( $ini_data['JS'] ) ) :

	$js_target = $ini_data['JS']['target'];
	
	$min_js = new Minify\JS();
	
	foreach( $ini_data['JS']['source'] as $file ) 
		$min_css->add( $file );
	
	$min_js->minify($js_target, Minify\JS::ALL);
	
	echo 'JS minification finished.' . PHP_EOL;

endif;