<?php
	class Controller extends Application {

		protected $_controller, $_action;
		public $view;

		public function __construct($controller, $action) {
			parent::__construct($controller, $action);
			$this->_controller = $controller;
			$this->_action = $action;
			// single instance of View class
			$this->view = new View();
		}

		protected function load_model($model) {
			// check class
			if (file_exists(ROOT . DS . 'app' . DS . 'models' . DS . $model . '.php')) {
				require_once(ROOT . DS . 'app' . DS . 'models' . DS . $model . '.php');
				if (class_exists($model)) {
					$this->{$model.'Model'} = new $model(strtolower($model));
				}
			}
		}
	}
