<?php
function calc($num1, $num2, $oper)
{
    if ($oper == "+")
        $sum = $num1 + $num2;
    else if ($oper == "-")
        $sum = $num1 - $num2;
    else if ($oper == "*")
        $sum = $num1 * $num2;
    else if ($oper == "/")
        $sum = $num1 / $num2;
    else
        $sum = 0;
    return $sum;
}
$var1 = 2;
$var2 = 4;
$var3 = "/";
echo calc($var1, $var2, $var3);
?>