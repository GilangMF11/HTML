<?php

// Abstract class
abstract class Animal {
    // Abstract method
    abstract public function makeSound();

    // Regular method
    public function sleep() {
        echo "Zzz...\n";
    }
}

// Concrete subclass
class Cat extends Animal {
    // Implementation of abstract method
    public function makeSound() {
        echo "Meow!\n";
    }
}

// Concrete subclass
class Dog extends Animal {
    // Implementation of abstract method
    public function makeSound() {
        echo "Woof!\n";
    }
}

// Create objects
$cat = new Cat("Persia", "black");
$dog = new Dog("Bulldog", "brown");

// Call methods
$cat->makeSound(); // Output: Meow!
$cat->sleep();     // Output: Zzz...

$dog->makeSound(); // Output: Woof!
$dog->sleep();     // Output: Zzz...

?>
