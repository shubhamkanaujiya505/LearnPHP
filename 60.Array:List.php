<?php 

// $result = ["Apple", "Pea", "Orange","Grapes", "Pink", "Blue"]; 
// $result = [1,2,3,4,5,6,7]; 
$result = array("0" => "green", "2" => "red", "3" => "blue", "4" =>  "yellow", "5" => "green");

// list($a, $b, $c, $d, $e) = $result;
// list($a, $b, $c, , $e) = $result;
// list($a, $b, $c, $d, $e) = $result;
list($a[0], $b[2], $c[3], $d[4], $e[5]) = $result;

echo "value of a is :" . $a[0]. "<br>";
echo "value of b is :" .  $b[2] . "<br>";
echo "value of c is :" .  $c[3] . "<br>";
// echo "value of d is :" . [3] $d . "<br>";
echo "value of d is :" .  $d[4] . "<br>";
echo "value of e is :" .  $e[5] . "<br>";
?>