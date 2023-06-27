<?php
/*
Module Name: Enabling Wide Images in the Gutenberg Editor
Description: Enabling Wide Images in the Gutenberg Editor
Author: John Regan
Author URI: https://johnregan3.wordpress.com
*/

/* Security check */
if (!class_exists('Toolbox')) {
	die();
}

/* Happy coding! */
function jr3_theme_setup() {
	add_theme_support('align-wide');
}

/* call function */
add_action('after_setup_theme', 'jr3_theme_setup');
