<?php 

class Mobil {
    private $warna;
    private $merk;

    public function __construct($warna, $merk){
        $this->warna = $warna;
        $this->merk = $merk;
    }

    function setWarna ($warna) {
        $this->warna = $warna;
    }

    function getWarna () {
        return $this->warna;
    }

    function setMerk ($merk) {
        $this->merk = $merk;
    }

    function getMerk () {
        return $this->merk;
    }
}

$mobil = new Mobil("Merah", "Toyota");
echo "Merek Mobil : " . $mobil->getMerk() . " Memiliki Warna " . $mobil->getWarna() . PHP_EOL;
?>