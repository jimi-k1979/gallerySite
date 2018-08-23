<?php

class Cars {

// lecture 10 - Constructors and destructors
  public $wheel_count = 4;

  static $door_count = 4;
  function __construct() {
    echo $this->wheel_count;
    echo self::$door_count++;
  }
  
  function __destruct() {
    echo self::$door_count--;
  }

// lecture 9 - referencing parent class with static
//  static $wheel_count = 4;
//
//  static function car_detail() {
//    return self::$wheel_count;
//  }
  
// lecture 8 - getters and setters
//  private $door_count = 4;
//
//  function get_values() {
//    echo $this->door_count;
//  }
//
//  function set_values() {
//    $this->door_count = 10;
//  }

// lecture 7 - static modifier
//  static $wheel_count = 4;
//  static $door_count = 4;
//
//  static function car_detail() {
//    echo self::$wheel_count."<br>";
//    echo self::$door_count."<br>";
//  }

// lecture 6 - access control
//  public $wheel_count = 4;
//  private $door_count = 4;
//  protected $seat_count = 2;
//
//  function car_detail() {
//    echo $this->wheel_count."<br>";
//    echo $this->door_count."<br>";
//    echo $this->seat_count."<br>";
//  }
  
// lecture 5 - inheritance
//  var $wheels = 4;
//  
//  function greeting() {
//    return "hello<br>";
//  }
  
// lecture 4  - defining properties
//  var $wheel_count = 4;
//  var $door_count = 4;
//
//  function car_detail() {
//    return "This car has " . $this->wheel_count . " wheels";
//  }

// lectures 1-3 - defining a class, method and instatiating
//  function greeting() {
//    echo "Hello Student";
//  }

// lecture 2 - defining a method
//  function greeting2() {
//    
//  }
  
}

// lecture 10 - constructors and destructors
$bmw = new Cars();

$mercedes = new Cars();

unset ($bmw);


// lecture 9 - referencing parent methods
//class Trucks extends Cars {
//  
//  static function display() {
//    
//    echo parent::car_detail();
//    
//  }
//}
//
//Trucks::display();

// lecture 8 - getters and setters
//$bmw = new Cars();
//
//$bmw->get_values();
//$bmw->set_values();
//echo "<br>";
//$bmw->get_values();


// lecture 7 - static modifier
//$bmw = new Cars();
//// echo $bmw->wheel_count;
////echo $bmw->door_count; // doesn't work
//echo Cars::$door_count;
//
//Cars::car_detail();

// lecture 6 - access control modifier
//$bmw = new Cars();
//
//// echo $bmw->wheel_count;
//// echo $bmw->door_count; // doesn't work
//// echo $bmw->seat_count; // doesn't work
//$bmw->car_detail();

// lecture 5 - class inheritance
//class Trucks extends Cars {
//  
//}

//$bmw = new Cars();
//$tacoma = new Trucks();
//
//echo $tacoma->wheels;


// lecture 4 - defining properties
//$bmw = new Cars();
//$mercedes = new Cars();
//echo $bmw->wheel_count = 10;
//echo "<br>";
//echo $mercedes->wheel_count;
//echo "<br>";
//echo $mercedes->car_detail();

// lecture 3 - instantiating a class
//$bmw = new Cars();
//$mercedes = new Cars();
//
//$bmw->greeting();

// lecture 2 - defining methods
//$the_methods = get_class_methods('Cars');
//
//print_r($the_methods);

// lecture 1 - defining a class
//$my_classes = get_declared_classes();
//
//foreach ($my_classes as $class) {
//  echo $class."<br>";
//}
?>