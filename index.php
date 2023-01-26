<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP - OOP2</title>
</head>
<body>

    <?php

        class Product {

            private $name;
            private $category;
            private $price;

            public function __construct($name, $category, $price) {
                $this -> setName($name);
                $this -> setCategory($category);
                $this -> setPrice($price);
            }

            public function getProduct() {
                return "<div class='card-info'>Nome prodotto: " . $this -> getName() . "</div>" . 
                    "<div class='card-info'>Categoria: " . $this -> getCategory() . "</div>" . 
                    "<div class='card-info'>Prezzo: " . $this -> getPrice() . "&euro;</div>";
            }

            public function setName($name) {
                $this -> name = $name;
            }

            public function getName() {
                return $this -> name;
            }

            public function setCategory($category) {
                $this -> category = $category;
            }

            public function getCategory() {
                return $this -> category;
            }

            public function setPrice($price) {
                $this -> price = $price;
            }

            public function getPrice() {
                return $this -> price;
            }

        }

        class Food extends Product {

            private $expirationDate;

            public function __construct($name, $category, $price, $expirationDate) {
                parent :: __construct($name, $category, $price);

                $this -> setExpiration($expirationDate);
            }

            public function setExpiration($expirationDate) {
                $this -> expirationDate = $expirationDate;
            }

            public function getExpiration() {
                return "<div class='card-info'>Data scadenza: " . $this -> expirationDate . "</div>";
            }

            public function getProduct() {
                return parent :: getProduct() . $this -> getExpiration();
            }
            
        }

        class Toy extends Product {

            public function __construct($name, $category, $price) {
                parent :: __construct($name, $category, $price);
            }

            public function getProduct() {
                return parent :: getProduct();
            }
            
        }

        class Bed extends Product {

            public function __construct($name, $category, $price) {
                parent :: __construct($name, $category, $price);
            }

            public function getProduct() {
                return parent :: getProduct();
            }
            
        }

        $toy = new Toy("Gomitolo", "Gatto", 8.90);
        $food = new Food("Croccantini", "Cane", 10.50, "10-02-2023");
        $bed = new Bed("Cuccia", "Cane", 10.50, 20);

        $products = [
            $toy, $food, $bed
        ];

    
        echo "<div class='cards'>";

        foreach($products as $product) {
            echo "<div class='card'>" . $product -> getProduct() . "</div>";
        }

        echo "</div>";

    ?>
    
</body>
</html>