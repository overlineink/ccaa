<?php
	// Set constants helpers
	define ('DS', DIRECTORY_SEPARATOR);
	define ('ROOT', dirname(__FILE__));

	// Load Helpers and Functions
	require_once(ROOT . DS . 'config' . DS . 'config.php');
	require_once(ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'functions.php');

	// Get classes and load them
	function autoload($className) {
		if (file_exists(ROOT . DS . 'core' . DS . $className . '.php')) {
			require_once(ROOT . DS . 'core' . DS . $className . '.php');
		} elseif (ROOT . DS . 'app' . DS . 'controllers' . DS . $className . '.php') {
			require_once(ROOT . DS . 'app' . DS . 'controllers' . DS . $className . '.php');
		} elseif (ROOT . DS . 'app' . DS . 'models' . DS . $className . '.php') {
			require_once(ROOT . DS . 'app' . DS . 'models' . DS . $className . '.php');
		} else {
			echo 'Error autoloading **'.$className.'** class.';
		}
	}
	
	// Autoload implementation
	spl_autoload_register('autoload');
	session_start();

	// Server Info
	$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];

	// Routing request
	Router::route($url);
