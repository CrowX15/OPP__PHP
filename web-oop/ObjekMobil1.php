<?php

// Menggunakan kelas pada file Mobil.php
require_once "Mobil1.php"; 

$MobilSatu = new Mobil("Avanza", "Toyota");
$MobilSatu->tahun = 2019;

$MobilDua = new Mobil("Brio", null);
$MobilDua->tahun = 2020;

echo $MobilSatu->InfoMobil() . PHP_EOL;
echo $MobilDua->InfoMobil();
