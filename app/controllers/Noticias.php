<?php
    class Noticias extends Controller {

        public function __construct($controller, $action) {
            parent::__construct($controller, $action);
        }

        # display news list
        public function indexAction() {
            // view to be displayed
            $this->view->render('noticias/index');
        }
    }