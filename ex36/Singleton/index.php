<?php
class A {
    private static $_instance = null;

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}

    public static function getInstance() {
        if (is_null(self::$_instance)) {
            echo "Object created";
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}
$a = A::getInstance();
//$b = new A();
$b = A::getInstance();
echo "<br>";
var_dump(boolval($a === $b));
?>