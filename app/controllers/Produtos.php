<?php
    class Produtos extends Controller {

        
        public function __construct($controller, $action) {
            parent::__construct($controller, $action);
            $this->load_model('_Produtos');
        }
        
        public function roloutesAction() {
            // requiring Shopify API
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
                $this->_ProdutosModel->addToCart($_item, $_POST['itemId'], $_POST['name']);
                
            }
            // set view title
            $this->view->setViewTitle('Roloutes - Produtos');
            // set layout
            $this->view->setLayout('_shared');
            // set view to be displayed
            $this->view->render('produtos/roloutes');
        }

        public function detalhesAction() {
            # addToCart(params, id, name) :
            if (isset($_POST) && !empty($_POST)) {
                $_qtd = ($_POST['qtd'] < 1) ? 1 : $_POST['qtd'];
                if (!is_numeric($_qtd)) {
                    echo "<script> alert('Oops! Apenas numéricos para definir a quantidade de item.'); </script>";
                } else {
                    $_item = array (
                        "item_id" => $_POST['itemId'],
                        "name" => $_POST['name'],
                        "price" => $_POST['price'],
                        "url" => $_POST['imagePath'],
                        "qtd" => $_qtd
                    );
                    $this->_ProdutosModel->addToCart($_item, $_POST['itemId'], $_POST['name']);
                }
            }
            # end
            // set layout
            $this->view->setLayout('_shared');
            // sanitize URI and getting title param
            $this->view->setViewTitle($this->_ProdutosModel->sanitizeUri($_SERVER['REQUEST_URI']));
            $GLOBALS['q'] = $this->_ProdutosModel->sanitizeUri($_SERVER['REQUEST_URI']);
            // set view to be displayed
            $this->view->render('produtos/detalhes');
        }
    }