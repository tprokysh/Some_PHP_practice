<?php
class GeometricFigure {
    public function getClassName() {
        return __CLASS__;
    }
}

class Square extends GeometricFigure {
    public function getClassName() {
        return "this GeometricFigure is " . __CLASS__;
    }
}

class Circle extends GeometricFigure {
    public function getClassName() {
        return "this GeometricFigure is " . __CLASS__;
    }
}

class Triangle extends GeometricFigure {
    public function getClassName() {
        return "this GeometricFigure is " . __CLASS__;
    }
}

$square = new Square();
echo $square->getClassName();
echo "<br>";
$figure = new GeometricFigure();
echo $figure->getClassName();
?>