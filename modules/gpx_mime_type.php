<?php
/*
Module Name: Allow GPX Files
Description: allow you to upload gpx files to wordpress. [Backend]
Author: Marvin Affeldt
Author URI: https://github.com/affeldt28
*/

/* security */
if (!class_exists('Toolbox')) {
	die();
}

/* Start coding from here on */
function gpx_mime_types($mimes) {
	// Add new MIME types here
	//$mimes['kml'] = 'application/vnd.google-earth.kml+xml';
	$mimes['gpx'] = 'gpx=application/gpx+xml';
	//$mimes['gpx'] = 'application/xml';
	//$mimes['gpx'] = 'text/xml';
	//$mimes['gpx'] = 'text/gpx';
	//$mimes['gpx'] = 'text/gpsxml';
	//$mimes['gpx'] = 'application/gpsxml';

	return $mimes;
}
add_filter('upload_mimes', 'gpx_mime_types', 1, 1);
add_filter('mime_types', 'gpx_mime_types');
