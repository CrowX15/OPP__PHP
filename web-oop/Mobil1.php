<?php

    //Membuat Sebuah Kelas
    class Mobil
    {
        //deklarasi variabel            
        var String $nama;
        var ?String $merk = null;
        var int $tahun;

        public function __construct(String $nama, ?String $merk) 
        {
            $this->nama = $nama;
            $this->merk = $merk;
        }

        public function InfoMobil()
        {
            return "$this->nama, $this->merk, $this->tahun;";
        }

    }
