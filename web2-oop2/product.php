<?php

    class Product
    {
        //deklarasi variabel
        //private String $name;
        //private int $price;

        //Agar bisa diakses maka perlu diubah untuk visibility pada variabel name dan price pada class Product
        protected String $name;
        protected int $price; 

        //deklarasi konstruktor
        public function __construct(string $name, int $price)
        {
            $this->name = $name;
            $this->price = $price;
        }

        // digunakan untuk mengatasi error pada objekproduct saat menampilkan
        function getName(): string
        {
            return $this->name;
        }
        
        // digunakan untuk mengatasi error pada objekproduct saat menampilkan

        function getPrice(): int
        {
            return $this->price;
        }

    }
