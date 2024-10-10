<?php

    // Menggunakan kelas pada file Mobile.php
    require_once "Mobil.php";

    // membuat inisial variabel objek mobil satu
    $MobilSatu = new Mobil();


    //Menambahkan properti pada objek MobilSatu
    
    //$MobilSatu->nama = Null;
    //Akan terjadi error karena tidak di validasi null pada class.
    
    $MobilSatu->nama = "Avanza";
    
    $MobilSatu->merk = "Toyota";

    //$MobilSatu->warna = "Hitam";
    $MobilSatu->warna = null;
    //akan Valid karena sudah di deklarasi sebagai null pada class.

    $MobilSatu->tahun = 2019;

    $MobilSatu->kecepatan_Maksimal = 1300;

    //menampilkan informasi objek MobilSatu
    echo " Nama : $MobilSatu->nama". PHP_EOL;
    echo " Merk : $MobilSatu->merk". PHP_EOL;
    echo " Warna : $MobilSatu->warna". PHP_EOL;
    echo " Tahun : $MobilSatu->tahun". PHP_EOL;
    echo " Kecepatan Maksimal : $MobilSatu->kecepatan_Maksimal". PHP_EOL;

    //Mengakses function/method
    $MobilSatu->TambahKecpatan();

    //Mengakses function infoMobil()
    //$MobilSatu->InfoMobil(null);
    //Mengakses function infoMobil() dengan memiliki nilai, maka yang ditampilkan adalah properties dari funtion yang diakses pada saat ini 
    $MobilSatu->InfoMobil("Xenia");

    //Memanggil dan menampilkan constant
    echo Mobil::AUTHOR;
    //titik dua ganda { :: } digunakan untuk mengakses properti atau metode statis suatu kelas.

    //Menambahkan objek baru MobilDua
    $MobilDua = new Mobil();

    //Menambahkan properti pada objek MobilDua
    $MobilDua->nama = "Brio";
    $MobilDua->merk = "Honda";
    $MobilDua->warna = "Merah";
    $MobilDua->tahun = 2018;
    $MobilDua->kecepatan_Maksimal = 1000;
    
    //menampilkan informasi objek
    //var_dump($MobilSatu);
