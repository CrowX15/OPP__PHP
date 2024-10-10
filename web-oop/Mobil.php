<?php

    //Membuat Sebuah Kelas
    class Mobil
    {
        //deklarasi variabel

        //constant adalah data yang tidak bisa diubah
        const AUTHOR = "Fareza Dava Rabbani | 0057";

        var String $nama;

        //Default Properties Value 
        //var String $merk = "Toyota";
        var String $merk;

        //Nullable Properties 
        var ?String $warna = null;

        var int $tahun;
        
        var int $kecepatan_Maksimal;

        function TambahKecpatan()
        {
            echo "Kecepatan Bertambah ! ";
        }

        function InfoMobil(?string $nama)
        {
            // Ketika kondisi jika parameter memiliki nilai kosong atau tidak ada akan di tampilkan properti dari objek
            if (is_null($nama))
            {
                //Jika kodisi null atau kosong nilaimya maka akan di jalankan.
                echo "Nama Mobil adalah {$this->nama}" . PHP_EOL;
            }
            else
            {
                // Jika kondisi tidak null maka kode ini akan di jalankan
                echo "Mobil Anda adalah $nama". PHP_EOL;
            }
        }

    }
