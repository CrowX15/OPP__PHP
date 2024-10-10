<?php

// Membuat Sebuah Kelas Mahasiswa
class Mahasiswa
{
    // Deklarasi variabel (properti)
    public String $nama;
    public String $NIM;
    public String $kelas;
    public String $jurusan;
    public float $IPK;
    public ?String $no_telp = null;

    // Konstruktor untuk inisialisasi properti
    public function __construct(String $nama, String $NIM, String $kelas, String $jurusan, float $IPK, ?String $no_telp = null)
    {
        $this->nama = $nama;
        $this->NIM = $NIM;
        $this->kelas = $kelas;
        $this->jurusan = $jurusan;
        $this->IPK = $IPK;
        $this->no_telp = $no_telp;
    }

    // Fungsi untuk menampilkan informasi mahasiswa dalam format menurun
    public function infoMahasiswa(): string
    {
        return " Nama: $this->nama \n NIM: $this->NIM \n Kelas: $this->kelas \n" 
        . " Jurusan: $this->jurusan \n IPK: $this->IPK \n No. Telp: $this->no_telp \n";
    }

}
