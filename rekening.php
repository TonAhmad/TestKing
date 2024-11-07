<?php

// Kelas induk Rekening
class Rekening
{
    protected $norek;
    protected $saldo;

    public function __construct($norek, $saldoAwal = 0)
    {
        $this->norek = $norek;
        $this->saldo = $saldoAwal;
    }

    // Fungsi untuk menabung
    public function menabung($jumlah)
    {
        if ($jumlah > 0) {
            $this->saldo += $jumlah;
            echo "Menabung berhasil! Saldo sekarang: Rp " . number_format($this->saldo, 2) . "\n";
        } else {
            echo "Jumlah harus lebih besar dari 0.\n";
        }
    }

    // Fungsi untuk cek saldo
    public function cekSaldo()
    {
        return "Saldo anda adalah: Rp " . number_format($this->saldo, 2) . "\n";
    }

    // Fungsi untuk menarik tabungan
    public function tarikTabungan($jumlah)
    {
        if ($jumlah > 0 && $jumlah <= $this->saldo) {
            $this->saldo -= $jumlah;
            echo "Penarikan berhasil! Saldo sekarang: Rp " . number_format($this->saldo, 2) . "\n";
        } elseif ($jumlah > $this->saldo) {
            echo "Saldo tidak cukup.\n";
        } else {
            echo "Jumlah harus lebih besar dari 0.\n";
        }
    }
}
