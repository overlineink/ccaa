<?php
    class Noticias extends Controller {

        public function __construct($controller, $action) {
            parent::__construct($controller, $action);
        }

        # display news list
        public function indexAction() {
            // Set layout
            $this->view->setLayout('_shared');
            // Set view title
            $this->view->setViewTitle('Noticias - CCAA');
            // view to be displayed
            $this->view->render('noticias/index');
        }
    }