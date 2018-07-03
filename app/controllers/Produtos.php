<?php
    class Produtos extends Controller {

        public function __construct($controller, $action) {
            parent::__construct($controller, $action);
        }

        public function roloutesAction() {
            // set view title
            $this->view->setViewTitle('Roloutes - Produtos');
            // set layout
            $this->view->setLayout('_shared');
            // set view to be displayed
            $this->view->render('produtos/roloutes');
        }
    }