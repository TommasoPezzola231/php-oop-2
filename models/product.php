<?php 

    require __DIR__ . "/../traits/Brand.php";
    class Product {

        use Brand;

        public $name;
        public $price;
        public $img;
        public $category;

        public function __construct($_name, $_price, $_img, Category $_category) {
            $this->name = $_name;
            $this->price = $_price;
            $this->img = $_img;
            $this->category = $_category;

            if (!$_category instanceof Category) {
                die("La categoria deve appartenere alla classe Category");
            }
        }
    }

?>