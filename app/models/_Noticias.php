<?php
    class _Noticias extends Model {
        
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
    }