<?php
    class Contacto extends Controller {

        public function __construct($controller, $action) {
            parent::__construct($controller, $action);
            $this->load_model('Contacts');
        }

        public function indexAction() {
            # Send contact form message
            define('DEFAULT_SUBJECT', 'Mensagem de Contacto');
            if (isset($_POST) && !empty($_POST)) {
                if ($sender = $this->ContactsModel->sendMail($_POST['name'], $_POST['email'], DEFAULT_SUBJECT, $_POST['message'])) {
                    echo "<script> alert('Olá ". $_POST['name'] ."! Sua mensagem foi enviada com sucesso. :)'); </script>";
                } else {
                    echo "<script> alert(':( Lamentamos ". $_POST['name'] ."! Sua mensagem não foi enviada. Porfavor tente novamente ou reporte o erro.'); </script>";
                }
            } else {
                echo "<script> console.log('POST request didn`t exists!'); </script>";
            }
            // Set layout
            $this->view->setLayout('_shared');

            // Set View Title
            $this->view->setViewTitle('Contactos - CCAA');

            // Set view to be displayed
            $this->view->render('contacto/index');
        }
    }