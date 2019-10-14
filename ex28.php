<?php
class GeometricFigure {
    public $type;
    public $color;
    public $size;
    public static $_color = "red";
    public const P = 3.14;
    public function __construct($type, $size)
    {
        $this->type = $type;
        $this->color = self::$_color;
        $this->size = $size;
    }
    public function __destruct()
    {
//        echo "Destruct object with type: $this->type<br>";
    }
    public function transformTo($figure) {
        $this->type = $figure->type;
        $this->color = $figure->color;
        $this->size = $figure->size;
    }
    public static function changeColor($color) {
        self::$_color = $color;
    }
    public function getP() {
        return self::P;
    }
}
$c1 = new GeometricFigure("circle", 1);
$c2 = $c1;
$c3 = new GeometricFigure("triangle", 1);

var_dump(boolval($c1 == $c2));
echo "<br>";
var_dump(boolval($c1 === $c2));
echo "<br>";
var_dump(boolval($c1 == $c2));
echo "<br>";
//$c1->P;
echo $c1->getP();
?>