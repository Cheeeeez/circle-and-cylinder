<?php
namespace circle_and_cylinder\Cylinder;
use circle_and_cylinder\Circle\Circle;
class Cylinder extends Circle {
    public $height;
    public function __construct($radius, $color, $height) {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function getHeight() {
        return $this->height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume() {
        return parent::calculateArea() * $this->height;
    }

    public function toString() {
        return "Radius: " . $this->getRadius() . "<br>Color: " . $this->getColor() . "<br>Height: " . $this->getHeight() . "<br>Area: " . $this->calculateArea() . "<br>Volume: " . $this->calculateVolume();
    }
}