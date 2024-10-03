<?php

class Siswa
{
    // deklarasikan atribut-atribut kelas Siswa
    public $nama;
    private $nisn;
    private $alamat;
    private $jurusan;
    private $tanggalLahir;
    
    // definisikan metode konstruktor, setter ,dan getter
    public function __construct($nama, $nisn, $alamat, $jurusan, $tanggalLahir){
        $this->nama = $nama;
        $this->nisn = $nisn;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
        $this->tanggalLahir = $tanggalLahir;
    }

    public function setNama($nama){
        $this->nama = $nama;
    }
    public function setNisn($nisn){
        $this->nisn = $nisn;
    }
    public function setAlamat($alamat){
        $this->alamat = $alamat;
    }
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
    public function setTanggallahir($tanggalLahir){
        $this->tanggalLahir = $tanggalLahir;
    }
    public function getNama(){
        return $this->nama;
    }
    public function getNisn(){
        return $this->nisn;
    }
    public function getAlamat(){
        return $this->alamat;
    }
    public function getJurusan(){
        return $this->jurusan;
    }
    public function getTanggallahir(){
        return $this->tanggalLahir;
    }
    // buat metode untuk menghitung umur siswa
    public function hitungUmur()
    {
        $tanggal_lahir = explode("-", $this->tanggalLahir);
        $tahun_lahir = $tanggal_lahir[2];
        $tahun_sekarang = date("Y");
        $umur = $tahun_sekarang - $tahun_lahir;
        return $umur;
    }
}

// Buat dua buah objek siswa
$siswa_1 = new Siswa("Bambang", "1234", "Loa Bakung", "PPLG", "27-11-2006");
$siswa_2 = new Siswa("Bahrun", "1235", "Air Putih", "PPLG", "13-01-2007");

// Contoh output:
if ($siswa_1->hitungUmur() > $siswa_2->hitungUmur()) {
    echo $siswa_1->getNama() . " lebih tua dibandingkan " . $siswa_2->getNama() . ".";
} elseif ($siswa_1->hitungUmur() < $siswa_2->hitungUmur()) {
    echo $siswa_2->getNama() . " lebih tua dibandingkan " . $siswa_1->getNama() . ".";
} else {
    echo $siswa_1->getNama() . " dan " . $siswa_2->getNama() . " sama tua.";
}