<?php
    class Users extends Model {
        public function __construct($user = '') {
			$table = 'users';
			parent::__construct($table);
		}

        public function inputCheck($input, $condition) {
            // Validate @input field
            if (!empty($input)) {
                if ($input == $condition) {
                    $_SESSION['token'] = 'T4NMWsk91B';
                    return Router::redirect('home');
                } else {
                    $alert = "alert('Field not match!');";
                    echo '<script type="text/javascript"> ' . $alert . ' </script>';
                }
            }
        }

        public function signInWithToken($token, $condition) {
            return $this->inputCheck($token, $condition);
        }
    }