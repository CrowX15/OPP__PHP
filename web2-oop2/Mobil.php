<?php

    class Mobil
    {
        var String $nama;
        var String $brand;
        var int $tahun;

        function __construct(String $nama, String $brand, int $tahun)
        {
            $this->nama = $nama;
            $this->brand = $brand;
            $this->tahun = $tahun;
        }

        function InfoMobil()
        {
            return " Nama Mobil : $this->nama " . PHP_EOL
            ." Brand : $this->brand ". PHP_EOL
            ." Tahun : " . $this->tahun . PHP_EOL;
        }
    }