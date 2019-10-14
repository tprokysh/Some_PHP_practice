<?php
class GeometricFigure {
    public $type;
    public $color;
    public $size;
    public static $_color = "red";
    public function __construct($type, $size)
    {
        $this->type = $type;
        $this->color = self::$_color;
        $this->size = $size;
    }
    public function __destruct()
    {
        echo "Destruct object with type: $this->type<br>";
    }
    public function transformTo($figure) {
        $this->type = $figure->type;
        $this->color = $figure->color;
        $this->size = $figure->size;
    }
    public static function changeColor($color) {
        self::$_color = $color;
    }
}
$circle = new GeometricFigure("circle", 1);
$triangle = new GeometricFigure("triangle", 2);
GeometricFigure::changeColor("blue");
$circle1 = new GeometricFigure("circle", 1);
$triangle1 = new GeometricFigure("triangle", 2);
$square = new GeometricFigure("square", 3);
echo "<pre>";
print_r([$circle, $triangle, $circle1, $triangle1, $square]);
?>