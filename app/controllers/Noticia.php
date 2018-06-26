<?php
    class Noticia extends Controller {

        public function __construct($controller, $action) {
            parent:__construct($controller, $action);
        }

        # to display single notice
        public function indexAction() {
            // view to be displayed
            $this->view->render('noticia/index');
        }

        # to display a list of notices
        public function recentesAction() {
            // view to be displayed
            $this->view->render('noticia/recentes');
        }
    }