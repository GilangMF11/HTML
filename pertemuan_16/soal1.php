<?php

// Parent class
class Animal {
    // Properties
    protected $kaki;
    protected $jenis;

    // Constructor
    public function __construct($kaki, $jenis) {
        $this->kaki = $kaki;
        $this->jenis = $jenis;
    }

    // Method untuk mendapatkan suara (didefinisikan di subclass)
    public function getSuara() {
        return "Suara binatang tidak diketahui";
    }
}

// Child class 1: Kucing
class Kucing extends Animal {
    // Constructor
    public function __construct() {
        parent::__construct(4, "Kucing");
    }

    // Override method getSuara
    public function getSuara() {
        return "Meow!";
    }
}

// Child class 2: Ayam
class Ayam extends Animal {
    // Constructor
    public function __construct() {
        parent::__construct(2, "Ayam");
    }

    // Override method getSuara
    public function getSuara() {
        return "Kukuruyuk!";
    }
}

// Child class 3: Kambing
class Kambing extends Animal {
    // Constructor
    public function __construct() {
        parent::__construct(4, "Kambing");
    }

    // Override method getSuara
    public function getSuara() {
        return "Mbek!";
    }
}

// Child class 4: Sapi
class Sapi extends Animal {
    // Constructor
    public function __construct() {
        parent::__construct(4, "Sapi");
    }

    // Override method getSuara
    public function getSuara() {
        return "Moo!";
    }
}

// Penggunaan contoh
$kucing = new Kucing();
$ayam = new Ayam();
$kambing = new Kambing();
$sapi = new Sapi();

// Menampilkan suara sesuai nama binatangnya
echo "Kucing: " . $kucing->getSuara() . PHP_EOL;
echo "Ayam: " . $ayam->getSuara() . PHP_EOL;
echo "Kambing: " . $kambing->getSuara() . PHP_EOL;
echo "Sapi: " . $sapi->getSuara() . PHP_EOL;

?>
