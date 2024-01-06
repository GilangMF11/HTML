<?php
class Kendaraan {
    private $merk;
    private $roda;
    private $harga;
    private $warna;
    private $torsi;

    // Constructor
    public function __construct($merk, $roda, $harga, $warna, $torsi) {
        $this->merk = $merk;
        $this->roda = $roda;
        $this->harga = $harga;
        $this->warna = $warna;
        $this->torsi = $torsi;
    }

    // Setter dan Getter
    public function setMerk($merk) {
        $this->merk = $merk;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function setRoda($roda) {
        $this->roda = $roda;
    }

    public function getRoda() {
        return $this->roda;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function setTorsi($torsi) {
        $this->torsi = $torsi;
    }

    public function getTorsi() {
        return $this->torsi;
    }
}
?>
