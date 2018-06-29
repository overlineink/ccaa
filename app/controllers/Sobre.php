<?php
    class Sobre extends Controller {

        public function __construct($controller, $action) {
            parent::__construct($controller, $action);
        }
        
        public function indexAction() {
            $GLOBALS['about'] = 'CCAA Construção Civil & Prestação de Serviços Comercio a Retalho e uma empresa de 
            direito angolano, atuando na área de construção civil nomeadamente na fabricação de estruturas metálicas
             como naves (galpão), quiosques fixas e móvel, carrinhos de venda de hambúrguer, alpendres, divisórias,
              alvenaria e acabamentos de obras.';
            // Set view title
            $this->view->setViewTitle('Quem Somos - CCAA');
            // Set Layout
            $this->view->setLayout('_shared');
            // View to be displayed
            $this->view->render('sobre/index');
        } 
    }