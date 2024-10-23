<?php

    abstract class Car{
        public $name;
        public function __construct($name){
            $this->name = $name;
        }
        abstract public function intro():string;

    }

    class Audi extends Car{

        public function intro():string{
            return "choose german quality!   i am  an $this->name!";
        }
    }

    class Volvo extends Car{
        public function intro(): string {
            return "Proud to be Swedish    i am a $this->name!";
        }
    }

    class Citroen extends Car{
        public function intro(): string{
            return "French extravagance i am a $this->name";
        }
    }

    $audi = new Audi("Audi");
    echo $audi->intro();
    echo "<br>";

    $volvo = new Volvo("Volvo");
    echo $volvo->intro();
    echo "<br>";

    $citroen = new Citroen("Citroen");
    echo $citroen->intro();


?>