<?php
    class Noticias extends Controller {

        public function __construct($controller, $action) {
            parent::__construct($controller, $action);
            $this->load_model('Noticiass');
        }

        # display news list
        public function indexAction() {
            // Set layout
            $this->view->setLayout('_shared');
            // Set view title
            $this->view->setViewTitle('Noticias - CCAA');
            // View to be displayed
            $this->view->render('noticias/index');
        }

        public function postagemAction() {
            # Defining page title
                $_q = $this->NoticiassModel->sanitizeUri($_SERVER['REQUEST_URI']);
                $this->view->setViewTitle($_q);
                $GLOBALS['q'] = $_q;
            // Set page layout
            $this->view->setLayout('_shared');
            // View to be displayed
            $this->view->render('noticias/postagem');
        }
    }