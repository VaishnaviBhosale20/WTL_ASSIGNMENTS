<?php
// Static
class Counter {
    public static $count = 0;
    static function increment() {
        self::$count++;
    }
}
Counter::increment();
echo "Static Count: " . Counter::$count . "<br>";

// Interface
interface Shape {
    public function area();
}
class Circle implements Shape {
    public $radius;
    function __construct($r) {
        $this->radius = $r;
    }
    public function area() {
        return pi() * $this->radius * $this->radius;
    }
}
$circle = new Circle(5);
echo "Area of circle: " . $circle->area() . "<br>";



// Inheritance & Polymorphism
class Animal {
    function sound() {
        echo "Animal Sound<br>";
    }
}
class Dog extends Animal {
    function sound() {
        echo "Bark<br>";
    }
}
$dog = new Dog();
$dog->sound();



// Abstract Class
abstract class Vehicle {
    abstract function move();
}
class Car extends Vehicle {
    function move() {
        echo "Car is moving<br>";
    }
}
$car = new Car();
$car->move();
?>
