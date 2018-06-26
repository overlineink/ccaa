<?php
	class Router {

		public static function route($url) {

			// controller
			$controller = (isset($url[0]) && $url[0] != '') ? ucwords($url[0]) : DEFAULT_CONTROLLER;
			$controller_name = $controller;
			array_shift($url);

			// action
			$action = (isset($url[0]) && $url[0] != '') ? $url[0] . 'Action': 'indexAction';
			$action_name = $controller;
			array_shift($url);

			$queryParams = $url;

			$dispatch = new $controller($controller_name, $action);

			if (method_exists($controller, $action)) {
				call_user_func_array([$dispatch, $action], $queryParams);
			} else {
				die('Este método não existe no \"' . $controller_name . '\"');
			}
		}

		public static function redirect($location) {
			if (!headers_sent()) {
				header('Location: '.PROOT.$location);
				exit();
			} else {
				echo '<script type="text/javascript">';
				echo 'window.location.href="'.PROOT.$location.'";';
				echo '</script>';
				echo '<noscript>';
				echo '<meta http-equiv="refresh" content="0;url='.$location.'" />';
				echo '</noscript>';
				exit();
			}
		}

	}
