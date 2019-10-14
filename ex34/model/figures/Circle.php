<?php
namespace model\figures;
use interfaces\ICircle;

class Circle implements ICircle {
    public function getName()
    {
        echo __CLASS__ . "<br>";
    }
}
?>