<?php
namespace circle_and_cylinder\Circle;

class Circle {
    protected $radius;
    protected $color;

    public function __construct($radius, $color) {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function getColor() {
        return $this->color;
    }

    public function calculateArea() {
        return pi() * pow($this->getRadius(),2);
    }

    public function calculatePerimeter() {
        return pi() * $this->getRadius() * 2;
    }

    public function toString() {
        return "Radius: " . $this->getRadius() . "<br> Color: " . $this->getColor() . "<br>Area: " . $this->calculateArea() . "<br>Perimeter: " . $this->calculatePerimeter();
    }
}
