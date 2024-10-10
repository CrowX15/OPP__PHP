<?php

// Menggunakan kelas pada file Mahasiswa.php
require_once "Tugas.php";

// Membuat objek Mahasiswasatu
$mahasiswaSatu = new Mahasiswa("Fareza Dava Rabbani", "23.240.0057", "3P41", "Teknik Informatika", 3.57, "081333344411");
// Membuat objek Mahasiswadua tanpa nomor telepon
$mahasiswaDua = new Mahasiswa("Hendi Mulyo Wicaksono", "23.240.0057", "3P41", "Teknik Informasi", 3.9,null);

// Menampilkan informasi kedua mahasiswa
echo $mahasiswaSatu->infoMahasiswa() . PHP_EOL;
echo $mahasiswaDua->infoMahasiswa() . PHP_EOL;
