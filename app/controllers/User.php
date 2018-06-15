<?php
	class User extends Controller {

		public function __construct($controller, $action) {
			parent::__construct($controller, $action);
			$this->load_model('Users');
		}

		public function loginAction() {
			if (isset($_SESSION['token'])) {
				Router::redirect('home');
			}
			if (isset($_POST['passwrd'])) {
				$user = $this->UsersModel->signInWithToken($_POST['passwrd'], '12345');
			}
			// definindo a pagina a ser exibida
			$this->view->render('user/login');
		}
	}
