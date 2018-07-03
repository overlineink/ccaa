<?php
    class Galeria extends Controller {

        public function __construct($controller, $action) {
            parent::__construct($controller, $action);
        }

        public function indexAction() {
            // Set view title
            $this->view->setViewTitle('Galeria - CCAA');
            // Set view to be displayed
            $this->view->render('galeria/index');
        }
    }