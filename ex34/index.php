<?php
include "autoloader.php";
use model\animals\Frog;
use model\cars\BMW;
use model\figures\Circle;


$p1 = new Frog();
$p1->getName();
$p2 = new BMW();
$p2->getName();
$p3 = new Circle();
$p3->getName();
?>