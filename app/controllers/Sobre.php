<?php
    class Sobre extends Controller {

        public function __construct($controller, $action) {
            parent::__construct($controller, $action);
        }
        
        public function indexAction() {
            // View to be displayed
            $this->view->render('sobre/index');
        } 
    }