<?php
    class _Produtos extends Model {
        
        public function __construct($table = '') {
            # uncomment this line parent::__construct($table);
        }

        public function sanitizeUri($dirty) {
            // Check SERVER URI REQUEST
            if (isset($_SERVER) && !empty($_SERVER)) {
                // Get URI & split URI by [/]
                $_paramsUri = explode('/', $dirty);
                // Clean URI
                $_identify = str_replace('%20', ' ', $_paramsUri[5]); // *Note: if you deploy this project on web server you must need change [$_paramsUri] value to '4' 
                // Return title
                return urldecode($_identify);;
            }
            return 'Something wrong! Please check your code.';
        }

        public function addToCart($_item, $_id, $_name) {
            // requiring Shopify API
            include_once(ROOT . '/app/views/layouts/scripts/shopify.php');
            $_shopify = Shopify::getInstance();
            
            if ($_shopify->addItem($_item, $_id, $_name)) {
                unset($_POST);
                echo "<script> alert('{$_name} adicionado ao carrinho!'); </script>";
            } 
        }
    }