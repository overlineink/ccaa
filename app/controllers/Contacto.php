<?php
    class Contacto extends Controller {

        public function __construct($controller, $action) {
            parent::__construct($controller, $action);
        }

        public function indexAction() {
            // Set layout
            $this->view->setLayout('_shared');

            // Set View Title
            $this->view->setViewTitle('Contactos - CCAA');

            // Set view to be displayed
            $this->view->render('contacto/index');
        }
    }