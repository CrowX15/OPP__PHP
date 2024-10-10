<?php

    interface HasBrand
    {
        function getBrands(): String;
    }

    interface IsMaintenance
    {
        function isMaintenance(): bool;
    }

    //Menyatakan bahwa care merupakan turunan dari class Hasbrand, dan menambahkan 
    //function getBrand() 

    interface Car
    {
        function drive(): void;
        function getTire(): int;
    }

    //implementasi interface pada class childnya
    //class Avanza implements Car

    //Menambakan parent isMaintenance dan function isMantenance()
    class Avanza implements Car,IsMaintenance 
    {
        public function drive(): void
        {
            echo " Drive Avanza" . PHP_EOL;
        }

        public function getTire(): int
        {
            return 4;
        }

        public function getBrand(): string
        {
            return "Toyota";
        }

        public function isMaintenance(): bool
        {
            return false;
        }
    }