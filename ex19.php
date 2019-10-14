<?php
function sayHelloWorld () {
    echo "Hello world!";
}
sayHelloWorld();
echo "<hr>";
function fib ($num) {
    if ($num < 3)
        return $num;
    else
        return fib($num - 1) + fib($num - 2);
}
print_r(fib(5));
echo "<hr>";
$func = function () {
    return $arr = [];
};
print_r($func());
echo "<hr>";
function sayWorld() {
    echo "world";
}
function sayHello() {
    echo "Hello" . " ";
    return sayWorld();
}
sayHello();
?>