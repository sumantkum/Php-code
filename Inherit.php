<?php
/*
    interface Animal{
        public function makeSound();
    }
    class Dog extends Animal{
        public function makeSound(){
            echo "Woof woof!";
        }

    }
*/

/*
// Interface classes
interface Moveable {
    public function move();
}

interface Flyable {
    public function fly();
}

interface Swimmable {
    public function swim();
}

// Bird class implementing Moveable and Flyable
class Bird implements Moveable, Flyable {
    public function move() {
        echo "The bird is moving <br>";
    }

    public function fly() {
        echo "The bird is flying <br>";
    }
}

// Fish class implementing Moveable and Swimmable
class Fish implements Moveable, Swimmable {
    public function move() {
        echo "Fish is swimming <br>";
    }

    public function swim() {
        echo "The fish swims swiftly <br>";
    }
}

// Duck class implementing Moveable, Flyable, and Swimmable
class Duck implements Moveable, Flyable, Swimmable {
    public function move() {
        echo "The duck is moving <br>";
    }

    public function fly() {
        echo "The duck is flying <br>";
    }

    public function swim() {
        echo "The duck swims in the pond <br>";
    }
}

// Creating instances and calling methods
$bird = new Bird();
$bird->move();
$bird->fly();

$fish = new Fish();
$fish->move();
$fish->swim();

$duck = new Duck();
$duck->move();
$duck->fly();
$duck->swim();
*/
abstract class Car {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function intro();
}

class Audi extends Car {
    public function intro() {
        return "Choose German quality, I am an $this->name";
    }
}

class Volvo extends Car {
    public function intro() {
        return "Proud to be Swedish, I am a $this->name";
    }
}

class Citroen extends Car {
    public function intro( ) {
        return "French extravagance, I am a $this->name";
    }
}

// Create instances of each car
$audi = new Audi("Audi");
$volvo = new Volvo("Volvo");
$citroen = new Citroen("Citroen");

// Call the intro method for each car
echo $audi->intro() . PHP_EOL;  // Output: Choose German quality, I am an Audi
echo $volvo->intro() . PHP_EOL;  // Output: Proud to be Swedish, I am a Volvo
echo $citroen->intro() . PHP_EOL; // Output: French extravagance, I am a Citroen



?>