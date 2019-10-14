<?php
$arr = [4, 2, 6, 8, 3, 9, 15];
sort($arr);
$arr += array_fill(count($arr) - 1, count($arr), 1 );
print_r($arr);
?>