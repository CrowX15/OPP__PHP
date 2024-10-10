<?php

    class MobilSport extends Mobil
    {
        public $turbo = false;
        
        function JalankanTurbo()
        {
            $this->turbo = true;
            return " Jalankan Turbo !";
        }

        //Function overriding adalah kemampuan mendeklarasikan ulang function di child 
        //class, yang sudah ada di parent class Saat kita melakukan proses overriding tersebut, 
        //secara otomatis ketika kita  membuat object dari class child, function yang di class parent 
        //tidak bisa diakses lagi 
        function InfoMobil()
        {
            return " Nama Mobil : $this->nama " . PHP_EOL
            ." Brand : $this->brand ". PHP_EOL
            ." Tahun : " . $this->tahun . PHP_EOL
            ." Turbo : " . $this->turbo = true . PHP_EOL;
        }
    }