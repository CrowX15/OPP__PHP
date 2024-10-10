<?php 

    //Mengkoneksikan ke product.php
    require_once "product.php";
    //Mengkoneksikan sumberdaya yang ada di ProductTurunan
    require_once "ProductTurunan.php";

    $product = new Product("Appel",200000);

    //Menampilkan informasi
    echo $product->getName() . PHP_EOL;
    echo $product->getPrice() . PHP_EOL;
    
    //ada error karena variabel yang akan ditampilkan memiliki visibility private, agar bisa menampilkan 
    //info name dan price salah satu caranya adalah bisa membuat function getName dan getPrice yang memiliki 
    //visibility public pada class product 

    //Membuat objek dari class tutunan dan nemampilkan informasi name dan price 
    $product2 = new ProductTurunan("Nanas",30000);
    $product2->info();