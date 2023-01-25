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
?>