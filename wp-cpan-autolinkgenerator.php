<?php
/*
Plugin Name: CPAN Auto Link Generator
Plugin URI: http://www.buglet.de/
Description: Replace every mentioned CPAN module by a link to that module on CPAN.
Version: 1.0
Author: Buglet UG (haftungsbeschr&auml;nkt) Author URI: http://www.buglet.de/
License: GPL or newer
Stable tag: 1.2
*/

function cpanlinks($content) {

	return  preg_replace('/\b(\w+(?:\:\:\w+)+)\b/i',
		'<a href="http://search.cpan.org/perldoc?$1" title="CPAN $1" 
target="_blank">$1</a>',
		$content);
}

add_filter('the_content', 'cpanlinks');
?>
