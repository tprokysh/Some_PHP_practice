<?php
class GeometricFigure {
    public $type;
    public $color;
    public $size;

    public function transformTo($figure) {
        $this->type = $figure->type;
        $this->color = $figure->color;
        $this->size = $figure->size;
    }
}
$circle = new GeometricFigure();
$triangle = new GeometricFigure();
$square = new GeometricFigure();
$circle->type = "circle";
$circle->color = "red";
$circle->size = 3;
$triangle->type = "triangle";
$triangle->color = "green";
$triangle->size = 2;
$square->type = "square";
$square->color = "blue";
$square->size = 1;
echo "<pre>";
print_r($circle);
print_r($triangle);
print_r($square);
echo "<hr>";
$circle->transformTo($triangle);
print_r($circle);
?>