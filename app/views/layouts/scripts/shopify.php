<?php
    class Shopify {
        
        # helpers 
        protected $_countItems = '';
        # static helper
		private static $_instance;
        
        public function __construct( ) {
            # code here...
        }

        /**
         * Singleton pattern thats makes accessible all class elements without an instance
         * @global instanceof {Shopify}
         */
        public static function getInstance() {
			if (!isset(self::$_instance)) {
				self::$_instance = new Shopify();
			}
			return self::$_instance;
		}
    
        /**
         * remove the target item from SESSION array
         * @param {INTEGER} id
         */
        public function removeItem($id) {
            if (isset($_SESSION['shopify']) && !empty($_SESSION['shopify'])) {
                // start action
                foreach ($_SESSION['shopify'] as $keys => $values) {
                    if ($keys['itemId'] == $id) {
                        $_title = $values['title'];
                        unset($_SESSION['shopify'][$values]);
                        echo '<script>alert(' . $_title .'" Removido!")</script>';  
                        return true;
                    }
                }
            }
            return false;
        }
        
        /**
         * returns a number of elements stored of items
         */
        public function countItems() {
            if (isset($_SESSION['shopping_cart'])) {
                // Counting items
                if (!empty($_SESSION['shopping_cart'])) {
                    $this->_countItems = count($_SESSION['shopping_cart'], COUNT_NORMAL);
                } else {
                    $this->_countItems = 0;
                }
            }
            return $this->_countItems;
        }

        /**
         * returns value from sume of elements temporarily
         * stored on SESSION memory
         */
        public function getTotal() {
            // helpers
            $_total = null;
            $_v = 0;
            // check session
            if (isset($_SESSION['shopping_cart'])) {
                for ($x = 0; $x < count($_SESSION['shopping_cart']); $x++) {
                    $_v = $_v + ($_SESSION['shopping_cart'][$x]['price'] * $_SESSION['shopping_cart'][$x]['qtd']);
                    $_total = number_format($_v, 2);
                }
            } else {
                $_total = 0; 
            }
            return $_total;
        }

    }