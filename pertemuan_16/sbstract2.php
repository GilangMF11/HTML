<?php 

// Progran Perpuastakan
class Perputakaan {

    // Property
    private $IdBuku;
    private $author;
    private $buku;
    private $jml; 

    // Method
    function __construct($IdBuku, $author, $buku, $jml){
        $this->IdBuku = $IdBuku;
        $this->author = $author;
        $this->buku = $buku;
        $this->jml = $jml;
    }

    // Method SetAuthor
    function setAuthor($author){
        $this->author = $author;
    }
    // Method GetAuthor
    function getAuthor(){
        return $this->author;
    }

    // Method Jumlah Buku
    function setJmlBuku($jml){
        $this->jml = $jml;
    }

    // Method get Jumlah Buku 
    function getJmlBuku(){
        return $this->jml;
    }
}

$perpus = new Perputakaan(1, "Gilang", "Peograman Website", 10);

// Fungsi abstrac yaitu untuk membatasi yang akan diperintah sesuai dengan kebutuhan
echo "Author : " . $perpus->getAuthor() . "Jumlah Buku : " . $perpus->getJmlBuku() . PHP_EOL;

?>