<?php
//class
class Fruit {
  // Properties
  public $name;
  public $color;

  //Aksi
  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }

  function set_color($color) {
    $this->color = $color;
  }

  function get_color() {
    return $this->color;
  }


}

//object
//$apple = new Fruit();
//$banana = new Fruit();


$apple->set_name('Apple');
$banana->set_name('Banana');

$apple->set_color('Merah');
$banana->set_color('Kuning');

echo $apple->get_name();
echo "\n";
echo $banana->get_name();
echo "\n";
echo $apple->get_name() . " Berwarna " . $apple->get_color();
echo "\n";
echo $apple->get_color();
echo "\n";

?>