<?php
class GeometricFigure {
    public $type;
    public $color;
    public $size;
    public const P = 3.14;

    public function __construct($type, $size)
    {
        $this->type = $type;
        $this->color = self::$_color;
        $this->size = $size;
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
    public function draw() {
        var_dump($this);
    }
}

class Square extends GeometricFigure {
    public $p1;
    public $p2;
    public $p3;

    public function __construct($size)
    {
        parent::__construct("square", $size);
    }
}

class Circle extends GeometricFigure {
    public $p1;
    public $p2;
    public $p3;

    public function __construct($size)
    {
        parent::__construct("circle", $size);
    }
}

class Triangle extends GeometricFigure {
    public $p1;
    public $p2;
    public $p3;

    public function __construct($size)
    {
        parent::__construct("triangle", $size);
    }
}
$circle = new Circle(1);
$circle->draw();
echo "<br>";
$square = new Square(2);
$square->draw();
echo "<br>";
$triangle = new Triangle(1);
$triangle->draw();
echo "<br>";