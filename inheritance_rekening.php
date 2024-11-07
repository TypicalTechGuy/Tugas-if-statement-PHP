<?php
class Rekening
{
    var $noRekening;
    var $saldo;

    function __construct($noRekening, $saldo) {
        $this->noRekening = $noRekening;
        $this->saldo = $saldo;
    }

    function getBalance() {
        return $this->saldo;
    }

    function deposit($amount){
        if($amount > 0) {
            $this->saldo += $amount;
            echo "Uang terdeposit: Rp {$amount}.<br>Saldo terbaru: Rp {$this->saldo}.<br>";
        } else {
            echo "Jumlah deposit invalid!";
        }
    }

    function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->saldo) {
            $this->saldo -= $amount;
            echo "Uang tertarik: Rp {$amount}.<br>Saldo terbaru: Rp {$this->saldo}.<br>";
        } else {
            echo "Saldo tidak cukup untuk penarikan!";
        }
    }
}

class RekeningTabungan extends Rekening {
    private $bunga;

    function __construct($noRekening, $saldo, $bunga) {
        parent::__construct($noRekening, $saldo);
        $this->bunga = $bunga;
    }

    function calculateBunga() {
        $bunga = $this->saldo * $this->bunga / 100;
        echo "Bunga: Rp {$bunga}.<br>";
        return $bunga;
    }

    function addBunga() {
        $bunga = $this->calculateBunga();
        $this->deposit($bunga);
    }
}

class RekeningDeposito extends Rekening {
    private $maturityDate;

    function __construct($noRekening, $saldo, $maturityDate) {
        parent::__construct($noRekening, $saldo);
        $this->maturityDate = $maturityDate;
    }

    function checkMaturity(){
        $today = date("Y-m-d");
        if($today >= $this->maturityDate) {
            echo "Deposit telah jatuh tempo.<br>";
        } else {
            echo "Deposit jatuh tempo pada tanggal {$this->maturityDate}.<br>";
        }
    }

    function withdraw($amount) {
        $today = date("Y-m-d");
        if ($today >= $this->maturityDate) {
            parent::withdraw($amount);
        } else {
            echo "Tidak bisa menarik sebelum tanggal tempo: {$this->maturityDate}.<br>";
        }
    }
}

$tabungan = new RekeningTabungan("10001", "5000000", "3.5");
$tabungan->deposit(1000000);
$tabungan->addBunga();

$deposito = new RekeningDeposito("10002", "7000000", "2024-11-05");
$deposito->checkMaturity();
$deposito->withdraw(200000);
?>