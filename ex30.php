<?php
class GeometricFigure {
    private $p1;
    private $p2;
    protected $p3;
    protected $p4;
    public $p5;
    public $p6;

    public function getP1() {
        return $this->p1;
    }
    public function setP1($p1) {
        $this->p1 = $p1;
    }
    public function getP2() {
        return $this->p2;
    }
    public function setP2($p2) {
        $this->p2 = $p2;
    }
}

class Square extends GeometricFigure {
    public function getP3() {
        return $this->p3;
    }
    public function setP3($p3) {
        $this->p3 = $p3;
    }
    public function getP4() {
        return $this->p4;
    }
    public function setP4($p4) {
        $this->p4 = $p4;
    }
}

class Circle extends GeometricFigure {
    public function getP3() {
        return $this->p3;
    }
    public function setP3($p3) {
        $this->p3 = $p3;
    }
    public function getP4() {
        return $this->p4;
    }
    public function setP4($p4) {
        $this->p4 = $p4;
    }
}

class Triangle extends GeometricFigure {
    public function getP3() {
        return $this->p3;
    }
    public function setP3($p3) {
        $this->p3 = $p3;
    }
    public function getP4() {
        return $this->p4;
    }
    public function setP4($p4) {
        $this->p4 = $p4;
    }
}
$first = new Triangle();
$first->setP1(5);
echo $first->getP1();
?>