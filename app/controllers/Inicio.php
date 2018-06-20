<?php
	class Inicio extends Controller {

		public function __construct($controller, $action) {
			parent::__construct($controller, $action);
		}

		public function indexAction() {
			// Set view title
			$this->view->setViewTitle('CCAA | Página Inicial');
			// Set view to be displayed
			$this->view->render('inicio/index');
		}
	}
