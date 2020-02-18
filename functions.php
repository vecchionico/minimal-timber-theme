<?php
/**
 * Minimal Timber Theme
 * https://github.com/timber/starter-theme
 *
 * @package  minimal timber Theme  
 *
 */
$composer_autoload = __DIR__ . '/vendor/autoload.php';
if ( file_exists( $composer_autoload ) ) {
	require_once $composer_autoload;
	$timber = new Timber\Timber();
}   
