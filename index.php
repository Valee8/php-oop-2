<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP2</title>
</head>
<body>

    <?php

        class Prodotto {

            public $nome;
            public $categoria;
            public $prezzo;

            public function __construct($nome, $categoria, $prezzo) {
                $this -> nome = $nome;
                $this -> categoria = $categoria;
                $this -> prezzo = $prezzo;
            }

            public function getProduct() {
                return "<div class='card'>Nome prodotto: " . $this -> nome . 
                "</div>" . "<div class='card'>Categoria: " . $this -> categoria .
                "</div>" . "<div class='card'>Prezzo: " . $this -> prezzo . "</div>";
            }

        }

        $prodotti = [
            new Prodotto("Cibo", "Cane", 10.50),
            new Prodotto("Lettiera", "Gatto", 8.90),
            new Prodotto("Cuccia", "Cane", 20)
        ];

        echo "<div class='cards'>";

        foreach($prodotti as $prodotto) {
            echo $prodotto -> getProduct();
        }

        echo "</div>";
    ?>
    
</body>
</html>