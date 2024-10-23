
<?php

    class Person{
        public $name;
        public $age;

        public function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;

        }

        public function displayPerson(){
            echo "Name: ".$this->name. "<br>";
            echo "Age: ".$this->age. "<br>";
        }
    }

    $obj1 = new Person("Sumant kumar", 52);
    $obj2 = new Person("Hemant kumar",25);

    $obj1->displayPerson();
    $obj2->displayPerson();

?>