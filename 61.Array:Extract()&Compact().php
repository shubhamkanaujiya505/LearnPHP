<?php 
$a = "brinjal";
// $result = array("a" => "green", "b" => "red", "c" => "blue", "d" =>  "yellow", "e" => "green");
$a = "red";
$b = "green";
$c = "yellow";
$d = "pink";

// extract($result);
// extract($result, EXTR_OVERWRITE);
// extract($result, EXTR_SKIP);
// extract($result, EXTR_PREFIX_SAME,"test");
// extract($result, EXTR_PREFIX_ALL,"test");
// extract($result, EXTR_PREFIX_ALL,"test");
$f = compact("a","b","c","d");
echo "<pre>";
print_r($f);


// echo "value of a is :" . $a. "<br>";
// // echo "value of b is :" .  $b . "<br>";
// echo "value of b is :" .  $test_a . "<br>";
// echo "value of c is :" .  $c . "<br>";
// echo "value of d is :" .  $d . "<br>";
// echo "value of e is :" .  $e . "<br>";

// echo "value of a is :" . $test_a. "<br>";
// echo "value of b is :" .  $test_b . "<br>";
// echo "value of c is :" .  $test_c . "<br>";
// echo "value of d is :" .  $test_d . "<br>";
// echo "value of e is :" .  $test_e . "<br>";

?>