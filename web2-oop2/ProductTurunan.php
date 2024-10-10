<?php

//Begitu juga ketika membuat class turunan, variabel dengan visibility private tidak bisa

    class ProductTurunan extends Product
    {
        public function info()
        {
            echo " Name $this->name" . PHP_EOL;
            echo " Price $this->price" . PHP_EOL;
        }
    }