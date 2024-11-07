<?php

class Pegawai {
    public $nama;
    public $gajiPokok;

    public function __construct($nama, $gajiPokok) {
        $this->nama = $nama;
        $this->gajiPokok = $gajiPokok;
    }

    public function infoPegawai() {
        echo "Nama: {$this->nama}, Gaji Pokok: {$this->gajiPokok}<br>";
    }
}

class KaryawanTetap extends Pegawai {
    public $tunjangan;

    public function __construct($nama, $gajiPokok, $tunjangan) {
        parent::__construct($nama, $gajiPokok);
        $this->tunjangan = $tunjangan;
    }

    public function infoTunjangan() {
        echo "Tunjangan: {$this->tunjangan}<br>";
    }
}

class Freelance extends Pegawai {
    public $jamKerja;
    public $upahPerJam;

    public function __construct($nama, $jamKerja, $upahPerJam) {
        parent::__construct($nama, 0);
        $this->jamKerja = $jamKerja;
        $this->upahPerJam = $upahPerJam;
    }

    public function hitungGaji() {
        $totalGaji = $this->jamKerja * $this->upahPerJam;
        echo "Jam Kerja: {$this->jamKerja}, Upah per Jam: {$this->upahPerJam}<br>";
        echo "Total Gaji: {$totalGaji}<br>";
    }
}

$karyawanTetap = new KaryawanTetap("Ali", 5000000, 1000000);
$karyawanTetap->infoPegawai();
$karyawanTetap->infoTunjangan();

echo "<br>";

$freelance = new Freelance("Budi", 50, 100000);
$freelance->infoPegawai();
$freelance->hitungGaji();

?>
