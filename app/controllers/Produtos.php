<?php
    class Produtos extends Controller {

        
        public function __construct($controller, $action) {
            parent::__construct($controller, $action);
            $this->load_model('_Produtos');
        }
        
        public function roloutesAction() {
            // requiring Shopify framework
            include_once(ROOT . '/app/views/layouts/scripts/shopify.php');
            $_shopify = Shopify::getInstance();
            if (isset($_POST) && !empty($_POST)) {
                $_item = array (
                    "item_id" => $_POST['itemId'],
                    "name" => $_POST['name'],
                    "price" => $_POST['price'],
                    "url" => $_POST['imagePath'],
                    "qtd" => $_POST['qtd']
                );
                $_name = $_POST['name'];
                if ($_shopify->addItem($_item, $_POST['itemId'])) {
                    echo "<script> alert('{$_name} adicionado ao carrinho!'); </script>";
                } 
                
                //dnd($_item);
            }
            // set view title
            $this->view->setViewTitle('Roloutes - Produtos');
            // set layout
            $this->view->setLayout('_shared');
            // set view to be displayed
            $this->view->render('produtos/roloutes');
        }

        public function detalhesAction() {
            // set layout
            $this->view->setLayout('_shared');
            // sanitize URI and getting title param
            $this->view->setViewTitle($this->_ProdutosModel->sanitizeUri($_SERVER['REQUEST_URI']));
            // set view to be displayed
            $this->view->render('produtos/detalhes');
        }
    }