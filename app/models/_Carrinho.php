<?php
    class _Carrinho extends Model {

        public function __construct() {
        }

        public function getItems() {
            include_once(ROOT . '/app/views/layouts/scripts/shopify.php');
            $_shopify = Shopify::getInstance();
            if ($_shopify->countItems() > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function checkState($target) {
            if ($target == true) {
                return 'hidden';
            } else {
                return '';
            }
        }

        public function removeAllItems($attr) {
            if (!empty($attr)) {
                if ($attr == "limpar") {
                    unset($_SESSION['shopify']);
                    return true;
                }
            }
            return false;
        }

        public function removeById($id) {
            if(isset($_GET["action"])) {  
                if($_GET["action"] == "delete") {  
                    foreach($_SESSION["shopify"] as $keys => $values) {  
                        if($values["item_id"] == $id) {  
                            unset($_SESSION["shopify"][$keys]);  
                            return true;
                        }  
                    }  
                }  
            }
            return false;
        }
    }