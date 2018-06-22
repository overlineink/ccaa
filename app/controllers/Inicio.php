<?php
	/**
	 * @author Jorge Dacosta
	*/
	class Inicio extends Controller {

		// Model accessor
		//private $_modelInstance = new $this->IniciomModel;
		
		public function __construct($controller, $action) {
			parent::__construct($controller, $action);
			//$this->load_model('Iniciom');
		}

		public function indexAction() {
			// Set view title
			$this->view->setViewTitle('Página Inicial - CCAA');
			// Set view to be displayed
			$this->view->render('inicio/index');
		}
	}
