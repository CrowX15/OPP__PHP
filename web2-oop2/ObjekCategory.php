<?php

require_once "Category.php";

    $objCategory = new Category();
    //untuk instan variabel tidak lagi menggunakan seperti contoh di bawah ini :
    //$objCategory->name = "hanphone";
    $objCategory->setName("Handphone");
    $objCategory->setExpensive(true);

    //Mengakses data
    echo " Name : {$objCategory->getName()}" . PHP_EOL;
    echo " Expensive : {$objCategory->isExpensive()}". PHP_EOL;