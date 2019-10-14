<?php
class A {
    public static $c = "Hello";
    public function sayHello()
    {
        return self::$c;
    }
    public function sayHelloStatic() {
        return static::$c;
    }
}

class B extends A {
    public static $c = " world";
    public function __construct()
    {
        echo "Hello world";
    }
}
$b = new B();
$clonedB = clone $b;
echo "<br>";
echo $b->sayHello();
echo $b->sayHelloStatic();
echo "<br>";
$a = new A();
echo $serializedObj = serialize($b);
echo "<br>";
echo $serializedObj = base64_encode(serialize($b));
echo "<br>";
$unserializedObj = unserialize(base64_decode("TzoxOiJCIjowOnt9"));
echo $unserializedObj->sayHello();
echo $unserializedObj->sayHelloStatic();
?>