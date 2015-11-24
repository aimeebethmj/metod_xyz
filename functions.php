<?php

// This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );

// a handy function to "console.log" PHP data
function consoleLog($data, $function) 
{
	if (is_array($data) || is_object($data)) $data = json_encode($data);
	else if (is_string($data)) $data = '"' . $data . '"';

	if (!$function) $function = 'log';
	
	echo('<script>console.' . $function . '(' . $data . ');</script>');
}

// let's give a proper name to the function to print the active theme's folder
function theActiveThemeDirectory()
{
	$directory = get_template_directory_uri() . '/';
	print $directory;
}

function getBowerDirectory()
{
	$directory = get_template_directory_uri() . '/bower_components/';
	// if (!fileExists($directory)) consoleLog("You seem to be missing the 'bower_components' folder", 'error');
	return $directory;
}

function theBowerDirectory($componentPath)
{
	$directory = getBowerDirectory() . $componentPath;
	// if (!fileExists($directory)) consoleLog("You seem to be missing the '" . subPath . "' folder", 'error');
	return $directory;
}

function theHTML5BoilerplateDirectory()
{
	print theBowerDirectory('html5-boilerplate/dist/');
}

function theSkeletonDirectory()
{
	print theBowerDirectory('skeleton-css/');
}

function theJQueryDirectory()
{
	print theBowerDirectory('jquery/dist/');
}

function theSlickDirectory()
{
	print theBowerDirectory('slick-carousel/slick/');
}

// from http://php.net/manual/en/function.file-exists.php#103436
function fileExists($path)
{
    return (@fopen($path, 'r') == true);
}

?>