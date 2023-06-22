<?php 

    trait Brand{
        private $brandName;

        public function getBrandName() {

            if (is_null($this->brandName)) {
                throw new Exception("Marca non indicata");
            }
            return $this->brandName;
        }

        public function setBrandName($_brandName) {
            $this->brandName = $_brandName;
        }
    }

?>