<?php
$var = "abcdefgh";
if (strlen($var) > 10)
    $var = substr($var, 0, 10);
$var = str_replace(array("a", "b", "c", "d", "e", "f", "g"), "", $var);
echo $var;
?>