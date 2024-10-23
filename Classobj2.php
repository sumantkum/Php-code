<?php

/// geter and seter
/*
class Fruit{
    public $name;
    public $color;
   
    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
 
    function set_color($color){
        $this->color = $color;
    }

    function get_color(){
        return $this->color;
    }
}

$obj1 = new Fruit();


$obj1->set_name("Apple");
$obj1->set_color("Red");

echo "Name of Fruit: ". $obj1->get_name() ."<br>";
echo "Color of fruit: ". $obj1->get_color() ."<br>";
*/


/*
//// Destructor 
class Fruit{
    public $name;
    public $color;
    function __construct($name){
        echo "Constructor body <br>";
        $this->name = $name;    
    }

    public function hello(){
        echo "Hello how are you my brother <br>";
        echo "Hello how are you my brother <br>";
        echo "Hello how are you my brother <br>";

    }
    function __destruct(){
        echo "The fruit is {$this->name} <br>";
    } 
}
$apple = new Fruit("Apple");
$apple->hello()
*/

/// this is 

class Fruit {
    // Properties
    public $name;
    public $color;
  
    // Methods
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
    function set_color($color) {
      $this->color = $color;//The $this keyword refers to the current object, and is only available inside methods.
    }
    function get_color() {
      return $this->color;
    }
  }
  
  $apple = new Fruit("Banana");               //Objects of a class are created using the new keyword.
  $apple->set_name('Apple');
  $apple->set_color('Red');
  echo "Name: " . $apple->get_name();
  echo "<br>";
  echo "Color: " . $apple->get_color();

?>