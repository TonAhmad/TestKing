<?php
 include_once("rekening.php");

// Kelas Tabungan yang merupakan turunan dari Rekening
class Tabungan extends Rekening
{
    private $potonganBulanan;

    public function __construct($norek, $saldoAwal, $potonganBulanan)
    {
        parent::__construct($norek, $saldoAwal);
        $this->potonganBulanan = $potonganBulanan;
    }

    // Fungsi untuk memotong saldo dengan potongan bulanan
    public function potongBulanan()
    {
        if ($this->saldo >= $this->potonganBulanan) {
            $this->saldo -= $this->potonganBulanan;
            echo "Potongan bulanan sebesar Rp " . number_format($this->potonganBulanan, 2) . " telah dikenakan.\n";
        } else {
            echo "Saldo tidak mencukupi untuk potongan bulanan.\n";
        }
    }
}

// Kelas Deposit yang merupakan turunan dari Rekening
class Deposit extends Rekening
{
    private $bunga;

    public function __construct($norek, $saldoAwal, $bunga)
    {
        parent::__construct($norek, $saldoAwal);
        $this->bunga = $bunga;
    }

    // Fungsi untuk menambahkan bunga ke saldo
    public function tambahBunga()
    {
        $bungaJumlah = $this->saldo * ($this->bunga / 100);
        $this->saldo += $bungaJumlah;
        echo "Bunga sebesar " . $this->bunga . "% telah ditambahkan. Saldo sekarang: Rp " . number_format($this->saldo, 2) . "\n";
    }
}

// Contoh penggunaan:
$rekeningTabungan = new Tabungan("12345", 500000, 10000);
echo $rekeningTabungan->cekSaldo();
echo "<br>";
$rekeningTabungan->menabung(150000);
echo "<br>";
$rekeningTabungan->tarikTabungan(100000);
echo "<br>";
$rekeningTabungan->potongBulanan();
echo "<br>";
echo $rekeningTabungan->cekSaldo();
echo "<br>";

echo "\n";
echo "<br>";

$rekeningDeposit = new Deposit("54321", 1000000, 5);
echo $rekeningDeposit->cekSaldo();
echo "<br>";
$rekeningDeposit->menabung(200000);
echo "<br>";
$rekeningDeposit->tambahBunga();
echo "<br>";
$rekeningDeposit->tarikTabungan(300000);
echo "<br>";
echo $rekeningDeposit->cekSaldo();