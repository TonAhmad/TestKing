<?php
class bgundatar{
    var string $nama;
    var float $sisi;
    //persegi
    var float $panjang;
    var float $lebar;
    //segitiga
    var float $alas;
    var float $tinggi;
    //lingkaran
    var float $rusuk;
    //exception
    var float $luas;
    var float $keliling;
    var float $hasil;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->luas = 0;
    }

    public function hitungLuas()
    {
        $this->luas = $this->panjang * $this->lebar;
        return $this->luas;
    }
}