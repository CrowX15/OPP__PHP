<?php
    require_once "Mobil.php";
    require_once "MobilSport.php";

    // objek dari class mobil
    $avanza = new Mobil("Avanza","Toyota",2020);
    echo $avanza->InfoMobil(). PHP_EOL;

    // objek dari class mobil sport
    $supra = new MobilSport("Supra","Toyota",2021);
    echo $supra->InfoMobil();
    echo $supra->JalankanTurbo();