<?php
    /**
     * @method Carousel($limiter); Services($limiter); Clients($limiter);
     */
    class Iniciom extends Model {
        
        public function __construct($inicial = '') {
            $_table = '';
            parent::__construct($this->_table);
        }

        public function Carousel($limiter) {}
        public function Services($limiter) {}
        public function Clients($limiter) {}
    }