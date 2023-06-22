<?php 

    trait Brand{
        private $brandName;

        public function getBrandName() {
            return $this->brandName;
        }

        public function setBrandName($_brandName) {
            $this->brandName = $_brandName;
        }
    }

?>