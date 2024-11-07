<?php

class Mahasigma
{
    var int $nim;
    var string $nama;
    var int $nilai;

    public function __construct(int $nim, string $nama, int $nilai)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->nilai = $nilai;
    }

    public function hitungnilai()
    {
        if ($this->nilai > 70) {
            echo"saya lulus";
        } else{
            echo "saya tidak lulus";
        }
        
    }
}