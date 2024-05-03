<?php
	
	session_start( );
	require ('vendor/autoload.php');

	define('INCLUDE_PATH_STATIC', 'http://localhost/redesocialdevweb20_/FreteMagia/Views/pages');
	define('INCLUDE_PATH', 'http://localhost/redesocialdevweb20_/');

	$app = new FreteMagia\Application( );
	$app->run( );

?>