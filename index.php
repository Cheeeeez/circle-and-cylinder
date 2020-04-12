<?php
include_once "Circle.php";
include_once "Cylinder.php";

$circle = new circle_and_cylinder\Circle\Circle(3, "black");
echo "Circle: <br>" . $circle->toString();
echo "<br><br>";
$cylinder = new circle_and_cylinder\Cylinder\Cylinder(3, "blue", 4);
echo "Cylinder: <br>" . $cylinder->toString();
