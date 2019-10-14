<?php
$myBirthUnix = mktime(0,0,0,4,17,2000);
echo "Unixtime myBirthUnix: $myBirthUnix";
$myBirth = date("H:i:s d.m.Y", $myBirthUnix);
echo "<br>";
echo "Date myBirth: $myBirth";
echo "<hr>";
$myWifeBirthUnix = mktime(0,0,0,6,27,2000);
echo "Unixtime myWifeBirthUnix: $myWifeBirthUnix";
$myWifeBirth = date("H:i:s d.m.Y", $myWifeBirthUnix);
echo "<br>";
echo "Date myWifeBirth: $myWifeBirth";
?>