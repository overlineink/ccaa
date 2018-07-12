<?php
    class Carrinho extends Controller {

        public function __construct($controller, $action) {
            parent::__construct($controller, $action);
            $this->load_model('_Carrinho');
        }

        public function indexAction() {
            // helpers
            $GLOBALS['validator'] = false;
            $GLOBALS['hidden'] = 'hidden';
            // get elements on cart
            if ($this->_CarrinhoModel->getItems()) {
                $GLOBALS['items'] = $_SESSION['shopify'];
                $GLOBALS['validator'] = true;
                $GLOBALS['hidden'] = '';
            }
            
            // checking cart status             
            $GLOBALS['component'] = $this->_CarrinhoModel->checkState($GLOBALS['validator']);
            
            if (isset($_GET['c'])) {
                if ($this->_CarrinhoModel->removeAllItems($_GET['c'])) {
                    Router::redirect('carrinho#component');
                } else {
                    echo "<script>console.log('Error, Server could not recognize this param.'); </script>";
                }
            }

            if (isset($_GET['id']) && !empty($_GET['id'])) {
                if ($this->_CarrinhoModel->removeById($_GET['id'])) {
                    Router::redirect('carrinho');
                }
            }

            // set view title
            $this->view->setViewTitle('Carrinho - CCAA');
            // set layout
            $this->view->setLayout('_shared');
            // set view to be displayed
            $this->view->render('carrinho/index');
        }
    }