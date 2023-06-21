<?php 

    class Food extends Product {
        public $type;

        public function __construct($_name, $_price, $_img, $_category, $_type) {

            parent::__construct($_name, $_price, $_img, $_category);


            $this->type = $_type;
        }
    }

?>